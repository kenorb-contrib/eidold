<?php
	include_once '../../sys_ch/core/init.inc.php';
	error_reporting(E_ERROR | E_PARSE);
	$page_title = "English in Dublin Free Online Test";
	include_once 'header.php';
?>
<?php
	$error = '';
	$wrong_anwser = array();
	include '../tests/test.php';	
						
	if( isset($_SESSION['user']))
	{
		//Check if user used the test before...
		mysql_select_db(DB_NAME, $db) or die(mysql_error());
		$sql = "SELECT test_level FROM test_detail WHERE user_id='".$_SESSION['user']['id']."'";
		$result = mysql_query($sql) or die(mysql_error());
		$row =  mysql_fetch_row($result);
		
		if(empty($row)){
			$sql = "INSERT INTO test_detail VALUES ('".$_SESSION['user']['id']."','none',0,0);";
			$result = mysql_query($sql) or die(mysql_error());
			$_SESSION['level'] = 'none';
		}
		
		else $_SESSION['level'] = $row[0];// checking level done ...
		
		if( $_SERVER['REQUEST_METHOD'] == 'POST' )
		{
			if ($_POST['token'] == $_SESSION['token'])
			{
				// Check terms and conditions ...
				if(isset($_POST['start_my_test_now']))
				{
					if ($_POST['statement_check'] == 'yes')
					{
						show_test_options();
					}
					else
					{
						echo $_POST['statement_check'];
						$error = 'If you understand the above statement, please, check this box.';
						welcomeToTest();
					}
				}
				
				// Check which test user like to do ...
				/*if(isset($_POST['test_option']))
				{
					//$temp_test_number = explode(' ',$_POST['test_option']);
					//$_SESSION['test_number'] = intval($temp_test_number[1]);
					echo '.................'.$_POST['test_number'];
					$_SESSION['test_number'] = intval($_POST['test_number']);
					echo '.................'.$_SESSION['test_number'];
					show_test($_SESSION['test_number']);
				}*/

				// Check if users finish their test ...
				if(isset($_POST['submit_test']))
				{
					$_SESSION['finish_time'] = time();
					
					// Update total time taken for this user ...
					if( !empty($_SESSION['finish_time']) && !empty($_SESSION['start_time']) )
					{
						$time = $_SESSION['finish_time'] - $_SESSION['start_time'];
						$sql = "UPDATE test_detail SET total_time = total_time + ".$time;
						$sql.= " WHERE user_id = '".$_SESSION['user']['id']."'";
						$result = mysql_query($sql) or die(mysql_error());
						
						// Reset start and finish time ...
						$_SESSION['finish_time'] = 0;	
						$_SESSION['start_time'] = 0;
					}

					$number_of_question 	= $_POST['number_of_question'];
					$temp_done_tests  = explode(',',$_SESSION['level']);
					$temp_done_tests_count = count($temp_done_tests);
					
					
					// Check all anwsers ...
					$wrong = 0;
					for ($i = 1 ; $i <= $number_of_question ; $i ++)
					{
						// organize all test to lower case and trim off white space...
						$trimed = trim($_POST['q'.$i]);
						
						$str 	= str_replace(' ','',$trimed);
						$strlow = strtolower($str);
						
						//echo $anwsers[$user_level][$i-1].'......'.$strlow.'<br>';
						$right_count = 0;
						foreach($anwsers[$_SESSION['test_number']][$i] as $anwser)
						{
							if (strtolower($anwser) == $strlow)
								$right_count = $right_count + 1;
						}
						if($right_count > 0)
							$wrong_anwser[] = '<span style="color:green;"> &#x2713;</span>';
						else
						{
							$wrong = 1;
							$wrong_anwser[] = '<span style="color:red;"> &#215;</span>';
						}
					}
					
					// determine the result ...
					if($wrong == 1){show_test($_SESSION['test_number']);}
					else
					{
						
						// update test user info ...
						if ($_SESSION['level'] == 'none')// new user ? ...
						{
							$sql = "UPDATE test_detail SET test_level = '".(strval($_SESSION['test_number']).',')."'";
							$sql.= " WHERE user_id = '".$_SESSION['user']['id']."'";
							$result = mysql_query($sql) or die(mysql_error());
							echoCongrats(1, done_tests());
						}
						elseif(!done_tests())// NOT new user but done this test before ...
						{
							$temp = $_SESSION['level'].strval($_SESSION['test_number']).',';
							$sql = "UPDATE test_detail SET test_level = '".$temp."'";
							$sql.= " WHERE user_id = '".$_SESSION['user']['id']."'";
							$result = mysql_query($sql) or die(mysql_error());
							echoCongrats($temp_done_tests_count, done_tests());
						}
						else//NOT new user and have NOT done this test before ...
							echoCongrats($temp_done_tests_count-1, done_tests());
					}
				}
				//else echo'INVALID COMMAND !';	
			}
			else echo'INVALID COMMAND !';
		}
		elseif($_SERVER['REQUEST_METHOD'] == 'GET' )
		{
			if(isset($_GET['test_number']))
			{
				
				$_SESSION['test_number'] = intval($_GET['test_number']);
				if(in_array($_SESSION['test_number'],range(1,count($tests))))
					show_test($_SESSION['test_number']);
				else echo_error();
			}
			else welcomeToTest();
		}
		else welcomeToTest();
	}
	else user_warning();
	
	
	function done_tests()
	{
		$done = false;
		$done_tests  = explode(',',$_SESSION['level']);
		unset($done_tests[count($done_tests)-1]);
		foreach($done_tests as $done_test)
		{
			if(intval($done_test) == $_SESSION['test_number'] )
			{
				$done = true;
			}
		}
		return $done;		
	}
	
	function show_test_options()
	{
		global $tests;
		echo'
		<div class="info_block_background">
		<div  style="border:1px solid #ccc;" class="info_block first_info_block">
			<table style="padding:0 0 50px 0;" class="info_table" cellspacing="0px">
				<tr>
					<td style="padding:30px 20px 30px 40px; background-color:#fff;">
						<img src="../img/test_paper.jpg">
					</td>';
		echo '
					<td style="background-color:#fff; line-height:20px; padding:0px 40px 20px 0px;" class="text_td">
						<p style="font-weight:bold; font-size:18px; padding-top:20px;">
							Please Choose One of the following Tests.
						</p>';
		for ($i = 1 ; $i <= count($tests) ; $i ++)
		{
			echo '
			<a href="online_test.php?test_number='.$i.'"><div style="border:1px solid #ccc; background-color:#eee; color:black; text-align:center; width:150px; margin:30px auto auto 30px; padding:5px;"> Test '.$i.'</div></a>';
		}
		echo'</td></tr></table></div></div>';
	}
	

	function show_test($test_number)
	{
		global $tests;			
		global $wrong_anwser;
			
		$_SESSION['start_time'] = time();
			
		// one more try for the user and update database ...
		$sql = "UPDATE test_detail SET try_no = try_no + 1 WHERE user_id = '".$_SESSION['user']['id']."'";
		$result = mysql_query($sql) or die(mysql_error());		
		
		echo'
		<div class="info_block_background">
		<div  style="border:1px solid #ccc; padding-bottom:50px;" class="info_block first_info_block">
			<table style="padding:0 0 50px 0;" class="info_table" cellspacing="0px">
				<tr>
					<td  style="background-color:#fff; "class="text_td">
						<p style="font-size:18px; font-weight:bold; padding:20px 0 20px 20px;">Test '.$_SESSION['test_number'];
						
						if($_SESSION['test_number'] <= 6)
						echo'
						 - Put <strong style="color:red">ONE</strong> word into each blank space. Every answer is one word.
						 <span style="font-size:12px; font-weight:normal;"><a href="online_test.php">Choose another test</a></span>
						 </p>
						<p>
						
						<form action="" method="post" style="margin-left:40px">';
						else
						echo'
						 - Put <strong style="color:red">ONE</strong> option from the brackets into each blank space.
						 <span style="font-size:12px; font-weight:normal;"><a href="online_test.php">Choose another test</a></span>
						 </p>
						<p>
						
						<form action="" method="post" style="margin-left:40px">';
	
		$count = 0;
		foreach($tests[$test_number] as $question)
		{
			$count = $count + 1;
			$question = str_replace("%blank%", "<input maxlength=\"15\" style=\"width:100px; border:0; border-bottom:1px solid #ccc; text-align:center;\" type=\"text\" name=\"q".$count."\" value=\"".$_POST['q'.$count]."\">".$wrong_anwser[$count-1]."", $question);
			$question = str_replace("%longblank%", "<input style=\"width:250px; border:0; border-bottom:1px solid #ccc; text-align:center;\" type=\"text\" name=\"q".$count."\" value=\"".$_POST['q'.$count]."\">", $question);
			echo $question;
		}


		echo '			</P>
						<P>
						<input type="hidden" name="number_of_question" value="'.$count.'"/>
						<input type="hidden" name="token" value="'.$_SESSION['token'].'"/>
						<input type="submit" name="submit_test" value="SUBMIT"/>
						</form>
						</p>
						 
					</td>
				</tr>
			</table>
		</div>
		</div>';
	}
	
	function NO_WAY()
	{
		echo'<div class="info_block_background">
		<div  style="border:1px solid #ccc;" class="info_block first_info_block">
				<table class="info_table" cellspacing="0px">
					<tr>
						<td style="padding:30px 20px 30px 40px; background-color:#fff;"><img src="../img/no_way.jpg"></td>
						<td  style="background-color:#fff; "class="text_td">
							<p style="font-size:18px; font-weight:bold; padding-top:20px;">NO~~~WAY~~~</p>
							<p>You are tooooo good. We can\'t even catch up with you. Anyway, we will email you as soon as
							your test is ready.</p>
							<p><strong>NEXT TIME YOU WON\'T WIN THIS EASY !!!</strong></p>
						</td>
					</tr>
				</table>
		</div>
		</div>'; 
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
							<p>You have to <a href="login.php">log in</a> before doing our free online test. 
							( Not a user, <a href="user_register.php">Register</a> )</p>
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
	
	
	function echo_error()
	{
		echo'<div class="info_block_background">
		<div  style="border:1px solid #ccc;" class="info_block first_info_block">
				<table class="info_table" cellspacing="0px">
					<tr>
						<td style="padding:30px 20px 30px 40px; background-color:#fff;"><img src="../img/user_warning.jpg"></td>
						<td  style="background-color:#fff; "class="text_td">
							<p style="font-size:18px; font-weight:bold; padding-top:20px;">Sorry</p>
							<p>An error has occurred while processing your online test, please try again.</p>
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
	
	function echoCongrats($done_tests_number, $done_before)
	{
		echo'<div class="info_block_background">
		<div  style="border:1px solid #ccc;" class="info_block first_info_block" id="congratulations_block">
			
				<table class="info_table" cellspacing="0px">
					<tr>
						<td><img src="../img/congrats.jpg"></td>
						<td class="text_td">
							<h1>Congratulations</h1>
							<p>Thank you for taking part in <strong>English in Dublin\'s FREE Online Tests 2012</strong>.
							We hope you can improve your English by doing our tests. If you have any questions, please,
							feel free to <a href="contact_us.php">
            				contact us</a> !
							<p>All your anwsers were correct in Test <strong>'.($_SESSION['test_number']).'</strong></p>';
		if($done_before)
			echo '			<p>You have done this test before. Your credit will remain  
							<strong>'.(($done_tests_number) *20).'</strong>.';
		else
			echo '			<p>Your total credit now is 
							<strong>'.(($done_tests_number) *20).'</strong>.';
							
		echo 				'<a href="online_test.php"> More Tests...</a>
							 </p>
						</td>
					</tr>
				</table>
		</div>
		</div>';
	}
	
	function welcomeToTest()
	{	
		global $error;
		echo'<div class="info_block_background">
		<div  style="border:1px solid #ccc;" class="info_block first_info_block">
			<table style="padding:0 0 50px 0;" class="info_table" cellspacing="0px">
				<tr>
					<td style="padding:30px 20px 30px 40px; background-color:#fff;"><img src="../img/test_paper.jpg"></td>
					<td style="background-color:#fff; line-height:20px; padding:0px 40px 20px 0px;" class="text_td">
						<p style="font-weight:bold; font-size:18px; padding-top:20px;">
						Welcome to English in Dublin\'s Free Online Tests 2012.
						</p>
						<p>
						Would you like to improve your English by doing our FREE practice tests AND get credits 
						for our English Language courses at the same time?   
						</p>
						<p>
						Each test of 2012 has 20 questions. The answer to each question is one word. 
						If you get 100% in the test, we will give you 20 points. With 20 points, 
						we will give you credit of &euro;5 for one of our English Language courses. 
						</p>
						<p>
						If you do not get 100% the first time, you can try again. You can continue 
						trying until you get 100%. We will keep a record of this and give you credit of &euro;5 for each test you manage to pass. 
						</p>
						
						
						<form action="" method="post">
							<p>
							<input type="checkbox" name="statement_check" value="yes"/>
							I understand the above statement.
							</p>
							<p class="form_error_message">'.$error.'</p>
							
							<p>
							<input type="hidden" name="token" value="'.$_SESSION['token'].'"/>
							<input type="submit" name="start_my_test_now" value="START THE TEST NOW !"/>
							</p>
						</form>
					</td>
				</tr>
			</table>
		</div>
		</div>';
	}
?>

<?php include_once 'footer.php'; ?>