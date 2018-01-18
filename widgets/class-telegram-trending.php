<?php

class Telegram_Trending extends WP_Widget {

    public function __construct() {
        parent::__construct( 'tg_trending', 'Telegram: Upravo se čita',
            array(
                'description' => 'Trending na telegramu',
            ) );
    }

    public function widget( $args, $instance ) {

            $cat = 'home';
            $no = $instance['num_home'];

        $data = wp_cache_get('tg_trending_'.$cat.$no, 'widgets');
        if (!$data) {

            ob_start();
            ?>
            <div class="tg-widget upravose-cita">

				<div class="tg-widget-head">
					#Upravo se čita
                    <div class="decail"></div>
				</div>
				<div class="tg-widget-body">

                <?php
                $args = array(
                    'posts_per_page' => $no,
                    'post__in' => get_option('telegram_realtime'),
                    'post_type' => array('post', 'price', 'fotogalerije', 'video'),
                    'orderby' => 'post__in'
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
            wp_cache_set('tg_trending_'.$cat.$no, $data, 'widgets', 600);
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

register_widget( 'Telegram_Trending' );
