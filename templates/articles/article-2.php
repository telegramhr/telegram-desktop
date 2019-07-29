<article class="article-2">
    <div class="thumb">
        <a href="<?php the_permalink(); ?>">
            <?php
            get_template_part('templates/articles/article-badge');
            // Get featured Image
            the_post_thumbnail('fourth'); ?>
        </a>
    </div>
    <div class="titles">
        <?php
        // Get Source
        $src = 'telegram';
        $src_link = get_the_permalink();
        if ( strpos( $src_link, 'telesport') !== false ) {
            $src = 'telesport';
        }
        elseif ( strpos( $src_link, 'dblog') !== false ) {
            $src = 'dblog';
        }
         ?>
        <div class="article-cat">
            <?php
            if( $src != 'telegram' ) {
                ?>
                <a href="http://<?php echo $src; ?>.hr" target="_blank">
                    <?php echo $src; ?>
                </a>
                <?php
            }
            else if ( 'partneri' === get_post_type() ) {
	            ?><a href="#">
                    TELEGRAM PARTNERI
                </a><?php
            }
            else {
	            // Get Category
	            $cat = get_the_category();
	            if ($cat) {
		            ?>
                    <a href="<?php echo get_category_link( $cat[0]->cat_ID ); ?>">
			            <?php echo $cat[0]->name; ?>
                    </a>
		            <?php
	            }
	            else {
		            ?><a href="#">
                        TELEGRAM
                    </a><?php
                }
            } ?>
        </div>
        <h1 class="title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h1>
        <h2 class="subtitle">
            <?php
            $subtitle = get_excerpt( get_field('subtitle'), 141 );
            if( mb_strlen( $post->post_title ) <= 115 ) {
                echo $subtitle;
            }
            ?>
        </h2>
        <?php
        // Author / Time / Recommendations / Comments
        get_template_part('templates/articles/article-meta'); ?>
    </div>
</article>