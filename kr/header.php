<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="더블린 영어 학교 | 영어연수 | 아일랜드 영어연수 | 더블린 | 더블린 영어어학원 | 더블린 최고의 어학원"/>
<meta name="keywords" content="더블린 영어 학교 | 영어연수 | 아일랜드 영어연수 | 더블린 | 더블린 영어어학원 | 더블린 최고의 어학원"/>
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
        	<?php $status = isset($_SESSION['user']) ? "로그아웃" : "로그인"; ?>
            <table style="padding:0;margin:0; border:0px solid #ccc;">
            <tr>
            
            <td style="text-align:right; text-transform:capitalize;">
			<?php echo isset($_SESSION['user']) ? "안녕하세요 ".$_SESSION['user']['first_name']." ".$_SESSION['user']['last_name']." :)" : ""; ?>
            </td>
            
            
            
        	<td style="border:0px solid #ccc; width:100px;">
            <input class="admin_buttons" type="submit" value="<?php echo $status; ?>"/>
            </td>
            
            
            
            
            
            <?php echo isset($_SESSION['user']) ? '' : '<td  style="border-left:1px solid #ccc; width:70px; text-align:right;">
			<a href="user_register.php" id="register_button">등록</a></td>'; ?>
            
            </tr>
            </table>
            <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>" />
            <input type="hidden" name="action" value="<?php echo isset($_SESSION['user']) ? "user_logout" : "user_login"; ?>" />
        </form>
        </div>
   
   
   
   
   

   
   
   
   
   
   
   
   
   
   
   
   
    	
    </div>
    <div id="menu">
    	
        <div class="menu_title"><a href="index.php"><img src="../img/home_icon.png" /></a></div> 
        <div class="menu_title has_menu" id="courses_title">코스</div> 
        <div class="menu_title has_menu" id="students_title">학생</div> 
        <div class="menu_title has_menu" id="useful_title">유용한 정보</div> 
        <div class="menu_title has_menu" id="about_title">저희에 관하여</div> 
        <div class="menu_title has_menu" id="social_title">이벤트</div> 
        
    </div>

    <div class="menu_body home_part" id="courses_body">
    	<div class="menu_sub_block">
            <a href="course_timetables.php">
            <div class="menu_bar menu_bar_first">코스 시간표</div></a>
            <a href="general_english.php">
            <div class="menu_bar">일반 영어</div></a>
             <a href="exam_courses.php">
            <div class="menu_bar">시험반</div></a>
             <a href="tesol_course.php">
            <div class="menu_bar">TESOL 과정</div></a>
            <a href="course_fees.php">
            <div class="menu_bar">학원비</div></a>
            <a href="online_test.php">
            <div class="menu_bar">무료 온라인 테스트</div></a>
           
        </div>
       
        <div class="menu_sub_block">
        	<div class="header_rich_content">
                <a href="http://www.youtube.com/embed/kHBmFfEQjPs?keepThis=true&TB_iframe=true&height=320&width=430" 
                title="Stephen Talking About IELTS" class="thickbox">
                <img src="../img/steven.png" class="rich_content_img""/></a>
                <p class="rich_content_title"><strong>IELTS 시험에 대해 말하고 있는 스티븐</strong></p>
                <p class="rich_content_text">
                IELTS 시험은 캠브리지 ESOL, 영국 문화원과 IDP(IELTS 호주)와 함께 실행됩니다. 현재 100 만명

이상의 사람들이 매년 영어권 국가에서 자신의 취업을 위한 자기계발을 위해 IELTS 시험을 봅니다.

IELTS는 세계적으로 6,000개 이상의 단체가 인정하고 있습니다. ... 
                <span class="rich_content_link">
                <a href="exam_courses.php">자세히보기</a></span></p>
            </div>
        </div>     
    </div>
    <div class="menu_body home_part" id="useful_body">
    	<div class="menu_sub_block">
        
            <a href="about_dublin.php">
            <div class="menu_bar menu_bar_first">더블린에 대하여</div></a>
            <a href="dublin_weather.php">
            <div class="menu_bar">더블린 날씨</div></a>
           
            <a href="contact_us.php">
            <div class="menu_bar">미국의 소리 접촉하기</div></a>
        </div>
		<div class="menu_sub_block">
        	<div class="header_rich_content">
                <a href="http://www.daft.ie" target="_blank"><img class="rich_content_img" src="../img/rent.jpg"/></a>
                <p class="rich_content_title"><strong>for rent</strong></p>
                <p class="rich_content_text">
                여러분이 살 집 혹은 친구들과 함께 집을 얻고자하는 사람들에게 좋은 집을 찾아주는
