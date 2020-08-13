(function( $ ) {
	var navigationHeightOG = $( '#masthead' ).outerHeight();
	var windowHeight = $(window).height();
	var minHeightOG = (windowHeight - navigationHeightOG);	

	// 		jarallax ***********************************************
	$('.jarallax2').css('min-height', minHeightOG);

	$( window ).on( "orientationchange resize", function( event ) {
		$('.jarallax2').css('min-height', minHeightOG);
	});
	$('.jarallax2').jarallax({
		speed: 0.2
	});

})(jQuery);