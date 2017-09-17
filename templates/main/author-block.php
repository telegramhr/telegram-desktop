<div class="author-block cf">
    <?php
    $authors = get_coauthors();
    foreach($authors as $author) {
        $avatar = get_field('avatar', 'user_'.$author->ID);
        $size = 'thumbnail';
        $twitter = get_field('twitter', 'user_'.$author->ID); ?>

        <div class="author cf">
            <div class="author-avatar">
                <?php
                if( $avatar ) {
                    echo '<a href="<?php echo get_author_posts_url( $author->ID, $author->user_login ); ?>">';
                    echo wp_get_attachment_image($avatar, $size);
                    echo '</a>';
                } else {
                    echo '<img src="' . get_template_directory_uri() . '/assets/img/dummy/author.png" />';
                } ?>
            </div>
            <div class="author-name">
                <a href="<?php echo get_author_posts_url($author->ID) ?>"><?php echo $author->display_name; ?></a>
            </div>
            <?php
            if( $twitter ) {
                echo '<a class="author-twitter" target="_blank" href="https://twitter.com/'.$twitter.'">@'.$twitter.'</a>';
            } else {
                echo '<a class="author-twitter" target="_blank" href="https://twitter.com/'.$twitter.'">@telegramHR</a>';
            } ?>
        </div> <?php
    } ?>
</div>