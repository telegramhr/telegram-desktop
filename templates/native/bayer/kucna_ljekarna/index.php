<!DOCTYPE html>
<html lang="hr">

<?php
//$native_path = get_stylesheet_directory_uri() . '/templates/native/bayer/kucna_ljekarna/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/bayer/kucna_ljekarna/';
$native_path = 'http://telegram.hr/wp-content/themes/telegram-desktop2/templates/native/bayer/kucna_ljekarna/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/bayer/kucna_ljekarna/';
$test_results = [
    [
        'title' => 'Volite se osigurati i imati sve na jednome mjestu.',
        'description' => 'Vaša kućna ljekarna ima i više nego što je potrebno! S vremena na vrijeme provjerite nedostaje li vam nešto poput pripravaka protiv bolova te za snižavanje temperature. Sve u svemu - stanje u vašoj kućnoj ljekarni je zadovoljavajuće.'
    ],
    [
        'title' => 'Imate samo ono najnužnije.',
        'description' => 'Neke stvari ne prepuštate slučaju, a za neke računate da je u redu skoknuti do najbliže ljekarne. Možda biste mogli provjeriti sadržaj svoje kućne ljekarne i dopuniti je sa svime što vam nedostaje. Svakako pazite na sadržaj za prvu pomoć te lijekove protiv bola i za snižavanje temperature.'
    ],
    [
        'title' => 'Ne oslanjate se na svoju kućnu ljekarnu.',
        'description' => 'Zato vam se često dogodi da nemate potrebno sredstvo koje zatreba nekome od ukućana ili prijatelja. Imajte na umu da bi svaka kućna ljekarna trebala sadržavati pribor za prvu pomoć, lijekove protiv bolova, za snižavanje temperature, pripravke za liječenje kašlja, zaštitna sredstva.'
    ]
];

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://use.typekit.net/rqf6rgv.css">
    <script src="<?php echo $native_path ?>aos.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>aos.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=2.8" type="text/css" />
    <script src="<?php echo $native_path ?>functions.js"></script>
