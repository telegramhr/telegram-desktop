<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/borotalco/ljeto/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css" type="text/css" />
    <!--<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>-->
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet"> 
</head>
<div class="main-container flex">
    <div class="native-hero full flex relative center">
        <a href="https://super1.telegram.hr/" class="header-logos full">
                <img src="<?php echo $native_path ?>img/super1_logo_white.svg" class="animate" alt="Super1 Logo">
        </a>
        <img src="<?php echo $native_path ?>img/wavy_overlay.svg" class="wavy-overlay" aria-hidden="true">
        <img src="<?php echo $native_path ?>img/borotalco_header_img.jpg" class="native-hero-image" aria-hidden="true">
        <div class="container flex">
            <div class="native-title two-thirds flex flex-responsive">
                <h1 class="full"><span class="big-boi">Super njega</span> <br>za super vruće dane</h2>
                <h2 class="full">Borotalco. Tvoj ljetni zaštitnik</h1>
            </div>
        </div>
    </div>
    <section class="container flex">
        <div class="third flex flex-responsive">
            <a class="flex article" href="https://super1.telegram.hr/look/kroz-pet-sam-dana-testirala-razlicite-dezodoranse-evo-kakvima-su-se-pokazali-na-ljetnim-vrucinama/" target="_blank">
                <img src="https://super1.telegram.hr/wp-content/uploads/sites/3/2020/07/Super1_Borotalco-2-880x520@2x.jpg" aria-hidden="true">
                <div class="article-pad full flex">
                    <h3 class="overtitle">Beauty test</h3>
                    <h2 class="full">Kroz pet sam dana testirala različite dezodoranse. Evo kakvima su se pokazali na ljetnim vrućinama</h2>
                    <p>Svakog se ljeta bacim u potragu za dezodoransom u koji ću se moći pouzdati čak i u danima najzahtjevnijeg tempa i neumoljivih temperatura...</p>
                    <div class="full flex"><div class="cta">Pročitaj više</div></div>
                </div>
            </a>
        </div>
        <div class="third flex flex-responsive">
            <a class="flex article" href="https://super1.telegram.hr/look/upoznajte-mikrotalk-najboljeg-saveznika-u-borbi-protiv-znoja/" target="_blank">
                <img src="https://super1.telegram.hr/wp-content/uploads/sites/3/2020/07/2020_7_20_naslovna11.jpg" aria-hidden="true">
                <div class="article-pad full flex">
                    <h3 class="overtitle">Ljepota</h3>
                    <h2 class="full">Upoznajte mikrotalk, najboljeg saveznika u borbi protiv znoja</h2>
                    <p>Najbolje rješenje protiv znoja je mikrotalk.<br> Evo što znamo o tom fino mljevenom prahu koji dolazi iz minerala...</p>
                    <div class="full flex"><div class="cta">Pročitaj više</div></div>
                </div>
            </a>
        </div>
        <div class="third flex flex-responsive">
            <a class="flex article" href="https://super1.telegram.hr/look/kako-se-muskarci-a-kako-zene-bore-protiv-znojenja-iskustva-su-vrlo-zanimljiva/" target="_blank">
                <img src="https://super1.telegram.hr/wp-content/uploads/sites/3/2020/07/freestocks-Y3wqowUQXnc-unsplash-880x520@2x.jpg" aria-hidden="true">
                <div class="article-pad full flex">
                    <h3 class="overtitle">Ljepota</h3>
                    <h2 class="full">Kako se muškarci, a kako žene bore protiv znojenja? Iskustva su vrlo zanimljiva</h2>
                    <p>Pitale smo dvije žene i dva muškarca različitih dobi kako se ovog ljeta bore protiv vrućine i koji su im omiljeni beauty proizvodi...</p>
                    <div class="full flex"><div class="cta">Pročitaj više</div></div>
                </div>
            </a>
        </div>
    </section>
    <section class="full native-signature">
        <div class="container flex">
            <div class="full center">
                <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
            </div>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Borotalco i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
    </section>
</div>

<?php wp_footer(); ?>
</body>

</html>