<!DOCTYPE html>
<html lang="hr">

<?php
//$native_path = get_stylesheet_directory_uri() . '/templates/native/superone/style_swap/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/superone/style_swap/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/superone/style_swap/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/superone/style_swap/';
//$native_path = 'http://localhost/style_swap/';

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); 
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css?ver=3.00" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=3.22" type="text/css" />
</head>

<body>
    <nav class="side-nav center">
        <a class="full" href="#uvod">
            <img class="logo" src="<?php echo $native_path ?>img/s1_logo_clean_noline_white.svg" alt="Super1 logo" />
            <h3 class="full">Style Swap</h3>
        </a>
        <a class="full" href="#nina">Nina & Aida</a>
        <a class="full" href="#poklon">Osvoji Poklon Bon</a>
        <a class="full flex partners" href="#partneri">
            <p class="full">Partner</p>
            <img src="<?php echo $native_path ?>img/zalando.png?ver=2.0" alt="Zalando logo" />
        </a>
    </nav>
    <div class="main-container flex relative">
        <header class="full center relative slide header-bg" id="uvod">
            <div class="full center container center-text relative header-text">
                <img class="logo" src="<?php echo $native_path ?>img/s1_logo_clean_noline.svg" alt="Super1 logo" />
                <h1 class="full uppercase">Style Swap</h1>
                <p class="full header-p">Pronašli smo majke i kćeri s nepomirljivim stilovima odijevanja i nagovorili ih na neodoljivi izazov - na jedan dan zamijenile su odjevne kombinacije, a svi smo se zajedno super zabavili.</p>
                <p class="full bold">Scrollaj za više</p>
            </div>
            <div class="arrow-indicator center center-text">
                <div></div>
            </div>
        </header>
        <!-- Nina i Aida -->
        <a class="full flex relative slide stretch half-slide" id="nina">
            <div class="half center flex flex-responsive white-bg mobile-order-1">
                <div class="article-text relative">
                    <h3 class="full animate">Nina & Aida</h3>
                    <h2 class="full animate">Aidi je na prvom mjestu udobnost, a Nini vintage elegancija. Kreirale su jedna drugoj tri outfita.</h2>
                    <div class=" flex relative article-author">
                        <img src="https://images.telegram.hr/wWCPv8rC8Izz54CH51LzfcZvgLCztz5qOBM6i_IVbWI/preset:author/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjAvMDgvbml2ZXMucG5n.webp">
                        <h3 class="animate">Nives Bošnjak</h3>
                    </div>
                    <div class="cta slide-bottom-right">Pročitaj priču ></div>
                </div>
            </div>
            <div class="half flex flex-responsive relative mobile-order-2">
                <img src="<?php echo $native_path ?>/img/styleswap1.jpg" aria-hidden="true" class="bg-img">
            </div>
        </a>
        <!-- Jadranka i Vanda -->
        <?php /*
        <a class="full flex relative slide stretch half-slide" id="jadranka">
            <div class="half flex flex-responsive relative mobile-order-2">
                <img src="<?php echo $native_path ?>/img/grey_placeholder.png" aria-hidden="true" class="bg-img">
            </div>
            <div class="half center flex flex-responsive mobile-order-1">
                <div class="article-text relative">
                    <h3 class="full animate">Jadranka & Vanda</h3>
                    <h2 class="full animate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tincidunt turpis orci, vel scelerisque lorem mollis in. Sed mollis egestas scelerisque.</h2>
                    <div class=" flex relative article-author">
                        <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png">
                        <h3 class="animate">Mateja Ježovita</h3>
                    </div>
                    <div class="cta slide-bottom-right">Pročitaj priču ></div>
                </div>
            </div>
        </a>
        */ ?>
        <div class="full flex relative slide stretch half-slide" id="poklon">
            <div class="half center flex flex-responsive white-bg mobile-order-1">
                <div class="article-text relative">
                    <h3 class="full animate">Zalando te nagrađuje</h3>
                    <h2 class="full animate">Objavi na Instagramu fotografiju svoje mame i sebe u zamijenjenim stilovima uz hashtag #styleswap, tagiraj @Super1.hr i @Zalando i osvoji jedan od dva poklon bona u vrijednosti od 50 i 70 eura</h2>
                </div>
            </div>
            <div class="half flex flex-responsive relative mobile-order-2">
                <img src="<?php echo $native_path ?>/img/zalando_kolaz.jpg" aria-hidden="true" class="bg-img">
            </div>
        </div>
        <div class="full center relative slide stretch" id="partneri">
            <div class="full flex flex-responsive">
                <h3 class="full center-text">Partner</h3>
                <div class="full center"><img src="<?php echo $native_path ?>img/zalando.png?ver=2.0" alt="Zalando logo" /></div>
            </div>
        </div>
    </div>
    <?php wp_footer(); 
    ?>
</body>

</html>