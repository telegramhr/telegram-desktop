<?php
/* Template: Article-Feed */
$cat = get_the_category()[0]; // Get article category
?>

<article class="article-feed">
    <div class="featured-img">
        <?php
        // TG Quick Editor
        if( current_user_can('edit_others_pages') && is_front_page() ) {
            get_template_part('templates/editor/article-editor');
        } ?>

        <?php
        // Main Featured image:
        if( has_post_thumbnail() ) {
            the_post_thumbnail('feed');
        } else {
            echo '<img src="'.get_template_directory_uri().'/assets/img/dummy/article-feed.png"/>';
        } ?>
    </div>
    <header>
        <h3 class="overtitle">
            <a href="<?php echo get_category_link($cat); ?>">
                <?php echo $cat->name ?>
            </a>
        </h3>
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

</article>