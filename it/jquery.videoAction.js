// JavaScript Document
jQuery(function($){
	var processFile = "../public/process/ajax.php";
	var fx= {
		"initModal" : function(){
			//var heightFromTop = document.body.scrollTop;
			//alert(heightFromTop);
			//var framePosition = heightFromTop + 150;
			if ( $(".modal-window").length == 0){ 
				return $("<div>")
					.hide()
					.addClass("modal-window ")
					//.css("top", framePosition+"px")
					.appendTo("body"); 
					alert($(".modal-window").height());
			}
			else{ return $(".modal-window"); }
		},
		
		"boxin" : function(modal){
			
			$("<div>")
				.hide()
				.addClass("modal-overlay")
				.click(function(event){
					fx.boxout(event);
				})
				.appendTo("body");
				modal
					.hide()
					//.append(data)
					.appendTo("body");
				$(".modal-overlay")
				
					.fadeIn("slow",function(){
						$(".modal-window").fadeIn("fast");
					});
		},
		
		"boxout" : function(event){
			if (event != undefined ){ event.preventDefault(); }
			$(".video_trigger").removeClass("video_active");
			$(".modal-window, .modal-overlay")
				.fadeOut("slow", function(){
					$(this).remove();
				});
		}
		
	};
	$(".video_trigger").live("click", function(event){
		event.preventDefault();
		$(this).addClass("video_active");
		var data = $(this).attr("href");
		modal = fx.initModal();
		
		$("<a>").attr("href","#")
			.addClass("modal-close-btn")
			.html("&times;")
			.click(function(event){			
				fx.boxout(event);
			})
			.appendTo(modal);
		fx.boxin(modal);
		$.ajax({
			   type: "POST",
			   url: processFile,
			   data: "videoID="+data,
			   success: function(data){
				   console.log(data);
				   modal.append(data);
			   },
			   error:function(msg){
				   modal.append(msg);
			   }
		});
	})
		
});