<?php	
	include_once '../sys/core/init.inc.php';
?>

<?php	
	
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$from = $_REQUEST['from'];
		//Check session token ...
		if ($_POST['token'] == $_SESSION['token'] && $_SESSION['formkey'] == $_POST['formkey']){	
			$errors = array();

			
			if(preg_match("%^[A-Za-z\ ]{2,30}$%",stripslashes(trim($_POST['name']))))
			{
				$name	= 	escape_data($_POST['name']);
				$errors['name'] = '';
				
			}else $errors['name'] = 	'the name you entered is not valid';
			
			if(preg_match("%^[A-Za-z0-9\.\_\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z]{2,4}$%",stripslashes(trim($_POST['email']))))
			{
				$email	= 	escape_data($_POST['email']);
				$errors['email'] = '';
				
			}else $errors['email'] = 	'email you entered is not valid';
					
			
			
			
			//Check if there is an error ...
			foreach($errors as $error){
				if (!empty($error))
				{
					$hasError = $error;
				}
			}
			
			//Start register process ...
			if(empty($hasError)) 
			{				
				//Setup database connection...
				mysql_select_db(DB_NAME, $db) or die(mysql_error()); 
				
				
				if($from == "contact_us_xmas_offer_2013")
				{
					$email = strtolower($email);
					$from = $from.'::::'.$name.'::::'.escape_data($_POST['message']);
					// Encrypt password before entering database ...
					$obj = new Admin($db);						
					$sql = "INSERT INTO newsletter_image VALUES ('', '$email', '$from');";
					$result = mysql_query($sql) or die(mysql_error());
					
					//set session_marketing_user
					$_SESSION['marketing_user'] = array('email' => $email,
														'from' => $from);
										
					$headers = array('From: info@englishindublin.ie','Content-Type: text/html');
					
					$message = 	'Name: '.$name.'<br />';
					$message .=	'Email: '.$email.'<br /><br />';
					$message .= 'Message:'.escape_data($_POST['message']);
					
					//$to = 'wangx6@gmail.com';
					$to = 'deborah.mccloskey@englishindublin.ie';
					$subject = 'Student Query';
					
					$mail_sent = mail($to,$subject,$message,implode("\r\n",$headers));
					$_SESSION['price_congrats'] = 'congrats'.$_SESSION['token'];
					
					//echo 'I am here now';
					header('Location:christmas_special_offer_2013.php');
					exit;
				}
				else echo 'invalid request';
			}
			else echoForm();
		}
		else echoError();
	}
	else echoForm();

	function echoForm()
	{		
		$salt = substr(md5(time()), 0, 7);
		$formkey = 'cY67E98#.12!';
		$salt = $salt.sha1($salt.$formkey);
		
		$_SESSION['formkey'] = $salt;
		
		
		$_SESSION['v_str'] = substr(md5(time()), 0, 5);
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{

			$email = escape_data($_POST['email']);
			$name = escape_data($_POST['name']);
			$message = escape_data($_POST['message']);
			$display = '';
		}
		else
		{
			$email = '';
			$name = '';
			$message = '';
			$display = ' style="display:none;"';
		}
		$page_title = "English in Dublin | Course Fees 2013" ;
		include_once 'index_header.php';
		
			
			
			
			
	
	$markup = '
	<div class="info_block" id="price_blk">
		
		<div id="price_banner">
			<img src="../img/xmas_special_offer_banner_2013.jpg" />
			<h1 class="info_block_title">We Are Celebrating Christmas Early</h1>
			<p>Enroll for a 25-week course and get 15 weeks free.</p>
			<div id="price_banner_button" class="online_marketing_btn">Contact us now</div>
		</div>	
		<h3>English in Dublin Christmas Special Offer 2013</h3>
		
		<div class="" style="float:left;"><img src="img/xmas_special_offer_2013_0.jpg" /></div>
		<div class="" style="float:left; margin:0; padding:0 0 0 20px; width:500px;">
		<p>
			 
			 <ul>
			 	<li>Pay For Weeks 1-10 Get Weeks 11-25 Free</li>
			 	<li>Offer valid for ALL levels of general English</li>
				<li>Pay in 2013 Start Anytime in 2014</li>
				<li>Promotion Ends December 31st, 2013</li>
			 </ul>
			 Contact us for more information or to sign up<br><br>
			
		</p>
		</div>
		
		<br class="clear" />
	</div>
			';
		
		if(isset($_SESSION['price_congrats']) && $_SESSION['price_congrats'] == 'congrats'.$_SESSION['token'])	
		{
			$_SESSION['price_congrats'] = '';
			echo'
			<div id="congrats_bg">
				<div id="congrats_info_blk">
					<h3>Thank You</h3>
					<p>Your message has been sent and we will contact you very soon.</p>
					<p>You can also call us on +353 87 231 0686 or +353 1 6614791</p>
					<div id="congrats_close"><img src="../img/close_icon.png" /></div>
				</div>
			</div>';
		}
		else $_SESSION['price_congrats'] ='';
		echo'
			<div id="online_marketing_bg" '.$display.'>
				<div id="online_marketing_info_blk">
					
						
						<form action = "christmas_special_offer_2013.php" method="post" id="online_marketing_form">
								
								<label for="name">Your Name</label>
								<input type="text" name="name" maxlength="40" class="person_detail" value="'.$name.'"/>
								<div class="form_error_message">'.error_for('name').'</div>
								
								<label for="email">Email</label>
								<input type="text" name="email" maxlength="40" class="person_detail" value="'.$email.'"/>
								<div class="form_error_message">'.error_for('email').'</div>
			
								<label for="comment">What is your message?</label>
								<textarea cols="70" rows="5" name="message"  maxlength="250">'.$message.'</textarea><br/>
								
								<input type="hidden" name="token" value="'.$_SESSION['token'].'"/>
								<input type="hidden" name="formkey" value="'.$_SESSION['formkey'].'"/>
								<input type="hidden" name="from" value="contact_us_xmas_offer_2013"/>
								
								<input type="submit" id="price_submit" name="price_submit" value="Send"/>
							
						</form>
						
						<p>You can also call us on +353 87 231 0686 or +353 1 6614791</p>
						
						<div id="online_marketing_close"><img src="../img/close_icon.png" /></div>
						
					
				</div>
			</div>';
			

	echo $markup;
		
	}
	
	function form_error_message_class($name){
		global $errors;
		return $errors[$name] ? "form_error_message_class" : "";
	}
	function error_for($name){
		global $errors;
		if($errors[$name]){
			return "<div class='form_error_message'>".$errors[$name]."</div>";
		}
	}
	function echoError()
	{
		echo "INVALID REQUEST";
	}
	
?>


<?php include_once 'footer.php'; ?>