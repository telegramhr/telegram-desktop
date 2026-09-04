<?php
require_once ('plugins/shortcodes.php');
require_once ('plugins/charts.php');
require_once ('plugins/acf.php');
$content_width = 605;
remove_action( 'do_pings', 'do_all_pings' );

define('PARENT_PATH', get_theme_root_uri().'/telegram2-desktop');

add_filter( 'wp_calculate_image_srcset', '__return_false' );

add_action('after_setup_theme', 'telegram_setup');
function telegram_setup() {

    add_theme_support( 'title-tag' );

    add_editor_style(array('css/editor-style.css'));

    add_theme_support('automatic-feed-links');

    add_theme_support('post-thumbnails');

    add_filter('use_default_gallery_style', '__return_false');
}

add_action('admin_init', 'telegram_admin_init');
function telegram_admin_init() {
	add_editor_style();
}

add_filter( 'image_size_names_choose', 'telegram_custom_sizes', 10, 1 );

function telegram_custom_sizes( $sizes ) {
	return array(
        'large' => 'Slika u članku',
        'full'      => __('Full Size'),
	);
}

// load css and js
function telegram_main_scripts() {
	// Load our main stylesheet.

	wp_register_style('slick', get_stylesheet_directory_uri() . '/assets/js/slick/slick.css', [], '20190402');
	wp_register_style('slick-theme', get_stylesheet_directory_uri().  '/assets/js/slick/slick-theme.css', [], '20190402');
	wp_register_script('slick', get_stylesheet_directory_uri() . '/assets/js/slick/slick.js',null, '20170917', true);
	// For touch controls
	wp_register_script('hammer-time', get_stylesheet_directory_uri() . '/assets/js/hammer-time.min.js',null, '20170917', true);
	wp_register_script('wow', get_stylesheet_directory_uri() . '/assets/js/wow/wow.min.js');
	wp_register_style('native-animate', get_stylesheet_directory_uri() . '/assets/js/wow/animate.css', [
		'slick', 'slick-theme'
	]);
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js', false, '3.2.1', false);

    telegram_load_fonts();
}

add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
	wp_dequeue_style( 'wp-block-library' );
}

function telegram_load_fonts() {
    wp_enqueue_script('google-font-loader', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js', [], '1.6.26');
    $data = "WebFont.load({
        google: {
            families: ['Oswald', 'PT Sans:400,700:latin,latin-ext', 'Lora:400,400i,700,700i']
        },
        custom: { 
            families: [ 'FontAwesome' ],
            urls: [ 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'] 
        }
    });";
	wp_add_inline_script( 'google-font-loader', $data, 'after' );
}

add_action('wp_enqueue_scripts', 'telegram_main_scripts');

function telegram_widgets_init() {
    require ('widgets/class-telegram-banner-widget.php');
}

add_action('widgets_init', 'telegram_widgets_init');

add_action('pre_get_posts', 'telegram_pre_get_posts');

function telegram_pre_get_posts($query) {
	if (!is_admin() && $query->is_main_query() && $query->is_feed()) {
			$query->set( 'post_type', array(
				'post',
				'fotogalerije',
				'video',
				'price',
                'partneri'
			) );
			$query->set('no_found_rows', true);
	}
}

function telegram_get_photographer($id = false, $blog_id = 1) {
	if (!$id)
		$id = get_post_thumbnail_id();

    $out = wp_cache_get('photographer_'.$id.$blog_id, 'pwa');
    //$out = false;
    if (!$out) {
        if ($blog_id !== 1) {
            switch_to_blog($blog_id);
        }
        $name = get_post_meta($id, 'fotograf', true);
        $agency = get_post_meta($id, 'agencija', true);
        $photo = '';
        if ($name) {
            $photo .= $name;
        }
        if ($agency) {
            if ($photo) {
                $photo .= '/';
            }
            $photo .= $agency;
        }
        $out = esc_html( $photo );
        if ($blog_id !== 1) {
            restore_current_blog();
        }
        wp_cache_set('photographer_'.$id.$blog_id, $out, 'pwa', HOUR_IN_SECONDS);
    }
	return $out;
}
// Custom login
function telegram_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/style-login.css' );
}
add_action( 'login_enqueue_scripts', 'telegram_login_stylesheet' );

// Custom admin
function telegram_custom_wp_admin_style() {
    wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/style-admin.css', false, '1.0.0' );
    wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'telegram_custom_wp_admin_style' );

add_action( 'wp_ajax_telegram_widget_get_posts', 'telegram_get_posts' );





add_filter( "shortcode_atts_caption", 'telegram_img_caption_atts', 10, 3 );

function telegram_img_caption_atts($out, $pairs, $atts ) {
	$id = str_replace('attachment_', '', $out['id']);
	$photo = telegram_get_photographer($id);
	if ($photo) {
		$out['caption'] .= '&nbsp; <span class="right">' . $photo . '</span>';
	}
	return $out;
}

