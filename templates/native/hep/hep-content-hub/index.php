<!DOCTYPE html>
<html lang="hr">

<?php

/* Potential native paths */
//$native_path = get_stylesheet_directory_uri() . '/templates/native/hep/hep-content-hub/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/hep/hep-content-hub/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/hep/hep-content-hub/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/hep/hep-content-hub/';
//$native_path = 'http://localhost/hep-content-hub/';
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
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@400;700&display=swap" rel="stylesheet">
    <!-- Animate on scroll -->
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/aos/aos.css?v=1.00" type="text/css" />
    <script src="<?php echo $native_path ?>assets/aos/aos.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/operon.css?v=1.00" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/style.css?v=1.00" type="text/css" />
    <!-- Slick slider -->
    <script src="<?php echo $native_path ?>assets/slick/slick.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/slick/slick.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/slick/slick-theme.css" type="text/css" />
    <!-- Functions -->
    <script src="<?php echo $native_path ?>assets/functions.js"></script>
</head>

<body>
    <div class="main-container flex relative">
        <!-- Mobile Bottom Sticky Nav -->
        <nav class="full bottom-nav flex mobile-only relative">
            <a href="#kviz" class="fifth center relative">
                <?php //echo file_get_contents($native_path.'assets/placeholders/people-group-solid.svg'); 
                ?>
                <div class="full center-text capatalise">Kviz</div>
            </a>
            <a href="#kucanstvo" class="fifth center relative">
                <?php //echo file_get_contents($native_path.'assets/placeholders/people-group-solid.svg'); 
                ?>
                <div class="full center-text capatalise">Kuča</div>
            </a>
            <a href="#priroda" class="fifth center relative">
                <?php //echo file_get_contents($native_path.'assets/placeholders/people-group-solid.svg'); 
                ?>
                <div class="full center-text capatalise">Priroda</div>
            </a>
            <a href="#energetika" class="fifth center relative">
                <?php //echo file_get_contents($native_path.'assets/placeholders/people-group-solid.svg'); 
                ?>
                <div class="full center-text capatalise">Energija</div>
            </a>
            <a href="#drustvo" class="fifth center relative no-border">
                <?php //echo file_get_contents($native_path.'assets/placeholders/people-group-solid.svg'); 
                ?>
                <div class="full center-text capatalise">Društvo</div>
            </a>
        </nav>
        <!-- Top Sticky Nav -->
        <nav class="full top-nav flex relative">
            <div class="full column-horizontal-pad center relative">
                <div class="third flex relative text-logo desktop-only">
                    <img src="<?php echo $native_path ?>assets/logos/tg_studio_vertical_black.svg" alt="TG Studio logo">
                    <img id="hep-logo" src="<?php echo $native_path ?>assets/logos/hep_logo.svg" alt="HEP logo">
                </div>
                <div class="third flex flex-responsive relative bold">
                    <h3 class="full center-text">ZAJEDNO ZA OKOLIŠ</h3>
                </div>
                <div class="third flex justify-end relative desktop-only bold">
                    <a href="#kviz" class="center relative animate">
                        <div class="full center-text">KVIZ -</div>
                    </a>
                    <a href="#kucanstvo" class="center relative animate">
                        <div class="full center-text">KUĆANSTVO -</div>
                    </a>
                    <a href="#priroda" class="center relative animate">
                        <div class="full center-text">PRIRODA -</div>
                    </a>
                    <a href="#energetika" class="center relative animate">
                        <div class="full center-text">ENERGETIKA -</div>
                    </a>
                    <a href="#drustvo" class="center relative animate">
                        <div class="full center-text">DRUŠTVO</div>
                    </a>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <header class="full flex relative">
            <a class="full flex relative stretch" href="#najcitanjiclanak">
                <div class="half center flex-responsive column-full-pad desktop-order-1">
                    <div class="full flex relative center-text">
                        <h1 class="full bold capatalise">Zajedno za okoliš</h1>
                        <p class="full sub-title">Tvoja glavna destinacija za najnovije vijesti o energetici i okolišu - saznaj kako uštediti energiju u domu, informiraj se o regionalnom tržištu, istraži s nama kakav utjecaj naša potrošnja ima na prirodu i što sve možemo napraviti kao društvo.</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full center stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Krenimo</div>
                        </div>
                    </div>
                </div>
                <div class="half center flex-responsive hero-video desktop-only desktop-order-2">
                    <video autoplay loop muted playsinline>
                        <source src="<?php echo $native_path ?>assets/tg_videobg_hep_header.mp4?v=1.00" type="video/mp4">
                    </video>
                </div>
            </a>
            <a class="full flex relative article stretch" href="https://www.telegram.hr/partneri/donosimo-sest-koraka-do-nizih-racuna-za-struju-ove-jeseni-primijenite-ih-vec-danas/" target="_blank" id="najcitanjiclanak">
                <div class="half center flex-responsive column-full-pad desktop-order-2 mobile-order-2">
                    <div class="full flex relative">
                        <h3 class="full bold capatalise">Najčitaniji članak</h3>
                        <h2 class="full bold capatalise">Donosimo šest koraka do nižih računa za struju. Primijenite ih već danas</h2>
                        <p class="full">Računi za struju strah su mnogih građana. Istražili smo kako ih smanjiti na jednostavan način</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
                <div class="half center flex-responsive desktop-order-1 mobile-order-1">
                    <img class="full" src="https://images.telegram.hr/9SmbgFsoz3M71-_8tNb40Fi75GQspGUnMk7Q6QhVmhI/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDkvcHhsLTIzMDYxMy02MzI2MjMxLmpwZw.jpg" aria-hidden="true">
                    <p class = "old-news">SADRŽAJ STARIJI OD 2 MJESECA</p>
                </div>
            </a>
        </header>
        <!-- NEW ARTICLES -->
        <section class="container full flex relative column-full-pad column-top-margin">
            <h2 class="full bold capatalise">Novi članci</h2>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/zivot/svjetska-meteoroloska-organizacija-upozorava-pred-nama-je-pet-najtoplijih-ljeta-u-povijesti-i-moramo-se-pripremiti/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/_2_8HPyaSdODIWaQYaGNZX1sLeFIsx4gApSUVq5NAXY/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDUvc3VuY2FuYS1lbGVrdHJhbmEta29zb3JlLWp1Zy5qcGc.jpg" aria-hidden="true">
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Priroda</h4>
                        <h3 class="full">Svjetska meteorološka organizacija upozorava: pred nama je pet najtoplijih ljeta u povijesti i moramo se pripremiti</h3>
                        <p class="full">Porast temperatura imat će ozbiljne posljedice na ljudsko zdravlje i okoliš</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/biznis-tech/odlican-nacin-ustede-ovi-genijalci-s-fer-a-osmislili-su-uredaj-koji-prati-potrosnju-struje-u-svakoj-sekundi/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://www.telegram.hr/wp-content/uploads/2023/04/sasa5149xw.jpg" aria-hidden="true">
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Društvo</h4>
                        <h3 class="full">Odličan način uštede: ovi genijalci s FER-a osmislili su uređaj koji prati potrošnju struje u svakoj sekundi</h3>
                        <p class="full">Zove se Enpulse i lako se instalira u razvodnu kutiju</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/zivot/hoce-li-zbog-suse-ponovno-skociti-cijena-struje-evo-o-cemu-sve-ovisi-formiranje-cijene/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/K28ssx3VMHURdFodhF0DpHeiYY5HtQjkMjPo5g4kDP0/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDQvcHhsLTE1MDEyMy05Nzc5MjM2MC5qcGc.jpg" aria-hidden="true">
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Kućanstvo</h4>
                        <h3 class="full">Tko trguje električnom energijom? S burze nam objasnili kako se zapravo formira cijena struje</h3>
                        <p class="full">Veliki utjecaj na samo tržište imaju i regulatorne promjene</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
        </section>
        <!-- KVIZ -->
        <section class="full center wrap relative black-bg column-top-margin" id="kviz">
        <div class="half center flex-responsive column-full-pad">
                <div class="full flex relative kviz-text center-text text-container">
                    <h2 class="full bold capatalise underline column-bottom-pad">Zajedno za okoliš</h2>
                    <h1 class="full capatalise">Riješi kviz i doznaj koliko zapravo znaš o energiji i okolišu</h1>
                </div>
            </div>
            <div class="half center flex-responsive column-full-pad">
                <div class="quiz-container relative">
                    <!-- Slide 1 -->
                    <div data-slide="1" class="slide flex slide-1 active">
                        <h3 class="question">
                            Na našim cestama bilo je 9423 električnih i hibridnih vozila 2020. godine. Prošle godine taj se broj:
                        </h3>
                        <div class="answers flex">
                            <div class="answer animate" data-track="1">
                                <h4 class="answer-text">
                                    udvostručio
                                </h4>
                            </div>
                            <div class="answer animate">
                                <h4 class="answer-text">
                                    prepolovio
                                </h4>
                            </div>
                            <div class="answer animate">
                                <h4 class="answer-text">
                                    ostao je isti
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div data-slide="2" class="slide flex slide-2">
                        <h3 class="question">
                            '4 na 1000' međunarodna je poljoprivredna inicijativa za povećanje zaliha ugljika u tlu kako bi se smanjila koncentracija ugljikovog dioksida u atmosferi. Godišnji je cilj rasta zaliha ugljika u tlu:
                        </h3>
                        <div class="answers flex">
                            <div class="answer animate">
                                <h4 class="answer-text">
                                    0,3 posto
                                </h4>
                            </div>
                            <div class="answer animate" data-track="1">
                                <h4 class="answer-text">
                                    0,4 posto
                                </h4>
                            </div>
                            <div class="answer animate">
                                <h4 class="answer-text">
                                    0,5 posto
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div data-slide="3" class="slide flex slide-3">
                        <h3 class="question">
                            HEP EE solar plus program hrvatskim tvrtkama nudi, zajedno s mjerama energetske učinkovitosti, i izgradnju
                        </h3>
                        <div class="answers flex">
                            <div class="answer animate" data-track="1">
                                <h4 class="answer-text">
                                    integriranih sunčanih elektrana prema ESCO modelu
                                </h4>
                            </div>
                            <div class="answer animate">
                                <h4 class="answer-text">
                                    neintegriranih sunčanih elektrana prema ESCO modelu
                                </h4>
                            </div>
                            <div class="answer animate">
                                <h4 class="answer-text">
                                    integriranih i neintegriranih sunčanih elektrana
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div data-slide="4" class="slide flex slide-4">
                        <h3 class="question">
                        Prema trenutnim planovi Europske unije o elektrifikaciji prometa, predviđa se smanjenje štetnih emisija u prometu od 35 posto:
                        </h3>
                        <div class="answers flex">
                            <div class="answer animate" data-track="1">
                                <h4 class="answer-text">
                                do 2050. godine
                                </h4>
                            </div>
                            <div class="answer animate">
                                <h4 class="answer-text">
                                do 2075. godine
                                </h4>
                            </div>
                            <div class="answer animate">
                                <h4 class="answer-text">
                                do 2100. godine
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div data-slide="5" class="slide flex slide-5">
                        <h3 class="question">
                        Najveća suša u Europi zadnjeg desetljeća bila je
                        </h3>
                        <div class="answers flex">
                            <div class="answer animate">
                                <h4 class="answer-text">
                                2019. godine
                                </h4>
                            </div>
                            <div class="answer animate">
                                <h4 class="answer-text">
                                2017. godine
                                </h4>
                            </div>
                            <div class="answer animate" data-track="1">
                                <h4 class="answer-text">
                                prošle godine
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div data-slide="6" class="slide flex slide-6">
                        <h3 class="question">
                            HEP-ove hidroelektrane osim proizvodnje električne energije imaju ulogu:
                        </h3>
                        <div class="answers flex">
                            <div class="answer animate" data-track="1">
                                <h4 class="answer-text">
                                rekreativnih aktivnosti za okolno stanovništvo 
                                </h4>
                            </div>
                            <div class="answer animate" data-track="1">
                                <h4 class="answer-text">
                                zaštite od poplava, kontrole kakvoće vode, vodoopskrbe stanovništva, navodnjavanja i odvodnje s poljoprivrednog zemljišta
                                </h4>
                            </div>
                            <div class="answer animate">
                                <h4 class="answer-text">
                                životinjskog pojilišta za obližnja lovišta
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div data-slide="7" class="slide flex slide-7">
                        <h3 class="question">
                        U kućanstvu najviše električne energije od navedenih uređaja troši:
                        </h3>
                        <div class="answers flex">
                            <div class="answer animate">
                                <h4 class="answer-text">
                                hladnjak sa zamrzivačem
                                </h4>
                            </div>
                            <div class="answer animate">
                                <h4 class="answer-text">
                                perilica posuđa
                                </h4>
                            </div>
                            <div class="answer animate" data-track="1">
                                <h4 class="answer-text">
                                sušilica rublja 
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div data-slide="8" class="slide flex slide-8">
                        <h3 class="question">
                        U Hrvatskoj je prema Crvenom popisu ptica Hrvatske ugroženo gotovo:
                        </h3>
                        <div class="answers flex">
                            <div class="answer animate">
                                <h4 class="answer-text">
                                100 vrsta
                                </h4>
                            </div>
                            <div class="answer animate" data-track="1">
                                <h4 class="answer-text">
                                300 vrsta 
                                </h4>
                            </div>
                            <div class="answer animate">
                                <h4 class="answer-text">
                                1000 vrsta
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div data-slide="9" class="slide flex slide-9">
                        <h3 class="question">
                        U Hrvatskoj imaju gnijezda na više od tisuću stupova električne mreže, a HEP već dva desetljeća brine o tome da ih se ne uznemirava, da ih se zaštiti od strujnog udara, da im se popravljaju gnijezda. Radi se o:
                        </h3>
                        <div class="answers flex">
                            <div class="answer animate" data-track="1">
                                <h4 class="answer-text">
                                rodama 
                                </h4>
                            </div>
                            <div class="answer animate">
                                <h4 class="answer-text">
                                lastavicama 
                                </h4>
                            </div>
                            <div class="answer animate">
                                <h4 class="answer-text">
                                sokolima
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div data-slide="10" class="slide flex slide-10 result">
                        <h3 class="question">
                            <span>Rezultat</span>
                        </h3>
                        <p class="description">
                            Ovaj tekst trebao bi zamijeniti tvoj rezultat. Ako vidiš ovu poruku, naša stranica ne radi kako treba. :(
                        </p>
                        <div class="answers column-top-pad flex">
                            <div class="animate animate answer-yes restart">
                                <h4 class="answer-text">
                                    Restart
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar flex">
                        <div class="animate progress-indicator"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- KUCANSTVO -->
        <section class="container full flex relative column-full-pad column-top-margin" id="kucanstvo">
            <h2 class="full bold capatalise">Kućanstvo</h2>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/zivot/hoce-li-zbog-suse-ponovno-skociti-cijena-struje-evo-o-cemu-sve-ovisi-formiranje-cijene/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/K28ssx3VMHURdFodhF0DpHeiYY5HtQjkMjPo5g4kDP0/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDQvcHhsLTE1MDEyMy05Nzc5MjM2MC5qcGc.jpg" aria-hidden="true">
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Kućanstvo</h4>
                        <h3 class="full">Tko trguje električnom energijom? S burze nam objasnili kako se zapravo formira cijena struje</h3>
                        <p class="full">Veliki utjecaj na samo tržište imaju i regulatorne promjene</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/partneri/energetska-strucnjakinja-otkriva-kako-ustedjeti-i-do-90-posto-na-grijanju-evo-sto-mozete-uciniti-vec-danas/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/UoBtgresJCR8i01QuKRfUVakp-ohoFqXrsWRhIVUZHE/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMTAvdGctbmFzbG92bmEtMjAyMi05LTEwLTUuanBn.jpg" aria-hidden="true">
                    <p class = "old-news">SADRŽAJ STARIJI OD 2 MJESECA</p>
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Kućanstvo</h4>
                        <h3 class="full">Energetska stručnjakinja otkriva kako uštedjeti i do 90 posto na grijanju. Evo što možete učiniti već danas</h3>
                        <p class="full">Postoje kratkoročne mjere s kojima možemo krenuti već danas, a dugoročne zahtijevaju ulaganje koje se vrlo brzo isplati</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/partneri/energetski-strucnjak-otkriva-koji-uredaji-najvise-gutaju-struju-provjerite-imate-li-ih-u-domu/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/G84kpuGVPGqPxbS4vjA3DBfjgdTO-ehZ4zb2BHn7nRQ/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDkvc2FzYTM4MzR4eS0xLmpwZw.jpg" aria-hidden="true">
                    <p class = "old-news">SADRŽAJ STARIJI OD 2 MJESECA</p>
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Kućanstvo</h4>
                        <h3 class="full">Energetski stručnjak otkriva koji uređaji najviše gutaju struju. Provjerite imate li ih u domu</h3>
                        <p class="full">Nakon uvođenja novih oznaka dogodilo se to da na tržištu nema televizora energetskog razreda A, kaže Bišćan</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/partneri/donosimo-sest-koraka-do-nizih-racuna-za-struju-ove-jeseni-primijenite-ih-vec-danas/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/9SmbgFsoz3M71-_8tNb40Fi75GQspGUnMk7Q6QhVmhI/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDkvcHhsLTIzMDYxMy02MzI2MjMxLmpwZw.jpg" aria-hidden="true">
                    <p class = "old-news">SADRŽAJ STARIJI OD 2 MJESECA</p>
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Kućanstvo</h4>
                        <h3 class="full">Donosimo šest koraka do nižih računa za struju ove jeseni. Primijenite ih već danas</h3>
                        <p class="full">Računi za struju strah su mnogih građana. Istražili smo kako ih smanjiti na jednostavan način</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/partneri/praktican-vodic-7-ekonomicnih-savjeta-za-odrzavanje-topline-doma-mozete-ustedjeti-oko-20-posto-energije/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/qtgYfs7RoWxP-Eo5V6LgtyFQD_-Diemc8AuBc-Xs7mY/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDkvcHhsLTA1MTExOC0yMjU4MjM1Ny5qcGc.jpg" aria-hidden="true">
                    <p class = "old-news">SADRŽAJ STARIJI OD 2 MJESECA</p>
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Kućanstvo</h4>
                        <h3 class="full">Praktičan vodič: 7 ekonomičnih savjeta za održavanje topline doma. Možete uštedjeti oko 20 posto energije</h3>
                        <p class="full">Većina njih zahtijeva malo ulaganje, a itekako ćete razliku osjetiti na računima</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/partneri/struja-je-odnedavno-skuplja-10-posto-energetski-strucnjak-samo-gasenjem-tv-a-nocu-stedi-se-78-kuna-godisnje/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/25RKADfsYUKMOEbFHHUTVMaa5XdpX5Q39r1hwt-A19M/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDQvdGctbmFzbG92bmEtMjAyMi0wNC0xMS0wNS1hbHQ0LTEuanBn.jpg" aria-hidden="true">
                    <p class = "old-news">SADRŽAJ STARIJI OD 2 MJESECA</p>
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Kućanstvo</h4>
                        <h3 class="full">Struja je odnedavno skuplja 10 posto. Energetski stručnjak: 'Samo gašenjem TV-a noću štedi se 78 kuna godišnje'</h3>
                        <p class="full">Marko Bišćan sa Instituta Hrvoje Požar kaže da uređaje krivo biramo, ali ih i krivo koristimo. No, postoji aplikacija koja će nam pomoći smanjiti troškove</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
        </section>
        <!-- PRIRODA -->
        <section class="container full flex relative column-full-pad" id="priroda">
            <h2 class="full bold capatalise">Priroda</h2>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/zivot/populacija-bjeloglavih-supova-ozbiljno-je-ugrozena-no-ovaj-bi-projekt-u-hrvatskoj-to-mogao-promijeniti/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/DVEnZ8o7iodl02G17wS_enp1gVk_u4vHsoO56A00ksE/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDcvMzA2MjM0NzA0MTMtZGExZDQzMzk0Zi1vLmpwZw.webp" aria-hidden="true">
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Priroda</h4>
                        <h3 class="full">Populacija bjeloglavih supova ozbiljno je ugrožena, no ovaj bi projekt u Hrvatskoj to mogao promijeniti </h3>
                        <p class="full">Na domaćem terenu trenutno obitava 129 parova</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/zivot/svjetska-meteoroloska-organizacija-upozorava-pred-nama-je-pet-najtoplijih-ljeta-u-povijesti-i-moramo-se-pripremiti/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/_2_8HPyaSdODIWaQYaGNZX1sLeFIsx4gApSUVq5NAXY/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDUvc3VuY2FuYS1lbGVrdHJhbmEta29zb3JlLWp1Zy5qcGc.jpg" aria-hidden="true">
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Priroda</h4>
                        <h3 class="full">Svjetska meteorološka organizacija upozorava: pred nama je pet najtoplijih ljeta u povijesti i moramo se pripremiti</h3>
                        <p class="full">Porast temperatura imat će ozbiljne posljedice na ljudsko zdravlje i okoliš</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/zivot/stepski-sokolovi-imaju-tek-pet-gnijezda-u-hrvatskoj-nova-akcija-trebala-bi-sprijeciti-njihovo-izumiranje/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/AscnPh_EMeTfngtW-8gcyOYM6vxmQbkiiIRxMNR8kzY/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDIvZHNjMDU1NTcuanBn.jpg" aria-hidden="true">
                    <p class = "old-news">SADRŽAJ STARIJI OD 2 MJESECA</p>
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Priroda</h4>
                        <h3 class="full">Stepski sokolovi imaju tek pet gnijezda u Hrvatskoj. Nova akcija trebala bi spriječiti njihovo izumiranje</h3>
                        <p class="full">HEP ODS je ove godine postavio tri kućice za ovu zaštićenu vrstu na stupove svojeg dalekovoda</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/zivot/zelene-tehnologije-u-poljoprivredi-bi-drasticno-smanjile-upotrebu-pesticida-profesor-s-agronomskog-objasnjava-kako/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/kdR6VxG5LeFDAV8O9NnqeEA6MLvSbDVIBImamGBBGBY/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDEvdGctbmFzbG92bmEtMjAyMy0wMS0zMC0xLmpwZw.jpg" aria-hidden="true">
                    <p class = "old-news">SADRŽAJ STARIJI OD 2 MJESECA</p>
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Priroda</h4>
                        <h3 class="full">Zelene tehnologije u poljoprivredi bi drastično smanjile upotrebu pesticida. Profesor s Agronomskog objašnjava kako</h3>
                        <p class="full">Europska unija također brine o zaštiti tla kroz Zeleni plan</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/zivot/svaka-cetvrta-osoba-u-eu-nema-dovoljno-vode-a-proslog-je-ljeta-bila-najveca-susa-desetljeca-istrazili-smo-zasto/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/5m1uo1uAyRspFvTTJugwRIuYFoQjQ_3C_t5aZlxCDjg/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDEvcHhsLTEwMDgxNy0xNzYwNjQ0Ni5qcGc.jpg" aria-hidden="true">
                    <p class = "old-news">SADRŽAJ STARIJI OD 2 MJESECA</p>
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Priroda</h4>
                        <h3 class="full">Svaka četvrta osoba u EU nema dovoljno vode, a prošlog je ljeta bila najveća suša desetljeća. Istražili smo zašto</h3>
                        <p class="full">Najviše problema uzrokuju urbanizacija, porast stanovništva, klimatske promjene i gospodarski razvoj</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/zivot/gotovo-300-vrsta-ptica-u-hrvatskoj-je-pred-izumiranjem-razgovarali-smo-sa-zoologinjom-o-tome-sto-bi-se-dogodilo-kad-bi-nestale/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/nlitoTC1eHASB6LzasHXN-SWtdLto6h4Um-aiGreKV8/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMTIvc2h1dHRlcnN0b2NrLTIxMzUxMDA3NTEuanBn.jpg" aria-hidden="true">
                    <p class = "old-news">SADRŽAJ STARIJI OD 2 MJESECA</p>
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Priroda</h4>
                        <h3 class="full">Gotovo 300 vrsta ptica u Hrvatskoj je pred izumiranjem. Razgovarali smo sa zoologinjom o tome što bi se dogodilo kad bi nestale</h3>
                        <p class="full">Zabrinjavajući su podaci da samo šest posto vrsta ptica raste na globalnoj razini</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
        </section>
        <!-- Energetika -->
        <section class="container full flex relative column-full-pad" id="energetika">
            <h2 class="full bold capatalise">Energetika</h2>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/partneri/izracunali-smo-godisnje-cijene-grijanja-s-razlicitim-energentima-strucnjaci-otkrivaju-sto-provjeriti-u-svome-domu/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/WbljGc-cShr5zgggF4Q-0Dn9pK8T76UqyZ_Avry-vV4/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMTEvdGctbmFzbG92bmEtMjAyMi0xMS00LTEuanBn.jpg" aria-hidden="true">
                    <p class = "old-news">SADRŽAJ STARIJI OD 2 MJESECA</p>
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Energetika</h4>
                        <h3 class="full">Izračunali smo godišnje cijene grijanja s različitim energentima. Stručnjaci otkrivaju što provjeriti u svome domu</h3>
                        <p class="full">Iz Energetskog instituta Hrvoje Požar razgovarali smo s Ružicom Budim i Markom Bišćanom</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/partneri/dogodine-s-radom-pocinje-900-milijuna-kuna-vrijedan-blok-istovremeno-ce-proizvoditi-elektricnu-i-toplinsku-energiju/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/tGeKNm2T6aEpTI05hrulGG3eUffrmzLAZ7T15KtBev8/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDkvc2xpa2EtMS5qcGc.jpg" aria-hidden="true">
                    <p class = "old-news">SADRŽAJ STARIJI OD 2 MJESECA</p>
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Energetika</h4>
                        <h3 class="full">Dogodine s radom počinje 900 milijuna kuna vrijedan blok. Istovremeno će proizvoditi električnu i toplinsku energiju</h3>
                        <p class="full">Ukupna vrijednost novih projekata u polju proizvodnje i opskrbe električnom i toplinskom energijom iznosi oko 1,7 milijardi kuna</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/partneri/ovi-industrijski-pogoni-sada-su-top-turisticke-destinacije-u-hrvatskoj-je-jedan-uvrsten-u-svjetski-hidro-hall-of-fame/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/oC6do7FvAYWVGPLIFofQunaqLTS2dw0qiRBKetSaeEo/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDYvaGUtamFydWdhLTMuanBn.jpg" aria-hidden="true">
                    <p class = "old-news">SADRŽAJ STARIJI OD 2 MJESECA</p>
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Energetika</h4>
                        <h3 class="full">Ovi industrijski pogoni sada su top turističke destinacije. U Hrvatskoj je jedan uvršten u svjetski hidro Hall of Fame</h3>
                        <p class="full">Hidroelektrana Jaruga u nacionalnom parku Krka samo je tri dana mlađa od hidroelektrane na slavnim slapovima Niagare</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/partneri/energetski-strucnjak-o-krizi-s-plinom-hrvatska-moze-biti-u-samom-vrhu-eu-po-udjelu-energije-iz-obnovljivih-izvora/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/E-vNIci7ffl4dpbY5BdSGMeI7jtGgw05EZ3VymsH1-s/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDQva3JhamFjaWMtbmFzbG92bmEtaGVwLmpwZw.jpg" aria-hidden="true">
                    <p class = "old-news">SADRŽAJ STARIJI OD 2 MJESECA</p>
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Energetika</h4>
                        <h3 class="full">Energetski stručnjak o krizi s plinom: Hrvatska može biti u samom vrhu EU po udjelu energije iz obnovljivih izvora</h3>
                        <p class="full">Sada je prilika za investiranje u tehnologije obnovljivih izvora pomoću kojih možemo zadovoljiti svoje potrebe, tvrdi prof. Goran Krajačić</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
        </section>
        <!-- DRUSTVO -->
        <section class="container full flex relative column-full-pad" id="drustvo">
            <h2 class="full bold capatalise">Društvo</h2>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/zivot/ivna-kompostira-ana-restaurira-a-kristina-biciklira-evo-sto-sve-mozes-uciniti-za-okolis-vec-danas/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/NIjt55NIdVUplHIGV6dsA9KyndRP27l0m3YJoF6Bedw/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDkvcHhsLTE3MDgyMC0yOTgzOTYyNC5qcGc.webp" aria-hidden="true">
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Društvo</h4>
                        <h3 class="full">Ivna kompostira, Ana restaurira, a Kristina biciklira. Evo što sve možeš učiniti za okoliš već danas </h3>
                        <p class="full">Pitali smo kolege u redakciji kako žive zelenije, neki odgovori su nas ugodno iznenadili</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/biznis-tech/odlican-nacin-ustede-ovi-genijalci-s-fer-a-osmislili-su-uredaj-koji-prati-potrosnju-struje-u-svakoj-sekundi/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://www.telegram.hr/wp-content/uploads/2023/04/sasa5149xw.jpg" aria-hidden="true">
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Društvo</h4>
                        <h3 class="full">Odličan način uštede: ovi genijalci s FER-a osmislili su uređaj koji prati potrošnju struje u svakoj sekundi</h3>
                        <p class="full">Zove se Enpulse i lako se instalira u razvodnu kutiju</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/zivot/nuklearna-elektrana-krsko-dobila-dozvolu-za-jos-20-godina-rada-evo-sto-bi-bilo-da-nije/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/zVUQYHe7kIA3Zfy1qn1HMWO5N1ApAu8_PtqL5hOuGEM/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDMvcHhsLTE3MDMyMy05ODkwMDczNS5qcGc.jpg" aria-hidden="true">
                    <p class = "old-news">SADRŽAJ STARIJI OD 2 MJESECA</p>
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Društvo</h4>
                        <h3 class="full">Nuklearna elektrana Krško dobila dozvolu za još 20 godina rada. Evo što bi bilo da nije</h3>
                        <p class="full">Zahvaljujući postojećim hidroelektranama i Krškom nismo osjetili nestašicu električne energije, poručuje profesor s FER-a</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/partneri/strucnjak-za-bioraznolikost-u-boljem-smo-stanju-nego-ostale-europske-zemlje-ali-vrijeme-i-nama-istjece/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/3W1Ut8sEQV91m7BtrGjJkgSsCmW-HrQeA3oqgkHy1bk/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDUvdGctbmFzbG92bmEta29sYXo0LWhlcC5qcGc.jpg" aria-hidden="true">
                    <p class = "old-news">SADRŽAJ STARIJI OD 2 MJESECA</p>
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Društvo</h4>
                        <h3 class="full">Stručnjak za bioraznolikost: U boljem smo stanju nego ostale europske zemlje, ali vrijeme i nama istječe</h3>
                        <p class="full">Plemenita periska, najveći školjkaš u Jadranu, gotovo je izumro. Žive jedinke ove vrste danas u Hrvatskoj brojimo na prste</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/partneri/iza-nje-je-prva-punionica-i-bicikl-na-vodik-dolina-vodika-sjeverni-jadran-donijet-ce-45-000-radnih-mjesta/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/ZBkrRZSMZFDXzyhK3CDiALlyDQrJwN7LjLBxFlm6CmA/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDUvcHhsLTE2MDkyMC0zMDE2MDQ2NC5qcGc.jpg" aria-hidden="true">
                    <p class = "old-news">SADRŽAJ STARIJI OD 2 MJESECA</p>
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Društvo</h4>
                        <h3 class="full">Iza nje je prva punionica i bicikl na vodik. 'Dolina vodika Sjeverni Jadran donijet će 45.000 radnih mjesta'</h3>
                        <p class="full">Profesorica s Fakulteta strojarstva i brodogradnje kaže da je Hrvatska strategija za vodik ambiciozno realna i provediva</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="container flex relative article featured-article stretch column-bottom-margin" href="https://www.telegram.hr/partneri/istrazivanja-pokazuju-da-studenti-stem-a-ocekuju-najvece-place-no-jesu-li-takva-ocekivanja-opravdana/" target="_blank">
                <div class="half center flex-responsive">
                    <img class="full" src="https://images.telegram.hr/3mRkSYqyvuut9_bf5C2TrmUACN-yP6WU5PkMyLVZyZQ/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDEvYW5uaWUtc3ByYXR0LXFja3hydW96anJnLXVuc3BsYXNoLmpwZw.jpg" aria-hidden="true">
                    <p class = "old-news">SADRŽAJ STARIJI OD 2 MJESECA</p>
                </div>
                <div class="half center flex-responsive column-full-pad">
                    <div class="full flex relative">
                        <h4 class="full bold capatalise">Društvo</h4>
                        <h3 class="full">Istraživanja pokazuju da studenti STEM-a očekuju najveće plaće. No jesu li takva očekivanja opravdana?</h3>
                        <p class="full">Prema globalnim procjenama, potreba za poslovima iz STEM područja nastavit će rasti</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div> -->
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1 capatalise">Pročitaj više</div>
                        </div>
                    </div>
                </div>
            </a>
        </section>
        <!-- Footer -->
        <footer class="full flex relative">
            <div class="container text-container flex relative column-full-pad">
                <div class="full center logo-line">
                    <img id="hep-logo" src="<?php echo $native_path ?>assets/logos/hep_logo.svg" alt="HEP logo">
                    <img src="<?php echo $native_path ?>assets/logos/tg_studio_horizontal_color.png" alt="TG Studio logo" />
                </div>
                <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom HEP i po najvišim uredničkim standardima Telegram Media Grupe.</p>
            </div>
        </footer>
        <?php wp_footer(); 
        ?>
    </div>
</body>

</html>