<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=1230, initial-scale=0.8, maximum-scale=1">

    <!-- Twitter embed box -->
    <meta name="twitter:widgets:theme" content="light">
    <meta name="twitter:widgets:link-color" content="#ed1d39">
    <meta name="twitter:widgets:border-color" content="#eee">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php
        if (is_front_page()) {
            ?><meta name="description" content="Pročitajte najnovije vijesti iz Hrvatske i svijeta. Društvene analize, kolumne političkih stručnjaka, velike priče o malim ljudima. Portal bez treša i estrade, za ljude koji razmišljaju o svijetu budućnosti."><?php
        }
    ?>
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

<!--

     _    _ _                    __   ___
    / \  | | | ___  _ __  ___    \ \ / / |
   / _ \ | | |/ _ \| '_ \/ __|____\ V /| |
  / ___ \| | | (_) | | | \__ \_____| | |_|
 /_/   \_\_|_|\___/|_| |_|___/     |_| (_)

 Prvi koji podijeli na Twitteru dobiva nagradu.

 -> Cini se da je @TeoDominesPeter svojio jako fora iPad :)
 -> https://twitter.com/teodominespeter/status/910220209461633024
 -> http://bit.ly/2x3QwJj

 #tmg_devteam
-->

<body <?php body_class($format_class); ?> id="top">
<?php do_action('telegram_body_start'); ?>

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