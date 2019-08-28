<?php

class Telegram_Facebook_Hitovi extends WP_Widget {

    public function __construct() {
        parent::__construct( 'tg_facebook_hitovi', 'Telegram: Facebook hitovi',
            array(
                'description' => 'Najdjeljenjiji telegramovi članci',
            ) );
    }

    public function widget( $args, $instance ) {
        $data = wp_cache_get('tg_facebook_hitovi', 'widgets');
        if (!$data) {

            ob_start();
            ?>
            <div class="tg-widget facebook-hitovi">

                <div class="tg-widget-head">
                    <span>Facebook</span> Hitovi
                    <div class="decail"></div>
                </div>
				<div class="tg-widget-body">

                <?php
                $today = getdate(time()+24*3600);
                $two_weeks = getdate(time()-7*24*3600);
                $no = $instance['num_home'];

                $args = array(
                    'post_type' => array('post', 'price', 'fotogalerije', 'video'),
                    'posts_per_page' => $no,
                    'meta_key' => '_recommendations',
                    'orderby' => 'meta_value_num',
                    'ignore_sticky_posts' => true,
                    'no_found_rows'       => true,
                    'date_query' => array(
                        array(
                            'after' => array(
                                'year' => $two_weeks['year'],
                                'month' => $two_weeks['mon'],
                                'day' => $two_weeks['mday'],
                            ),
                            'before' => array(
                                'year' => $today['year'],
                                'month' => $today['mon'],
                                'day' => $today['mday'],
                            ),
                            'inclusive' => true
                        )
                    )
                );
                $articles = new WP_Query($args);
                if ($articles->have_posts()) {
                    while ($articles->have_posts()) {
                        $articles->the_post();

                        get_template_part( 'templates/articles/article-block' );

                    } } wp_reset_postdata(); ?>

                </div>
            </div>
            <?php
            $data = ob_get_clean();
            wp_cache_set('tg_facebook_hitovi', $data, 'widgets', 600);
        }

        echo $data;
    }
    function update( $new_instance, $instance ) {
        $instance['num_home']  = strip_tags( $new_instance['num_home'] );
        $instance['num_single']  = strip_tags( $new_instance['num_single'] );
        $instance['num_cat']  = strip_tags( $new_instance['num_cat'] );

        return $instance;
    }

    function form( $instance ) {
        $num_home  = empty( $instance['num_home'] ) ? '' : esc_attr( $instance['num_home'] );
        ?>
        <p>
            <input id="<?php echo esc_attr( $this->get_field_id( 'num_home' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'num_home' ) ); ?>" type="text"
                   value="<?php echo esc_attr( $num_home ); ?>">
            <label for="<?php echo esc_attr( $this->get_field_id( 'num_home' ) ); ?>">
                <?php _e( 'Broj članaka na naslonvnici:', 'twentyfourteen' ); ?>
            </label>
        </p>
        <?php
    }
}

register_widget( 'Telegram_Facebook_Hitovi' );