function telegram_change_paste_as_text($mceInit, $editor_id){
	//turn off paste_text_use_dialog and turn on sticky (and default)
	//NB this has no effect on the browser's right-click context menu's paste!
	$mceInit['paste_as_text'] = true;
	return $mceInit;
}
add_filter('tiny_mce_before_init', 'telegram_change_paste_as_text', 1, 2);

add_filter('the_content', 'telegram_trim', 1,2);

function telegram_trim($content, $id = 0) {
	if (strpos($content, "&nbsp;")==0) {
		$count = 1;
		$content = str_replace("&nbsp;", '', $content, $count );
		$content = trim($content);
	}

	//if (is_page()) {
	    //return $content;
    //}
	//add _blank to all outgoing links
    if ( $id ) {
        $post = get_post_type($id);
        $cat = get_the_category($id);
        $content = preg_replace_callback('/<a([^>]*)href=["|\']([^"|\']*)["|\'][^>]*>(.*?)<\/a>/i', function ($m) use ($post, $cat, $id) {
            if (strpos($m[2], "www.telegram.hr") === false) {
                if ($post === 'partneri' || ($cat && $cat[0]->slug === 'promo')) {
                    $rel = 'sponsored';
                } else {
                    $rel = 'nofollow noopener noreferrer';
                }
                if (in_array($id, [3212085, 3202630, 3197505, 3190766, 3114335, 3118453, 3134726, 3090648, 3102688, 2763218, 2737012, 2727750, 2719271, 2697008, 2633301, 2628482,2616854, 2616789, 2586227, 2440142, 2393151, 2373566, 2384343,2388443, 1733848, 1733874, 1732851, 1768545, 1808006, 1808023, 1808011, 1837766, 1839950, 1850741, 1866509, 1891441, 1898612, 1929302,1957325, 1982562, 1990700, 2014673,2021770, 2049906, 2151405, 2220119, 2245739, 2273990, 2307537, 1624246, 2355120, 2373566, 3083814])) {
                    $rel = '';
                }
                if (strpos($m[2], 'superprostor.hr')) {
                    $rel = '';
                }
                return '<a href="' . $m[2] . '" target="_blank" rel="' . $rel . '">' . $m[3] . '</a>';
            } else {
                return $m[0];
                return '<a href="' . $m[2] . '">' . $m[3] . '</a>';
            }
        }, $content);
    }
	return $content;
}

add_filter( 'coauthors_count_published_post_types', 'telegram_coauthors_posts', 10, 1);

function telegram_coauthors_posts($post_types) {
	return array(
		'post', 'price', 'fotogalerije', 'video',
	);
}

add_filter( 'schedule_event', 'telegram_pings', 10, 1 );

function telegram_pings($event) {
	if ($event == 'do_pings') {
		return false;
	}
	return $event;
}

add_filter('wp_update_attachment_metadata', 'telegram_attachment', 10, 2);

function telegram_attachment($data, $post_id) {
	if ( isset($data['image_meta']['caption']) && $data['image_meta']['caption'] ) {
	    $fotograf = explode('Photo: ', $data['image_meta']['caption']);
	    if (isset($fotograf[1])) {
		    update_post_meta( $post_id, 'fotograf', esc_attr( $fotograf[1] ) );
	    }
	    else if ( isset($data['image_meta']['credit']) && $data['image_meta']['credit'] ) {
		    update_post_meta($post_id, 'fotograf', esc_attr($data['image_meta']['credit']));
	    }
	}
	return $data;
}

add_filter( 'postmeta_form_limit', 'telegram_postmeta_form_limit' );

function telegram_postmeta_form_limit($limit) {
	return 1;
}

//add_action('save_post', 'telegram_save_post', 99, 1);

function telegram_save_post($post_id) {
	// bail early if no ACF data
	if( empty($_POST['acf']) || !isset( $_POST['acf']['field_54cb837145dc6'] ) ) {
		return;
	}
	// specific field value
	$field = $_POST['acf']['field_54cb837145dc6'];
	update_post_meta($post_id, 'subtitle2', $field);
	if (isset($_POST['acf']['field_5d638609115a5']) && intval($_POST['acf']['field_5d638609115a5'])) {
	    update_post_meta($post_id, '_recommendations', intval($_POST['acf']['field_5d638609115a5']));
    }

}

add_action( 'rss2_item', 'telegram_rss_item_enclosure' );
function telegram_rss_item_enclosure() {
	if ( ! has_post_thumbnail() )
		return;
	$thumbnail_id = get_post_thumbnail_id( get_the_ID() );
	$thumbnail = image_get_intermediate_size( $thumbnail_id );
	if ( empty( $thumbnail ) )
		return;

	echo '<media:content height="150" width="150" url="'.$thumbnail['url'].'" medium="image" />';
	echo '<media:credit>'.telegram_get_photographer($thumbnail_id).'</media:credit>';
	echo '<media:description>'.get_the_post_thumbnail_caption(get_the_ID()).'</media:description>';

}

