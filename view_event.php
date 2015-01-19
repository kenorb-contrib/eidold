<?php
if(isset($_GET['event_id']))
{
	$id = preg_replace('/[^0-9]/', '', $_GET['event_id']);
	if (empty($id))
	{
		header("Location:index.php");
		exit;
	}
}
else
{
	header("Location:index.php");
	exit;
}
include_once '../sys/core/init.inc.php';
$page_title = "View Event";
include_once 'header.php';

$center = new Center();
$center->markup.=($center->displayEvent($id));
$center->spit();
?>
<?php include_once 'footer.php'; ?>