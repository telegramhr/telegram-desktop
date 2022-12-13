<?php
    if (isset($_GET['result'])) {
        $result = (int) $_GET['result'];
    }
    else {
        $result = 0;
    }
    $meta_data = [
        [
            'title' => 'Utrči u top formu: Počni trčati s Adidasom',
            'description' => 'Najbolji savjeti kako započeti sezonu trčanja.',
            'image' => 'http://super1.telegram.hr/native/utrci-u-top-formu-pocni-trcati-s-adidasom//images/facebookShare.jpg',
            'url' => 'http://super1.telegram.hr/native/utrci-u-top-formu-pocni-trcati-s-adidasom/'
        ],
        [
            'title' => 'Za tebe je adidas PureBoost model',
            'description' => 'Boost tehnologija donosi tisuće kapsula od proširenog termoplastičnog uretana koji sažima i oslobađa energiju pri svakom koraku. PureBoost tehnologija namijenja je trkačima na asfaltu, betonu, onima koji, kao Rocky Balboa, vole trening začiniti s nekoliko (stotina) stepenica jer PureBoost se odlično snalaze pri brzim pokretima i promjenama smjera. PureBoost se prilagođava stopalu prilikom svakog koraka, a rastezljivi mrežasti potplat pruža glatko i fleksibilno trčanje s izdržljivom gumom koja se proteže i savija u svim smjerovima.',
            'image' => 'http://super1.telegram.hr/native/utrci-u-top-formu-pocni-trcati-s-adidasom//images/quiz/result-1.jpg',
            'url' => 'http://super1.telegram.hr/native/utrci-u-top-formu-pocni-trcati-s-adidasom/?result=1'
        ],
        [
            'title' => 'Za tebe je klasičan adidas UltraBoost model',
            'description' => 'Klasičan adidas UltraBoost model ako si muško ili UltraBoost X model ako si dama. Taj je model namijenjen je ženama koje obožavaju trčati na duže, ali i kraće staze po kvartu. Najveći benefit ovog modela jest luk tenisice koji se prilagođava svim oblicima, veličinama i tipovima stopala. Njihov specifičan oblik i gornjište posebno je dizajniran za žene te pruža neograničenu udobnost i podršku stopalu. Klasičan UltraBoost model koristi Primeknit tehnologiju gornjišta - sitno pletenu rastezljivu tkaninu, kombiniranu s elastičnim trakama koje se savršeno prilagođavaju nozi, a vanjska stabilizacija pete dizajnirana je za slobodno kretanje pete.',
            'image' => 'http://super1.telegram.hr/native/utrci-u-top-formu-pocni-trcati-s-adidasom//images/quiz/result-2.jpg',
            'url' => 'http://super1.telegram.hr/native/utrci-u-top-formu-pocni-trcati-s-adidasom/?result=2'
        ],
        [
            'title' => 'Za tebe je adidas UltraBoost ST model',
            'description' => 'Prava zvijezda u svijetu tenisica za trčanje, model Ultra Boost ST modeli zbog većeg broja Boost kapsula u potplatu,  čak njih 3.000, pružaju maksimalnu stabilnost. Omogućavaju maksimalnu podršku i stabilnost pri trčanju i  amortizaciju od prvog do posljednjeg koraka. Primeknit gornjište savršeno prijanja uz nogu, a brojni se trkači širom svijeta slažu da su jednako dobre za rekreativno trčanje na kraćim stazama, kao i za trčanje maratona.',
            'image' => 'http://super1.telegram.hr/native/utrci-u-top-formu-pocni-trcati-s-adidasom//images/quiz/result-3.jpg',
            'url' => 'http://super1.telegram.hr/native/utrci-u-top-formu-pocni-trcati-s-adidasom/?result=3'
        ],
        [
            'title' => 'DOBRO PREGLEDAJTE TENISICE U DUĆANU PRIJE KUPNJE: Stručnjaci otkrili kako razlikovati dobre od loših, ključno je ovih pet detalja',
            'description' => '',
            'image' => 'http://super1.telegram.hr/native/utrci-u-top-formu-pocni-trcati-s-adidasom//images/fb_darko.jpg',
            'url' => 'http://super1.telegram.hr/native/utrci-u-top-formu-pocni-trcati-s-adidasom/?result=4'
        ],
    ]


