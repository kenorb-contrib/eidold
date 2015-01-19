<?php
if( isset($_SESSION['user']) && $_SESSION['user']['level']==1)
{
	echo '
	<div class="info_block_background">
		<div class="info_block" id="admin_page_block">
			<h3 class="info_block_title">Administration - Hi '.$_SESSION['user']['first_name'].' '.$_SESSION['user']['last_name'].'</h3>
			<div class="admin_sub_block">
				<div class="admin_title"><a href="competition_statistics.php">Competition Statistics</a></div>
				<div class="admin_title"><a href="view_users.php">View All Users</a></div>
				<div class="admin_title"><a href="testHash.php">Test Hash</a></div>
				<div class="admin_title"><a href="book_online.php">Book Online</a></div>
			</div>
			<div class="admin_sub_block">				
				<div class="admin_title"><a href="note_sender.php">Send a Note</a></div>
				<div class="admin_title"><a href="group_email.php">Group Email</a></div>
				<div class="admin_title"><a href="emails_broadcast.php">Emails Creater</a></div>
				<div class="admin_title"><a href="mail.php">Newsletter Wizard</a></div>
			</div>
			<div class="anti_float"></div>
		</div>
	</div>
	';
}
if( isset($_SESSION['user']) && $_SESSION['user']['level']==5)
{
	echo '
	<div class="info_block_background">
		<div class="info_block" id="admin_page_block">
			<h3 class="info_block_title">Administration - Hi '.$_SESSION['user']['first_name'].' '.$_SESSION['user']['last_name'].'</h3>
			<div class="admin_sub_block">
				
				<div class="admin_title"><a href="view_users.php">View All Users</a></div>
				<div class="admin_title"><a href="competition_statistics.php">Competition Statistics</a></div>
				<div class="admin_title"><a href="group_email.php">Group Email</a></div>
			</div>
		</div>
	</div>
	';
}



echo'
    <div id="footer">
	<div id="go_to_top"><a href="#top"><img src="../img/back_to_top.png" title="back to top"></a></div>
    <div id="shieldIcon"><a href="index.php"><img src="../img/eid_footer_icon.png"/></a></div>
	<div class="footer_inner_frame">
	<div class="footer_mini_block"><strong>English in Dublin</strong></div>
	<div class="footer_mini_block">54 Merrion Square South,</div>
	<div class="footer_mini_block">Dublin 2, Ireland</div>
	<div class="footer_mini_block">전화: +353 1 6614791</div>
	<div class="footer_mini_block">팩스: +353 1 6615200</div>
	<div class="footer_mini_block">이메일: info@englishindublin.ie</div>
	</div>
	
	<div class="footer_inner_frame">
		<div class="footer_mini_block">
		<a href="http://www.facebook.com/pages/English-In-Dublin/74828860184" target="_blank">
		<img src="../img/facebook_text_icon.png" />
		</a>
		</div>
		
		<div class="footer_mini_block">
		<a href="http://twitter.com/#!/englishindublin" target="_blank">
		<img src="../img/twitter_text_icon.png" />
		</a>
		</div>
		
		
		<div class="footer_mini_block">
		<a href="http://www.youtube.com/user/ENGLISHinDUBLIN?feature=mhee" target="_blank">
		<img src="../img/youtube_text_icon.png" />
		</a>
		</div>
		
		
		<div class="footer_mini_block">
		<p class="company_p">Recognized by the Department of Education and Skills as an English Language 
		School for the teaching of English as a Foreign Language. 
		Directors: Denis O\'Donoghue, Dionne O\'Donoghue. Company Registered No. 302977
		</p>
		</div>
	</div>
	

    </div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.simpleslideshow.js"></script>
<script type="text/javascript" src="jquery.menuAction.js"></script>
<script type="text/javascript" src="thickbox.js"></script>
<script type="text/javascript" src="jquery.easing.js"></script>
<script type="text/javascript" src="jquery.color.js"></script>
<script type="text/javascript" src="jquery.floatBoxAction.js"></script>
<script type="text/javascript" src="jquery.aboutdublinslideshow.js"></script>
<script type="text/javascript" src="jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="jquery.drag.js"></script>
<script type="text/javascript" src="tooltip.js"></script>


<script type="text/javascript">
	$.simpleSlideShow("#slide_show");
	$.aboutDublinSlideShow("#about_dublin_slide_show_imgs");
</script>
</div><!--end of content-->

</body>
</html>';
?>