function telegram_disable_mce_wptextpattern( $opt ) {

	if ( isset( $opt['plugins'] ) && $opt['plugins'] ) {
		$opt['plugins'] = explode( ',', $opt['plugins'] );
		$opt['plugins'] = array_diff( $opt['plugins'] , array( 'wptextpattern' ) );
		$opt['plugins'] = implode( ',', $opt['plugins'] );
	}

	return $opt;
}

add_filter( 'tiny_mce_before_init', 'telegram_disable_mce_wptextpattern' );

add_shortcode('wp_caption', 'fixed_img_caption_shortcode');
add_shortcode('caption', 'fixed_img_caption_shortcode');
function fixed_img_caption_shortcode($attr, $content = null) {
    if (strpos($content, 'uploads/sites/3') !== false) {
        return $content;
    }
    if (strpos($content, 'wp-element-caption')) {
        return $content;
    }
	// New-style shortcode with the caption inside the shortcode with the link and image tags.
	if ( ! isset( $attr['caption'] ) ) {
		if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
			$content = $matches[1];
			$attr['caption'] = trim( $matches[2] );
		}
	}

	extract(shortcode_atts(array(
		'id'	  => '',
		'align'	  => 'alignnone',
		'width'	  => '',
		'caption' => ''
	), $attr));

	if ( 1 > (int) $width )
		return $content;
	$image_id = str_replace('attachment_', '', $id);

    $content = do_shortcode($content);
    $link = '';
    preg_match('/href="([^"]+)"/', $content, $m2);
    if ($m2) {
        $link = $m2[1];
    }
	if ( $id ) $id = 'id="' . esc_attr($id) . '" ';

	$photo = telegram_get_photographer($image_id);
    if ($link) {
        $caption = '<a href="' . $link . '">' . $caption . '</a>';
    }
    if ($photo) {
        global $post;
        if (strpos(get_the_permalink(), 'super1' )) {
            $photo = 'FOTO: ' . $photo;
        }
	    return '<figure ' . $id . 'class="wp-block-image wp-caption ' . esc_attr( $align ) . '">'
	           . $content . '<figcaption class="wp-caption-text"><span>' . $caption . ' </span><span class="photographer">' . $photo . '</span></figcaption></figure>';
    }
	return '<figure ' . $id . 'class="wp-block-image wp-caption ' . esc_attr( $align ) . '">'
	       . $content . '<figcaption class="wp-caption-text"><span>' . $caption . '</span></figcaption></figure>';
}

