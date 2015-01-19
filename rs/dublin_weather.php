<?php	
	include_once '../../sys_ch/core/init.inc.php';
	$page_title = "English in Dublin | Dublin Weather";
	include_once 'header.php';
?>

<?php
echo '
			<div class="info_block_background">
			<div class="info_block first_info_block" id="dublin_weather_block">
				<h1 class="info_block_title">Weather in Dublin</h1>
					<table class="info_table" cellspacing="0px">
						<tr>
							<td><img src="../img/weather.jpg"></td>
							<td class="text_td"><p><span>Ireland</span> has a temperate climate, influenced by the relatively warm waters of the Gulf Stream, in whose path the island lies. During the winter months, temperatures rarely drop below freezing, and snow is uncommon.</p>
							<p>The coldest and wettest months are December, January and February, which means temperatures of between 4&#8451;and 7&#8451;. July and August are the warmest months with mean temperatures of between 14&#8451; and 16&#8451;, rarely rising above 22&#8451;.</p>

<p>Go to the <a href="http://www.met.ie/forecasts/county.asp">MET Ireland website</a> for the latest information on the weather in Dublin.</p>
						</p></td>
						</tr>
					</table>
			</div>
			</div>';
?>

<?php include_once 'footer.php'; ?>