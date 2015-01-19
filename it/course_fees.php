<?php	
	include_once '../../sys_ch/core/init.inc.php';
	$page_title = "English in Dublin | PREZZI 2013" ;
	include_once 'header.php';
?>
<?php
$markup='';
			$full_time_price =
			'Durata ::Prezzi 15 ore/settimana ::Prezzi 21 ore/settimana ::Prezzi 24 ore/settimana ::Prezzi 27 ore/settimana ::Prezzi 30 ore/settimana ::Tasse di registrazione||
			1  settimana::&#8364;150::&#8364;210::&#8364;240::&#8364;270::&#8364;300::Nil||
			2  settimane::&#8364;300::&#8364;420::&#8364;480::&#8364;540::&#8364;600::Nil||
			3  settimane::&#8364;450::&#8364;630::&#8364;720::&#8364;810::&#8364;900::Nil||
			4  settimane::&#8364;600::&#8364;840::&#8364;960::&#8364;1080::&#8364;1200::Nil||
			5  settimane::&#8364;735::&#8364;1030::&#8364;1176::&#8364;1323::&#8364;1470::Nil||
			6  settimane::&#8364;870::&#8364;1220::&#8364;1392::&#8364;1566::&#8364;1740::Nil||
			7  settimane::&#8364;1005::&#8364;1405::&#8364;1608::&#8364;1809::&#8364;2010::Nil||
			8  settimane::&#8364;1140::&#8364;1595::&#8364;1824::&#8364;2052::&#8364;2280::Nil||
			9  settimane::&#8364;1260::&#8364;1765::&#8364;2016::&#8364;2268::&#8364;2520::&#8364;50||
			10 settimane::&#8364;1380::&#8364;1930::&#8364;2208::&#8364;2484::&#8364;2760::&#8364;50||
			Durata ::Prezzi 15 ore/settimana ::Prezzi 21 ore/settimana ::Prezzi 24 ore/settimana ::Prezzi 27 ore/settimana ::Prezzi 30 ore/settimana ::Tasse di registrazione||
			11 settimane::&#8364;1500::&#8364;2100::&#8364;2400::&#8364;2700::&#8364;3000::&#8364;50||
			12 settimane::&#8364;1620::&#8364;2270::&#8364;2592::&#8364;2916::&#8364;3240::&#8364;50||
			13 settimane::&#8364;1700::&#8364;2380::&#8364;2720::&#8364;3060::&#8364;3400::&#8364;50||
			14 settimane::&#8364;1780::&#8364;2490::&#8364;2848::&#8364;3204::&#8364;3560::&#8364;50||
			15 settimane::&#8364;1860::&#8364;2605::&#8364;2976::&#8364;3348::&#8364;3720::&#8364;50||
			16 settimane::&#8364;1940::&#8364;2715::&#8364;3104::&#8364;3492::&#8364;3880::&#8364;50||
			17 settimane::&#8364;2020::&#8364;2830::&#8364;3232::&#8364;3636::&#8364;4040::&#8364;50||
			18 settimane::&#8364;2100::&#8364;2940::&#8364;3360::&#8364;3780::&#8364;4200::&#8364;50||
			19 settimane::&#8364;2180::&#8364;3050::&#8364;3488::&#8364;3924::&#8364;4360::&#8364;50||
			20 settimane::&#8364;2260::&#8364;3165::&#8364;3616::&#8364;4068::&#8364;4520::&#8364;50||
			Durata ::Prezzi 15 ore/settimana ::Prezzi 21 ore/settimana ::Prezzi 24 ore/settimana ::Prezzi 27 ore/settimana ::Prezzi 30 ore/settimana ::Tasse di registrazione||
			21 settimane::&#8364;2340::&#8364;3275::&#8364;3744::&#8364;4212::&#8364;4680::&#8364;50||
			22 settimane::&#8364;2420::&#8364;3390::&#8364;3872::&#8364;4356::&#8364;4840::&#8364;50||
			23 settimane::&#8364;2500::&#8364;3500::&#8364;4000::&#8364;4500::&#8364;5000::&#8364;50||
			24 settimane::&#8364;2580::&#8364;3610::&#8364;4128::&#8364;4644::&#8364;5160::&#8364;50||
			25 settimane::&#8364;2660::&#8364;3725::&#8364;4256::&#8364;4788::&#8364;5320::&#8364;50||
			26 settimane::&#8364;2740::&#8364;3835::&#8364;4384::&#8364;4932::&#8364;5480::&#8364;50||
			27 settimane::&#8364;2820::&#8364;3950::&#8364;4512::&#8364;5076::&#8364;5640::&#8364;50||
			28 settimane::&#8364;2900::&#8364;4060::&#8364;4640::&#8364;5220::&#8364;5800::&#8364;50||
			29 settimane::&#8364;2980::&#8364;4170::&#8364;4768::&#8364;5364::&#8364;5960::&#8364;50||
			30 settimane::&#8364;3060::&#8364;4285::&#8364;4896::&#8364;5508::&#8364;6120::&#8364;50||
			Durata ::Prezzi 15 ore/settimana ::Prezzi 21 ore/settimana ::Prezzi 24 ore/settimana ::Prezzi 27 ore/settimana ::Prezzi 30 ore/settimana ::Tasse di registrazione||
			33 settimane::&#8364;3300::&#8364;4620::&#8364;5280::&#8364;5940::&#8364;6600::&#8364;50||
			35 settimane::&#8364;3460::&#8364;4845::&#8364;5536::&#8364;6228::&#8364;6920::&#8364;50||
			36 settimane::&#8364;3540::&#8364;4956::&#8364;5664::&#8364;6372::&#8364;7080::&#8364;50||
			40 settimane::&#8364;3860::&#8364;5405::&#8364;6176::&#8364;6948::&#8364;7720::&#8364;50||
			50 settimane::&#8364;4660::&#8364;6525::&#8364;7462::&#8364;8388::&#8364;9320::&#8364;50||';
			
			$part_time_price = 
			'Durata	::Prezzi 3 ore/settimana
						::Prezzi 6 ore/settimana
						::Prezzi 9 ore/settimana
						::Prezzi 12 ore/settimana
						::Tasse di registrazione||
			1 settimana	::&#8364;30		::&#8364;60		::&#8364;90			::&#8364;120		::Nil||
			2 settimane	::&#8364;60		::&#8364;120	::&#8364;180		::&#8364;240		::Nil||
			3 settimane	::&#8364;90		::&#8364;160	::&#8364;240		::&#8364;320		::Nil||
			4 settimane	::&#8364;120	::&#8364;200	::&#8364;300		::&#8364;400		::Nil||
			5 settimane	::&#8364;150	::&#8364;240	::&#8364;360		::&#8364;480		::Nil||
			6 settimane	::&#8364;180	::&#8364;280	::&#8364;420		::&#8364;560		::Nil||
			7 settimane	::&#8364;210	::&#8364;320	::&#8364;480		::&#8364;640		::Nil||
			8 settimane	::&#8364;240	::&#8364;360	::&#8364;540		::&#8364;720		::Nil||
			9 settimane	::&#8364;270	::&#8364;400	::&#8364;600		::&#8364;800		::Nil||
			10 settimane	::&#8364;300	::&#8364;440	::&#8364;660		::&#8364;880		::Nil||
			Durata	::Prezzi 3 ore/settimana
						::Prezzi 6 ore/settimana
						::Prezzi 9 ore/settimana
						::Prezzi 12 ore/settimana
						::Tasse di registrazione||
			11 settimane	::&#8364;330	::&#8364;480	::&#8364;720		::&#8364;960		::Nil||
			12 settimane	::&#8364;360	::&#8364;520	::&#8364;780		::&#8364;1040		::Nil||
			13 settimane	::&#8364;380	::&#8364;550	::&#8364;825		::&#8364;1100		::Nil||
			14 settimane	::&#8364;400	::&#8364;580	::&#8364;870		::&#8364;1160		::Nil||
			15 settimane	::&#8364;420	::&#8364;610	::&#8364;915		::&#8364;1220		::Nil||
			16 settimane	::&#8364;440	::&#8364;640	::&#8364;960		::&#8364;1280		::Nil||
			17 settimane	::&#8364;460	::&#8364;670	::&#8364;1005		::&#8364;1340		::Nil||
			18 settimane	::&#8364;480	::&#8364;700	::&#8364;1050		::&#8364;1400		::Nil||
			19 settimane	::&#8364;500	::&#8364;730	::&#8364;1095		::&#8364;1460		::Nil||
			20 settimane	::&#8364;520	::&#8364;760	::&#8364;1140		::&#8364;1520		::Nil||
			Durata	::Prezzi 3 ore/settimana
						::Prezzi 6 ore/settimana
						::Prezzi 9 ore/settimana
						::Prezzi 12 ore/settimana
						::Tasse di registrazione||
			21 settimane	::&#8364;540	::&#8364;790	::&#8364;1185		::&#8364;1580		::Nil||
			22 settimane	::&#8364;560	::&#8364;820	::&#8364;1230		::&#8364;1640		::Nil||
			23 settimane	::&#8364;580	::&#8364;850	::&#8364;1275		::&#8364;1700		::Nil||
			24 settimane	::&#8364;600	::&#8364;880	::&#8364;1320		::&#8364;1760		::Nil||
			';
			?>

