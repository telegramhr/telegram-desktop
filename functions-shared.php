<?php


require_once ('plugins/gallery.php');
require_once ('plugins/shortcodes.php');
remove_action('wp_footer', 'jetpack_mobile_available');
remove_action( 'do_pings', 'do_all_pings' );

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
    add_image_size('article-1', 620, 370, true);
    add_image_size('article-2', 590, 332, true);
    add_image_size('feed', 230, 190, true);
    add_image_size('fourth', 280, 230, true);
    add_image_size('sidebar', 320, 180, true);
	// Single
	add_image_size('single-v1', 840, 530, true);
	add_image_size('single-v2', 1210, 575, true); //Single v3 uses 'fullpage'
	// Full page images
	add_image_size('fullpage', 1600, 899, true);
	add_image_size('portrait', 800, 899, true);
	add_image_size('widescreen', 1600, 650, true);

	// NEW SIZES
	add_image_size('article-head', 1200, 800, true);
	add_image_size('article-rainbow-small', 190, 120, true);
	add_image_size('article-poster', 325, 460, true);
	add_image_size('mobile-head', 375, 480, true);
}

add_action('after_setup_theme', 'telegram_theme_setup');

add_filter( 'image_size_names_choose', 'my_custom_sizes' );

function my_custom_sizes( $sizes ) {
	return array_merge( $sizes, array(
		'velike-price' => 'Velike priče',
	) );
}

// load css and js
function telegram_main_scripts() {
	// Load our main stylesheet.
	wp_register_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array());
	// Serif
	wp_register_style('lora', 'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i', array());
	// Sans serif
	wp_register_style('pt-sans', 'https://fonts.googleapis.com/css?family=PT+Sans:400,700', array());
	// Oswald - for stickers
	wp_register_style('oswald', 'https://fonts.googleapis.com/css?family=Oswald&subset=latin-ext', array());

//	wp_register_script('telegram-comparison', content_url('themes/telegram/js/comparison.js'), '20150514'); TODO: jel trebamo usporedbu?

	wp_register_style('slick', get_stylesheet_directory_uri() . '/assets/js/slick/slick.css');
	wp_register_style('slick-theme', get_stylesheet_directory_uri().  '/assets/js/slick/slick-theme.css');
	wp_register_script('slick', get_stylesheet_directory_uri() . '/assets/js/slick/slick.js',null, '20170917', true);
	// For touch controls
	wp_register_script('hammer-time', get_stylesheet_directory_uri() . '/assets/js/hammer-time.min.js',null, '20170917', true);

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
            'id' => 'home_sidebar_2',
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
        $trimmed = rtrim(substr($stripped, 0, $limit));
        $new_excerpt_array = explode(' ', $trimmed);
        $last_word = array_pop($new_excerpt_array);
        $forbidden = array('.', ',', '?', '!', ':', ';');
        if (in_array(substr($last_word, -1), $forbidden)) {
            $last_word = substr($last_word, 0, strlen($last_word) - 1);
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
		if ($query->is_home() ) {
			$query->set('tax_query', array( array( 'taxonomy' => 'positions', 'field' => 'slug', 'terms' => array('feed') ) ));

		}
		else if (is_category()) {
			$term = get_queried_object();
			$po = get_option('telegram_positions_'.$term->slug);
			$query->set('post__not_in', array($po['g1']));
		}

		if ( ( $query->is_home() || $query->is_category() || $query->is_archive() ) ) {
			if ( isset( $query->query['post_type'] ) && in_array( $query->query['post_type'], array(
					'fotogalerije',
					'video',
                    'naslovnica'
				) )
			) {

			} else {
				$query->set( 'post_type', array(
					'post',//TODO
					'price',
					'video'
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
				'price'
			) );
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
	$out['caption'] .= '&nbsp; <span class="right">'.telegram_get_photographer($id).'</span>';
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
	//$content .= '<div class="ender"><img src="'.get_template_directory_uri().'/assets/img/tg-logo-red.svg"/></div>';
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

add_filter( 'oembed_result', 'telegram_twitter_embed_fix', 10, 3 );

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
}

add_filter( 'jpeg_quality', create_function( '', 'return 100;' ) );

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

function disable_srcset( $sources ) { return false; } add_filter( 'wp_calculate_image_srcset', 'disable_srcset' );

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

	return '<figure ' . $id . 'class="wp-caption ' . esc_attr($align) . '">'
	. do_shortcode( $content ) . '<i class="fa fa-search-plus"></i><figcaption class="wp-caption-text">' . $caption . '<span class="photographer">'.telegram_get_photographer($image_id).'</span></figcaption></figure>';
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

// Exclude iPad
function my_wp_is_mobile() {
	if (
		! empty($_SERVER['HTTP_USER_AGENT'])

		// bail out, if iPad
		&& false !== strpos($_SERVER['HTTP_USER_AGENT'], 'iPad')
	) return false;
	return wp_is_mobile();
} // function my_wp_is_mobile

function telegram_load_megabreak($size, $number) {
    if ($size === 'break') {
        $template = 'templates/articles/article-megabreak.php';
        $image_size = 'fullpage';
    }
    else {
        $template = 'templates/articles/article-poster.php';
        $image_size = 'article-poster';
    }

	$meta = get_post_meta(get_option('telegram_breaks'));
	$article1 = $meta[$size.'_'.$number.'_article'][0];
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
	        $subtitle = get_post_meta($article1, '_subtitle', true);
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