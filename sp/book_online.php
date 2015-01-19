<?php
	include_once '../../sys_ch/core/init.inc.php';
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	$page_title = "Book Online";
	include_once 'header.php';
	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/bookonline.css\"/>";
?>

<?php
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		//Check session token ...
		if ($_POST['token'] == $_SESSION['token']){	
			
			$errors = array();
			if(isset($_POST['submit_form']))
			{
				$_POST['start_date'] = str_replace(' ','',$_POST['start_date']);
				$_POST['telephone'] = str_replace(' ','',$_POST['telephone']);
				$_SESSION['accommodation'] = $_POST['accommodation'];
				if(preg_match("%^[0-9]{1,3}$%",stripslashes(trim($_POST['duration']))))
				{
					$_SESSION['duration']	= 	escape_data($_POST['duration']);
					if(intval($_SESSION['duration']) <= 0) $errors['duration'] = 'Please enter a valid duration';
					
				}else $errors['duration'] = 'Please enter a valid duration';
				
				
				if(preg_match("%^[0-9\-]{2,20}$%",stripslashes(trim($_POST['start_date']))))
				{
					$_SESSION['start_date']	= 	escape_data($_POST['start_date']);
					
				}else $errors['start_date'] = 	'Please enter a valid start date';
				
				if(preg_match("%^[0-9\-\ ]{5,25}$%",stripslashes(trim($_POST['telephone']))))
				{
					$_SESSION['telephone']	= 	escape_data($_POST['telephone']);
					
				}else $errors['telephone'] = 	'Please enter a valid phone number';
				
				
				if(preg_match("%^[A-Za-z\.\'\-]{2,30}$%",stripslashes(trim($_POST['nationality']))))
				{
					$_SESSION['nationality']	= 	escape_data($_POST['nationality']);
					
				}else $errors['nationality'] = 	'Please enter your nationality';
				
				
				if(preg_match("%^[A-Za-z\.\'\-]{2,30}$%",stripslashes(trim($_POST['first_name']))))
				{
					$_SESSION['first_name']	= 	escape_data($_POST['first_name']);
					
				}else $errors['first_name'] = 	'first name you entered is not valid';
				
				if(preg_match("%^[A-Za-z\.\'\-]{2,30}$%",stripslashes(trim($_POST['last_name']))))
				{
					$_SESSION['last_name']	= 	escape_data($_POST['last_name']);
					
				}else $errors['last_name'] = 	'last name you entered is not valid';
				
				if(preg_match("%^[A-Za-z0-9\.\_\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z]{2,4}$%",stripslashes(trim($_POST['email']))))
				{
					$_SESSION['email']	= 	escape_data($_POST['email']);
					
				}else $errors['email'] = 	'email you entered is not valid';
				
				if(preg_match("%^[A-Za-z0-9\.\_\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z]{2,4}$%",stripslashes(trim($_POST['confirm_email']))))
				{
					$_SESSION['confirm_email']	= 	escape_data($_POST['confirm_email']);
					
				}else $errors['confirm_email'] = 	'email you entered is not valid';
				
				
				if(preg_match("%^[A-Za-z0-9]{5}$%",stripslashes(trim($_POST['v_code']))))
				{
					$v_code	= 	escape_data($_POST['v_code']);
					if($v_code != $_SESSION['v_str'])
					{
						$errors['v_code'] = 'try again, please .';
					}
					
				}else $errors['v_code'] = 	'try again, please .';
				
				
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
					step2();;
				}
				else echoTest();
			}
			elseif(isset($_POST['back']))
			{
				echoTest();
			}
			elseif(isset($_POST['finish']))
			{
				if(preg_match("%^[A-Za-z0-9]{5}$%",stripslashes(trim($_POST['v_code']))))
				{
					$v_code	= 	escape_data($_POST['v_code']);
					if($v_code != $_SESSION['v_str'])
					{
						$errors['v_code'] = 'try again, please .';
					}
				}else $errors['v_code'] = 	'try again, please .';
				
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
					$is_new_post = true;
					if(isset($_SESSION['formkey']) && isset($_POST['formkey']))	
					{	
						if($_SESSION['formkey'] == $_POST['formkey'])
						{
							$is_new_post = false;
						}
					}
					if($is_new_post)
					{
						$_SESSION['formkey'] = $_POST['formkey'];
						$headers = array('From: '.$_POST['email'],'Content-Type: text/html');
						
						$message = 	'Name: '.$_SESSION['first_name'].' '.$_SESSION['last_name'].'<BR>';
						$message .=	'Email: '.$_SESSION['email'].'<BR>';
						$message .=	'Phone: '.$_SESSION['telephone'].'<BR>';
						$message .= 'Nationality: '.$_SESSION['nationality'].'<BR><BR>';
						
						$message .=	'Duration: '.$_SESSION['duration'].'<BR>';
						$message .=	'Start Date: '.$_SESSION['start_date'].'<BR><BR>';
						
						$message .=	'Accommodation: '.$_POST['accommodation'].'<BR>';
						
						
						//echo $reciever[1].$reciever[2].$reciever[0];
					
						
						mail(	'info@englishindublin.ie',
								'Online Booking from '.ucwords($_SESSION['first_name']).' '.ucwords($_SESSION['last_name']),
								$message,
								implode("\r\n",$headers));
						
						
						echoCongrats();
					}else echoCongrats();
					
				}else step2();
				
			}
			else echoTest();
		}
		else echoError();
	}
	else 
	{
		$_SESSION['formkey'] = '';
		echoTest();
	}


	function form_error_message_class($name){
		global $errors;
		return $errors[$name] ? "form_error_message_class" : "";
	}
	function error_for($name){
		global $errors;
		if($errors[$name]){
			return "<br><span style=\"color:red;\">".$errors[$name]."</span>";
		}

	}
	function echoError()
	{
		echo "stop doing what you are doing right now............";
	}
	
	function step2()
	{
		$_SESSION['v_str'] = substr(md5(time()), 0, 5);
		$formkey = md5('cy67E98#.12!');
		
		echo '<div class="info_block_background">
			<div style="border:1px solid #ccc; padding-top:0px; padding-bottom:50px;" class="info_block first_info_block" id="test_block">
				
			<form action = "" method="post">
			<table class="bookonline_table" style="font-size:12px;" cellspacing="0">
			<tr>
				<td colspan="2" style="border-bottom:1px solid #999;"><h1>Online Booking Info Preview</h1></td>
			</tr>
			<tr>
				<td colspan="2" style="padding-top:30px;"><h3>Course Details</h3></td>
			</tr>
			<tr class="light">
				<td>Course Duration</td>
				<td>'.$_SESSION['duration'].'</td>
			</tr>
			<tr class="dark">
				<td>Course Start Date</td>
				<td>
				'.$_SESSION['start_date'].'
				</td>
			</tr>
			<tr>
				<td colspan="2" style="padding-top:30px;"><h3>Personal Details</h3></td>
			</tr>
			<tr class="light">
				<td>First Name</td>
				<td>
				'.$_SESSION['first_name'].'
				</td>
			</tr>
			<tr class="dark">
				<td>Last Name</td>
				<td>
				'.$_SESSION['last_name'].'
				</td>
			</tr>
			<tr class="light">
				<td>Telephone</td>
				<td>
				'.$_SESSION['telephone'].'
				</td>
			</tr>
			<tr class="dark">
				<td>Email</td>
				<td>
				'.$_SESSION['email'].'
				</td>
			</tr>
			
			<tr class="light">	
				<td>Nationality</td>
				<td>
				'.$_SESSION['nationality'].'
				</td>
			</tr>
			<tr>
				<td colspan="2" style="padding-top:30px;"><h3>Accommodation Details</h3></td>
			</tr>
			<tr class="dark">
				<td>Type of Accommodation Required</td>
				<td>
				'.$_SESSION['accommodation'].'
				</td>
			</tr>
			
			
			
			
			<tr>	
				<td style="padding-top:30px;">What do you see in the box ?<br><img src="verification_code.php"/></td>
				<td style="padding-top:30px;">
				<input type="text" name="v_code" maxlength="5" class="person_detail" value=""/>
				'.error_for('v_code').'
				</td>
			</tr>
			
				<input type="hidden" name="duration" value="'.$_POST['duration'].'"/>
				<input type="hidden" name="start_date" value="'.$_POST['start_date'].'"/>
				<input type="hidden" name="first_name" value="'.$_POST['first_name'].'"/>
				<input type="hidden" name="last_name" value="'.$_POST['last_name'].'"/>
				<input type="hidden" name="telephone" value="'.$_POST['telephone'].'"/>
				<input type="hidden" name="email" value="'.$_POST['email'].'"/>
				<input type="hidden" name="confirm_email" value="'.$_POST['confirm_email'].'"/>
				<input type="hidden" name="nationality" value="'.$_POST['nationality'].'"/>
				<input type="hidden" name="accommodation" value="'.$_POST['accommodation'].'"/>
				<input type="hidden" name="payment" value="'.$_POST['payment'].'"/>
				
				<input type="hidden" name="token" value="'.$_SESSION['token'].'"/>
				<input type="hidden" name="formkey" value="'.$formkey.'"/>
			<tr>
				<td><input type="submit" name="back" value="Back"/></td>
				<td><input type="submit" name="finish" value="Next"/></td>
			</tr>
			</table>
			</form>
				
				
			</div>
		</div>';
	}
	
	
	function echoCongrats()
	{
		echo'
		<div  style="border:0px solid #ccc;" class="info_block first_info_block" id="congratulations_block">
			
				<table class="info_table" cellspacing="0px">
					<tr>
						<td><img src="../img/congrats.jpg"></td>
						<td class="text_td">
							<h1>Thank You</h1>
							<p>Your booking details have been accepted for processing and you will be contacted very soon.</p>
							 <p>If you have any questions, we are more than happy to help you. Just 
							 <a href="contact_us.php">
            					contact us</a> !
							 </p>
						</td>
					</tr>
				</table>
		</div>
		';
	}
	function echoTest()
	{
		$_SESSION['v_str'] = substr(md5(time()), 0, 5);
		//$_SESSION['v_str'] = rand(1000000,9999999);
		$accommodation = array('None','Host Family');
		$payment = array('Credit Card','Bank Transfer');
		echo '<div class="info_block_background">
			<div style="border:1px solid #ccc; padding-top:0px; padding-bottom:50px;" class="info_block first_info_block" id="test_block">
				
			<form action = "" method="post">
			<table class="bookonline_table" style="font-size:12px;" cellspacing="0">
			<tr>
				<td colspan="2" style="border-bottom:1px solid #999;"><h1>Welcome to English in Dublin Online Booking</h1></td>
			</tr>
			<tr>
				<td colspan="2" style="padding-top:30px;"><h3>Course Details</h3></td>
			</tr>
			<tr class="light">
				<td>Course Duration (Number of weeks)</td>
				<td>
				<input type="text" name="duration" maxlength="20" class="person_detail" value="'.$_POST['duration'].'"/>
				'.error_for('duration').'
				</td>
			</tr>
			<tr class="dark">
				<td>Course Start Date (dd-mm-yyyy)</td>
				<td>
				<input type="text" name="start_date" maxlength="20" class="person_detail" value="'.$_POST['start_date'].'"/>
				'.error_for('start_date').'
				</td>
			</tr>
			<tr>
				<td colspan="2" style="padding-top:30px;"><h3>Personal Details</h3></td>
			</tr>
			<tr class="light">
				<td>First Name</td>
				<td>
				<input type="text" name="first_name" maxlength="20" class="person_detail" value="'.$_POST['first_name'].'"/>
				'.error_for('first_name').'
				</td>
			</tr>
			<tr class="dark">
				<td>Last Name</td>
				<td>
				<input type="text" name="last_name" maxlength="20" class="person_detail" value="'.$_POST['last_name'].'"/>
				'.error_for('last_name').'
				</td>
			</tr>
			<tr class="light">	
				<td>Telephone</td>
				<td>
				<input type="text" name="telephone" maxlength="25" class="person_detail" value="'.$_POST['telephone'].'"/>
				'.error_for('telephone').'
				</td>
			</tr>
			<tr class="dark">
				<td>Email</td>
				<td>
				<input type="text" name="email" maxlength="40" class="person_detail" value="'.$_POST['email'].'"/>
				'.error_for('email').'
				</td>
			</tr>
			<tr class="light">	
				<td>Confirm Email</td>
				<td>
				<input type="text" name="confirm_email" maxlength="40" class="person_detail" value="'.$_POST['confirm_email'].'"/>
				'.error_for('confirm_email').'
				</td>
			</tr>
			<tr class="dark">	
				<td>Nationality</td>
				<td>
				<input type="text" name="nationality" maxlength="20" class="person_detail" value="'.$_POST['nationality'].'"/>
				'.error_for('nationality').'
				</td>
			</tr>
			<tr>
				<td colspan="2" style="padding-top:30px;"><h3>Accommodation Details</h3></td>
			</tr>
			<tr class="light">
				<td>Type of Accommodation Required</td>
				<td>
				<select name="accommodation">';
			
			foreach($accommodation as $acm)
			{
				if($acm == $_POST['accommodation']) 
				{
					$selected = ' selected="selected"';
				}
				else
				{
					$selected = '';
				}
				echo '<option value="'.$acm.'"'.$selected.'>'.$acm.'</option>';
			}
			
			echo'
				   	
				</select>
				</td>
			</tr>
			
			
			
			
			
			<tr>	
				<td style="padding-top:30px;">What do you see in the box ?<br><img src="verification_code.php"/></td>
				<td style="padding-top:30px;">
				<input type="text" name="v_code" maxlength="5" class="person_detail" value=""/>
				'.error_for('v_code').'
				</td>
			</tr>
			

				<input type="hidden" name="token" value="'.$_SESSION['token'].'"/>
			<tr>
				<td><input type="submit" name="submit_form" value="Next"/></td>
			</tr>
			</table>
			</form>
				
				
			</div>
		</div>';
	}


?>
<?php include_once 'footer.php'; ?>