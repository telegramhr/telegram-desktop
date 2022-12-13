// Load main functions...

// Initialize WOW.js animations
jQuery(document).ready( function() {
    new WOW().init();
    var rellax = new Rellax('.rellax', {
        breakpoints: [576, 768, 1023]
      });
});

function recipe_click (targetrecipe, targetbutton) {
    $(".active-button").toggleClass('active-button');
    $(targetbutton).toggleClass('active-button');
    $(".active-recipe").toggleClass('active-recipe');
    $(targetrecipe).toggleClass('active-recipe');
}