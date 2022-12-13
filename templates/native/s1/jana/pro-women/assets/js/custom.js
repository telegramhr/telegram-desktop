jQuery(document).ready(function($) {
  $('.slick.marquee').slick({
    speed: 8000,
    autoplay: true,
    autoplaySpeed: 0,
    centerMode: true,
    cssEase: 'linear',
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true,
    infinite: true,
    initialSlide: 1,
    arrows: false,
    buttons: false
  });
});

(function ($) {
  $(function() {

    // Slick slider for prev/next thumbnails images
    $('.slideshow__slides').slick({
      dots: true,
      slidesToShow: 1,
      autoplay: false
    });
    setTimeout(function() {
      $('.slick-prev').prepend('<div class="prev-slick-arrow arrow-icon"><span><img src="http://super1.staging.telegram.hr/wp-content/themes/super1-theme/templates/native/telegram/pro-women/assets/img/left-arrow.png" alt=""></span></div><div class="prev-slick-img slick-thumb-nav"><img src="/prev.jpg" class="img-responsive"></div>');
      $('.slick-next').append('<div class="next-slick-arrow arrow-icon"><span><img src="http://super1.staging.telegram.hr/wp-content/themes/super1-theme/templates/native/telegram/pro-women/assets/img/right-arrow.png" alt=""></span></div><div class="next-slick-img slick-thumb-nav"><img src="/next.jpg" class="img-responsive"></div>');
      get_prev_slick_img();
      get_next_slick_img();
    }, 500);

    $('.slideshow__slides').on('click', '.slick-prev', function() {
      get_prev_slick_img();
    });
    $('.slideshow__slides').on('click', '.slick-next', function() {
      get_next_slick_img();
    });
    $('.slideshow__slides').on('swipe', function(event, slick, direction) {
      if (direction == 'left') {
        get_prev_slick_img();
      }
      else {
        get_next_slick_img();
      }
    });
    $('.slick-dots').on('click', 'li button', function() {
      var li_no = $(this).parent('li').index();
      if ($(this).parent('li').index() > li_no) {
        get_prev_slick_img()
      }
      else {
        get_next_slick_img()
      }
    });
    function get_prev_slick_img() {
      // For prev img
      var prev_slick_img = $('.slick-current').prev('.slider-image').find('img').attr('src');
      $('.prev-slick-img img').attr('src', prev_slick_img);
      var prev_slick_cap = $('.slick-current').prev('.slider-image').find('img').attr('alt');
      $('.prev-slick-img').attr('alt', prev_slick_cap);
      $('.prev-slick-img').css('background-image', 'url(' + prev_slick_img + ')');
      $('.prev-slick-img').css('content', (' + prev_slick_cap + '));

      // For next img
      var prev_next_slick_img = $('.slick-current').next('.slider-image').find('img').attr('src');
      $('.next-slick-img img').attr('src', prev_next_slick_img);
      $(".caption-details").show();
      $('.next-slick-img').css('background-image', 'url(' + prev_next_slick_img + ')');
    }
    function get_next_slick_img() {
      // For next img
      var next_slick_img = $('.slick-current').next('.slider-image').find('img').attr('src');
      $('.next-slick-img img').attr('src', next_slick_img);
      $(".caption-details").show();
      $('.next-slick-img').css('background-image', 'url(' + next_slick_img + ')');
      // For prev img
      var next_prev_slick_img = $('.slick-current').prev('.slider-image').find('img').attr('src');
      $('.prev-slick-img img').attr('src', next_prev_slick_img);
      $(".caption-details").show();
      $('.prev-slick-img').css('background-image', 'url(' + next_prev_slick_img + ')');
    }
    // End
  })
})(jQuery);