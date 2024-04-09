// Load main functions...

jQuery(document).ready(function () {
    AOS.init({
        duration: 1000,
        delay: 250
    });
    var $form = $('form#uefa-form'),
        url = 'https://script.google.com/macros/s/AKfycbzRwsY7XHBUBx2kc5FNxR6ri7OUcARx9aEx5pTkHVhY-wCsimRZ2vKEB25awSAv1KDi/exec'

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
    $('#uefa-form').addClass('hide');
    $('#submit-form').addClass('hide')
}