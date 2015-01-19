<?php
	include_once '../sys/core/init.inc.php';
	error_reporting(E_ERROR | E_WARNING | E_PARSE);	
?>

<?php
	$from = $_REQUEST['from'];
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
					echoTest();
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
					
					//insert into online marketing database too
					$sql = "INSERT INTO newsletter_image VALUES ('','$email','online_test');";
					$result = mysql_query($sql) or die(mysql_error());
					if(mysql_errno() === 0){
						//Setup database connection...
						mysql_select_db(DB_NAME, $db) or die(mysql_error()); 
						
						//Check if email is unique ...
						$sql = "SELECT * FROM users WHERE user_email='$email'";
						$result = mysql_query($sql) or die(mysql_error());
						
						$user = mysql_fetch_array($result);
						$_SESSION['user'] = array(
												  'id' => $user['user_id'],
												  'email' => $user['user_email'],
												  'level' => $user['user_level'],
												  'first_name' => $user['first_name'],
												  'last_name' => $user['last_name'],
												  'visit_times' => $user['visit_times']
												  );
				
						$sql = "UPDATE users SET login_status = 'on' WHERE user_id = '".$user['user_id']."'";
						$result = mysql_query($sql) or die(mysql_error());
						
						
						
						if($from == "online_test")
						{
							header('Location:online_test.php');
							exit;
						}
						else 
						{
							header('Location:./');
							exit;
						}
						
					}
				}
			}
			else echoTest();
		}
		else echoError();
	}
	else echoTest();


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
	function echoCongrats()
	{
		
	}
	
	function echoTest()
	{
		if(isset($_SESSION['user']))
		{
			header('Location:online_test.php');
		}
		else
		{
		global $from;
		echo'
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>English in Dublin Register Page - Free online test and many more interesting stuff</title>
		
		<link rel="icon" type="image/gif" href="img/favicon.gif" /> 
		<link rel="shortcut icon" type="image/gif" href="img/favicon.gif" /> 
		<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />

		
		</head>';
?>
<?php 
	$css_files = array("reg.css");
?>

<?php foreach ($css_files as $css)
{
	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/".$css."\"/>";
}
?>
		<?php
		echo'
		<body>';
		
		//include_once 'header.php';
		$_SESSION['v_str'] = substr(md5(time()), 0, 5);
		//$_SESSION['v_str'] = rand(1000000,9999999);
		if($_REQUEST['from'] == 'online_test')
		{
			$reg_title = '<div id="reg_title"><h1>Register Now To Find Your English Level.</h1>
			<p>Get <span>FREE</span> credit by doing our <span>FREE</span> online tests. You can get <span>5 Euro credit</span> for each test you pass.
			</p></div>';
		}
		echo '
			<div id="reg_block">
					<div id="reg_form_container">
						'.$reg_title.'
						<form action = "user_register.php" method="post">
							<div class="reg_form_sub_block" id="reg_form_left">
								
								<label for="email">Email</label><br>
								<input type="text" name="email" maxlength="40" class="person_detail" value="'.$_POST['email'].'"/>
								<div class="form_error_message">'.error_for('email').'</div>
						
								
								<label for="confirm_email">Confirm Email</label><br>
								<input type="text" name="confirm_email" maxlength="40" class="person_detail" value="'.$_POST['confirm_email'].'"/>
								<div class="form_error_message">'.error_for('confirm_email').'</div>
								
								<label for="password">Password</label><br>
								<input type="password" name="password" maxlength="30" class="person_detail" value="'.$_POST['password'].'"/>
								<div class="form_error_message">'.error_for('password').'</div>
								
								<label for="confirm_password">Confirm Password</label><br>
								<input type="password" name="confirm_password" maxlength="30" class="person_detail" value="'.$_POST['confirm_password'].'"/>
								<div class="form_error_message">'.error_for('confirm_password').'</div>
								
								
								
								<input type="hidden" name="action" value="user_login_after_register"/>
								
								<input type="hidden" name="token" value="'.$_SESSION['token'].'"/>
								
								<input type="hidden" name="from" value="'.$from.'"/>
								
								<input type="submit" name="event_submit" value="Sign Up"/>
							</div>
						
						
							<div class="reg_form_sub_block" id="reg_form_right">
								<label for="first_name">First Name</label><br>
								<input type="text" name="first_name" maxlength="20" class="person_detail" value="'.$_POST['first_name'].'"/>
								<div class="form_error_message">'.error_for('first_name').'</div>
								
								<label for="last_name">Last Name</label><br>
								<input type="text" name="last_name" maxlength="20" class="person_detail" value="'.$_POST['last_name'].'"/>
								<div class="form_error_message">'.error_for('last_name').'</div>
			
								<label for="v_code">What do you see in the box ? <br><img src="verification_code.php"/></label><br>
								<input type="text" name="v_code" maxlength="5" class="person_detail" value=""/>
								<div class="form_error_message">'.error_for('v_code').'</div>
							</div>
							
						
						</form>
					</div>
			</div>';
		}
		}	
echo '</div><!-- end of content --></body></html>';

?>
<?php //include_once 'footer.php'; ?>