function super1_unautop_4_img( $content )
{

    $content = preg_replace_callback('/(<figure class="wp-block-media-text.*?><img(.*?)><\/figure>)/s',
        function($m) {
            if (count($m)<2) {
                return $m[0];
            }
            if (strpos($m[0], 'sites/3') !== false || strpos($m[0], 'wp-element-caption') !== false) {
                return $m[0];
            }
            $matches = [];
            preg_match('@class="([^"]+)"@', $m[2], $matches);
            $classes = explode(' ', $matches[1]);
            foreach ($classes as $class) {
                if (strpos($class, 'wp-image-')!==false) {
                    $image_id = str_replace( 'wp-image-', '', $class );
                    break;
                }
            }
            if ($image_id) {
                $photo   = telegram_get_photographer( $image_id );
                $caption = wp_get_attachment_caption( $image_id );
                if ( $photo ) {
                    $content = str_replace('</figure>', '<figcaption class="wp-caption-text"><span>' . $caption . ' </span><div class="photographer">' . $photo . '</div></figcaption></figure>', $m[1]);
                }
                else {
                    $content = str_replace('</figure>', '<figcaption class="wp-caption-text"></span>' . $caption . '</span></figcaption></figure>', $m[1]);;
                }
                return $content;
            }
        },
        $content, -1);

    $content = preg_replace_callback('/(<figure class="wp-block-image.*?><img(.*?)><\/figure>)/s',
        function($m) {
            $image_id = false;
            if (count($m)<2) {
                return $m[0];
            }
            if (strpos($m[0], 'sites/3') !== false || strpos($m[0], 'wp-element-caption') !== false) {
                return $m[0];
            }
            $matches = [];
            preg_match('@class="([^"]+)"@', $m[2], $matches);
            $classes = explode(' ', $matches[1]);
            foreach ($classes as $class) {
                if (strpos($class, 'wp-image-')!==false) {
                    $image_id = str_replace( 'wp-image-', '', $class );
                    break;
                }
            }
            if ($image_id) {
                $photo   = telegram_get_photographer( $image_id );
                $caption = wp_get_attachment_caption( $image_id );
                $content = str_replace('<figcaption>', '<figcaption><span>', $m[1]);
                if ( $photo ) {
                    $content = str_replace('</figure>', '<figcaption class="wp-caption-text"><span>' . $caption . '</span> <div class="photographer">' . $photo . '</div></figcaption></figure>', $content);
                }
                else {
                    $content = str_replace('</figure>', '<figcaption class="wp-caption-text"><span>' . $caption . '</span></figcaption></figure>', $content);;
                }
                return $content;
            }
        },
        $content, -1);

    $content = preg_replace_callback('/(<div class="wp-block-image.*?><figure.*?><img(.*?)><\/figure><\/div>)/s',
        function($m) {
            if (count($m)<2) {
                return $m[0];
            }
            if (strpos($m[0], 'sites/3') !== false || strpos($m[0], 'wp-element-caption') !== false) {
                return $m[0];
            }
            $matches = [];
            preg_match('@class="([^"]+)"@', $m[2], $matches);
            $classes = explode(' ', $matches[1]);
            foreach ($classes as $class) {
                if (strpos($class, 'wp-image-')!==false) {
                    $image_id = str_replace( 'wp-image-', '', $class );
                    break;
                }
            }
            if ($image_id) {
                $photo   = telegram_get_photographer( $image_id );
                $caption = wp_get_attachment_caption( $image_id );
                if ( $photo ) {
                    $content = str_replace('<figcaption>', '<figcaption><span>', $m[1]);
                    $content = str_replace('</figcaption>', '<div class="photographer">' . $photo . '</div></figcaption>', $content);
                }
                else {
                    $content = str_replace('<figcaption>', '<figcaption><span>', $m[1]);
                    $content = str_replace('</figure>', '<figcaption class="wp-caption-text"><span>' . $caption . '</span></figcaption></figure>', $content);;
                }
                return $content;
            }
        },
        $content, -1);

    $content = preg_replace_callback(
        '/<p>\\s*?(<a rel=\"attachment.*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s',
        function($m) {
            if (count($m)<2) {
                return $m[0];
            }
            if (strpos($m[0], 'sites/3') !== false || strpos($m[0], 'wp-element-caption') !== false) {
                return $m[0];
            }
            $matches = [];
            preg_match('@class="([^"]+)"@', $m[1], $matches);
            if (!isset($matches[1])) {
                return $m[0];
            }
            $classes = explode(' ', $matches[1]);
            $image_id = false;
            foreach ($classes as $class) {
                if (strpos($class, 'wp-image-')!==false) {
                    $image_id = str_replace( 'wp-image-', '', $class );
                    break;
                }
            }
            if ($image_id) {
                if (str_contains($m[0], 'super1.telegram.hr')) {
                    $blog_id = 3;
                } else {
                    $blog_id = 1;
                }
                $photo   = telegram_get_photographer( $image_id, $blog_id );
                if ($blog_id !== 1) {
                    switch_to_blog($blog_id);
                }
                $caption = wp_get_attachment_caption( $image_id );
                if ($blog_id !== 1) {
                    restore_current_blog();
                }
                //$link = str_replace('src=', 'loading="lazy" src=', $m[1]);
                $link = $m[1];
                if ( $photo ) {
                    return '<figure class="wp-block-image wp-caption">' . $link . '<figcaption class="wp-caption-text"><span>' . $caption . ' </span><div class="photographer">' . $photo . '</div></figcaption></figure>';
                }
                return '<figure class="wp-block-image wp-caption">' . $link . '<figcaption class="wp-caption-text"><span>' . $caption . '</span></figcaption></figure>';
            }
        },
        $content, -1
    );

    return $content;
}
add_filter( 'the_content', 'super1_unautop_4_img', 99 );

// Add Co-Authors fields
add_filter( 'coauthors_guest_author_fields', 'capx_filter_guest_author_fields', 10, 2 );

