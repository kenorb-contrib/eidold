<?php	
	include_once '../sys/core/init.inc.php';
	$page_title = "English in Dublin | Download Page";
	include_once 'index_header.php';
?>

<?php	
	if(isset($_SESSION['marketing_user']))
	{
		$request = escape_data($_REQUEST['file']);
		$_SESSION['download_page_url'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		
		if($request == 'price')
		{
			echo '
			<div class="info_block" id="download_banner_blk">
				<div id="price_banner">
					<img src="../img/price_banner.jpg" />
					<h1 class="info_block_title">English in Dublin Course Fees 2013</h1>
					<p>Find the right course for you at the right price.</p>
					
				</div>
			</div>	
			<div class="info_block" id="download_blk">
				<h3>Thank you for visiting English in Dublin. <br>Please click the following link to download.</h3>
				<a href="https://drive.google.com/file/d/0B-8DcqiHBhRmWFVfSGR3SVF3Tk0/edit?usp=sharing" target="_blank"><p><img src="img/pdf_icon.png" />English in Dublin Price list 2014</p></a>
			</div>';
		}
		elseif($request == 'local_lang')
		{
			echo '
			<div class="info_block" id="download_banner_blk">
				<div id="price_banner">
					<img src="../img/price_banner.jpg" />
					<h1 class="info_block_title">Local Sayings and Phrases</h1>
					<p>Learn how to speak like Irish people.</p>
					
				</div>
			</div>	
			<div class="info_block" id="download_blk">
				<h3>Thank you for visiting English in Dublin. <br>Please click the following link to download.</h3>
				<a href="https://docs.google.com/file/d/0B-8DcqiHBhRmY2dZY28xRWE1VTA/edit?usp=sharing" target="_blank"><p><img src="img/pdf_icon.png" />Download FREE local sayings and phrases.</p></a>
			</div>';
		}
		else echoDownloadError();
	}
	else echoDownloadError();
		
		function echoDownloadError()
		{
			echo'
			<div class="info_block" id="download_blk">
				<h3>Oops, wrong request. Please try again.</h3>
			</div>';
		}
	
?>


<?php include_once 'footer.php'; ?>