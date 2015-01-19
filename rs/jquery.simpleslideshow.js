/*
	jQuery Slideshow Plugin
*/

(function($){
    $.simpleSlideShow = function(selector, settings){
		// settings
		var config = {
			'delay': 12000,
			'captionMoveSpeed' : 300,
			'fadeSpeed': 400
		};
		if ( settings ){$.extend(config, settings);}

		// variables
		var obj = $(selector);
		var img = obj.children('img');
		var cap = obj.children('.caption');
		var sp  = obj.children('#stop_pause');
		var count = img.length;
		var i = 0;
		var iID="";

		// show first image
		img.eq(0).show();
		cap.eq(0).show();
		
		function slideShow(){
			cap.eq(i).fadeOut(config.captionMoveSpeed,
				function(){
					img.eq(i).fadeOut(config.fadeSpeed,
						function(){
							i = ( i+1 == count ) ? 0 : i+1;
							img.eq(i).fadeIn(config.fadeSpeed,
								function(){
									cap.eq(i).fadeIn(config.captionMoveSpeed);
								});
						});
				});
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
		sp.click(function(){
			if(iID!=""){
          		window.clearInterval(iID)
				sp.css("background-image","url(img/Play-Disabled-icon.png)");
          		iID="";
			}
			else{
				iID=window.setInterval(function(){slideShow();}, config.delay);
				sp.css("background-image","url(img/Pause-Disabled-icon.png)");
			}
		});
		//sp.mouseout(function(){startShow();});
        
		return this;
	};
})(jQuery);
