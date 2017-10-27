<?php

class Telegram_Ne_Propusti_Mobile extends WP_Widget {

    public function __construct() {
        parent::__construct( 'tg_me_propusti_mobile', 'Telegram: Ne propusti top vijesti - mobile',
            array(
                'description' => 'Prikaz najpopularnijih vijesti iz kategorije u kojoj je članak.',
            ) );
    }

    public function widget( $args, $instance ) {
        //ovdje ide sadržaj widgeta, cachirano
        $cat = get_the_category()[0]->term_id;
        $data = wp_cache_get('tg_ne_propusti_mobile_'.$cat, 'widgets');
        if (!$data) {

            ob_start();
            ?>

            <?php
            // If is not Promo
            if( $cat != 3926 ) { ?>

                <div class="tg-widget tg-ne-propusti">
                    <div class="tg-widget-head big-title">
                        Ostanite uz telegramov program
                    </div>
                    <div class="tg-widget-body flex">
                        <?php
                        global $post;
                        $args = array(
                            'post_per_page' => 8,
                            'post_type' => 'any',
                            'cat' => $cat,
                            'post__not_in' => array( $post->ID ),
                            'no_found_rows' => true,
                            'ignore_sticky_posts' => true,
                            'post_status' => 'publish'
                        );
                        $q = new WP_Query($args);
                        while($q->have_posts()) {
                            $q->the_post();
                            if ( my_wp_is_mobile() ) {
                                get_template_part('templates/articles/article-1');
                            } else {
                                get_template_part('templates/articles/article-fourth');
                            }
                        }
                        wp_reset_postdata();

                        ?>

                    </div>
                    <!--<a class="btn load-more">Još Telegrama</a>-->
                </div>


            <?php } // endif promo ?>

            <?php
            $data = ob_get_clean();
            wp_cache_set('tg_ne_propusti_mobile_'.$cat, $data, 'widgets', 3600);
        }

        echo $data;
    }
}

register_widget( 'Telegram_Ne_Propusti_Mobile' );