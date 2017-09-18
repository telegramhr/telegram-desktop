<?php

class TG_Facebook_Hitovi extends WP_Widget {

    public function __construct() {
        parent::__construct( 'tg_facebook_hitovi', 'Telegram: Facebook hitovi',
            array(
                'description' => 'Najdjeljenjiji telegramovi članci',
            ) );
    }

    public function widget( $args, $instance ) {
        //ovdje ide sadržaj widgeta, cachirano
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
                $two_weeks=getdate(time()-7*24*3600);
                if ( is_front_page() ) {
                    $cat = 'home';
                    $no = $instance['num_home'];
                }
                else if (is_single()) {
                    $cat = get_the_category()[0]->term_id;
                    $no = $instance['num_single'];
                }
                else {
                    $cat = get_query_var('cat');
                    $no = $instance['num_cat'];
                }
                $args = array(
                    'post_type' => array('post', 'price', 'fotogalerije', 'video'),
                    'posts_per_page' => $no,
                    'meta_key' => '_recommendations',
                    'orderby' => 'meta_value_num',
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
                ); //TODO: most shared
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

        //ovo je samo primjer za formu unutar admina
        $num_home  = empty( $instance['num_home'] ) ? '' : esc_attr( $instance['num_home'] );
        $num_single  = empty( $instance['num_single'] ) ? '' : esc_attr( $instance['num_single'] );
        $num_cat  = empty( $instance['num_cat'] ) ? '' : esc_attr( $instance['num_cat'] );

        ?>
        <p>
            <input id="<?php echo esc_attr( $this->get_field_id( 'num_home' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'num_home' ) ); ?>" type="text"
                   value="<?php echo esc_attr( $num_home ); ?>">
            <label for="<?php echo esc_attr( $this->get_field_id( 'num_home' ) ); ?>">
                <?php _e( 'Broj članaka na naslonvnici:', 'twentyfourteen' ); ?>
            </label>
        </p>

        <p>
            <input id="<?php echo esc_attr( $this->get_field_id( 'num_single' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'num_single' ) ); ?>" type="text"
                   value="<?php echo esc_attr( $num_single ); ?>">
            <label for="<?php echo esc_attr( $this->get_field_id( 'num_single' ) ); ?>">
                <?php _e( 'Broj članaka na članku:', 'twentyfourteen' ); ?>
            </label>
        </p>

        <p>
            <input id="<?php echo esc_attr( $this->get_field_id( 'num_cat' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'num_cat' ) ); ?>" type="text"
                   value="<?php echo esc_attr( $num_cat ); ?>">
            <label for="<?php echo esc_attr( $this->get_field_id( 'num_cat' ) ); ?>">
                <?php _e( 'Broj članaka na rubrikama:', 'twentyfourteen' ); ?>
            </label>
        </p>

        <?php
    }
}

register_widget( 'TG_Facebook_Hitovi' );
