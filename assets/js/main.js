(function($) {
$(document).ready(function() {

// Start Main menu navigation
function openOverlay() {
	$('#burger_nav').css("width", "100%");
};

function closeOverlay() {
	$('#burger_nav').css("width", "0%");
};

$('#burger_open').click(function(){
	openOverlay();
});

$('#burger_close').click(function(){
	closeOverlay();
});
// End Main menu navigation
// Start owl carousel config
		$('.partners_slider').owlCarousel({
			navigation : false,
			pagination : false,
		      items : 4,
		      itemsDesktop : [1199,4],
		      itemsDesktopSmall : [979,3],
			autoPlay : 4000
		});
// End owl carousel config


// Start Backtotop button	      
	$('.backtotop_button').click(function(){ 
		$('html,body').animate({ scrollTop: 0 } );
		return false; 
	});
// End Backtotop button

// Start countTo.js numbers

function isScrolledIntoView(elem) {
  var $elem = $(elem);
  var $window = $(window);

  var docViewTop = $window.scrollTop();
  var docViewBottom = docViewTop + $window.height();

  var elemTop = $elem.offset().top;
  var elemBottom = elemTop + $elem.height();

  return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}


$(window).on('scroll', function () {
    if (isScrolledIntoView('#timer_section')) {
        $('.timer').countTo();
        $(window).off('scroll');
    }
});


// End countTo.js numbers


}); //document.ready

})( jQuery );