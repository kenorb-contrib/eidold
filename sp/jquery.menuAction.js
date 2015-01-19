jQuery(function($){
	$(".has_menu").mouseover(function(){
		if (!$(this).hasClass("menu_active")){
			//$(".menu_body").slideUp();
			$(".menu_body").hide();
			$(".menu_title").css("background","transparent").removeClass("menu_active");
			$(".menu_title").css("color","#000");
		}
		$(this).addClass("menu_active");
		var id = $(this).attr('id');
		var bd = id.replace("_title", "_body");
		//$(this).css("background-color","#ff0");
		if( id == "courses_title" )
		$(this).css('background-color','#09f');
		
		if( id == "students_title" )
		$(this).css('background-color','#f90');
		
		if( id == "useful_title" )
		$(this).css('background-color','#c0f');
		
		if( id == "about_title" )
		$(this).css('background-color','#060');
		
		if( id == "social_title" )
		$(this).css('background-color','#c00');
		//$(this).css('background-image','url(../img/menu_tab.jpg)');
		//$(this).css('background-image','url(../img/menu_tab_gradient.jpg)');
		//$(this).addClass("menu_title_over");
		$(this).css("color","#fff");
		//$(this).css("border-left","solid 1px #ff0");
		
		$("#"+bd).show();
	});
	$("#header, .info_block, #footer, #home_title,#top_banner,.block").mouseover(function(){
		$("#mask").hide();
		$(".menu_title").css("background","transparent").removeClass("menu_active");
		$(".menu_title").css("color","#000");
		//$(".menu_body").slideUp(300);
		$(".menu_body").hide();
	});
});

