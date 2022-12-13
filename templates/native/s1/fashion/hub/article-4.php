<article class="article-4">
    <div class="article-img">
        <a href="<?php the_permalink(); ?>">
            <?php
            // Get Sticker Badge
            if( get_post_meta( get_the_ID(), 'sticker', true ) ) { ?>
            <div class="sticker <?php echo get_post_meta( get_the_ID(), 'sticker', true ) ; ?>"></div><?php
            }
            // Post thumb
            if (wp_is_mobile()) {
	            the_post_thumbnail( 'featured-1' );
            }
            else {
	            the_post_thumbnail( 'featured-4' );
            }
             ?>
        </a>
    </div>
    <div class="article-text">
        <div class="text-area">
            <?php
            // Overtitle
            if( get_post_meta( get_the_ID(), 'nadnaslov', true )  ) {
                ?>
                <h3 class="overtitle">
                    <?php echo get_post_meta( get_the_ID(), 'nadnaslov', true ) ; ?>
                </h3>
                <?php
            } ?>
            <h1 class="title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h1>
            <div class="article-meta">
                <?php
                // Get authors
                $authors = get_coauthors();
                foreach($authors as $author) {
                    ?> by
                    <a href="<?php echo get_author_posts_url( $author->ID, $author->user_login ); ?>">
                        <?php echo $author->display_name; ?>
                    </a>
                    <?php
                } ?>
            </div>
        </div>
    </div>
</article>