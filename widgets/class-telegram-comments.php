<?php

class Telegram_Comments extends WP_Widget {

    public function __construct() {
        parent::__construct( 'tg_comments', 'Telegram: Komentari korisnika',
            array(
                'description' => 'Facebook komentari ispod članka',
            ) );
    }

    public function widget( $args, $instance ) {
        //ovdje ide sadržaj widgeta, cachirano
        if (get_field('iskljuci_komentare')==1) {
            return;
        } ?>
        <div class="tg-comments-widget">
            <a class="comments-activate">
                <i class="fa fa-plus"></i> Klikni i započni diskusiju
            </a>
            <div class="comments-hide">
                <div class="fb-comments"
                     data-href="<?php the_permalink(); ?>"
                     data-width="100%"
                     data-numposts="5">
                </div>
            </div>
        </div>
        <?php
    }
}

register_widget( 'Telegram_Comments' );
