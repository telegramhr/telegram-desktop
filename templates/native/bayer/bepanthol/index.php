<!DOCTYPE html>
<html lang="hr">

<?php
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/bayer/bepanthol/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/bayer/bepanthol/';
$test_results = [
    [
        'da_results' => 'Dok radite na računalu, postavite ekran malo ispod razine pogleda jer ćete tako smanjiti isparavanje suza. Možete si pomoći i umjetnim suzama koje služe kao nadomjestak prirodnima. Na tržištu se posebno ističu Bepanthol® kapi za oči jer sadrže dvije prirodne komponente – hijaluronsku kiselinu i dekspantenol. Formule s hijaluronskom kiselinom imaju sposobnost vezanja vode te tako omogućuju vlaženje oka. Također, hijaluronska kiselina zbog svojih fizikalnih svojstava stvara postojan, stabilan i dugotrajan zaštitni sloj na površini rožnice, koji ne zamućuje vid. Osim hijaluronske kiseline, Bepanthol® kapi sadrže i 2 posto dekspantenola, koji zbog visokog kapaciteta vezanja vode, vlaži i njeguje oko. Zajedno s natrijevim hijalurantom zadržava vlažnost oka.',
        'ne_results' => 'Iako nemate klasične simptome suhoće očiju dobro se podsjetiti kako izbjeći ovaj problem. Dok radite na računalu, postavite ekran malo ispod razine pogleda jer ćete tako smanjiti isparavanje suza. Nošenje maski također isušuje oči pa ih je dobro odmoriti umjetnim suzama kako bi ostale svježe. Na tržištu su prisutne inovativne formulacije s hijaluronskom kiselinom koje imaju sposobnost vezanja vode i na taj način omogućuju vlaženje oka. Posebno se ističu Bepanthol® kapi koje sadrže natrijevu sol hijaluronske kiseline uslijed čijih fizikalnih svojstava se stvara postojan, stabilan i dugotrajan zaštitni sloj na površini rožnice, koji ne zamućuje vid.',
    ],
    [
        'da_results' => 'Suhoća očiju spada među najčešće očne tegobe. Radi se o simptomima koji se javljaju tijekom smanjenog lučenja suza. Na tržištu su prisutne inovativne formulacije s hijaluronskom kiselinom koje imaju sposobnost vezanja vode i na taj način omogućuju vlaženje oka. Posebno se ističu Bepanthol® kapi koje sadrže natrijevu sol hijaluronske kiseline uslijed čijih fizikalnih svojstava se stvara postojan, stabilan i dugotrajan zaštitni sloj na površini rožnice, koji ne zamućuje vid.',
        'ne_results' => 'Sindrom suhog oka često je stanje u kojem je narušena proizvodnja i kvaliteta suza. To je jedan od najčešćih problema s očima koji postaje sve učestaliji s godinama jer se proizvodnja suza može smanjiti kao dio procesa starenja. Kako biste održali kvalitetu zdravlja svojih očiju, preporučujemo  Bepanthol® kapi koje sadrže natrijevu sol hijaluronske kiseline uslijed čijih fizikalnih svojstava se stvara postojan, stabilan i dugotrajan zaštitni sloj na površini rožnice, koji ne zamućuje vid.',
    ],
    [
        'da_results' => 'Kako biste smanjili rizik od pojave sindroma suhoga oka ili si olakšali tegobe pokušajte smanjiti izloženost čimbenicima koji mogu uzrokovati ili pogoršati stanje kao što su snažan vjetar, duhanski dim i kemijske pare. Također, koristite ovlaživač zraka u zatvorenim prostorima u kojima često i dugo boravite. Također preporučujemo za vas Bepanthol® kapi za oči jer sadrže dvije prirodne komponente - hijaluronsku kiselinu i dekspantenol. Formule s hijaluronskom kiselinom imaju sposobnost vezanja vode te tako omogućuju vlaženje oka. Također, hijaluronska kiselina zbog svojih fizikalnih svojstava stvara postojan, stabilan i dugotrajan zaštitni sloj na površini rožnice, koji ne zamućuje vid.',
        'ne_results' => 'Nošenje zaštitnih maski, kao i učestalo gledanje u monitore i ekrane, isušuje oči pa ih je dobro odmoriti umjetnim suzama kako bi ostale svježe. Na tržištu su prisutne inovativne formulacije s hijaluronskom kiselinom koje imaju sposobnost vezanja vode i na taj način omogućuju vlaženje oka. Posebno se ističu Bepanthol® kapi koje sadrže natrijevu sol hijaluronske kiseline uslijed čijih fizikalnih svojstava se stvara postojan, stabilan i dugotrajan zaštitni sloj na površini rožnice, koji ne zamućuje vid.',
    ]
]
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500,700,900&display=swap&subset=latin-ext" rel="stylesheet">
</head>
<div class="main-container flex">
    <div class="native-hero full flex relative center">
        <div class="native-title half center flex flex-responsive">
            <h1 class="full">Zdrave oči, zdrav pogled na svijet</h1>
        </div>
        <div class="half flex flex-responsive native-visual">
            <video preload="auto" autoplay="" muted="" loop="" playsinline class="wow fadeIn" src="<?php echo $native_path ?>img/tg_header_bayer_oci.mp4" type="video/mp4" aria-hidden="true"></video>
        </div>
    </div>
    <div class="full flex">
        <div class="container flex">
            <a href="https://www.telegram.hr/partneri/sindrom-suhog-oka-sve-je-veci-zdravstveni-problem-saznajte-jeste-li-i-vi-u-rizicnoj-skupini/" target="_blank" class="article article-1">
                <div class="article-content center">
                    <div class="full">
                        <h2 class="full center-text">Sindrom suhog oka sve je veći zdravstveni problem. Saznajte jeste li i vi u rizičnoj skupini</h2>
                        <div class="full center">
                            <div class="cta animate">Saznaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://www.telegram.hr/partneri/sva-stanja-koja-utjecu-na-pojavu-suhoce-oka-poremecaji-stitnjace-menopauza-manjak-vitamina/" target="_blank" class="article article-2">
                <div class="article-content center">
                    <div class="full">
                        <h2 class="full center-text">Sva stanja koja utječu na pojavu suhoće oka: Poremećaji štitnjače, menopauza, manjak vitamina</h2>
                        <div class="full center">
                            <div class="cta animate">Saznaj više</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="full flex color-section hide">
        <div class="container flex">
            <h2 class="full center-text shoo-top">Koliko brinete o svojim očima?</h2>
            <p class="full center-text">Riješite test i otkrijte koliko ste posvećeni ovom bitnom dijelu svog tijela</p>
            <div class="full flex quiz">
                <div class="full flex quiz-container">
                    <!-- Slide 1 -->
                    <div data-slide="1" class="slide slide-1 active">
                        <h3 class="question">
                            Osjećate li peckanje očiju nakon nošenja zaštitne maske?
                        </h3>
                        <div class="answers flexNoWrap">
                            <div class="answer answer-1" data-answer="da">
                                <h4 class="answer-text">
                                    Da
                                </h4>
                            </div>

                            <div class="answer answer-2" data-answer="ne">
                                <h4 class="answer-text">
                                    Ne
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div data-slide="2" class="slide slide-2">
                        <h3 class="question">
                            Koristite li svaki dan stolno računalo za rad od kuće ili u uredu?
                        </h3>
                        <div class="answers flexNoWrap">
                            <div class="answer answer-1" data-answer="da">
                                <h4 class="answer-text">
                                    Da
                                </h4>
                            </div>

                            <div class="answer answer-2" data-answer="ne">
                                <h4 class="answer-text">
                                    Ne
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div data-slide="3" class="slide slide-3">
                        <h3 class="question">
                            Gledate li svaki dan televiziju više od sat i pol vremena?
                        </h3>
                        <div class="answers flexNoWrap">
                            <div class="answer answer-1" data-answer="da">
                                <h4 class="answer-text">
                                    Da
                                </h4>
                            </div>

                            <div class="answer answer-2" data-answer="ne">
                                <h4 class="answer-text">
                                    Ne
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div data-slide="4" class="slide slide-4">
                        <h3 class="question">
                            Pogledate li na mobitel više od 10 puta dnevno?
                        </h3>
                        <div class="answers flexNoWrap">
                            <div class="answer answer-1" data-answer="da">
                                <h4 class="answer-text">
                                    Da
                                </h4>
                            </div>

                            <div class="answer answer-2" data-answer="ne">
                                <h4 class="answer-text">
                                    Ne
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 5 -->
                    <div data-slide="5" class="slide slide-5">
                        <h3 class="question">
                            Primjećujete li crvenilo nakon dužeg nošenja zaštitne maske?
                        </h3>
                        <div class="answers flexNoWrap">
                            <div class="answer answer-1" data-answer="da">
                                <h4 class="answer-text">
                                    Da
                                </h4>
                            </div>

                            <div class="answer answer-2" data-answer="ne">
                                <h4 class="answer-text">
                                    Ne
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 6 -->
                    <div data-slide="6" class="slide slide-6">
                        <h3 class="question">
                            Primjećujete li peckanje u očima nakon dužeg gledanja u ekran?
                        </h3>
                        <div class="answers flexNoWrap">
                            <div class="answer answer-1" data-answer="da">
                                <h4 class="answer-text">
                                    Da
                                </h4>
                            </div>

                            <div class="answer answer-2" data-answer="ne">
                                <h4 class="answer-text">
                                    Ne
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 7 -->
                    <div data-slide="7" class="slide slide-7">
                        <h3 class="question">
                            Primjećujete li promjenu u oštrini vida nakon dužeg rada za računalom?
                        </h3>
                        <div class="answers flexNoWrap">
                            <div class="answer answer-1" data-answer="da">
                                <h4 class="answer-text">
                                    Da
                                </h4>
                            </div>

                            <div class="answer answer-2" data-answer="ne">
                                <h4 class="answer-text">
                                    Ne
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 8 -->
                    <div data-slide="8" class="slide slide-8">
                        <h3 class="question">
                            Primjećujete li peckanje, crvenilo u očima ili lagani pritisak u očima duže od 2 mjeseca?
                        </h3>
                        <div class="answers flexNoWrap">
                            <div class="answer answer-1" data-answer="da">
                                <h4 class="answer-text">
                                    Da
                                </h4>
                            </div>

                            <div class="answer answer-2" data-answer="ne">
                                <h4 class="answer-text">
                                    Ne
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 9 -->
                    <div data-slide="9" class="slide slide-9">
                        <h3 class="question">
                            Koristite li kapi za oči za osvježavanje svojih očiju?
                        </h3>
                        <div class="answers flexNoWrap">
                            <div class="answer answer-1" data-answer="da">
                                <h4 class="answer-text">
                                    Da
                                </h4>
                            </div>

                            <div class="answer answer-2" data-answer="ne">
                                <h4 class="answer-text">
                                    Ne
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 10 -->
                    <div data-slide="10" class="slide slide-10">
                        <h3 class="question">
                            Nosite li leće ili naočale?
                        </h3>
                        <div class="answers flexNoWrap">
                            <div class="answer answer-1" data-answer="da">
                                <h4 class="answer-text">
                                    Da
                                </h4>
                            </div>

                            <div class="answer answer-2" data-answer="ne">
                                <h4 class="answer-text">
                                    Ne
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 11 -->
                    <div data-slide="11" class="slide slide-11">
                        <h3 class="question">
                            Odmarate li svoje oči tijekom dana tako da gledate u daljinu i ne gledate barem 20 minuta u ekran?
                        </h3>
                        <div class="answers flexNoWrap">
                            <div class="answer answer-1" data-answer="da">
                                <h4 class="answer-text">
                                    Da
                                </h4>
                            </div>

                            <div class="answer answer-2" data-answer="ne">
                                <h4 class="answer-text">
                                    Ne
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div data-slide="12" class="slide slide-12 result">
                        <h3 class="question">
                            <span>Vaš rezultat je:</span>
                        </h3>
                        <p class="description whiteSpace">
                            Bacon ipsum dolor amet doner meatball strip steak drumstick. Tail porchetta meatball andouille
                            chuck flank drumstick capicola picanha pork turkey brisket pork chop prosciutto corned beef.
                            Beef chuck bresaola pastrami ball tip. Cow tri-tip andouille shoulder shankle jerky sirloin beef
                            boudin sausage. Biltong ribeye meatloaf doner pork loin.
                        </p>
                        <p class="description-2 whiteSpace">
                            Bacon ipsum dolor amet doner meatball strip steak drumstick. Tail porchetta meatball andouille
                            chuck flank drumstick capicola picanha pork turkey brisket pork chop prosciutto corned beef.
                            Beef chuck bresaola pastrami ball tip. Cow tri-tip andouille shoulder shankle jerky sirloin beef
                            boudin sausage. Biltong ribeye meatloaf doner pork loin.
                        </p>
                        <a class="cta" href="#" id="restart">Pokušaj ponovno</a>
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
                        <i class="fa fa-circle-o fa-11"></i>
                    </div>

                </div>
            </div>
            <script>
                var da = 0;
                var ne = 0;
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
                    var da_result = 0;
                    var ne_result = 0;
                    $('.answer').click(function() {
                        var active = $('.slide.active').data('slide');
                        current_answer = $(this).attr('data-answer');
                        if (current_answer == 'da') {
                            ne = ne + 1;
                        }
                        if (current_answer == 'ne') {
                            da = da + 1;
                        }
                        //advance
                        $('.slide.slide-' + active).removeClass('active');
                        $('.fa.fa-' + active).removeClass('fa-circle');
                        active++;
                        if (active !== 12) {
                            $('.slide.slide-' + active).addClass('active');
                            $('.fa.fa-' + active).addClass('fa-circle');
                        } else {

                            if (da > 7) {
                                $('.result .description').html(descriptions[2].da_results);
                            } else if (da > 4) {
                                $('.result .description').html(descriptions[1].da_results);
                            } else {
                                $('.result .description').html(descriptions[0].da_results);
                            }
                            if (ne > 7) {
                                $('.result .description-2').html(descriptions[2].ne_results);
                            } else if (ne > 4) {
                                $('.result .description-2').html(descriptions[1].ne_results);
                            } else {
                                $('.result .description-2').html(descriptions[0].ne_results);
                            }
                            var da = 0;
                            var ne = 0;
                            $('.slide.slide-' + active).addClass('active');
                            $('.progress-bar').fadeOut(0);
                            var da_result = 1;
                            var ne_result = 1;
                        }
                        return false;
                    });
                });
            </script>
        </div>
    </div>
    <div class="full flex color-section">
        <div class="container flex center">
            <video preload="auto" autoplay="" muted="" loop="" playsinline class="wow fadeIn" src="<?php echo $native_path ?>img/tg_animographic_bepanthol_kapi_web.mp4?ver=2.1" type="video/mp4" aria-hidden="true"></video>
        </div>
    </div>
    <div class="full flex">
        <div class="container flex">
            <a href="https://www.telegram.hr/partneri/maske-nas-stite-od-virusa-ali-zbog-njih-mogu-patiti-nase-oci-u-pomoc-stizu-umjetne-suze/" target="_blank" class="article article-3">
                <div class="article-content center">
                    <div class="full">
                        <h2 class="full center-text">Maske nas štite od virusa, ali zbog njih mogu patiti naše oči – u pomoć stižu umjetne suze </h2>
                        <div class="full center">
                            <div class="cta animate">Saznaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://www.telegram.hr/partneri/u-prosjeku-provodimo-i-po-10-sati-prikovani-uz-racunala-i-mobitele-tako-narusavamo-vid-kako-vi-stojite/" target="_blank" class="article article-4">
                <div class="article-content center">
                    <div class="full">
                        <h2 class="full center-text">U prosjeku provodimo i po 10 sati prikovani uz računala i mobitele. Tako narušavamo vid. Kako vi stojite?</h2>
                        <div class="full center">
                            <div class="cta animate">Saznaj više</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <section class="full native-signature">
        <div class="container flex">
            <div class="full center">
                <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
            </div>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Bayer i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
    </section>
</div>

<?php wp_footer(); ?>
</body>

</html>