<?PHP
include_once '../../sys_ch/core/init.inc.php';
$page_title = "로그인";
include_once 'header.php';
?>
<?php 
if( !isset($_SESSION['user']))
{
	echo'
	<div class="info_block" id="login_block">
		<h3 class="info_block_title">로그인</h3>
		<form action="login_process.php" method="post">
		
				<label for="uname">e-mail</label>
				<input type="text" name="uname" id="uname" value="" maxlength="40" size="40" />
				<label for="pword">passwork</label>
				<input type="password" name="pword" id="pword" value="" />
				<input type="hidden" name="token" value="'.$_SESSION['token'].'" />
				<input type="hidden" name="action" value="user_login" />
				<input type="submit" name="login_submit" value="ok" />
	
		</form>
	</div>';
}
else
{
	echo 'SORRY, YOU HAVE ALREADY LOGGED IN.';
}
?>
<?php include_once 'footer.php'; ?>