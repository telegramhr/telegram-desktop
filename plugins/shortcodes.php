<?php

class Telegram_Shortcodes {
	public function __construct() {
		add_action( 'admin_init', array( $this, 'action_admin_init' ) );
		add_shortcode( 'quote_box', array( $this, 'quote_box' ) );
		add_shortcode( 'small_video_box', array( $this, 'small_video_box' ) );
		add_shortcode( 'compare_box', array( $this, 'compare_box' ) );
		add_shortcode('telegram_video', array( $this, 'video'));
	}

	function action_admin_init() {
		if ( current_user_can( 'edit_posts' ) ) {
			add_filter( 'mce_buttons', array( $this, 'buttons' ), 99, 1 );
			add_filter( 'mce_external_plugins', array( $this, 'plugins' ) );
		}
	}

	function buttons( $buttons ) {
		if(($key = array_search('blockquote', $buttons)) !== false) {
			unset($buttons[$key]);
		}
		array_push( $buttons, 'separator', 'telegram_shortcodes', 'telegram_mali-video' );

		return $buttons;
	}

	function plugins( $plugins ) {
		$plugins['telegram_shortcodes'] = get_theme_root_uri() . '/telegram2-desktop/assets/js/mce-shortcodes.js?v=1.2';
		return $plugins;
	}

	function quote_box( $atts, $content ) {
		ob_start();
        ?>
        <blockquote class="quote cf">
            <div class="decail"></div>
            <?php echo do_shortcode( $content ); ?>
            <div class="decail"></div>
        </blockquote>

<?php
        return ob_get_clean();
	}

	function small_video_box( $atts, $content ) {
		global $wp_embed;
		global $telegram_smaller;
		$telegram_smaller = true;
		$width = 560;
		$height = 315;
		ob_start();
        ?>
            <?php echo  do_shortcode( '[youtube='.$content.'&w=560&h=315&t=11]' ); ?>
<?php
        return ob_get_clean();
	}

	function compare_box($atts, $content) {
		$img1 = intval($atts['img1']);
		$img2 = intval($atts['img2']);
		global $post;
		$size = 'g1';
		if (isset($atts['full']) && intval($atts['full'])) {
			$size = 'full';
		}
		$class = 'special-left cd-image-container';
		if ('price' == $post->post_type) {
			$size = 'velike-price';
			$class = 'size-large cd-image-container';
		}
		ob_start();
		?>

		<figure class="<?php echo $class; ?>">
			<img src="<?php echo wp_get_attachment_image_src($img2, $size)[0] ?>" style="width: 100%; height: auto;">
			<span class="cd-image-label" data-type="original"><?php echo esc_attr($atts['tekst2']) ?></span>

			<div class="cd-resize-img"> <!-- the resizable image on top -->
				<img src="<?php echo wp_get_attachment_image_src($img1, $size)[0] ?>">
				<span class="cd-image-label" data-type="modified"><?php echo esc_attr($atts['tekst1']) ?></span>
			</div>

			<span class="cd-handle"></span> <!-- slider handle -->
		</figure> <!-- cd-image-container -->
<?php
		return ob_get_clean();
	}

	function video($atts, $content) {
		extract( shortcode_atts(
			array(
				'poster' => '',
				'autoplay' => 1,
				'loop' => 1,
				'muted' => 1,
				'controls' => 0,
				'width' => 0,
				'height' => 0,
			),
			$atts
		));
		return '<video ' . ($autoplay?'autoplay ':'') .
		       ($loop?'loop ':'') .
		       ($muted?'muted ':'') .
		       ($controls?'controls ':'') .
		       ($poster?'poster='.esc_url($poster):'') .' ' .
		       ($width?'width='.intval($width):'') .' ' .
		       ($height?'height='.intval($height):'') .' ' .
		       ' class="native-video" style="'. ($width?'width:'.intval($width).'px;':'') . ($height?' height:'.intval($height).'px;':'') .'">
            <source type="video/mp4" src="' . esc_url($content) . '">
        </video>';


	}
}

new Telegram_Shortcodes();


