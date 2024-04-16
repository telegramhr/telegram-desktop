<!DOCTYPE html>
<html lang="hr">

<?php

/* Potential native paths */
//$native_path = get_stylesheet_directory_uri() . '/templates/native/telesport/uefa/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/telesport/uefa/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/telesport/uefa/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/telesport/uefa/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); 
    ?>
    <script src="<?php echo $native_path ?>assets/jquery.js"></script>
    <script src="<?php echo $native_path ?>assets/jquery.serialize-object.min.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Animate on scroll -->
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/aos/aos.css?v=1.00" type="text/css" />
    <script src="<?php echo $native_path ?>assets/aos/aos.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/operon.css?v=1.00" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/style.css?v=1.00" type="text/css" />
    <!-- Functions -->
    <script src="<?php echo $native_path ?>assets/functions.js"></script>
</head>

<body>
    <div class="main-container flex relative">
        <!-- Featured article -->
        <section class="full flex relative stretch main-element">
            <img class="telesport" src="<?php echo $native_path ?>assets/logos/telesport_logo_white.svg" alt="Telesport logo">
            <div class="header-image center">
                <img src="<?php echo $native_path ?>assets/futbal.jpg" alt="Navijači koji gledaju nogometnu utakmicu">
                <h1 class="sixty" data-aos="fade-in" data-aos-delay="0">Vodimo te na UEFA Champions League Final London 2024</h1>
            </div>
            <div class="third flex-responsive relative column-vertical-pad column-giga-left-pad mobile-side-pad">
                <div class="full center column-full-pad" data-aos="fade-in" data-aos-delay="0">
                    <img src="<?php echo $native_path ?>assets/logos_uefa_mc.png" class="header-logos" alt="Službeni sponzori promocije: Mastercard i UEFA">
                </div>
                <h2 class="full column-mini-bottom-pad" data-aos="fade-right" data-aos-delay="0">Probudi komentatora u sebi</h2>
                <p class="full column-mini-bottom-pad" data-aos="fade-right" data-aos-delay="500">Pozivamo čitatelje da podijele svoje osvrte na utakmice UEFA Lige prvaka, točnije utakmice četvrtfinala od 10.04. do 21.04.</p>
                <p class="full bold column-mini-bottom-pad" data-aos="fade-right" data-aos-delay="1000">Možda će baš vas Telesport, u suradnji s Mastercardom, voditi na finale Lige prvaka</p>
                <p class="full column-mini-bottom-pad" data-aos="fade-right" data-aos-delay="1500">Vaš zadatak je napisati kreativan i zanimljiv osvrt, izraziti svoje emocije i doživljaje te pokazati strast prema nogometu.</p>
                <p class="full column-mini-bottom-pad" data-aos="fade-right" data-aos-delay="2000">Najboljeg komentatora biraju sportski novinari redakcije Telesporta, a pobjednika objavljujemo 26.04.</p>
                <p class="full bold column-mini-bottom-pad" data-aos="fade-right" data-aos-delay="2500">Ulaznice za finale osigurao je Mastercard, službeni sponzor  UEFA Champions League.</p>
                <form class="full flex relative column-vertical-pad" id="uefa-form">
                    <div class="sixty flex column-mini-right-pad">
                        <label class="full" for="ime">Vaše ime i prezime</label>
                        <input type="text" class="full" id="ime" name="ime">
                    </div>
                    <div class="forty flex column-mini-left-pad">
                        <label class="full" for="rodjendan">Datum rođenja</label>
                        <input type="date" class="full" id="rodjendan" name="rodjendan">
                    </div>
                    <div class="full flex column-top-pad">
                        <label class="full" for="adresa">Adresa stanovanja</label>
                        <input type="text" class="full" id="adresa" name="adresa">
                    </div>
                    <div class="full flex column-top-pad">
                        <label class="full" for="kontakt">Kontakt</label>
                        <input type="text" class="full" id="kontakt" name="kontakt">
                    </div>
                    <div class="full flex column-top-pad">
                        <label class="full" for="partner">Ime i prezime osobe koju bi poveli sa sobom</label>
                        <input type="text" class="full" id="partner" name="partner">
                    </div>
                    <div class="full flex column-top-pad">
                        <label class="full" for="utakmica">Utakmica koju komentirate</label>
                        <input type="text" class="full" id="utakmica" name="utakmica">
                    </div>
                    <div class="full flex column-top-pad">
                        <label class="full" for="komentar">Komentar</label>
                        <textarea class="full" id="komentar" name="komentar"></textarea>
                    </div>
                    <div class="full flex column-top-pad">
                        <input type="checkbox" id="prihvacam" name="prihvacam" value="">
                        <label for="prihvacam" class="mobile-70 clickable">Prihvaćam <a href="https://www.telegram.hr/promo/pravila-nagradnog-natjecaja/" target="_blank">pravila privatnosti i uvjete nagradnog natječaja.</a></label>
                    </div>
                    <div class="full flex column-top-pad">
                        <div class="animate flex relative button clickable" id="submit-form">Pošalji komentar</div>
                    </div>
                    <p class="full center-text column-top-pad hide" id="warning">Morate prihvatiti pravila privatnost i uvjete.</p>
                </form>
                <p class="full center-text column-top-pad hide" id="success">Uspjeh! Vaša prijava je predana.</p>
            </div>
        </section>
        <!-- Footer -->
        <footer class="full flex relative">
            <div class="container text-container flex relative column-full-pad">
                <div class="full center logo-line">
                    <img src="<?php echo $native_path ?>assets/logos/tg_studio_horizontal_white.png" alt="TG Studio logo" />
                </div>
                <p class="full center-text column-top-pad">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom i po najvišim uredničkim standardima Telegram Media Grupe.</p>
            </div>
        </footer>
        <?php wp_footer(); 
        ?>
    </div>
</body>

</html>