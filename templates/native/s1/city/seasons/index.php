<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/city/seasons/';
//$native_path = 'http://localhost/super1-theme/templates/native/city/seasons/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();
    ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=1.2" type="text/css" />
    <link rel="stylesheet" href="https://use.typekit.net/kgp1hpk.css">
</head>

<body>
    <div class="main-container">
        <header class="full flex">
            <div class="container relative flex">
                <h1 class="full center-text">Moja modna kapsula</h1>
                <h3 class="full center-text">Kroz četiri editorijala podijeljenih prema godišnjim dobima istražujemo sve mogućnosti kapsulne garderobe. Kako se bijela potkošulja uklapa u aktualne trendove za ljeto? Kakav oblik poprima mala crna haljina u jesenskim kolekcijama? Zašto je klasična prugasta majica ovog proljeća sve osim klasične? U svakoj sezoni istražujemo po tri kapsulna komada i kombiniramo ih s najmoćnijim trendovima sezone.</h3>
                <nav class="full flex inpage-menu">
                    <a class="cta" href="#proljece">Proljeće</a>
                    <a class="cta" href="#ljeto">Ljeto</a>
                    <a class="cta locked-cta" href="#jesen">Jesen</a>
                    <a class="cta locked-cta" href="#zima">Zima</a>
                </nav>
            </div>
        </header>

        <div class="full flex hero" id="proljece">
            <div class="full">
                <div class="container relative flex">
                    <h2 class="full center-text boja">Proljeće</h2>
                </div>
            </div>
        </div>
        <a class="full flex galerija-slika" target="_blank" href="https://super1.telegram.hr/look/otkrijte-kapsulnu-garderobu-za-proljece-koja-je-sve-samo-ne-monotona/">
            <div class="third flex-responsive flex relative">
                <img src="<?php echo $native_path; ?>img/proljece_1.jpg">
            </div>
            <div class="third flex-responsive flex relative">
                <img src="<?php echo $native_path; ?>img/proljece_2.jpg">
            </div>
            <div class="third flex-responsive flex relative">
                <img src="<?php echo $native_path; ?>img/proljece_3.jpg">
            </div>
            <div class="third flex-responsive flex relative">
                <img src="<?php echo $native_path; ?>img/proljece_infografika_1.jpg">
            </div>
            <div class="third flex-responsive flex relative">
                <img src="<?php echo $native_path; ?>img/proljece_infografika_2.jpg">
            </div>
            <div class="third flex-responsive flex relative">
                <img src="<?php echo $native_path; ?>img/proljece_infografika_3.jpg">
            </div>
        </a>
        <div class="full flex quote-section">
            <div class="container relative flex">
                <div class="full center"><a class="cta" target="_blank" href="https://super1.telegram.hr/look/otkrijte-kapsulnu-garderobu-za-proljece-koja-je-sve-samo-ne-monotona/">Pogledajte cijeli editorijal</a></div>
            </div>
        </div>

        <div class="full flex hero" id="ljeto">
            <div class="full">
                <div class="container relative flex">
                    <h2 class="full center-text boja">Ljeto</h2>
                </div>
            </div>
        </div>
        <a class="full flex galerija-slika" target="_blank" href="https://super1.telegram.hr/look/bijela-potkosulja-mini-suknja-i-oversized-kosulja-heroine-su-ljetne-garderobe-otkrijte-kako-ih-nositi/">
            <div class="third flex-responsive flex relative">
                <img src="<?php echo $native_path; ?>img/ljeto_1.jpg">
            </div>
            <div class="third flex-responsive flex relative">
                <img src="<?php echo $native_path; ?>img/ljeto_3.jpg">
            </div>
            <div class="third flex-responsive flex relative">
                <img src="<?php echo $native_path; ?>img/ljeto_2.jpg">
            </div>
            <div class="third flex-responsive flex relative">
                <img src="<?php echo $native_path; ?>img/ljeto_infografika_1.jpg">
            </div>
            <div class="third flex-responsive flex relative">
                <img src="<?php echo $native_path; ?>img/ljeto_infografika_2.jpg">
            </div>
            <div class="third flex-responsive flex relative">
                <img src="<?php echo $native_path; ?>img/ljeto_infografika_3.jpg?ver=2.0">
            </div>
        </a>
        <div class="full flex quote-section">
            <div class="container relative flex">
                <div class="full center"><a class="cta" target="_blank" href="https://super1.telegram.hr/look/bijela-potkosulja-mini-suknja-i-oversized-kosulja-heroine-su-ljetne-garderobe-otkrijte-kako-ih-nositi/">Pogledajte cijeli editorijal</a></div>
            </div>
        </div>

        <div class="full flex">
            <div class="container narrow-container flex relative">
                <section class="full native-signature">
                    <div class="container flex">
                        <div class="full center">
                            <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
                        </div>
                        <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s City Center one i po najvišim uredničkim standardima Telegram Media Grupe.</p>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php wp_footer();
    ?>
</body>

</html>