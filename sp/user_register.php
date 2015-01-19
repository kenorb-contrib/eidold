<?php
	include_once '../../sys_ch/core/init.inc.php';
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	$page_title = "English in Dublin Register Page - Free online test and many more interesting stuff";
	include_once 'header.php';
?>

<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		//Check session token ...
		if ($_POST['token'] == $_SESSION['token']){	
			$errors = array();
			
			if(preg_match("%^[A-Za-z\.\'\-]{2,30}$%",stripslashes(trim($_POST['first_name']))))
			{
				$first_name	= 	escape_data($_POST['first_name']);
				
			}else $errors['first_name'] = 	'first name you entered is not valid';
			
			if(preg_match("%^[A-Za-z\.\'\-]{2,30}$%",stripslashes(trim($_POST['last_name']))))
			{
				$last_name	= 	escape_data($_POST['last_name']);
				
			}else $errors['last_name'] = 	'last name you entered is not valid';
			
			if(preg_match("%^[A-Za-z0-9\.\_\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z]{2,4}$%",stripslashes(trim($_POST['email']))))
			{
				$email	= 	escape_data($_POST['email']);
				
			}else $errors['email'] = 	'email you entered is not valid';
			
			if(preg_match("%^[A-Za-z0-9\.\_\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z]{2,4}$%",stripslashes(trim($_POST['confirm_email']))))
			{
				$confirm_email	= 	escape_data($_POST['confirm_email']);
				
			}else $errors['confirm_email'] = 	'email you entered is not valid';
			
			if(preg_match("%^[A-Za-z0-9]{2,30}$%",stripslashes(trim($_POST['password']))))
			{
				$password	= 	escape_data($_POST['password']);
				
			}else $errors['password'] = 	'password you entered is not valid';
			
			if(preg_match("%^[A-Za-z0-9]{2,30}$%",stripslashes(trim($_POST['confirm_password']))))
			{
				$confirm_password	= 	escape_data($_POST['confirm_password']);
				
			}else $errors['confirm_password'] = 	'password you entered is not valid';
			
			if(preg_match("%^[A-Za-z0-9]{5}$%",stripslashes(trim($_POST['v_code']))))
			{
				$v_code	= 	escape_data($_POST['v_code']);
				if($v_code != $_SESSION['v_str'])
				{
					$errors['v_code'] = 	'try again, please .';
				}
				
			}else $errors['v_code'] = 	'try again, please .';
			
			if(0 !== strcmp($password , $confirm_password)){
				$errors['confirm_password'] = "password do not match";
				$errors['password'] = "password do not match";
			}
			if(0 !== strcmp($email , $confirm_email)){
				$errors['confirm_email'] = "email do not match";
				$errors['email'] = "email do not match";
			}
			
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
				
				//Check if email is unique ...
				$sql = "SELECT * FROM users WHERE user_email='$email'";
				$result = mysql_query($sql) or die(mysql_error());
				$email_count = 0;
				while($row = mysql_fetch_row($result)){$email_count++;}
		
				if($email_count > 0){
					if($email_count > 0){
						$errors['email'] = "Email has already been used";
						$errors['confirm_email'] = "Email has already been used";
					}
					echoTest('','');
				}
				else
				{
					$first_name = strtolower($first_name);
					$last_name = strtolower($last_name);
					$email = strtolower($email);
					
					// Encrypt password before entering database ...
					$obj = new Admin($db);
					//echo date('d-m-Y H:i:s').'<br><br>';
					$password_encrypted = $obj->testSaltedHash($password);					
					
					$sql = "INSERT INTO users VALUES ('','$password_encrypted', '$email', 10, '$first_name', '$last_name',0,'off');";
					$result = mysql_query($sql) or die(mysql_error());
					if(mysql_errno() === 0){
						echoCongrats();
					}
				}
			}
			else echoTest('','');
		}
		else echoError();
	}
	else echoTest('','');


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
		echo "stop doing what you are doing right now............";
	}
	
	function echoCongrats()
	{
		echo'<div class="info_block_background">
		<div  style="border:0px solid #ccc;" class="info_block first_info_block" id="congratulations_block">
			
				<table class="info_table" cellspacing="0px">
					<tr>
						<td><../img src="img/congrats.jpg"></td>
						<td class="text_td">
							<h1>Congratulations</h1>
							<p>Your registration was successful! You can now <a href="login.php">log in</a>
							 to enjoy our free online test and other interesting competitions.</p>
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
	function echoTest($test_number, $test_result)
	{
		$_SESSION['v_str'] = substr(md5(time()), 0, 5);
		//$_SESSION['v_str'] = rand(1000000,9999999);
		echo '<div class="info_block_background">
			<div style="border:0px solid #ccc; padding-top:50px; padding-bottom:50px;" class="info_block first_info_block" id="test_block">
				<table class="info_table" cellspacing="0px">
					<tr>
						<td style="border-right:1px dotted #ccc;">
						<img src="../img/registration-icon.jpg"/>
						</td>
						
					
					
					
					<td style="padding-left:30px;">
					<form action = "user_register.php" method="post">
						<label for="first_name">First Name</label>
						<input type="text" name="first_name" maxlength="20" class="person_detail" value="'.$_POST['first_name'].'"/>
						<div class="form_error_message">'.error_for('first_name').'</div>
						
						<label for="last_name">Last Name</label>
						<input type="text" name="last_name" maxlength="20" class="person_detail" value="'.$_POST['last_name'].'"/>
						<div class="form_error_message">'.error_for('last_name').'</div>
	
						<label for="email">Email</label>
						<input type="text" name="email" maxlength="40" class="person_detail" value="'.$_POST['email'].'"/>
						<div class="form_error_message">'.error_for('email').'</div>
				
						
						<label for="confirm_email">Confirm Email</label>
						<input type="text" name="confirm_email" maxlength="40" class="person_detail" value="'.$_POST['confirm_email'].'"/>
						<div class="form_error_message">'.error_for('confirm_email').'</div>
						
						<label for="password">Password</label>
						<input type="password" name="password" maxlength="30" class="person_detail" value="'.$_POST['password'].'"/>
						<div class="form_error_message">'.error_for('password').'</div>
						
						<label for="confirm_password">Confirm Password</label>
						<input type="password" name="confirm_password" maxlength="30" class="person_detail" value="'.$_POST['confirm_password'].'"/>
						<div class="form_error_message">'.error_for('confirm_password').'</div>
						
						<label for="v_code">What do you see in the box ? <img src="verification_code.php"/></label>
						<input type="text" name="v_code" maxlength="5" class="person_detail" value=""/>
						<div class="form_error_message">'.error_for('v_code').'</div>
	
						<input type="hidden" name="token" value="'.$_SESSION['token'].'"/>
						<input type="submit" name="event_submit" value="Register Now"/>

					</form>
					</td>
					</tr> 
				</table>
			</div>
		</div>';
	}


?>
<?php include_once 'footer.php'; ?>