<?php
/* Template: Article-Fourth */
$cat = get_the_category()[0]; // Get article category
?>

<article class="article-fourth anim">
    <div class="featured-img">
        <?php
        // TG Quick Editor
        if( current_user_can('edit_others_pages') && is_front_page() ) {
            get_template_part('templates/editor/article-editor');
        } 
        // Main Featured image:
        if( has_post_thumbnail() ) {
            the_post_thumbnail('fourth');
        } else {
            echo '<img src="'.get_template_directory_uri().'/assets/img/dummy/article-fourth.png"/>';
        } ?>
    </div>
    <header>
        <h1 class="title">
            <a href="<?php the_permalink() ?>">
                <?php the_title(); ?>
            </a>
        </h1>

        <div class="article-meta cf">
            <span><?php echo intval(get_post_meta(get_the_ID(), '_comments', true)) ?> komentara</span>
            <span class="rcmnd-no"><?php echo intval(get_post_meta(get_the_ID(), '_recommendations', true)) ?> preporuka</span>
        </div>
    </header>

</article>