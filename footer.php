<?php
if( isset($_SESSION['user']) && $_SESSION['user']['level']==1)
{
	$user_test = $_SESSION['user'];
	echo '
	<div class="info_block_background">
		<div class="info_block" id="admin_page_block">
			<h3 class="info_block_title">Administration - Hi '.$user_test['first_name'].' '.$_SESSION['user']['last_name'].'</h3>
			<div class="admin_sub_block">
				<div class="admin_title"><a href="competition_statistics.php">Competition Statistics</a></div>
				<div class="admin_title"><a href="view_users.php">View All Users</a></div>
				<div class="admin_title"><a href="testHash.php">Test Hash</a></div>
				<div class="admin_title"><a href="book_online.php">Book Online</a></div>
				<div class="admin_title"><a href="hellobar_admin.php">Hollebar Admin</a></div>
			</div>
			<div class="admin_sub_block">				
				<div class="admin_title"><a href="note_sender.php">Send a Note</a></div>
				<div class="admin_title"><a href="group_email.php">Group Email</a></div>
				<div class="admin_title"><a href="emails_broadcast.php">Emails Creater</a></div>
				<div class="admin_title"><a href="mail.php">Newsletter Wizard</a></div>
				<div class="admin_title"><a href="user_level.php">User Level</a></div>
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
				<div class="admin_title"><a href="hellobar_admin.php">Hollebar Admin</a></div>
			</div>
		</div>
	</div>
	';
}



echo'
</div><!--end of center_container -->
</div><!-- end of center_wrap-->
    <div id="footer">
	<div id="footer_wrap">
		<div id="go_to_top"><a href="#top"><img src="img/back_to_top.png" title="back to top"></a></div>
		
		<div class="footer_inner_frame">
		<div class="footer_mini_block"><strong>English in Dublin</strong></div>
		<div class="footer_mini_block">54 Merrion Square South,</div>
		<div class="footer_mini_block">Dublin 2, Ireland</div>
		<div class="footer_mini_block">telephone: +353 1 6614791</div>
		<div class="footer_mini_block">fax: +353 1 6615200</div>
		<div class="footer_mini_block">e-mail: info@englishindublin.ie</div>
		</div>
		
		<div class="footer_inner_frame">
			<div class="footer_mini_block">
			<a href="http://www.facebook.com/pages/English-In-Dublin/74828860184" target="_blank">
			<img src="img/facebook_text_icon.png" />
			</a>
			</div>
			
			<div class="footer_mini_block">
			<a href="http://twitter.com/#!/englishindublin" target="_blank">
			<img src="img/twitter_text_icon.png" />
			</a>
			</div>
			
			
			<div class="footer_mini_block">
			<a href="http://www.youtube.com/user/ENGLISHinDUBLIN?feature=mhee" target="_blank">
			<img src="img/youtube_text_icon.png" />
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
<script type="text/javascript" src="jquery.hideCover.js"></script>
<script type="text/javascript" src="jquery.hellobarAction.js"></script>
<script type="text/javascript" src="jquery.priceTableAction.js"></script>
<script type="text/javascript" src="jquery.priceButtonAction.js"></script>
<script type="text/javascript" src="jquery.priceTabAction.js"></script>
<script type="text/javascript" src="jquery.onlineMarketingPrompt.js"></script>

<script type="text/javascript">
	$.simpleSlideShow("#slide_show");
	$.aboutDublinSlideShow("#about_dublin_slide_show_imgs");
</script>


</div><!--end of content-->';



?>

<!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('5830-369-10-8445');/*]]>*/</script><noscript><a href="https://www.olark.com/site/5830-369-10-8445/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->

</body>
</html>