(function( $ ) {

	var toTopButton = $('#toTop');
	$(document).scroll(function() {
		$(document).scrollTop() > 800 ? toTopButton.fadeIn().show() : toTopButton.fadeOut().hide();
	});

                // Add smooth scrolling to all links
                $("a#toTop").on('click', function(event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                        var targetOffset = $(hash).offset().top - $('.masthead').height();
                        $('html, body').animate({
                            scrollTop: targetOffset
                        }, 1000, function(e){
                            // Add hash (#) to URL when done scrolling (default click behavior)
                            //window.location.hash = hash;
                        });
                    } // End if
                });

})(jQuery);