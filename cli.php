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
				$request = wp_remote_get( 'https://graph.facebook.com/v19.0/?id=' . rawurlencode( $url ) . '&access_token=1383786971938581|5a3bbbbddd912a9b600ffd6516c780fa&fields=engagement' );
				if ( ! is_wp_error( $request ) ) {
					$body = json_decode( $request['body'], true );
					if ( intval( $body['engagement']['comment_plugin_count'] ) ) {
						update_post_meta( $id, '_comments', intval( $body['engagement']['comment_plugin_count'] ) );
					}

					$face = intval( $body['engagement']['reaction_count'] ) + intval( $body['engagement']['comment_count'] ) + intval( $body['engagement']['share_count'] ) + intval( $body['engagement']['comment_plugin_count'] );

					$fake = get_post_meta($id, 'fake_recommendations', true);
					if ($fake && intval($fake) > $face ) {
						$face = $fake;
					}
					$total = intval( $face );
					if ( $total ) {
						update_post_meta( $id, '_recommendations', $total );
					}

				}
			}
			$page++;
		}
	}

	public function promo($args, $assoc_args) {
		remove_action('pre_get_posts', 'telegram_pre_get_posts');
		remove_action('pre_get_posts', 'telegram_main_query');
			$meta_query = array(
				array(
					'key' => 'pozicija_1',
					'value' => '1',
				),
			);
		$q = new WP_Query(array(
			'post_type' => ['partneri'],
			'post_status' => 'publish',
			'posts_per_page' => 20,
			'meta_query' => $meta_query,
			'no_found_rows' => true
		));
		$pos = array();
		while ($q->have_posts()) {
			$q->the_post();
			$obj = $this->get_object($q->post->ID);
			if ($obj['od'] <= current_time('Ymd')) {
				if ( $obj['do'] <= date( 'Ymd', current_time('U') ) ) {
					update_post_meta( $q->post->ID, 'pozicija_' . $obj['pos'], 0 );
				} else {
					$pos[] = $obj['ID'];
				}
			}
		}
		update_option( 'telegram_promo_desktop', $pos );
	}

	private function get_object($post_id) {
			$pos1 = 1;

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

		$data = wp_remote_get('http://api.coronatracker.com/v3/analytics/newcases/country?countryCode=HR&startDate='.date('Y-m-d', strtotime('-7days')).'&endDate='.date('Y-m-d'));
		$data = json_decode($data['body'], true);
		$days = [];
		foreach ($data as $date) {
			$updated = strtotime($date['last_updated']);
			$days[date('Ymd', $updated)] = $date['new_infections'];

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

	function us_elections() {
        // https://feeds-elections.foxnews.com/archive/politics/elections/2024/3/2024_Generals/President/national_level_results/file.json?cb=1730819980000

		$states = ['DC', 'VT', 'MA', 'HI', 'NY', 'MD', 'CA', 'RI', 'DE', 'WA', 'CT', 'NJ', 'OR', 'IL', 'NM', 'CO', 'VA', 'ME', 'NH', 'MI', 'WI', 'MN','NV', 'PA', 'AZ', 'FL', 'NC', 'GA', 'IA', 'OH', 'TX', 'MT', 'SC', 'AK', 'MO', 'IN', 'KS', 'MS', 'UT', 'SD', 'TN', 'NE', 'KY', 'LA', 'AL', 'ND', 'ID', 'AR', 'OK', 'WV', 'WY'];
		$results = [];
		foreach ($states as $state) {
			$url = 'https://politics.api.cnn.io/results/race/2024-PG-'.$state.'.json';
			$data = wp_remote_get($url);
			$data = json_decode($data['body'], true);
			$biden = [];
			$trump = [];
			foreach ($data['candidates'] as $candidate) {
				if ($candidate['candidateId'] === 64984) {
					$temp_winner=false;
					if ($candidate['winner']) {
						$temp_winner=true;
					}
					$biden = [
						'totalDelegates' => $candidate['electoralVotes']['votes'],
						'voteNum' => $candidate['voteNum'],
						'votePercent' => $candidate['votePercentNum'],
						'winner' => $temp_winner,
					];
				}
				else if ($candidate['candidateId'] === 8639) {
					$temp_winner=false;
					if ($candidate['winner']) {
						$temp_winner=true;
					}
					$trump = [
						'totalDelegates' => $candidate['electoralVotes']['votes'],
						'voteNum' => $candidate['voteNum'],
						'votePercent' => $candidate['votePercentNum'],
						'winner' => $temp_winner,
					];
				}
			}
			$results[$state] = [
				'percentReporting' => $data['percentReporting'],
				'totalVote' => $data['totalVote'],
				'haris' => $biden,
				'trump' => $trump
			];
		}

		$results['lastUpdate'] = date('U');
        var_dump($results);
		update_option('us_elections', $results);
	}

	public function test() {
		$q = 'Drugi najveći ruski grad uskoro će se naći u poluokruženju, a strateški opskrbni pravac u dosegu NATO-a';
        $args = apply_filters( 'zoninator_search_args', array(
            's' => $q,
            'post_status' => array( 'publish', 'future' ),
            'order' => 'DESC',
            'orderby' => 'post_date',
            'suppress_filters' => true,
            'no_found_rows' => true,
            'ignore_sticky_posts' => true,
            'year' => 2023,
        ) );

        $query = new WP_Query( $args );
        while($query->have_posts()) {
            	$query->the_post();
            	echo $query->post->ID."\n";
        }
	}

    public function clean() {
        global $wpdb;
        while(true) {
            $wpdb->query("DELETE FROM wp_options WHERE option_name LIKE '_transient_%' LIMIT 1000");
            \WP_CLI::line('Deleted ' . $wpdb->rows_affected . ' rows' . time());
            sleep(10);
            if ($wpdb->rows_affected < 1000) {
                break;
            }
        }
    }
}

WP_CLI::add_command( 'telegram', 'Telegram_Command' );
