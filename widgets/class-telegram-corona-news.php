<?php

class Telegram_Corona_News extends WP_Widget {

    public function __construct() {
        parent::__construct( 'tg_covid_19_news', 'Telegram: Corona News',
            array(
                'description' => 'Corona',
            ) );
    }



        public function widget( $args, $instance ) {
            $id = get_the_ID();
        ?>
            <div class="embed-news-list">
                <div class="bold">Što se upravo događa s koronavirusom:</div>
                <ul>
			        <?php
			        $q = new WP_Query([
                        'posts_per_page' => 8,
                        'no_found_rows' => true,
                        'ignore_sticky_posts' => true,
                        'tag' => 'koronavirus'
                    ]);
			        while($q->have_posts()) {
			            $q->the_post();
			            if($q->post->ID === $id) {
			                continue;
                        }
			            if ($q->current_post > 6) {
			                break;
                        }
			            ?><li><a target="_blank" href="<?php the_permalink(); ?>"><?php the_title() ?></a></li><?php
                    }
                    wp_reset_postdata();
			        ?>
                </ul>
                <style>
                    .embed-news-list {
                        border: 1px solid #ddd;
                        padding: 16px;
                        font-family: pt sans, arial, helvetica, sans-serif;
                        margin-top: 15px;
                        margin-bottom: 30px;
                    }

                    .embed-news-list .bold {
                        padding-left: 18px;
                        font-size: 24px;
                        font-weight: bold;
                        margin-bottom: 16px;
                        color: #111;
                    }

                    .embed-news-list ul {
                        padding: 0px;
                        margin: 0px;
                    }

                    .embed-news-list li {
                        display: block;
                        cursor: pointer;
                        padding-left: 20px;
                        padding-right: 16px;
                        position: relative;
                        font-size: 16px;
                        list-style: none;
                        padding-bottom: 8px;
                    }

                    .embed-news-list a {
                        color: #111 !important;
                        border-bottom: 2px solid rgba(227, 23, 57, 0.1);
                    }

                    .embed-news-list a:hover {
                        border-bottom: 1px solid rgba(227, 23, 57, 1);
                    }

                    .embed-news-list li::before {
                        content: " ";
                        position: absolute;
                        top: 5.5px;
                        left: 0;
                        width: 0.8em;
                        height: 0.8em;
                        background-image: url("/wp-content/themes/telegram2-desktop/assets/img/tg_list_arrow.png");
                        background-size: contain;
                        background-repeat: no-repeat;
                    }

                </style>
            </div>
        <?php
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
register_widget( 'Telegram_Corona_News' );