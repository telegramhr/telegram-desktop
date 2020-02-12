<?php
require_once ('plugins/gallery.php');
require_once ('plugins/shortcodes.php');
require_once ('plugins/special.php');
remove_action('wp_footer', 'jetpack_mobile_available');
remove_action( 'do_pings', 'do_all_pings' );

define('PARENT_PATH', get_theme_root_uri().'/telegram2-desktop');

add_action('after_setup_theme', 'telegram_setup');
function telegram_setup() {

    add_theme_support( 'title-tag' );

    add_editor_style(array('css/editor-style.css'));

    add_theme_support('automatic-feed-links');

    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'tg_menu' 	=> 'Telegram Izbornik',
		'social'	=> 'Društvene mreže',
		'left_menu'	=> 'Lijevi izbornik',
        'footer_1'	=> 'Footer 1',
        'footer_2' 	=> 'Footer 2',
        'footer_3' 	=> 'Footer 3',
		'channels'	=> 'Telegram Kanali'
    ));

    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ));

    add_filter('use_default_gallery_style', '__return_false');

	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer' => false,
        'render' => 'telegram_infinite_render',
        'type' => 'scroll'
	) );
}
function telegram_infinite_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part('templates/articles/article-2');
	}

}

add_action('admin_init', 'telegram_admin_init');
function telegram_admin_init() {
	add_editor_style();
}

//Gets post cat slug and looks for single-[cat slug].php and applies it
add_filter('single_template', 'telegram_single_template', 10, 1 );

function telegram_single_template( $the_template ) {
    foreach ( (array) get_the_category() as $cat ) {
	    if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) {
		    return TEMPLATEPATH . "/single-{$cat->slug}.php";
	    }
    }
    return $the_template;
}

// Image sizes
function telegram_theme_setup() {
    // Main sizes
    add_image_size('article-head', 1200, 800, true);
    add_image_size('article-1', 620, 370, true);
    add_image_size('fourth', 280, 230, true);
    add_image_size('sidebar', 320, 180, true);
	add_image_size('single-v1', 840, 530, true);
    add_image_size('article-rainbow-small', 190, 120, true);
    add_image_size('article-poster', 325, 460, true);
	// Longfoem sizes
	add_image_size('fullpage', 1600, 899, true);
	add_image_size('portrait', 800, 899, true);
	add_image_size('widescreen', 1600, 650, true);
	add_image_size('velike-price', 1600, 9999);
    // Mobile
    add_image_size('mobile-head', 375, 480, true);
}

add_action('after_setup_theme', 'telegram_theme_setup');

add_filter( 'image_size_names_choose', 'telegram_custom_sizes', 10, 1 );

function telegram_custom_sizes( $sizes ) {
	return array(
        'large' => 'Slika u članku',
		'velike-price' => 'Veliki format u članku',
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
		'slick', 'slick-theme', 'fontawesome'
	]);
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', false, '3.2.1', false);

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

add_filter( 'wp_default_scripts', 'telegram_dequeue_jquery_migrate' );

function telegram_dequeue_jquery_migrate( &$scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');
		$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
	}
}