<?php

	
			$full_time_price_split = explode("||",$full_time_price);
			$part_time_price_split = explode("||",$part_time_price);
			 $markup .= '
			 <div class="info_block_background">
		<div class="info_block first_info_block" id="fees_block">
			<h1 class="info_block_title">PREZZI 2013</h1>
				<table class="info_table" cellspacing="0px">
					<tr>
						<td><img src="../img/fees.jpg"></td>
						<td class="text_td"><p><span>English in Dublin</span> è una scuola molto rinomata e si
trova in centro a Dublino. Offre alta qualità di
insegnamento a prezzi molto competitivi.
Tutti i nostri insegnanti di inglese sono
madrelingua, qualificati, con un\'esperienza di
insegnamento pluridecennale (da 5 a 30 anni) e sono
disponibili ad aiutare gli studenti nel raggiungimento dei loro obbiettivi linguistici.
IngleseaDublino.it, partner ufficiale di English in Dublin, offre agli studenti italiani uno sconto speciale per la
partecipazione ai corsi. <a href="contact_us.php">Contattaci</a> per maggiori dettagli.</p>
					</tr>
				</table>
		</div>
		</div>';
			$markup .= '<div class="info_block_background">
			<div class="info_block" id="fees_full_time_table">
							<h1 class="info_block_title">PREZZI CORSI FULL - TIME</h1>
							<table class="fees_table">';
			for ($i = 0; $i < count($full_time_price_split)-1; ++$i){
				$row = explode("::",$full_time_price_split[$i]);
				if ($i%2 == 0) $markup .= '<tr class="tr_even">';
				else $markup .= '<tr class="tr_odd">';
				for($j = 0; $j < count($row); $j++){
					if ($i%11 == 0)
					$markup .= '<th>'.$row[$j].'</th>';
					else
					$markup .= '<td>'.$row[$j].'</td>';
				}
				$markup .= '</tr>';
			}
			
			$markup .='</table></div></div>';
			
			$markup .= '<div class="info_block_background"><div class="info_block" id="fees_part_time_table">
							<h1 class="info_block_title">PREZZI 2013 CORSI PART-TIME 
ORARIO CORSI : A) 12.30 - 15.30 O B) 18.30 - 21.30</h1>
							<table class="fees_table">';
			for ($i = 0; $i < count($part_time_price_split)-1; ++$i){
				$row = explode("::",$part_time_price_split[$i]);
				if ($i%2 == 0) $markup .= '<tr class="tr_even">';
				else $markup .= '<tr class="tr_odd">';
				for($j = 0; $j < count($row); $j++){
					if ($i%11 == 0)
					$markup .= '<th>'.$row[$j].'</th>';
					else
					$markup .= '<td>'.$row[$j].'</td>';
				}
				$markup .= '</tr>';
			}
			
			$markup .='</table></div></div>';
			echo $markup;
?>

<?php include_once 'footer.php'; ?>