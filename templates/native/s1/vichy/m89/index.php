<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/vichy/m89/';
//$native_path = 'http://localhost/super1-theme/templates/native/vichy/m89/';

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $native_path ?>jquery.serialize-object.min.js"></script>
    <link rel="stylesheet" href="https://use.typekit.net/cal4som.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>aos.css" type="text/css" />
    <script src="<?php echo $native_path ?>aos.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css?ver=2.0" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=2.3" type="text/css" />
    <script src="<?php echo $native_path ?>functions.js?ver=2.2"></script>
</head>
<div class="main-container">
    <div class="native-hero full flex relative center">
        <div class="container native-title flex">
            <div class="full center hide"><img src="<?php echo $native_path ?>img/super1_logo.svg" alt="Logo"></div>
            <h3 class="full center-text overtitle" data-aos="fade-down" data-aos-delay="500">Super1 kreativni natječaj</h3>
            <h1 class="full center-text" data-aos="fade-up" data-aos-delay="1000">Budi snažna u svojoj koži!</h1>
            <h2 class="full center-text" data-aos="fade-up" data-aos-delay="1500">Brini o koži kroz cijelu godinu. Sudjeluj u kreativnom natječaju i osvoji godišnju zalihu Vichy Minéral 89 Boostera.</h2>
        </div>
        <div class="arrow-indicator center"><div></div></div>
        <video preload="auto" autoplay="" muted="" loop="" playsinline src="<?php echo $native_path ?>img/tg_header_vichy_m89.mp4" type="video/mp4"></video>
    </div>
    <div class="container flex content">
        <div class="full relative flex">
            <img src="<?php echo $native_path ?>img/tg_infographic_vichy_m89_bg.jpg" alt="Infografika">
            <img src="<?php echo $native_path ?>img/tg_infographic_vichy_m89_1.png" class="infographic-element" data-aos="fade-right" data-aos-delay="1000" aria-hidden="true">
            <img src="<?php echo $native_path ?>img/tg_infographic_vichy_m89_2.png" class="infographic-element" data-aos="fade-left" data-aos-delay="2000" aria-hidden="true">
            <img src="<?php echo $native_path ?>img/tg_infographic_vichy_m89_3.png" class="infographic-element" data-aos="fade-right" data-aos-delay="3000" aria-hidden="true">
            <img src="<?php echo $native_path ?>img/tg_infographic_vichy_m89_4.png" class="infographic-element" data-aos="fade-left" data-aos-delay="3000" aria-hidden="true">
        </div>
        <p class="full disclaimer shoo-bottom center-text">*Kliničko ispitivanje na 52 žene, 2 nanošenja dnevno tijekom 4 tjedna.</p>
        <p class="intro" data-aos="fade-up" data-aos-delay="500">S jutrom dolaze nove spoznaje, a osjećaj suhoće na koži utječe na cjelodnevno raspoloženje. Osjetljivost i zategnutost nisu naši saveznici, no jedan korak u ritualu njege može preokrenuti cijelu priču. <a href="https://www.vichy.hr/lice/snaznija-i-punija-koza-sa-hijaluronskom-kiselinom-mineral-89/p23988.aspx?utm_source=super1-microsite&utm_medium=referral&utm_content=vic_skfc_mineral_text_aw&utm_campaign=vic_skfc_mineral_relaunch_booster " target="_blank">Vichy Minéral 89 Booster</a> hidratizira kožu te osnažuje njezinu barijeru na najnježniji način. Ona svaki dan postaje sve jača u borbi protiv štetnih utjecaja; zagađenja, stresa i umora. Zato uživaj u laganoj teksturi ovog proizvoda i (p)ostani snažna u svojoj koži.</p>
        <p class="full hide" data-aos="fade-up" data-aos-delay="1500"><b>GIVEAWAY:</b> Sve što trebaš napraviti je odgovoriti na nekoliko pitanja jer najkreativniju prijavu nagrađujemo godišnjom zalihom Vichy Minéral 89 Boostera (18x)! A 10 čitateljica osvaja utješnu nagradu - 1x Vichy Minéral 89 Booster.</p>
        <p class="full" data-aos="fade-up" data-aos-delay="1500">Hvala vam na sudjelovanju u nagradnom natječaju. Glavnu nagradu, godišnju zalihu Vichy Minéral 89 Boostera (18x), osvojila je <b>Maja Grgurević</b> dok je ostalih 10 najkreativnijih čitateljica osvojilo utješnu nagradu – 1 x Vichy Minéral 89 Booster:
        <br>Ivana Mandić
        <br>Ines Santovac
        <br>Ines Puzin
        <br>Sandra Jurković
        <br>Suzana Žeravica Milković
        <br>Stella Gabelić
        <br>Kristina Vuglenović
        <br>Željka Serdar
        <br>Maja Postrimovski
        <br>Ina Periša</p>
        <div class="full flex notice second-notice hide">
            <p>Lorem Ipsum Dolor Sit Amet</p>
        </div>
    </div>
    <section class="full native-signature">
        <div class="container flex">
            <div class="full center">
                <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
            </div>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Vichy i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
    </section>
    <script>
        var $form = jQuery('form#vichy-apply'),
            url = 'https://script.google.com/macros/s/AKfycbxUtDBzeuuTfugyL9mol0hJneVs7-j7PjqJ1gybP_GbTub0VaY/exec'

        jQuery('#submit-form-review').on('click', function(e) {
            e.preventDefault();
            if(document.getElementById('consent-review').checked) {
                $('#submit-form-review').hide();
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
                        $('#submitted-review').removeClass('hide');
                    }
                );
            }
            else {
                $('#error-msg').removeClass('hide');
            }
        })
    </script>
</div>
<?php wp_footer(); ?>
</body>

</html>