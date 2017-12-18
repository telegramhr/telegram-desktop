<div class="article-meta">
    <span class="author">
        <?php
        // Get authors
        $authors = get_coauthors();
        foreach($authors as $author) {
            ?>
            <a href="<?php echo get_author_posts_url( $author->ID, $author->user_login ); ?>">
                <?php echo $author->display_name; ?>
            </a>
            <?php
            break;
        }
    ?>
    </span>
    <span class="time"><?php the_time() ?></span>
    <span class="rcmds"><?php echo intval(get_post_meta(get_the_ID(), '_recommendations', true)) ?> preporuka</span>
    <span class="comms"><?php echo intval(get_post_meta(get_the_ID(), '_comments', true)) ?> komentara</span>
</div>