<?php
/* Template: Article-Sidebar */
$cat = get_the_category()[0]; // Get article category
global $post_num;
?>

<article class="article-sidebar">
    <div class="featured-img">
        <?php
        // Main Featured image:
        if( has_post_thumbnail() ) {
            the_post_thumbnail('sidebar');
        } else {
            echo '<img src="'.get_template_directory_uri().'/assets/img/dummy/article-sidebar.png"/>';
        } ?>
        <div class="post-num"><?php echo $post_num; ?></div>
    </div>
    <header>
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