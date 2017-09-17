<?php

class TG_Autori extends WP_Widget {

    public function __construct() {
        parent::__construct( 'tg_autori', 'Telegram: Telegramovi autori',
            array(
                'description' => 'Najpopularniji članci telegramovih autora',
            ) );
    }

    public function widget( $args, $instance ) {
        //ovdje ide sadržaj widgeta, cachirano
        //$data = wp_cache_get('tg_najcitanije', 'widgets');
        if (!$data) {

            ob_start();
            ?>
            <div class="tg-widget tg-autori">
                <div class="tg-widget-head">
                    <h1>Telegramovi autori</h1>
                </div>
                <div class="tg-widget-body">
                    <?php
                    $post_num = $instance['num'];
                    if( !$post_num ) {
                        $post_num = 5;
                    }
                    $args = array(
                        'posts_per_page' => $post_num,
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
                            // Get Sidebar Article
                            get_template_part('templates/articles/article-author');

                        } } wp_reset_postdata(); ?>
                </div> <!-- End Widget-Body -->
            </div>
            <?php
            $data = ob_get_clean();
            wp_cache_set('tg_autori', $data, 'widgets', 600);
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
register_widget( 'TG_Autori' );