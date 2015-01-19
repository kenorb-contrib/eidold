<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<!-- Google Analytics Content Experiment code -->
<script>function utmx_section(){}function utmx(){}(function(){var
k='49134352-0',d=document,l=d.location,c=d.cookie;
if(l.search.indexOf('utm_expid='+k)>0)return;
function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
'<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
'://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
'" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
</script><script>utmx('url','A/B');</script>

<!-- End of Google Analytics Content Experiment code -->


<?php include_once("online_marketing_test.php"); ?>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25004160-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<script type="text/javascript">
  var analytics=analytics||[];(function(){var e=["identify","track","trackLink","trackForm","trackClick","trackSubmit","page","pageview","ab","alias","ready","group"],t=function(e){return function(){analytics.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var n=0;n<e.length;n++)analytics[e[n]]=t(e[n])})(),analytics.load=function(e){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src=("https:"===document.location.protocol?"https://":"http://")+"d2dq2ahtl5zl1z.cloudfront.net/analytics.js/v1/"+e+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(t,n)};
  analytics.load("2ekplpodiw");
</script>


<!-- Analytics -->

<script type="text/javascript">
var analytics=analytics||[];(function(){var e=["identify","track","trackLink","trackForm","trackClick","trackSubmit","page","pageview","ab","alias","ready","group"],t=function(e){return function(){analytics.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var n=0;n<e.length;n++)analytics[e[n]]=t(e[n])})(),analytics.load=function(e){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src=("https:"===document.location.protocol?"https://":"http://")+"d2dq2ahtl5zl1z.cloudfront.net/analytics.js/v1/"+e+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(t,n)};
  analytics.load("ayur2nziob");
    <?php if ( $_SESSION['user'] ) { ?>
    analytics.identify('<?= $_SESSION['user']['id'] ?>', {
        name: '<?= $_SESSION['user']['first_name']?> <?= $_SESSION['user']['last_name'] ?>',
        email: '<?= $_SESSION['user']['email']?>',
        level: <?= $_SESSION['user']['level'] ?>
    });
<?php } ?>
</script>


<!-- end analytics -->



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="english in dublin,english in ireland,best english school in ireland, best english school in dublin, learn english,english course in dublin, english courses in dublin,ダブリンで英語を学ぶ,دراسة اللغة الانجليزية في دبلن,uczyć się angielskiego w Dublinie,Englisch lernen in Dublin,Изучение английского языка в Дублине,étudier l'anglais à Dublin,더블린에서 영어 공부를,estudar Inglês em Dublin,Estudiar Inglés en Dublín,studiare l'inglese a Dublino,在都柏林學習英語,在都柏林学习英语"/>
<meta name="keywords" content="english in dublin,english in ireland,best english school in ireland, best english school in dublin, learn english,english course in dublin, english courses in dublin,ダブリンで英語を学ぶ,دراسة اللغة الانجليزية في دبلن,uczyć się angielskiego w Dublinie,Englisch lernen in Dublin,Изучение английского языка в Дублине,étudier l'anglais à Dublin,더블린에서 영어 공부를,estudar Inglês em Dublin,Estudiar Inglés en Dublín,studiare l'inglese a Dublino,在都柏林學習英語,在都柏林学习英"/>

<meta name="google-translate-customization" content="58b58eddb12f5828-a9450924527de91c-gf0e2f0411cb20cfa-17"></meta>

<title><?php echo $page_title;?></title>
<link rel="icon" type="image/gif" href="img/favicon.gif" /> 
<link rel="shortcut icon" type="image/gif" href="img/favicon.gif" /> 
<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
<?php 
	$css_files = array("header.css",
					   "main.css",
					   "footer.css",
					   "modal_window.css",
					   "contact.css",
					   "calendar.css",
					   "login.css",
					   "view_event.css",
					   "confirmDelete.css",
					   "timetable.css",
					   "admin.css",
					   "floatBox.css",
					   "newsletter.css",
					   "online_test.css",
					   "price.css",
					   "online_marketing_prompt.css");
?>

<?php foreach ($css_files as $css)
{
	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/".$css."\"/>";
}
?>


</head>
<body data-src = "<?php echo $_SESSION['token'] ?>">

    
    
    <a name="top"></a> 
    
    
    
    
    
    

	
	
	
    <div id="content">
    <div id="header_banner_bg"></div>
    
    <?php 
	
		$hb_array = array(
								
							0 => 	'<div id="hellobar_1" class="hellobar">
										<div class="hellobar_info_container">
											<div class="hellobar_text">what\'s your english level? Do our <span>FREE online tests</span> to find out now!</div>
											<a href="http://www.englishindublin.com/user_register.php?from=online_test&utm_source=website&utm_medium=hellobar&utm_term=Hellobar+test&utm_content=free+english+test&utm_campaign=hellobar+Free+english+Test"><div class="hellobar_button">Register & do the Tests now!</div></a>
											<br class="clear" />
										</div>',
							1 => '	<div id="hellobar_2" class="hellobar">
										<div class="hellobar_info_container">
											<div class="hellobar_text">Sign up and download our <span>FREE Guide</span> on how to speak like Irish people!</div>
											<a href="http://www.englishindublin.com/hellobar_register.php?from=local_lang&utm_source=website&utm_medium=hellobar&utm_term=Hellobar+language&utm_content=free+guide+to+speaking+like+an+irishmen&utm_campaign=hellobar+language+guide"><div class="hellobar_button">Sign Up and Download Now!</div></a>
											<br class="clear" />
										</div>');
	
	?>
    
    <div id="hellobar_show_0" class="hellobar_show"></div>
    <div id="hellobar_wrap_0" class="hellobar_wrap">
    	<?php echo $hb_array[rand(0,1)]; ?>
        	<div id="hellobar_hide_0" class="hellobar_hide"></div>
        </div>  
    </div>
    
    
    
    
    
    <div id="top_banner">
   	
    <div id="header_img"><a href="./"><img src="img/eid_logo_png.png" /></a></div>
    <div id="social_media_contact">
    	
    	<div class="social_network_icon"><a href="http://www.youtube.com/user/ENGLISHinDUBLIN?feature=mhee" target="_blank"><img src="img/youtube.png" /></a></div>
        <div class="social_network_icon"><a href="http://www.linkedin.com/profile/view?id=60863150&locale=en_US&trk=tyah2" target="_blank"><img src="img/linkedin.png" /></a></div>
        <div class="social_network_icon"><script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
<a href="skype:english.in.dublin?chat"><img src="img/skype_1.png" /></a></div>
        <div class="social_network_icon"><a href="http://twitter.com/#!/englishindublin" target="_blank"><img src="img/twitter.png" /></a></div>
        <div class="social_network_icon"><a href="http://www.facebook.com/pages/English-In-Dublin/74828860184" target="_blank"><img src="img/facebook.png" /></a></div>
        
    </div>
    
    <div id="top_banner_contact">
    	<div class="social_network_icon" id="top_banner_email"><a href="mailto:info@englishindublin.ie" data-click-event="Email Address Clicked"><img src="img/email_us_icon.jpg" /></a></div>
        <div class="social_network_icon"><img src="img/top_banner_phone.jpg" /></div>
    </div>
   	
    <div id="multilang_block">
    
    	<div class="multilang_item"><a href="./ch/index.php"><img src="img/Chinese.png" /></a></div>
        <div class="multilang_item"><a href="./kr/index.php"><img src="img/Korean.png" /></a></div>
        <div class="multilang_item"><a href="./jp/index.php"><img src="img/Japanese.png" /></a></div>
        <div class="multilang_item"><a href="./pt/index.php"><img src="img/Brazilian.png" /></a></div>
        <div class="multilang_item"><a href="./fr/index.php"><img src="img/French.png" /></a></div>
        <div class="multilang_item"><a href="./sp/index.php"><img src="img/Spanish.png" /></a></div>
        
        <div class="multilang_item"><a href="./rs/index.php"><img src="img/Russian.png" /></a></div>
        <div class="multilang_item"><a href="./it/index.php"><img src="img/Italian.png" /></a></div>
        
    </div>
    
    
    
    
    
   
   <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
   
   
   
   
  
  		<div id="login_button">
        <form action="<?php echo isset($_SESSION['user']) ? "login_process.php" : "login.php"; ?>" method="post">
        	<?php $status = isset($_SESSION['user']) ? "Log Out" : "Log In"; ?>
            <table style="padding:0;margin:0; border:0px solid #ccc;">
            <tr>
            
            <td style="text-align:right; text-transform:capitalize;">
			<?php echo isset($_SESSION['user']) ? "Welcome, ".$_SESSION['user']['first_name']." ".$_SESSION['user']['last_name'] : ""; ?>
            
            </td>
            
            
            
        	<td style="border:0px solid #ccc; width:100px; text-align:right;">
            <input class="admin_buttons" type="submit" value="<?php echo $status; ?>"/>
            </td>
            
            
            
            
            
            <?php echo isset($_SESSION['user']) ? '' : '<td  style="border-left:1px solid #ccc; width:70px; text-align:right;">
			<a href="user_register.php" id="register_button">Register</a></td>'; ?>
            
            </tr>
            </table>
            <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>" />
            <input type="hidden" name="action" value="<?php echo isset($_SESSION['user']) ? "user_logout" : "user_login"; ?>" />
        </form>
        </div>
    </div><!--end of top banner -->
    
    
   <div id="center_wrap">
    <div id="center_container"> 
    
    
   
    
    
   