
<nav class="telesport-navbar">
    <div class="container cf">

        <div class="logo">
            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Telesport' ) ) ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/telesport_logo.svg" height="120"/>
            </a>
        </div>

        <div class="telesport-menu">
            <ul>
                <li>
                    <a href="#">Priče</a>
                </li>
                <li>
                    <a href="#">Analize</a>
                </li>
                <li>
                    <a href="#">HNL Statistika</a>
                </li>
                <li>
                    <a href="#">
                        Kolumne
                    </a>
                </li>
                <li>
                    <a href="#">
                        Podcast
                    </a>
                </li>
                <li>
                    <a href="#">
                        Kanali
                    </a>
                </li>
            </ul>
        </div>

        <div class="nav-meta">
            <li class="social-navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'social', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
            </li>
            <li class="search-action">
                <i class="fa fa-search"></i>
            </li>
        </div>

    </div>
</nav>

