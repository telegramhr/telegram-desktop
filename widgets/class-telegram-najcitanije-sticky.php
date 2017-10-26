<?php

class Telegram_Najcitanije_Sticky extends WP_Widget {

    public function __construct() {
        parent::__construct( 'tg_najcitanije_sticky', 'Telegram: Najčitanije Sticky',
            array(
                'description' => 'Prikaz najčitanijih vijesti',
            ) );
    }

    public function widget( $args, $instance ) {
        $data = wp_cache_get('tg_najcitanije_sticky', 'widgets');
        if (!$data) {

            ob_start();
            ?>
            <div class="tg-widget najcitanije-sticky">
                <div class="tg-widget-head">
                    <h1>Telegram najčitanije</h1>
                </div>
                <div class="tg-widget-body">
                    <?php
                    $args = array(
                        'posts_per_page' => $instance['num'],
                        'post__in' => get_option('telegram_most_read'),
                        'orderby' => 'post__in',
                        'no_found_rows' => true,
                        'post_type' => array('post', 'price', 'fotogalerije', 'video'),
                        'post_status' => 'publish'
                    );
                    $articles = new WP_Query($args);
                    global $post_num;
                    if ($articles->have_posts()) {
                        while ($articles->have_posts()) {
                            $articles->the_post();
                            $post_num = $articles->current_post+1; ?>

                            <article class="article-sticky">
                                <div class="num">
                                    <?php echo $post_num; ?>
                                </div>
                                <div class="titles">
                                    <h3 class="overtitle">
                                        <?php echo get_the_category()[0]->name; ?>
                                    </h3>
                                    <h2 class="title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                </div>
                            </article>

                            <?php
                        }
                    } wp_reset_postdata(); ?>
                </div> <!-- End Widget-Body -->
            </div>
            <?php
            $data = ob_get_clean();
            wp_cache_set('tg_najcitanije_sticky', $data, 'widgets', 600);
        }

        echo $data;
    }

    function update( $new_instance, $instance ) {
        $instance['num']  = strip_tags( $new_instance['num'] );
        return $instance;
    }

    function form( $instance ) {
        //ovo je samo primjer za formu unutar admina
        $num  = empty( $instance['num'] ) ? '' : esc_attr( $instance['num'] );
        ?>
        <p><label for="<?php echo esc_attr( $this->get_field_id( 'num' ) ); ?>"><?php _e( 'Broj članaka:', 'twentyfourteen' ); ?></label>
            <input id="<?php echo esc_attr( $this->get_field_id( 'num' ) ); ?>" class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'num' ) ); ?>" type="text" value="<?php echo esc_attr( $num ); ?>"></p>

        <?php
    }
}
register_widget( 'Telegram_Najcitanije_sticky' );