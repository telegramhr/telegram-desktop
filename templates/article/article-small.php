<?php
/* Template: Article-Sidebar */
$cat = get_the_category()[0]; // Get article category
?>

<article class="article-small">
    <div class="featured-img">
        <?php
        // Main Featured image:
        if( has_post_thumbnail() ) {
            the_post_thumbnail('thumbnail');
        } else {
            echo '<img src="'.get_template_directory_uri().'/assets/img/dummy/article-sidebar.png"/>';
        } ?>
    </div>
    <header>
        <h1 class="title">
            <a href="<?php the_permalink() ?>">
                <?php the_title(); ?>
            </a>
        </h1>

        <div class="article-meta cf">
            <span class="rcmnd-no"><?php echo intval(get_post_meta(get_the_ID(), '_recommendations', true)) ?> preporuka</span>
        </div>
    </header>

</article>