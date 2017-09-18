<?php

class TG_Podijeli_Clanak extends WP_Widget {

    public function __construct() {
        parent::__construct( 'tg_podijeli_clanak', 'Telegram: Podijeli članak',
            array(
                'description' => 'Traka s gumbima za dijeljenje članka na dnu',
            ) );
    }

    public function widget( $args, $instance ) {
        //ovdje ide sadržaj widgeta, cachirano
        ?>

        <div class="author-box cf">
            <?php
            foreach (get_coauthors() as $author) { ?>
                <div class="author-thumb">
                    <a href="<?php echo get_author_posts_url( $author->ID, $author->user_login ); ?>">
                        <?php echo coauthors_get_avatar($author, 'thumbnail'); ?>
                    </a>
                </div>
                <div class="author-name">
                    <div class="first-name">
                        <?php
                        echo $author->display_name; ?>
                    </div>
                    <div class="occupation">
                        <?php
                        if( $author->occupation ) {
                            echo $author->occupation;
                        } else {
                            echo 'Telegram autor';
                        } ?>
                    </div>
                    <div class="author-actions">
                        <span>
                            <?php
                            the_author_posts(); ?> članaka
                        </span>
                        <span>
                            <a href="<?php echo get_author_posts_url( $author->ID, $author->user_login ); ?>">
                                Više o autoru
                            </a>
                        </span>
                    </div>
                </div>
                <?php
                the_tags('<div class="tags">', ', ', '</div>'); ?>
            <?php } ?>
        </div>

        <div class="single-share">
            <div class="share-text">
                Podijeli:
            </div>
            <div class="share-box">
                <div class="facebook">
                    <a href="https://www.facebook.com/dialog/share?app_id=1383786971938581&display=popup&href=<?php echo urlencode( get_the_permalink() ); ?>&redirect_uri=<?php echo urlencode( get_the_permalink() ); ?>" target="_blank" class="fb fb-share" data-social-network="Facebook" data-social-action="share" data-social-target="<?php the_permalink(); ?>"><i class="fa fa-facebook"></i> <span>Facebook</span> (134)</a>
                </div>
                <div class="twitter">
                    <a href="https://twitter.com/intent/tweet?counturl=<?php echo urlencode( get_the_permalink() ) ?>&text=<?php echo urlencode( get_the_title() ); ?>&url=<?php echo urlencode( get_the_permalink() ) ?>&via=Telegram_hr" target="_blank" class="tw" data-social-network="Twitter" data-social-target="<?php the_permalink() ?>" data-social-action="tweet"><i class="fa fa-twitter"></i><span> Twitter</span> (78)</a>
                </div>
                <div class="mail">
                    <a href="mailto:?Subject=Pogledaj ovaj članak s Telesportat&body:<?php the_permalink(); ?>">E-mail</a>
                </div>
            </div>
        </div>

        <?php
    }
}

register_widget( 'TG_Podijeli_Clanak' );
