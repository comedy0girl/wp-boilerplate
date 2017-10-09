
$(document).ready(function(){

	new WOW().init();

   $('a').each(function() {
    if ($(this).prop('href') == window.location.href) {
      $(this).addClass('current');
    }
  });

    var img='';
      $('img').each(function(){
        
          $(this).wrap('<div class="image-and-bg-wrapper"><span class="img-shader"></span></div>');
        
      });


    $('.slick-slider').slick({
			slidesToShow: 1,
		    slidesToScroll: 1,
		    dots: false,
	    	arrows: false,
		    infinite: true,
		    autoplay: true,
		    cssEase: 'linear',responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
	  });

});


     