function capx_filter_guest_author_fields( $fields_to_return, $groups ) {
	if ( in_array( 'all', $groups ) || in_array( 'name', $groups ) ) {
		$fields_to_return[] = array(
			'key'      => 'occupation',
			'label'    => 'Occupation',
			'group'    => 'name',
		);
		$fields_to_return[] = array(
			'key'      => 'ex',
			'label'    => 'Not writing',
			'group'    => 'name',
		);
		$fields_to_return[] = array(
			'key'      => 'newsletter_list',
			'label'    => 'Newsletter list',
			'group'    => 'name',
		);
		$fields_to_return[] = array(
			'key'      => 'newsletter_description',
			'label'    => 'Newsletter Description',
			'group'    => 'name',
		);
		$fields_to_return[] = array(
			'key'      => 'byline',
			'label'    => 'Byline',
			'group'    => 'name',
		);
        $fields_to_return[] = array(
            'key'      => 'paywall',
            'label'    => 'Paywall',
            'group'    => 'name',
            'input' => 'checkbox',
        );
	}
    if (in_array( 'all', $groups ) || in_array( 'contact-info', $groups )) {
        $fields_to_return[] = array(
            'key'      => 'facebook',
            'label'    => 'Facebook',
            'group' => 'contact-info',
            'input' => 'url',
        );
        $fields_to_return[] = array(
            'key'      => 'instagram',
            'label'    => 'Instagram',
            'group' => 'contact-info',
            'input' => 'url',
        );

        $fields_to_return[] = array(
            'key'      => 'twitter',
            'label'    => 'Twitter/X',
            'group' => 'contact-info',
            'input' => 'url',
        );
        $fields_to_return[] = array(
            'key'      => 'mastodon',
            'label'    => 'Mastodon',
            'group' => 'contact-info',
            'input' => 'url',
        );
        $fields_to_return[] = array(
            'key'      => 'bluesky',
            'label'    => 'BlueSky',
            'group' => 'contact-info',
            'input' => 'url',
        );
        $fields_to_return[] = array(
            'key'      => 'linkedin',
            'label'    => 'LinkedIn',
            'group' => 'contact-info',
            'input' => 'url',
        );
        $fields_to_return[] = array(
            'key'      => 'wikipedia',
            'label'    => 'Wikipedia',
            'group' => 'contact-info',
            'input' => 'url',
        );
    }
	return $fields_to_return;
}

add_filter( 'tiny_mce_before_init', 'telegram_disable_mce_wptextpattern' );

add_filter( 'amt_image_size_content', 'telegram_amt_image_size', 10, 1 );

function telegram_amt_image_size($size) {
	return 'large';
}

add_filter( 'amp_post_article_header_meta', 'telegram_amp_header_meta', 10, 1 );

function telegram_amp_header_meta($parts) {
	return array( 'meta-subtitle', 'meta-author', 'meta-time' );
}


add_filter( 'amp_site_icon_url', 'telegram_amp_site_icon' );

function telegram_amp_site_icon($image) {
    return get_site_icon_url();
}

if ( defined( 'WP_CLI' ) && WP_CLI ) {
	require_once dirname( __FILE__ ) . '/cli.php';
}

//add_action( 'template_redirect','telegram_filter_feeds', 1 );

function telegram_filter_feeds() {
	if( !is_feed() || is_404() )
		return;
	global $wp_rewrite, $wp_query;
	/*if ( is_date() || is_singular() || is_tax() ) {
		$wp_query->is_feed = false;
		$wp_query->set_404();
		status_header( 404 );
		// Override the xml+rss header set by WP in send_headers
		header( 'Content-Type: ' . get_option('html_type') . '; charset=' . get_option('blog_charset') );
	}*/
}

add_filter('coauthors_guest_author_manage_cap', 'telegram_coauthors_cap', 10, 1);

function telegram_coauthors_cap($caps) {
    return 'edit_others_posts';
}

add_filter( 'coauthors_guest_author_avatar_sizes', 'telegram_avatar_sizes' );

function telegram_avatar_sizes($sizes) {
    $sizes = [
            300,
    ];
    return $sizes;
}

function telegram_enable_extended_upload ( $mime_types =array() ) {

	// The MIME types listed here will be allowed in the media library.
	// You can add as many MIME types as you want.
	$mime_types['mp4']  = 'video/mp4';

	return $mime_types;
}

//add_filter('upload_mimes', 'telegram_enable_extended_upload');

/**
 * Fix a race condition in alloptions caching
 *
 * See https://core.trac.wordpress.org/ticket/31245
 */
function _wpcom_vip_maybe_clear_alloptions_cache( $option ) {
	if ( ! wp_installing() ) {
		$alloptions = wp_load_alloptions(); //alloptions should be cached at this point

		if ( isset( $alloptions[ $option ] ) ) { //only if option is among alloptions
			wp_cache_delete( 'alloptions', 'options' );
		}
	}
}

//add_action( 'added_option',   '_wpcom_vip_maybe_clear_alloptions_cache' );
//add_action( 'updated_option', '_wpcom_vip_maybe_clear_alloptions_cache' );
//add_action( 'deleted_option', '_wpcom_vip_maybe_clear_alloptions_cache' );

add_filter( 'get_coauthors', 'telegram_coauthors', 10, 2 );

function telegram_coauthors($coauthors, $post_id) {
	if (get_post_meta($post_id, 'author_hidden', true)){
	    return [];
    }
	return $coauthors;
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
	$arr['block_formats'] = 'Odlomak=p;Međunaslov=h2;H3=h3;H4=h4;Disclaimer=h6';

	return $arr;
}
add_filter('tiny_mce_before_init', 'telegram_tinymce');

add_filter('pre_option_rss_use_excerpt', 'telegram_rss_load_content', 10, 1);

function telegram_rss_load_content($value) {
	if (isset($_GET['espf']) &&  $_GET['espf'] === '1312') {
		return 0;
	}

	return false;
}

