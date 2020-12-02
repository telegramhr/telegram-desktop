<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = 'https://www.telegram.hr/wp-content/themes/telegram2-desktop/templates/native/mastercard/smart_city/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=2.0" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600;700&display=swap" rel="stylesheet"> 
</head>
<div class="main-container flex">
    <div class="native-hero full flex relative center">
        <div class="full flex native-visual">
            <video preload="auto" autoplay="" muted="" loop="">
                <source src="<?php echo $native_path; ?>img/tram.mp4" type="video/mp4">
            </video>
        </div>
        <div class="full native-title flex">
            <h1 class="full"><span class="superbold mc-orange">SmartCity rješenja</span> i njihov značaj u urban developmentu <span class="superbold mc-blue">hrvatskih gradova</span></h1>
        </div>
    </div>
    <div class="full article article-1">
        <div class="flex flex-responsive article-text center">
            <h2 class="full">U 150 svjetskih gradova javni prijevoz plaća se beskontaktno. Pitali smo naše građane što misle o tome</h2>
            <div class="full flex">
                <a class="cta" href="https://www.telegram.hr/partneri/u-150-svjetskih-gradova-javni-prijevoz-placa-se-beskontaktno-pitali-smo-nase-gradane-sto-misle-o-tome/" target="_blank">Saznaj više</a>
            </div>
        </div>
    </div>
    <div class="container center white-space">
        <iframe class="yt-embed"width="1024" height="576" src="https://www.youtube-nocookie.com/embed/F8FVnp1gUjA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="full article article-2">
        <div class="flex flex-responsive article-text center">
            <h2 class="full">London i Prag uveli su inovativna rješenja u javnom prijevozu. Evo zašto bi to bilo super i za Hrvatsku</h2>
            <div class="full flex">
                <a class="cta" href="https://www.telegram.hr/partneri/u-150-svjetskih-gradova-javni-prijevoz-placa-se-beskontaktno-pitali-smo-nase-gradane-sto-misle-o-tome/" target="_blank">Saznaj više</a>
            </div>
        </div>
    </div>
    <div class="container center desktop-only white-space">
        <img src="<?php echo $native_path; ?>img/tg_mastercard_desktop.png" aria-hidden="true">
    </div>
    <div class="full mobile-only white-space">
        <img src="<?php echo $native_path; ?>img/tg_mastercard_mobile.png" aria-hidden="true">
    </div>
    <section class="full native-signature">
        <div class="container flex">
            <div class="full center">
                <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
            </div>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Mastercard i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
    </section>
</div>

<?php wp_footer(); ?>
</body>

</html>