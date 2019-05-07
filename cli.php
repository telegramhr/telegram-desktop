<?php

class Telegram_Command extends WP_CLI_Command {

	public function facebook($args, $assoc_args) {
		$page = 1;
		while ($page < 5) {
			$q = new WP_Query( array(
				'post_status'    => 'publish',
				'post_type'      => array( 'post', 'price', 'partneri', 'fotogalerije', 'video' ),
				'posts_per_page' => 20,
				'paged'           => $page
			) );
			while ( $q->have_posts() ) {
				$q->the_post();
				$url     = get_the_permalink();
				$id      = get_the_ID();
				//$request = wp_remote_get( 'https://graph.facebook.com/v2.10/?id=' . rawurlencode( $url ) . '&access_token=1383786971938581|5a3bbbbddd912a9b600ffd6516c780fa&fields=engagement'
				$request = wp_remote_get( 'https://graph.facebook.com/v2.10/?id=' . rawurlencode( $url ) . '&access_token=645760695871359|7270df2e6f1aef8f96019feca8861316fa&fields=engagement'
				);
				if ( ! is_wp_error( $request ) ) {
					$body = json_decode( $request['body'], true );
					if ( intval( $body['engagement']['comment_plugin_count'] ) ) {
						update_post_meta( $id, '_comments', intval( $body['engagement']['comment_plugin_count'] ) );
					}

					if ( $id == 402226 ) {
						return;
					}
					$face = intval( $body['engagement']['reaction_count'] ) + intval( $body['engagement']['comment_count'] ) + intval( $body['engagement']['share_count'] ) + intval( $body['engagement']['comment_plugin_count'] );
					if (  $id === 612167 && $face < 67) {
						$face = 67;
					}
					update_post_meta( $id, '_face_recommendations', $face );
					$total   = intval( $face );
					if ( intval( $total ) ) {
						if ($id == 508451) {
							$total += 147;
						}
						update_post_meta( $id, '_recommendations', $total );
					}
				}
			}
			$page++;
		}
	}

	public function promo($args, $assoc_args) {
		$position = $assoc_args['position'];
		remove_action('pre_get_posts', 'telegram_pre_get_posts');
		remove_action('pre_get_posts', 'telegram_main_query');
		if ('desktop' == $position) {
			$meta_query = array(
				'relation' => 'OR',
				array(
					'key' => 'pozicija_1',
					'value' => '1',
				),
				array(
					'key' => 'pozicija_2',
					'value' => '1',
				),
				array(
					'key' => 'pozicija_4',
					'value' => '1',
				)
			);
		}
		else {
			$meta_query = array(
				array(
					'key' => 'pozicija_3',
					'value' => '1'
				)
			);
		}
		$q = new WP_Query(array(
			'post_status' => 'publish',
			'cat' => 3926,
			'posts_per_page' => 20,
			'meta_query' => $meta_query,
			'no_found_rows' => true
		));
		$pos = array();
		while ($q->have_posts()) {
			$q->the_post();
			$obj = $this->get_object($q->post->ID, $position);
			if ($obj['od'] <= current_time('Ymd')) {
				if ( $obj['do'] <= date( 'Ymd', current_time('U') ) ) {
					update_post_meta( $q->post->ID, 'pozicija_' . $obj['pos'], 0 );
				} else {
					$pos[] = $obj['ID'];
				}
			}
		}
		update_option( 'telegram_promo_'.$position, $pos );
	}

	private function get_object($post_id, $position) {
		if ($position == 'desktop') {
			$pos1 = 1;
		}
		else {
			$pos1 = 3;
		}

		return $object = array(
			'ID'  => intval( $post_id ),
			'od'  => intval( get_post_meta( $post_id, 'datum_od' . $pos1, true ) ),
			'do'  => intval( get_post_meta( $post_id, 'datum_do' . $pos1, true ) ),
			'pos' => $pos1
		);

	}
}

WP_CLI::add_command( 'telegram', 'Telegram_Command' );