웹싸이트들이 많이 있습니다. 온라인상으로 가장 풍부한 정보를 제공하는 싸이트는

<span class="rich_content_link"><a href="http://www.daft.ie" target="_blank">www.daft.ie</a></span> 입니다. 지금 바로 클릭해서 찾아보십시오.
                
                </p>
           </div>
        </div>
        
    </div>
    
    <div class="menu_body home_part" id="students_body">
    	<div class="menu_sub_block">
            <a href="how_to_book.php">
            <div class="menu_bar menu_bar_first">예약하는 방법</div></a>
            <a href="airport_transfer.php">
            <div class="menu_bar">공항이동</div></a>
            <a href="accomodation.php">
            <div class="menu_bar">숙박</div></a>
            <a href="contact_us.php">
            <div class="menu_bar">저희에게 연락하세요</div></a>
        </div>
        <div class="menu_sub_block">
            <a href="medical_insurance.php">
            <div class="menu_bar menu_bar_first">의료 보험</div></a>
            <a href="on_arrival.php">
            <div class="menu_bar">도착할 때</div></a>
            <a href="emergency.php">
            <div class="menu_bar">긴급상황</div></a>
            <a href="school_holidays.php">
            <div class="menu_bar">학교 휴가</div></a>
            <a href="meet_the_students.php">
            <div class="menu_bar">학생들을 만나보세요</div></a>
            
        </div>
        

        
        
        <div class="menu_sub_block">
        	<div class="header_rich_content">
                <a href="http://www.youtube.com/embed/ULOYpj7gZR4?keepThis=true&TB_iframe=true&height=320&width=430" 
                title="Korean and Venezuela Student's Feedback" class="thickbox">
                <img class="rich_content_img" src="../img/english_in_dublin_students.jpg"/></a>
                <p class="rich_content_title"><strong>한국과 베네수엘라 학​​생의 의견</strong></p>
                <p class="rich_content_text">
                English in Dublin의 학생들이 아일랜드에서 머무는 동안 영어 실력을 향상하고자 했던 사람들과 겪었던

즐거운 경험들을 공유하고자 합니다… 더 보기
                <span class="rich_content_link">
                <a href="http://www.youtube.com/embed/ULOYpj7gZR4?keepThis=true&TB_iframe=true&height=320&width=430" 
                title="Korean and Venezuela Student's Feedback" class="thickbox">더 보기</a></span></p>
            </div>
        </div>  
    </div>
    <div class="menu_body home_part" id="about_body">
        <div class="menu_sub_block">
            <a href="about_us.php">
            <div class="menu_bar menu_bar_first">English in Dublin</div></a>
            <a href="staff.php">
            <div class="menu_bar">직원</div></a>
           
            <a href="https://picasaweb.google.com/eidschool/" target="_blank">
            <div class="menu_bar">갤러리</div></a>
            <a href="partners.php">
            <div class="menu_bar">사업 파트너</div></a>          
        </div>
        <div class="menu_sub_block">
            <a href="news_events.php">
            <div class="menu_bar menu_bar_first">뉴스 & 이벤트</div></a>
            <a href="English_in_dublin_2012_4-Week_Free_Course_Competition_Winner.php">
            <div class="menu_bar">경쟁 결과</div></a>
            <a href="sudoku.php">
            <div class="menu_bar">퍼즐</div></a>
            
            <a href="contact_us.php">
            <div class="menu_bar">저희에게 연락하세요</div></a>
                    
        </div>
        
    </div>
    <div class="menu_body home_part" id="social_body">
    	<div class="menu_sub_block">
            <a href="page.php?page=calendar&page_title=Calendar">
            <div class="menu_bar menu_bar_first">달력</div></a>
	    	<a href="http://www.merrionart.com">
            <div class="menu_bar">Merrion 광장</div></a>
            
            <a href="picture_wall_1.php">
            <div class="menu_bar">예술 벽</div></a>
           	<a href="contact_us.php">
            <div class="menu_bar">저희에게 연락하세요</div></a>

         
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