<?php

remove_shortcode('gallery');
add_shortcode('gallery', 'super1_gallery_shortcode');

function super1_gallery_shortcode($attr) {
    $ids = explode(',',$attr['ids']);
    ob_start();
    ?>
    <div class="article-gallery flex">
        <?php
        foreach ($ids as $id) { $id = intval($id); ?>
            <figure class="wp-caption article-gallery-img">
                <?php $p = get_post($id); ?>
                <?php $image = wp_get_attachment_image_src($id, 'gallery') ?>
                <img data-lazy='<?php echo $image[0] ?>' width="<?php echo $image[1] ?>"  height="<?php echo $image[2] ?>" />
                <h1 class="gallery-title">
                    <?php if($p->post_title) { echo $p->post_title; } ?>
                </h1>
                <figcaption class="wp-caption-text">
                    <?php $post = get_post($id); echo apply_filters( 'wp_content', $post->post_excerpt ); ?>
                    <div class="photographer">
                        <?php echo get_post_meta( $id, 'fotograf', true )  ?>
                        <?php echo get_post_meta( $id, 'agencija', true )  ?>
                    </div>
                </figcaption>
            </figure>

            <?php
        }
        ?>
    </div> <!-- end .article-gallery -->
    <?php
    return ob_get_clean();
}
/*
remove_shortcode('gallery');
add_shortcode('gallery', 'telegram_gallery_shortcode');

function telegram_gallery_shortcode($attr) {
	$ids = explode(',',$attr['ids']);
	ob_start();
	?><div class="gallery-slider"><?php
        $gallery_captions = array();
		foreach ($ids as $id) { $id = intval($id); ?>
			<div class="gallery-image">

				<div class="gallery-meta">
					<h2 class="caption"><?php $post = get_post($id); echo apply_filters( 'wp_content', $post->post_excerpt ); ?></h2>
					<?php if ( get_post_meta( get_the_ID(), 'fotograf', $id, true )  || get_post_meta( get_the_ID(), 'agencija', $id, true )  ) { ?>
						<div class='photo-author'>
							 | <?php echo get_post_meta( get_the_ID(), 'fotograf', $id, true )  ?>
								<?php echo get_post_meta( get_the_ID(), 'agencija', $id, true )  ?>
						</div>
					<?php } ?>
				</div>

				<div class="inner">
					<img src='<?php echo wp_get_attachment_image_src($id, 'gallery')[0] ?>'  />
				</div>
			</div>
		<?php
            $gallery_captions[] = array(
                    //'caption' => apply_filters( 'wp_content', $post->post_excerpt ),
                    //'foto' => telegram_get_photographer($id)
            );
		}
		?>
    </div>
    <script>
        var gallery_captions = <?php echo wp_json_encode($gallery_captions) ?>;

    </script>
    <?php
	return ob_get_clean();
}

function telegram_new_gallery_shortcode($attr) {
	$ids = explode(',',$attr['ids']);
	$gallery = [];
	foreach ($ids as $id) {
	    $id = intval($id);
	    $post = get_post($id);
	    $gallery[] = [
            'caption' => apply_filters( 'wp_content', $post->post_excerpt ),
            'author' => telegram_get_photographer($id),
            'url' => wp_get_attachment_image_src($id, 'full')[0]
		];
	}
	return json_encode($gallery);
}
*/
