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
        window.location.href = "01.html";
        break;
      case brojTocnih < 7:
        window.location.href = "02.html";
        break;
      case brojTocnih >= 9:
        window.location.href = "03.html";
        break;
      default:
        window.location.href = "01.html";
    }
  });
});
