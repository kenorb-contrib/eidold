<!-- marketing user register track -->
<script type="text/javascript">
var analytics=analytics||[];(function(){var e=["identify","track","trackLink","trackForm","trackClick","trackSubmit","page","pageview","ab","alias","ready","group"],t=function(e){return function(){analytics.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var n=0;n<e.length;n++)analytics[e[n]]=t(e[n])})(),analytics.load=function(e){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src=("https:"===document.location.protocol?"https://":"http://")+"d2dq2ahtl5zl1z.cloudfront.net/analytics.js/v1/"+e+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(t,n)};
  analytics.load("ayur2nziob");
  <?php 
	if ( isset($_SESSION['user']) || isset($_SESSION['marketing_user']) ) { 
		if(isset($_SESSION['user']))
		{
			$user = $_SESSION['user'];
			echo 'analytics.identify(\''.$user['id'].'\',{
				name:\''.$user['first_name'].' '.$user['last_name'].'\',
				email:\''.$user['email'].'\'
			});';
		}
		elseif( isset($_SESSION['marketing_user'])) 
		{
			$user = $_SESSION['marketing_user']; 
			$temp = explode("::::", $user['from']);

			echo 'analytics.identify(\''.$temp[0].'\',{
				email:\''.$user['email'].'\'
			});';
		}
	} 
 ?>
</script>
<!-- end of marketing_user register track -->