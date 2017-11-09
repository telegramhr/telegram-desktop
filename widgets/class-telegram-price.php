<?php

class Telegram_Price extends WP_Widget {

    public function __construct() {
        parent::__construct( 'tg_price', 'Telegram: Velike Priče',
            array(
                'description' => 'Velike Priče',
            ) );
    }

    public function widget( $args, $instance ) {
        //ovdje ide sadržaj widgeta, cachirano
        $data = wp_cache_get('tg_price', 'widgets');
        if (!$data) {

            ob_start();
            ?>
            <div class="tg-widget trending-widget">
                <div class="tg-widget-head">
                    <h1>Velike Priče</h1>
                </div>
                <div class="tg-widget-body">
                    <?php
                    $args = array(
                        'posts_per_page' => $instance['num'],
                        'no_found_rows' => true,
                        'post_type' => array('post', 'price', 'fotogalerije', 'video'),
                        'post_status' => 'publish',
                        'cat' => 1402,
                        'meta_query' => [
	                        [
		                        'key' => '_zoninator_order_37783',
		                        'compare' => 'NOT EXISTS'
	                        ],
	                        [
		                        'key' => '_zoninator_order_37782',
		                        'compare' => 'NOT EXISTS'
	                        ],
                        ],
                        'post__not_in' => [
                            get_post_meta(519214, 'break_1_article', true),
                            get_post_meta(519214, 'break_2_article', true),
                        ]
                    );
                    $articles = new WP_Query($args);
                    global $post_num;
                    if ($articles->have_posts()) {
                        while ($articles->have_posts()) {
                            $articles->the_post();
                            $post_num = $articles->current_post+1;
                            // Get Sidebar Article
                            get_template_part('templates/articles/article-sidebar');

                        } } wp_reset_postdata(); ?>
                    </div> <!-- End Widget-Body -->
            </div>
            <?php
            $data = ob_get_clean();
            wp_cache_set('tg_price', $data, 'widgets', 600);
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
register_widget( 'Telegram_Price' );