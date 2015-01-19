<?php	
	include_once '../../sys_ch/core/init.inc.php';
	$page_title = "English in Dublin | CLIMA A DUBLINO";
	include_once 'header.php';
?>

<?php
echo '
			<div class="info_block_background">
			<div class="info_block first_info_block" id="dublin_weather_block">
				<h1 class="info_block_title">CLIMA A DUBLINO</h1>
					<table class="info_table" cellspacing="0px">
						<tr>
							<td><img src="../img/weather.jpg"></td>
							<td class="text_td"><p>L\'Irlanda è caratterizzata da un clima 
temperato, influenzato dalle acque 
relativamente calde della Corrente del 
Golfo, nel cui percorso si trova anche l\'isola. 
Durante i mesi invernali le temperature generalmente non scendono sotto lo zero e le nevicate sono 
rare.</p>
							<p>I mesi più freddi e umidi sono dicembre, gennaio e febbraio, con temperature comprese tra 4° e 7° C. 
Luglio e agosto sono i mesi più caldi, con temperature medie di 14°-16° C, raramente la temperatura 
sale oltre i 22° C.</p>

<p>Visita <a href="http://www.met.ie/forecasts/county.asp">MET Ireland website</a> per le ultime informazioni sul meteo a Dublino!</p>
						</p></td>
						</tr>
					</table>
			</div>
			</div>';
?>

<?php include_once 'footer.php'; ?>