jQuery(function ($) {
	
	/************************* 
	Variables (tamaños editables)
	**************************/
	
	var browserwidth;
	var largewidth = 1024; // resolución mínima desktop
	var mediumwidth = 767; // resolución mmedia
	var smallwidth = 641; // resolución chica
	
	/************************* 
	Ejecución
	**************************/
	
	// Obtiene anchura del browser 	
	function getbrowserwidth(){
		browserwidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth || 0;
		//console.log(browserwidth);
		return browserwidth;
	}
	
	function onLoadAndResize(){  
		getbrowserwidth();
		homeGallery();
		insertGallery();
		appGallery();
		appCarousel();
		lightBox();
		
		if(browserwidth <= mediumwidth ) {
	       menuMobile();
	    }
	    
	    if(browserwidth >= smallwidth){
	      menudesplegable();
	    }
	}

	function homeGallery() {  
		
		$('#home-gallery').flexslider({
		    animation: "fade",
		    animationLoop: true,
		    controlNav: true,
		    directionNav: false,
		    smoothHeight: true,
		    start: function(slider){
			     $('#home-gallery .inner').animate({
				   opacity: 1 
			    });
			    
			    if (!('.flexslider ul.slides li:only-child')){
				     $('#home-gallery .inner').delay(500).animate({
					   opacity: 1 
				    }, 400);
			    } else {
				      $('#home-gallery .inner').delay(700).animate({
					   opacity: 1 
				    }, 400);

			    }
		    }
		});
	}
	
	function insertGallery() {
		
		$('div.gallery').each(function(i) {
		    $('.gallery-icon a').addClass('tosrus');
		});
		
		$('div.gallery').flexslider({
			animation: "fade",
		    animationLoop: true,
		    controlNav: true,
		    animationLoop: false, 
		    directionNav: false,
		    selector: "dl"
		   
		});
	}
	
	function appGallery() {
		$('#app-gallery').flexslider({
			animation: "fade",
		    animationLoop: true,
		    controlNav: true,
		    directionNav: false
		});
	}
	
	function appCarousel() {
		$('#carousel-gallery').flexslider({
			animation: "slide",
		    animationLoop: true,
		    controlNav: false,
		    directionNav: true,
		    animationLoop: false,  
		    itemWidth: 180,
			itemMargin: 40
		});
	}
	
	function lightBox() {
		$("a.tosrus").tosrus();
	}
	
	function menuMobile(){

    	$(document).off('click', '#button-mobile').on('click', '#button-mobile',function(e) {
	        allowSubmit = true;
	          $('#mobile-access').addClass('active');
	          $('#inner-wrap').addClass('active');
	          $('body').addClass('open-drawer');
	          
	          addEventListener('touchmove', function(e) { 
	            if (allowSubmit) {
	              //e.preventDefault(); 
	           }
	        }, true);
	    }); 
      
	    $('#nav-close-btn, .drawer-close').bind('click focus', function(e){ 
	          allowSubmit = false;
	          $('#inner-wrap').removeClass('active');
	        $('#mobile-access').removeClass('active');
	        $('body').removeClass('open-drawer');
	        e.preventDefault();
	    }); 
	  
	}
	
	function menudesplegable(){
	    $("#access ul.menu ").superfish({
	      delay:100,
	      animation:{opacity:'show',height:'show'},
	      speed:'fast',
	      autoArrows:false,
	      dropShadows:true
	    });
	  }
		
	/************************* 
	Ejecución
	**************************/

	$(window).load(function() {
	   onLoadAndResize();
	});

	$(window).resize(function(){
		onLoadAndResize();
	});
	
	// si tiene foundation
	//$(document).foundation({});

});
