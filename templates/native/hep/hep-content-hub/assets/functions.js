// Load main functions...

jQuery(document).ready(function($) {
    var track_score = 0;
    var result = 1;
    $('.answer').click(function() {
        var active = $('.slide.active').data('slide');
        if ($(this).data('track')) {
            track_score++;
        }
        //advance
        $('.slide.slide-' + active).removeClass('active');
        active++;
        intermediary = Math.round((active / 10) * 10000) / 100;
        $('.progress-indicator').css("width", intermediary + "%");
        if (active !== 10) {
            $('.slide.slide-' + active).addClass('active');
        } else {
            if (track_score > 6) {
                result = 1;
                $('.result .question span').html("Rezultat: "+track_score + "/9 <br>Bravo!");
            } else {
                result = 2;
                $('.result .question span').html("Rezultat: "+track_score + "/9 <br>Možeš bolje!");
            }
            $('.result .description').text("Nastavi istraživati naš specijal i saznaj još more zanimljivosti o održivosti, energiji i štednji.");
            //$('.result .description').text(descriptions[result].description);
            //$('.result .share').attr('href', descriptions[result].url);
            $('.slide.slide-' + active).addClass('active');

        }
        return false;
    });
    $('.restart').click(function() {
        var active = $('.slide.active').data('slide');
        $('.slide.slide-' + active).removeClass('active');
        active = 1;
        $('.progress-indicator').css("width", "1%");
        $('.slide.slide-' + active).addClass('active');
        track_score = 0;
        return false;
    });
});