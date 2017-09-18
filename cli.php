<?php

class Telegram_Command extends WP_CLI_Command {

	public function facebook($args, $assoc_args) {
		$page = 1;
		while ($page < 15) {
			$q = new WP_Query( array(
				'post_status'    => 'publish',
				'post_type'      => array( 'post', 'price' ),
				'posts_per_page' => 50,
				'paged'           => $page
			) );
			while ( $q->have_posts() ) {
				$q->the_post();
				$url     = get_the_permalink();
				$id      = get_the_ID();
				$request = wp_remote_get( 'https://graph.facebook.com/v2.7/?id=' . rawurlencode( $url ) . '&access_token=1383786971938581|5a3bbbbddd912a9b600ffd6516c780fa'
				);
				if ( ! is_wp_error( $request ) ) {
					$body = json_decode( $request['body'], true );
					if ( intval( $body['share']['comment_count'] ) ) {
						update_post_meta( $id, '_comments', intval( $body['share']['comment_count'] ) );
					}
					if ( $id == 402226 ) {
						return;
					}

					update_post_meta( $id, '_face_recommendations', intval( $body['share']['share_count'] ) );
					$total   = intval( $body['share']['share_count'] );
					$request = wp_remote_get( 'http://urls.api.twitter.com/1/urls/count.json?url=' . rawurlencode( $url ) );
					if ( ! is_wp_error( $request ) ) {
						$body = json_decode( $request['body'], true );
						update_post_meta( $id, '_tweet_recommendations', intval( $body['count'] ) );
						$total += intval( $body['count'] );
					}
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
}

WP_CLI::add_command( 'telegram', 'Telegram_Command' );