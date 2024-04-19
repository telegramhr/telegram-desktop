<!DOCTYPE html>
<html lang="hr">

<?php

/* Potential native paths */
//$native_path = get_stylesheet_directory_uri() . '/templates/native/client/landing/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/franck/kralju-kavu/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/franck/kralju-kavu/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/franck/kralju-kavu/';
//$native_path = 'http://localhost/kralju-kavu/';
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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oleo+Script+Swash+Caps:wght@400;700&display=swap" rel="stylesheet">
    <!-- Animate on scroll -->
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/aos/aos.css?v=1.00" type="text/css" />
    <script src="<?php echo $native_path ?>assets/aos/aos.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/operon.css?v=1.10" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/style.css?v=1.30" type="text/css" />
    <!-- Functions -->
    <script src="<?php echo $native_path ?>assets/jquery.serialize-object.min.js"></script>
    <script src="<?php echo $native_path ?>assets/functions.js?v=1.30"></script>
</head>

<body>
    <div class="main-container flex relative">
        <!-- Mobile Side Panel -->
        <div class="mobile-only side-menu">
            <div id="mySidepanel" class="sidepanel flex">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="#" class="center-text full red-text bold">Tko je tvoj kralj ili kraljica?</a>
                <a href="#pocetna" class="full relative animate shoo-left">
                    <div class="full">Početna</div>
                </a>
                <a href="#price-1" class="full relative animate shoo-left">
                    <div class="full">Vaše priče I</div>
                </a>
                <a href="#price-2" class="full relative animate shoo-left">
                    <div class="full">Vaše priče II</div>
                </a>
            </div>
            <button class="openbtn" onclick="openNav()">☰</button>
        </div>
        <!-- Top Sticky Nav -->
        <nav class="full top-nav flex relative">
            <div class="container column-horizontal-pad flex relative">
                <div class="center relative desktop-only">
                    <a href="#pocetna" class="center relative animate">
                        <div class="full center-text">Početna</div>
                    </a>
                    <a href="#" class="center relative animate">
                        <div class="full center-text red-text">|</div>
                    </a>
                    <a href="#price-1" class="center relative animate">
                        <div class="full center-text">Vaše priče I</div>
                    </a>
                    <a href="#price-2" class="center relative animate">
                        <div class="full center-text">Vaše priče II</div>
                    </a>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <header class="full flex relative" id="pocetna">
            <div class="container center relative stretch">
                <div class="half flex flex-responsive column-full-pad mobile-order-2">
                    <div class="full flex relative">
                        <h1 class="full red-text bold" data-aos="fade-down">Tko je tvoj kralj ili kraljica?</h1>
                        <p class="full" data-aos="fade-right" data-aos-delay="500">U srcu svakog doma u Hrvatskoj, već se tradicionalno krije crveno pakiranje četvrtastog oblika. Simbol ljubavi, pažnje i darivanja - kultna Franckova Ciglica. Međutim, nije potrebno čekati posebne pozivnice ili proslave kako biste svojim najmilijima pokazali koliko vam znače.</p>
                        <p class="full" data-aos="fade-right" data-aos-delay="1000">U suradnji s Telegramom, Franck vam je pružio priliku da poklonite Ciglicu onome tko je u vašem životu pravi kralj ili kraljica.</p>
                        <p class="full bold" data-aos="fade-right" data-aos-delay="1500">Hvala što ste sudjelovali! Evo tko su vaši kraljevi i kraljice...</p>
                        <div class="full stretch flex mobile-order-3"  data-aos="fade-right" data-aos-delay="2000">
                            <a href="#price-1" class="animate flex relative button-24">Pročitajte genijalne priče</a>
                        </div>
                        <div class="full flex relative">
                            <img src="<?php echo $native_path ?>assets/placeholders/jubilarna.png?ver=1.0" aria-hidden="true" class=" column-vertical-pad">
                        </div>
                    </div>
                </div>
                <div class="half flex flex-responsive mobile-order-1 relative">
                    <div class="santa-fade"></div>
                    <img src="<?php echo $native_path ?>assets/placeholders/jubilarna_foto.jpg" aria-hidden="true" class="santa-bg-img">
                </div>
            </div>
        </header>
        <!-- Articles -->
        <section class="full center relative" id="price-1">
            <img src="https://images.telegram.hr/RqxoyF_WEdLvhyTvUHHHx5q7yE-sOhfyG31gcHbKXko/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjQvMDQvbW90aGVyLTY5MTYyMTItMTI4MC5qcGc.webp" aria-hidden="true" class="bg-img">
            <a class="full flex relative featured-article stretch" href="https://www.telegram.hr/partneri/pet-genijalnih-uspomena-nasih-citateljica-vjencanje-mi-je-spasila-mama-i-njezin-piling-od-kave/" target="_blank">
                <div class="half flex flex-responsive column-full-pad desktop-order-1 white-bg red-border-right">
                    <div class="full flex relative">
                        <h3 class="full red-text bold">Pet genijalnih uspomena naših čitateljica: 'Vjenčanje mi je spasila mama i njezin piling od kave'</h3>
                        <div class="animate flex relative button-24">Pročitajte više</div>
                    </div>
                </div>
                <div class="half center flex-responsive column-full-pad desktop-order-2"></div>
            </a>
        </section>
        <section class="full center relative" id="price-2">
            <img src="https://images.telegram.hr/t1-zTkGdBYttY2eqK64IW9mpxbsuP7CJQic5fLJlpro/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjQvMDMvY2FuZGljZS1waWNhcmQtdmxlbm0tY294NXktdW5zcGxhc2guanBn.webp" aria-hidden="true" class="bg-img">
            <a class="full flex relative featured-article stretch"  href="https://www.telegram.hr/partneri/oni-su-osobe-koje-nam-dane-cine-ljepsima-ovo-su-njihove-price-moja-supruga-je-moja-kraljica-i-moj-heroj/" target="_blank">
                <div class="half flex flex-responsive column-full-pad desktop-order-2 white-bg red-border-left">
                    <div class="full flex relative">
                        <h3 class="full red-text bold">Oni su osobe koje nam dane čine ljepšima. Ovo su njihove priče: 'Moja supruga je moja kraljica i moj heroj'</h3>
                        <div class="animate flex relative button-24">Pročitajte više</div>
                    </div>
                </div>
                <div class="half center flex-responsive column-full-pad desktop-order-1"></div>
            </a>
        </section>
        <!-- Footer -->
        <section class="full center relative" id="theend">
            <footer class="full flex relative">
                <div class="container text-container flex relative column-full-pad">
                    <div class="full center logo-line">
                        <img src="<?php echo $native_path ?>assets/logos/tg_studio_horizontal_color.png" alt="TG Studio logo" />
                    </div>
                    <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom i po najvišim uredničkim standardima Telegram Media Grupe.</p>
                </div>
            </footer>
        </section>
        <?php wp_footer(); 
        ?>
    </div>
</body>

</html>