<?php	
	include_once '../../sys_ch/core/init.inc.php';
	$page_title = "Escuela de Inglés | Horarios de cursos";
	include_once 'header.php';
?>

<?php
echo'
<div class="info_block_background">
			<div class="info_block" id="time_table_block">
				<h1 class="info_block_title">Horarios de cursos</h1>
				<div id="tooltip_box"><p id="tooltip_p"></p></div>
				<div id="time_table">
				<p id="dec_p"><span>
				Inglés en Dublín ofrece una amplia gama de cursos para satisfacer todas sus necesidades del idioma inglés. Por favor, verificar la siguiente tabla para ver horarios de cursos que se adapte a tu nivel:
				</p>
					<table cellspacing="1px">
						<tr>
							<th id="first_th">Cursos disponibles</th>
							<td class="time">Mañana 9:00-12:15</td>
							<td class="time">Temprano en la tarde 12:45-16:00</td>
						</tr>
						<tr>
							<th class="has_tooltip" id="Elementary">basico (Inglés General)</th>
							<td>::</td>
							<td></td>
						</tr>
						<tr>
							<th class="has_tooltip" id="Pre-Intermediate">Pre-Intermediate (Inglés General)</th>
							<td>::</td>
							<td>::</td>
						</tr>
						<tr>
							<th class="has_tooltip" id="Intermediate">Intermedio (Inglés General)</th>
							<td>::</td>
							<td>::</td>
						</tr>
						<tr>
							<th class="has_tooltip" id="Upper_Intermediate">Intermedio Alto (Inglés General)</th>
							<td>::</td>
							<td>::</td>
						</tr>
						<tr>
							<th class="has_tooltip" id="Advanced">Avanzado (Inglés General)</th>
							<td>::</td>
							<td></td>
						</tr>
						<tr>
							<th class="special_th has_tooltip" id="IELTS">Preparación para el examen IELTS</th>
							<td class="special_td">::</td>
							<td class="special_td">::</td>
						</tr>
						<tr>
							<th class="special_th has_tooltip" id="CAE">Preparación del examen CAE</th>
							<td class="special_td">::</td>
							<td class="special_td"></td>
						</tr>
						<tr>
							<th class="special_th has_tooltip" id="FCE">Preparación para los exámenes FCE</th>
							<td class="special_td">::</td>
							<td class="special_td">::</td>
						</tr>
					
					</table>
				</div>
			</div>
			</div>';

?>

<?php include_once 'footer.php'; ?>