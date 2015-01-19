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
					
			
			$pos = strpos(escape_data($_POST['message']),'http');
			
			if($pos === false) {
			 // string needle NOT found in haystack
			 $errors['message'] = '';
			}
			else {
			 $errors['message'] = 	'message you entered is not valid';
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
				
				
				if($from == "contact_us_price_page_with_table")
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
					$to = 'wang.xin@englishindublin.ie';
					$subject = 'Student Query';
					
					$mail_sent = mail($to,$subject,$message,implode("\r\n",$headers));
					$_SESSION['price_congrats'] = 'congrats'.$_SESSION['token'];
					
					//echo 'I am here now';
					header('Location:course_fees.php');
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
			$choice = escape_data($_POST['page_choice']);
			$choice = intval($choice);
			$email = escape_data($_POST['email']);
			$name = escape_data($_POST['name']);
			$message = escape_data($_POST['message']);
			$display = '';
		}
		else
		{
			//$choice = rand(0,1);
			$choice = 0;
			$email = '';
			$name = '';
			$message = '';
			$display = ' style="display:none;"';
		}
		$page_title = "English in Dublin | Course Fees 2014" ;
		include_once 'index_header.php';
		
		if($choice == 1)
		{
			
		}
			
			
			
			
			
	
	include_once 'price_list.php';
	
	$markup .= '
	<div class="info_block" id="price_blk">
		
		<div id="price_banner">
			<img src="../img/price_banner.jpg" />
			<h1 class="info_block_title">English in Dublin Course Fees 2014</h1>
			<p>Find the right course for you at the right price.</p>
			<div id="price_banner_button" class="online_marketing_btn">Contact us now</div>
		</div>	
		<h3>What Makes English in Dublin Different?</h3>
		
		<div class="diff_blk" id="diff_blk_first_child"><img src="img/teaching.png" /><p>Dedicated staff personally helping to achieve your academic goals.</p></div>
		<div class="diff_blk"><img src="img/one_on_one.png" /><p>Work one-on-one to assess and respond to each student\'s needs individually</p></div>
		<div class="diff_blk"><img src="img/Department_of_Education_and_Skills.png" /><p>Recognised by the Irish Department of Education and Skills.</p></div>
		<br class="clear" />

			';
		
		if(isset($_SESSION['price_congrats']) && $_SESSION['price_congrats'] == 'congrats'.$_SESSION['token'])	
		{
			$_SESSION['price_congrats'] = '';
			echo'
			<div id="congrats_bg">
				<div id="congrats_info_blk">
						<h3>Thank You</h3>
						<p>Your message has been sent and we will contact you very soon.</p>
						<!-- Google Code for Lead Conversion Page -->
							<div style="display:none;"> 
							<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/979189080/?value=0&label=SNbQCJD_iwcQ2Pr00gM&guid=ON&script=0"/> 
							</div>
						
						<p>You can also call us on +353 87 231 0686 or +353 1 6614791</p>
						<div id="congrats_close"><img src="../img/close_icon.png" /></div>
				</div>
			</div>';
		}
		else $_SESSION['price_congrats'] ='';
		echo'
			<div id="online_marketing_bg" '.$display.'>
				<div id="online_marketing_info_blk">
					
						
						<form action = "course_fees.php" method="post" id="online_marketing_form">
								
								<label for="name">Your Name</label>
								<input type="text" name="name" maxlength="40" class="person_detail" value="'.$name.'"/>
								<div class="form_error_message">'.error_for('name').'</div>
								
								<label for="email">Email</label>
								<input type="text" name="email" maxlength="40" class="person_detail" value="'.$email.'"/>
								<div class="form_error_message">'.error_for('email').'</div>
			
								<label for="comment">What is your message?</label>
								<textarea cols="70" rows="5" name="message"  maxlength="250">'.$message.'</textarea><br/>
								<div class="form_error_message">'.error_for('message').'</div>
																
								<input type="hidden" name="token" value="'.$_SESSION['token'].'"/>
								<input type="hidden" name="formkey" value="'.$_SESSION['formkey'].'"/>
								<input type="hidden" name="from" value="contact_us_price_page_with_table"/>
								<input type="hidden" name="page_choice" value="'.$choice.'"/>
								
								<input type="submit" id="price_submit" name="price_submit" value="Send"/>
							
						</form>
						
						<p>You can also call us on +353 87 231 0686 or +353 1 6614791</p>
						
						<div id="online_marketing_close"><img src="../img/close_icon.png" /></div>
						
					
				</div>
			</div>';
			
			

		$center_0='	
		
		<div id="price_table_container">
		<div class="price_table_tab" id="full_time_tab"><h4>Full-Time Courses</h4></div>
		<div class="price_table_tab" id="part_time_tab"><h4>Part-Time Courses</h4></div>
		<div id="full_time_block">
			<div class="price_info_left" class="price_info">
				<div>
					<div class="price_duration_title" id="price_duration_title_highlighted">1 - 10 week</div>
					<div class="price_duration_title">11 - 20 week</div>
					<div class="price_duration_title">21 - 30 week</div>
					<div class="price_duration_title">31 - 50 week</div>
					
				</div>
			</div>
			<div class="price_info_right">';
			
			$full_time_price_split = explode("||",$full_time_price);
			$header = '	<th>Duration</th>
						<th>Tuition Fees 15 hrs/week</th>
						<th>Tuition Fees 21 hrs/week</th>
						<th>Tuition Fees 24 hrs/week</th>
						<th>Tuition Fees 27 hrs/week</th>
						<th>Tuition Fees 30 hrs/week</th>
						<th>Registration Fee</th>';
			for($z=0 ; $z<4 ; $z++)
			{
				if($z == 0) 
				$center_0.='<div class="price_info_right_tables"><table>';
				else
				$center_0.='<div class="price_info_right_tables price_table_not_show"><table>';
				
				$center_0.='<tr>'.$header.'</tr>';
				for ($i = $z*10; $i < $z*10+10; ++$i)
				{
					if($i == count($full_time_price_split)-1) break;
	
					$row = explode("::",$full_time_price_split[$i]);
					$center_0.='<tr>';
					for($j = 0; $j < count($row); $j++){
						$center_0 .= '<td nowrap="nowrap">'.$row[$j].'</td>';
					}
					
					$center_0 .= '</tr>';
				}
				$center_0.='</table></div>';
			}
		
		$center_0.='</div><br class="clear" />
		
		
		
		
		
		</div>';
		
		

		
		$center_0.='
		<div id="part_time_block">
			<div class="price_info_left" class="price_info">
				<div>
					
					<div class="part_time_price_duration_title" id="price_duration_title_highlighted">1 - 10 week</div>
					<div class="part_time_price_duration_title">11 - 20 week</div>
					<div class="part_time_price_duration_title">21 - 24 week</div>
					<div class="table_title">A) 12:30 – 15:30<br>B) 18:30 – 21:30</div>
				</div>
			</div>
			<div class="price_info_right">';
		
		
			$part_time_price_split = explode("||",$part_time_price);
			$header = '	<th>Duration</th>
						<th>Tuition Fees 3 hrs/week</th>
						<th>Tuition Fees 6 hrs/week</th>
						<th>Tuition Fees 9 hrs/week</th>
						<th>Tuition Fees 12 hrs/week</th>
						<th>Registration Fee</th>';
			for($z=0 ; $z<3 ; $z++)
			{
				if($z == 0) 
				$center_0.='<div class="part_time_price_info_right_tables"><table>';
				else
				$center_0.='<div class="part_time_price_info_right_tables price_table_not_show"><table>';
				
				$center_0.='<tr>'.$header.'</tr>';
				for ($i = $z*10; $i < $z*10+10; ++$i)
				{
					if($i == count($part_time_price_split)-1) break;
	
					$row = explode("::",$part_time_price_split[$i]);
					if ($i%2 == 0) $center_0 .= '<tr class="tr_even">';
					else $center_0 .= '<tr class="tr_odd">';
					for($j = 0; $j < count($row); $j++){
						$center_0 .= '<td nowrap="nowrap">'.$row[$j].'</td>';
					}
					
					$center_0 .= '</tr>';
				}
				$center_0.='</table></div>';
			}
		
		$center_0.='</div><br class="clear" /><div>
						
					</div>

		</div>
		<div id="price_table_button" class="online_marketing_btn">Contact us now</div>
		
		
					</div><!-- end of price table container -->';
					
					
					
					echo'
					';

					
		
		$center_0.='
		<div class="info_block" id="testimonial_blk">
			<h3>What Our Students Have To Say ...</h3>
			<div class="test_sub_blk_option_0"><img src="../img/testimonial_2.jpg" align="left"/><p>"Without doubts one of the best experiences in my life. I really enjoy interesting lessons and friendly classmates. Time I spend in Ireland is absolutely amazing not only in class but also outdoors, interesting sight places, excursions, new friends and the main - everythings in English so it\'s really getting better!" <br><span class="testinonial_person">Oleg Melnyk, Ukraine</span></p></div>
			<div class="test_sub_blk_option_0"><img src="../img/testimonial_1.jpg" align="left"/><p>"I\'m from Sao Paulo, Brazil. I\'m 42 years old. When I arrived here I was 38 years old. I am leaving English in Dublin to go to university in Portugal to do a Master\'s degree in Communication law for 1 year. I came here to learn English for 6 months but......I stayed for almost 3 years!" <br><span class="testinonial_person">Silvia Regina Lozano, Brazil</span></p></div>
			<div class="test_sub_blk_option_0"><img src="../img/testimonial_3.jpg" align="left"/><p>"To describe my stay in Dublin in just one word: amazing!:-) During the 9 weeks I spent in Ireland, I had a lovely host family, I met really nice people from the whole world and the school was perfect for me. All in all, it was one of the best experiences in my life." <br><span class="testinonial_person">Deborah Matile, Switzerland</span></p></div>
			<br class="clear" />
		</div>';
				
	
		/*******************  end of center_1  *****************************/
		

		if($choice == 0)
		$markup.=$center_0;
		else
		$markup .= $center_1;
		$markup.='</div>';

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