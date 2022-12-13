<?php
$path = get_stylesheet_directory_uri() . '/templates/native/loccitane/kviz/';
if (isset($_GET['result'])) {
    $result = (int) $_GET['result'];
} else {
    $result = 0;
}
$meta_data = [
    [
        'title' => 'U ljubavi i u darivanju detalji su bitni. Riješi test i saznaj što tvoja ljubav želi',
        'description' => 'Interaktivni test',
        'url' => 'https://super1.telegram.hr/look/vodimo-vas-na-mirisno-putovanje-u-provansu-izgleda-da-ce-ovo-biti-oh-la-la-valentinovo'
    ],
    [
        'title' => 'U ljubavi i u darivanju detalji su bitni. Riješi test i saznaj što tvoja ljubav želi  ',
        'description' => 'Romantičar - Za njega je savršen poklon L' . "'" . 'Occitan set za Valentinovo: neka tvoj muškarac otkrije L' . "'" . 'Occitan kolekciju s mirisnim notama lavande iz Provanse, gorućeg drveta te začinskim notama papra i muškatnog oraščića. Modernog muškarca sa stilom i samopouzdanjem, ovaj će set oduševiti.',
        'gift' => 'https://super1.telegram.hr/wp-content/uploads/sites/3/2020/02/a.png',
        'url' => 'https://super1.telegram.hr/look/vodimo-vas-na-mirisno-putovanje-u-provansu-izgleda-da-ce-ovo-biti-oh-la-la-valentinovo'
    ],
    [
        'title' => 'U ljubavi i u darivanju detalji su bitni. Riješi test i saznaj što tvoja ljubav želi  ',
        'description' => 'Praktičar - Poklon set za Valentinovo Cedrat iz L' . "'" . 'Occitanea potaknut će njegovu praktični duh koji sve, pa tako i ljubavna pitanja, rješava bez mnogo drame. Ekstrakt organskog cedrata s Korzike, poznatog po svojim osnažujućim svojstvima, ovaj set čini najljepšim darom za vašeg praktičnog muškarca „žednog“  intenzivne svježine – i ljubavi.',
        'gift' => 'https://super1.telegram.hr/wp-content/uploads/sites/3/2020/02/b.png',
        'url' => 'https://super1.telegram.hr/look/vodimo-vas-na-mirisno-putovanje-u-provansu-izgleda-da-ce-ovo-biti-oh-la-la-valentinovo'
    ],
    [
        'title' => 'U ljubavi i u darivanju detalji su bitni. Riješi test i saznaj što tvoja ljubav želi  ',
        'description' => 'Avanturist - Citrusne note cedrata s ledenim notama mente i drvenastim začinima, za osjećaj morske svježine u L' . "'" . 'Occitane poklon set za Valentinovo Cologne Cedrat idealne su za pustolovni duh tvog voljenog muškarca.',
        'gift' => 'https://super1.telegram.hr/wp-content/uploads/sites/3/2020/02/c.png',
        'url' => 'https://super1.telegram.hr/look/vodimo-vas-na-mirisno-putovanje-u-provansu-izgleda-da-ce-ovo-biti-oh-la-la-valentinovo'
    ],
]
?>

<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="<?php echo $path; ?>js/functions.js"></script>
    <link rel="stylesheet" href="<?php echo $path; ?>style.css?ver=1.0" type="text/css" />
</head>

