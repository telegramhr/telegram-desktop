<div class="left-menu">
    <div class="inner-container">
        <?php
        $menus = wp_cache_get('sidebar_menus', 'desktop');
        if (!$menus) {
            ob_start();

        ?>
        <div class="menu-head">
            Rubrike
        </div>
        <div class="menu-block">
            <?php wp_nav_menu( array( 'theme_location' => 'tg_menu' ) ); ?>
        </div>
        <div class="menu-head">
            Kanali
        </div>
        <div class="menu-block">
            <?php wp_nav_menu( array( 'theme_location' => 'channels' ) ); ?>
        </div>
        <div class="menu-head">
            Social
        </div>
        <div class="menu-block">
            <?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
        </div>
        <div class="menu-head">
            Info
        </div>
        <div class="menu-block">
            <?php wp_nav_menu( array( 'theme_location' => 'footer_2' ) ); ?>
            <?php /* global $wp;
            $current_url = trailingslashit( home_url( add_query_arg( array(), $wp->request ) ) ); ?>
            <a href="<?php echo esc_url( $current_url . '?ak_action=accept_mobile' ); ?>">Mobilna verzija</a>
             */ ?>
        </div>
        <?php
            $menus = ob_get_clean();
            wp_cache_set('sidebar_menus', $menus, 'desktop', DAY_IN_SECONDS);
        }
        echo $menus;
        ?>
    </div>
</div>