/*
	jQuery Slideshow Plugin
*/

(function($){
    $.aboutDublinSlideShow = function(selector, settings){
		// settings
		var config = {
			'delay': 6000,
			'captionMoveSpeed' : 300,
			'fadeSpeed': 300
		};
		if ( settings ){$.extend(config, settings);}

		// variables
		var obj = $(selector);
		var img = obj.children('img');
		var count = img.length;
		var i = 0;
		var iID="";

		// show first image
		img.eq(0).show();
		
		function slideShow(){
			img.eq(i).fadeOut(config.fadeSpeed,
				function(){
					i = ( i+1 == count ) ? 0 : i+1;
					img.eq(i).fadeIn(config.fadeSpeed);	
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
		});
		//sp.mouseout(function(){startShow();});
        
		return this;*/
	};
})(jQuery);
