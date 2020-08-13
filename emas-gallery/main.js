(function( $ ) {

  	// Resize the images in the grid according to a given
  	// ratio with the DynamicImagesByRatio plugin

  	var delay = 500;
  	window.setTimeout(function() {

	  	var dynamicSliderImages = new DynamicImagesByRatio({
			containerSelector: '#portfolio-items .item .feat-image-container',
			ratio: {
				width: 4, // Set ratio
				height: 3
			}
		});

  	}, delay);

  	$(".feat-image-container").fancybox({
  		padding : 0
  	});

})(jQuery);