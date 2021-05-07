jQuery(document).ready(function($) {
	
	
	// toggle blog-menu
	$(".nav-toggle").on("click", function(){	
		$(this).toggleClass("active");
		$(".navigation").slideToggle(function (){
			$(".navigation").css('overflow', 'visible');
		});
		return false;
	});
	
	
	// Load Flexslider
    $(".flexslider").flexslider({
        animation: "slide",
        controlNav: false,
        prevText: "Prev",
        nextText: "Next",
        smoothHeight: true   
    });
    
	
	// Smooth scroll to the top	
    $('.tothetop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 500);
        return false;
    });


	// Move focus to blog menu when the navigation toggle is clicked
	$( '.nav-toggle' ).on( 'click', function() {
		$( '.blog-menu a' ).first().focus();
	} );


	// Show dropdown on focus
	$( '.blog-menu a' ).on( 'blur focus', function( e ) {
		$( this ).parents( 'li.menu-item-has-children' ).toggleClass( 'focus' );
		if ( e.type == 'focus' ) $( this ).trigger( 'focus-applied' );
	} );
	
	
	// resize videos after container
	var vidSelector = "iframe, object, video";	
	var resizeVideo = function(sSel) {
		$( sSel ).each(function() {
			var $video = $(this),
				$container = $video.parent(),
				iTargetWidth = $container.width();

			if ( !$video.attr("data-origwidth") ) {
				$video.attr("data-origwidth", $video.attr("width"));
				$video.attr("data-origheight", $video.attr("height"));
			}

			var ratio = iTargetWidth / $video.attr("data-origwidth");

			$video.css("width", iTargetWidth + "px");
			$video.css("height", ( $video.attr("data-origheight") * ratio ) + "px");
		});
	};

	resizeVideo(vidSelector);

	$(window).resize(function() {
		resizeVideo(vidSelector);
	});
	

});