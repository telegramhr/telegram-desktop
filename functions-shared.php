<?php
require_once ('plugins/shortcodes.php');
require_once ('plugins/charts.php');
require_once ('plugins/acf.php');

remove_action( 'do_pings', 'do_all_pings' );

define('PARENT_PATH', get_theme_root_uri().'/telegram2-desktop');

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

    if (is_feed()) {
        $query->set('tag__not_in', [9893]);
    }

    /*if (is_admin() && $query->is_main_query()) {
        $query->set('posts_per_page', 20);
    }*/
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
        $content = preg_replace_callback('/<a([^>]*)href=["|\']([^"|\']*)["|\'][^>]*>([^<]*)<\/a>/i', function ($m) use ($post, $cat, $id) {
            if (strpos($m[2], "www.telegram.hr") === false) {
                if ($post === 'partneri' || ($cat && $cat[0]->slug === 'promo')) {
                    $rel = 'sponsored';
                } else {
                    $rel = 'nofollow noopener noreferrer';
                }
                if (in_array($id, [1733848, 1733874, 1732851, 1768545, 1808006, 1808023, 1808011, 1837766, 1839950, 1850741, 1866509, 1891441])) {
                    $rel = '';
                }
                return '<a href="' . $m[2] . '" target="_blank" rel="' . $rel . '">' . $m[3] . '</a>';
            } else
                return '<a href="' . $m[2] . '">' . $m[3] . '</a>';
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

	if ( 1 > (int) $width || empty($caption) )
		return $content;
	$image_id = str_replace('attachment_', '', $id);

	if ( $id ) $id = 'id="' . esc_attr($id) . '" ';

	$photo = telegram_get_photographer($image_id);
    if ($photo) {
	    return '<figure ' . $id . 'class="wp-block-image wp-caption ' . esc_attr( $align ) . '">'
	           . do_shortcode( $content ) . '<figcaption class="wp-caption-text"><span>' . $caption . ' </span><span class="photographer">' . $photo . '</span></figcaption></figure>';
    }
	return '<figure ' . $id . 'class="wp-block-image wp-caption ' . esc_attr( $align ) . '">'
	       . do_shortcode( $content ) . '<figcaption class="wp-caption-text">' . $caption . '</figcaption></figure>';
}

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
	$arr['block_formats'] = 'Odlomak=p;Međunaslov=h2;H3=h3;H4=h4Disclaimer=h6';

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
    $args['post_status'] = 'publish';

    return $args;
}


add_action( 'admin_post_nopriv_heineken_prijava', 'heineken_submit' );
add_action( 'admin_post_heineken_prijava', 'heineken_submit' );

function heineken_submit() {
    if (!wp_verify_nonce($_POST['heineken_submit'], 'heineken_submit')) {
        //die("Wrong nonce");
    }

    $ime = sanitize_text_field($_POST['ime']);
    $email = sanitize_text_field($_POST['email']);
    $poruka = sanitize_text_field($_POST['poruka']);
    $uploaddir = dirname(__FILE__) . '/templates/native/heineken/za-bolji-svijet/uploads/';
    $name = uniqid() . basename($_FILES['slika']['name']);
    $uploadfile = $uploaddir . $name;
    move_uploaded_file($_FILES['slika']['tmp_name'], $uploadfile);

    $url = add_query_arg([
        'ime' => $ime,
        'email' => $email,
        'poruka' => $poruka,
        'slika' => site_url('/wp-content/themes/telegram2-desktop/templates/native/heineken/za-bolji-svijet/uploads/'.$name),
    ], 'https://script.google.com/macros/s/AKfycbwDZx5xEGxxyCW55LYHb_dZsh0M19DFXVywaVlgFaiQFO_85rrxZhkNQGtrGlFoN8Y/exec');
    wp_remote_get($url);
    wp_redirect(site_url('native/moja-kap/?success=true'));
    die();
}

function super1_unautop_4_img( $content )
{

    $content = preg_replace_callback(
        '/<p>\\s*?(<a rel=\"attachment.*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s',
        function($m) {
            if (count($m)<2) {
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
                $link = str_replace('src=', 'loading="lazy" src=', $m[1]);
                if ( $photo ) {
                    return '<figure class="wp-caption">' . $link . '<figcaption class="wp-caption-text">' . $caption . ' <div class="photographer">' . $photo . '</div></figcaption></figure>';
                }
                return '<figure class="wp-caption">' . $link . '<figcaption class="wp-caption-text">' . $caption . ' </figcaption></figure>';
            }
        },
        $content, -1
    );

    $content = preg_replace_callback('/(<figure class="wp-block-media-text.*?><img(.*?)><\/figure>)/s',
        function($m) {
            if (count($m)<2) {
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
                    $content = str_replace('</figure>', '<figcaption class="wp-caption-text">' . $caption . ' <div class="photographer">' . $photo . '</div></figcaption></figure>', $m[1]);
                }
                else {
                    $content = str_replace('</figure>', '<figcaption class="wp-caption-text">' . $caption . '</figcaption></figure>', $m[1]);;
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
                    $content = str_replace('</figure>', '<figcaption class="wp-caption-text">' . $caption . ' <div class="photographer">' . $photo . '</div></figcaption></figure>', $m[1]);
                }
                else {
                    $content = str_replace('</figure>', '<figcaption class="wp-caption-text">' . $caption . '</figcaption></figure>', $m[1]);;
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
                    $content = str_replace('</figcaption>', '<div class="photographer">' . $photo . '</div></figcaption>', $m[1]);
                }
                else {
                    $content = str_replace('</figure>', '<figcaption class="wp-caption-text">' . $caption . '</figcaption></figure>', $m[1]);;
                }
                return $content;
            }
        },
        $content, -1);

    return $content;
}
add_filter( 'the_content', 'super1_unautop_4_img', 99 );

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

    //if ( $taxonomy === 'post_tag' && !in_array('administrator', $user->roles) ) {

        return new WP_Error(
            'disallow_insert_term',
            __('Your role does not have permission to add terms to this taxonomy')
        );

    //}

    return $term;

}

add_filter('pre_insert_term', 'disallow_insert_term', 10, 2);
