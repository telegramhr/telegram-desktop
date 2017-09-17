<?php

add_filter( 'rewrite_rules_array','telegram_insert_rewrite_rules' );

function telegram_insert_rewrite_rules( $rules ) {
	$newrules = array();

	$newrules['(fotogalerije|video)/(.+?)/([^/]+)/?$'] = 'index.php?post_type=$matches[1]&category_name=$matches[2]&name=$matches[3]';
	$newrules['(fotogalerije|video)/(.+?)/?$'] = 'index.php?post_type=$matches[1]&category_name=$matches[2]';
	return $newrules + $rules;
}

// add our new permastruct to the rewrite rules
add_filter( 'fotogalerije_rewrite_rules', 'telegram_add_foto_permastruct' );
add_filter( 'video_rewrite_rules', 'telegram_add_video_permastruct' );

function telegram_add_foto_permastruct( $rules ) {
	global $wp_rewrite;

	// set your desired permalink structure here
	$struct = '/fotogalerije/%category%/%postname%/';

	// use the WP rewrite rule generating function
	$rules = $wp_rewrite->generate_rewrite_rules(
		$struct,       // the permalink structure
		EP_PERMALINK,  // Endpoint mask: adds rewrite rules for single post endpoints like comments pages etc...
		false,         // Paged: add rewrite rules for paging eg. for archives (not needed here)
		true,          // Feed: add rewrite rules for feed endpoints
		true,          // For comments: whether the feed rules should be for post comments - on a singular page adds endpoints for comments feed
		false,         // Walk directories: whether to generate rules for each segment of the permastruct delimited by '/'. Always set to false otherwise custom rewrite rules will be too greedy, they appear at the top of the rules
		true           // Add custom endpoints
	);

	return $rules;
}

function telegram_add_video_permastruct( $rules ) {
	global $wp_rewrite;

	// set your desired permalink structure here
	$struct = '/video/%category%/%postname%/';

	// use the WP rewrite rule generating function
	$rules = $wp_rewrite->generate_rewrite_rules(
		$struct,       // the permalink structure
		EP_PERMALINK,  // Endpoint mask: adds rewrite rules for single post endpoints like comments pages etc...
		false,         // Paged: add rewrite rules for paging eg. for archives (not needed here)
		true,          // Feed: add rewrite rules for feed endpoints
		true,          // For comments: whether the feed rules should be for post comments - on a singular page adds endpoints for comments feed
		false,         // Walk directories: whether to generate rules for each segment of the permastruct delimited by '/'. Always set to false otherwise custom rewrite rules will be too greedy, they appear at the top of the rules
		true           // Add custom endpoints
	);

	return $rules;
}

// parse the generated links
add_filter( 'post_type_link', 'telegram_custom_post_permalink', 10, 4 );

function telegram_custom_post_permalink( $permalink, $post, $leavename, $sample ) {

	// only do our stuff if we're using pretty permalinks
	// and if it's our target post type
	if ( $post->post_status == 'publish' && ($post->post_type == 'fotogalerije' || $post->post_type=='video' ) && get_option( 'permalink_structure' ) ) {

		// remember our desired permalink structure here
		// we need to generate the equivalent with real data
		// to match the rewrite rules set up from before

		$struct = $post->post_type.'/%category%/%postname%/';

		$rewritecodes = array(
			'%category%',
			'%postname%'
		);

		// setup data
		//$terms = get_the_terms($post->ID, 'category');
		//$unixtime = strtotime( $post->post_date );

		// this code is from get_permalink()
		$category = '';
		//if ( strpos($permalink, '%category%') !== false ) {

			$cats = get_the_category($post->ID);
			if ( $cats ) {
				usort($cats, '_usort_terms_by_ID'); // order by ID
				$category = $cats[0]->slug;
				if ( $parent = $cats[0]->parent )
					$category = get_category_parents($parent, false, '/', true) . $category;
			}
			// show default category in permalinks, without
			// having to assign it explicitly
			if ( empty($category) ) {
				$default_category = get_category( get_option( 'default_category' ) );
				$category = is_wp_error( $default_category ) ? '' : $default_category->slug;
			}
		//}


		$replacements = array(
			$category,
			$post->post_name
		);

		// finish off the permalink
		$permalink = home_url( str_replace( $rewritecodes, $replacements, $struct ) );
		$permalink = user_trailingslashit($permalink, 'single');
	}

	return $permalink;
}

function telegram_change_author_permalinks() {

	global $wp_rewrite;

	// Change the value of the author permalink base to whatever you want here
	$wp_rewrite->author_base = 'autor';
}

add_action('init','telegram_change_author_permalinks');