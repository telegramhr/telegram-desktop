<?php

require_once(__DIR__ .'/functions-shared.php');

add_action( 'wp_enqueue_scripts', 'telegram_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'telegram_scripts' );


function telegram_enqueue_styles() {
    wp_enqueue_style('telegram-style', get_stylesheet_uri(), array('font-awesome', 'lora', 'pt-sans', 'slick', 'slick-theme'), '94870.23');
    /* Use [current stardate] as style version num */
}

function telegram_scripts() {

	/**
	 * Put shiv for old browsers
	 */
    wp_enqueue_script('html5-shiv', '//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js');
	wp_style_add_data('html5-shiv', 'conditional', 'lt IE 9');

    wp_register_script('sticky-kit', get_template_directory_uri() . '/assets/js/sticky_kit.min.js', array('jquery'), null, true);
    wp_register_script('colour-brightness', get_template_directory_uri() . '/assets/js/jquery.colourbrightness.min.js', array('jquery'), null, true);

    wp_enqueue_script('telegram-script', get_template_directory_uri() . '/assets/js/functions.js', array('jquery', 'slick', 'colour-brightness', 'sticky-kit'), '94870.23', true);


}

add_action('pre_get_posts', 'telegram_main_query');

function telegram_main_query($query) {
    if ($query->is_main_query() && !is_admin()) {
        if (is_category()) {
            $query->set('posts_per_page', 10);
            if (is_category(1402)) {
	            $query->set('posts_per_page', 17);
            }
        }
        else if (is_archive()) {
            $query->set('posts_per_page', 10);
        }
        else if (is_search()) {
            $query->set('orderby', 'date');
        }
        else if (is_author()) {
	        $query->set('posts_per_page', 12);
        }
	    if ($query->is_home()) {
		    $query->set('posts_per_page', 18);
		    $query->set('meta_query', [
			    [
				    'key' => '_zoninator_order_37783',
				    'compare' => 'NOT EXISTS'
			    ],
			    [
				    'key' => '_zoninator_order_37782',
				    'compare' => 'NOT EXISTS'
			    ],
		    ]);
		    $query->set('post__not_in', [
			    get_post_meta(519214, 'break_1_article', true),
			    get_post_meta(519214, 'break_2_article', true),
		    ]);
	    }

    }

}

add_filter('the_content', 'telegram_price_content');

function telegram_price_content($content){
    if (is_amp_endpoint()) {
        return $content;
    }
    if (is_single()) {
        $oglasi = get_field( 'oglasi' );
        if ( $oglasi && in_array( 'inarticle', $oglasi ) ) {
            return $content;
        }
        if (get_post_type() == 'price') {
            $content = explode( "\n", $content, 2 );
            ob_start();
            the_widget( 'Telegram_Banner_Widget', array( 'size' => '300x250-1' ) );
            $ad      = ob_get_clean();
            $content = $content[0] . $ad . $content[1];
        }
        else if ( get_post_type() == 'post' ) {
            $new_line = "\n";
            $parts   = explode( $new_line, $content, 7 );
            $return_content = '';
            for ( $i = 0; $i <= count( $parts ); $i++ ) {
                $return_content .= $parts[$i] . $new_line;
                if ( 1 == $i ) {
                    ob_start();
                    the_widget( 'Telegram_Banner_Widget', array( 'size' => 'intext' ) );
                    $ad = ob_get_clean();
                    $return_content .= $ad . $new_line;
                }
                if ( 2 == $i ) {
                    ob_start();
                    the_widget( 'Telegram_Perun_Banner' );
                    $perun = ob_get_clean();
                    $return_content .= $perun . $new_line;
                }
                if ( 5 == $i ) {
                    ob_start(); ?>
                    <div id="div-gpt-ad-1481290260977-0" class="adsense" style="width:100%; text-align:center;">
                        <script>
                            googletag.cmd.push(function() { googletag.display("div-gpt-ad-1481290260977-0"); });
                        </script>
                    </div><?php
                    $adx = ob_get_clean();
                    $return_content .= $adx . $new_line;
                }
            }
            $adx1 = '<div id=\'div-gpt-ad-1481715328507-0\' class="adsense" style=\'width:100%; text-align:center;\'>
<script>
googletag.cmd.push(function() { googletag.display(\'div-gpt-ad-1481715328507-0\'); });
</script>
</div>';
            //append after lead
            //$return_content = preg_replace( '/<\/h4>/', '</h4>'.$adx1, $return_content, 1);

            //append to end of content
            $adx3 = '<div id=\'div-gpt-ad-1481624513653-0\' class="adsense" style=\'width:100%; text-align:center\'>
<script>
googletag.cmd.push(function() { googletag.display(\'div-gpt-ad-1481624513653-0\'); });
</script>
</div>';
            $return_content .= $new_line . $adx3;
            $content = $return_content;
        }
        // Mladen Pleše fix
        $content = str_replace( "\xC2\xA0", ' ', $content );

        $content = preg_replace("/(.[^\.!?]) I /", '$1 i ', $content);

    }
    return $content;
}

function telegram_text_strings( $translated_text, $text, $context, $domain ) {

    if ($context == 'double prime') {
        if (trim($translated_text) == '&#8243;')
            return '"';

    }
    return $translated_text;
}
add_filter( 'gettext_with_context', 'telegram_text_strings', 20, 4 );

function telegram_tinymce($arr){
    $arr['block_formats'] = 'Odlomak=p;Međunaslov=h2;Disclaimer=h6';

    return $arr;
}
add_filter('tiny_mce_before_init', 'telegram_tinymce');

function telegram_featured_RSS($content) {
    global $post;
    if ( has_post_thumbnail( $post->ID ) ){
        $content = '<div>' . get_the_post_thumbnail( $post->ID, 'g1', array( 'style' => 'margin-bottom: 15px;' ) ) . '</div>' . $content;
    }
    return $content;
}

add_filter('the_excerpt_rss', 'telegram_featured_RSS');
add_filter('the_content_feed', 'telegram_featured_RSS');

function telegram_infinite_scroll_init() {
    add_theme_support( 'infinite-scroll', array(
        'container' => 'content',
        'render'    => 'telegram_render_scroll',
        'footer'    => false,
        'type'      => 'scroll',
        'posts_per_page' => 37
    ) );
}
add_action( 'after_setup_theme', 'telegram_infinite_scroll_init' );
function telegram_render_scroll() {
    while(have_posts()){
        the_post();

        get_template_part('templates/articles/feed');
    }
}


/**
 * Custom header implementation
 *
 * @link https://codex.wordpress.org/Custom_Headers
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses twentyseventeen_header_style()
 */
function twentyseventeen_custom_header_setup() {

    /**
     * Filter Twenty Seventeen custom-header support arguments.
     *
     * @since Twenty Seventeen 1.0
     *
     * @param array $args {
     *     An array of custom-header support arguments.
     *
     *     @type string $default-image     		Default image of the header.
     *     @type string $default_text_color     Default color of the header text.
     *     @type int    $width                  Width in pixels of the custom header image. Default 954.
     *     @type int    $height                 Height in pixels of the custom header image. Default 1300.
     *     @type string $wp-head-callback       Callback function used to styles the header image and text
     *                                          displayed on the blog.
     *     @type string $flex-height     		Flex support for height of header.
     * }
     */
    add_theme_support( 'custom-header', apply_filters( 'twentyseventeen_custom_header_args', array(
        'default-image'      => get_template_directory_uri().'/assets/img/hero/01_hero_bg.png',
        'width'              => 1650,
        'height'             => 320,
        'flex-height'        => true,
        'video'              => true,
        'wp-head-callback'   => 'twentyseventeen_header_style',
    ) ) );

    register_default_headers( array(
        'default-image' => array(
            'url'           => get_template_directory_uri().'/assets/img/hero/01_hero_bg.png',
            'thumbnail_url' => get_template_directory_uri().'/assets/img/hero/01_hero_bg.png',
            'description'   => __( 'Default Header Image', 'twentyseventeen' ),
        ),
    ) );
}
add_action( 'after_setup_theme', 'twentyseventeen_custom_header_setup' );

if ( ! function_exists( 'twentyseventeen_header_style' ) ) :
    /**
     * Styles the header image and text displayed on the blog.
     *
     * @see twentyseventeen_custom_header_setup().
     */
    function twentyseventeen_header_style() {
        $header_text_color = get_header_textcolor();

        // If no custom options for text are set, let's bail.
        // get_header_textcolor() options: add_theme_support( 'custom-header' ) is default, hide text (returns 'blank') or any hex value.
        if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
            return;
        }

    }
endif; // End of twentyseventeen_header_style.

/**
 * Customize video play/pause button in the custom header.
*/
function twentyseventeen_video_controls( $settings ) {
    $settings['l10n']['play'] = '<span class="screen-reader-text">' . __( 'Play background video', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'play' ) );
    $settings['l10n']['pause'] = '<span class="screen-reader-text">' . __( 'Pause background video', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'pause' ) );
    return $settings;
}
add_filter( 'header_video_settings', 'twentyseventeen_video_controls' );

function telegram_relationship_options_filter($options, $field, $the_post) {
	$options['post_status'] = array('publish');
	return $options;
}
add_filter('acf/fields/post_object/query', 'telegram_relationship_options_filter', 10, 3);
