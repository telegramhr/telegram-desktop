<!DOCTYPE html>
<html lang="hr">

<?php

/* Potential native paths */
//$native_path = get_stylesheet_directory_uri() . '/templates/native/ht/kviz_it_persona/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/ht/kviz_it_persona/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/ht/kviz_it_persona/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/ht/kviz_it_persona/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); 
    ?>
    <script src="<?php echo $native_path ?>assets/jquery.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/operon.css?v=1.00" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/style.css?v=1.02" type="text/css" />
</head>

<body>
    <div class="main-container center relative">
        <video autoplay loop muted playsinline class="background-video">
            <source src="<?php echo $native_path ?>assets/meeting.mp4?v=1.00" type="video/mp4">
        </video>
        <div class="quiz-container relative">
            <!-- Slide 1 -->
            <div data-slide="0" class="slide slide-0 active">
                <h3 class="question">
                    Krije li se u tebi developer ili sales account?
                </h3>
                <p class="full">Potaknuti debatama između sales i development timova koje su neiscrpan izvor inspiracije za interne šale i doskočice te viralne memeove i komičarske skečeve, pripremili smo 11 jednostavnih tvrdnji za koje pouzdano znamo da ocrtavaju stavove jednog dijela kolega, dok ih iz usta drugih nikada ne bismo čuli.</p>
                <p class="full">Ovaj je kviz namijenjen svim onima koji se žele upoznati s, nekada pomalo komičnom, realnošću developera i sales accounta ili joj se iz empatije nasmijati.</p>
                <p class="full">Nijedan stručnjak ni institucija za profesionalnu orijentaciju ne stoje iza ovog kviza. Ako rezultat kviza ne odgovara tvojim dosadašnjim uvjerenjima o sebi, molimo te da ga ne koristiš kao temelj za velike životne odluke.</p>
                <div class="answers flex column-top-pad">
                    <div class="answer animate answer-yes">
                        <h4 class="answer-text">
                        Krenimo!
                        </h4>
                    </div>
                </div>
            </div>
            <div data-slide="1" class="slide slide-1">
                <p class="full">Odgovori slažeš li se s tvrdnjom:</p>
                <h3 class="question">
                Svi se problemi najbolje riješe razgovorom, a ne pisanim putem.
                </h3>
                <img src="<?php echo $native_path ?>assets/ht_kviz_1.svg" aria-hidden="true">
                <div class="answers flex">
                    <div class="answer animate answer-yes" data-sales="1">
                        <h4 class="answer-text">
                            Da
                        </h4>
                    </div>
                    <div class="answer animate answer-no">
                        <h4 class="answer-text">
                            Ne
                        </h4>
                    </div>
                </div>
            </div>
            <div data-slide="2" class="slide slide-2">
                <p class="full">Odgovori slažeš li se s tvrdnjom:</p>
                <h3 class="question">
                Da mogu, stalno bih radio/la od doma.
                </h3>
                <img src="<?php echo $native_path ?>assets/ht_kviz_2.svg" aria-hidden="true">
                <div class="answers flex">
                    <div class="answer animate answer-yes" data-sales="1">
                        <h4 class="answer-text">
                            Da
                        </h4>
                    </div>
                    <div class="answer animate answer-no">
                        <h4 class="answer-text">
                            Ne
                        </h4>
                    </div>
                </div>
            </div>
            <div data-slide="3" class="slide slide-3">
                <p class="full">Odgovori slažeš li se s tvrdnjom:</p>
                <h3 class="question">
                Sve je svedivo na jasne zadatke i prioritete.
                </h3>
                <img src="<?php echo $native_path ?>assets/ht_kviz_3.svg" aria-hidden="true">
                <div class="answers flex">
                    <div class="answer animate answer-yes">
                        <h4 class="answer-text">
                            Da
                        </h4>
                    </div>
                    <div class="answer animate answer-no" data-sales="1">
                        <h4 class="answer-text">
                            Ne
                        </h4>
                    </div>
                </div>
            </div>
            <div data-slide="4" class="slide slide-4">
                <p class="full">Odgovori slažeš li se s tvrdnjom:</p>
                <h3 class="question">
                    Nova IT rješenja ultimativan su napredak u svakom poslu i olakšavaju svakodnevicu.
                </h3>
                <img src="<?php echo $native_path ?>assets/ht_kviz_5.svg" aria-hidden="true">
                <div class="answers flex">
                    <div class="answer animate answer-yes">
                        <h4 class="answer-text">
                            Da
                        </h4>
                    </div>
                    <div class="answer animate answer-no" data-sales="1">
                        <h4 class="answer-text">
                            Ne
                        </h4>
                    </div>
                </div>
            </div>
            <div data-slide="5" class="slide slide-5">
                <p class="full">Odgovori slažeš li se s tvrdnjom:</p>
                <h3 class="question">
                Na poslu očekujem dostupnost online edukacija na certificiranim platformama i razmjene znanja s in-house stručnjacima.
                </h3>
                <img src="<?php echo $native_path ?>assets/ht_kviz_4.svg" aria-hidden="true">
                <div class="answers flex">
                    <div class="answer animate answer-yes" >
                        <h4 class="answer-text">
                            Da
                        </h4>
                    </div>
                    <div class="answer animate answer-no" data-sales="1">
                        <h4 class="answer-text">
                            Ne
                        </h4>
                    </div>
                </div>
            </div>
            <div data-slide="6" class="slide slide-6">
                <p class="full">Odgovori slažeš li se s tvrdnjom:</p>
                <h3 class="question">
                Od ideje da na godišnji odmor nosim laptop se ježim.
                </h3>
                <img src="<?php echo $native_path ?>assets/ht_kviz_7.svg" aria-hidden="true">
                <div class="answers flex">
                    <div class="answer animate answer-yes" data-sales="1">
                        <h4 class="answer-text">
                            Da
                        </h4>
                    </div>
                    <div class="answer animate answer-no">
                        <h4 class="answer-text">
                            Ne
                        </h4>
                    </div>
                </div>
            </div>
            <div data-slide="7" class="slide slide-7">
                <p class="full">Odgovori slažeš li se s tvrdnjom:</p>
                <h3 class="question">
                Pomisao da radim navečer ili vikendom mi je ok jer želim biti slobodan/na raditi kada sam najproduktivniji/a.
                </h3>
                <img src="<?php echo $native_path ?>assets/ht_kviz_8.svg?ver=2.0" aria-hidden="true">
                <div class="answers flex">
                    <div class="answer animate answer-yes">
                        <h4 class="answer-text">
                            Da
                        </h4>
                    </div>
                    <div class="answer animate answer-no" data-sales="1">
                        <h4 class="answer-text">
                            Ne
                        </h4>
                    </div>
                </div>
            </div>
            <div data-slide="8" class="slide slide-8">
                <p class="full">Odgovori slažeš li se s tvrdnjom:</p>
                <h3 class="question">
                Projekte treba odraditi onako kako su zamišljeni. Jednom kad su definirani, nema izmjena.
                </h3>
                <img src="<?php echo $native_path ?>assets/ht_kviz_9.svg" aria-hidden="true">
                <div class="answers flex">
                    <div class="answer animate answer-yes">
                        <h4 class="answer-text">
                            Da
                        </h4>
                    </div>
                    <div class="answer animate answer-no" data-sales="1">
                        <h4 class="answer-text">
                            Ne
                        </h4>
                    </div>
                </div>
            </div>
            <div data-slide="9" class="slide slide-9">
                <p class="full">Odgovori slažeš li se s tvrdnjom:</p>
                <h3 class="question">
                    Ako mi nešto nije jasno ili se sjetim pitanja za nekog koga poznajem, odmah uzimam mobitel u ruke i zovem ih.
                </h3>
                <img src="<?php echo $native_path ?>assets/ht_kviz_10.svg" aria-hidden="true">
                <div class="answers flex">
                    <div class="answer animate answer-yes" data-sales="1">
                        <h4 class="answer-text">
                            Da
                        </h4>
                    </div>
                    <div class="answer animate answer-no">
                        <h4 class="answer-text">
                            Ne
                        </h4>
                    </div>
                </div>
            </div>
            <div data-slide="10" class="slide slide-10">
                <p class="full">Dovrši izjavu:</p>
                <h3 class="question">
                    Ako ne znam je li nešto izvedivo, točan odgovor je…
                </h3>
                <img src="<?php echo $native_path ?>assets/ht_kviz_11.svg" aria-hidden="true">
                <div class="answers flex">
                    <div class="answer animate answer-yes" data-sales="1">
                        <h4 class="answer-text">
                            Da
                        </h4>
                    </div>
                    <div class="answer animate answer-no">
                        <h4 class="answer-text">
                            Ne
                        </h4>
                    </div>
                </div>
            </div>

            <div data-slide="11" class="slide slide-11 result">
                <h3 class="question">
                    <span>Rezultat</span>
                </h3>
                <img src="<?php echo $native_path ?>assets/ht_miks.svg" aria-hidden="true">
                <p class="description">
                    Lorem Ipsum Dolor Sit Amet
                </p>
                <a href='https://hrvatski-telekom2.talentlyft.com/' class="full flex karijere-cta" target='_blank'>Ako si u potrazi za novim izazovima, baci oko na otvorene pozicije Hrvatskog Telekoma.</a>
                <div class="answers column-top-pad flex">
                    <div class="animate answer-no restart">
                        <h4 class="answer-text">
                            Restart
                        </h4>
                    </div>
                </div>
            </div>
            <div class="progress-bar flex"><div class="animate progress-indicator"></div></div>
        </div>
        <script>
            jQuery(document).ready(function($) {
                var sales_score = 0;
                var result = 1;
                $('.answer').click(function() {
                    var active = $('.slide.active').data('slide');
                    if ($(this).data('sales')) {
                        sales_score++;
                    }
                    //advance
                    $('.slide.slide-'+active).removeClass('active');
                    active++;
                    intermediary = Math.round((active/12)*10000)/100;
                    $('.progress-indicator').css("width", intermediary+"%");
                    if (active !== 11) {
                        $('.slide.slide-' + active).addClass('active');
                    } else {
                        if (sales_score > 7) {
                            result = 1;
                            $('.result .question span').text("Ti si rođeni sales account!");
                            $('.result img').attr("src", "<?php echo $native_path ?>assets/ht_komercijalist.svg");
                        } else if (sales_score > 4) {
                            $('.result .question span').text("Ti si između dva svijeta!");
                            $('.result img').attr("src", "<?php echo $native_path ?>assets/ht_miks.svg");
                            result = 2;
                        } else {
                            result = 3;
                            $('.result .question span').text("Ti si rođeni developer!");
                            $('.result img').attr("src", "<?php echo $native_path ?>assets/ht_programer.svg");
                        }
                        programmer_score=11-sales_score;
                        $('.result .description').html("Od tvojih odgovora, "+sales_score+" su bili u skladu sa sales accountom, a "+programmer_score+" u skladu s developerom.");
                        //$('.result .description').text(descriptions[result].description);
                        //$('.result .share').attr('href', descriptions[result].url);
                        $('.slide.slide-' + active).addClass('active');
                        
                    }
                    return false;
                });
                $('.restart').click(function() {
                    var active = $('.slide.active').data('slide');
                    $('.slide.slide-'+active).removeClass('active');
                    active=0;
                    $('.progress-indicator').css("width", "1%");
                    $('.slide.slide-' + active).addClass('active');
                    sales_score = 0;
                    return false;
                });
            });
        </script>
        <footer class="full flex relative column-full-pad">
            <p class="full center-text">Sadržaj omogućava Hrvatski Telekom.</p>
            <div class="full center logo-line">
                <img src="<?php echo $native_path ?>assets/ht.svg" alt="Hrvatski Telekom logo" />
            </div>
        </footer>
        <?php wp_footer(); 
        ?>
    </div>
</body>

</html>