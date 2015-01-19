<?php
include_once '../sys/core/init.inc.php';
include_once '../sys/config/db-cred.inc.php';


if ( $_POST['token'] == $_SESSION['token'] && $_POST['action'] == 'user_login')
{
	$_POST['uname'] = escape_data($_POST['uname']);
	$_POST['pword'] = escape_data($_POST['pword']);
	
	$obj = new Admin($db);
	if ( TRUE === $msg = $obj->processLoginForm() )
	{
		header("Location:index.php?lo=none");
		exit;
	}
	else
	{
		die($msg);
	}

}
else if ( $_POST['token'] == $_SESSION['token'] && $_POST['action'] == 'user_logout')
{
	$obj = new Admin($db);
	if ( TRUE === $msg = $obj->processLogout() )
	{
		header("Location:index.php?lo=none");
		exit;
	}
	else
	{
		die($msg);
	}
}
else
{
	header("Location:page.php?page=error_page");
	exit;
}


/*function __autoload($class)
{
	$filename = "sys/class/class." . $class . ".inc.php";
	if(file_exists($filename))
	{
		include_once $filename;
	}
}*/
?>
