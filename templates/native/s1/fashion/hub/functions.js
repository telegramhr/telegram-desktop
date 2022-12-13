// Load main functions...

jQuery(document).ready( function() {
    // Initialize WOW.js animations
    new WOW().init();
});
jQuery(document).scroll(function(e) {
    // Start draw animation when in viewport
    $('#girl_1:in-viewport').addClass( 'start' );
    $('#girl_2:in-viewport').addClass( 'start2' );
    $('#girl_3:in-viewport').addClass( 'start3' );
});