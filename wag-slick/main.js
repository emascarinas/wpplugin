(function( $ ) {

	$('.slickSlider').slick({
		arrows: true,
		autoplay: true,
		infinite: true,
		prevArrow: '<button class="left-arrow" aria-label="previous"><i class="fas fa-chevron-left"></i></button>',
		nextArrow: '<button class="right-arrow" aria-label="next"><i class="fas fa-chevron-right"></i></button>',
		responsive: [
		{
			breakpoint: 800,
			settings: {
				arrows: false,
			}
		}
		]
	});

	var $navigationHeightOG = $( '#masthead' ).height();
	var $windowOG = $(window).height();
	var $chosenHeightOG = ($windowOG - $navigationHeightOG);
	var $windowSize = $(window);
	$('.slickSlider.slick-slider .slick-track').css('height', $chosenHeightOG);


	function resizeNav() {
        var $navigationHeight = $( '#masthead' ).height();
    	var $chosenHeight = ($(window).height() - $navigationHeight);
	  		$('.slickSlider.slick-slider .slick-track').css('height', $chosenHeight);
	}
	$windowSize
		.resize(resizeNav)
		.trigger('resize');

})(jQuery);