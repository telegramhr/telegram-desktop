<?php

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
			$post = get_post($id);
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