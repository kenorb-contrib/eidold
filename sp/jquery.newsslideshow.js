
(function($){
    $.newsSlideShow = function(selector, settings){
		//alert("i am in newsSlideShow");
		// settings
		var config = {
			'delay': 8000,
			'captionMoveSpeed' : 1000,
			'fadeSpeed': 400
		};
		if ( settings ){$.extend(config, settings);}

		// variables
		var obj = $(selector);
		var thumbnail = obj.children('#thumbnail_block').children('.thumbnail');
		var img = obj.children('.news_slide_block').children('.news_slide_image').children('img');
		var cap = obj.children('.news_slide_block').children('.news_slide_text').children('.caption');
		//var sp  = obj.children('#stop_pause');
		var count = thumbnail.length;
		var i = 0;
		var iID="";
		
		var non_active_color	= "#fff";
		var active_color		= "#000";
		var active_background	= "url(img/thumbnail_bg_130.png)";
		
		thumbnail.mouseover(function(){
			if(iID!=""){
          		window.clearInterval(iID)
          		iID="";
				img.hide();
				cap.hide();
				i = thumbnail.index($(this));
				img.eq(i).show();
				cap.eq(i).show();
				thumbnail.css("background-image","url()");
				thumbnail.children('p').css("color",non_active_color);
				thumbnail.eq(i).css("background-position","center top");
				thumbnail.eq(i).children('p').css("color",active_color);
				//thumbnail.eq(i).css("background-image",active_background);
			}
			
			
			//slideShow();		
		});
		thumbnail.mouseout(function(){
			iID=window.setInterval(function(){slideShow();}, config.delay);
		});
		// show first image
		img.eq(0).show();
		cap.eq(0).show();
		
		function slideShow(){
			img.hide();
			cap.hide();
			i = i = ( i+1 == count ) ? 0 : i+1;
			img.eq(i).show();
			cap.eq(i).show();
			thumbnail.css("background-image","url()");
			thumbnail.children('p').css("color",non_active_color);
			thumbnail.eq(i).css("background-position","center top");
			thumbnail.eq(i).children('p').css("color",active_color);
			//thumbnail.eq(i).css("background-image",active_background);
			/*cap.eq(i).fadeOut(config.captionMoveSpeed,
				function(){
					img.eq(i).fadeOut(config.fadeSpeed,
						function(){
							i = ( i+1 == count ) ? 0 : i+1;
							thumbnail.css("background-image","url()");
							thumbnail.children('p').css("color",non_active_color);
							thumbnail.eq(i).css("background-position","center top");
							thumbnail.eq(i).children('p').css("color",active_color);
							thumbnail.eq(i).css("background-image",active_background);
							img.hide();
							img.eq(i).fadeIn(config.fadeSpeed,
								function(){
									cap.hide();
									cap.eq(i).fadeIn(config.captionMoveSpeed);
								});
						});
				});*/
		}
		function stopShow(){
			if(iID!=""){
          		window.clearInterval(iID)
          		iID="";
			}
		}
		function startShow(){
			if(iID==""){
          		iID=window.setInterval(function(){slideShow();}, config.delay);
      		}
		}

		// run slideshow
		var iID = setInterval(function(){slideShow();}, config.delay);
		/*sp.click(function(){
			if(iID!=""){
          		window.clearInterval(iID)
				sp.css("background-image","url(../img/Play-Disabled-icon.png)");
          		iID="";
			}
			else{
				iID=window.setInterval(function(){slideShow();}, config.delay);
				sp.css("background-image","url(../img/Pause-Disabled-icon.png)");
			}
		});*/
		//sp.mouseout(function(){startShow();});
        
		return this;
	};
})(jQuery);