<body>
<?php do_action('body_start') ?>
    <section>
        <article>
            <div class="cijeli centerText">
                <h4 class="midAlign">Interaktivni test</h4>
                <h2 class="midAlign">U ljubavi i u darivanju detalji su bitni. Riješi test i saznaj što tvoja ljubav želi </h2>
                <div class="quiz-container whiteSpace">
                    <!-- Slide 1 -->
                    <div data-slide="1" class="slide slide-1 active">
                        <h3 class="question">
                            Zazvonila je budilica, što će tvoj dragi najprije napraviti:
                        </h3>
                        <div class="answers flexNoWrap">
                            <div class="answer answer-1" data-ultra="1">
                                <h4 class="answer-text">
                                    Poljubiti te i skuhati kavu (ili će te nazvati telefonom ako ne živite zajedno)
                                </h4>
                            </div>

                            <div class="answer answer-2" data-st="1">
                                <h4 class="answer-text">
                                    Rastegnuti se, otvoriti prozor i pogledati kakvo je vrijeme
                                </h4>
                            </div>

                            <div class="answer answer-3" data-new="1">
                                <h4 class="answer-text">
                                    Iskočiti iz kreveta i jurnuti u kupaonu
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div data-slide="2" class="slide slide-2">
                        <h3 class="question">
                            Ti voliš samo ljubavne filmove, a on samo špijunske. On predlaže da:
                        </h3>
                        <div class="answers flexNoWrap">
                            <div class="answer answer-1" data-ultra="1">
                                <h4 class="answer-text">
                                    Naizmjence gledate špijunske i ljubavne filmove tako da oboje budete zadovoljni. I da, on gleda s tobom ljubiće
                                </h4>
                            </div>
                            <div class="answer answer-2" data-st="1">
                                <h4 class="answer-text">
                                    Ti ideš u kino sa svojim prijateljicama, a on sa svojim prijateljima
                                </h4>
                            </div>

                            <div class="answer answer-3" data-new="1">
                                <h4 class="answer-text">
                                    Za njega je gledanje ljubavnog filma izazov: odradit će to, ali zajedljivih komentara neće nedostajati...
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div data-slide="3" class="slide slide-3">
                        <h3 class="question">
                            Tvoja mama inzistira na tome da ste svake nedjelje s njom i tatom na obiteljskom ručku. On:
                        </h3>
                        <div class="answers flexNoWrap">
                            <div class="answer answer-1" data-ultra="1">
                                <h4 class="answer-text">
                                    Nervira se, jer nedjelja je jedini dan kad možete biti zajedno od jutra do mraka, ali ipak pristajete
                                </h4>
                            </div>

                            <div class="answer answer-2" data-st="1">
                                <h4 class="answer-text">
                                    Predlaže da izmjenjujete nedjeljne ručkove, malo kod njegovih, malo kod kuće, malo u restoranu
                                </h4>
                            </div>

                            <div class="answer answer-3" data-new="1">
                                <h4 class="answer-text">
                                    Naglašava kako to nije opcija. Rezervira vam ručak na eko imanju daleko izvan grada
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div data-slide="4" class="slide slide-4">
                        <h3 class="question">
                            Kad gledate fotografije s početka vaše veze, on iskazuje:
                        </h3>
                        <div class="answers flexNoWrap">

                            <div class="answer answer-1" data-ultra="1">
                                <h4 class="answer-text">
                                    Nježnost: tako je očito da ste stvoreni jedno za drugo
                                </h4>
                            </div>

                            <div class="answer answer-2" data-st="1">
                                <h4 class="answer-text">
                                    Simpatiju: veseli ga vidjeti kako ste oboje bili smiješni i simpatični
                                </h4>
                            </div>

                            <div class="answer answer-3" data-new="1">
                                <h4 class="answer-text">
                                    Znatiželju: tko zna kako ćete izgledati za deset godina
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div data-slide="5" class="slide slide-5">
                        <h3 class="question">
                            Zamisli da zajedno gledate film Notebook. Kako on doživljava kraj filma?
                        </h3>
                        <div class="answers flexNoWrap">

                            <div class="answer answer-1" data-ultra="1">
                                <h4 class="answer-text">
                                Kao otvorenu mogućnost: upravo kao što je rekla Allie „Ovo je samo trenutna svađa i sutra će biti kao da se ništa nije desilo, zar ne?“
                                </h4>
                            </div>
                            <div class="answer answer-2" data-st="1">
                                <h4 class="answer-text">
                                Bolno i pogrešno: ako se Allie i Noah vole zašto se moraju razdvojiti, zar ne mogu odmah biti zajedno?
                                </h4>
                            </div>

                            <div class="answer answer-3" data-new="1">
                                <h4 class="answer-text">
                                Licemjerno i nerealno: očito je da njih dvoje ne mogu jedno bez drugoga pa zašto su morali proći pakao?
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div data-slide="6" class="slide slide-6">
                        <h3 class="question">
                            Kako bi za tvog dragog izgledao savršen godišnji odmor:
                        </h3>
                        <div class="answers flexNoWrap">

                            <div class="answer answer-1" data-ultra="1">
                                <h4 class="answer-text">
                                    Skriveni otok, vas svoje sami, romantika i nježnost
                                </h4>
                            </div>
                            <div class="answer answer-2" data-st="1">
                                <h4 class="answer-text">
                                    Organizirano putovanje u neku od hit svjetskih destinacija
                                </h4>
                            </div>

                            <div class="answer answer-3" data-new="1">
                                <h4 class="answer-text">
                                    Adrenalinski izazov: savladati što više uzbuđenja
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div data-slide="7" class="slide slide-7">
                        <h3 class="question">
                            Nakon svađe on obično želi:
                        </h3>
                        <div class="answers flexNoWrap">

                            <div class="answer answer-1" data-ultra="1">
                                <h4 class="answer-text">
                                    Pomiriti se uz međusobne isprike
                                </h4>
                            </div>
                            <div class="answer answer-2" data-st="1">
                                <h4 class="answer-text">
                                    Pomiriti se uz iskren razgovor
                                </h4>
                            </div>

                            <div class="answer answer-3" data-new="1">
                                <h4 class="answer-text">
                                    Pomiriti se u plamenu strasti
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div data-slide="8" class="slide slide-8 result">
                        <h3 class="question">
                            <span>On je:</span>
                        </h3>
                        <img class="gift" src="https://super1.telegram.hr/wp-content/uploads/sites/3/2020/02/a.png" alt="Poklon paket L'Occitane">
                        <p class="description whiteSpace">

                        </p>
                        <h4 class="whiteSpace">Podijeli svoj rezultat:</h4>
                        <a class="share fb" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="share tw" href="#" data-title="twitter"><i class="fa fa-twitter"></i></a>

                        <a class="btn" href="#" id="restart">Pokušaj ponovno</a>
                    </div>


                    <div class="progress-bar">
                        <i class="fa fa-circle-o fa-circle fa-1"></i>
                        <i class="fa fa-circle-o fa-2"></i>
                        <i class="fa fa-circle-o fa-3"></i>
                        <i class="fa fa-circle-o fa-4"></i>
                        <i class="fa fa-circle-o fa-5"></i>
                        <i class="fa fa-circle-o fa-6"></i>
                        <i class="fa fa-circle-o fa-7"></i>
                        <i class="fa fa-circle-o fa-8"></i>
                        <i class="fa fa-circle-o fa-9"></i>
                        <i class="fa fa-circle-o fa-10"></i>
                    </div>

                </div>
                <script>
                    jQuery(document).ready(function($) {
                        $('#restart').click(function() {
                            $('.slide').removeClass('active');
                            $('.fa').removeClass('fa-circle');
                            $('.slide.slide-1').addClass('active');
                            $('.fa.fa-1').addClass('fa-circle');
                            $('.result .description').text('');
                            return false;
                        });
                        var descriptions = <?php echo json_encode($meta_data); ?>;
                        var a = 0;
                        var b = 0;
                        var c = 0;
                        var d = 0;
                        var result = 1;
                        $('.answer').click(function() {
                            var active = $('.slide.active').data('slide');
                            if ($(this).data('ultra')) {
                                b++;
                            }
                            if ($(this).data('st')) {
                                c++;
                            }
                            if ($(this).data('new')) {
                                d++;
                            }
                            //advance
                            $('.slide.slide-' + active).removeClass('active');
                            $('.fa.fa-' + active).removeClass('fa-circle');
                            active++;
                            if (active !== 8) {
                                $('.slide.slide-' + active).addClass('active');
                                $('.fa.fa-' + active).addClass('fa-circle');
                            } else {
                                if (b >= c && b >= d) {
                                    result = 1;
                                } else if (c >= d) {
                                    result = 2;
                                } else {
                                    result = 3;
                                }
                                a = 0;
                                b = 0;
                                c = 0;
                                d = 0;
                                $('.result .description').prepend(descriptions[result].description);
                                $('.result .share').attr('href', descriptions[result].url);
                                $('.result .gift').attr('src', descriptions[result].gift);
                                $('.result .share.tw').data('title', descriptions[result].title);
                                $('.slide.slide-' + active).addClass('active');
                                $('.progress-bar').fadeOut(0);
                            }
                            return false;
                        });

                        $('.share.fb').click(function() {
                            FB.ui({
                                method: 'share',
                                href: $(this).attr('href')
                            }, function(response) {});
                            return false;
                        });
                        $('.share.tw').click(function() {
                            var url = 'https://twitter.com/intent/tweet?via=Telegram.hr&url=https://super1.telegram.hr/look/vodimo-vas-na-mirisno-putovanje-u-provansu-izgleda-da-ce-ovo-biti-oh-la-la-valentinovo&text=' + encodeURIComponent($(this).data('title'));

                            window.open(url, '_blank', 'width=600,height=600');

                            return false;
                        });
                    });
                </script>
            </div>
        </article>
    </section>
    <?php wp_footer(); ?>
</body>

</html>