?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
	<?php wp_head(); ?>
    <!-- Scripts -->
    <!-- Style & scripts stuff -->
    <script src="https://use.fontawesome.com/d88f9d6377.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Righteous&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/scripts/slick.css"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/scripts/slick.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/scripts/mapsAPI.js"></script>
</head>

<body>
    <!-- MAIN CONTENT -->
    <div class="hero">
    <div class="overlay"></div>
        <div class="container cf">

            <div class="hero-meta">
                <div class="left-action">
	                <a href="https://super1.telegram.hr/">
	                    <i class="fa fa-chevron-left"></i> <span class="hide">povratak na</span> <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/super1Logo.png" height="25" />
                    </a>
                </div>

                <div class="right-action">
                Podijeli
                    <a href="#" onclick="FB.ui({
        method: 'share',
                href: 'http://super1.telegram.hr/native/utrci-u-top-formu-pocni-trcati-s-adidasom//'
        }, function(response){});"><i class="fa fa-facebook socialIcons" aria-hidden="true"></i></a>
            <a href="https://twitter.com/intent/tweet?counturl=http%3A%2F%2Fsuper1.telegram.hr/native/utrci-u-top-formu-pocni-trcati-s-adidasom/%2F&amp;text=Kada%20je%20najbolje%20vrijeme%20da%20stare%20tenisice%20za%20tr%C4%8Danje%20zamijenite%3F%20Pripremite%20se%20i%20utr%C4%8Dite%20u%20top%20formu.&amp;url=http%3A%2F%2Fsuper1.telegram.hr/native/utrci-u-top-formu-pocni-trcati-s-adidasom/%2F&amp;via=Nethr" target="_blank"><i class="fa fa-twitter socialIcons" aria-hidden="true"></i></a>
            <a href="whatsapp://send?text=http%3A%2F%2Fsuper1.telegram.hr/native/utrci-u-top-formu-pocni-trcati-s-adidasom/%2F%20Planira%C5%A1%20po%C4%8Deti%20tr%C4%8Dati%3F%20Kupi%20nove%20tenisice%20i%20kreni."><i class="fa fa-whatsapp socialIcons" aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="hero-text">
                <h1 class="title-big">Utrči u top formu</h1>
                <p class="subtitle">
                    Najbolji savjeti kako započeti sezonu trčanja
                </p>
            </div>

        </div>
    </div>


    <div class="section-1 section-white section">
        <div class="container flex">
            <div class="text two-thirds">
                <h3 class="overtitle">
                    Fit
                </h3>
                <h2 class="title">
                    Ako razmišljate o trčanju pravi je trenutak da započnete trening s adidas Runnersima 
                </h2>
                <p>Pripreme za trail utrke, yoga, savjeti o prehrani i mentalni trening samo su neki od noviteta koji očekuju polaznike</p>
                <a target="_blank" href="https://super1.telegram.hr/fit/ako-razmisljate-o-trcanju-pravi-je-trenutak-da-zapocnete-trening-s-adidas-runnersima/" target="_blank" class="btn">Pripremi se</a>
            </div>
            <div class="one-third">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/article_new.jpg" alt="Trčanje" class="runningImg" width="230" height="230">
            </div>
        </div>
    </div>

    <div class="section-1 section-beige section">
        <div class="container flex">
            <div class="one-third">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/runners.jpg" alt="Trčanje" class="runningImg" width="230" height="230">
            </div>
            <div class="text two-thirds">
                <h3 class="overtitle">
                    Lako je pogriješiti
                </h3>
                <h2 class="title">
                    Kako pravilno početi trčati?
                </h2>
                <p>Vrijedni savjeti poznatog hrvatskog trenera uz koje ćete izbjeći ozljede i upalu mišića. Saznajte kako i gdje se možete besplatno upisati u školu trčanja i pronaći super ekipu...</p>
                <a target="_blank" href="https://net.hr/uncategorized/kako-pravilno-poceti-trcati-vrijedni-savjeti-poznatog-hrvatskog-trenera-uz-koje-cete-izbjeci-ozljede-i-upalu-misica/ " class="btn">Otkrij kako</a>
            </div>
        </div>
    </div>

    <div class="section-1 section-white section">
        <div class="container flex">
            <div class="text two-thirds">
                <h3 class="overtitle">
                    Kao da letite
                </h3>
                <h2 class="title">
                    Trik za opuštanje nakon stresnog dana na poslu
                </h2>
                <p>Pitali smo trenera Franu Bobana, kapetana adidas Runners zajednice, da nam otkrije zašto je trčanje tako dobro za psihofizičko zdravlje te da najbolje savjete kako postati (i biti) sretan trkač...</p>
                <a target="_blank" href="https://net.hr/uncategorized/trik-za-opustanje-nakon-stresnog-dana-na-poslu-hrvatski-strucnjak-tvrdi-da-nista-ne-djeluje-bolje-od-ovoga/" target="_blank" class="btn">Otkrij trik</a>
            </div>
            <div class="one-third">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/trik.jpg" alt="Trčanje" class="runningImg" width="230" height="230">
            </div>
        </div>
    </div>

    <div class="section-1 section-white section">
        <div class="container flex">
            <div class="text two-thirds">
                <h3 class="overtitle">
                    Opremite se
                </h3>
                <h2 class="title">
                    Vremenske (ne)prilike više nisu izgovor za ljenčarenje
                </h2>
                <p>Ovo je vaš novi saveznik u postizanju tijela iz snova...</p>
                <a target="_blank" href="https://net.hr/uncategorized/vremenske-neprilike-vise-nisu-izgovor-za-ljencarenje-ovo-je-vas-novi-saveznik-u-postizanju-tijela-iz-snova/" class="btn">Otkrij tajnu</a>
            </div>
            <div class="one-third">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/nevrijeme.jpg" alt="Trčanje" class="runningImg" width="230" height="230">
            </div>
        </div>
    </div>

    <div class="section-mint videoBreak">
        <div class="container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/938rN5k7cMk?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
    </div>

    <div class="section-1 section-beige section">
        <div class="container flex">
            <div class="full centerText">
                <h3 class="overtitle">
                    Interaktivni kviz
                </h3>
                <h2 class="title">
                    Otkrij koje su tenisice za trčanje <br>najbolje za tebe 
                </h2>
                <p class="whiteSpace">Osim dobre volje,  dobre tenisice su najvažnije za trčanje.  Riješi test i pronađi najbolji adidas model za svoj stil trčanja!</p>
                <div class="quiz-container">
                <!-- Slide 1 -->
                <div data-slide="1" class="slide slide-1 active">
                    <h3 class="question">
                        Po kojoj podlozi najradije trčiš?
                    </h3>
                    <div class="answers flexNoWrap">
                        <div class="answer answer-1" data-pure="1">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/11.jpg"/>
                            <h4 class="answer-text">
                                Gradskim ulicama –asfaltu
                            </h4>
                        </div>

                        <div class="answer answer-2" data-ultra="1">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/12.jpg"/>
                            <h4 class="answer-text">
                                Tartan – atletske staze
                            </h4>
                        </div>

                        <div class="answer answer-3" data-st="1">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/13.jpg"/>
                            <h4 class="answer-text">
                                Po neravnim šumskim stazam
                            </h4>
                        </div>

                        <div class="answer answer-4">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/shrug.jpg"/>
                            <h4 class="answer-text">
                                Neznam (preskoči pitanje)
                            </h4>
                        </div>

                    </div>
                </div>

                <div data-slide="2" class="slide slide-2">
                    <h3 class="question">
                        Kakav si tip trkača?
                    </h3>
                    <div class="answers flexNoWrap">
                        <div class="answer answer-1" data-pure="1">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/21.jpg"/>
                            <h4 class="answer-text">
                                Trčim  povremeno, kad se natjeram  
                            </h4>
                        </div>

                        <div class="answer answer-2" data-ultra="1">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/22.jpg"/>
                            <h4 class="answer-text">
                                Trčim redovito, ali mi treba motivacija  
                            </h4>
                        </div>

                        <div class="answer answer-3" data-st="1">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/23.jpg"/>
                            <h4 class="answer-text">
                                Trčim triput tjedno, to je moj stil života  
                            </h4>
                        </div>

                        <div class="answer answer-4">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/shrug.jpg"/>
                            <h4 class="answer-text">
                                Neznam (preskoči pitanje)
                            </h4>
                        </div>

                    </div>
                </div>

                <div data-slide="3" class="slide slide-3">
                    <h3 class="question">
                        Koliko tjedno pretrčiš?
                    </h3>
                    <div class="answers flexNoWrap">

                        <div class="answer answer-1" data-pure="1">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/31.jpg"/>
                            <h4 class="answer-text">
                                3 do najviše 5 kilometara 
                            </h4>
                        </div>

                        <div class="answer answer-2" data-ultra="1">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/32.jpg"/>
                            <h4 class="answer-text">
                                6 do 15 kilometara 
                            </h4>
                        </div>

                        <div class="answer answer-3" data-st="1">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/33.jpg"/>
                            <h4 class="answer-text">
                                 Više od 15 kilometara 
                            </h4>
                        </div>

                        <div class="answer answer-4">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/shrug.jpg"/>
                            <h4 class="answer-text">
                                Neznam (preskoči pitanje)
                            </h4>
                        </div>

                    </div>
                </div>

                <div data-slide="4" class="slide slide-4">
                    <h3 class="question">
                        Kojim tempom trčiš?
                    </h3>
                    <div class="answers flexNoWrap">

                        <div class="answer answer-1" data-pure="1">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/41.jpg"/>
                            <h4 class="answer-text">
                                Naizmjenično trčim i hodam 
                            </h4>
                        </div>

                        <div class="answer answer-2" data-ultra="1">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/42.jpg"/>
                            <h4 class="answer-text">
                                Trčim bez stanki
                            </h4>
                        </div>

                        <div class="answer answer-3" data-st="1">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/43.jpg"/>
                            <h4 class="answer-text">
                                Trčim bez problema koliko god treba 
                            </h4>
                        </div>

                        <div class="answer answer-4">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/shrug.jpg"/>
                            <h4 class="answer-text">
                                Neznam (preskoči pitanje)
                            </h4>
                        </div>

                    </div>
                </div>

                <div data-slide="5" class="slide slide-5">
                    <h3 class="question">
                        Jesi li sudjelovao/la u nekoj utrci?
                    </h3>
                    <div class="answers flexNoWrap">

                        <div class="answer answer-1" data-pure="1">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/51.jpg"/>
                            <h4 class="answer-text">
                                Ne, ali razmišljam o tome 
                            </h4>
                        </div>

                        <div class="answer answer-2" data-ultra="1">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/52.jpg"/>
                            <h4 class="answer-text">
                                Da, to su city run utrke  
                            </h4>
                        </div>

                        <div class="answer answer-3" data-st="1">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/53.jpg"/>
                            <h4 class="answer-text">
                                Da, redovito trčim razne utrke
                            </h4>
                        </div>

                        <div class="answer answer-4">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/shrug.jpg"/>
                            <h4 class="answer-text">
                                Neznam (preskoči pitanje)
                            </h4>
                        </div>

                    </div>
                </div>

                <div data-slide="6" class="slide slide-6">
                    <h3 class="question">
                        Mijenjaš li tenisice nakon što u njima pretrčiš cca. 500 km?
                    </h3>
                    <div class="answers flexNoWrap">

                        <div class="answer answer-1" data-pure="1">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/61.jpg"/>
                            <h4 class="answer-text">
                                Ne baš, trčim dok se ne raspadnu 
                            </h4>
                        </div>

                        <div class="answer answer-2" data-ultra="1">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/62.jpg"/>
                            <h4 class="answer-text">
                                Mijenjam kad se ukaže prilika 
                            </h4>
                        </div>

                        <div class="answer answer-3" data-st="1">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/63.jpg"/>
                            <h4 class="answer-text">
                                Mijenjam tenisice čim promijene formu
                            </h4>
                        </div>

                        <div class="answer answer-4">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/shrug.jpg"/>
                            <h4 class="answer-text">
                                Neznam (preskoči pitanje)
                            </h4>
                        </div>

                    </div>
                </div>

                <div data-slide="7" class="slide slide-7">
                    <h3 class="question">
                        Što ti je važno kod tenisica ?
                    </h3>
                    <div class="answers flexNoWrap">

                        <div class="answer answer-1" data-pure="1">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/71.jpg"/>
                            <h4 class="answer-text">
                                Da su multifunkcionalne
                            </h4>
                        </div>

                        <div class="answer answer-2" data-ultra="1">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/72.jpg"/>
                            <h4 class="answer-text">
                                Da su udobne, sigurne i prozračne  
                            </h4>
                        </div>

                        <div class="answer answer-3" data-st="1">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/73.jpg"/>
                            <h4 class="answer-text">
                                Da najbolje odgovaraju mojim trkačim navikama
                            </h4>
                        </div>

                        <div class="answer answer-4">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/quiz/shrug.jpg"/>
                            <h4 class="answer-text">
                                Neznam (preskoči pitanje)
                            </h4>
                        </div>

                    </div>
                </div>

                <div data-slide="8" class="slide slide-8 result">
                    <h3 class="question">
                        <span></span>
                    </h3>
                    <p class="description whiteSpace">
                        Bacon ipsum dolor amet doner meatball strip steak drumstick. Tail porchetta meatball andouille
                        chuck flank drumstick capicola picanha pork turkey brisket pork chop prosciutto corned beef.
                        Beef chuck bresaola pastrami ball tip. Cow tri-tip andouille shoulder shankle jerky sirloin beef
                        boudin sausage. Biltong ribeye meatloaf doner pork loin.
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
                    return false;
                });
                var descriptions = <?php echo json_encode($meta_data); ?>;
                var a = 0;
                var b = 0;
                var c = 0;
                var result = 1;
                $('.answer').click(function() {
                    var active = $('.slide.active').data('slide');
                    if ($(this).data('pure')) {
                        a++;
                    }
                    if ($(this).data('ultra')) {
                        b++;
                    }
                    if ($(this).data('st')) {
                        c++;
                    }
                    //advance
                    $('.slide.slide-'+active).removeClass('active');
                    $('.fa.fa-'+active).removeClass('fa-circle');
                    active++;
                    if (active!==8) {
                        $('.slide.slide-' + active).addClass('active');
                        $('.fa.fa-' + active).addClass('fa-circle');
                    }
                    else {
                        if (a >= b && a>=c) {
                            result = 1;
                        }
                        else if (b >= c){
                            result = 2;
                        }
                        else {
                            result = 3;
                        }
                        a = 0;
                        b = 0;
                        c = 0;
                        $('.result .question span').text(descriptions[result].title);
                        $('.result .description').text(descriptions[result].description);
                        $('.result .share').attr('href', descriptions[result].url);
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
                    }, function(response){});
                    return false;
                });
                $('.share.tw').click(function() {
                    var url = 'https://twitter.com/intent/tweet?via=Net.hr&url=http://super1.telegram.hr/native/utrci-u-top-formu-pocni-trcati-s-adidasom/&text=' + encodeURIComponent($(this).data('title'));

                    window.open(url, '_blank', 'width=600,height=600');

                    return false;
                });
            });
        </script>
            </div>
        </div>
    </div>

    <div class="section-1 section-white section">
        <div class="container flex">
            <div class="one-third">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/pravilno.jpg" alt="Trčanje" class="runningImg" width="230" height="230">
            </div>
            <div class="text two-thirds">
                <h3 class="overtitle">
                    Najmanje sedam
                </h3>
                <h2 class="title">
                    Od svih vrsta vježbi, ova ima najviše prednosti
                </h2>
                <p>Osim zdravog i fit tijela, primijetit ćete i druge promjene...</p>
                <a target="_blank" href="https://net.hr/uncategorized/od-svih-vrsta-vjezbi-ova-ima-najvise-prednosti-pored-zdravog-i-seksi-tijela-primijetit-cete-i-druge-promjene/" class="btn">Otkrij prednosti</a>
            </div>
        </div>
    </div>
    <div class="section-1 section-white section">
        <div class="container flex">
            <div class="text two-thirds">
                <h3 class="overtitle">
                    Razlozi
                </h3>
                <h2 class="title">
                    Zašto početi trčati
                </h2>
                <p>Trčanje jača mišiće, popravlja raspoloženje, pomaže smršavjeti...</p>
                <a target="_blank" href="http://net.hr/magazin/zdravlje/trcanje-jaca-misice-popravlja-raspolozenje-pomaze-smrsavjeti/" target="_blank" class="btn">Otkrij zašto</a>
            </div>
            <div class="one-third">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/runningImg.jpg" alt="Trčanje" class="runningImg" width="230" height="230">
            </div>
        </div>
    </div>

    <div class="section-2 section-beige section">
        <div class="container flex">
            <div class="one-third"></div>
            <div class="two-thirds">
                <h3 class="overtitle">
                    VELIKI VODIČ
                </h3>
                <h2 class="title">
                    20 pravila koja morate znati prije početka trčanja
                </h2>
                <div class="slick-rules">
                    <div>Odabir kvalitetnih tenisica  i opreme namijenjene baš za trčanje, pravi tempo i pravilno zagrijavanje osnovna su abeceda trčanja.</div>
                    <div>Najvažnije je pravilo izabrati tenisice baš za trčanje te voditi računa o podlozi, spolu, ali i načinu na koji hodate i trčite.</div>
                    <div>Ako svakodnevno trčite nekoliko kilometara, tenisice biste trebali zamijeniti nakon četiri mjeseca jer je u izgaženim tenisicama stopalo nestabilno i možete se ozlijediti.</div>
                    <div>Tenisice za trčanje moraju imati takozvane "antishock" potplate s zračnim jastucima koji sprječavaju nastanak mikrotrauma koje mogu uzrokovati neugodne bolove i probleme u gležnjevima, koljenima i lumbalnoj zoni leđa.</div>
                    <div>Za tenisice je najmanje važan izgled, a najvažniji oblik stopala. Ne vodite se  niti preporukama prijatelja jer nije svaki model za svakoga.</div>
                    <div>Najbolje bi bilo imati više tenisica, ovisno o terenu na kojem trčite. Oni koji imaju problema sa stopalom trebali bi napraviti individualni uložak i nositi ga pri kupnji novih tenisica kako bi im savršeno odgovarale.</div>
                    <div>Ako tek krećete loviti trkačku formu, upamtite da su dobra volja i upornost najvažniji. Krećite od manjih ruta pa dužinu rute povećavajte iz tjedna u tjedan.</div>
                    <div>Prvi treninzi bi trebali trajati najviše do 30 minuta. U njima treba biti zastupljeno gotovo podjednako hodanje i trčanje.</div>
                    <div>Kako biste izbjegli ozljede, pazite da pri svakom koraku prvo petama dotaknete tlo, a tek onda prstima. Pazite i na to da ne grčite prsni koš jer si na taj način onemogućavate pravilno disanje.</div>
                    <div>Ono na što morate paziti kako ne biste ugrozili zdravlje jest da nikada ne smijete prijeći svoj maksimalni ritam rada srca (koji možete izračunati na sljedeći način: od broja 220 oduzmite broj svojih godina).</div>
                    <div>Dok trčite dobro je piti izotonične napitke ili oligomineralnu vodu pomiješanu sa sokom od svježe iscijeđenog voća (omjer soka i vode je 1 prema 3), po mogućnosti svakih 15 minuta.</div>
                    <div>Istezanje je vrlo važno jer osim što sprječava nastanak ozljeda i boli u mišićima, povećava učinkovitost tjelovježbe.</div>
                    <div>Pravilnim zagrijavanjem potrebno je podići temperaturu tijela za 1-2 ˚C. Rotacija zglobova i aerobna aktivnost niskog intenziteta, statičko te dinamičko istezanje ono su što treba napraviti.</div>
                    <div>Hodajte od pet do deset minuta ili radite vježbe oblikovanja.Tijekom trčanja pokušavajte što više doskakati na puno stopalo jer vas takav stil trčanja štiti od ozljeda.</div>
                    <div>Dužina zagrijavanja ovisi o intenzitetu treninga za koji se priprema i vremenskim uvjetima. Što je intenzitet glavnog djela treninga veći to je zagrijavanje za njega duže.</div>
                    <div>Nakon trčanja nužno je istezanje. Prilikom istezanja  mišići se izduljuju svojom punom duljinom što rezultira boljom mišićnom kontrolom, fleksibilnošću i većim rasponom pokreta.</div>
                    <div>Ako nikad niste vježbali i uvjereni ste da ne možete istrčati jedan krug na atletskoj stazi, uz sustavan plan treninga škole trčanja sve je moguće.</div>
                    <div>Kada se počinje sa treningom glavni problem je dovoljno dugo zadržati motivaciju na potrebnoj razini i ne odustati. U društvu i uz stručnu podršku trenera u školi trčanja bit će mnogo lakše.</div>
                    <div>U školi trčanja kroz konkretni plan, nadzor i stalni razgovor s trenerom uštedjet ćete vrijeme, spriječiti lutanje i usmjeriti se na ono što stvarno želite ostvariti.</div>
                    <div>Pravu trkčaku revoluciju u Hrvatskoj pokrenula je adidas škola trčanja koja je pokrenuta 2011. godine.</div>
                    <div>Gotovo svaka škola  mogućuje ostvarenje pojedinačnih ciljeva – npr. da se istrči polumaraton ili da se istrči polumaraton u ciljanom vremenu.</div>
                </div>
                <script>
                    $(document).ready(function(){
                        $('.slick-rules').slick({
                            prevArrow: '<i class="fa fa-angle-left fa-3x bigArrow1" aria-hidden="true"></i>',
                            nextArrow: '<i class="fa fa-angle-right fa-3x bigArrow2" aria-hidden="true"></i>',
                            autoplay: true
                        });
                    });
                </script>
            </div>
        </div>
    </div>

    <div class="section-3 section-white section">
        <div class="container flex">
            <div class="text half">
                <h3 class="overtitle">
                    PITALI SMO
                </h3>
                <h2 class="title">
                    5 poznatih otkriva zašto ne mogu<br> bez trčanja
                </h2>

                <a target="_blank" href="http://net.hr/magazin/zdravlje/5-poznatih-otkriva-zasto-voli-trcanje/" target="_blank" class="btn">Otkrij zašto</a>
            </div>
        </div>
    </div>

    <div class="section-4 section-mint section">
        <div class="container flex">
            <div class="two-thirds">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/infografika.png"/>
            </div>
            <div class="text one-third">
                <h3 class="overtitle">
                    Infografika
                </h3>
                <h2 class="title">
                    Ovo imaju dobre tenisice
                </h2>
                <p>
                    Savršen model treba se prilagoditi stopalu i osigurati stabilnost te maksimalnu lakoću trčanja.
                </p>

                <div class="addon">
                    <h4>Jeste li znali?</h4>
                    <p>
                    Adidas UltraBOOST X model tenisica za trčanje najnoviji je model u kultnoj UltraBOOST kolekciji dizajniran isključivo za žene s ciljem da omogućuje ženama ultimativno trkačko iskustvo.</p>
                    <p>
                    Za postizanje još boljih rezultata adidas je u potplat UltraBOOST X ukomponirao svoju inovativnu BOOST tehnologiju koja pruža bolji povrat energije dok će zahvaljujući visokokvalitetnoj Continental gumenoj podlozi trkačice svoje granice moći pomicati na raznim terenima bez straha od loših vremenskih uvjeta.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-5 section-beige section">
        <div class="container flex">
            <div class="text two-thirds">
                <h3 class="overtitle">
                    SAZNAJTE KAKO
                </h3>
                <h2 class="title">
                    Što trebate znati kada kupujete nove tenisice
                </h2>
                <p>
                    Trčanje u starim i iznošenim tenisicama jedan je od najčešćih uzroka ozljeda pri trčanju. Stoga čim vidite da su promijenile oblik i formu, vrijeme je za nabavu novih.
                </p>
                <div class="article-block flex">
                    <div class="article half">
                        <a target="_blank" href="http://net.hr/magazin/zdravlje/sto-je-najvaznije-pri-kupnji-novih-tenisica/" target="_blank">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/article1.jpg" alt="Pakiranje tenisica" class="articleImg">
                            <h5>Što je najvažnije pri kupnji novih tenisica?</h5>
                            <div class="more"><i class="fa fa-plus-circle"></i> Vidi više</div>
                        </a>
                    </div>
                    <div class="article half">
                        <a target="_blank" href="http://net.hr/magazin/zdravlje/u-jednom-paru-tenisica-najvise-500-km/" target="_blank">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/article2.jpg" alt="Sretni maratonci" class="articleImg">
                            <h5>U jednom paru tenisica najviše 500 km</h5>
                            <div class="more"><i class="fa fa-plus-circle"></i> Vidi više</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="one-third hide">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/footprint.png"/>
            </div>
        </div>
    </div>

    <div class="section-6 section-white section">
        <div class="container flex">
            <div class="text">
                <h2 class="title">
                    Gdje i kako početi trčati
                </h2>
                <p>
                Ako ste početnik, nađite lokaciju koja vam najbolje odgovara gdje ćete se najbolje osjećati. Hrvatska je prepuna odličnih lokacija. Evo nekih najpopularnijih:
                </p>
                <ul class="markers">
                    <li id="jarun" class="mapMarkeri"><i class="fa fa-map-marker"></i> Zagreb - Jarun</li>
                    <li id="bundek" class="mapMarkeri"><i class="fa fa-map-marker"></i> Zagreb - Bundek</li>
                    <li id="sljeme" class="mapMarkeri"><i class="fa fa-map-marker"></i> Zagreb - Sljeme</li>
                    <li id="maksimir" class="mapMarkeri"><i class="fa fa-map-marker"></i> Zagreb - Maksimir</li>
                    <li id="nasip" class="mapMarkeri"><i class="fa fa-map-marker"></i> Zagreb - Nasip</li>
                    <li id="split" class="mapMarkeri"><i class="fa fa-map-marker"></i> Split - Riva</li>
                    <li id="varazdin" class="mapMarkeri"><i class="fa fa-map-marker"></i> Varaždin - Jezero</li>
                    <li id="zadar" class="mapMarkeri"><i class="fa fa-map-marker"></i> Zadar - Riva</li>
                    <li id="dubrovnik" class="mapMarkeri"><i class="fa fa-map-marker"></i> Dubrovnik - Riva</li>
                </ul>

            </div>
        </div>

        <div id="mapEmbed"></div>

    </div>

    <div class="section-7 section-mint section footer">
        <div class="container flex">
            <div class="half logos flex">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/telegramStudio.png" alt="Telegram Studio" class="tg-studio" />
                <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/adidasLogo.png" alt="Adidas Logo" class="adidas" />
            </div>
            <div class="half boostX flex">
                <div class="two-thirds">
                    <h3 class="overtitle">
                    POWERED BY
                    </h3>
                    <h2 class="title">
                        adidas Ultra BOOST X
                    </h2>
                    <p>
                        Hrvati obožavaju trčanje. Tim zdravim, jednostavnim i praktičnim sportom "zaraženi" su i stari i mladi, i žene i muškarci, podjednako. Ako još niste, i vi ove sezone utrčite u formu uz mnoštvo naših korisnih savjeta.
                    </p>
                    <div class="more">
                        <a href="http://adidastrcanje.hr/" target="_blank">
                            <i class="fa fa-plus-circle"></i> Vidi više
                        </a>
                    </div>
                </div>
                <div class="one-third">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/adidas/top_forma/images/footerShoe.png" alt="adidas Ultra BOOST X" class="footerShoe" width="100" height="200">
                </div>
            </div>
        </div>
    </div>


     <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCb31O36vdrMv5f38B52HGtp-XlsLNGgKo&callback=initMap">
    </script>
    <ins class='dcmads' style='display:none;width:1px;height:1px'
         data-dcm-placement='N6311.278269.NET.HR/B11013976.146714219'
         data-dcm-rendering-mode='script'
         data-dcm-https-only
         data-dcm-resettable-device-id=''
         data-dcm-app-id=''>
        <script src='https://www.googletagservices.com/dcm/dcmads.js'></script>
    </ins>

</body>
</html>