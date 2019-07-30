<?php $block = wp_cache_get('super1_block', 'blocks');
if (!$block) {
	ob_start();
	?>
<div class="block block-super1">
    <div class="container">
        <div class="tg-widget-head big-title lined">
            <a href="https://super1.telegram.hr/" target="_blank">
                Super1
            </a>
            <small>
                <a href="https://super1.telegram.hr/" target="_blank">
                    Vidi više
                </a>
            </small>
        </div>
        <div class="block-body feed-container">
            <?php
            switch_to_blog( 3 );
            $articles = z_get_zone_query('telegram-homepage', ['post_type' => array( 'post' )]);
            $out = [];
            foreach ($articles->posts as $article) {
	            $out[] = $article->ID;
            }
            $args     = array(
	            'posts_per_page' => 3,
	            'no_found_rows'  => true,
	            'post_type'      => array( 'post' ),
	            'post_status'    => 'publish',
	            'post__not_in' => $out
            );
            $articles2 = new WP_Query( $args );
            global $post;
            ?>
            <div class="col col-1 feed">
		        <?php
		        $post = $articles->posts[0];
		        get_template_part( 'templates/articles/article-1' );
		        ?>
            </div>
            <div class="col col-2">
		        <?php
		        // Column 2
		        while($articles2->have_posts()) {
			        $articles2->the_post();
			        get_template_part( 'templates/articles/article-block' );
		        }
		        ?>
            </div>
            <div class="col col-3 sidebar">
		        <?php
		        $post = $articles->posts[1];
		        get_template_part( 'templates/articles/article-sidebar' );
		        $post = $articles->posts[2];
		        get_template_part( 'templates/articles/article-sidebar' );
		        ?>
            </div>
	        <?php
	        wp_reset_postdata();
	        restore_current_blog();
            ?>
        </div>
    </div>
</div>
	<?php

	$block = ob_get_clean();
	wp_cache_set( 'super1_block', 'blocks', 15 * 60 );
}

echo $block;
