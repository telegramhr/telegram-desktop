<?php

class Telegram_Command extends WP_CLI_Command {

	public function facebook($args, $assoc_args) {
		$page = 1;
		while ($page < 5) {
			$q = new WP_Query( array(
				'post_status'    => 'publish',
				'post_type'      => array( 'post', 'price', 'partneri', 'fotogalerije', 'video', 'native' ),
				'posts_per_page' => 20,
				'paged'           => $page,
				'ignore_sticky_posts' => true,
				'no_found_rows'       => true,
			) );
			while ( $q->have_posts() ) {
				$q->the_post();
				$url     = get_the_permalink();
				$id      = get_the_ID();
				$request = wp_remote_get( 'https://graph.facebook.com/v3.3/?id=' . rawurlencode( $url ) . '&access_token=1383786971938581|5a3bbbbddd912a9b600ffd6516c780fa&fields=engagement'
				//$request = wp_remote_get( 'https://graph.facebook.com/v2.10/?id=' . rawurlencode( $url ) . '&access_token=645760695871359|7270df2e6f1aef8f96019feca8861316&fields=engagement'
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
					if (  $id === 696993 && $face < 162) {
						$face = 162;
					}
					if (  $id === 700102 && $face < 122) {
						$face = 122;
					}
					$fake = get_post_meta($id, 'fake_recommendations', true);
					if ($fake && intval($fake) > $face ) {
						$face = $fake;
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
			'post_type' => ['post', 'native', 'partneri', 'video'],
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

	function covid_pull_data() {
		$confirmed_croatia = get_post_meta(780032, 'confirmed_croatia', true);
		$deaths_croatia = get_post_meta(780032, 'deaths_croatia', true);
		$recovered_croatia = get_post_meta(780032, 'recovered_croatia', true);
		$data = wp_remote_get('https://api.coronatracker.com/v3/stats/worldometer/global');
		$total = json_decode($data['body'], true);
		$today = [
			'confirmed' => $total['totalConfirmed'],
			'deaths' => $total['totalDeaths'],
			'recovered' => $total['totalRecovered'],
			'created' => $total['created'],
		];
		$old = get_option('tmg_covid_total');
		if (date('Ymd', strtotime($old['created'])) < date('Ymd', strtotime($today['created']))) {
			update_option('tmg_covid_total_yesterday', $old);
		}
		if (isset($today['confirmed']) && $today['confirmed']) {
			update_option( 'tmg_covid_total', $today );
		}
		$croatia = [];
		if ($confirmed_croatia) {
			$croatia['confirmed'] = $confirmed_croatia;
		}
		if ($deaths_croatia && $deaths_croatia > $croatia['deaths']) {
			$croatia['deaths'] = $deaths_croatia;
		}
		if ($recovered_croatia && $recovered_croatia > $croatia['recovered']) {
			$croatia['recovered'] = $recovered_croatia;
		}
		update_option('tmg_covid_croatia', $croatia);

		$file = 'https://raw.githubusercontent.com/CSSEGISandData/COVID-19/master/csse_covid_19_data/csse_covid_19_time_series/time_series_covid19_confirmed_global.csv';
		$fileData=fopen($file,'r');
		$days = [];
		$header = fgetcsv($fileData);
		while (($line = fgetcsv($fileData)) !== FALSE) {
			if ($line[1] === 'Croatia') {
				$count = sizeof($line);
				$days = [
					$croatia['confirmed'],
					$line[$count-2],
					$line[$count-3],
					$line[$count-4],
					$line[$count-5],
					$line[$count-6],
					$line[$count-7],
					$line[$count-8],
					$line[$count-9],
					$line[$count-10],
				];
				break;
			}
		}
		if ($confirmed_croatia && $confirmed_croatia > $days[0]) {
			$days[0] = $confirmed_croatia;
		}
		update_option('tmg_covid_days', $days);
	}

	function corona_tracker() {
		$data = wp_remote_get('https://api.coronatracker.com/v2/stats?countryCode=');
		$total = json_decode($data['body'], true);
		update_option('tmg_covid_total', $total);
		$data = wp_remote_get('https://api.coronatracker.com/v2/stats?countryCode=HR');
		$croatia= json_decode($data['body'], true);
		update_option('tmg_covid_croatia', $croatia);
	}
}

WP_CLI::add_command( 'telegram', 'Telegram_Command' );