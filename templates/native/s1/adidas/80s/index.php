<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/adidas/80s/';
//$native_path = 'http://localhost/super1-theme/templates/native/adidas/80s/';

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); 
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>aos.css" type="text/css" />
    <script src="<?php echo $native_path ?>aos.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css?ver=2.4" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=2.50" type="text/css" />
    <script src="<?php echo $native_path ?>functions.js?ver=2.4"></script>
</head>

<body>
    <div class="main-container">
        <div class="full relative center full-height introtv">
            <video src="<?php echo $native_path ?>img/adidas_bg_loop.mp4" autoplay loop muted playsinline></video>
            <div class="container relative flex">
                <div class="full center"><img src="<?php echo $native_path ?>img/adidasOriginalsWhite.png" alt="adidas original logo" class="adidas"></div>
                <h1 class="full center-text">Made in the 80's</h1>
                <div class="full center"><div class="cta" onclick="$('.ytwindow').fadeIn();">Pogledaj video</div></div>
                <div href="https://super1.telegram.hr" target="_blank" class="flex windowpic ytwindow">
                    <div class="windowpic-title">made-in-the-80s.mov</div>
                    <div class="exit">X</div>
                    <div class="full yt-embed">
                        <iframe src="https://www.youtube-nocookie.com/embed/U0bdPma4SBk" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <a class="arrow-indicator center" href="#main-menu">
                <div></div>
            </a>
        </div>
        <div class="full relative center intro-screen">
            <div class="container flex">
                <p class="full center-text" data-aos="fade-up" data-aos-delay="750">Oni su djeca osamdesetih, a ovo su tenisice koje su obilježile desetljeće. Spojili smo ih u zajedničku priču iz koje crpimo inspiraciju za nove modne izlete. Kreativci Dario Dunaj, Toni Mažuranić i Marko Ješovnik odveli su nas na retro avanturu.</p>
            </div>
        </div>
        <div class="full relative center main-menu" id="main-menu">
            <div class="full flex people-select stretch">
                <div class="third flex-responsive center relative">
                    <div class="flex windowpic dario" data-aos="fade-right" data-aos-delay="500">
                        <div class="windowpic-title">dario-dunaj.bmp</div>
                        <div class="exit">X</div>
                        <a href="https://super1.telegram.hr/look/dario-dunaj-majstor-dokumentarne-i-street-fotografije-otkrio-nam-je-kako-su-ga-kreativno-oblikovale-80-e/" target="_blank" class="full flex">
                            <div class="windowpic-img">
                                <img src="<?php echo $native_path ?>img/dario1.jpg">
                                <img src="<?php echo $native_path ?>img/dario2.jpg">
                                <img src="<?php echo $native_path ?>img/dario3.jpg">
                            </div>
                            <div class="full windowpic-quote">
                                <p class="full center-text">“Mislim da estetika filmografije tog doba, barem filmova koji su meni bili impresivni, definitivno utječe na pojam kako doživljavaš i centriraš glavnog lika, pristup snimanju i kadrovima.” Dario D.</p>
                                <div class="full center">
                                    <div class="cta">Pročitaj više</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="menu-selection" onclick="$('.dario').show();">Dario Dunaj</div>
                </div>
                <div class="third flex-responsive center relative">
                    <div class="flex windowpic toni" data-aos="fade-right" data-aos-delay="1000">
                        <div class="windowpic-title">toni-mazuranic.bmp</div>
                        <div class="exit">X</div>
                        <a href="https://super1.telegram.hr/relax/akademska-slikarica-i-tattoo-majstorica-toni-mazuranic-o-utjecaju-80-ih-godina-na-njezin-stil/" target="_blank" class="full flex">
                            <div class="windowpic-img">
                                <img src="<?php echo $native_path ?>img/toni1.jpg">
                                <img src="<?php echo $native_path ?>img/toni2.jpg">
                                <img src="<?php echo $native_path ?>img/toni3.jpg">
                            </div>
                            <div class="full windowpic-quote">
                                <p class="full center-text">“Ne samo da su bile eklektične nego su u svakoj stilskoj kategoriji išle do kraja. Imaju tu dramu, šarenilo i to se protezalo kroz modu, glazbu i sve ostalo. Mislim da su mi baš zato posebne.” Toni M.</p>
                                <div class="full center">
                                    <div class="cta">Pročitaj više</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="menu-selection" onclick="$('.toni').show();">Toni Mažuranić</div>
                </div>
                <div class="third flex-responsive center relative">
                    <div class="flex windowpic marko" data-aos="fade-right" data-aos-delay="1500">
                        <div class="windowpic-title">marko-jesovnik.bmp</div>
                        <div class="exit">X</div>
                        <a href="https://super1.telegram.hr/relax/marko-jesovnik-poznatiji-kao-dj-yesh-otkrio-nam-gdje-su-ga-80-e-glazbeno-odnijele/" target="_blank" class="full flex">
                            <div class="windowpic-img">
                                <img src="<?php echo $native_path ?>img/marko1.jpg">
                                <img src="<?php echo $native_path ?>img/marko2.jpg">
                                <img src="<?php echo $native_path ?>img/marko3.jpg">
                            </div>
                            <div class="full windowpic-quote">
                                <p class="full center-text">“Ono što mi je tada bilo smiješno, glupo ili dosadno u kontekstu mjuze i mode danas mi često otvara neka nova vrata interesa i veseli me.” Marko J.</p>
                                <div class="full center">
                                    <div class="cta">Pročitaj više</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="menu-selection" onclick="$('.marko').show();">Marko Ješovnik</div>
                </div>
            </div>


        </div>
        <img src="<?php echo $native_path ?>img/adidas_mobile_kolaz.jpg?ver=3.0" class="mobile-only">
        <section class="full native-signature">
            <div class="container flex">
                <div class="full center">
                    <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
                </div>
                <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom adidas i po najvišim uredničkim standardima Telegram Media Grupe.</p>
            </div>
        </section>
    </div>
    <?php wp_footer(); 
    ?>
</body>

</html>