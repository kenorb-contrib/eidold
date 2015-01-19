<?php	
	include_once '../../sys_ch/core/init.inc.php';
	$page_title = "Precios de los cursos";
	include_once 'header.php';
?>

<?php

	include_once '../price_list.php';
			$full_time_price_split = explode("||",$full_time_price);
			$part_time_price_split = explode("||",$part_time_price);
			 $markup .= '
			 <div class="info_block_background">
		<div class="info_block first_info_block" id="fees_block">
			<h1 class="info_block_title">Precios de los cursos 2013</h1>
				<table class="info_table" cellspacing="0px">
					<tr>
						<td><img src="../img/fees.jpg"></td>
						<td class="text_td">
						<p>
						English in Dublin ofrece precios muy competitivos para una escuela que enseña Inglés  en Dublín que cuenta con  una excelente reputación. Todos nuestros profesores son hablantes nativos de Inglés, con un mínimo de 2 años de experiencia docente y están completamente cualificados para ayudar a alcanzar tus metas de aprendizaje de inglés.
						</p>
					</tr>
				</table>
		</div>
		</div>';
			$markup .= '<div class="info_block_background">
			<div class="info_block" id="fees_full_time_table">
							<h1 class="info_block_title">Arancel Tiempo Completo</h1>
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
							<h1 class="info_block_title">Arancel Tiempo Parcial<br>cursos de tiempo : A) 12.30 – 15.30 o B) 18.30 – 21.30</h1>
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