function telegram_widgets_init() {
    foreach (glob(dirname(__FILE__) . "/widgets/*.php") as $filename) {
        require ($filename);
    }
    foreach (glob(dirname(__FILE__) . "/widgets/other/*.php") as $filename) {
        require ($filename);
    }
    register_sidebar(
        array(
            'name' => 'Naslovnica srednji stupac 1',
            'description' => 'Srednji stupac na naslovnici 1',
            'id' => 'home_mid_1',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => ''
        )
    );

	register_sidebar(
		array(
			'name' => 'Naslovnica desni stupac 1',
			'description' => 'Desni stupac na naslovnici 1',
			'id' => 'home_sidebar_1',
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '',
			'after_title' => ''
		)
	);

	register_sidebar(
		array(
			'name' => 'Naslovnica srednji stupac 2',
			'description' => 'Srednji stupac na naslovnici 2',
			'id' => 'home_mid_2',
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '',
			'after_title' => ''
		)
	);

    register_sidebar(
        array(
            'name' => 'Naslovnica desni stupac 2',
            'description' => 'Desni stupac na naslovnici 2',
            'id' => 'home-sidebar-2',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => ''
        )
    );

	register_sidebar(
		array(
			'name' => 'Naslovnica desni stupac 3',
			'description' => 'Desni stupac na naslovnici 3',
			'id' => 'home-sidebar-3',
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '',
			'after_title' => ''
		)
	);

	register_sidebar(
        array(
            'name' => 'Članak',
            'id' => 'sidebar-single',
            'description' => 'Bočna traka na članku',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );

     register_sidebar(
        array(
            'name' => 'Članak - Ispod contenta',
            'id' => 'sidebar-single-bottom-1',
            'description' => 'Doljnja traka na članku',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );

     register_sidebar(
        array(
            'name' => 'Članak - Izvan contenta',
            'id' => 'sidebar-single-bottom-2',
            'description' => 'Doljnja traka na članku',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );

	register_sidebar(
		array(
			'name' => 'Članak - Izvan contenta mobile',
			'id' => 'mobile-sidebar-single-bottom-2',
			'description' => 'Doljnja traka na članku-mobile',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
		)
	);

    register_sidebar(
        array(
            'name' => 'Galerija',
            'id' => 'sidebar-gallery',
            'description' => 'Bočna traka na galeriji',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );

	register_sidebar(
		array(
			'name' => 'Video',
			'id' => 'sidebar-video',
			'description' => 'Bočna traka na video članku',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
		)
	);
}

add_action('widgets_init', 'telegram_widgets_init');

function get_excerpt($content, $limit) {
    $excerpt = $content;
    $stripped = strip_tags($excerpt);

    if (strlen($stripped) > $limit) {
        $trimmed = rtrim(mb_substr($stripped, 0, $limit));
        $new_excerpt_array = explode(' ', $trimmed);
        $last_word = array_pop($new_excerpt_array);
        $forbidden = array('.', ',', '?', '!', ':', ';');
        if (in_array(mb_substr($last_word, -1), $forbidden)) {
            $last_word = mb_substr($last_word, 0, strlen($last_word) - 1);
        }
        array_push($new_excerpt_array, $last_word);
        $new_excerpt = implode(' ', $new_excerpt_array) . '...';
        return $new_excerpt;
    } else {
        return $excerpt;
    }
}

add_action( 'init', 'telegram_register_taxonomy' );

function telegram_register_taxonomy() {
    register_taxonomy(
        'positions',
        array('post', 'fotogalerije', 'price', 'video'),
        array(
            'label' => 'Pozicije',
            'rewrite' => false,
            'hierarchical' => true,
	        'public' => true
        )
    );
    // Leave this for historic reasons
	register_taxonomy(
		'podformati',
		array('price'),
		array(
			'label' => 'Podformati',
			'rewrite' => false,
			'hierarchical' => true,
			'public' => false
		)
	);
	register_taxonomy_for_object_type( 'podformati', 'price' );
}

add_action('pre_get_posts', 'telegram_pre_get_posts');

function telegram_pre_get_posts($query) {
	if (!is_admin() && $query->is_main_query()) {

		if ( ( $query->is_home() || $query->is_category() || $query->is_archive() ) ) {
			if ( isset( $query->query['post_type'] ) && in_array( $query->query['post_type'], array(
					'fotogalerije',
					'video'
				) )
			) {

			} else {
				$query->set( 'post_type', array(
					'post',
					'price',
					'video',
                    'partneri',
					'fotogalerije'
				) );
			}
		}
		if ( ! is_admin() && is_author() && $query->is_main_query() ) {

			$query->set( 'post_type', array(
				'post',
				'fotogalerije',
				'video',
				'price'
			) );
		}
		if ($query->is_feed() && $query->is_main_query()) {
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
}

function telegram_get_photographer($id = false) {
	if (!$id)
		$id = get_post_thumbnail_id();
	$name = get_post_meta( $id, 'fotograf', true );
	$agency = get_post_meta( $id, 'agencija', true );
	$photo = '';
	if ( $name ) {
		$photo .= $name;
	}
	if ( $agency ) {
		if ( $photo ) {
			$photo .= '/';
		}
		$photo .= $agency;
	}

	return esc_html( $photo );
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

//TODO: do we need this?
function telegram_get_posts() {
    $q = new WP_Query( array(
        'posts_per_page' => 10,
        's' => $_POST['term'],
    ) );
    $posts = array();
    while ( $q->have_posts() ) {
        $q->the_post();
        $posts[] = array( 'label' => get_the_title(), 'value' => get_the_ID() );
    }
    header( 'Content-Type: text/json' );
    echo json_encode( $posts );
    die();
}

add_shortcode('galerija', 'telegram_galerija');

// Pogledaj galeriju
function telegram_galerija($atts, $content) {
	$atts = shortcode_atts(array(
		'id' => 0,
		'url' => ''
	), $atts);
	if (!$atts['id'] && !$atts['url'])
		return '';
	$url = $atts['url'];
	$id = $atts['id'];
	if (!$url) {
		$url = get_permalink($id);
	}
	else {
		$id = url_to_postid($url);
	}
	ob_start();

?>
    <a href="<?php echo $url ?>" class="gallery-link uppercase">
        <div class="inner">
            <div class="gallery-link-text">
                <i class="fa fa-camera"></i>&nbsp;<span>Pogledaj<br> fotogaleriju</span>
                <br>
                <div class="decail"></div>
            </div>
        </div>
        <?php echo get_the_post_thumbnail($id, 'g1') ?>
    </a>
	<?php
	return ob_get_clean();
}


add_filter( "shortcode_atts_caption", 'telegram_img_caption_atts', 10, 3 );

function telegram_img_caption_atts($out, $pairs, $atts ) {
	$id = str_replace('attachment_', '', $out['id']);
	$photo = telegram_get_photographer($id);
	if ($photo) {
		$out['caption'] .= '&nbsp; <span class="right">' . $photo . '</span>';
	}
	return $out;
}


add_filter('get_the_time', 'telegram_custom_time', 10, 3);

function telegram_custom_time($time, $d, $post) {
	if ('' == $d) {
		$gtime = strtotime($post->post_date_gmt);
		$now = time();
		$diff = $now-$gtime;
		if ($diff < 3600) {
			$minuta = round($diff/60);
			if (substr($minuta, -1)>0 && substr($minuta, -1)<5 && substr($minuta, -2, 1) !=1) {
				return 'prije '.$minuta.' minute';
			}
			else {
				return 'prije '.$minuta.' minuta';
				}
		}
		else if ($diff>12*3600) {
			return get_post_time('d.m.Y', false, $post, true);
		}
	}
	return $time;
}

function telegram_change_paste_as_text($mceInit, $editor_id){
	//turn off paste_text_use_dialog and turn on sticky (and default)
	//NB this has no effect on the browser's right-click context menu's paste!
	$mceInit['paste_as_text'] = true;
	return $mceInit;
}
add_filter('tiny_mce_before_init', 'telegram_change_paste_as_text', 1, 2);

function telegram_debug($var, $die = false) {
	if (in_array(get_current_user_id(), array(1,2))) {
		echo '<pre>';
		var_dump( $var );
		echo '</pre>';
		if ( $die ) {
			die();
		}
	}
}

add_filter('the_content', 'telegram_trim', 1,1);

function telegram_trim($content) {
	if (strpos($content, "&nbsp;")==0) {
		$count = 1;
		$content = str_replace("&nbsp;", '', $content, $count );
		$content = trim($content);
	}

	//add _blank to all outgoing links
    $content = preg_replace_callback('/]*href=["|\']([^"|\']*)["|\'][^>]*>([^<]*)<\/a>/i', function($m) {
        if (strpos($m[1], "www.telegram.hr") === false)
            return '<a href="'.$m[1].'" target="_blank">'.$m[2].'</a>';
        else
            return '<a href="'.$m[1].'">'.$m[2].'</a>';
    }, $content);

	return $content;
}

//add_filter('the_author', 'telegram_author_name');

function telegram_author_name() {
	global $post;

	$a = get_coauthors($post->ID);
	return $a[0]->display_name;
}

add_filter( 'coauthors_count_published_post_types', 'telegram_coauthors_posts', 10, 1);

function telegram_coauthors_posts($post_types) {
	return array(
		'post', 'price', 'fotogalerije', 'video'
	);
}

//add_filter( 'oembed_result', 'telegram_twitter_embed_fix', 10, 3 );

function telegram_twitter_embed_fix($html, $url, $args) {
	if (strpos($url, 'twitter') !==false) {
		$html = str_replace('<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>', '', $html);
	}
	return $html;
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
	$post = get_post($post_id);
	if ( isset($data['image_meta']['credit']) && $data['image_meta']['credit'] ) {
		update_post_meta($post_id, 'fotograf', esc_attr($data['image_meta']['credit']));
	}
	return $data;
}

add_filter( 'jetpack_content_width', 'telegram_content_width');

function telegram_content_width($content_width) {
	global $telegram_smaller;
	if ($telegram_smaller) {
		$telegram_smaller = false;
		return 560;
	}
	else {
		return 656;
	}

	return $content_width;
}

add_filter( 'embed_oembed_discover', 'telegram_enable_oembed_discovery' );

function telegram_enable_oembed_discovery() {
	return true;
}

add_filter( 'postmeta_form_limit', 'telegram_postmeta_form_limit' );

function telegram_postmeta_form_limit($limit) {
	return 1;
}

add_action('save_post', 'telegram_save_post', 99, 1);

function telegram_save_post($post_id) {
	// bail early if no ACF data
	if( empty($_POST['acf']) ) {
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
	$thumbnail_size = apply_filters( 'rss_enclosure_image_size', 'g1' );
	$thumbnail_id = get_post_thumbnail_id( get_the_ID() );
	$thumbnail = image_get_intermediate_size( $thumbnail_id, $thumbnail_size );
	if ( empty( $thumbnail ) )
		return;
	$upload_dir = wp_upload_dir();
	printf(
		'<enclosure url="%s" length="%s" type="%s" />',
		$thumbnail['url'],
		filesize( path_join( $upload_dir['basedir'], $thumbnail['path'] ) ),
		get_post_mime_type( $thumbnail_id )
	);
}

function telegram_remove_post_metaboxes() {
	remove_meta_box( 'postcustom' , 'post' , 'normal' );
	remove_meta_box( 'postexcerpt' , 'post' , 'normal' );
	remove_meta_box( 'commentsdiv' , 'post' , 'normal' );
	remove_meta_box( 'commentstatusdiv' , 'post' , 'normal' );
}
add_action( 'admin_menu' , 'telegram_remove_post_metaboxes' );

function telegram_disable_mce_wptextpattern( $opt ) {

	if ( isset( $opt['plugins'] ) && $opt['plugins'] ) {
		$opt['plugins'] = explode( ',', $opt['plugins'] );
		$opt['plugins'] = array_diff( $opt['plugins'] , array( 'wptextpattern' ) );
		$opt['plugins'] = implode( ',', $opt['plugins'] );
	}

	return $opt;
}

add_filter( 'tiny_mce_before_init', 'telegram_disable_mce_wptextpattern' );

add_filter( 'admin_post_thumbnail_html', 'telegram_add_thumbnail_type', 10, 2 );

function telegram_add_thumbnail_type( $content, $post_id ) {
    if ( 'price' !== get_post_type($post_id) ) {
        return $content;
    }
	$value = get_post_meta( $post_id, 'telegram_expanded', true );
	if (!$value) {
		$value = 1;
	}
	$content .= '<div>
<br>
<h1>Format članka</h1>
<label>
	<input type="radio" name="telegram_expanded" value="1" '.checked( $value, 1, false ).'> Naslov u slici</label>
<label>
<br>
<label>
	<input type="radio" name="telegram_expanded" value="2" '.checked( $value, 2, false ).'> Naslov ispod slike</label>
</label>
<br>
<label>
	<input type="radio" name="telegram_expanded" value="3" '.checked( $value, 3, false ).'> Portret</label>
</label>
<br>
<label>
	<input type="radio" name="telegram_expanded" value="4" '.checked( $value, 4, false ).'> Bez slike</label>
<label>
</div>';

	return $content;
}

add_action( 'save_post', 'telegram_save_post_thumbnail', 10, 3 );

function telegram_save_post_thumbnail($post_id, $post, $update) {
	if (isset($_POST['telegram_expanded'])) {
		update_post_meta( $post_id, 'telegram_expanded', intval($_POST['telegram_expanded']) );
	}
}

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
	    return '<figure ' . $id . 'class="wp-caption ' . esc_attr( $align ) . '">'
	           . do_shortcode( $content ) . '<i class="fa fa-search-plus"></i><figcaption class="wp-caption-text">' . $caption . ' <span class="photographer">' . $photo . '</span></figcaption></figure>';
    }
	return '<figure ' . $id . 'class="wp-caption ' . esc_attr( $align ) . '">'
	       . do_shortcode( $content ) . '<i class="fa fa-search-plus"></i><figcaption class="wp-caption-text">' . $caption . '</figcaption></figure>';
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
	}
	return $fields_to_return;
}

function telegram_load_megabreak($size, $number) {
    global $post;
    if ($size === 'break') {
        $template = 'templates/articles/article-megabreak.php';
        $image_size = 'fullpage';
        if (wp_is_mobile()) {
            $image_size = 'mobile-head';
        }
    }
    else {
        $template = 'templates/articles/article-poster.php';
        $image_size = 'article-poster';
    }
	$meta = get_post_meta(get_option('telegram_breaks'));
	$article1 = maybe_unserialize( $meta[$size.'_'.$number.'_article'][0] )[0];
	$post = get_post($article1);
	if (isset($meta[$size.'_'.$number.'_link'][0]) && $meta[$size.'_'.$number.'_link'][0]) {
		$link = esc_url( $meta[$size.'_'.$number.'_link'][0] );
	}
	else if ($article1) {
		$link = esc_url( get_the_permalink($article1) );
	}
	else {
		$link = '#';
	}
	if ( isset($meta[$size.'_'.$number.'_overtitle'][0]) && $meta[$size.'_'.$number.'_overtitle'][0] ) {
		$overtitle = $meta[$size.'_'.$number.'_overtitle'][0];
		$overtitle_link = '#';
	}
	else if ($article1) {
		$cat = get_the_category();
		$overtitle = $cat[0]->name;
		$overtitle_link = esc_url( get_category_link( $cat[0]->term_id ) );
	}
	else {
		$overtitle = '';
		$overtitle_link = '#';
	}

	$title = '';
	if (isset($meta[$size.'_'.$number.'_title'][0]) && $meta[$size.'_'.$number.'_title'][0]) {
	    $title = $meta[$size.'_'.$number.'_title'][0];
    }
    else if ($article1) {
	    $title = get_post_meta($article1, 'short_title', true);
	    if (!$title) {
	        $title = get_the_title($article1);
        }
    }
    $subtitle = '';
	if (isset($meta[$size.'_'.$number.'_subtitle'][0]) && $meta[$size.'_'.$number.'_subtitle'][0]) {
	    $subtitle = $meta[$size.'_'.$number.'_subtitle'][0];
    }
    else if($article1){
	    if (isset($meta[$size.'_'.$number.'_title'][0]) && $meta[$size.'_'.$number.'_title'][0]) {
	        $subtitle = get_post_meta($article1, 'subtitle', true);
        }
        else {
	        $subtitle = get_the_title($article1);
        }
    }

	if ( isset($meta[$size.'_'.$number.'_image'][0]) && $meta[$size.'_'.$number.'_image'][0] ) {
		$image = wp_get_attachment_image($meta[$size.'_'.$number.'_image'][0], $image_size);
	}
	else if ($article1) {
		$image = get_the_post_thumbnail($article1,$image_size);
	}
    $author = '';
	if ($article1) {
	    $author = telegram_get_coauthors($article1);
    }
    if (isset($meta[$size.'_'.$number.'_button_text']) && $meta[$size.'_'.$number.'_button_text']) {
	    $button_text = esc_html($meta[$size.'_'.$number.'_button_text']);
    }
    else {
	    $button_text = 'Pročitaj više';
    }
    $recommendations = 0;
    if ($article1) {
        $recommendations = get_post_meta($article1, '_recommendations', true);
    }
    include(locate_template($template));
    wp_reset_postdata();
}

function telegram_get_coauthors($post_id) {
    $author = '';
	foreach (get_coauthors($post_id) as $coauthor) {
		if ($author) {
			$author .= ', ';
		}
		$link = coauthors_posts_links_single($coauthor);
		$author .= $link;
	}
	return $author;
}

add_filter( 'tiny_mce_before_init', 'telegram_disable_mce_wptextpattern' );

add_filter( 'amt_image_size_content', 'telegram_amt_image_size', 10, 1 );

function telegram_amt_image_size($size) {
	return 'velike-price';
}

//remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

//add_action('pre_get_posts', 'telegram_instant_pre_get');
function telegram_instant_pre_get($query) {
	if ( $query->is_main_query() && $query->is_feed( INSTANT_ARTICLES_SLUG ) ) {
		$query->set( 'post_status', 'published' );
		$query->set( 'post_type', array('post', 'price') );
	}
}

add_filter( 'instant_articles_subtitle', 'telegram_instant_article_subtitle', 10, 2 );

function telegram_instant_article_subtitle($subtitle, $that) {
	$post = $that->get_the_id();
	$subtitle = get_post_meta( $post, 'subtitle', true );
	return $subtitle;
}

add_action( 'instant_articles_compat_registry_analytics', 'telegram_add_to_registry_ga');
add_action( 'instant_articles_compat_registry_analytics', 'telegram_add_to_registry_gemius');
function telegram_add_to_registry_ga(&$registry) {
	$display_name = 'Google Analytics by Marko';

	$identifier = 'google-analytics-for-wordpress';

	$embed_code = "<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60611577-1', 'auto');
  ga('require', 'displayfeatures');
  ga('set', 'campaignSource', 'Facebook');
  ga('set', 'campaignMedium', 'Social Instant Article');
  ga('set', 'title', 'IA - '+ia_document.title);
  ga('send', 'pageview');

</script>";

	$registry[ $identifier ] = array(
		'name' => $display_name,
		'payload' => $embed_code,
	);
}

function telegram_add_to_registry_gemius(&$registry) {
	$display_name = 'Gemius by Marko';

	$identifier = 'gemius-for-wordpress';

	$embed_code = "<script type='text/javascript'>
		<!--//--><![CDATA[//><!--
		var pp_gemius_identifier = 'nSblbvtw7YnzUiC8AtarvJdS3yggumM2F_xjEZ.9W1..57';
                var pp_gemius_extraparameters = new Array('gemia=1');
		// lines below shouldn't be edited
		function gemius_pending(i) { window[i] = window[i] || function() {var x = window[i+'_pdata'] = window[i+'_pdata'] || []; x[x.length]=arguments;};};
		gemius_pending('gemius_hit'); gemius_pending('gemius_event'); gemius_pending('pp_gemius_hit'); gemius_pending('pp_gemius_event');
		(function(d,t) {try {var gt=d.createElement(t),s=d.getElementsByTagName(t)[0],l='http'+((location.protocol=='https:')?'s':''); gt.setAttribute('async','async');
			gt.setAttribute('defer','defer'); gt.src=l+'://hr.hit.gemius.pl/xgemius.js'; s.parentNode.insertBefore(gt,s);} catch (e) {}})(document,'script');
		//--><!]]>
</script>";

	$registry[ $identifier ] = array(
		'name' => $display_name,
		'payload' => $embed_code,
	);
}

add_filter( 'amp_post_article_header_meta', 'telegram_amp_header_meta', 10, 1 );

function telegram_amp_header_meta($parts) {
	return array( 'meta-subtitle', 'meta-author', 'meta-time' );
}

add_filter( 'amp_post_template_data', 'telegram_amp_fonts', 1, 2 );

function telegram_amp_fonts($data, $post) {
    $data['font_urls'] = array(
	    'lora' => 'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&subset=latin-ext',
	    'ptsans' => 'https://fonts.googleapis.com/css?family=PT Sans:400,700&subset=latin-ext'
    );
	return $data;
}

add_filter( 'amp_site_icon_url', 'telegram_amp_site_icon' );

function telegram_amp_site_icon($image) {
    return get_site_icon_url();
}

function telegram_og_graph_tags( $tags ) {
	$tags['fb:app_id'] = '1383786971938581';
	$tags['fb:pages'] = '688325737947866';
	if ( is_single() ) {
		$tags['article:publisher'] = 'https://www.facebook.com/www.telegram.hr/';
		$tags['article:author'] = 'https://www.facebook.com/www.telegram.hr/';
		$title = get_post_meta(get_the_ID(), 'title', true);
		if ( $title ) {
			$tags['og:title'] = wp_kses( $title, array() );
		}
		$description = get_post_meta(get_the_ID(), 'description', true);
		if ( $description ) {
			$tags['og:description'] = wp_kses( $description, array() );
		}
		$image = get_post_meta(get_the_ID(), 'image', true);
		if ( $image ) {
			$image = wp_get_attachment_image_src( $image, array( 1200, 1200 ) );
			$tags['og:image'] = esc_url( $image[0] );
			$tags['og:image:width'] = intval( $image[1] );
			$tags['og:image:height'] = intval( $image[2] );
		}

	}

	return $tags;
}

add_filter( 'jetpack_open_graph_tags', 'telegram_og_graph_tags', 10, 1 );

if ( defined( 'WP_CLI' ) && WP_CLI ) {
	require_once dirname( __FILE__ ) . '/cli.php';
}

/*
	Disable Default Dashboard Widgets
	@ https://digwp.com/2014/02/disable-default-dashboard-widgets/
*/
function telegram_disable_default_dashboard_widgets() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
}
add_action('wp_dashboard_setup', 'telegram_disable_default_dashboard_widgets', 999);

add_action( 'template_redirect','telegram_filter_feeds', 1 );

function telegram_filter_feeds() {
	if( !is_feed() || is_404() )
		return;
	global $wp_rewrite, $wp_query;
	if ( is_author() || is_date() || is_singular() || is_tax() ) {
		$wp_query->is_feed = false;
		$wp_query->set_404();
		status_header( 404 );
		// Override the xml+rss header set by WP in send_headers
		header( 'Content-Type: ' . get_option('html_type') . '; charset=' . get_option('blog_charset') );
	}
}

add_filter( 'zoninator_zone_max_lock_period', 'z_disable_zoninator_locks' );

add_filter('coauthors_guest_author_manage_cap', 'telegram_coauthors_cap', 10, 1);

function telegram_coauthors_cap($caps) {
    return 'edit_others_posts';
}

function telegram_remove_toolbar_node($wp_admin_bar) {

	// replace 'updraft_admin_node' with your node id
	$wp_admin_bar->remove_node('customize');
	$wp_admin_bar->remove_node('updates');
	$wp_admin_bar->remove_node('comments');

}
add_action('admin_bar_menu', 'telegram_remove_toolbar_node', 999);

function telegram_acf_query($args, $field, $post_id)
{
	$args['post_status'] = array('publish');

	$args['orderby'] = 'date';
	$args['order'] = 'DESC';
	$args['no_found_rows'] = true;

	return $args;
}
add_filter('acf/fields/relationship/query', 'telegram_acf_query', 10, 3);

function telegram_after_save_image($new_status, $old_status, $post){

	$run_on_statuses = array('publish', 'pending', 'future');

	if(!in_array($new_status, $run_on_statuses))
		return;

	$post_id = $post->ID;
	if ($post->post_type === 'guest-author') {
	    return;
    }

	if (strtotime($post->post_date) < strtotime('1.10.2017.')) {
	    return;
    }

	if ( wp_is_post_revision( $post_id ) )
		return; //not sure about this.. but apparently save is called twice when this happens

	$image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), "full" );
	if(!$image_data)
		return; //separate message if no image at all. (I use a plugin for this)

	$image_width = $image_data[1];
	$image_height = $image_data[2];
	switch ($post->post_type) {
        case 'post':
        case 'fotogalerija':
        case 'video':
            $min_width = 840;
            $min_height = 530;
            break;
        case 'price':
            $size = get_post_meta($post_id, 'telegram_expanded', true);
            if (1 === intval($size)) {
	            $min_width = 1600;
	            $min_height = 899;
            }
            else if (2 === intval($size)) {
	            $min_width = 1600;
	            $min_height = 650;
            }
            else if (3 === intval($size)) {
	            $min_width = 800;
	            $min_height = 899;
            }
            else {
                return;
            }
            break;
        default: //for other post types don't check
            return;
            break;
    }
	if($image_width < $min_width || $image_height < $min_height){

		// Being safe, honestly $old_status shouldn't be in $run_on_statuses... it wouldn't save the first time!
		$reverted_status = in_array($old_status, $run_on_statuses) ? 'draft' : $old_status;

		wp_update_post(array(
			'ID' => $post_id,
			'post_status' => $reverted_status,
		));

		$back_link = admin_url("post.php?post=$post_id&action=edit");

		update_post_meta($post_id,'size_warning', "Naslovna slika mora biti najmanje $min_width x $min_height. Objava je ponovo u statusu '$reverted_status'");

	}
}
//add_action('transition_post_status', 'telegram_after_save_image', 10, 3);

# Output error message
function telegram_image_notice(){
    global $post;
	if($post && get_post_meta($post->ID, 'size_warning', true)):?>

        <div class="notice notice-error">
            <p><?php echo get_post_meta($post->ID, 'size_warning', true); ?></p>
        </div>

	<?php
        delete_post_meta($post->ID, 'size_warning');
    endif;


}
add_action('admin_notices','telegram_image_notice');

# Remove the 'Post updated. View post' message
function telegram_remove_image_notice($messages){
    global $post;
	if($post && get_post_meta($post->ID, 'size_warning', true)){
		return array();
	}

	return $messages;
}
add_filter( 'post_updated_messages', 'telegram_remove_image_notice' );

//add_filter('admin_post_thumbnail_html', 'telegram_admin_thumbnail', 10, 2);

function telegram_admin_thumbnail($content, $post_id) {
	$id = get_post_thumbnail_id($post_id);
	if ($id) {
		$image = wp_get_attachment_image_src( $id, 'full' );
		switch ($post->post_type) {
			case 'post':
			case 'fotogalerija':
			case 'video':
				$min_width = 840;
				$min_height = 530;
				break;
			case 'price':
				$size = get_post_meta($post_id, 'telegram_expanded', true);
				if (1 === intval($size)) {
					$min_width = 1600;
					$min_height = 899;
				}
				else if (2 === intval($size)) {
					$min_width = 1600;
					$min_height = 650;
				}
				else if (3 === intval($size)) {
					$min_width = 800;
					$min_height = 899;
				}
				else {
					return;
				}
				break;
			default: //for other post types don't check
				return;
				break;
		}
		if ( $image[1] < $image_width || $image[2] <$image_height ) {
			global $current_user;
			delete_post_thumbnail($post_id);
			remove_filter( 'admin_post_thumbnail_html', 'telegram_admin_thumbnail' );
			$content = _wp_post_thumbnail_html(null, $post_id);
			add_filter( 'admin_post_thumbnail_html', 'telegram_admin_thumbnail' );
			$content = '<p>'.$current_user->first_name.', odabrana slika nije dovoljno velika za prikaz na ovoj poziciji. Ovaj incident će biti prijavljen.</p>' . $content;
		}
	}
	return $content;
}

add_filter( 'instant_articles_content', 'telegram_add_perex', 10, 2);

function telegram_add_perex($content, $post_id) {
    $perex = get_post_meta($post_id, 'perex', true);
    if ($perex) {
        $content = '<h1>'.$perex.'</h1>' . $content;
    }
    return $content;
}

add_filter( 'next_posts_link_attributes', 'telegram_next_posts_link_attributes', 10, 1 );

function telegram_next_posts_link_attributes($attr) {
    $attr = 'class="btn" id="load-more"';

    return $attr;
}

add_filter( 'coauthors_guest_author_avatar_sizes', 'telegram_avatar_sizes' );

function telegram_avatar_sizes($sizes) {
    $sizes = [
            30, 150, 200, 300,
    ];
    return $sizes;
}

add_filter('set_url_schema', 'telegram_schema');

function telegram_schema($url) {
    return str_replace('http://', 'https://', $url);
}

add_filter('body_class', 'telegram_body_class');

function telegram_body_class($classes) {
    $classes[] = 'tmg-no-cookie';
    return $classes;
}

function telegram_enable_extended_upload ( $mime_types =array() ) {

	// The MIME types listed here will be allowed in the media library.
	// You can add as many MIME types as you want.
	$mime_types['mp4']  = 'video/mp4';

	return $mime_types;
}

add_filter('upload_mimes', 'telegram_enable_extended_upload');

//add_filter('rest_post_query', 'telegram_rest_posts', 10, 2);

function telegram_rest_posts($args, $request) {
    $args['post_type'] = 'post,price';
    return $args;
}

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

add_action( 'added_option',   '_wpcom_vip_maybe_clear_alloptions_cache' );
add_action( 'updated_option', '_wpcom_vip_maybe_clear_alloptions_cache' );
add_action( 'deleted_option', '_wpcom_vip_maybe_clear_alloptions_cache' );

add_filter( 'get_coauthors', 'telegram_coauthors', 10, 2 );

function telegram_coauthors($coauthors, $post_id) {
	if (get_post_meta($post_id, 'author_hidden', true)){
	    return [];
    }
	return $coauthors;
}