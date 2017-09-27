<?php

class Telegram_Podijeli_Clanak extends WP_Widget {

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
            foreach (get_coauthors() as $author) {
                if (in_array( $author->ID, array(519690, 519687) )) {
                    continue;
                }
                ?>
                <div class="author-block cf">
                    <div class="author-thumb">
                        <a href="<?php echo get_author_posts_url( $author->ID, $author->user_login ); ?>">
                            <?php
                            if( coauthors_get_avatar($author) ) {
                                echo coauthors_get_avatar($author, 'thumbnail');
                            } else {
                                ?>
                                <div class="initials">
                                    <?php
                                    echo $author->first_name[0];
                                    echo $author->last_name[0]; ?>
                                </div>
                                <?php
                            } ?>
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
                                global $coauthors_plus;
                                $term = $coauthors_plus->get_author_term( $author );
                                if ( $term ) {
	                                 $count = intval( $term->count );
                                } else {
	                                $count = 0;
                                }

                                $mod = $count % 10;
                                switch ($mod) {
                                    case 1:
                                        $word = 'članak';
                                        if ($count === 11) {
                                            $word = 'članaka';
                                        }
                                        break;
                                    case 2:
                                    case 3:
                                    case 4:
                                        $word = 'članka';
                                        if (in_array($count, [12,13,14])) {
                                            $word = 'članaka';
                                        }
                                        break;
                                    default:
                                        $word = 'članaka';
                                        break;
                                }
                                echo esc_html( $count . ' ' . $word );
                                ?>
                            </span>
                            <span>
                                <a href="<?php echo get_author_posts_url( $author->ID, $author->user_login ); ?>">
                                    Više o autoru
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="single-share">
            <div class="share-text">
                Podijeli:
            </div>
            <div class="share-box">
                <div class="facebook">
                    <a href="https://www.facebook.com/dialog/share?app_id=1383786971938581&display=popup&href=<?php echo urlencode( get_the_permalink() ); ?>&redirect_uri=<?php echo urlencode( get_the_permalink() ); ?>" target="_blank" class="fb fb-share" data-social-network="Facebook" data-social-action="share" data-social-target="<?php the_permalink(); ?>"><i class="fa fa-facebook"></i> <span>Facebook</span> (<?php echo intval(get_post_meta(get_the_ID(), '_face_recommendations', true)) ?>)</a>
                </div>
                <div class="twitter">
                    <a href="https://twitter.com/intent/tweet?counturl=<?php echo urlencode( get_the_permalink() ) ?>&text=<?php echo urlencode( get_the_title() ); ?>&url=<?php echo urlencode( get_the_permalink() ) ?>&via=Telegram_hr" target="_blank" class="tw" data-social-network="Twitter" data-social-target="<?php the_permalink() ?>" data-social-action="tweet"><i class="fa fa-twitter"></i><span> Twitter</span> (<?php echo intval(get_post_meta(get_the_ID(), '_tweet_recommendations', true)) ?>)</a>
                </div>
                <div class="mail">
                    <a href="mailto:?Subject=Pogledaj ovaj članak s Telegrama&body:<?php the_permalink(); ?>">E-mail</a>
                </div>
            </div>
        </div>

        <?php
    }
}

register_widget( 'Telegram_Podijeli_Clanak' );
