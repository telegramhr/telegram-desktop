<?php

class Telegram_Walker_Menu extends Walker_Nav_Menu {
	static $count=0;

	/**
	 * Ends the element output, if needed.
	 *
	 * @see Walker::end_el()
	 *
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item   Page data object. Not used.
	 * @param int    $depth  Depth of page. Not Used.
	 * @param array  $args   An array of arguments. @see wp_nav_menu()
	 */
	public function end_el( &$output, $item, $depth = 0, $args = array() ) {

		if ( 0 == self::$count) {
			ob_start();
			?>

			<?php
			$output .= ob_get_clean();
		}
		/*
		if ('Autori' == $item->title) {
			$data = wp_cache_get('telegram_menu_authors_cache');
			if (!$data) {
				$authors = new WP_User_Query(array(
					'meta_key' => 'top_autor',
					'meta_value' => 1,
					'number' => 20
				));

				ob_start();
				?>
				<ul class="sub-menu">
				<?php
				$authors = $authors->get_results();
				shuffle($authors);
				foreach ($authors as $author) {
				$avatar = get_field('avatar', 'user_'.$author->ID);
				$size = 'img-166';
				$url = get_author_posts_url($author->ID);
				$name = $author->display_name;
				?>
					<li>
						<a href="<?php echo $url; ?>">
								<div class="inner">
									<div class="text">
										<h2 class="title">
											<?php echo $name; ?>
										</h2>
									</div>
								</div>
							<?php echo wp_get_attachment_image( $avatar, $size ); ?>
						</a>
					</li>
			<?php } ?>
				</ul><?php
				$data = ob_get_clean();
				wp_cache_set( 'telegram_menu_authors_cache', $data, 'telegram_menu', DAY_IN_SECONDS );
			}
			$output .= $data;
		}
		*/
		$output .= "</li>\n";
		self::$count++;
	}

	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

			parent::start_el( $output, $item, $depth, $args, $id );

	}
}