add_filter( 'get_the_excerpt', 'telegram_rss_excerpt', 10, 2 );

function telegram_rss_excerpt($excerpt, $post) {
    if (isset($_GET['espf']) &&  $_GET['espf'] === '1312') {
		return $post->post_content;
	}
	return $excerpt;
}

function telegram_oembed_result($data, $url, $args) {
	if (strpos($url, 'yout') !== false) {
		return str_replace('<iframe', '<iframe class="yt-embed"', $data);
	}
	return $data;
}
//add_filter( 'oembed_result', 'telegram_oembed_result', 10, 3 );

add_action('the_content', 'telegram_content', 10, 1);

function telegram_content($content) {
	if (strpos($content, 'src="https://www.youtube')) {
		$content = str_replace('src="https://www.youtube', 'class="yt-embed" src="https://www.youtube', $content);
	}
    return $content;
}

add_filter( 'zoninator_recent_posts_args', 'telegram_zoninator_recent_posts_args', 10, 1);

function telegram_zoninator_recent_posts_args($args) {
    $args['post_status'] = ['publish'];

    return $args;
}

add_action( 'admin_post_nopriv_image_submit', 'image_submit' );
add_action( 'admin_post_image_submit', 'image_submit' );

function image_submit() {
    $campaign = sanitize_text_field($_POST['campaign']);
    if (!$campaign) {
        die('Ovo ne radi!');
    }
    $ime = sanitize_text_field($_POST['ime']);
    $email = sanitize_text_field($_POST['email']);
    $poruka = sanitize_text_field($_POST['poruka']);
    $broj = sanitize_text_field($_POST['broj']);

    $uploaddir = ABSPATH . '/wp-content/uploads/forms/' . $campaign . '/';
    $name = false;
    if ($_FILES['slika']['name']) {
        $id = uniqid();
        $uploadfile = $uploaddir . $id . basename($_FILES['slika']['name']);
        $name = $id . basename($_FILES['slika']['name']);
        move_uploaded_file($_FILES['slika']['tmp_name'], $uploadfile);
    }
    $url = '';
    switch ($campaign) {
        case 'lidl':
            $url = 'https://script.google.com/macros/s/AKfycbzaQ_ielN8ZayEK6EQ6QkeNao8rtgUxmX4cXDhAqpUYzZtBgWJScXCs2IULAu0nP1Yorg/exec';
            break;
    }
    if (!$url) {
        return;
    }

    $data = [
        'ime' => $ime,
        'email' => $email,
        'broj' => $broj,
        'poruka' => $poruka,
        'slika' =>  $name ?: ''
    ];
    $query_url = $url.'?'.http_build_query($data);
    $r = wp_remote_get($query_url);

    $ref = wp_get_referer();

    wp_safe_redirect($ref . '?success=true');
    die();
}


function fix_post_titles($data) {
    $data['post_title'] = str_replace('&amp;', '&', $data['post_title']);
    return $data;
}
add_filter('wp_insert_post_data', 'fix_post_titles', 99, 1);

add_filter( 'msm_sitemap_skip_post', 'telegram_sitemap_skip' );

function telegram_sitemap_skip($skip) {
    if (get_post_meta(get_the_ID(), '_links_to', true)) {
        return true;
    }
    return $skip;

}

add_filter( 'msm_sitemap_entry', 'telegram_sitemap_entry', 10, 1 );

function telegram_sitemap_entry($url) {
        $image = $url->addChild('xmlns:image:image');
        $image->addChild('xmlns:image:loc', get_the_post_thumbnail_url(get_the_ID(), 'full'));
    return $url;
}

function disallow_insert_term($term, $taxonomy) {

    $user = wp_get_current_user();

    if ( $taxonomy === 'post_tag' && !in_array('administrator', $user->roles) ) {

        return new WP_Error(
            'disallow_insert_term',
            __('Your role does not have permission to add terms to this taxonomy')
        );

    }

    return $term;

}

//add_filter('pre_insert_term', 'disallow_insert_term', 10, 2);

add_action( 'web_stories_print_analytics', 'amp_analytics' );
function amp_analytics() {
    ?>
    <amp-analytics config="https://events.newsroom.bi/amp.v2.json" data-credentials="include">
        <script type="application/json" >
            {
                "vars" : {
                    "accountId": "1279"
                }
            }
        </script>
    </amp-analytics>
    <amp-analytics config="https://gahr.hit.gemius.pl/amp.config.json">
        <script type="application/json">
            {
                "vars": {
                    "identifier": "nSblbvtw7YnzUiC8AtarvJdS3yggumM2F_xjEZ.9W1..57"
                }
            }
        </script>
    </amp-analytics>
    <?php
}

function my_disable_fonts_rest_api_endpoints( $arg, $post_type ) {
    if ( 'wp_font_family' === $post_type || 'wp_font_face' === $post_type ) {
        $arg['show_in_rest'] = false;
    }

    return $arg;
}
add_filter( 'register_post_type_args', 'my_disable_fonts_rest_api_endpoints', 10, 2 );

