<?php
include_once '../sys/core/init.inc.php';
$page_title = "Are You Sure ?";
include_once 'header.php';
if(isset($_POST['event_id'])) { $id = (int) $_POST['event_id']; }

else
{
	header("Location:index.php");
	exit;
}


$center = new Center($db);
$center->markup.=($center->confirmDelete($id));
$center->spit();

?>

<?php include_once 'footer.php'; ?>