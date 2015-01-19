<?php	
	include_once '../../sys_ch/core/init.inc.php';
	$page_title = "English in Dublin | ORARIO DEI CORSI";
	include_once 'header.php';
?>

<?php
echo'
<div class="info_block_background">
			<div class="info_block" id="time_table_block">
				<h1 class="info_block_title">ORARIO DEI CORSI</h1>
				<div id="tooltip_box"><p id="tooltip_p"></p></div>
				<div id="time_table">
				<p id="dec_p">L\'Istituto <span>English in Dublin</span> offre una vasta gamma di corsi di inglese, per soddisfare le esigenze linguistiche di tutti gli
studenti. La tabella sottostante mostra l\'orario dei corsi in base al livello di inglese.</p>
					<table cellspacing="1px">
						<tr>
							<th id="first_th">Courses Available</th>
							<td class="time">Mattina 9:00-12:00</td>
							<td class="time">Primo pomeriggio 12:30-13:30</td>
						</tr>
						<tr>
							<th class="has_tooltip" id="Elementary">Elementare (General English)</th>
							<td>::</td>
							<td></td>
						</tr>
						<tr>
							<th class="has_tooltip" id="Pre-Intermediate">Pre-Intermedio (General English)</th>
							<td>::</td>
							<td>::</td>
						</tr>
						<tr>
							<th class="has_tooltip" id="Intermediate">Intermedio (General English)</th>
							<td>::</td>
							<td>::</td>
						</tr>
						<tr>
							<th class="has_tooltip" id="Upper_Intermediate">Intermedio avanzato (General English)</th>
							<td>::</td>
							<td>::</td>
						</tr>
						<tr>
							<th class="has_tooltip" id="Advanced">Avanzato (General English)</th>
							<td>::</td>
							<td></td>
						</tr>
						<tr>
							<th class="special_th has_tooltip" id="IELTS">Corso di preparazione esame IELTS</th>
							<td class="special_td">::</td>
							<td class="special_td">::</td>
						</tr>
						<tr>
							<th class="special_th has_tooltip" id="CAE">Corso di preparazione esame CAE</th>
							<td class="special_td">::</td>
							<td class="special_td"></td>
						</tr>
						<tr>
							<th class="special_th has_tooltip" id="FCE">Corso di preparazione esame FCE</th>
							<td class="special_td">::</td>
							<td class="special_td">::</td>
						</tr>
					
					</table>
				</div>
			</div>
			</div>';

?>

<?php include_once 'footer.php'; ?>