// Load main functions...

// Initialize WOW.js animations
jQuery(document).ready( function() {
  $('.gallery').slick({
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    prevArrow: '<div class="arrow arrow-left"></div>',
    nextArrow: '<div class="arrow arrow-right"></div>',
    arrows: true,
    autoplaySpeed: 3000
  });
});