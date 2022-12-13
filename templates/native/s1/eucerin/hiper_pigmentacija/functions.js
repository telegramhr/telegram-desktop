// Load main functions...

jQuery(function () {
  AOS.init({
    duration: 750,
    delay: 250
  });
  jQuery('.gallery').slick({
    speed: 1000,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    prevArrow: '<div class="arrow fa-angle-left"></div>',
    nextArrow: '<div class="arrow fa-angle-right"></div>',
    arrows: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 786,
        settings: {
          centerMode: true,
          centerPadding: '24px',
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

});