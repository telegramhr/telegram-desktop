<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/bayer/supradyn/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"> 
</head>
<div class="main-container flex">
    <div class="native-hero full flex relative center">
        <a href="https://super1.telegram.hr/" class="header-logos center full">
            <img src="<?php echo $native_path ?>img/super1_logo_white.svg" alt="Super1 Logo">
        </a>
        <video preload="auto" autoplay="" muted="" loop="" playsinline src="<?php echo $native_path ?>img/header_supradyn.mp4" type="video/mp4"></video>
        <div class="native-title flex flex-responsive">
            <h1 class="full center-text">Digni svoju energiju. Već danas</h1>
            <h2 class="full center-text">Budi super uz Supradyn<span class="tm">&reg;</span></h2>
        </div>
    </div>
    <div class="container flex">
        <a href="https://super1.telegram.hr/fit/moj-fitnes-energy-izazov-kako-sam-se-pokrenula-nakon-nekoliko-mjeseci-ljencarenja/" target="_blank" class="article article-1">
            <div class="article-content center">
                <div class="full">
                    <h2 class="full center-text">Moj fitnes energy izazov: kako sam se pokrenula nakon nekoliko mjeseci ljenčarenja</h2>
                    <div class="full center"><div class="cta animate">Saznaj više</div></div>
                </div>
            </div>
        </a>
        <a href="https://super1.telegram.hr/fit/mnogi-od-nas-intenzivno-razmisljaju-kako-osnaziti-imunitet-poznata-nutricionistica-odgovorila-nam-je-na-najcesce-dvojbe/" target="_blank" class="article article-2">
            <div class="article-content center">
                <div class="full">
                    <h2 class="full center-text">Mnogi od nas intenzivno razmišljaju kako osnažiti imunitet. Poznata nutricionistica odgovorila nam je na najčešće dvojbe</h2>
                    <div class="full center"><div class="cta animate">Saznaj više</div></div>
                </div>
            </div>
        </a>
    </div>
    <div class="full flex infographic">
        <div class="container center">
            <video preload="auto" autoplay="" muted="" loop="" playsinline src="https://super1.telegram.hr/wp-content/uploads/sites/3/2020/10/tg_animographic_supradyn_7.mp4" type="video/mp4"></video>
        </div>
    </div>
    <div class="container flex">
        <a href="https://super1.telegram.hr/fit/znamo-odgovore-na-vazna-pitanja-o-imunitetu-i-energiji/" target="_blank" class="article article-3">
            <div class="article-content center">
                <div class="full">
                    <h2 class="full center-text">Znamo odgovore na važna pitanja o imunitetu i energiji</h2>
                    <div class="full center"><div class="cta animate">Saznaj više</div></div>
                </div>
            </div>
        </a>
        <a href="https://super1.telegram.hr/fit/provjeri-koliko-si-fit-i-sto-bi-mogla-vjezbati-ove-jeseni/" target="_blank" class="article article-4">
            <div class="article-content center">
                <div class="full">
                    <h2 class="full center-text">Želiš se pokrenuti, a ne znaš kako? Provjeri koliko si fit i što bi mogla vježbati ove jeseni</h2>
                    <div class="full center"><div class="cta animate">Saznaj više</div></div>
                </div>
            </div>
        </a>
        <a href="https://super1.telegram.hr/fit/ujutro-tesko-ustajete-i-nemate-volje-za-nista-napunite-se-energijom-i-osnazite-tijelo/" target="_blank" class="article article-5">
            <div class="article-content center">
                <div class="full">
                    <h2 class="full center-text">Ujutro teško ustajete i nemate volje za ništa? Napunite se energijom i osnažite tijelo </h2>
                    <div class="full center"><div class="cta animate">Saznaj više</div></div>
                </div>
            </div>
        </a>
    </div>
    <section class="full native-signature">
        <div class="container flex">
            <div class="full center">
                <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
                <img class="tg-studio" src="<?php echo $native_path ?>img/bayer.png" alt="TG Studio logo" />
            </div>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Bayer i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
    </section>
</div>

<?php wp_footer(); ?>
</body>

</html>