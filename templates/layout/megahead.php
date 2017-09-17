<div class="megahead">
    <div class="container">
        <?php
        $args      = array(
            'posts_per_page' => 1,
            'offset' => 2,
            'post_status'    => 'publish',
            'post_type' => array('post', 'fotogalerije', 'price'),
        );
        //$articles  = new WP_Query( $args );
        $articles = z_get_zone_query('head-article', array('posts_per_page' => 1, array('post', 'fotogalerije', 'price'),));
        if ( $articles->have_posts() ) {
            while ( $articles->have_posts() ) {
                $articles->the_post();
                get_template_part( 'templates/articles/article-head' );
            }
        }
        ?>

        <?php
        // WIDGET: Pricitajte danas
        // Urednicki odabir 5 najvažnijih clanaka
        the_widget('TG_Procitajte_Danas');
        ?>
    </div>
</div>