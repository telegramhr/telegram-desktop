<?php // Get header class
if( is_front_page() ) {
    // Header is Walter White
    $header_class = 'home';
    // Get Featured articles
    get_template_part('templates/main/featured-articles');
}
else if( get_post_type() == 'price' ) {
    $header_class = 'default transparent';
}
else {
    // Header is Cherry Red
    $header_class = 'default';
}
?>

<nav class="tg-navbar <?php echo $header_class; ?>">
    <div class="nav-left">
        <li class="categories">
            <a id="categories-action">
                <div class="hamburger">
                    <div class="bar bar-1"></div>
                    <div class="bar bar-2 bar-wide"></div>
                    <div class="bar bar-3"></div>
                </div>
                Rubrike
            </a>
            <div class="left-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'left_menu' ) ); ?>
            </div>
        </li>
        <?php
            wp_nav_menu( array( 'theme_location' => 'tg_menu' ) );
        ?>
    </div>
    <div class="logo">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/telegram_logo_inv.svg" height="65" />
        </a>
    </div>
    <div class="nav-right">
        <li class="authors">
            <a>Autori</a> <i class="fa fa-angle-down"></i>
        </li>
        <li class="channels">
            <a>Kanali</a> <i class="fa fa-angle-down"></i>
        </li>
        <li class="social-navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'social', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
        </li>
        <li class="search-action">
            <i class="fa fa-search"></i>
        </li>
    </div>

    <div class="nav-shadow"></div>
</nav>

<div class="header-blank <?php echo $header_class; ?>"></div>