function my_disable_font_collections_rest_api_endpoints( $endpoints ) {
    foreach ( $endpoints as $route => $endpoint ){
        if ( str_starts_with( $route, '/wp/v2/font-collections' ) ) {
            unset( $endpoints[ $route ] );
        }
    }

    return $endpoints;
}
add_filter( 'rest_endpoints', 'my_disable_font_collections_rest_api_endpoints' );

/**
 * Register custom fonts for the block editor.
 * Gloock (Google Fonts), Nyght Serif (self-hosted) and Clash Display (Fontshare).
 */
add_filter( 'wp_theme_json_data_theme', function ( WP_Theme_JSON_Data $theme_json ) {
	return $theme_json->update_with( array(
		'version'  => 3,
		'settings' => array(
			'typography' => array(
				'fontFamilies' => telegram_get_custom_fonts(),
			),
		),
	) );
} );

add_action( 'enqueue_block_editor_assets', function () {
	$handle = '';
	foreach ( telegram_get_custom_font_stylesheets() as $slug => $stylesheet ) {
		$handle = "telegram-editor-fonts-{$slug}";
		wp_enqueue_style( $handle, $stylesheet, array(), null );
	}

	$css = '';
	foreach ( telegram_get_custom_fonts() as $font ) {
		$css .= sprintf( '.has-%s-font-family{font-family:%s !important;}', $font['slug'], $font['fontFamily'] );
	}
	wp_add_inline_style( $handle, $css );
} );

// Load the self-hosted Nyght Serif @font-face on the front-end so post
// content that uses it renders for readers (Gloock/Clash Display come from
// their own external stylesheets elsewhere).
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'telegram-fonts-nyght', get_template_directory_uri() . '/assets/fonts/nyght/nyght.css', array(), null );
} );

function telegram_get_custom_fonts() {
	return array(
		array(
			'fontFamily' => 'Gloock, serif',
			'name'       => 'Gloock',
			'slug'       => 'gloock',
		),
		array(
			'fontFamily' => '"Nyght Serif", serif',
			'name'       => 'Nyght Serif',
			'slug'       => 'nyght-serif',
		),
		array(
			'fontFamily' => '"Clash Display", sans-serif',
			'name'       => 'Clash Display',
			'slug'       => 'clash-display',
		),
	);
}

/**
 * Stylesheets that provide the custom fonts, keyed by font slug.
 * Shared by the block editor enqueue above and the classic editor below.
 */
function telegram_get_custom_font_stylesheets() {
	return array(
		'gloock'        => 'https://fonts.googleapis.com/css2?family=Gloock&display=swap',
		'nyght'         => get_template_directory_uri() . '/assets/fonts/nyght/nyght.css',
		'clash-display' => 'https://api.fontshare.com/v2/css?f[]=clash-display@200,300,400,500,600,700&display=swap',
	);
}

/**
 * Register custom fonts for the Classic Editor (TinyMCE).
 * The classic editor content lives in an iframe, so it needs its own
 * font CSS and toolbar wiring, independent of the block editor.
 */

// 1. Load the font stylesheets inside the TinyMCE iframe.
add_filter( 'mce_css', function ( $mce_css ) {
	$sheets = telegram_get_custom_font_stylesheets();
	if ( ! empty( $mce_css ) ) {
		array_unshift( $sheets, $mce_css );
	}

	return implode( ',', $sheets );
} );

// 2. Add the fonts to the "Font Family" dropdown.
add_filter( 'tiny_mce_before_init', function ( $settings ) {
	$formats = array();

	foreach ( telegram_get_custom_fonts() as $font ) {
		// font_formats is wrapped in double quotes by WP, so the value
		// itself must not contain any (e.g. '"Nyght Serif", serif').
		$formats[] = sprintf( '%s=%s', $font['name'], str_replace( '"', '', $font['fontFamily'] ) );
	}

	$default = isset( $settings['font_formats'] ) ? $settings['font_formats'] : '';
	$settings['font_formats'] = implode( ';', $formats ) . ';' . $default;

	return $settings;
} );

// 3. Surface the "Font Family" (fontselect) dropdown on the FIRST toolbar
// row so it is visible without the kitchen-sink toggle.
add_filter( 'mce_buttons', function ( $buttons ) {
	if ( ! in_array( 'fontselect', $buttons, true ) ) {
		array_unshift( $buttons, 'fontselect' );
	}

	return $buttons;
} );

/**
 * "Veličina slova" (font size) for the Classic Editor (TinyMCE).
 * Mirrors the block editor's font-size presets (S / M / L / XL): the
 * dropdown toggles the same `has-{slug}-font-size` classes on the current
 * paragraph(s), so the front-end styles classic and block content alike
 * through the WP global stylesheet.
 */