</head>
<div class="main-container flex">
    <div class="native-hero full flex relative center" style="background-image: url('<?php echo $native_path; ?>img/blue_gradient_2.svg')">
        <div class="narrow-container flex">
            <div class="full native-title flex center-text">
                <h1 class="full" data-aos="fade-down">Moja kućna ljekarna</h1>
                <h3 class="full" data-aos="fade-down" data-aos-delay="500">Saznajte što bi sve trebala sadržavati jedna <br>dobro opremljena kućna ljekarna.</h2>
                    <p data-aos="fade-down" data-aos-delay="1000">Svako kućanstvo trebalo bi na posebnom mjestu u ormariću ili sanitetskoj torbici imati spremljen pribor za pružanje prve pomoći, dok se lijekovi drže na zasebnom mjestu, zaštićeni od topline, vlage i svjetla.</p>
                    <p data-aos="fade-down" data-aos-delay="1500">Lijekovi se čuvaju u originalnim kutijama koje sadržavaju upute u kojima su naznačeni rok trajanja, način doziranja te moguće nuspojave i interakcije.</p>
            </div>
        </div>
        <div class="full native-visual flex">
            <img data-aos="fade-up" data-aos-delay="500" src="<?php echo $native_path ?>img/medicine_pile.svg?ver=2.0" alt="Kolekcija lijekova i dezinfekcijskih sredstava" />
        </div>
    </div>
    <div class="full post-visual-margin flex">
        <div class="container flex infographic stretch">
            <h2 class="full center-text">1. Pribor za prvu pomoć</h2>
            <div class="sixty flex flex-responsive">
                <div class="full infographic-box">
                    <img data-aos="fade-right" src="<?php echo $native_path ?>img/infografika_1.svg" aria-hidden="true" />
                </div>
                <div class="full infographic-box">
                    <img data-aos="fade-right" src="<?php echo $native_path ?>img/infografika_2.svg" aria-hidden="true" />
                </div>
                <div class="full infographic-box">
                    <img data-aos="fade-right" src="<?php echo $native_path ?>img/infografika_3.svg?ver=3.0" aria-hidden="true" />
                </div>
            </div>
            <div class="fourty flex flex-responsive">
                <div class="full infographic-box">
                    <img data-aos="fade-left" src="<?php echo $native_path ?>img/infografika_4.svg" aria-hidden="true" />
                </div>
                <div class="full infographic-box">
                    <img data-aos="fade-left" src="<?php echo $native_path ?>img/infografika_5.svg" aria-hidden="true" />
                </div>
            </div>
        </div>
    </div>
    <div class="full flex">
        <div class="container flex infographic stretch">
            <h2 class="full center-text">2. Bezreceptni lijekovi</h2>
            <div class="half flex flex-responsive">
                <div class="full infographic-box">
                    <img data-aos="fade-right" src="<?php echo $native_path ?>img/infografika_6.svg" aria-hidden="true" />
                </div>
            </div>
            <div class="half flex flex-responsive">
                <div class="full infographic-box no-top-border-mob">
                    <img data-aos="fade-left" src="<?php echo $native_path ?>img/infografika_7.svg" aria-hidden="true" />
                </div>
            </div>
            <div class="two-thirds flex flex-responsive">
                <div class="full infographic-box">
                    <img data-aos="fade-right" src="<?php echo $native_path ?>img/infografika_8.svg" aria-hidden="true" />
                </div>
            </div>
            <div class="third flex flex-responsive">
                <div class="full infographic-box">
                    <img data-aos="fade-left" src="<?php echo $native_path ?>img/infografika_9.svg" aria-hidden="true" />
                </div>
            </div>
        </div>
    </div>
    <div class="full flex gradient-bg" style="background-image: url('<?php echo $native_path; ?>img/blue_gradient_2.svg')">
        <div class="container flex infographic stretch">
            <h2 class="full center-text">5. Važni telefonski brojevi:</h2>
            <img data-aos="fade-up" src="<?php echo $native_path ?>img/infografika_10.svg" aria-hidden="true" />
            <div class="full flex health-disclaimer">
                <p>Prije upotrebe pažljivo pročitajte uputu o lijeku, a o rizicima i nuspojavama upitajte svog liječnika ili ljekarnika. <br>L.HR.MKT.03.2021.3796</p>
            </div>
        </div>
    </div>
    <div class="full">
        <div class="container">
            <h2 class="full center-text">Koliko je opremljena vaša kućna ljekarna?</h2>
            <p class="full center-text">Riješite kratki kviz i saznajte imate li sve potrebno.</p>

            <div class="quiz-container" data-aos="fade-up">
                <!-- Slide 1 -->
                <div data-slide="1" class="slide slide-1 active">
                    <h3 class="question">
                        Gdje čuvate lijekove?
                    </h3>
                    <div class="answers flexNoWrap">
                        <div class="answer answer-1" data-answer="a">
                            <h4 class="answer-text">
                                U posebnoj kutiji, na suhom i tamnom mjestu
                            </h4>
                        </div>

                        <div class="answer answer-2" data-answer="b">
                            <h4 class="answer-text">
                                Nadohvat ruke - u ladici noćnog ormarića ili kuhinje.
                            </h4>
                        </div>

                        <div class="answer answer-3" data-answer="c">
                            <h4 class="answer-text">
                                Kako kada, nemaju svoje posebno mjesto
                            </h4>
                        </div>

                    </div>
                </div>
                <!-- Slide 2 -->
                <div data-slide="2" class="slide slide-2">
                    <h3 class="question">
                        U vašoj kućnoj ljekarni može se naći sve, od lijekova do prve pomoći
                    </h3>
                    <div class="answers flexNoWrap">
                        <div class="answer answer-1" data-answer="a">
                            <h4 class="answer-text">
                                Da, za svaki slučaj
                            </h4>
                        </div>

                        <div class="answer answer-2" data-answer="b">
                            <h4 class="answer-text">
                                Rijetko. Imam samo ono najpotrebnije
                            </h4>
                        </div>

                        <div class="answer answer-3" data-answer="c">
                            <h4 class="answer-text">
                                Ne baš, kupim kad mi nešto treba
                            </h4>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div data-slide="3" class="slide slide-3">
                    <h3 class="question">
                        Osim lijekova, u kućnoj ljekarni čuvate i sredstva za opekline i dezinficiranje rana?
                    </h3>
                    <div class="answers flexNoWrap">
                        <div class="answer answer-1" data-answer="a">
                            <h4 class="answer-text">
                                Da, obavezno
                            </h4>
                        </div>

                        <div class="answer answer-2" data-answer="b">
                            <h4 class="answer-text">
                                Rijetko
                            </h4>
                        </div>

                        <div class="answer answer-3" data-answer="c">
                            <h4 class="answer-text">
                                Ne, nikada mi nisu trebali
                            </h4>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div data-slide="4" class="slide slide-4">
                    <h3 class="question">
                        Uvijek pazite da kod kuće imate dovoljne zalihe lijekova protiv bolova?
                    </h3>
                    <div class="answers flexNoWrap">
                        <div class="answer answer-1" data-answer="a">
                            <h4 class="answer-text">
                                Obavezno
                            </h4>
                        </div>

                        <div class="answer answer-2" data-answer="b">
                            <h4 class="answer-text">
                                Povremeno
                            </h4>
                        </div>

                        <div class="answer answer-3" data-answer="c">
                            <h4 class="answer-text">
                                Ne, ne patim od glavobolja ni sličnih bolova
                            </h4>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div data-slide="5" class="slide slide-5">
                    <h3 class="question">
                        Imate sve potrebno u slučaju prehlade?
                    </h3>
                    <div class="answers flexNoWrap">
                        <div class="answer answer-1" data-answer="a">
                            <h4 class="answer-text">
                                Da, više različitih lijekova
                            </h4>
                        </div>

                        <div class="answer answer-2" data-answer="b">
                            <h4 class="answer-text">
                                Imam Aspirin® Plus C, on pokriva više simptoma
                            </h4>
                        </div>

                        <div class="answer answer-3" data-answer="c">
                            <h4 class="answer-text">
                                Nisam siguran/na
                            </h4>
                        </div>
                    </div>
                </div>

                <!-- Slide 6 -->
                <div data-slide="6" class="slide slide-6">
                    <h3 class="question">

                        Uz osnovne bezreceptne lijekove, u kućnoj ljekarni čuvate i zaštitna sredstva?
                    </h3>
                    <div class="answers flexNoWrap">
                        <div class="answer answer-1" data-answer="a">
                            <h4 class="answer-text">
                                Obavezno, i repelente i kreme sa zaštitnim faktorom koristim skoro cijele godine
                            </h4>
                        </div>

                        <div class="answer answer-2" data-answer="b">
                            <h4 class="answer-text">
                                Povremeno ih kupujem, uglavnom ljeti kreme sa zaštitnim faktorom
                            </h4>
                        </div>

                        <div class="answer answer-3" data-answer="c">
                            <h4 class="answer-text">
                                Ne koristim nikakvu zaštitu, ni protiv insekata ni zaštitu od sunca
                            </h4>
                        </div>
                    </div>
                </div>

                <div data-slide="7" class="slide slide-7 result">
                    <h3 class="question">
                        <span></span>
                    </h3>
                    <p class="description whiteSpace">
                        Bacon ipsum dolor amet doner meatball strip steak drumstick. Tail porchetta meatball andouille
                        chuck flank drumstick capicola picanha pork turkey brisket pork chop prosciutto corned beef.
                        Beef chuck bresaola pastrami ball tip. Cow tri-tip andouille shoulder shankle jerky sirloin beef
                        boudin sausage. Biltong ribeye meatloaf doner pork loin.
                    </p>
                    <div class="aspirin">
                        <img src="<?php echo $native_path ?>img/aspirin_packshot.png" alt="Kutija aspirina" />
                        <p>Aspirin® Plus C učinkovito ublažava glavobolju, grlobolju i povišenu tjelesnu temperaturu nastalu uslijed prehlade ili gripe. Osim što sadrži acetilsalicilatnu kiselinu, koja je djelotvorna terapija protiv boli i povišene tjelesne temperature i ima protuupalna svojstva, Aspirin® Plus C sadrži askorbatnu kiselinu poznatu kao vitamin C, koja doprinosi obrani vašeg tijela i može vam pomoći da se brže oporavite. U obliku šumeće tablete, Aspirin® Plus C postaje osvježavajući lijek jednostavan za konzumaciju. Sada vam je na raspolaganju i Aspirin® Plus C Forte – dvostruka snaga u jednoj tableti. Više pročitajte <a href="https://www.aspirin.com.hr/hr/nasi-proizvodi/aspirin-plus-c/?utm_source=Krenizdravo&utm_medium=Native&utm_campaign=AspirinplusC&utm_content=Gripa" target="_blank">ovdje...</a></p>
                        <p class="bold">Prije upotrebe pažljivo pročitajte uputu o lijeku, a o rizicima i nuspojavama upitajte svog liječnika ili ljekarnika.</p>
                        <p>Ovo je sponzorirani sadržaj kreiran u suradnji s tvrtkom <a href="https://www.aspirin.com.hr/hr/nasi-proizvodi/aspirin-plus-c/" target="_blank">Bayer.</a></p>
                        <p>L.HR.MKT.02.2021.3784</p>
                    </div>
                    <a class="cta" href="#" id="restart">Pokušaj ponovno</a>
                </div>

                <div class="progress-bar">
                    <i class="fa fa-circle-o fa-circle fa-1"></i>
                    <i class="fa fa-circle-o fa-2"></i>
                    <i class="fa fa-circle-o fa-3"></i>
                    <i class="fa fa-circle-o fa-4"></i>
                    <i class="fa fa-circle-o fa-5"></i>
                    <i class="fa fa-circle-o fa-6"></i>
                </div>

            </div>
        </div>
        <script>
            jQuery(document).ready(function($) {
                $('#restart').click(function() {
                    $('.slide').removeClass('active');
                    $('.fa').removeClass('fa-circle');
                    $('.slide.slide-1').addClass('active');
                    $('.fa.fa-1').addClass('fa-circle');
                    $('.progress-bar').fadeIn(0);
                    return false;
                });
                var descriptions = <?php echo json_encode($test_results); ?>;
                var a = 0;
                var b = 0;
                var c = 0;
                var result = 1;
                $('.answer').click(function() {
                    var active = $('.slide.active').data('slide');
                    $current_answer = $(this).attr('data-answer');
                    if ($current_answer == 'a') {
                        a++;
                    }
                    if ($current_answer == 'b') {
                        b++;
                    }
                    if ($current_answer == 'c') {
                        c++;
                    }
                    //advance
                    $('.slide.slide-' + active).removeClass('active');
                    $('.fa.fa-' + active).removeClass('fa-circle');
                    active++;
                    if (active !== 7) {
                        $('.slide.slide-' + active).addClass('active');
                        $('.fa.fa-' + active).addClass('fa-circle');
                    } else {
                        result = 0;
                        biggest_figure = a;
                        if (b > biggest_figure) {
                            result = 1;
                            biggest_figure = b;
                        }
                        if (c > biggest_figure) {
                            result = 2;
                            biggest_figure = c;
                        }
                        a = 0;
                        b = 0;
                        c = 0;
                        $('.result .question span').text(descriptions[result].title);
                        $('.result .description').html(descriptions[result].description);
                        $('.slide.slide-' + active).addClass('active');
                        $('.progress-bar').fadeOut(0);
                    }
                    return false;
                });
            });
        </script>
    </div>
    <div class="full gradient-bg" style="background-image: url('<?php echo $native_path; ?>img/blue_gradient_2.svg')">
        <div class="container flex relative no-pad-cont">
            <h2 class="full center-text shoo-top">Briga o zdravlju je važna</h2>
            <p class="full center-text">Pročitajte više na tu temu</p>
            <a href="https://www.krenizdravo.hr/korisno/sponzorirani-clanak/ovo-su-cetiri-vazna-i-jednostavna-koraka-za-jaci-imunitet" class="full flex article-embed stretch" target="_blank">
                <div class="half flex flex-responsive article-image">
                    <img data-aos="fade-left" src="https://www.krenizdravo.hr/wp-content/uploads/2021/01/imunitet-bayer.jpg" aria-hidden="true" />
                </div>
                <div class="half flex flex-responsive article-preview center">
                    <div class="full flex" data-aos="fade-right">
                        <h2 class="full flex">Ovo su četiri važna i jednostavna koraka za jači imunitet</h2>
                        <p class="full flex">Imunitet je sofisticirani orkestar koji treba ravnotežu i sklad da bi mogao raditi ono što je njegova najvažnija uloga – štititi nas od bolesti</p>
                        <div class="cta">Pročitaj više</div>
                    </div>
                </div>
            </a>
            <a href="https://www.krenizdravo.hr/korisno/sponzorirani-clanak/prehlada-simptomi-lijecenje-i-znakovi-sekundarnih-infekcija" class="full flex article-embed stretch" target="_blank">
                <div class="half flex flex-responsive article-preview center">
                    <div class="full flex" data-aos="fade-left">
                        <h2 class="full flex">Prehlada – simptomi, liječenje i znakovi sekundarnih infekcija</h2>
                        <p class="full flex">Prehlada je respiratorna infekcija koju uzrokuje oko 200 virusa, a liječi se simptomatski</p>
                        <div class="cta">Pročitaj više</div>
                    </div>
                </div>
                <div class="half flex flex-responsive article-image">
                    <img data-aos="fade-right" src="https://www.krenizdravo.hr/wp-content/uploads/2021/01/prehlada-aspirin.jpg" aria-hidden="true" />
                </div>
            </a>
            <a href="https://www.krenizdravo.hr/korisno/sponzorirani-clanak/jedna-osoba-moze-zaraziti-12-ljudi-donosimo-savjete-za-brzi-oporavak-od-gripe" class="full flex article-embed stretch" target="_blank">
                <div class="half flex flex-responsive article-image">
                    <img data-aos="fade-left" src="https://www.krenizdravo.hr/wp-content/uploads/2021/01/gripa-aspirin.jpg" aria-hidden="true" />
                </div>
                <div class="half flex flex-responsive article-preview center">
                    <div class="full flex" data-aos="fade-right">
                        <h2 class="full flex">Jedna osoba može zaraziti 12 ljudi, donosimo savjete za brži oporavak od gripe</h2>
                        <p class="full flex">Gripa dolazi naglo, a prate je visoka temperatura, bol u mišićima te umor i iscrpljenost. Antibiotici nisu učinkoviti jer je riječ o virusnoj bolesti</p>
                        <div class="cta">Pročitaj više</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<section class="full native-signature">
    <div class="container flex">
        <div class="full center">
            <img class="partner-logo" src="<?php echo $native_path ?>img/aspirin_logo.png" alt="Aspirin logo" />
        </div>
        <div class="full flex health-disclaimer">
            <p>Prije upotrebe pažljivo pročitajte uputu o lijeku, a o rizicima i nuspojavama upitajte svog liječnika ili ljekarnika.</p>
        </div>
        <div class="full center">
            <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
        </div>
        <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Bayer i po najvišim uredničkim standardima Telegram Media Grupe.</p>
    </div>
</section>
</div>

<?php wp_footer(); 
?>
</body>

</html>