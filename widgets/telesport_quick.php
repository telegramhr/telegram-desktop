<?php

class Telesport_Quick extends WP_Widget {

    public function __construct() {
        parent::__construct( 'telesport_quick', 'Telesport: Brzi članak',
            array(
                'description' => 'Brzi članak u sidebaru',
            ) );
    }

    public function widget( $args, $instance ) {
        //ovdje ide sadržaj widgeta, cachirano
        //$data = wp_cache_get('tg_najcitanije', 'widgets');
        if (!$data) {

            ob_start();
            ?>
            <div class="tg-widget telesport-quick">
                <div class="tg-widget-head">
                    <h1>Pročitajte danas</h1>
                </div>

                <div class="tg-widget-body">
                    <?php
                    $args = array(
                        'posts_per_page' => 1,
                        //'post__in' => get_transient('telegram_most_read'),
                        //'orderby' => 'post__in',
                        'post_type' => array('telesport')
                    );
                    $articles = new WP_Query($args);
                    global $post_num;
                    if ($articles->have_posts()) {
                        while ($articles->have_posts()) {
                            $articles->the_post();
                            $post_num = $articles->current_post+1;
                            ?>

                            <article class="quick-article">
                                <header>
                                    <h1 class="title">
                                        <a href="<?php the_permalink() ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h1>
                                    <h2 class="subtitle">
                                        <?php echo get_excerpt(get_field('subtitle'), 141 ); ?>
                                    </h2>
                                </header>
                                
                            </article>

                            <?php
                        } } wp_reset_postdata(); ?>
                </div> <!-- End Widget-Body -->
            </div>
            <?php
            $data = ob_get_clean();
            wp_cache_set('telesport_quick', $data, 'widgets', 600);
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
register_widget( 'Telesport_Quick' );