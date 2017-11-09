<div class="megahead">
    <div class="container">
        <?php
        $articles = z_get_zone_query('head-article', array( 'posts_per_page' => 1 ));
        if ( $articles->have_posts() ) {
            while ( $articles->have_posts() ) {
                $articles->the_post();
                get_template_part( 'templates/articles/article-head' );
            }
        }
        wp_reset_postdata();
        ?>

        <?php
        the_widget('Telegram_Najcitanije_Malo');
        ?>
    </div>
</div>