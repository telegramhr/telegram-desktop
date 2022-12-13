// Load main functions...

// Initialize WOW.js animations
jQuery(document).ready( function() {
    new WOW().init();
    $('.price').slick({
        speed: 1500,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: [
        {
            breakpoint: 1600,
            settings: {
                slidesToShow: 2
            }
            },
          {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1
            }
          }
        ]
      });
});