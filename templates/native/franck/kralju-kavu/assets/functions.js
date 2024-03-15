// Load main functions...

jQuery(document).ready(function () {
  AOS.init({
    duration: 1000,
    delay: 250
  });
  var $form = $('form#kavu-form'),
    url = 'https://script.google.com/macros/s/AKfycbz6JCYdBnqoI5U7KXOT1KF6ZmBwd6v7LFUbFlF9bVx_b5stHkeZqLYXzNwy8LZA3inN/exec'

  $('#submit-form').on('click', function (e) {
    if ($('#prihvacam').is(':checked')) {
      e.preventDefault();
      var jqxhr = $.ajax({
        url: url,
        method: "GET",
        dataType: "json",
        data: $form.serializeObject()
      }).done(
        hideEverything()
      );
    } else {
      $('#warning').removeClass('hide');
    }
  })
});

function hideEverything() {
  $('#success').removeClass('hide');
  $('#warning').addClass('hide');
  $('#kavu-form').addClass('hide');
  $('#submit-form').addClass('hide')
}

/* Set the width of the sidebar to 250px (show it) */
function openNav() {
  document.getElementById("mySidepanel").style.left = "0px";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav() {
  document.getElementById("mySidepanel").style.left = "-70vw";
}




