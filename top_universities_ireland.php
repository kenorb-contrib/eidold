<?php	
	include_once '../sys/core/init.inc.php';
	
	
?>

<?php
			$errors = array();
			$no_error = 'class="five_step_no_error" value="Enter your email"';
			$has_error = 'class="five_step_has_error" value="Please enter a valid email"';
			if($_POST)
			{
				$from = $_REQUEST['from'];
				if ($_POST['token'] == $_SESSION['token'])
				{					
					if(preg_match("%^[A-Za-z0-9\.\_\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z]{2,4}$%",stripslashes(trim($_POST['email']))))
					{
						$email	= 	escape_data($_POST['email']);
					}
					else $errors['email'] = 	'email you entered is not valid';
					if(!empty($errors['email']))
					{
						echoForm($has_error);
					}
					else
					{
						//Setup database connection...
						mysql_select_db(DB_NAME, $db) or die(mysql_error()); 
						
						if($from == "top_universities")
						{
							$email = strtolower($email);
							$from = escape_data($_POST['from']);
							// Encrypt password before entering database ...
							$obj = new Admin($db);						
							$sql = "INSERT INTO newsletter_image VALUES ('', '$email', '$from');";
							$result = mysql_query($sql) or die(mysql_error());
							
							//set session_marketing_user
							$_SESSION['marketing_user'] = array('email' => $email,
																'from' => $from);
												
							$headers = array('From: info@englishindublin.ie','Content-Type: text/html');
							
							/*$message = 	'Name: '.$name.'<br />';
							$message .=	'Email: '.$email.'<br /><br />';
							$message .= 'Message:'.escape_data($_POST['message']);
							
							//$to = 'wangx6@gmail.com';
							$to = 'deborah.mccloskey@englishindublin.ie';
							$subject = 'Student Query For Five ';
							
							$mail_sent = mail($to,$subject,$message,implode("\r\n",$headers));*/
							//$_SESSION['price_congrats'] = 'congrats'.$_SESSION['token'];
							
							//echo 'I am here now';
							header('Location:five_step_to_IELTS.php');
							exit;
						}
						else echo 'invalid request';
					}
				}
				
				
			}
			else
			{
				echoForm($no_error);
			}

			function echoForm($is_error)
			{
				$page_title = "English in Dublin | Top Universities in Ireland";
				echo '<link rel="stylesheet" type="text/css" href="css/top_university.css"/>';
				include_once 'header_with_no_menu.php';
			echo '
				<div id=top_university_float_box>
				 <h1 style="color:#f33; margin-top:10px;">Subscribe</h1>
				 <p>Get more useful info on IELTS and English courses in Ireland.</p>
				 <form action="top_universities_ireland.php" method="post">';
				
				echo'<input type="text" '.$is_error.' name="email" style="margin-top:10px;"/>';
				
				echo'
				<input type="submit" name="five_step_to_IELTS_reg" class="eid_button" value="SUBSCIBE NOW" style="margin-top:10px;" />
				<input type="hidden" name="token" value="'.$_SESSION['token'].'"/>
				<input type="hidden" name="from" value="top_universities"/>
				
				</form>
				
				</div>
				<div class="info_block online_marketing_landing">
				
				<div class="page_banner" id="five_step_banner"><img src="img/university.jpg"/>
				<h1>Top Universities in Ireland</h1>
				<p style="font-size:17px;">
				
				Get more useful information on IELTS and English in Dublin by subscribing below.
				</p>
				<form action="top_universities_ireland.php" method="post">';
				
				echo'<input type="text" '.$is_error.' name="email" id="five_step_textfield" />';
				
				echo'
				<input type="submit" name="five_step_to_IELTS_reg" class="eid_button" id="five_step_ielts_banner_btn" value="SUBSCIBE NOW" />
				<input type="hidden" name="token" value="'.$_SESSION['token'].'"/>
				<input type="hidden" name="from" value="top_universities"/>
				
				</form>
				</div>

				<img src="img/Infographic_final.jpg" title="Top Universities in Ireland"  alt="An infographic representation of top 10 universities in Ireland." style="margin-top:20px;"/>
				
				
				

				
				

				</div>
				
				';
			}
				
				
function error_for($name){
		global $errors;
		if($errors[$name]){
			return "<div class='form_error_message'>".$errors[$name]."</div>";
		}
	}
?>

<?php include_once 'footer.php'; ?>