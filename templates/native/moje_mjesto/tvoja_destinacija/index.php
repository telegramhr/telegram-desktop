<!DOCTYPE html>
<html lang="hr">

<?php
//$native_path = get_stylesheet_directory_uri() . '/templates/native/moje_mjesto/tvoja_destinacija/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/moje_mjesto/tvoja_destinacija/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/moje_mjesto/tvoja_destinacija/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/moje_mjesto/tvoja_destinacija/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>img/aos.css?ver=1.0" type="text/css" />
    <link rel="stylesheet" href="https://use.typekit.net/yjw4lwh.css">
    <script src="<?php echo $native_path ?>img/aos.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css?ver=2.0" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=3.3" type="text/css" />
    <script src="<?php echo $native_path ?>jquery.serialize-object.min.js"></script>
    <script src="<?php echo $native_path ?>functions.js"></script>
</head>
<div class="main-container flex relative">
    <header class="native-hero episode-overlay full flex relative center">
        <video src="<?php echo $native_path ?>img/tg_videobg_dubrovnik.mp4" autoplay loop muted playsinline class="background-video"></video>
        <a href="https://telegram.hr/" class="hero-logo mobile-only center full">
                <img src="<?php echo $native_path ?>img/telegram_logo_white.svg" alt="Telegram Logo">
        </a>
        <div class="full native-title center">
            <h1>
                <div class="flex" data-aos="fade-left">Moje mjesto, </div>
                <div class="flex" data-aos="fade-right" data-aos-delay="1000">tvoja destinacija</div>
            </h1>
        </div>
        <a href="#o-projektu" class="mobile-only header-btn insite-btn">O projektu</a>
        <div class="flex hero-left center">
            <a href="https://telegram.hr/" class="hero-logo center full">
                <img src="<?php echo $native_path ?>img/telegram_logo_white.svg" alt="Telegram Logo">
            </a>
            <nav class="full flex">
                <a class="full flex" href="#o-projektu">O projektu</a>
                <a class="full flex" href="#dubrovnik">Dubrovnik</a>
                <a class="full flex" href="#sibenik">Šibenik</a>
                <a class="full flex" href="#korcula">Korčula</a>
                <a class="full flex hide" href="#zadar">Zadar</a>
                <a class="full flex" href="#procitajte-vise">Pročitaj više</a>
                <a class="full flex" href="#pozovi-nas">Pozovi nas</a>
            </nav>
        </div>
        <div class="flex hero-right center">
            <img src="<?php echo $native_path ?>img/vegetanatur_white_square.png" alt="Vegeta Logo">
            <img src="<?php echo $native_path ?>img/vegetamaestro_white_square.png" alt="Vegeta Logo">
            <img src="<?php echo $native_path ?>img/benussi_white_square.png" alt="Benussi Logo">
            <img src="<?php echo $native_path ?>img/addiko_white_square.png" alt="Addiko Bank Logo">
            <img src="<?php echo $native_path ?>img/enterprise_white_square.png" alt="Enterprise Logo">
            <img src="<?php echo $native_path ?>img/huawei_square_white.png" alt="Huawei Logo">
            <img src="<?php echo $native_path ?>img/jaguar_white_square.png" class="jaguar-logo" alt="Jaguar Logo">
        </div>
        <div class="flex hero-top">
            <h2 data-aos="fade-down" data-aos-delay="1500">Odat ću ti zašto živim ovdje</h2>
        </div>
    </header>
    <nav class="full flex mobile-nav stretch">
        <a class="fourth center" href="#dubrovnik"><img src="<?php echo $native_path ?>img/icon_dubrovnik.png" aria-hidden="true"><span>Dubrovnik</span></a>
        <a class="fourth center" href="#sibenik"><img src="<?php echo $native_path ?>img/icon_sibenik.png" aria-hidden="true"><span>Šibenik</span></a>
        <a class="fourth center" href="#korcula"><img src="<?php echo $native_path ?>img/icon_korcula.png" aria-hidden="true"><span>Korčula</span></a>
        <a class="fourth center hide" href="#zadar"><img src="<?php echo $native_path ?>img/icon_zadar.png" aria-hidden="true"><span>Zadar</span></a>
    </nav>
    <section class="full episode relative" id="o-projektu">
        <div class="full flex">
            <h2 class="full relative episode-title" data-aos="fade-left">O projektu</h2>
            <p class="full project-intro" data-aos="fade-left" data-aos-delay="750">U dokumentarnom serijalu "Moje mjesto, tvoja destinacija" vodimo vas na ulice prekrasnih hrvatskih gradova uz lokalne vodiče - pojedince koji su odlučili ostati u svojim mjestima i graditi njihovu kulturu.</p>
            <div class="full sugovornici flex stretch">
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="1250">
                    <img src="<?php echo $native_path ?>img/sugovornik_ivan.jpg" aria-hidden="true">
                    <div class="full sugovornik-episode">01</div>
                    <h3 class="full">Ivan iz Dubrovnika</h3>
                    <p>Ivan svojim IT rješenjima osvaja svijet. Nedavno je ušao na tržište Japana. Posjetili smo ga u Dubrovniku.</p>
                    <a href="#dubrovnik" class="insite-btn">Pogledaj epizodu</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="1500">
                    <img src="<?php echo $native_path ?>img/sugovornik_danijel.jpg" aria-hidden="true">
                    <div class="full sugovornik-episode">02</div>
                    <h3 class="full">Danijel iz Šibenika</h3>
                    <p>Danijel svojim umjetničkim instalacijama obogaćuje kulturnu ponudu grada i šire. Posjetili smo ga u Šibeniku.</p>
                    <a href="#sibenik" class="insite-btn">Pogledaj epizodu</a>
                </div>
                <div class="third flex-responsive center" data-aos="fade-right" data-aos-delay="1750">
                    <h2 class="full center-text">Uskoro više...</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="full episode episode-overlay flex relative stretch" id="dubrovnik">
        <video src="<?php echo $native_path ?>img/tg_videobg_dubrovnik.mp4" autoplay loop muted playsinline class="background-video"></video>
        <div class="half flex-responsive flex">
            <h2 class="full episode-title" data-aos="fade-left">Moje mjesto Dubrovnik</h2>
        </div>
        <div class="half flex-responsive flex">
            <p class="full episode-description" data-aos="fade-right">Na šetnju Dubrovnikom poveo nas je mladi IT-ijevac Ivan Ivušić. Nakon osam godina u Zagrebu odlučio se vratiti u svoj kraj, gdje je osnovao IT firmu koja se bavi digitalnim recenzijama. Njegovi klijenti primarno su ugostitelji iz Hrvatske pa sve do Japana. Kroz šetnju svojim gradom pokazao nam je tko su ljudi i mjesta zbog kojih voli Dubrovnik. Pokazao nam je djelić bogate gastronomske ponude i odao tajnu zašto je ostao vjeran Dubrovniku.</p>
            <a href="https://www.telegram.hr/zivot/svojim-it-rjesenjima-vec-je-na-trzistu-japana-ali-ivan-je-vjeran-dubrovniku-posjetili-smo-ga-i-saznali-zasto/" class="insite-btn" data-aos="fade-right" target="_blank" data-aos-delay="1000">Pogledaj video</a>
        </div>
    </section>
    <section class="full episode episode-overlay flex relative stretch" id="sibenik">
        <video src="<?php echo $native_path ?>img/tg_videobg_sibenik.mp4" autoplay loop muted playsinline class="background-video"></video>
        <div class="half flex-responsive flex">
            <h2 class="full episode-title" data-aos="fade-left">Moje mjesto Šibenik</h2>
        </div>
        <div class="half flex-responsive flex">
            <p class="full episode-description" data-aos="fade-right">Ulicama Šibenika proveo nas je dizajner Danijel Hrg, čiji je dućan s unikatnim nakitom smješten u samom centru grada. Osim nakita, Danijel je autor impresivnih umjetničkih instalacija koje krase grad i kultni klub Azimut. S Danijelom smo posjetili Azimut i prekrasnu Tvrđavu sv. Mihovila, upoznali smo gastronomsku i kulturnu ponudu grada te na vlastitoj koži osjetili veliko gostoprimstvo Šibenčana.</p>
            <a href="https://www.telegram.hr/zivot/prvu-ogrlicu-izradio-je-za-djevojku-ona-mu-je-danas-supruga-a-on-poznati-sibenski-dizajner-posjetili-smo-ga/" class="insite-btn" data-aos="fade-right" target="_blank" data-aos-delay="1000">Pogledaj video</a>
        </div>
    </section>
    <section class="full episode episode-overlay flex relative stretch" id="korcula">
        <video src="<?php echo $native_path ?>img/tg_videobg_korcula.mp4" autoplay loop muted playsinline class="background-video"></video>
        <div class="half flex-responsive flex">
            <h2 class="full episode-title" data-aos="fade-left">Moje mjesto Korčula</h2>
        </div>
        <div class="half flex-responsive flex">
            <p class="full episode-description" data-aos="fade-right">Dolazi uskoro...</p>
        </div>
    </section>
    <section class="full episode flex relative stretch hide" id="zadar">
        <div class="half flex-responsive flex">
            <h2 class="full episode-title" data-aos="fade-left">Moje mjesto Zadar</h2>
        </div>
        <div class="half flex-responsive flex">
            <p class="full episode-description" data-aos="fade-right">Dolazi uskoro...</p>
        </div>
    </section>
    <section class="full episode relative" id="procitajte-vise">
        <div class="full flex">
            <h2 class="full relative episode-title" data-aos="fade-left">Pročitaj više</h2>
            <div class="full sugovornici extra-content flex stretch">
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="1000">
                    <img src="https://images.telegram.hr/A0bTk2contU-bMAE_iUm4IrAa_xw2NXRFOTQt9A_H8E/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjEvMDkvcGV4ZWxzLWluY2hzLTc5ODg5NzEtODgweDUyMC0xLmpwZw.jpg" aria-hidden="true">
                    <h3 class="full">Ove smo sezone proputovali obalu. Odabrali smo top destinacije za sve koji vole aktivni odmor</h3>
                    <p>Mnogo je prilika za aktivni odmor u Hrvatskoj. Donosimo nekoliko prijedloga</p>
                    <a href="https://www.telegram.hr/partneri/ove-smo-sezone-proputovali-obalu-odabrali-smo-top-destinacije-za-sve-koji-vole-aktivni-odmor/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="1000">
                    <img src="https://images.telegram.hr/e2IAQHoUfZY5icMBm80_ttR7D3_AMD9v4ZnEbQ7tywc/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjEvMDkvNDAwYTUwMTctc2NhbGVkLmpwZw.jpg" aria-hidden="true">
                    <h3 class="full">Testirali smo novi Huawei Watch 3 Pro tijekom šetnje Zadrom. Evo zašto nam se sviđa</h3>
                    <p>Novi Huawei Watch 3 Pro s nama je prešao na tisuće koraka</p>
                    <a href="https://www.telegram.hr/partneri/testirali-smo-novi-huawei-watch-3-pro-tijekom-setnje-zadrom-evo-zasto-nam-se-svida/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="1250">
                    <img src="https://super1.telegram.hr/wp-content/uploads/sites/3/2021/08/vegeta-01-880x520.jpg" aria-hidden="true">
                    <h3 class="full">Donosimo vam recept za brudet s lignjama koji smo probali u Dubrovniku</h3>
                    <p>Rješenje za dane kada vam se jede brudet, ali ne čisti riba</p>
                    <a href="https://super1.telegram.hr/relax/donosimo-vam-recept-za-brudet-s-lignjama-koji-smo-probali-u-dubrovniku/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="1500">
                    <img src="https://super1.telegram.hr/wp-content/uploads/sites/3/2021/08/dubrovnik-5-2-1-880x520.jpg" aria-hidden="true">
                    <h3 class="full">U Dubrovniku smo probali zelenu paštu s plodovima mora. Donosimo vam brzi recept</h3>
                    <p>Ovo je naša inačica zelene pašte koju smo degustirali u Dubrovniku</p>
                    <a href="https://super1.telegram.hr/relax/u-dubrovniku-smo-probali-zelenu-pastu-s-plodovima-mora-donosimo-vam-brzi-recept/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
            </div>
        </div>
    </section>
    <section class="full episode flex relative stretch" id="pozovi-nas">
        <div class="half flex-responsive flex relative form-parent">
            <h2 class="full episode-title" data-aos="fade-left">Pozovi nas u svoje mjesto</h2>
            <form id="applications" class="full flex" data-aos="fade-left" data-aos-delay="500">
                <p class="full article-description">
                Želimo čuti i tvoju priču. Pozovi nas u svoje mjesto, ispričaj nam sve što te veže uz tvoje mjesto, odaj nam zašto živiš tu.
                </p>
                <label class="full">Tvoje ime:</label>
                <input type="text" class="full" id="ime" name="ime">
                <label class="full">Tvoj e-mail:</label>
                <input type="email" class="full" id="email" name="email">
                <label class="full">Što nam u svom mjestu želite pokazati i zašto:</label>
                <textarea type="text" class="full" id="poruka" name="poruka"></textarea>
                <div class="full flex">
                    <input type="checkbox" required id="pravila-privatnosti" name="pravila-privatnosti">
                    <label class="clickable" for="pravila-privatnosti">Prihvaćam <a href="https://www.telegram.hr/stranica/pravila-privatnosti/" target="_blank">pravila privatnosti Telegrama.</a></label>
                </div>
                <div class="full flex">
                <div id="submit-application" class="insite-btn">Pošalji prijavu</div>
                </div>
                <div class="full flex">
                <p id="error-msg" class="bold hide">Morate prihvatiti pravila privatnosti!</p>
                </div>
                <div class="full flex hide" id="loading-indicator">
                <div class="lds-facebook"><div></div><div></div><div></div></div>
                </div>
                <div class="full flex">
                <p id="response-msg" class="bold hide">Vaša prijava je spremljena. Hvala na sudjelovanju!</p>
                </div>
            </form>
        </div>
        <div class="half flex-responsive flex desktop-only hide" data-aos="fade-right">
            <img src="<?php echo $native_path ?>img/grey_placeholder.png" aria-hidden="true">
        </div>
    </section>
    <footer class="full native-signature">
        <div class="container flex">
            <div class="full center">
                <img src="<?php echo $native_path ?>img/vegetanatur_square.png" alt="Vegeta Logo" data-aos="fade-up" data-aos-delay="500">
                <img src="<?php echo $native_path ?>img/vegetamaestro_square.png?ver=4.0" alt="Vegeta Logo" data-aos="fade-up">
                <img src="<?php echo $native_path ?>img/benussi_white_square.png" alt="Benussi Logo" data-aos="fade-up" data-aos-delay="750">
                <img src="<?php echo $native_path ?>img/addiko_square.png?ver=2.0" alt="Addiko Bank Logo" data-aos="fade-up" data-aos-delay="1000">
                <img src="<?php echo $native_path ?>img/enterprise_square.png" alt="Enterprise Logo" data-aos="fade-up" data-aos-delay="1250">
                <img src="<?php echo $native_path ?>img/huawei_square.png" alt="Huawei Logo" data-aos="fade-up" data-aos-delay="1500">
            </div>
            <div class="full center">
                <img src="<?php echo $native_path ?>img/jaguar_white_square.png" class="jaguar-logo" alt="Jaguar Logo">
            </div>
            <div class="full center">
            <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio_white.svg" alt="TG Studio logo" />
            </div>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerima i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
        <script>
        var $form = jQuery('form#applications'),
            url = 'https://script.google.com/macros/s/AKfycbwRXtkq9CyRS2emXaxpgxiWCGwepukRS3cX_rIr9rc4wqDXFaAP/exec'

        jQuery('#submit-application').on('click', function(e) {
            e.preventDefault();
            if(document.getElementById('pravila-privatnosti').checked) {
                $('#submit-application').hide();
                $('#error-msg').hide();
                $('#loading-indicator').removeClass('hide');
                var jqxhr = jQuery.ajax({
                    url: url,
                    method: "GET",
                    dataType: "json",
                    data: $form.serializeObject()
                }).done(
                    function(){
                        $('#loading-indicator').hide();
                        $('#response-msg').removeClass('hide');
                    }
                );
            }
            else {
                $('#error-msg').removeClass('hide');
            }
        })
    </script>
    </footer>
</div>

<?php wp_footer(); ?>
</body>

</html>