<?php
/* Template: Article-Fullwidth */
$cat = get_the_category()[0]; // Get article category
?>

<div class="clear"></div>

<?php
if (is_home()) { ?>
    <article class="article-fullwidth" data-id="<?php the_ID(); ?>" data-position="home_g1_fullwidth"><?php
}
else if (is_category()) {

$cat = get_category( get_query_var('cat') ); ?>

    <article class="article-fullwidth" data-id="<?php the_ID(); ?>" data-position="<?php echo $cat->slug ?>_g1_fullwidth">

<?php } else if( is_page('telesport') ) { ?>

    <article class="article-fullwidth" data-id="<?php the_ID(); ?>" data-position="telesport_g1_fullwidth">

<?php } else { ?>

<article class="article-fullwidth">

<?php } ?>


    <div class="featured-img">
        <?php
        // TG Quick Editor
        if( current_user_can('edit_others_pages') ) {
            get_template_part('templates/editor/article-editor');
        }
        // Main Featured image:
        if( has_post_thumbnail() ) {
            // Display image and shadow
            echo '<div class="shadow"></div>';
            the_post_thumbnail('fullwidth');
        } else {
            echo '<img src="'.get_template_directory_uri().'/assets/img/dummy/article-1.png"/>';
        } ?>
        <header>
            <div class="article-meta">
                <?php
                // Get authors
                $authors = get_coauthors();
                foreach($authors as $author) {
                    $avatar = get_field('avatar', 'user_' . $author->ID);
                    $size = 'thumbnail'; ?>

                    <div class="author cf">
                        <div class="author-avatar">
                            <?php
                            if( $avatar ) {
                                echo wp_get_attachment_image($avatar, $size);
                            } else {
                                echo '<img src="' . get_template_directory_uri() . '/assets/img/dummy/author.png" />';
                            } ?>
                        </div>
                        <div class="author-name">
                            <a href="<?php echo get_author_posts_url($author->ID) ?>"><?php echo $author->display_name; ?></a>
                        </div>
                    </div>
                    <?php
                } ?>
            </div>

            <h1 class="title">
                <a href="<?php the_permalink() ?>">
                    <?php the_title(); ?>
                </a>
            </h1>
            <div class="article-meta cf">
                <span class="date"><?php the_time(); ?></span>
                <span class="rcmnd-no"><?php echo intval(get_post_meta(get_the_ID(), '_recommendations', true)) ?> preporuka</span>
                <span><?php echo intval(get_post_meta(get_the_ID(), '_comments', true)) ?> komentara</span>
            </div>
        </header>
    </div>

</article>