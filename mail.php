<?php
include_once '../sys/core/init.inc.php';
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$page_title = "English in Dublin Competition - 4 week Free Course";
include_once 'header.php';
?>

<?php

	$errors = array();
	$step1 = 
	'<div class="info_block_background">
		<div style="border:1px solid #ccc;margin-top:20px;" class="info_block first_info_block" id="newsletter_block">
		<h1 class="info_block_title">Step 1 - choose a template</h1>
		<form action="mail.php" method="post">
			<input type="hidden" name="token" value="'.$_SESSION['token'].'"/>
			<input type="hidden" name="step" value="step1"/>
			<ul>
				<li><input type="submit" name="newsletter_template_submit" class="newsletter_template" value=""/></li>
			</ul>
			<div class="anti_float"></div>
		</form>
		</div>
	</div>';
	
	
	function show_step2($error_messages)
	{	
		$step2 = '
		<div class="info_block_background">
		<div style="border:1px solid #ccc; " class="info_block first_info_block" id="newsletter_block">
		<h1 class="info_block_title">Step 2 - Populate Info</h1>';
		
		foreach($error_messages as $error_message)
		{
			$step2.='<span style="color:red; font-size:12px;">'.$error_message.'</span><br>';
		}
		
		$step2.='
		<form action="mail.php" method="post" enctype="multipart/form-data">
			<table style="width:700px;" cellspacing="0">
			<tr>
			<td style="background-color:#ff0; color:#000; text-align:right; padding:5px;" colspan="2">
			<input type="text" name="newsletter_date" class="newsletter_info_input" value="'.date('D,d,M,Y').'" style="width:200px;"/>
			
			</td>
			</tr>
		
		
		
			<tr>
			<td style="text-align:center; height:100px; border:1px solid #ccc; font-size:12px;" colspan="2">
			Choose a image from your computer. <input type="file" name="banner">
			</td>
			</tr>
		
			<tr>
			<td style="border:0; padding:15px; font-size:12px; vertical-align:top;" width="270">
			<input type="text" name="newsletter_info_title_1" value="Enter Info 1 Title" style="width:200px;"/>
			<input type="file" name="info_1_image">
			
			
			<textarea name="newsletter_info_1" value="Enter News Text for Info 1" style="width:100%;  height:300px;"></textarea>
			</td>
			
			
			
			<td style="border:0; padding:15px; font-size:12px; vertical-align:top;" width="270">
			<input type="text" name="newsletter_info_title_2" value="Enter Info 2 Title" style="width:200px;"/>
			<input type="file" name="info_2_image">
			<textarea name="newsletter_info_2" value="Enter News Text for Info 2" style="width:100%; height:300px;"></textarea>
			</td>
			</tr>
		
			<tr>
			<td style="border:0; background-color:#000; color:#ff0; padding:5px; margin:0; text-align:center; font-size:10px;" colspan="2">
			<span style="margin:0; padding:0;font-family:Georgia,  Times, serif; "><a href="http://www.englishindublin.com" target="_blank" style="text-decoration:none; color:#FF0;font-family:Georgia,  Times, serif; ">www.englishindublin.com</a> | <span style="text-decoration:none; color:#ff0;font-family:Georgia,  Times, serif; ">info@englishindublin.ie</span></span>
			</td>
			</tr>
			</table>
			<input type="hidden" name="token" value="'.$_SESSION['token'].'"/>
			<input type="hidden" name="step" value="step2"/>
			
			<input type="submit" name="newsletter_info_submit" class="" value="Preview"/>
		
		</form>
		</div>
		</div>';
		echo $step2;
	}
	
	function show_emails()
	{
		global $db;
		//Have the database setup ...
		$db_selected = mysql_select_db(DB_NAME, $db) or die(mysql_error());
	
		//$sql = "SELECT COUNT(1) FROM competition_user_info";
		$sql = "SELECT user_email, first_name, last_name FROM users ORDER BY user_email";
		$result = mysql_query($sql) or die(mysql_error());
	

		echo '
			<div style="margin:40px auto 40px auto;" class="info_block_background">
			<div class="info_block" style="border:1px solid #ccc;">
			<h1 class="info_block_title" style="margin-top:10px;">step 3 - choose the emails you want to send your newsletter to.</h1>
			

			
			<form action="" method="post">
			<input type="hidden" name="token" value="'.$_SESSION['token'].'"/>
			<input style="margin-left:30px;" type="submit" name="send_now" value="Send Now">
			<input style="margin-left:30px;" type="submit" name="try_now" value="Try One Now">
			<table cellspacing="0" class="admin_table">
			<tr>';
		
		$col_titles = array('count',' ','email','first name','last name');
		
		foreach($col_titles as $col_title)
		{
			echo '<th style="background-color:#333; color:#fff;">'.$col_title.'</th>';
		}
	
		echo '</tr>';
	
		
		
		$row_count = 1;
		while($row = mysql_fetch_row($result))
		{
			echo '<tr><td>'.$row_count.'</td><td><input type="checkbox" name="check'.$row_count.'" value="'.$row[0].'" checked="checked"/></td>';
			for($i = 0; $i<count($row); $i++ )
			{
				echo '<td>'.$row[$i].'</td>';
			}
			echo '</tr>';
			$row_count++;
		}
		echo '
			</table>
			<input type="hidden" name="total_email_number" value="'.$row_count.'"/>
			</form>
			
			
			</div>
			</div>';
		
	}
	
	function preview_newsletter($date,
								$banner_image_name,
								$info_1_image_name, 
								$info_2_image_name, 
								$title_1, 
								$title_2, 
								$info_1, 
								$info_2,
								$news_id)
	{
	$upload_image_folder_name = '../uploads/newsletter_images/';
	$upload_newsletter_folder_name = '../newsletters/newsletter_';
	//$upload_image_folder_name = 'http://www.englishindublin.com/uploads/newsletter_images/';
	//$upload_newsletter_folder_name = 'http://www.englishindublin.com/newsletters/newsletter_';
	$top =  '	
	<div class="info_block_background">
	<div class="info_block first_info_block" id="newsletter_block">
	
	<form action="mail.php" method="post">';
	
	$message_body = '<table style="width:700px; border:1px solid #ccc;" cellspacing="0">
	
	
	<tr>
	<td style="background-color:#fff; color:#000; text-align:center; padding:5px;" colspan="2">
	<span style="padding:0; font-family:Georgia,  Times, serif; font-size:12px; ">
	Email not displaying correctly? <a href="'.$upload_newsletter_folder_name.$news_id.'.php" target="_blank">View it in your web browser</a>
	</span>
	</td>
	</tr>
	
	
	<tr>
	<td style="background-color:#ff0; color:#000; text-align:right; padding:5px;" colspan="2">
	<span style="padding:0; font-family:Georgia,  Times, serif; font-size:12px; ">'.$date.'</span>
	</td>
	</tr>
	
	
	
	
	<tr>
	<td style="text-align:center; border-bottom:5px solid #000; border-top:5px solid #000;" colspan="2">
	<img style="width:700px;" src="'.$upload_image_folder_name.$banner_image_name.'">
	</td>
	</tr>
	
	
	<tr>
	<td style="text-align:center; border-bottom:5px solid #000; background-color:black;" colspan="2">
		<P style="color:#ff0; font-weight:bold; padding:0; margin:0; font-family:Georgia,  Times, serif;">We are English Language School & We are more than happy to help you !</P>
	</td>
	</tr>
	
	
	
	<tr>
	<td style="border:0; padding:10px 10px 10px 0; font-size:12px; vertical-align:top;" width="350">
	<span style="text-transform:capitalize; color:#09F; font-weight:bold;  font-size:30px;font-family:Georgia,  Times, serif;">'.$title_1.'</span>
	<p style="font-family:Georgia,  Times, serif; line-height:18px;">';
	
	if(!empty($info_1_image_name))
	{
		$message_body .= '<img style="width:150px; float:left; margin-right:10px;" src="'.$upload_image_folder_name.$info_1_image_name.'">';
	}
	
	$message_body .= $info_1.'
	</p>
	<p>
	<a href="http://www.englishindublin.com/page.php?page=contact_us&page_title=Contact English in Dublin" target="_blank">Contact Us Now !</a>
	</p>
	</td>
	<td style="border:0; padding:10px 10px 10px 0; font-size:12px; vertical-align:top;" width="350">
	<span style="text-transform:capitalize; color:#09F; font-weight:bold; font-size:30px;font-family:Georgia,  Times, serif; ">'.$title_2.'</span>
	<p style="font-family:Georgia, Times, serif; line-height:18px;">';
	
	if(!empty($info_2_image_name))
	{
		$message_body .= '<img style="width:150px; float:left; margin-right:10px;" src="'.$upload_image_folder_name.$info_2_image_name.'">';
	}
	
	$message_body .= $info_2.'
	</p>
	</td>
	</tr>
	
	<tr>
	<td style="border:0; background-color:#000; color:#ff0; padding:5px; margin:0; text-align:center; font-size:10px;" colspan="2">
	<span style="margin:0; padding:0;font-family:Georgia, Times, serif; "><a href="http://www.englishindublin.com" target="_blank" style="text-decoration:none; color:#FF0;font-family:Georgia,  Times, serif; ">www.englishindublin.com</a> | <span style="text-decoration:none; color:#ff0;font-family:Georgia,  Times, serif; ">info@englishindublin.ie</span></span>
	</td>
	</tr>
	</table>';
	
	$bottom = '<input type="hidden" name="token" value="'.$_SESSION['token'].'"/>
	<input type="submit" name="good" value="I like it !">
	<input type="submit" name="back" value="I want to change something.">
	</form>
	</div>
	</div>';
	
	echo $top.$message_body.$bottom;
	return $message_body;
	}
	
	
	function upload_image($image_temp,$image_name)
	{
		move_uploaded_file($image_temp,'uploads/newsletter_images/'.$image_name);
	}
	
	
	if(isset($_SESSION['user']) && $_SESSION['user']['level']==1)
	{
		
		if(isset($_POST['newsletter_template_submit']) && $_POST['step'] == 'step1' && $_POST['token'] == $_SESSION['token'])
		{
			show_step2($errors);
		}
		elseif($_POST['token'] == $_SESSION['token'] && isset($_POST['back']))
		{
			$_SESSION['message_body'] = '';
			show_step2($errors);
		}
		elseif($_POST['token'] == $_SESSION['token'] && isset($_POST['good']))
		{
			show_emails();
		}
		elseif(isset($_POST['newsletter_info_submit']) && $_POST['step'] == 'step2' && $_POST['token'] == $_SESSION['token'])
		{
			//echo 'iam in step three';
			$_SESSION['newsletter_date'] = $_POST['newsletter_date'];
			$_SESSION['banner_image'] = $_FILES['banner'];
			$_SESSION['newsletter_info_title_1'] = $_POST['newsletter_info_title_1'];
			$_SESSION['info_1_image'] = $_POST['info_1_image'];
			$_SESSION['newsletter_info_title_2'] = $_POST['newsletter_info_title_2'];
			$_SESSION['info_2_image'] = $_POST['info_2_image'];
			$_SESSION['newsletter_info_1'] = $_POST['newsletter_info_1'];
			$_SESSION['newsletter_info_2'] = $_POST['newsletter_info_2'];
			
			$banner_image_temp	= $_FILES['banner']['tmp_name'];
			$_SESSION['banner_image_name'] = $_FILES['banner']['name'];
			$banner_mage_size = $_FILES['banner']['size'];
			
			$info_1_image_temp	= $_FILES['info_1_image']['tmp_name'];
			$_SESSION['info_1_image_name'] = $_FILES['info_1_image']['name'];
			$info_1_mage_size = $_FILES['info_1_image']['size'];
			
			$info_2_image_temp	= $_FILES['info_2_image']['tmp_name'];
			$_SESSION['info_2_image_name'] = $_FILES['info_2_image']['name'];
			$info_2_mage_size = $_FILES['info_2_image']['size'];
			
			$allow_ext = array('jpg','jpeg','png','gif');
			$banner_image_ext = strtolower(end(explode('.',$banner_image_name)));
			$info_1_image_ext = strtolower(end(explode('.',$info_1_image_name)));
			$info_2_image_ext = strtolower(end(explode('.',$info_2_image_name)));
			
			//check if all blanks have been filled if not error is shown
			if(	0 === preg_match("/\S+/", $_POST['newsletter_date']) ||
				0 === $_FILES['banner']['size'] || 
				0 === preg_match("/\S+/", $_POST['newsletter_info_title_1']) || 
				0 === preg_match("/\S+/", $_POST['newsletter_info_title_2']) || 
				0 === preg_match("/\S+/", $_POST['newsletter_info_1']) || 
				0 === preg_match("/\S+/", $_POST['newsletter_info_2'])){
					
				$errors[] = "Somthing is missing. (only news image can be empty)";
			}	
				
			if(empty($_SESSION['banner_image_name']))
			{
				$errors[] = "Banner image is missing";
			}
			
			if(!empty($banner_image_size) )
			{
				if(	in_array($banner_image_ext, $allow_ext) === false )
				{
					$errors[] = "Banner image type is not allowed";
				}
			}
			if(!empty($info_1_image_size) )
			{
				if(in_array($info_1_image_ext, $allow_ext) === false )
				{
					$errors[] = "News one image type is not allowed";
				}
			}
			if(!empty($info_2_image_size) )
			{
				if(	in_array($info_2_image_ext, $allow_ext) === false )
				{
					$errors[] = "News two image type is not allowed";
				}
			}
			if($banner_image_size > 2097152 || $info_1_mage_size > 2097152 || $info_2_mage_size > 2097152)
			{
				$errors[] = 'Image size cannot be more than 2 Mb';
			}
			
			if(!empty($errors)) show_step2($errors);
			else
			{
				upload_image($banner_image_temp,$_SESSION['banner_image_name']);
				upload_image($info_1_image_temp,$_SESSION['info_1_image_name']);
				upload_image($info_2_image_temp,$_SESSION['info_2_image_name']);
				preview_newsletter(	$_SESSION['newsletter_date'],
											$_SESSION['banner_image_name'], 
											$_SESSION['info_1_image_name'],
											$_SESSION['info_2_image_name'],
											$_SESSION['newsletter_info_title_1'], 
											$_SESSION['newsletter_info_title_2'], 
											$_SESSION['newsletter_info_1'], 
											$_SESSION['newsletter_info_2'],NULL);
			}
		}
		
		// send to all recipients ...
		elseif(isset($_POST['send_now']) && $_POST['token'] == $_SESSION['token'])
		{		
			$headers = array('From: info@englishindublin.ie','Content-Type: text/html');					
			$total_email_no = $_POST['total_email_number'];
			
			// WRITE A PHP FILE FOR VISITOR TO VIEW IN THEIR OWN BROWSER
			$newsletter_id = md5(time());
			$myFile = "newsletters/newsletter_".$newsletter_id.".php";
			$fh = fopen($myFile, 'w') or die("can't open file");
			
			$stringData = '<div style="width:700px; margin:20px auto 20px auto; background-color:#fff; border:0; padding:0;">';
			
			$stringData .= preview_newsletter(	$_SESSION['newsletter_date'],
												$_SESSION['banner_image_name'], 
												$_SESSION['info_1_image_name'],
												$_SESSION['info_2_image_name'],
												$_SESSION['newsletter_info_title_1'], 
												$_SESSION['newsletter_info_title_2'], 
												$_SESSION['newsletter_info_1'], 
												$_SESSION['newsletter_info_2'],$newsletter_id);
			$stringData .= '</div>';
			fwrite($fh, $stringData);
			fclose($fh);
			
			mail($_SESSION['user']['email'],'English in Dublin Newsletter',$stringData,implode("\r\n",$headers));
			/*for($i = 1 ; $i < $total_email_no ; $i++)
			{
				if(!empty($_POST['check'.$i]))
				{
					mail($_POST['check'.$i],'English in Dublin Newsletter',$_SESSION['message_body'],implode("\r\n",$headers));
					echo '<p style="font-size:12px;">'.$i.' ... you email to '.$_POST['check'.$i].' has been sent.</p>';
				}
			}*/
		}
		
		// Try one to see if it works as yo uexpected ...
		elseif(isset($_POST['try_now']) && $_POST['token'] == $_SESSION['token'])
		{	
			$headers = array('From: info@englishindublin.ie','Content-Type: text/html');	
			$stringData .= preview_newsletter(	$_SESSION['newsletter_date'],
												$_SESSION['banner_image_name'], 
												$_SESSION['info_1_image_name'],
												$_SESSION['info_2_image_name'],
												$_SESSION['newsletter_info_title_1'], 
												$_SESSION['newsletter_info_title_2'], 
												$_SESSION['newsletter_info_1'], 
												$_SESSION['newsletter_info_2'],$newsletter_id);		
			mail($_SESSION['user']['email'],'English in Dublin Newsletter',$stringData,implode("\r\n",$headers));
			
		}
		
		
		else{ echo $step1; }
	}
	else
	{
		echo'invalid command for admin mail service';
		exit();
	}

?>

<?php include_once 'footer.php'; ?>