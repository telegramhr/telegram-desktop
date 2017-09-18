<?php

class TG_Fullpage_1x4 extends WP_Widget {

    public function __construct() {
        parent::__construct( 'tg_fullpage_1x4', 'Telegram: Veliki prekid',
            array(
                'description' => 'Jedan veliki i četiri mala članka',
            ) );
    }

    public function widget( $args, $instance ) {
        //ovdje ide sadržaj widgeta, cachirano
        $data = wp_cache_get('tg_fullpage_1x4', 'widgets');
        if (!$data) {

            ob_start();
            ?>

                </div> <!-- End Page Container -->
            </div> <!-- End Content Container -->


            <div class="tg-widget fullpage-widget">
                <?php
                $args = array(
                    'posts_per_page' => 5,
                    //'post__in' => get_transient('telegram_most_read'),
                    //'orderby' => 'post__in',
                    'post_type' => array('post', 'price', 'fotogalerije', 'video')
                );
                $articles = new WP_Query($args);
                global $post_num;
                if ($articles->have_posts()) {
                    while ($articles->have_posts()) {
                        $articles->the_post();
                        $post_num = $articles->current_post+1;

                        if( $post_num == 1 ) {
                            get_template_part('templates/article/article-fullpage');
                            echo '<div class="container four-articles">';
                            echo '<div class="inner cf">';
                        } else {
                            get_template_part('templates/article/article-fourth');
                        }
                    }
                    echo '</div> <!-- END Inner -->';
                    echo '</div> <!-- END Container -->';
                }
                wp_reset_postdata(); ?>

            </div>

            <div class="container content-container">
                <div class="page-container home-page cf">

            <?php
            $data = ob_get_clean();
            wp_cache_set('tg_fullpage_1x4', $data, 'widgets', 600);
        }

        echo $data;
    }

    function update( $new_instance, $instance ) {
        $instance['zone']  = strip_tags( $new_instance['zone'] );
        $instance['title']  = strip_tags( $new_instance['title'] );

        return $instance;
    }

    function form( $instance ) {
        //ovo je samo primjer za formu unutar admina
        $zone  = empty( $instance['zone'] ) ? '' : esc_attr( $instance['zone'] );
        $title  = empty( $instance['title'] ) ? '' : esc_attr( $instance['title'] );
        ?>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
                <?php _e( 'Naslov widgeta', 'twentyfourteen' ); ?>
            </label>
            <input id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
                   class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"
                   type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'zone' ) ); ?>">
                <?php _e( 'Odaberi zonu', 'twentyfourteen' ); ?>
            </label>
            <input id="<?php echo esc_attr( $this->get_field_id( 'zone' ) ); ?>"
                   class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'zone' ) ); ?>"
                   type="text" value="<?php echo esc_attr( $zone ); ?>">
        </p>

        <?php
    }
}
register_widget( 'TG_Fullpage_1x4' );