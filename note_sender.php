<?php
include_once '../sys/core/init.inc.php';
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$page_title = "English in Dublin 2012 4-Week Free Course Competition Winner";

?>

<?php
if(isset($_SESSION['user']) && $_SESSION['user']['level']<=5)
{
	$emails = array('wangx6@gmail.com','denis.odonoghue@englishindublin.ie');
	mysql_select_db(DB_NAME, $db) or die(mysql_error()); 
	if(!$select_result = mysql_query("SELECT * FROM competition_user_info"))
		echo "We have a problem accessing database.";
	else
	{
		while($row = mysql_fetch_row($select_result))
		{
			$emails[] = $row[2];
			//echo $row[2].'<br>';
		}
	}
	$headers = array('From: info@englishindublin.ie','Content-Type: text/html');
	$subject = 'English in Dublin\'s 2012 4-week Free English Language Course Competition Result';
	$message_body = '
	<table style="width:700px; margin:20px auto 20px auto;" cellpadding="0" cellspacing="0">
		<tr>
			<td style= "font-family:Georgia, \'Times New Roman\', Times, serif; background-color:#ff0; color:#333; font-size:12px; padding-right:20px; text-align:right;">
			'.date('D,M,d,Y').'
			</td>
		</tr>
		<tr>
			<td style= "font-family:Georgia, \'Times New Roman\', Times, serif; background-color:#fff; color:#333; padding:0 0 5px 0;">
			<img src="img/NEW_BANNER.jpg"/>
			</td>
		</tr>
		
		
		
		
		
		
		
		
		<tr>
			<td style="border:0px solid #ccc; font-family:Georgia, \'Times New Roman\', Times, serif; font-size:12px; padding:20px 10px 20px 10px; border-top:1px solid #ccc;">
			<img style="float:left; margin-right:20px;" src="http://www.englishindublin.com/img/competition_logo.jpg"; width="225"/>
			
			<h1 style="text-transform:capitalize; color:#09c;">more free online test is now available</h1>
			
			<p style="line-height:20px;">
			
			Would you like to improve your English by doing our FREE practice tests AND get 
			credits for our English Language courses at the same time?<br><br>

			Test 1 of 2012 has 20 questions. The answer to each question is one word. If you get 100% in 
			the test, we will give you 20 points. With 20 points, we will give you credit of €20 
			for one of our English Language courses.<br><br>
			
			If you do not get 100% the first time, you can try again. You can continue trying until 
			you get 100%. We will keep a record of this and give you credit of €20.<br><br>
			
			We will have many tests in 2012. Every time you do a test, you can get another 
			credit of €20. You can keep doing tests until you have credit of 30% of the price of the course.<br><br>
			
			The maximum credit for one course is 30%. The course can be short or long.
			
			</p>
			</td>
		</tr>
		
		
		
		
		
		
		
		
		
		<tr>
			<td style="font-family:Georgia, \'Times New Roman\', Times, serif; text-align:center; color:#ff0; background-color:#333; font-size:12px;" valign="bottom">
			info@englishindublin.ie | www.englishindublin.com | 00353 87 231 0686
			</td>
		</tr>
	</table>

	';
	/*$emails = array(	
			'wangx6@gmail.com',
			'magicwang2000@yahoo.com',
			'wangduodigital@msn.com' );*/
	
	echo $message_body;
	//mail('wangx6@gmail.com',$subject,$message_body, implode("\r\n",$headers));	
	$a = 0;	
	foreach($emails as $email)
	{	$a++;
		//echo $a.'   '.$email.'<br>';		
		//mail($email,$subject,$message_body, implode("\r\n",$headers));
		//echo 'you email to '.$email.' has been sent.<br><br>';
	}
}
//End of checking Administration ...
else{ echo 'invalid user';}
?>
