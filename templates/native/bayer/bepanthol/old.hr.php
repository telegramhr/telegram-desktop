<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/bayer/bepanthol/';
$test_results = [
    [
        'da_result' => 'Dok radite na računalu, postavite ekran malo ispod razine pogleda jer ćete tako smanjiti isparavanje suza. Možete si pomoći i umjetnim suzama koje služe kao nadomjestak prirodnima. Na tržištu se posebno ističu Bepanthol® kapi za oči jer sadrže dvije prirodne komponente – hijaluronsku kiselinu i dekspantenol. Formule s hijaluronskom kiselinom imaju sposobnost vezanja vode te tako omogućuju vlaženje oka. Također, hijaluronska kiselina zbog svojih fizikalnih svojstava stvara postojan, stabilan i dugotrajan zaštitni sloj na površini rožnice, koji ne zamućuje vid. Osim hijaluronske kiseline, Bepanthol® kapi sadrže i 2 posto dekspantenola, koji zbog visokog kapaciteta vezanja vode, vlaži i njeguje oko. Zajedno s natrijevim hijalurantom zadržava vlažnost oka.',
        'ne_result' => 'Iako nemate klasične simptome suhoće očiju dobro se podsjetiti kako izbjeći ovaj problem. Dok radite na računalu, postavite ekran malo ispod razine pogleda jer ćete tako smanjiti isparavanje suza. Nošenje maski također isušuje oči pa ih je dobro odmoriti umjetnim suzama kako bi ostale svježe. Na tržištu su prisutne inovativne formulacije s hijaluronskom kiselinom koje imaju sposobnost vezanja vode i na taj način omogućuju vlaženje oka. Posebno se ističu Bepanthol® kapi koje sadrže natrijevu sol hijaluronske kiseline uslijed čijih fizikalnih svojstava se stvara postojan, stabilan i dugotrajan zaštitni sloj na površini rožnice, koji ne zamućuje vid.',
    ],
    [
        'da_result' => 'Suhoća očiju spada među najčešće očne tegobe. Radi se o simptomima koji se javljaju tijekom smanjenog lučenja suza. Na tržištu su prisutne inovativne formulacije s hijaluronskom kiselinom koje imaju sposobnost vezanja vode i na taj način omogućuju vlaženje oka. Posebno se ističu Bepanthol® kapi koje sadrže natrijevu sol hijaluronske kiseline uslijed čijih fizikalnih svojstava se stvara postojan, stabilan i dugotrajan zaštitni sloj na površini rožnice, koji ne zamućuje vid.',
        'ne_result' => 'Iako nemate klasične simptome suhoće očiju dobro se podsjetiti kako izbjeći ovaj problem. Dok radite na računalu, postavite ekran malo ispod razine pogleda jer ćete tako smanjiti isparavanje suza. Nošenje maski također isušuje oči pa ih je dobro odmoriti umjetnim suzama kako bi ostale svježe. Na tržištu su prisutne inovativne formulacije s hijaluronskom kiselinom koje imaju sposobnost vezanja vode i na taj način omogućuju vlaženje oka. Posebno se ističu Bepanthol® kapi koje sadrže natrijevu sol hijaluronske kiseline uslijed čijih fizikalnih svojstava se stvara postojan, stabilan i dugotrajan zaštitni sloj na površini rožnice, koji ne zamućuje vid.',
    ],
    [
        'da_result' => 'Suhoća očiju spada među najčešće očne tegobe. Radi se o simptomima koji se javljaju tijekom smanjenog lučenja suza. Na tržištu su prisutne inovativne formulacije s hijaluronskom kiselinom koje imaju sposobnost vezanja vode i na taj način omogućuju vlaženje oka. Posebno se ističu Bepanthol® kapi koje sadrže natrijevu sol hijaluronske kiseline uslijed čijih fizikalnih svojstava se stvara postojan, stabilan i dugotrajan zaštitni sloj na površini rožnice, koji ne zamućuje vid.',
        'ne_result' => 'Iako nemate klasične simptome suhoće očiju dobro se podsjetiti kako izbjeći ovaj problem. Dok radite na računalu, postavite ekran malo ispod razine pogleda jer ćete tako smanjiti isparavanje suza. Nošenje maski također isušuje oči pa ih je dobro odmoriti umjetnim suzama kako bi ostale svježe. Na tržištu su prisutne inovativne formulacije s hijaluronskom kiselinom koje imaju sposobnost vezanja vode i na taj način omogućuju vlaženje oka. Posebno se ističu Bepanthol® kapi koje sadrže natrijevu sol hijaluronske kiseline uslijed čijih fizikalnih svojstava se stvara postojan, stabilan i dugotrajan zaštitni sloj na površini rožnice, koji ne zamućuje vid.',
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
        <div class="container intro">
            <h2 class="full">Više nego ikada trebamo zaštiti zdravlje svojih očiju, Bepanthol donosi nekoliko savjeta kako to učiniti</h2>
            <p>Zdravlje očiju važno je kao i zdravlje tijela. Često odlazite na trening ili u šetnju kako biste brinuli o mišićima i snazi tijela, pazite na svoje lice odlaskom dermatologu i korištenjem najboljih preparata. Jednako tako treba usmjeriti i pažnju na zdravlje svojih očiju, posebice sada kada nas je novo normalno još više usmjerilo na korištenje laptopa, računala, mobitela i zaštitnih maski koje ozbiljno štete našim očima.</p>
            <p>Otkrijte na jednom mjestu sve o suhoći oka i brizi za svoje oči.</p>
        </div>
    </div>
    <div class="full flex color-section">
        <div class="container flex">
            <h2 class="full">Koliko brinete o svojim očima?</h2>
            <p>Riješite test i otkrijte koliko ste posvećeni ovom bitnom dijelu svog tijela</p>
            <div class="full flex quiz">
                <div class="quiz-container">
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
                            <span>Tvoj rezultat je:</span>
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
                        <a class="btn" href="#" id="restart">Pokušaj ponovno</a>
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
                    var da = 0;
                    var ne = 0;
                    var da_result = 1;
                    var ne_result = 1;
                    $('.answer').click(function() {
                        var active = $('.slide.active').data('slide');
                        $current_answer = $(this).attr('data-answer');
                        if ($current_answer == 'da') {
                            ne++;
                        }
                        if ($current_answer == 'ne') {
                            da++;
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
                                da_result = 2;
                            }
                            else if (da > 4) {
                                da_result = 3;
                            }
                            if (ne > 7) {
                                ne_result = 2;
                            }
                            else if (ne > 4) {
                                ne_result = 3;
                            }
                            var da = 0;
                            var ne = 0;
                            var da_result = 1;
                            var ne_result = 1;
                            $('.result .description').html(descriptions[da_result].text);
                            $('.result .description-2').html(descriptions[ne_result].text);
                            $('.slide.slide-' + active).addClass('active');
                            $('.progress-bar').fadeOut(0);
                        }
                        return false;
                    });
                });
            </script>
        </div>
    </div>
    <div class="full flex">
        <div class="container article">
            <h2 class="full">SINDROM SUHOG OKA I ŠTO S TIM</h2>
            <img src="https://www.telegram.hr/wp-content/uploads/2020/10/gettyimages-840466270-840x530@2x.jpg" aria-hidden="true">
            <p>Sindrom suhog oka može izazvati:</p>
            <ul class="full">
                <li>osjećaj peckanja i svrbeži</li>
                <li>osjećaj da vam je strano tijelo upalo u oko (najčešće se opisuje kao osjećaj ‘pijeska u očima’)</li>
                <li>osjetljivost na svjetlo</li>
                <li>zamagljenost vida</li>
                <li>promjene u oštrini vida</li>
                <li>nelagodu pri nošenju kontaktnih leća</li>
                <li>naprezanje tijekom noćne vožnje</li>
                <li>te, iako pomalo kontradiktorno, pojačano suzenje očiju</li>
            </ul>
            <p>Sindrom suhog oka često je stanje u kojem je narušena proizvodnja i kvaliteta suza. To je jedan od najčešćih problema s očima koji postaje sve učestaliji s godinama jer se proizvodnja suza može smanjiti kao dio procesa starenja. A ako se ne prevenira, može izazvati česte upale pa i oštećenja očne površine. Smanjenu, odnosno narušenu proizvodnju suza, često prate neugodni simptomi zbog kojih ljudi često potraže liječničku pomoć. Tako su neugodne nuspojave ovoga sindroma, zapravo vrlo često glavni povod za odlazak oftalmologu.</p>
            <div class="full"><a href="https://www.telegram.hr/?p=964458&post_type=partneri&preview=1&_ppp=b94ead2d75" target="_blank" class="article-link">Sindrom suhog oka sve je veći zdravstveni problem. Saznajte jeste li i vi u rizičnoj skupini.</a></div>
        </div>
    </div>
    <div class="full flex color-section">
        <div class="container flex">
            <video preload="auto" autoplay="" muted="" loop="" playsinline class="wow fadeIn" src="<?php echo $native_path ?>img/tg_animographic_bepanthol_kapi_web.mp4" type="video/mp4" aria-hidden="true"></video>
        </div>
    </div>
    <div class="full flex">
        <div class="container article">
            <h2 class="full">SLUŠAJTE SVOJE TIJELO, PRATITE SVOJ VID</h2>
            <img src="https://www.telegram.hr/wp-content/uploads/2020/10/gettyimages-1189362136-840x530@2x.jpg" aria-hidden="true">
            <p>Faktori koji povećavaju rizik za razvoj suhoga oka:</p>
            <ul class="full">
                <li>Dob: Proizvodnja suza opada sa starenjem pa je sindrom suhoga oka učestaliji kod ljudi starijih od 50 godina</li>
                <li>Spol: Ova je pojava češća u žena nego u muškaraca, osobito u onih koje prolaze kroz hormonalne promjene uslijed trudnoće, menopauze ili tijekom dojenja</li>
                <li>Prehrana: Manjak vitamina A kojim obiluju namirnice poput jetre, mrkve i brokule ili pak manjak omega-3 masnih kiselina kojima su bogati riba, orašasti plodovi i biljna ulja</li>
                <li>Nošenje kontaktnih leća</li>
                <li>Operativni zahvati: Laserske korekcije vida</li>
            </ul>
            <p>Na suhoću oka utječe niz faktora koji remete zdrav suzni film. On se sastoji od tri sloja: mukoznog, lipidnog i vodenog. Poremećaj u bilo kojem od ovih slojeva dovodi do sindroma suhoga oka. A uzroci poremećaja su raznoliki. Na mehanizme suznoga filma mogu utjecati hormonalne promjene, autoimune bolesti, upale očnog kapka ili alergijske bolesti oka. Kod nekih ljudi, uzrok suhoće može biti ili nedovoljna proizvodnja suza ili pojačano ishlapljivanje suza.</p>
            <div class="full"><a href="https://www.telegram.hr/?p=964898&post_type=partneri&preview=1&_ppp=a6e0bcbee9" target="_blank" class="article-link">Sva stanja koja utječu na pojavu suhoće oka: Poremećaji štitnjače, menopauza, manjak vitamina...</a></div>
        </div>
    </div>
    <div class="full flex color-section">
        <div class="container flex center">
            <h1 class="full section-title">Zaštita očiju u vrijeme velikih promjena uslijed pandemije</h2>
        </div>
    </div>
    <div class="full flex">
        <div class="container article">
            <h2 class="full">MASKE I SINDROM SUHOG OKA</h2>
            <img src="https://www.telegram.hr/wp-content/uploads/2020/10/gettyimages-1216346428-1-840x530.jpg" aria-hidden="true">
            <p>Takozvani MADE (mask-associated dry eye), odnosno sindrom suhog oka povezan s nošenjem maski, zaokupio je pažnju stručnjaka. Naime, uslijed uvođenja antipandemijskih mjera uočen je porast iritacija te suhoće očiju kod ljudi koji redovito nose zaštitne maske, pokazala je studija objavljena u stručnom časopisu Ophthalmology and Therapy*. </p>
            <img src="https://www.telegram.hr/wp-content/uploads/2020/10/gettyimages-1215004659.jpg" aria-hidden="true">
            <p>Dok ljudi konstantno, po nekoliko sati bez prestanka nose zaštitnu masku, te ako ona nije čvrsto pričvršćena uz nos, zrak koji izdišu direktno odlazi u oči. Taj zrak ubrzava evaporaciju suznog filma s površine oka, što dugoročno može izazvati suhoću i iritaciju oka. A kako suzni film predstavlja barijeru za ulaz patogena u oko, ubrzana evaporacija može oslabiti njegovu zaštitnu ulogu i oko učiniti podložnijim infekcijama…</p>
            <div class="full"><a href="https://www.telegram.hr/?p=964134&post_type=partneri&preview=1&_ppp=005104725d" target="_blank" class="article-link">Maske nas štite od virusa, ali zbog njih mogu patiti naše oči – u pomoć stižu umjetne suze</a></div>
        </div>
    </div>
    <div class="full flex">
        <div class="container article">
            <h2 class="full">Naše oči slijed pandemije pati više nego ikada</h2>
            <img src="https://www.telegram.hr/wp-content/uploads/2020/10/gettyimages-1192256180-840x530@2x.jpg" aria-hidden="true">
            <p>U prosjeku provodimo i po 10 sati prikovani uz računala i mobitele. Tako narušavamo vid. Uslijed epidemije koronavirusa većina ljudi radi i uči on-line od kuće. Na prvom su udaru naše oči koje se pritom dodatno naprežu.</p>
            <p>Da, u današnje vrijeme mnogi poslovi zahtijevaju sate i sate rada za računalom i to je dio naše svakodnevice. No, ono što zabrinjava jest da ljudi i nakon posla ostaju zakovani za ekrane. Tome su sve skloniji i mladi, pa i djeca. Svemu je pridonijelo i pridržavanje preventivnim mjerama uslijed pandemije koronavirusom.</p>
            <img src="https://www.telegram.hr/wp-content/uploads/2020/10/gettyimages-1223848962.jpg" aria-hidden="true">
            <p class="bold">VAŽNE SU PAUZE I NJEGA OČIJU</p>
            <p>Inače ljudi u prosjeku trepnu od 16 do 20 puta u minuti dok tijekom rada za računalom to rade tek od šest do osam puta. Upravo zato, a kako bi se spriječile eventualne posljedice, stručnjaci preporučuju uzimanje kraćih pauza svakih 20 minuta, uz svjesno treptanje, kako bi se oko moglo adekvatno navlažiti suzama. No, ako ni to ne pomaže te ako imate osjećaj da su vam oči izrazito suhe, pomoć potražite u obliku umjetnih suza. Na tržištu se posebno ističu specijalizirane formulacije poput one koja krasi Bepanthol® kapi za oči. Ove kapi sadrže dvije prirodne tvari – hijaluronsku kiselinu i dekspantenol koje nadraženom oku pružaju trenutno olakšanje. Naime, oba sastojka imaju sposobnost vezanja vode koja omogućuje nesmetano vlaženje oka. Još savjeta kako dodatno zaštiti svoje oči pročitajte ovdje: U prosjeku provodimo i po 10 sati prikovani uz računala i mobitele. Tako narušavamo vid. Kako vi stojite?</p>
            <div class="full"><a href="https://www.telegram.hr/?p=964488&post_type=partneri&preview=1&_ppp=0dba116ef3" target="_blank" class="article-link">Pročitaj više</a></div>
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