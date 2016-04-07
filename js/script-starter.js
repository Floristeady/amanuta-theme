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
		homeGallery();
		insertGallery();
		appGallery();
		appCarousel();
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
		    $('.gallery-icon a').addClass('view');
		});
		
		$('div.gallery').flexslider({
			animation: "fade",
		    animationLoop: true,
		    controlNav: true,
		    directionNav: false,
		    //smoothHeight: true,
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
		    itemWidth: 180,
			itemMargin: 40
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
