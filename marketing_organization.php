<?php	
	include_once 'sys/core/init.inc.php';
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	$page_title = "English in Dublin Competition - 4 week Free Course";
	include_once 'header.php';
?>


<?php
	if(isset($_POST['submit']))
	{
		if ($_POST['token'] == $_SESSION['token']){	
			$errors = array();
			
			$country_name						= 	$_POST['country_name'];
			$organization_name 					= 	$_POST['organization_name'];
			$organization_type 					= 	$_POST['organization_type'];
			$website 							= 	$_POST['website'];
			$email 								= 	$_POST['email'];
			$confirm_email 						= 	$_POST['confirm_email'];
			$telephone 							= 	$_POST['telephone'];
	
			$errors['organization_name'] 		= 	$_POST['error_organization_name'];
			$errors['organization_type'] 		= 	$_POST['error_organization_type'];
			$errors['website'] 					= 	$_POST['error_website'];
			$errors['confirm_email'] 			= 	$_POST['errors_confirm_email'];
			$errors['email'] 					= 	$_POST['error_email'];
			$errors['telephone'] 				= 	$_POST['errors_telephone'];
			
			
			if(0 === preg_match("/\S+/", $_POST['organization_name'])){
				$errors['organization_name'] = "Please enter organization name";
			}
			if(0 === preg_match("/\S+/", $_POST['organization_type'])){
				$errors['organization_type'] = "Please enter the organization type";
			}
			if(0 === preg_match("/.+@.+\..+/", $_POST['email'])){
				$errors['email'] = "Please enter your email";
			}
			if(0 === preg_match("/.+@.+\..+/", $_POST['confirm_email'])){
				$errors['confirm_email'] = "Please enter your email";
			}
			if(0 === preg_match("/\S+/", $_POST['website'])){
				$errors['website'] = "Please enter the organization website";
			}
			if(0 !== strcmp($_POST['email'] , $_POST['confirm_email'])){
				$errors['confirm_email'] = "Emails do not match";
				$errors['email'] = "Emails do not match";
			}
			echoForm();
		}
		else{echoError();}
	}
	else{echoForm();}
	
	function form_error_message_class($name){
		global $errors;
		return $errors[$name] ? "form_error_message_class" : "";
	}
	function error_for($name){
		global $errors;
		if($errors[$name]){
			return $errors[$name];
		}
	}
	function echoError()
	{
		echo "stop doing what you are doing right now............";
	}
	function echoForm(){
		$country_list = array(	'Brazil',
								'Argentina',
								'Uruguay',
								'Paraguay',
								'Chile',
								'Bolivia',
								'Mexico',
								'Malaysia',
								'Vietnam',
								'Thailand',
								'Indonesia',
								'Hong Kong',
								'Korea',
								);
		sort($country_list);
		echo
		'<div class="info_block_background">
			<div class="info_block first_info_block" id="marketing_block">
				<table class="info_table" cellspacing="0px">
					<tr>
						<td>
						<h1>English in Dublin Marketing</h1>
						</td>
					</tr>
					<tr>
					<td>
					<form action = "marketing_organization.php" method="post">
						<fieldset>
						<label for="country_name">Country Name *</label>
						<select name="country_name">';
						
						foreach($country_list as $country)
						{
							if($country == $_POST['country_name'])
							{
								echo '<option selected="selected">'.$country.'</option>';
							}
							else{echo '<option>'.$country.'</option>';}
						}
						echo '</select>
						
						
						<label for="organization_name">Organization Name *</label>
						<input type="text" name="organization_name" value="'.$_POST['organization_name'].'"/>
						<div class="form_error_message">'.error_for('organization_name').'</div>
						
						<label for="organization_type">Organization Type *</label>
						<input type="text" name="organization_type" value="'.$_POST['organization_type'].'"/>
						<div class="form_error_message">'.error_for('organization_type').'</div>
						
						<label for="website">Website *</label>
						<input type="text" name="website" value="'.$_POST['website'].'"/>
						<div class="form_error_message">'.error_for('website').'</div>
						
						<label for="email">Email *</label>
						<input type="text" name="email" value="'.$_POST['email'].'"/>
						<div class="form_error_message">'.error_for('email').'</div>
						
						<label for="confirm_email">Confirm Email *</label>
						<input type="text" name="confirm_email"" value="'.$_POST['confirm_email'].'"/>
						<div class="form_error_message">'.error_for('confirm_email').'</div>
						
						<label for="organization_telephone">Telephone</label>
						<input type="text" name="organization_telephone" value="'.$_POST['organization_telephone'].'"/>
						<div class="form_error_message">'.error_for('organization_telephone').'</div>
						
						<label for="organization_fax">Fax</label>
						<input type="text" name="organization_fax" value="'.$_POST['organization_fax'].'"/>
						<div class="form_error_message">'.error_for('organization_fax').'</div>
						
					
						<input type="hidden" name="token" value="'.$_SESSION['token'].'"/>
						<input type="submit" name="submit" id="competition_submit" value="Submit"/>
						<input type="reset" name="reset" id="competition_reset" value="Reset"/>
						</fieldset>
					</form>
					</td>
					</tr> 
				</table>
			</div>
		</div>';
	}

?>





<?php include_once 'footer.php'; ?>