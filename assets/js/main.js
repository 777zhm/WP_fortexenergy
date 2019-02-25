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
			autoPlay : 3500
		});
// End owl carousel config


}); //document.ready

})( jQuery );