<?php
include_once '../sys/core/init.inc.php';	
if(isset($_SESSION['user']) && $_SESSION['user']['level']<=5)
{

	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	$page_title = "English in Dublin Hellobar User Log";
	include_once 'header.php';

	//Have the database setup ...
	$db_selected = mysql_select_db(DB_NAME, $db) or die(mysql_error());
	
	
	$sql = "SELECT * FROM newsletter_image";
	$result = mysql_query($sql) or die(mysql_error());
	
	$count = array(	'local_lang' =>array('local_lang' ,0),
					'course_fees' => array('course_fees' ,0),
					'contact_us' => array('contact_us' ,0),
					'online_test' => array('online_test' ,0),
					'five_step_IELTS' => array('five_step_IELTS' ,0),
					'top_universities' => array('top_universities',0));
	
	while($row = mysql_fetch_row($result))
	{
		if ($row[2] == 'course_fees')
			{
				$count['course_fees'][1]++;
			}
		elseif ($row[2] == 'local_lang')
			{
				$count['local_lang'][1]++;
			}
		elseif ($row[2] == 'online_test')
			{
				$count['online_test'][1]++;
			}
		elseif ($row[2] == 'five_step_IELTS')
			{
				$count['five_step_IELTS'][1]++;
			}
		elseif ($row[2] == 'top_universities')
			{
				$count['top_universities'][1]++;
			}
		else $count['contact_us'][1]++;
	}
	
	
	$total = 0;
	foreach($count as $c)
	{
		$total += $c[1];
	}
	
	echo '<div class="info_block" id="stats_blk">';
	foreach($count as $c)
	{
		
		echo $c[0].'<div class="stats_bar" style="width:'.$c[1]/$total*(860).'px;">'.number_format($c[1]/$total*100,2).'%</div>';
	}
	echo'</div><!-- end of stats block -->';
	
	
	
	
	
	
	
	echo '<div class="info_block_background">
		<div class="info_block" style="border:1px solid #ccc;">
		<table cellspacing="0" class="admin_table">
		<tr>';
	
	$col_titles = array('No.','user id','email','from');
	
	foreach($col_titles as $col_title)
	{
		echo '<th style="background-color:#333; color:#fff;">'.$col_title.'</th>';
	}

	echo '</tr>';

	$sql = "SELECT * FROM newsletter_image";
	$result = mysql_query($sql) or die(mysql_error());
	
	$row_count = 1;
	while($row = mysql_fetch_row($result))
	{
		echo '<tr><td>'.$row_count.'</td>';
		for($i = 0; $i<count($row); $i++ )
		{
			if ($row['from'] == 'course_fees') $cf_count++;
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