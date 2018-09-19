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


        // Naslov izvan slike
        if( $format == 2 ) {?>

            <div class="single-head out-picture">
                <?php
                $video = get_post_meta($post->ID, 'video', true);
		    if ($video) {
		        ?>
                <div class="thumb">
	                <?php
                    echo apply_filters('widget_text_content', trim($video)); ?>
                </div>
                <?php
            }
		    else { ?>
                <div class="thumb">
                    <?php
                    the_post_thumbnail('widescreen'); ?>
                </div>
                <?php } ?>
                <div class="titles">
                    <div class="container">
                        <div class="head-meta">
                            Piše:
	                        <?php
                            $first = true;
	                        foreach ( get_coauthors() as $author ) {
		                        ?>
                                 <a href="<?php echo get_author_posts_url( $author->ID, $author->user_login ); ?>"><?php echo $author->display_name; ?></a>
		                        <?php
                                if ($first) {
                                    echo ', ';
	                                $first = false;
                                }

	                        }
	                        if ( telegram_get_photographer() ) {
		                        ?>
                                | Snima: <?php echo telegram_get_photographer(); ?>
		                        <?php
	                        }
	                        ?>
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
                        Piše:
                        <?php
                        $first = true;
                        foreach ( get_coauthors() as $author ) {
                            ?>
                             <a href="<?php echo get_author_posts_url( $author->ID, $author->user_login ); ?>"><?php echo $author->display_name; ?></a>
                            <?php
	                        if ($first) {
		                        echo ', ';
		                        $first = false;
	                        }
                        }
                        if ( telegram_get_photographer() ) {
	                        ?>
                            | Snima: <?php echo telegram_get_photographer(); ?>
	                        <?php
                        }
                        ?>
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

            <div class="zones">
                <?php the_widget('Telegram_Banner_Widget', array('size' => 'telegram_desktop_billboard_v1')); ?>
            </div>

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
                        foreach (get_coauthors() as $author) {
	                        if( coauthors_get_avatar($author) ) {
                            ?>
                            <div class="author-thumb">
                                <a href="<?php echo get_author_posts_url( $author->ID, $author->user_login ); ?>">
                                    <?php

                                        echo coauthors_get_avatar($author, 150);
                                     ?>
                                </a>
                            </div>
                        <?php
	                        }
                        } ?>
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

        <?php }
        else {
	    ?>

        <div class="single-head in-picture">
		    <?php
		    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'fullpage' );
		    ?>
            <div class="thumb" style="background-image: url(<?php echo $thumb['0']; ?>);">
                <div class="overlay"></div>
            </div>
            <div class="titles">
                <div class="head-meta">
                    Piše:
				    <?php
                    $first = true;
				    foreach ( get_coauthors() as $author ) { ?>
                        <a href="<?php echo get_author_posts_url( $author->ID, $author->user_login ); ?>">
						    <?php echo $author->display_name; ?>
                        </a>
					    <?php
					    if ($first) {
						    echo ', ';
						    $first = false;
					    }

				    }
				    if ( telegram_get_photographer() ) {
					    echo ' | Snima: ' . telegram_get_photographer();
				    }
				    ?>
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
    ?>

        <?php
        // Ako ne forsiramo bijeli logo:
        // namjesti automatski prema svjetlini slike
        if( !get_field('white_logo') ) { ?>
        <script type="text/javascript">
            window.white_logo = true
        </script>
        <?php } ?>

        <div class="zones container">
            <?php
            if( $format != 4 ) {
                the_widget('Telegram_Banner_Widget', array('size' => 'telegram_desktop_billboard_v1'));
            } ?>
            <div class="wallpapers">
                <?php
                // Wallpapers
                the_widget('Telegram_Banner_Widget', array('size' => 'telegram_desktop_wallpaper_left'));
                the_widget('Telegram_Banner_Widget', array('size' => 'telegram_dekstop_wallpaper_right')); ?>
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
                                <a href="https://www.facebook.com/dialog/share?app_id=1383786971938581&display=popup&href=<?php echo urlencode( get_the_permalink() ); ?>&redirect_uri=<?php echo urlencode( get_the_permalink() ); ?>" target="_blank" class="fb fb-share" data-social-network="Facebook" data-social-action="share" data-social-target="<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a>
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
                    <?php
                    // Tags
                    the_tags('<div class="tags">', ', ', '</div>'); ?>
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
