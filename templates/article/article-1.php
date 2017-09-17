<?php
/* Template: Article-1 */
$cat = get_the_category()[0]; // Get article category
?>

<article class="article-1">

    <header>
        <h1 class="title">
            <a href="<?php the_permalink() ?>">
                <?php the_title(); ?>
            </a>
        </h1>
    </header>

    <div class="featured-img">
        <?php
            // TG Quick Editor
            if( current_user_can('edit_others_pages') && is_front_page() ) {
                get_template_part('templates/editor/article-editor');
            }
            // Main Featured image:
            if( has_post_thumbnail() ) {
                // Display image and shadow
                echo '<div class="shadow"></div>';
                the_post_thumbnail('article-1');
            } else {
                echo '<img src="'.get_template_directory_uri().'/assets/img/dummy/article-1.png"/>';
            }
        ?>
    </div>
    <div class="article-meta cf">
        <span class="author"><?php the_author(); ?></span>
        <span class="date"><?php the_time(); ?></span>
        <span class="rcmnd-no"><?php echo intval(get_post_meta(get_the_ID(), '_recommendations', true)) ?> preporuka</span>
        <span><?php echo intval(get_post_meta(get_the_ID(), '_comments', true)) ?> komentara</span>
    </div>

</article>