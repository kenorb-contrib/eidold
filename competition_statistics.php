<?php
include_once '../sys/core/init.inc.php';	
if(isset($_SESSION['user']) && $_SESSION['user']['level']<=5)
{

	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	$page_title = "English in Dublin Competition Statistics";
	include_once 'header.php';



	echo '
		<div class="info_block_background">
		<div class="info_block" id="comp_stat_block">
		<table cellspacing="0" class="admin_table">
		<tr>
			<th>Row</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Nationality</th>
			<th>ID No.</th>
			<th>R.Info</th>
			<th>F.Comp</th>
			<th>DB No.</th>
		</tr>';

	//Have the database setup ...
	try{$db_selected = mysql_select_db(DB_NAME, $db);}
	catch(Exception $e){die($e->getMessage());}
	
	//$sql = "SELECT COUNT(1) FROM competition_user_info";
	$sql = "SELECT * FROM competition_user_info";
	try{$result = mysql_query($sql);}
	catch(Exception $e){die($e->getMessage());}
	
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