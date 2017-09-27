<?php

class Telegram_Upravo_Objavljeno extends WP_Widget
{

    public function __construct()
    {
        parent::__construct('tg_upravo_objavljeno', 'Telegram: Upravo objavljeno',
            array(
                'description' => 'Pet najsvježijih članaka na portalu',
            ));
    }

    public function widget($args, $instance)
    {
        $data = wp_cache_get('tg_latest', 'widgets');
        if (!$data) {
	        ob_start();

	        ?>
            <div class="tg-widget rainbow-widget procitajte-danas">
                <div class="tg-widget-head">
                    Upravo objavljeno
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
				        /*'meta_query' => array(
				                array(
				                        'key' => 'latest_off',
                                        'compare' => 'NOT EXISTS'
                                )
                        )*/
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
            wp_cache_set('tg_latest', $data, 'widgets', 3600);
        }
        echo $data;
    }

}

register_widget( 'Telegram_Upravo_Objavljeno' );
