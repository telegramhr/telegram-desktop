// Load main functions...
$(function() {
  AOS.init({
    duration: 1000,
    delay: 250
  });
  $('#vichy-apply input[name=prethodno_iskustvo]').on('change', function() {
      checked_val = $('input[name=prethodno_iskustvo]:checked', '#vichy-apply').val();
      if (checked_val == 'ne-iskustvo') {
        $('#vichy-apply').addClass('enable-exp-hide');
      }
      else {
        $('#vichy-apply').removeClass('enable-exp-hide');
      }
  });
});