/**
 * Font-size presets available to editors, in the block editor's order.
 *
 * @return array[] Each item: array( 'slug' => string, 'name' => string, 'size' => string ).
 */
function telegram_get_editor_font_sizes() {
	$presets  = array();
	$settings = function_exists( 'wp_get_global_settings' )
		? wp_get_global_settings( array( 'typography', 'fontSizes' ) )
		: array();

	// Presets are grouped by origin (default / theme / custom).
	foreach ( (array) $settings as $origin ) {
		if ( ! is_array( $origin ) ) {
			continue;
		}
		foreach ( $origin as $preset ) {
			if ( empty( $preset['slug'] ) || empty( $preset['size'] ) ) {
				continue;
			}
			$size = function_exists( 'wp_get_typography_font_size_value' )
				? wp_get_typography_font_size_value( $preset )
				: $preset['size'];

			$presets[ $preset['slug'] ] = array(
				'slug' => $preset['slug'],
				'name' => isset( $preset['name'] ) ? $preset['name'] : $preset['slug'],
				'size' => $size,
			);
		}
	}

	if ( empty( $presets ) ) {
		// WordPress core defaults (wp-includes/theme.json).
		$presets = array(
			array( 'slug' => 'small',   'name' => 'Small',       'size' => '13px' ),
			array( 'slug' => 'medium',  'name' => 'Medium',      'size' => '20px' ),
			array( 'slug' => 'large',   'name' => 'Large',       'size' => '36px' ),
			array( 'slug' => 'x-large', 'name' => 'Extra Large', 'size' => '42px' ),
		);
	}

	return array_values( $presets );
}

// 1. Hand the presets to the TinyMCE plugin and style the size classes inside
// the editor iframe so editors see the change. Both values are inlined into
// the TinyMCE init object by WP without escaping, so they must not contain
// double quotes (the JSON array is emitted as a JS literal).
add_filter( 'tiny_mce_before_init', function ( $settings ) {
	$sizes = telegram_get_editor_font_sizes();

	$css = '';
	foreach ( $sizes as $size ) {
		$css .= sprintf( '.has-%s-font-size{font-size:%s !important;}', $size['slug'], $size['size'] );
	}
	$css = str_replace( array( '"', "\n", "\r" ), '', $css );

	$existing                       = isset( $settings['content_style'] ) ? $settings['content_style'] . ' ' : '';
	$settings['content_style']      = trim( $existing . $css );
	$settings['telegram_font_sizes'] = wp_json_encode( $sizes );

	return $settings;
} );

// 2. Register the TinyMCE plugin that provides the dropdown.
add_filter( 'mce_external_plugins', function ( $plugins ) {
	$plugins['telegram_font_size'] = get_template_directory_uri() . '/assets/js/mce-font-size.js?v=1.0';

	return $plugins;
} );

// 3. Place the dropdown right after the block-format one (Odlomak, Međunaslov...)
// on the first row, falling back to the "Font Family" dropdown.
add_filter( 'mce_buttons', function ( $buttons ) {
	$buttons = array_values( $buttons );
	if ( in_array( 'telegram_font_size', $buttons, true ) ) {
		return $buttons;
	}

	foreach ( array( 'formatselect', 'fontselect' ) as $anchor ) {
		$position = array_search( $anchor, $buttons, true );
		if ( false !== $position ) {
			array_splice( $buttons, $position + 1, 0, 'telegram_font_size' );

			return $buttons;
		}
	}

	array_unshift( $buttons, 'telegram_font_size' );

	return $buttons;
} );

add_filter('web_stories_hide_auto_generated_attachments', 'telegram_web_stories_media_lib', 10, 2);

function telegram_web_stories_media_lib($return, $args) {
    return false;
}

add_filter( "render_block_core/image", 'telegram_block_image', 10, 3 );
/**
 * @param $block_content
 * @param $block
 * @param WP_Block $that
 * @return mixed
 */
function telegram_block_image($block_content, $block, $that) {
    global $post;
    $post_id = $that->parsed_block['attrs']['id'];
    $photo = telegram_get_photographer($post_id);
    if (!$photo) {
        $block_content = str_replace( '<figcaption class="wp-element-caption">', '<figcaption class="wp-element-caption"><span>', $block_content );
        $block_content = str_replace( '</figcaption>', '</span>', $block_content );
        return $block_content;
    }
    if (strpos( $block_content, 'figcaption') !== false) {
        $block_content = str_replace( '<figcaption class="wp-element-caption">', '<figcaption class="wp-element-caption"><span>', $block_content );
        $block_content = str_replace( '</figcaption>', '</span><span class="photographer">' . $photo . '</span>', $block_content );
    } else {
        $block_content = str_replace('</figure>', '<figcaption class="wp-element-caption"><span class="photographer">' . $photo . '</span></figcaption></figure>', $block_content);
    }
    return $block_content;
}
