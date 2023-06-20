$(window).on("load", function () {
  const tocniOdgovori = [1, 2, 3, 3, 1, 3, 1, 2, 3, 3];

  $(".submit").on("click", function () {
    const odgovori = $("form").find('input[type="radio"]:checked');
    let brojTocnih = 0;

    $.each(odgovori, function (key, input) {
      if (input.value == tocniOdgovori[key]) {
        brojTocnih += 1;
      }
    });

    switch (true) {
      case brojTocnih < 4:
        jQuery('#kvizticker h3').text('Znamo da možeš bolje! Pročitaj naše tekstove pa probaj ponovno.');
        jQuery('#kvizticker a').text('POKUŠAJ PONOVNO');
        break;
      case brojTocnih < 7:
        jQuery('#kvizticker h3').text('Nije loše, bravo. Nadamo se da si naučio/la nešto novo.');
        jQuery('#kvizticker a').text('POKUŠAJ PONOVNO');
        break;
      case brojTocnih >= 9:
        jQuery('#kvizticker h3').text('Odlično! Imaš zavidno znanje o održivosti.');
        jQuery('#kvizticker a').text('ZAIGRAJ OPET');
        break;
      default:
        jQuery('#kvizticker h3').text('Znamo da možeš bolje! Pročitaj naše tekstove pa probaj ponovno.');
        jQuery('#kvizticker a').text('POKUŠAJ PONOVNO');
    }
    jQuery('#kvizticker').show();
    jQuery('#kviz').hide();
  });
});
