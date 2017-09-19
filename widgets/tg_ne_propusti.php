<?php

class TG_Ne_Propusti extends WP_Widget {

    public function __construct() {
        parent::__construct( 'tg_me_propusti', 'Telegram: Ne propusti top vijesti',
            array(
                'description' => 'Prikaz najpopularnijih vijesti iz kategorije u kojoj je članak.',
            ) );
    }

    public function widget( $args, $instance ) {
        //ovdje ide sadržaj widgeta, cachirano
        $cat = get_the_category()[0]->term_id;
        $data = wp_cache_get('tg_ne_propusti_'.$cat, 'widgets');
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
                            'showposts' => 8,
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
                            if ($q->current_post == 0) {
                                $pos = array();
                                $p1 = get_transient('telegram_promo_1');
                                if ($p1) {
                                    $pos[] = $p1;
                                }
                                $p2 = get_transient('telegram_promo_2');
                                if ($p2) {
                                    $pos[] = $p2;
                                }
                                if (!empty($pos)) {
                                    $idx = rand( 0, count( $pos ) - 1 );
                                    $p1    = get_post( $pos[ $idx ] );
                                    if ($p1) {
                                        $post = $p1;
                                        if ( wp_is_mobile() ) {
                                            get_template_part('templates/articles/article-1');
                                        } else {
                                            get_template_part('templates/articles/article-fourth');
                                        }
                                    }
                                }
                            }
                        }
                        wp_reset_postdata();

                        ?>

                    </div>
                    <a class="btn load-more">Još Telegrama</a>
                </div>


            <?php } // endif promo ?>

            <?php
            $data = ob_get_clean();
            wp_cache_set('tg_ne_propusti_'.$cat, $data, 'widgets', 3600);
        }

        echo $data;
    }
}

register_widget( 'TG_Ne_Propusti' );