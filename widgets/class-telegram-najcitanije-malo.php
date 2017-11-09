<?php

class Telegram_Najcitanije_Malo extends WP_Widget
{

    public function __construct()
    {
        parent::__construct('tg_najcitanije_malo', 'Telegram: Najčitanije malo',
            array(
                'description' => 'Najčitanije malo',
            ));
    }

    public function widget($args, $instance)
    {
        $data = wp_cache_get('tg_najcitanije_malo', 'widgets');
        if (!$data) {
	        ob_start();

	        ?>
            <div class="tg-widget rainbow-widget procitajte-danas">
                <div class="tg-widget-head">
                    Najčitanije
                </div>
                <div class="tg-widget-body">
			        <?php
			        global $post;
			        $args = array(
				        'posts_per_page' => 5,
				        'post_type'      => array(
					        'post',
					        'fotogalerije',
					        'video',
					        'price'
				        ),
				        'no_found_rows' => true,
				        'ignore_sticky_posts' => true,
				        'post_status' => 'publish',
				        'post__in' => get_option('telegram_most_read'),
				        'orderby' => 'post__in',
			        );
			        $q    = new WP_Query( $args );
			        while ( $q->have_posts() ) {
				        $q->the_post();
				        // Rainbow article small
				        get_template_part( 'templates/articles/article-rainbow-small' );
			        }
			        wp_reset_query();
			        ?>
                </div>
            </div>

	        <?php
            $data = ob_get_clean();
            wp_cache_set('tg_najcitanije_malo', $data, 'widgets', 3600);
        }
        echo $data;
    }

}

register_widget( 'Telegram_Najcitanije_Malo' );
