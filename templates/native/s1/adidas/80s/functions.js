// Load main functions...
$(function() {
  AOS.init({
    duration: 1000,
    delay: 250
  });
  $( ".windowpic .exit" ).click(function () {
    $(this).parent().hide();
  })
});