<div class="featured-articles cf">
    <?php
    $args = array(
        'post_type' => array('post', 'fotogalerije', 'video', 'price'),
        'showposts' => 5
    );
    $articles = new WP_Query($args);
    if ( $articles->have_posts() ) {
        while ( $articles->have_posts() ) {
            $articles->the_post();
            // Custom article template ?>

            <div class="skew-container">

                <article class="featured-article">
                    <div class="featured-img">
                        <?php
                        // Main Featured image:
                        if( has_post_thumbnail() ) {
                            // Display image and shadow
                            echo '<div class="shadow"></div>';
                            the_post_thumbnail('article-1');
                        } else {
                            echo '<img src="'.get_template_directory_uri().'"assets/img/dummy/article-2.jpg"/>';
                        }
                        ?>
                    </div>
                    <header>
                        <h3 class="overtitle">
                            <?php $cat = get_the_category()[0]; // Get article category ?>
                            <a href="<?php echo get_category_link($cat); ?>">
                                <?php echo $cat->name ?>
                            </a>
                        </h3>
                        <h1 class="title">
                            <a href="<?php the_permalink() ?>">
                                <?php the_title(); ?>
                            </a>
                        </h1>
                    </header>

                </article>

            </div>

            <?php
        }
    }
    wp_reset_postdata();
    ?>
</div>