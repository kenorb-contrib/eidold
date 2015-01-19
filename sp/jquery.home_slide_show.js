/*
	jQuery Slideshow Plugin
*/

(function($){
    $.homeSlideShow = function(selector, settings){
		
		// settings
		//alert("I am in the slide show now");
		var config = {
			'delay': 8000,
			'captionMoveSpeed' : 300,
			'fadeOutSpeed': 1000,
			'fadeInSpeed': 1500
		};
		if ( settings ){$.extend(config, settings);}

		// variables
		var obj = $(selector);
		var img = obj.children('.slide_block');
		var coins = obj.children('#coins_blk').children('.coin');
		//alert("htere are "+coins.length);
		var count = img.length;
		var i = 0;
		var k=0;
		var iID="";

		// show first image
		img.eq(0).show();
		coins.eq(0).css('backgroundColor', '#36f');
		//if(coins.eq(0) == coins.eq(1)) alert("they are the same");
		
		function slideShow(){			
			$(".coin").css('backgroundColor', 'transparent');
			img.eq(i).fadeOut(config.fadeOutSpeed,
				function(){
					i = ( i+1 == count ) ? 0 : i+1;
					coins.eq(i).css('backgroundColor', '#36f');
					img.eq(i).fadeIn(config.fadeInSpeed);	
				});
			
		}
		function chooseSlide(){		
			stopShow();
			
			coins.stop(false,true);
			img.stop(false,true);
			
			$(".coin").css('backgroundColor', 'transparent');
			coins.eq(k).css('backgroundColor', '#36f');
			img.eq(i).fadeOut(400,
				function(){
					
					coins.eq(k).css('backgroundColor', '#36f');
					img.eq(k).fadeIn(500);	
					i = k;
				});
			startShow();
			
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
		
		//re-position coins
		var coins_blk_width = ($("#coins_blk").width() / 2) * -1;
		$(".coins:last-child").css('margin-right',0);
		$(".coins").last().css('margin-right',0);
		$("#coins_blk").css('margin-left',coins_blk_width); // reposition coins end
		
		$(".coin").click(function(){
			
			var coin_id = $(this).attr("id");
			coin_id = coin_id.replace("coin_","");
			k = parseInt(coin_id);
			chooseSlide();
		});
		
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
