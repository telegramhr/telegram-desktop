<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=1230, initial-scale=0.8, maximum-scale=1">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">

    <!-- Twitter embed box -->
    <meta name="twitter:widgets:theme" content="light">
    <meta name="twitter:widgets:link-color" content="#ed1d39">
    <meta name="twitter:widgets:border-color" content="#eee">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>

<?php
// Check article format
$format = intval(get_post_meta( get_the_ID(), 'telegram_expanded', true ));
$format_class = '';
if( $format == 4 ) {
    $format_class = 'no-img-format';
}
?>
<body <?php body_class($format_class); ?> id="top">
<?php do_action('telegram_body_start'); ?>

<div class="disclaimer">
    <div class="container">
        <i class="fa fa-empire"></i>
        <div class="disclaimer-text">
            <div class="disclaimer-title">
                Pravilnik upotrebi kolačića
            </div>
            Portal Telegram.hr unaprijedio je politiku privatnosti i korištenja takozvanih cookiesa, u skladu s novom europskom regulativom. Cookiese koristimo kako bismo mogli pružati našu online uslugu, analizirati korištenje sadržaja, nuditi oglašivačka rješenja, kao i za ostale funkcionalnosti koje ne bismo mogli pružati bez cookiesa. Daljnjim korištenjem ovog portala pristajete na korištenje cookiesa. Ovdje možete saznati više o <a href="https://www.telegram.hr/pravila-privatnosti/">zaštiti privatnosti</a> i <a href="https://www.telegram.hr/politika-o-cookiejima/">postavkama cookiesa</a>
        </div>
        <div class="disclaimer-btn">
            <a href="#" onclick="tmg_hide_disclaimer()" class="dsc-btn">Shvaćam</a>
        </div>

    </div>
    <style>
        .disclaimer {
            display: none;
            background: black;
            color: white;
            padding: 80px 0;
            font-family: sans-serif;
            font-size: 18px;
        }

        .disclaimer a:not(.dsc-btn) {
            text-decoration: underline;
        }

        .disclaimer .container {
            display: flex;
            flex-wrap: nowrap;
            position: relative;
        }

        .disclaimer i {
            position: absolute;
            top: 5px;
            font-size: 72px;
            left: -80px;
            color: #333;
        }

        .disclaimer-title {
            font-family: "Fjalla One CRO", Impact, sans-serif;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .disclaimer-text {
            padding-right: 20px;
        }

        .disclaimer-btn {
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-left: 1px solid #333;
            padding-left: 20px;
        }

        .dsc-btn {
            display: inline-block;
            text-transform: uppercase;
            font-family: "Fjalla One CRO", Impact, sans-serif;
            font-size: 18px;
            font-weight: bold;
            background: #813f9d;
            padding: 6px 0;
            width: 150px;
        }

        .dsc-btn:hover {
            background: #5d356e;
        }

        .tmg-no-cookie .disclaimer {
            display: block;
        }
    </style>
    <script>
        function tmg_hide_disclaimer() {
            document.body.className = document.body.className.replace(/\btmg-no-cookie\b/,'');
            return false;
        }
        if (document.cookie.indexOf("tmg_visited=") >= 0) {
            tmg_hide_disclaimer();
        }
        else {
            // set a new cookie
            expiry = new Date();
            expiry.setTime(expiry.getTime()+(365*24*60*60*1000)); // 1 year

            // Date()'s toGMTSting() method will format the date correctly for a cookie
            document.cookie = "tmg_visited=yes; domain=.telegram.hr; path=/; expires=" + expiry.toGMTString();
        }
    </script>
</div>

<?php
    /* NAVIGATION
     * Default Menu:    nav-small
     * Sticky Single:   nav-single
     * Big Home:        nav-home
     */
    if( is_front_page() ) {
        get_template_part('templates/navbar/nav-home');
        get_template_part('templates/navbar/nav-small');
    }
    if( is_single() ) {
        get_template_part('templates/navbar/nav-single');

        if( get_post_type()  == 'price' ) {
            get_template_part('templates/navbar/nav-price');
        }
        else {
            get_template_part('templates/navbar/nav-small');
        }
    } else {
        get_template_part('templates/navbar/nav-small');
    }
    // ALWAYS get Left Menu && Search Form
    get_template_part('templates/navbar/left-menu');
    get_template_part('templates/layout/search-form');

    ?>

<div class="main-container">

    <?php
    /* Billboard $ Wallpapers */
    if( !is_front_page() && get_post_type()  != 'price' ) {
        ?>
        <div class="zones container">
            <?php
            the_widget('Telegram_Banner_Widget', array('size' => 'telegram_desktop_billboard_v1')); ?>
            <div class="wallpapers">
                <?php
                // Wallpapers
                the_widget('Telegram_Banner_Widget', array('size' => 'telegram_desktop_wallpaper_left'));
                the_widget('Telegram_Banner_Widget', array('size' => 'telegram_dekstop_wallpaper_right')); ?>
            </div>
        </div>
        <?php
    }