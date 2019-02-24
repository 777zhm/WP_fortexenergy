(function($) {
$(document).ready(function() {

// Start Main menu navigation
function openOverlay() {
	$('#burger_nav').css("width", "100%");
};

function closeOverlay() {
	$('#burger_nav').css("width", "0%");
};

$('#burger_icon_box').click(function(){
	openOverlay();

	setTimeout(function() {
		closeOverlay();
	}, 20000);

});

$('#burger_icon_close').click(function(){
	closeOverlay();
});

$('.overlay_menu a').click(function(){
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