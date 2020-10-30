<?php
/* Template: Article-Fullpage */
$cat = get_the_category()[0]; // Get article category
?>

<?php
if (is_home()) { ?>
<article class="article-fullpage" data-id="<?php the_ID(); ?>" data-position="home_g1_fullpage"><?php
    }
    else if (is_category()) {

    $cat = get_category( get_query_var('cat') ); ?>

    <article class="article-fullpage" data-id="<?php the_ID(); ?>" data-position="<?php echo $cat->slug ?>_g1_fullpage">

        <?php } else if( is_page_template('template-telesport.php') ) { ?>

        <article class="article-fullpage" data-id="<?php the_ID(); ?>" data-position="telesport_g1_fullpage">

            <?php } else { ?>

            <article class="article-fullpage">

                <?php } ?>

    <?php if( is_front_page() ) { ?>
    <div class="overtitle">
        <?php
        if( $cat->name = 'Velike priče' ) {
            echo 'Velika priča';
        }
        else {
            echo $cat->name;
        }
        ?>
    </div>
    <?php } ?>

    <div class="featured-img"
         style="background-image: url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'fullpage')[0] ?>);">
       <div class="shadow"></div>
    </div>
    <header>
        <a href="<?php the_permalink(); ?>">
            <h1 class="title">
                <?php the_title(); ?>
            </h1>
            <h2 class="subtitle">
                <?php echo get_excerpt(get_post_meta( get_the_ID(), 'subtitle', true ) , 141 ); ?>
            </h2>
        </a>

        <div class="article-meta cf">
            <?php
            // Get authors
            $authors = get_coauthors();
            foreach($authors as $author) {
                $avatar = get_post_meta( get_the_ID(), 'avatar', 'user_' . $author->ID, true ) ;
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
            <span class="date"><?php the_time(); ?></span>
            <span class="rcmnd-no"><?php echo intval(get_post_meta(get_the_ID(), '_recommendations', true)) ?> preporuka</span>
            <span><?php echo intval(get_post_meta(get_the_ID(), '_comments', true)) ?> komentara</span>
        </div>
    </header>

</article>