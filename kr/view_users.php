<?php
include_once '../sys/core/init.inc.php';	
if(isset($_SESSION['user']) && $_SESSION['user']['level']<=5)
{

	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	$page_title = "English in Dublin User Log";
	include_once 'header.php';

	//Have the database setup ...
	$db_selected = mysql_select_db(DB_NAME, $db) or die(mysql_error());
	
	//$sql = "SELECT COUNT(1) FROM competition_user_info";
	$sql = "SELECT users.user_id, users.user_email, users.user_level,users.first_name,users.last_name,test_detail.test_level,test_detail.total_time,sudoku_log.total_time FROM users LEFT JOIN test_detail ON users.user_id=test_detail.user_id LEFT JOIN sudoku_log ON users.user_id=sudoku_log.user_id ORDER BY users.user_id";
	$result = mysql_query($sql) or die(mysql_error());
	

	echo '
		<div class="info_block_background">
		<div class="info_block" style="border:1px solid #ccc;">
		<table cellspacing="0" class="admin_table">
		<tr>';
	
	$col_titles = array('No.','user id','email','level','first name','last name','pass','TOT','TOG');
	
	foreach($col_titles as $col_title)
	{
		echo '<th style="background-color:#333; color:#fff;">'.$col_title.'</th>';
	}

	echo '</tr>';

	
	
	$row_count = 1;
	while($row = mysql_fetch_row($result))
	{
		echo '<tr><td>'.$row_count.'</td>';
		for($i = 0; $i<count($row); $i++ )
		{
			echo '<td>'.$row[$i].'</td>';
		}
		echo '</tr>';
		$row_count++;
	}
	echo '
		</table>
		</div>
		</div>';
}

//End of checking Administration ...
else{ echo 'invalid user';}


?>

<?php include_once 'footer.php'; ?>