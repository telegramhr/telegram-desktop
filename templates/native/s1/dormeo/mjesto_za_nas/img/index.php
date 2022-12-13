<!DOCTYPE html>
<html lang="hr">
<?php
    $native_path = get_stylesheet_directory_uri().'/templates/native/dormeo/mjesto_za_nas/';
    //$native_path = 'http://localhost/super1-theme/templates/native/dormeo/mjesto_za_nas/';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); 
    ?>
    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path; ?>js/aos.css?ver=1.0" type="text/css" />
    <script src="<?php echo $native_path; ?>js/aos.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path; ?>style.css?ver=1.7" type="text/css" />
</head>

<body>
    <div class="slider">
        <div class="slide slide-1">
            <div class="slide-content full flex center">
                <h1 class="full flex">
                    <span class="full center-text" data-aos="fade-down" data-aos-duration="500">Udobnost je stvarna. Udobnost je mjesto za nas</span>
                    <span class="full center-text" data-aos="fade-down" data-aos-delay="750" data-aos-duration="1000">I ovo je mjesto za nas</span>
                </h1>
                <div class="text-container" data-aos="fade-up" data-aos-delay="2000" data-aos-duration="1000">
                    <h2 class="full center-text">Svako mjesto je mjesto za nas. Za stvaranje novih uspomena, savršenih trenutaka i putovanja koja ćemo dugo pamtiti. Svako je mjesto za nas ako smo sa svojim bližnjima ili ako u novim prilikama spoznajemo sebe i stvaramo zdravu vezu sa svojim ja. Otkrivamo zanimljive priče i putovanja koja mogu postati dio vaše stvarnosti, a otkrivamo kako na raznim mjestima osigurati savršenu udobnost. </h2>
                </div>
            </div>
            
            <div class="img-container full center"  style="background-image: url('<?php echo $native_path; ?>img/Dora1.jpg');"></div>
            <div class="go-down full center"><img src="<?php echo $native_path; ?>img/godown.png" alt="Arrow pointing down" /></div>
        </div>
        <div class="slide slide-2 flex">
            <div class="container flex">
                <div class="img-container" style="background-image: url('<?php echo $native_path; ?>img/slika1.jpg');">
                </div>
                <div class="slide-content center">
                    <a target="_blank" href="https://super1.telegram.hr/relax/ova-sestorka-godinama-ljetuje-na-divlje-i-spava-u-satorima-jednom-su-upali-u-minsko-polje/" class="full flex">
                        <div class="full">
                            <h4>Čuvena putovanja</h4>
                        </div>
                        <h2>Ova šestorka godinama ljetuje na divlje i spava u šatorima. Jednom su upali u minsko polje</h2>
                        <div class="cta animate">Pročitaj više</div>
                        
                    </a>
                </div>
            </div>
        </div>
        <div class="slide slide-2 slide-yellow flex">
            <div class="container flex">
                <div class="img-container" style="background-image: url('<?php echo $native_path; ?>img/dora.jpg');">
                </div>
                <div class="slide-content center">
                    <a target="_blank" href="" class="full flex">
                        <div class="full">
                            <h4>Čuvena putovanja</h4>
                        </div>
                        <h2>Dora putuje i živi u svom van kamperu, možete li to napraviti vi?</h2>
                        <div class="cta animate">Pročitaj više</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="slide slide-2 flex">
            <div class="container flex">
                <div class="img-container" style="background-image: url('<?php echo $native_path; ?>img/slika3.jpg');">
                </div>
                <div class="slide-content center">
                    <a target="_blank" href="https://super1.telegram.hr/relax/evo-kako-se-pakiramo-ovo-ljeto-ovo-su-trikovi-za-pakiranje-koje-ne-zaobilazimo/" class="full flex">
                        <div class="full">
                            <h4>Organizacija putovanja</h4>
                        </div>
                        <h2>Evo kako se pakiramo ovo ljeto. Ovo su trikovi za pakiranje koje ne zaobilazimo</h2>
                        <div class="cta animate">Pročitaj više</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="slide full flex center">
            <div class="full container flex footer-container">
                <div class="full text-container center-text shoe-text hide">Da bi putovanja u prekrasne trenutke, pa gdje god oni bili, bila potpuna i baš po vašoj mjeri, predstavljamo Dormeo Aloa Vera nadmadrace</div>
                <div class="full flex">
                    <div class="credits center-text">
                        Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Reebok i po najvišim uredničkim standardima Telegram Media Grupe.
                    </div>
                    <div class="full center">
                        <img src="<?php echo $native_path; ?>img/tg_studio.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        AOS.init();
    </script>
    <?php wp_footer(); ?>
</body>

</html>