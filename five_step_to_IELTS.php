<?php	
	include_once '../sys/core/init.inc.php';
?>

<?php
			$errors = array();
			$no_error = 'class="five_step_no_error" value="Enter your email please"';
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
						
						if($from == "five_step_IELTS")
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
							header('Location:http://www.ieltsdublin.com/documents/Information-for-Candidates-booklet.pdf');
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
				$page_title = "English in Dublin | 5-step to IELTS";
				include_once 'header_with_no_menu.php';
			echo '
				<div class="info_block online_marketing_landing">
				
				<div class="page_banner" id="five_step_banner"><img src="img/banner_five_step_IELTS.jpg"/>
				<h1>Enroll Now For Our New 5-STEP IELTS Courses</h1>
				<p>
				Take a <strong style="color:red;">FREE</strong> placement test to find the correct course level for you.
				Click the button to download our Free IELTS guide.
				</p>
				<form action="five_step_to_IELTS.php" method="post">';
				
				echo'<input type="text" '.$is_error.' name="email" value="Your Email Please" id="five_step_textfield" />';
				
				echo'
				<input type="submit" name="five_step_to_IELTS_reg" class="eid_button" id="five_step_ielts_banner_btn" value="Download" />
				<input type="hidden" name="token" value="'.$_SESSION['token'].'"/>
				<input type="hidden" name="from" value="five_step_IELTS"/>
				
				</form>
				</div>
				
				
				
				
				
				
				
			
			<div class="info_block" id="ielts_block">
			<h1>5-Step IELTS Programme to Success 2014</h1>
			<p id="ielts_statement">English in Dublin is the <strong>ONLY</strong> language school in Ireland that provides IELTS preparation courses at 5 different levels:</p>
			
					<div class="ielts_details">
					<h4>Step 1(Band 2-3) - INTRODUCTION</h4>
					<p>Introduction to the exam. Student can communicate and understand in familiar situations</p>
					</div>
					
					<div class="ielts_details">
					<h4>Step 2(Band 3-4) - FOUNDATION</h4>
					<p>Stage two familiarisation with basic tasks of the exam. Student can communicate and understand in wider situations</p>
					</div>
					
					<div class="ielts_details">
					<h4>Step 3(Band 4-5) - COMPETENT</h4>
					<p>Stage three familiarisation with partial tasks of the exam. Reasonably good command of the language</p>
					</div>
					
					<div class="ielts_details">
					<h4>Step 4(Band 5-6) - VANTAGE</h4>
					<p>Stage four familiarisation with all tasks of the exam. General effective command of language and can understand fairly complex language</p>
					</div>
					
					<div class="ielts_details">
					<h4>Step 5(Band 6-7) - GRADUATE</h4>
					<p>Stage five full familiarisation with all components of the exam. Excellent operational command of the language and able to handle complex language well</p>
					</div>
					
					<br class="clear">
				
			<a href="five_step_to_IELTS.php"><div class="eid_button" id="five_step_btn">Read More</div></a>
			</div>
			
			
			
			
			
			
			

				<table>
				<tr>
				<td>
				<h3>Why IELTS ?</h3>
				<p>IELTS is the International English Language Testing System which tests English Language proficiency across the globe. It is the world\'s fastest-growing and most reliable English language test. It is recognised by thousands of organisations, including universities, government agencies and corporations, in over 135 countries.</p>
				<p>
				IELTS results are graded on the unique IELTS 9-band scale.
				</p>
				
				</td>
				
				
				<td>
				<h3>Enroll with us now !</h3>
				<li>Courses starting on 27 January!</li>
				<li>Each Step : 12 weeks, Monday – Friday, 09.00 – 12.00</li>
				<li>Each Step Cost : €2,160</li>
				<li>Special Course Book €30.00</li>
				<li>Registration Fee : €50.00</li>
				
				<p>Extra Afternoon Classes : Optional specialised classes, covering writing skills, speaking, reading etc.,  between Monday and Thursday, 12.30 – 15.30. Check with school for extra fees.</p>
				</td>
				</tr>
				</table>
				
				
				

				</div>';
			}
				
				
function error_for($name){
		global $errors;
		if($errors[$name]){
			return "<div class='form_error_message'>".$errors[$name]."</div>";
		}
	}
?>

<?php include_once 'footer.php'; ?>