<?php
	include_once 'sys/core/init.inc.php';
	$first_name = '';
	$last_name = '';
	$email = '';
	$confirm_email = '';
	$location = '';
	$passport = '';
	$confirm_passport = '';
	$rec_info = '';
	$future_comp = '';
	
	$errors = array('first_name' => "" ,
					'last_name' => "" ,
					'email' => "",
					'location' => "",
					'confirm_email' => "",
					'passport' => "",
					'confirm_passport' => "");

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$confirm_email = $_POST['confirm_email'];
		$location = $_POST['location'];
		$passport = $_POST['passport'];
		$confirm_passport = $_POST['confirm_passport'];
		$rec_info = $_POST['rec_info'];
		$future_comp = $_POST['future_comp'];
		
		
		if(0 === preg_match("/\S+/", $_POST['first_name'])){
				$errors['first_name'] = "Please enter your first name";
		}
		if(0 === preg_match("/\S+/", $_POST['last_name'])){
			$errors['last_name'] = "Please enter your last name";
		}
		if(0 === preg_match("/.+@.+\..+/", $_POST['email'])){
			$errors['email'] = "Please enter your email";
		}
		if(0 === preg_match("/.+@.+\..+/", $_POST['email'])){
			$errors['confirm_email'] = "Please enter your email";
		}
		if(0 === preg_match("/\S+/", $_POST['location'])){
			$errors['location'] = "Please enter your location";
		}
		if(0 === preg_match("/\S+/", $_POST['passport'])){
			$errors['passport'] = "Please enter your passport number";
		}
		if(0 !== strcmp($_POST['email'] , $_POST['confirm_email'])){
			$errors['confirm_email'] = "Emails do not match";
		}
		if(0 !== strcmp($_POST['passport'] , $_POST['confirm_passport'])){
			$errors['confirm_passport'] = "Passport number do not match";
		}
		
	
		if(empty($errors['first_name']) && 
		   empty($errors['last_name']) &&
		   empty($errors['email']) &&
		   empty($errors['confirm_email']) &&
		   empty($errors['location']) &&
		   empty($errors['passport']) && 
		   empty($errors['confirm_passport'])
		   ){
			
			$first_name = mysql_real_escape_string($_POST['first_name']);
			$last_name = mysql_real_escape_string($_POST['last_name']);
			$email = mysql_real_escape_string($_POST['email']);
			$location = mysql_real_escape_string($_POST['location']);
			$passport = mysql_real_escape_string($_POST['passport']);
			$rec_info = mysql_real_escape_string($_POST['rec_info']);
			$future_comp = mysql_real_escape_string($_POST['future_comp']);
			
			$sql = "INSERT INTO competition_user_info VALUES ('$first_name', '$last_name', '$email', '$location', '$passport','$rec_info','$future_comp','');";
			
			
			
				try{$db_selected = mysql_select_db(DB_NAME, $db);}
				catch(Exception $e){die($e->getMessage());}
				try{$result = mysql_query($sql);}
				catch(Exception $e){die($e->getMessage());}
				
				if(mysql_errno() === 0){
					header("Location:page.php?page=congratulations&page_title=Congratulations");
					exit();
				}
				else{
					if(preg_match("/^Duplicate.*email.*/i",mysql_error())){
						$errors['email'] = "Email has already been used";
					}
					if(preg_match("/^Duplicate.*passport.*/i",mysql_error())){
						$errors['passport'] = "Passport number has already been used";
					}
				}
			
			
			header('Location:english_in_dublin_competition.php?errors_first_name='.$errors['first_name'].'&
													  errors_last_name='.$errors['last_name'].'&
													  errors_email='.$errors['email'].'&
													  errors_location='.$errors['location'].'&
													  errors_confirm_email='.$errors['confirm_email'].'&
													  errors_passport='.$errors['passport'].'&
													  errors_confirm_passport='.$errors['confirm_passport'].'&
													  first_name='.$first_name.'&
													  last_name='.$last_name.'&
													  email='.$email.'&
													  confirm_email='.$confirm_email.'&
													  location='.$location.'&
													  passport='.$passport.'&
													  confirm_passport='.$confirm_passport);	
		}
		else{
			header('Location:english_in_dublin_competition.php?errors_first_name='.$errors['first_name'].'&
													  errors_last_name='.$errors['last_name'].'&
													  errors_email='.$errors['email'].'&
													  errors_location='.$errors['location'].'&
													  errors_confirm_email='.$errors['confirm_email'].'&
													  errors_passport='.$errors['passport'].'&
													  errors_confirm_passport='.$errors['confirm_passport'].'&
													  first_name='.$first_name.'&
													  last_name='.$last_name.'&
													  email='.$email.'&
													  confirm_email='.$confirm_email.'&
													  location='.$location.'&
													  passport='.$passport.'&
													  confirm_passport='.$confirm_passport);	
		}
?>