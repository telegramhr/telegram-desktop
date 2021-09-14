<!DOCTYPE html>
<html lang="hr">

<?php
//$native_path = get_stylesheet_directory_uri() . '/templates/native/grawe/supermia/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/grawe/supermia/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/grawe/supermia/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/grawe/supermia/';

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); 
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://use.typekit.net/yeg5fde.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>aos.css" type="text/css" />
    <script src="<?php echo $native_path ?>aos.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=2.1" type="text/css" />
    <script src="<?php echo $native_path ?>functions.js"></script>
</head>
<div class="main-container flex">
    <div class="native-hero full flex relative center" style="background-image: url('<?php echo $native_path ?>img/math.svg');">
        <div class="container flex stretch">
            <div class="native-title half center flex-responsive main-color-text">
                <div class="full flex">
                    <h3 class="overtitle" data-aos="fade-right">Školica financija</h3>
                    <h1 class="full" data-aos="fade-right" data-aos-delay="500">Što kažete na opušteniju svakodnevicu?</h1>
                    <p class="full" data-aos="fade-right" data-aos-delay="1000">Super Ema će vam u tome pomoći. Za početak budite nekoliko minuta u trenutku uz Super Ema igricu. Što donosi sutra? O tome ćemo nakon opuštanja.</p>
                    <div class="flex hero-partner" data-aos="fade-right" data-aos-delay="1500">
                        <span>Powered by:</span> <img src="<?php echo $native_path ?>img/grawe.svg" alt="Grawe logo" />
                    </div>
                </div>
            </div>
            <div class="native-visual half flex-responsive" data-aos="fade-left">
                <img src="<?php echo $native_path ?>img/supermia1.png" alt="Grawe Super Ema" />
            </div>
        </div>
    </div>
    <img src="<?php echo $native_path ?>img/green_blob_top.svg" class="blob-top" aria-hidden="true" />
    <div class="full flex main-color-bg relative">
        <div class="container relative flex game-segment">
            <h2 class="full center-text" data-aos="fade-up">Zaigraj Super Ema videoigru</h2>
            <p class="full center-text" data-aos="fade-up" data-aos-delay="1000">Istraži mali isječak Zagreba pun skrivenih kovanica. Možeš li sakupiti svih 20?</p>
        </div>
        <div class="container videogame-container relative flex center">
            <img src="<?php echo $native_path ?>img/line_pointer_3.svg" class="linepointer3 desktop-only" aria-hidden="true" />
            <iframe class="videogame" width="720" height="960" src="<?php echo $native_path ?>videogame/index.html"></iframe>
        </div>
    </div>
    <img src="<?php echo $native_path ?>img/green_blob_bottom.svg" class="blob-bottom" aria-hidden="true" />
    <div class="native-hero after-blob full flex relative center" style="background-image: url('<?php echo $native_path ?>img/math.svg');">
        <div class="container flex stretch">
            <div class="native-title half center flex-responsive main-color-text">
                <div class="full flex">
                    <h3 class="overtitle" data-aos="fade-right">Abeceda financijske stabilnosti</h3>
                    <h1 class="full" data-aos="fade-right" data-aos-delay="500">Osigurajte svoju budućnost za opuštenu sadašnjost</h1>
                    <p class="full" data-aos="fade-right" data-aos-delay="1000">Sve to krije se u osobnoj financijskoj stabilnosti. Ne brinite, uz ovu školicu osnovnih pojmova vidjet ćete da financije nisu bauk. Uz ove korake vidjet ćete kako početi donositi dobre odluke za financijski stabilan život.</p>
                </div>
            </div>
            <div class="native-visual half flex-responsive column-left-pad ruka-send-up" data-aos="fade-left">
                <img src="<?php echo $native_path ?>img/ruka.png" alt="Ruka s novčićima" />
            </div>
        </div>
    </div>
    <img src="<?php echo $native_path ?>img/pink_blob_top.svg" class="blob-top2" aria-hidden="true" />
    <div class="full flex pink-section relative">
        <div class="container relative flex">
            <div class="pink-section-content relative" data-aos="fade-up">
                <img src="<?php echo $native_path ?>img/stabilnost.png" alt="Grawe financijska stabilnost" />
                <h3 class="overtitle">Osobna financijska stabilnost?</h3>
                <p class="full">To je sigurnost u svoje osobne financijske resurse. Povjerenje da možemo nadvladati izvanredne financijske izazove.</p>
                <p class="full bold">Zašto je važna?</p>
                <p class="full">Uz nju smo spremni na neočekivano - omogućava nam bezbrižniju svakodnevicu jer znamo kako se suočiti s financijskim izazovima.</p>
                <p class="full">Manje problema s financijama omogućava veći fokus na one stvari u životu u kojima želimo uživati.</p>
                <img src="<?php echo $native_path ?>img/line_pointer_2.svg" class="linepointer2 desktop-only hide" aria-hidden="true" />
            </div>
        </div>
    </div>
    <img src="<?php echo $native_path ?>img/pink_blob_bottom.svg" class="blob-bottom" aria-hidden="true" />
    <div class="full flex relative mobile-only" data-aos="fade-up">
        <img src="<?php echo $native_path ?>img/infografika_grawe_mobile.svg?ver=8.0" aria-hidden="true" class="mobile-infographic" />
    </div>
    <div class="full flex relative desktop-only">
        <div class="full main-color-bg flex relative desktop-infographic-1">
            <div class="container relative flex">
                <img src="<?php echo $native_path ?>img/infografika_grawe_1.svg?ver=5.0" aria-hidden="true"  data-aos="fade-up" data-aos-delay="750" />
            </div>
            <img src="<?php echo $native_path ?>img/lightpink_blob_top.svg" class="lightpink-blob-top" aria-hidden="true" />
        </div>
        <div class="full flex lightpink-section relative desktop-infographic-2">
            <div class="container relative flex">
                <img src="<?php echo $native_path ?>img/infografika_grawe_2.svg?ver=5.0" aria-hidden="true" data-aos="fade-up" data-aos-delay="750" />
            </div>
        </div>
        <img src="<?php echo $native_path ?>img/pink_blob_top.svg" class="blob-top2" aria-hidden="true" />
        <div class="full flex pink-bg relative desktop-infographic-3">
            <div class="container relative flex">
                <img src="<?php echo $native_path ?>img/infografika_grawe_3.svg?ver=5.0" aria-hidden="true"  data-aos="fade-up" data-aos-delay="750" />
            </div>
        </div>
        <img src="<?php echo $native_path ?>img/pink_blob_bottom.svg" class="blob-bottom" aria-hidden="true" />
        <div class="full flex main-color-bg relative desktop-infographic-4">
            <div class="container relative flex">
                <img src="<?php echo $native_path ?>img/infografika_grawe_4.svg?ver=5.0" aria-hidden="true" data-aos="fade-up" data-aos-delay="750" />
            </div>
        </div>
        <img src="<?php echo $native_path ?>img/green_blob_bottom.svg" class="blob-bottom" aria-hidden="true" />
        <div class="full flex relative desktop-infographic-5" style="background-image: url('<?php echo $native_path ?>img/math.svg');">
            <div class="container relative flex" data-aos="fade-up" data-aos-delay="750">
                <img src="<?php echo $native_path ?>img/infografika_grawe_5.svg?ver=5.0" aria-hidden="true" />
            </div>
        </div>
    </div>
    <img src="<?php echo $native_path ?>img/green_blob_top.svg" class="blob-top blob-top-mobile" aria-hidden="true" />
        <div class="full flex main-color-bg relative">
            <div class="container relative flex articles-container">
                <h2 class="full center-text" data-aos="fade-up">Još sadržaja o financijskoj stabilnosti</h2>
                <a class="third flex-responsive article hide" data-aos="fade-up" data-aos-delay="750">
                    <img src="<?php echo $native_path ?>img/grey_placeholder.png" aria-hidden="true" />
                    <h3 class="full flex">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                    <div class="cta animate">Saznaj više</div>
                </a>
                <a class="third flex-responsive article hide" data-aos="fade-up" data-aos-delay="1250">
                    <img src="<?php echo $native_path ?>img/grey_placeholder.png" aria-hidden="true" />
                    <h3 class="full flex">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                    <div class="cta animate">Saznaj više</div>
                </a>
                <a class="third flex-responsive article hide" data-aos="fade-up" data-aos-delay="1750">
                    <img src="<?php echo $native_path ?>img/grey_placeholder.png" aria-hidden="true" />
                    <h3 class="full flex">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                    <div class="cta animate">Saznaj više</div>
                </a>
                <p class="full center-text bottomad">Više informacija o ulozi osiguranja u očuvanju financijske pismenosti pronađite na stranici <a href="https://sigurnijesutra.huo.hr/" target="_blank">sigurnije sutra.</a></p>
            </div>
        </div>
        <img src="<?php echo $native_path ?>img/green_blob_bottom.svg" class="blob-bottom" aria-hidden="true" />
        <section class="full native-signature">
            <div class="container flex">
                <div class="full center">
                    <img class="grawe" src="<?php echo $native_path ?>img/grawe.svg" alt="Grawe logo" />
                </div>
                <p class="full center-text">Ovaj sadržaj kreiran je u suradnji s GRAWE-om. Osigurajte si sigurno sutra i živite opuštenije danas. Projektom “Danas živim, sutra imam” GRAWE nam kroz informiranje želi pomoći u samostalnom donošenju odgovornih i dobrih odluka uz koje ćemo postati, biti i ostati financijski stabilni..</p>
                <div class="full center">
                    <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
                </div>
            </div>
        </section>
</div>
<?php wp_footer(); 
?>
</body>

</html>