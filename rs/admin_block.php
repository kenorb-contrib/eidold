<?php

if( !isset($_SESSION['user']) )
{
	echo '
	<div class="info_block" id="admin_page_block">
			<h3 class="info_block_title">Error, You Must Login With Proper Infomation To Access This Page.</h3>	
	</div>';
}
echo '
	<div class="info_block" id="admin_page_block">
			<h3 class="info_block_title">Administration Page</h3>	
	</div>';
				
?>