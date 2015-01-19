<?php
	include_once '../../sys_ch/core/init.inc.php';
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	$page_title = "English in Dublin online sudoko game";
	include_once 'header.php';
?>

<?php
	$errors = '';
	if(isset($_SESSION['user']))
	{
		mysql_select_db(DB_NAME, $db) or die(mysql_error());
		$sql = "SELECT user_id FROM sudoku_log WHERE user_id='".$_SESSION['user']['id']."'";
		$result = mysql_query($sql) or die(mysql_error());
		$row =  mysql_fetch_row($result);
		
		if(empty($row)){
			$sql = "INSERT INTO sudoku_log VALUES ('".$_SESSION['user']['id']."',0);";
			$result = mysql_query($sql) or die(mysql_error());
		}
		if( $_SERVER['REQUEST_METHOD'] == 'POST' )
		{
			if ($_POST['token'] == $_SESSION['token'])
			{
				if( isset($_POST['level']))
				{
					if($_POST['level']=='Easy')
						$_SESSION['difficulty'] = 35;
					elseif($_POST['level']=='Medium')
						$_SESSION['difficulty'] = 55;
					elseif($_POST['level']=='Hard')
						$_SESSION['difficulty'] = 65;
					
					init_values();
					show_game($_SESSION['container'],$_SESSION['map'],$errors);
				}
				elseif(isset($_POST['check']))
				{
					
					$count = 1;
					foreach($_SESSION['answers'] as $answer)
					{
						if(!preg_match("%^[0-9]{1}$%",stripslashes(trim(escape_data($_POST['blank_'.$count])))))
						{
							$errors = '
						<span style="color:red; font-size:12px;">
						Please put one NUMBER into each blank.
						</span>';
						}
						elseif(	$_POST['blank_'.$count] != $answer)
						{
							$errors = '
						<span style="color:red; font-size:12px;">
						Oops! Something is wrong. Please check again.
						</span>';
						}
						$count++;
					}
					
					if(empty($errors)) 
					{
						echoCongrats();
						unset($errors);
						cal_time();
					}
					else
					{
						//unset($errors);
						
						show_game($_SESSION['container'],$_SESSION['map'],$errors);
						cal_time();
						$_SESSION['start_time'] = time();
					}
				}
				elseif(isset($_POST['refresh_game']))
				{
					cal_time();
					init_values();
					show_game($_SESSION['container'],$_SESSION['map'],$errors);
				}
			}
			else echo'INVALID COMMAND !';
		}
		else 
		{
			echoLevel();
		}
	}
	else user_warning();
	
	
	function cal_time()
	{
		$_SESSION['finish_time'] = time();
						
		// Update total time taken for this user ...
		if( !empty($_SESSION['finish_time']) && !empty($_SESSION['start_time']) )
		{
			$time = $_SESSION['finish_time'] - $_SESSION['start_time'];
			$sql = "UPDATE sudoku_log SET total_time = total_time + ".$time;
			$sql.= " WHERE user_id = '".$_SESSION['user']['id']."'";
			$result = mysql_query($sql) or die(mysql_error());
			
			// Reset start and finish time ...
			$_SESSION['finish_time'] = 0;	
			$_SESSION['start_time'] = 0;
		}
	}
	
	
	function shuffle_container($container = array())
	{
		$temp_array = array();
		// split container horizontally into 3 rows and load them into $temp_array ...
		for($i = 0; $i<=2 ;$i++)
		{	
			$temp_array[$i][] = $container[$i*3+1];
			$temp_array[$i][] = $container[$i*3+2];
			$temp_array[$i][] = $container[$i*3+3];
		}
		
		// shuffle by 1 line ...
		for($i = 0 ; $i<count($temp_array) ; $i++)
		{
			shuffle($temp_array[$i]);
		}
		
		// shuffle by 3 lines ...
		shuffle($temp_array);
		
		// after shuffling, return it back to container ...
		for($i = 0; $i<=2 ;$i++)
		{
			$container[$i*3+1] = $temp_array[$i][0];
			$container[$i*3+2] = $temp_array[$i][1];
			$container[$i*3+3] = $temp_array[$i][2];
		}
		
		unset($temp_array);
		// turn the array clockwise 90 degree ...
		for ($i = 1 ;  $i <= 9 ; $i++)
		{
			for ($j = 1 ;  $j <= 9 ; $j++)
			{
				$temp_array[$i][] = $container[$j][$i];
			}
		}
		return $container;
	}
	
	function rotate_container($container = array())
	{
		$temp_array = array();
		
		// turn the array clockwise 90 degree ...
		for ($i = 1 ;  $i <= 9 ; $i++)
		{
			for ($j = 1 ;  $j <= 9 ; $j++)
			{
				$temp_array[$i][$j] = $container[$j][$i];
			}
		}
		return $temp_array;
	}
	
	function user_warning()
	{
		echo'<div class="info_block_background">
		<div  style="border:0px solid #ccc;" class="info_block first_info_block">
				<table class="info_table" cellspacing="0px">
					<tr>
						<td style="padding:30px 20px 30px 40px; background-color:#fff;"><img src="../img/user_warning.jpg"></td>
						<td  style="background-color:#fff; "class="text_td">
							<p style="font-size:18px; font-weight:bold; padding-top:20px;">Sorry</p>
							<p>You have to <a href="../login.php">log in</a> before playing the online game. 
							( Not a user, <a href="../user_register.php">Register</a> )</p>
							 <p>If you have any questions, we are more than happy to help you. Just 
							 <a href="contact_us.php">
            					contact us</a> !
							 </p>
						</td>
					</tr>
				</table>
		</div>
		</div>'; 
	}
	
	function init_values($errors = array())
	{
		$container = array();
		$row = array();
		$col = array();
		$_SESSION['start_time'] = time();
		//create an empty container
		for($v = 1; $v <=9 ; $v++)
		{
			for($h = 1; $h <=9 ; $h++)
			{
				$row[$h] = '' ;
			}
			$container[$v] = $row;
		}
		
		// pick the first position to start with ...
		$start_option = array(	1=>array(1,1),
								2=>array(1,2),
								3=>array(1,3),
								4=>array(2,1),
								5=>array(2,2),
								6=>array(2,3),
								7=>array(3,1),
								8=>array(3,2),
								9=>array(3,3)
		);
		
		for( $k = 1; $k <= 9 ; $k ++ )
		{
			$key = array_rand($start_option,1);
			$fpx = $start_option[$key][0];
			$fpy = $start_option[$key][1];
			unset($start_option[$key]);
			
			//determine all x position ...
			$p_x = array();
			$p_y = array();
			$temp_x = $fpx;
			$temp_y = $fpy;
			
			for ($j = 0; $j<=2 ; $j++)
			{
				$temp_x = $fpx;
				$temp_y = $fpy;
				for ($i = 1; $i<=3 ; $i++)
				{
					$p_x[] = $temp_x;
					$temp_x = $temp_x + 3;
					
					$temp_y = $temp_y + 1;
					if($temp_y > ($j+1)*3) $temp_y = $j*3+1;
					$p_y[] = $temp_y;
				}
				$fpx = $fpx + 1;
				$fpy = $fpy + 3;
				if($fpx > 3) $fpx = 1;
			}
			
			//asign value ot the empty container by each wave ...
			for( $l = 0; $l <= 8 ; $l ++ )
			{
				$container[$p_x[$l]][$p_y[$l]] = $k;
			}
			
		}
		
		//shuffle the container ...
		$container = shuffle_container($container);

		//rotate the container ...
		$container = rotate_container($container);

		//shuffle the container again ...
		$container = shuffle_container($container);
		
		// mask out some values ...
		$map = array();
		$map = range(1,81);

		$keys = array_rand($map,$_SESSION['difficulty']);
		$temp = array();
		foreach($keys as $key)
		{
			$temp[] = $map[$key];
		}
		$map = $temp;
		$_SESSION['container'] = $container;
		$_SESSION['map'] = $map;
	}
	
	function show_game($container = array(), $map = array(), $errors)
	{
		
		$key 	= 1;
		$times 	= 0;
		$ver_line = 1;
		$blank_count = 1;
		$_SESSION['answers'] = array();
		$_SESSION['game'] = '
		<div class="info_block_background">
		<div  style="border:1px solid #ccc; height:450px;" class="info_block first_info_block">
		<div style="margin:50px 30px 30px 50px; width:400px; border:0px solid #ccc; float:left;">';
		
		$_SESSION['game'] .= $errors.'<br />';
	
		$_SESSION['game'] .= '
		<form action="" method="post">
		<table cellpadding="0" cellspacing="0" style="border:1px solid #09c;">';
		
		foreach($container as $r)
		{
			if($ver_line % 3 == 0)
			{
				$border_bottom_color = '#09c';
			}
			else 
			{
				$border_bottom_color = '#eee';
			}
			$_SESSION['game'] .= '<tr>';
			foreach($r as $value)
			{
				if(in_array($key,$map)) 
				{
					$_SESSION['answers'][] = $value;
					$value = '<input type="text" size="1" maxlength="1" name="blank_'.$blank_count.'" value="'.$_POST['blank_'.$blank_count].'"
					style="padding:0;margin:0;height:30px;width:30px;border:0; text-align:center; font-size:16px; color:#09c;">';
					$blank_count++;
				}
				if($key % 3 == 0) 
				{
					$times++;
					if($times < 3)
					$border_right_color = '#09c';
					else 
					{
						$border_right_color = '#eee';
						$times = 0;
					}
				
				}
				else $border_right_color = '#ccc';
				$_SESSION['game'] .= '<td style="border:1px solid #eee; 
				border-right:1px solid '.$border_right_color.'; 
				border-bottom:1px solid '.$border_bottom_color.'; 
				font-size:16px;
				width:30px; height:30px; text-align:center;" valign="middle">'.$value.'<td>';
				$key++;
			}
			$_SESSION['game'] .= '</tr>';
			$ver_line++;
		}
		$_SESSION['game'] .= '
		</table>
		</div>
		<div style="float:left; padding-top:50px;">
		<input type="hidden" name="token" value="'.$_SESSION['token'].'"/>
		<input type="submit" name="check" value="Finish" /><br>
		<input type="reset" name="reset" value="Reset"/>
		</form>
		<form action="" method="post" style=" padding:0; margin-bottom:30px; margin-top:30px; border:0px solid #ccc;">
		<input type="hidden" name="token" value="'.$_SESSION['token'].'"/>
		<input type="submit" name="refresh_game" value="New Game" style="margin-top:0;"/>
		</form>
		<a href="sudoku.php" style="font-size:12px;">Choose a new level.</a>';
		$_SESSION['game'] .= '</div></div></div>';
		echo $_SESSION['game'];
	}
	function echoCongrats()
	{
		echo'
		<div class="info_block" id="congratulations_block">
			
				<table class="info_table" cellspacing="0px">
					<tr>
						<td><img src="../img/congrats.jpg"></td>
						<td class="text_td">
							<h1>Congratulations</h1>
							<p>Thank you for playing our online game.
							Your answers are all correct. <a href="sudoku.php">Play another one.</a>
							 </p>
						</td>
					</tr>
				</table>
		</div>';
	}
	
	function echoLevel()
	{
		echo'
		<div class="info_block_background">
		<div  style="border:1px solid #ccc;" class="info_block first_info_block">
		<div style="width:400px; margin:0 auto 0 auto; padding:100px 0 0 0; border:0px solid #ccc; text-align:center;">
		<p style="color:#09c; text-align:left;"><img style="float:left; margin-right:20px;" src="../img/sudoku_icon.jpg" />
			Thank you for playing our online SUDOKU game. Please, choose a level.
		</p>
		</div>
		<div style="width:700px; padding:0 0 150px 0; margin:0 auto 0 auto; border:0px solid #ccc;">
			<form action="" method="post">
			<input type="hidden" name="token" value="'.$_SESSION['token'].'"/>
			<input type="submit" name="level" value="Easy"/>
			<input type="submit" name="level" value="Medium"/>
			<input type="submit" name="level" value="Hard"/>
			</form>	
		</div>
		</div>
		</div>';
	}
	
	function echoDraft($container = array())
	{
		for ($i = 1 ;  $i <= 9 ; $i++)
		{
			for ($j = 1 ;  $j <= 9 ; $j++)
			{
				echo $container[$i][$j].'___';
			}
			echo '<br>';
		}
		echo '<br><br>';
	}
	
?>
<?php include_once 'footer.php';?>
