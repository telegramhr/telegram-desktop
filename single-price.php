<?php
get_header(); ?>

<?php
if( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        ?>

        <div class="single-page longform">
        <?php
        // Check article format
        $format = intval(get_post_meta( get_the_ID(), 'telegram_expanded', true ));

        // Naslov u slici
        if( $format == 1 ) {
        ?>

            <div class="single-head in-picture">
                <?php
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'fullpage' ); ?>
                <div class="thumb" style="background-image: url(<?php echo $thumb['0']; ?>);">
                    <?php
                    // The Photographer
                    if( telegram_get_photographer() ) { ?>
                        <div class="photographer">
                            Foto: <?php echo telegram_get_photographer() ?>
                        </div>
                        <?php
                    }  ?>
                    <div class="overlay"></div>
                </div>

                <div class="titles">
                    <div class="head-meta">
                        <?php
                        foreach ( get_coauthors() as $author ) { ?>
                        Piše:
                        <a href="<?php echo get_author_posts_url( $author->ID, $author->user_login ); ?>">
                            <?php echo $author->display_name; ?>
                        </a>
                        <?php
                            if ( telegram_get_photographer() ) {
                                echo ' | Snima: ' . telegram_get_photographer();
                            }
                        } ?>
                    </div>
                    <h1 class="title">
                        <?php the_title(); ?>
                    </h1>
                    <h2 class="subtitle">
                        <?php
                        echo get_excerpt( get_field('subtitle'), 141 ); ?>
                    </h2>
                </div>
            </div>

        <?php }
        // Naslov izvan slike
        else if( $format == 2 ) { ?>

            <div class="single-head out-picture">
                <div class="thumb">
                    <?php
                    the_post_thumbnail('widescreen'); ?>
                </div>
                <div class="titles">
                    <div class="container">
                        <div class="head-meta">
                            <?php
                            foreach ( get_coauthors() as $author ) {
                                echo 'Piše: '.$author->display_name;
                                if ( telegram_get_photographer() ) {
                                    echo ' | Snima: ' . telegram_get_photographer();
                                }
                            } ?>
                        </div>

                        <h1 class="title">
                            <?php the_title(); ?>
                        </h1>
                        <h2 class="subtitle">
                            <?php
                            echo get_excerpt( get_field('subtitle'), 141 ); ?>
                        </h2>
                    </div>
                </div>
            </div>

        <?php }
        // Portret
        else if( $format == 3 ) { ?>

            <div class="single-head portrait">
                <?php
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'portrait' ); ?>
                <div class="thumb" style="background-image: url(<?php echo $thumb['0']; ?>);">
                </div>
                <div class="titles">
                    <div class="head-meta">
                        <?php
                        foreach ( get_coauthors() as $author ) {
                            echo 'Piše: '.$author->display_name;
                            if ( telegram_get_photographer() ) {
                                echo ' | Snima: ' . telegram_get_photographer();
                            }
                        } ?>
                    </div>

                    <h1 class="title">
                        <?php the_title(); ?>
                    </h1>
                    <h2 class="subtitle">
                        <?php
                        echo get_excerpt( get_field('subtitle'), 141 ); ?>
                    </h2>
                </div>
            </div>
            
        <?php }
        // Bez slike
        else if( $format == 4 ) { ?>

        <div class="single-head no-img">
            <div class="titles">
                <div class="container">
                    <h3 class="overtitle"><?php the_category(); ?></h3>
                    <h1 class="title">
                        <?php the_title(); ?>
                    </h1>
                    <h2 class="subtitle">
                        <?php
                        echo get_excerpt( get_field('subtitle'), 141 ); ?>
                    </h2>

                    <div class="article-meta">
                        <?php
                        foreach (get_coauthors() as $author) { ?>
                            <div class="author-thumb">
                                <a href="<?php echo get_author_posts_url( $author->ID, $author->user_login ); ?>">
                                    <?php echo coauthors_get_avatar($author, 'guest-author-96'); ?>
                                </a>
                            </div>
                        <?php } ?>
                        <span class="author">
                            <a href="<?php echo get_author_posts_url( $author->ID, $author->user_login ); ?>">
                                <?php echo $author->display_name; ?>
                            </a>
                        </span>
                    </div>

                    <?php get_template_part('templates/articles/article-meta'); ?>

                </div>
            </div>
        </div>

        <?php } ?>

        <?php
        // Ako ne forsiramo bijeli logo:
        // namjesti automatski prema svjetlini slike
        if( !get_field('white_logo') ) { ?>
        <script type="text/javascript">
            var target = '.single-price .single-head .thumb img';
            if ( jQuery(target).length ) {
                jQuery(target).colourBrightness();
                if ( jQuery(target).hasClass('light') ) {
                    jQuery('body').addClass('light');
                }
            }
            if( jQuery('.single-head').hasClass('no-img') ) {
                jQuery('body').addClass('light');
            }
        </script>
        <?php } ?>

        <div class="zones container">
            <?php
            the_widget('Telegram_Banner_Widget', array('size' => 'billboard1')); ?>
            <div class="wallpapers">
                <?php
                // Wallpapers
                the_widget('Telegram_Banner_Widget', array('size' => 'wallpaper-left'));
                the_widget('Telegram_Banner_Widget', array('size' => 'wallpaper-right')); ?>
            </div>
        </div>

        <div class="single-body container">

            <?php if( get_field('perex') ) {
                echo '<div class="perex">'.get_field('perex').'</div>';
            } ?>

            <!-- Single Content -->
            <div class="single-content">
                <div class="content-container">
                    <?php
                    if( $format != 4 ) {
                        get_template_part('templates/articles/article-meta');
                        get_template_part('templates/layout/left-share');
                    } else {
                        ?>
                        <div class="left-share" style="top: 40px;">

                            <div class="facebook">
                                <a href="https://www.facebook.com/dialog/share?app_id=1686748541639058&display=popup&href=<?php echo urlencode( get_the_permalink() ); ?>&redirect_uri=<?php echo urlencode( get_the_permalink() ); ?>" target="_blank" class="fb fb-share" data-social-network="Facebook" data-social-action="share" data-social-target="<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a>
                            </div>

                            <div class="twitter">
                                <a href="https://twitter.com/intent/tweet?counturl=<?php echo urlencode( get_the_permalink() ) ?>&text=<?php echo urlencode( get_the_title() ); ?>&url=<?php echo urlencode( get_the_permalink() ) ?>&via=TelegramHR" target="_blank" class="tw" data-social-network="Twitter" data-social-target="<?php the_permalink() ?>" data-social-action="tweet"><i class="fa fa-twitter"></i> </a>
                            </div>

                            <div class="linkedin">
                                <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php the_excerpt(); ?>&source="><i class="fa fa-linkedin"></i></a>
                            </div>

                            <div class="mail">
                                <a href="mailto:?Subject=Pogledaj ovaj članak s Telesporta&body:<?php the_permalink(); ?>"><i class="fa fa-envelope"></i></a>
                            </div>

                        </div>
                        <?php
                    } ?>
                    <div class="the-content">
                    <?php
                    // Article content
                    the_content(); ?>
                    </div>
                    <div class="ender">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tg-logo-red.svg"/>
                    </div>
                    <?php // Article bottom sidebar
                    dynamic_sidebar('sidebar-single-bottom-1'); ?>
                </div>
            </div>

        </div>

        <?php
        // Bottom single sidebar - Fullwidth
        dynamic_sidebar('sidebar-single-bottom-2'); ?>

        <?php
    }
}
?>
    </div>

<?php
get_footer();
