<?php

class Telesport_Blitz_Sidebar extends WP_Widget {

    public function __construct() {
        parent::__construct( 'telesport_blitz_sidebar', 'Telesport: Na prvu...',
            array(
                'description' => 'Prikaz malih blitz članaka',
            ) );
    }

    public function widget( $args, $instance ) {
        //ovdje ide sadržaj widgeta, cachirano
        //$data = wp_cache_get('tg_blitz_sidebar', 'widgets');
        if (!$data) {

            ob_start();
            ?>
            <div class="tg-widget dark-widget blitz-sidebar">
                <div class="tg-widget-head">
                    <h1>Na prvu...</h1>
                </div>
                <div class="tg-widget-body">
                    <?php
                    $args = array(
                        'posts_per_page' => $instance['num'],
                        //'post__in' => get_transient('telegram_most_read'),
                        //'orderby' => 'post__in',
                        'post_type' => array('telesport'),
                        'category_name' => 'Telesport'
                    );
                    $articles = new WP_Query($args);
                    global $post_num;
                    if ($articles->have_posts()) {
                        while ($articles->have_posts()) {
                            $articles->the_post();
                            $post_num = $articles->current_post+1;
                            // Get Sidebar Article
                            get_template_part('templates/article/article-blitz');

                        } } wp_reset_postdata(); ?>
                </div> <!-- End Widget-Body -->
            </div>
            <?php
            $data = ob_get_clean();
            wp_cache_set('telesport_blitz_sidebar', $data, 'widgets', 600);
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
register_widget( 'Telesport_Blitz_Sidebar' );