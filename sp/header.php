<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Escuela de ingles,English course,Curso de ingles,Study and work in Ireland,Estudiar y trabajar en Irlanda"/>
<meta name="keywords" content="Escuela de ingles,English course,Curso de ingles,Study and work in Ireland,Estudiar y trabajar en Irlanda"/>
<title><?php echo $page_title;?></title>
<link rel="icon" type="image/gif" href="img/favicon.gif" /> 
<link rel="shortcut icon" type="image/gif" href="../img/favicon.gif" /> 
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
					   "online_test.css");
?>

<?php foreach ($css_files as $css)
{
	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/".$css."\"/>";
}
?>


</head>
<body>
    <a name="top"></a>    
    <div id="content">
    <div id="top_banner">
   
   
  
   <div id="login_button">
        <form action="<?php echo isset($_SESSION['user']) ? "login_process.php" : "login.php"; ?>" method="post">
        	<?php $status = isset($_SESSION['user']) ? "Salir" : "Inicia sesión"; ?>
            <table style="padding:0;margin:0; border:0px solid #ccc;">
            <tr>
            
            <td style="text-align:right; text-transform:capitalize;">
			<?php echo isset($_SESSION['user']) ? "¡Hola ".$_SESSION['user']['first_name']." ".$_SESSION['user']['last_name']." :)" : ""; ?>
            </td>
            
            
            
        	<td style="border:0px solid #ccc; width:100px;">
            <input class="admin_buttons" type="submit" value="<?php echo $status; ?>"/>
            </td>
            
            
            
            
            
            <?php echo isset($_SESSION['user']) ? '' : '<td  style="border-left:1px solid #ccc; width:70px; text-align:right;">
			<a href="user_register.php" id="register_button">Registrar</a></td>'; ?>
            
            </tr>
            </table>
            <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>" />
            <input type="hidden" name="action" value="<?php echo isset($_SESSION['user']) ? "user_logout" : "user_login"; ?>" />
        </form>
        </div>
   
   
   
   
   

   
   
   
   
   
   
   
   
   
   
   
   
    	
    </div>
    <div id="menu">
    	
        <div class="menu_title"><a href="index.php"><img src="../img/home_icon.png" /></a></div> 
        <div class="menu_title has_menu" id="courses_title">cursos</div> 
        <div class="menu_title has_menu" id="students_title">estudiantes</div> 
        <div class="menu_title has_menu" id="useful_title">información útil </div> 
        <div class="menu_title has_menu" id="about_title">acerca de nosotros</div> 
        <div class="menu_title has_menu" id="social_title">social</div> 
   
    </div>

    <div class="menu_body home_part" id="courses_body">
    	<div class="menu_sub_block">
            <a href="course_timetables.php">
            <div class="menu_bar menu_bar_first">Horarios del curso</div></a>
            <a href="general_english.php">
            <div class="menu_bar">Inglés General,</div></a>
             <a href="exam_courses.php">
            <div class="menu_bar">Preparación para exámenes</div></a>
             <a href="tesol_course.php">
            <div class="menu_bar">Cursos de TESOL,</div></a>
            <a href="course_fees.php">
            <div class="menu_bar">Precio de los cursos</div></a>
            <a href="online_test.php">
            <div class="menu_bar">Examen online gratis</div></a>
           
        </div>
       
        <div class="menu_sub_block">
        	<div class="header_rich_content">
                <a href="http://www.youtube.com/embed/kHBmFfEQjPs?keepThis=true&TB_iframe=true&height=320&width=430" 
                title="Stephen Talking About IELTS" class="thickbox">
                <img src="../img/steven.png" class="rich_content_img""/></a>
                <p class="rich_content_title"><strong>Stephen hablar sobre IELTS</strong></p>
                <p class="rich_content_text">
               	IELTS está dirigido en colaboración con Cambridge ESOL, el British Council y IDP: IELTS Australia. Más de 1 millón de personas al año utilizan actualmente IELTS para mejorar sus oportunidades de carrera en todo el mundo de habla Inglés. IELTS es reconocido por más de 6.000 organizaciones en todo el mundo ... 
                <span class="rich_content_link">
                <a href="exam_courses.php">Leer más</a></span></p>
            </div>
        </div>     
    </div>
    <div class="menu_body home_part" id="useful_body">
    	<div class="menu_sub_block">
        
            <a href="about_dublin.php">
            <div class="menu_bar menu_bar_first">ACERCA DE DUBLÍN</div></a>
            <a href="dublin_weather.php">
            <div class="menu_bar">EL CLIMA EN DUBLÍN</div></a>
            
            <a href="contact_us.php">
            <div class="menu_bar">Contáctenos</div></a>
        </div>
		<div class="menu_sub_block">
        	<div class="header_rich_content">
                <a href="http://www.daft.ie" target="_blank"><img class="rich_content_img" src="../img/rent.jpg"/></a>
                <p class="rich_content_title"><strong>Alquila/ renta tu propio lugar</strong></p>
                <p class="rich_content_text">
                Si desea alquilar un lugar para vivir o compartir una casa con tus amigos hay muchos sitios web que ayudan a encontrar la habitación ideal. <span class="rich_content_link"><a href="http://www.daft.ie" target="_blank">www.daft.ie</a></span>  es uno de los mayores sitios web online de propiedad en Irlanda. Basta con hacer clic y empezar a buscar.
                
                </p>
           </div>
        </div>
        
    </div>
    
    <div class="menu_body home_part" id="students_body">
    	<div class="menu_sub_block">
            <a href="how_to_book.php">
            <div class="menu_bar menu_bar_first">CÓMO RESERVAR</div></a>
            
            <a href="airport_transfer.php">
            <div class="menu_bar">Traslado del aeropuerto</div></a>
            <a href="accomodation.php">
            <div class="menu_bar">Alojamiento</div></a>
            <a href="contact_us.php">
            <div class="menu_bar">Contáctenos</div></a>
        </div>
        <div class="menu_sub_block">
            <a href="medical_insurance.php">
            <div class="menu_bar menu_bar_first">SEGURO MÉDICO</div></a>
            <a href="on_arrival.php">
            <div class="menu_bar">A la llegada</div></a>
            <a href="emergency.php">
            <div class="menu_bar">Emergencia</div></a>
            <a href="school_holidays.php">
            <div class="menu_bar">Vacaciones de la escuela</div></a>
            <a href="meet_the_students.php">
            <div class="menu_bar">Conozca nuestros estudiantes</div></a>
            
        </div>
        

        
        
        <div class="menu_sub_block">
        	<div class="header_rich_content">
                <a href="http://www.youtube.com/embed/ULOYpj7gZR4?keepThis=true&TB_iframe=true&height=320&width=430" 
                title="Korean and Venezuela Student's Feedback" class="thickbox">
                <img class="rich_content_img" src="../img/english_in_dublin_students.jpg"/></a>
                <p class="rich_content_title"><strong>Comentarios de estudiante Coreano y Venezolano </strong></p>
                <p class="rich_content_text">
              	Los estudiantes de English in Dublin quieren compartir su agradable experiencia con las personas que desean mejorar su inglés y divertirse durante su estancia en Irlanda ... 
                <span class="rich_content_link">
                <a href="http://www.youtube.com/embed/ULOYpj7gZR4?keepThis=true&TB_iframe=true&height=320&width=430" 
                title="Korean and Venezuela Student's Feedback" class="thickbox">Ver más</a></span></p>
            </div>
        </div>  
    </div>
    <div class="menu_body home_part" id="about_body">
        <div class="menu_sub_block">
            <a href="about_us.php">
            <div class="menu_bar menu_bar_first">Escuela de Inglés</div></a>
            <a href="staff.php">
            <div class="menu_bar">Administración y Personal</div></a>
           	<a href="korean_school.php">
            <div class="menu_bar">ESCUELA DE COREANOS EN DUBLIN </div></a>
            <a href="https://picasaweb.google.com/eidschool/" target="_blank">
            <div class="menu_bar">Álbum de English in Dublin</div></a>
            <a href="partners.php">
            <div class="menu_bar">socios</div></a>          
        </div>
        <div class="menu_sub_block">
            <a href="news_events.php">
            <div class="menu_bar menu_bar_first">NOTICIAS Y EVENTOS</div></a>
            <a href="English_in_dublin_2012_4-Week_Free_Course_Competition_Winner.php">
            <div class="menu_bar">la competencia resultado</div></a>
            <a href="sudoku.php">
            <div class="menu_bar">juego</div></a>
            
            <a href="contact_us.php">
            <div class="menu_bar">Contáctenos</div></a>
                    
        </div>
        
    </div>
    <div class="menu_body home_part" id="social_body">
    	<div class="menu_sub_block">
            <a href="page.php?page=calendar&page_title=Calendar">
            <div class="menu_bar menu_bar_first">calendario</div></a>
	    	<a href="http://www.merrionart.com">
            <div class="menu_bar">merrion square</div></a>
            
            <a href="picture_wall_1.php">
            <div class="menu_bar">foto de la pared</div></a>
           	<a href="contact_us.php">
            <div class="menu_bar">Contáctenos</div></a>

         
        </div>
        <div class="menu_sub_block">
   
            <a href="http://www.facebook.com/pages/English-In-Dublin/74828860184" target="_blank">
            <div class="menu_bar menu_bar_first">facebook</div>
            </a>
            <a href="http://www.youtube.com/user/ENGLISHinDUBLIN?feature=mhee" target="_blank">
            <div class="menu_bar">youtube</div>
            </a>
            <a href="http://twitter.com/#!/englishindublin" target="_blank">
            <div class="menu_bar">twitter</div>
            </a>
         
        </div>
    </div>