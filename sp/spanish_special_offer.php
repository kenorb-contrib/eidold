<?php	
	include_once '../../sys_ch/core/init.inc.php';
	$page_title = "Escuela de Inglés | oferta especial";
	include_once 'header.php';
?>

<?php

$slide_imgs = array("slide5.jpg","slide6.jpg","slide8.jpg","slide7.jpg");
	echo '<div class="block" id="home_slide_blk"><div id="summer_offer_headline"><img src="images/summer_offer.png" /></div>';
	$count = count($slide_imgs);
	for ($i = 0; $i < $count ; $i++)
	{
		echo '<div class="slide_block" id="block_'.$i.'" style="background-image:url(images/'.$slide_imgs[$i].');"></div>';
	}
	echo '<div id="coins_blk">';
	for ($i = 0; $i < $count ; $i++)
	{
		echo '<div class="coin" id="coin_'.$i.'"></div>';
	}
	echo '</div><!--end of coin-->';
	echo '</div><!--end of home_slide_blk-->';

echo '
		<div class="info_block" id="spanish_special_offer_block">
				
				<div class="spanish_sub_blk">
				<h3>Oferta Especial - gran valor todo el año</h3>
						<p> ¡Un curso de Inglés General de tiempo
completo, 100€ por semana! Puedes estudiar en las tardes, de 12:30 a 15:30, Lunes a Viernes, todo

el año. Material de estudio incluido en el precio. Nuestros profesores están altamente motivados,
bien calificados y tienen experiencia. Todos ellos cuentan con títulos y calificaciones TEFL (Teaching
English as a foreign language), y varios también poseen un título de maestría en la enseñanza de
Inglés.</p>
	</div>
                                               

<div class="spanish_sub_blk">
<h3>Nuestras clases</h3>
<p>
Contenido del curso y metodología: En English in Dublin todas las clases siguen un programa cuidadosamente planeado, probado y comprobado.  Los maestros se guían por un plan de estudios específico para cada nivel, además de una metodología variada con énfasis en prácticas pedagógicas sólidas. La metodología se basa en la Enseñanza Comunicativa de la Lengua y Aprendizaje basado en ejercicios. Esto significa que se alenta a los estudiantes a hablar e interactuar con otros en su clase.
En English in Dublin la comunicación y la interacción en inglés son muy importantes.</p>
</div>

<div class="spanish_sub_blk">
<h3>Nuestra Ubicación</h3>
<p>
English in Dublin se ubica en Merrion Square, Dublín.
Este año, Merrion Square está celebrando su 250 aniversario, el cual tiene una fuerte herencia Georgiana. Leinster House, la Galería Nacional y el Museo de Historia Natural están a sólo cinco minutos de distancia.
Oscar Wilde vivió en No. 1 Merrion Square cuando era niño, donde Bram Stoker pasó mucho tiempo asistiendo a los salones de Lady Wilde, mientras que WB Yeats vivió en No. 82, y Daniel O\'Connell en No. 58.
La plaza es conocida por su Galería abierta de Arte Dominical y hay un hermoso parque público frente a la escuela. St. Stephen\'s Green y Grafton Street están a pocos pasos de la escuela.</p>
</div>
<br style="clear:both;" />
<p id="email_info">Para más información, por favor, contacta <strong><a href="mailto:info@englishindublin.ie">info@englishindublin.ie</a></strong> </p>


						
					
		</div>
		';
?>

<?php include_once 'footer.php'; ?>