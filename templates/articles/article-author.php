
<article class="article-sidebar article-author">
    <div class="thumb">
        <a href="<?php the_permalink() ?>">
            <?php
            // Main Featured image:
            if( has_post_thumbnail() ) {
                the_post_thumbnail('sidebar');
            } else {
                echo '<img src="'.get_template_directory_uri().'/assets/img/dummy/article-sidebar.png"/>';
            }
            ?>
            <div class="author-block">
                <div class="overlay"></div>
                <?php
                foreach (get_coauthors() as $author) { ?>
                    <div class="author-thumb">
                        <?php echo coauthors_get_avatar($author, array(200,200)); ?>
                    </div>
                    <div class="author-name">
                        <div class="first-name">
                            <?php echo $author->first_name; ?>
                        </div>
                        <div class="last-name">
                            <?php echo $author->last_name; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </a>
    </div>
    <div class="titles">
        <h1 class="title">
            <a href="<?php the_permalink() ?>">
                <?php the_title(); ?>
            </a>
        </h1>
        <div class="article-meta">
            <span><?php echo intval(get_post_meta(get_the_ID(), '_comments', true)) ?> komentara</span>
            <span class="rcmds"><?php echo intval(get_post_meta(get_the_ID(), '_recommendations', true)) ?> preporuka</span>
        </div>
    </div>

</article>