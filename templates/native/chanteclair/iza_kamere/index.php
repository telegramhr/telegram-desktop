<!DOCTYPE html>
<html lang="hr">

<?php

/* Potential native paths */
//$native_path = get_stylesheet_directory_uri() . '/templates/native/chanteclair/iza_kamere/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/chanteclair/iza_kamere/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/chanteclair/iza_kamere/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/chanteclair/iza_kamere/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="<?php echo $native_path ?>assets/jquery.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!-- Animate on scroll -->
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/aos/aos.css?v=1.00" type="text/css" />
    <script src="<?php echo $native_path ?>assets/aos/aos.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/operon.css?v=1.20" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/style.css?v=1.20" type="text/css" />
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
        <nav class="full bottom-nav mobile-only flex relative">
            <a href="#kuhinja" class="third center relative">
                <?php echo file_get_contents($native_path.'assets/placeholders/utensils-solid.svg'); ?>
                <div class="full center-text">Kuhinja</div>
            </a>
            <a href="#kupaonica" class="third center relative">
                <?php echo file_get_contents($native_path.'assets/placeholders/toothbrush-solid.svg'); ?>
                <div class="full center-text">Kupaonica</div>
            </a>
            <a href="#radionica" class="third center relative">
                <?php echo file_get_contents($native_path.'assets/placeholders/hammer-solid.svg'); ?>
                <div class="full center-text">Radionica</div>
            </a>
        </nav>
        <!-- Top Sticky Nav -->
        <nav class="full top-nav flex relative">
            <div class="container column-horizontal-pad flex relative">
                <div class="center relative text-logo"><img src="<?php echo $native_path ?>assets/chanteclair_logo.png" alt="Chanteclair logo"><span>Iza kamera.</span></div>
                <div class="center relative desktop-only">
                    <a href="#kuhinja" class="center relative animate">
                        <?php echo file_get_contents($native_path.'assets/placeholders/utensils-solid.svg'); ?>
                        <div class="full center-text">Kuhinja</div>
                    </a>
                    <a href="#kupaonica" class="center relative animate">
                        <?php echo file_get_contents($native_path.'assets/placeholders/toothbrush-solid.svg'); ?>
                        <div class="full center-text">Kupaonica</div>
                    </a>
                    <a href="#radionica" class="center relative animate">
                        <?php echo file_get_contents($native_path.'assets/placeholders/hammer-solid.svg'); ?>
                        <div class="full center-text">Radionica</div>
                    </a>
                </div>
            </div>
        </nav>
        <!-- Hero Video -->
        <header class="full center relative hero-video">
            <div class="header-fade"></div>
            <div class="header-noise"></div>
            <video autoplay loop muted playsinline class="background-video">
                <source src="<?php echo $native_path ?>assets/tg_videobg_izakamere.mp4?v=1.00" type="video/mp4">
            </video>
            <div class="container center wrap relative column-full-pad">
                <h1 class="full bold text-container center-text" data-aos="fade-up" data-aos-delay="250">Iza kamera.</h1>
                <h3 class="full text-container center-text" data-aos="fade-up" data-aos-delay="500">Istražili smo kako zapravo izgleda stvaranje jedne objave influencera</h3>
            </div>
        </header>
        <!-- KUHINJA -->
        <section class="full flex relative" id = "kuhinja">
            <a class="container flex relative article featured-article stretch" href="https://www.telegram.hr/super1/life/kuhali-smo-s-gastroblogerom-hungry-milom-pokazao-nam-je-kako-zapravo-nastaju-njegove-fotke-i-videa/" target="_blank">
                <div class="half center flex-responsive column-full-pad desktop-order-2">
                    <img src="https://www.telegram.hr/wp-content/uploads/2023/03/sasa3115xw.jpg" aria-hidden="true">
                </div>
                <div class="half center flex-responsive column-full-pad desktop-order-1">
                    <div class="full flex relative">
                        <h4 class="left-text bold capitalize blue-line mobile-title">Kuhinja</h4>
                        <h2 class="full">Poznati food bloger Hungry Mile pokazao nam je kako nastaju njegova videa i fotke hrane</h2>
                        <p class="full column-bottom-pad">Najviše nereda, kaže nam, napravi kad poha meso</p>
                        <div class="animate flex relative button-24">Pročitaj priču</div>
                        <div class="flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div>
                    </div>
                </div>
            </a>
            <div class="full center">
                <h2 class = "blue-line center-text capitalize bold tips-title">Savjeti za kuhinju by Mile</h2>
            </div>
            <div class="container center box-wrap relative stretch">
                <div class="half flex box flex-responsive column-vertical-margin col-horizontal-margin">
                    <div class="full flex relative">
                        <h2 class = "full center-text blue-bg">Za objave:</h2>
                        <ul class = "full">
                            <li>1. Najvažnije je proučiti recept i nabaviti sve potrebne namirnice.</li>
                            <li>2. Ako je potrebno, vježbati pripremu jela i isprobati ga napraviti prije snimanja.</li>
                            <li>3. Pri serviranju koristiti veću količinu sastojaka jer izgleda ljepše na fotografijama.</li>
                        </ul>
                    </div>
                </div>
                <div class="half center inverse-box flex-responsive column-vertical-margin col-horizontal-margin">
                    <div class="full flex relative">
                        <h2 class = "full center-text blue-bg">Za čišćenje:</h2>
                        <ul class = "full">
                            <li>1. Da skratite vrijeme čišćenja, zamolite prijatelje za pomoć oko pranja posuđa.</li>
                            <li>2. Koristite univerzalna sredstva koja će biti pogodna za razne površine - od pećnice do radne plohe.</li>
                            <li>3. Probajte pospremati dok čekate da voda zakipi ili kad se luk dinsta, odnosno kad imate praznog hoda.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- KUPAONICA -->
        <section class="full flex relative" id="kupaonica">
            <a class="container flex relative article featured-article stretch" href="https://www.telegram.hr/super1/prvi-video-snimila-je-s-14-nakon-izgubljene-oklade-a-sad-je-prati-vise-od-200k-ljudi-otkrila-nam-je-kako/" target="_blank">
                <div class="half center flex-responsive column-full-pad desktop-order-1">
                    <img src="https://www.telegram.hr/wp-content/uploads/2023/03/super1-chanteclair-nika-7.jpg" aria-hidden="true">
                </div>
                <div class="half flex flex-responsive column-full-pad desktop-order-2">
                    <div class="full flex relative">
                        <h4 class="bold capitalize blue-line mobile-title">Kupaonica</h4>
                        <h2 class="full"> Prvi video snimila je s 14 nakon izgubljene oklade, a sad je prati više od 200k ljudi. Otkrila nam je kako </h2>
                        <p class="full column-bottom-pad">Danas joj za neka videa treba svega pola sata montaže</p>
                        <div class="animate flex relative button-24">Pročitaj priču</div>
                        <div class="flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div>
                    </div>
                </div>
            </a>
            <div class="full flex">
                <div class="container flex relative stretch column-full-pad">
                    <h2 class = "full blue-line center-text capitalize bold tips-title">Savjeti za kupaonicu by Nika Pavičić</h2>
                </div>
            </div>
            <div class="container center box-wrap relative stretch">
                <div class="half flex box flex-responsive column-vertical-margin col-horizontal-margin">
                    <div class="full flex relative">
                        <h2 class = "full center-text blue-bg">Savjeti za snimanje:</h2>
                        <ul class = "full">
                            <li>Zapišite si na papir ili u glavi složite scenarij za video. Bit će vam ga lakše snimiti.</li>
                            <li>Ako nemate inspiracije, nemojte forsirati. Radije prosurfajte dok ne nađete nešto što vam je interesantno.</li>
                            <li>Olakšajte si montiranje i nastojite snimati kratke videe. Danas ih pratitelji ionako više preferiraju naspram vlogova.</li>
                        </ul>
                    </div>
                </div>
                <div class="half flex inverse-box flex-responsive column-vertical-margin col-horizontal-margin">
                    <div class="full flex relative">
                        <h2 class = "full center-text blue-bg">Savjeti za čišćenje:</h2>
                        <ul class = "full">
                            <li>Ne bojite se nereda tijekom snimanja. S pravim sredstvom nema te šminke koju ne možete očistiti.</li>
                            <li>Ladice držite uredne, a korisno je pored umivaonika imati spremni čisti ručnik.</li>
                            <li>Uz sebe uvijek imajte vlažne maramice i obrišite sitne mrlje odmah kad ih napravite.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- RADIONICA -->
        <section class="full flex relative" id ="radionica">
            <a class="container flex relative article featured-article stretch" href="https://www.telegram.hr/super1/farmaceutkinja-i-povjesnicarka-umjetnosti-preselila-na-selo-kod-ivanica-i-pokrenula-megapopularni-profil-na-instagramu/" target="_blank">
                <div class="half center flex-responsive column-full-pad desktop-order-2">
                    <img src="https://www.telegram.hr/wp-content/uploads/2023/03/sasa0332x-ppxw.jpg" aria-hidden="true">
                </div>
                <div class="half center flex-responsive column-full-pad desktop-order-1">
                    <div class="full flex relative">
                        <h4 class="left-text bold capitalize blue-line mobile-title">Radionica</h4>
                        <h2 class="full">Farmaceutkinja i povjesničarka umjetnosti preselila na selo kod Ivanića i pokrenula megapopularni profil na Instagramu</h2>
                        <p class="full column-bottom-pad">Pratitelji je prepoznaju po fotografijama konja i idiličnom životu na selu</p>
                        <div class="animate flex relative button-24">Pročitaj priču</div>
                        <div class="flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div>
                    </div>
                </div>
            </a>
            <div class="full flex">
                <div class="container flex relative stretch column-full-pad">
                    <h2 class = "full blue-line center-text capitalize bold tips-title">Savjeti za radionicu by Ivona Štimac</h2>
                </div>
            </div>
            <div class="container center box-wrap relative stretch">
                <div class="half center box flex-responsive column-vertical-margin col-horizontal-margin">
                    <div class="full flex relative">
                        <h2 class = "full center-text blue-bg">Za snimanje:</h2>
                        <ul class = "full">
                            <li>Ako želite čist i topao kadar, maknite iz njega pozadinske stvari koje su vam višak. Slijedite pravilno neparnih brojeva stvari na slici.</li>
                            <li>Kada fotografirate, a aparat vam je na stalku, pazite da vam kamera bude skroz mirna. Ne hodajte oko aparata jer vam se neće fokusirati.</li>
                            <li>Za fotografiranje djece i životinja se naoružajte strpljenjem. Budući da su rijetko mirni, trebat će više pokušaja da uhvatite kadar koji nije mutan.</li>
                        </ul>
                    </div>
                </div>
                <div class="half center inverse-box flex-responsive column-vertical-margin col-horizontal-margin">
                    <div class="full flex relative">
                        <h2 class = "full center-text blue-bg">Za čišćenje:</h2>
                        <ul class = "full">
                            <li>Ako presađujete biljke, obavezno to radite negdje vani. Najbolje na terasi da ne zaprljate cijelu kuću.</li>
                            <li>Uvijek imajte pri ruci rukavice da se zaštitite od prljavština, zemlje i sredstva za čišćenje.</li>
                            <li>Imajte u ormaru posebnu odjeću koju nosite samo kada čistite. Tada ne morate brinuti o mrljama koje se teško isperu.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Big Button -->
        <?php /*
        <div class="full center column-horizontal-pad">
            <div class="animate flex relative button-24 big-btn">Provjeri sve naše savjete za život bez masnoće</div>
        </div>
        */ ?>
        <!-- Footer -->
        <footer class="full flex relative">
            <div class="container text-container flex relative column-full-pad">
                <div class="full center logo-line">
                    <img src="<?php echo $native_path ?>assets/chanteclair_logo.jpg" alt="Chanteclair logo" />
                    <img src="<?php echo $native_path ?>assets/logos/tg_studio_horizontal_color.png" alt="TG Studio logo" />
                </div>
                <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Chanteclair i po najvišim uredničkim standardima Telegram Media Grupe.</p>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </div>
</body>

</html>
