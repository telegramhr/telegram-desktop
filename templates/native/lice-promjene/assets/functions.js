// Load main functions...

jQuery(document).ready(function ($) {
    var scores = { typeA: 0, typeB: 0, typeC: 0, typeD: 0 };
    var result = '';

    $('.answer').click(function () {
        var active = $('.slide.active').data('slide');
        var category = $(this).data('category'); // Assuming each answer has a data-category attribute
        if (category) {
            scores[category]++;
        }

        // Advance to the next slide
        $('.slide.slide-' + active).removeClass('active');
        active++;
        var intermediary = Math.round((active / 10) * 10000) / 100;
        $('.progress-indicator').css("width", intermediary + "%");
        if (active !== 10) {
            $('.slide.slide-' + active).addClass('active');
        } else {
            // Determine which personality type has the highest score
            var highestType = Object.keys(scores).reduce((a, b) => scores[a] > scores[b] ? a : b);

            result = highestType; // Use highest scoring type as the result identifier
            var resultMessage = '';
            switch (result) {
                case 'typeA':
                    resultMessage = "Kategorija: Za dostojanstvo.<br> Borac protiv nepravde. <br> Ti si Robin Hood, Erin Brockovich ili Katness Everdeen - neumorno se boriš protiv nepravde i uvijek si na prvoj liniji kada treba pomoći onima kojima je to najpotrebnije. Poznat si u društvu kao netko tko će uvijek biti moralna podrška i reći koji je put ispravan bez obzira na to hoće li se sugovorniku odgovor svidjeti. Uvijek naglašavaš važnost pravde i jednakosti.";
                    break;
                case 'typeB':
                    resultMessage = "Kategorija: Za jednakost.<br> Control freak.<br> Jerry Seinfeld, Monica Geller, Blair Waldorf i ti - sve vas povezuje jedna stvar, a to je činjenica da ste control freakovi. Nema ništa negativno u tome što želiš sve u svakom trenutku imati pod kontrolom, tvoji prijatelji uživaju u tome. Znaju da mogu računati na tebe i da ćeš pred svaku zabavu osigurati svakome njegovu čašu, slamku, tanjur te stolicu.";
                    break;
                case 'typeC':
                    resultMessage = "Kategorija: Za prirodu.<br> Ekološki ratnik.<br> Tarzan, Pocahontas ili Doctor Dolittle, velike su vjerojatnosti da nekoga od njih smatraš uzorom. Baš kao i ti, oni su predani zaštiti prirode te borbi za očuvanje planeta. Ukoliko s ekipom roštiljaš pored rijeke, definitivno vodiš svog psa sa sobom te brineš da ne uznemirujete prirodu oko sebe.";
                    break;
                case 'typeD':
                    resultMessage = "Kategorija: Za budućnost.<br> Sveznalica.<br> Poput Sheldona iz Teorije velikog praska ili Rossa iz Prijatelja, ti si osoba u društvu koja uvijek ima odgovor na svako pitanje. Kod tebe nema dileme - znaš kako se pravilno razvrstavaju i najbizarniji proizvodi, a prijatelje ćeš u trgovini podsjetiti da razmisle dvaput prije uzimanja plastične vrećice. Ipak razgradnja jedne traje 20 godina.";
                    break;
                default:
                    resultMessage = "Nešto ne radi kod nas :(";
            }

            $('.result .question span').html(resultMessage);
            $('.result .description').text("Nastavi istraživati ličnost:");
            $('.slide.slide-' + active).addClass('active');

            // Sending the result with time to our Google Sheet
            var rightnow = Date.now();
            var rightnow_test = rightnow.toString();
            var response_object = { result: result, time: rightnow_test };

            var jqxhr = $.ajax({
                url: 'https://script.google.com/macros/s/AKfycbwbLUPyelV9SDDhoS65a_VScIjwQLts49XoR4vVQFOoIzCXRnKqawOuKOFezLrFyvk3/exec',
                method: "GET",
                dataType: "json",
                data: response_object
            }).done(
                console.log("Rezultat uspješno spremljen.")
            );

        }
        return false;
    });

    $('.restart').click(function () {
        var active = $('.slide.active').data('slide');
        $('.slide.slide-' + active).removeClass('active');
        active = 1;
        $('.progress-indicator').css("width", "1%");
        $('.slide.slide-' + active).addClass('active');
        scores = { typeA: 0, typeB: 0, typeC: 0, typeD: 0 };
        return false;
    });
});