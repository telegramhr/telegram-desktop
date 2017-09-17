<?php

require_once('google/src/Google/autoload.php');

class Telegram_Google {
	private $client;
	private $service_token;

	public function __construct() {
		$this->load_client();
		//add_filter('cron_schedules', array($this, 'time'));
		add_action('init', array($this, 'schedule'));
		//add_action('init', array($this, 'register_options'));
		//add_action('init', array($this,'test'));
		//add_action('telegram_analytics', array($this, 'stuff_to_do'));
	}

	function register_options() {
		register_setting('stats', 'telegram_most_read');
		register_setting('stats', 'telegram_realtime');
		$cats = array(182,183,179,14,1402,184);
		foreach ($cats as $key) {
			register_setting( 'stats', 'telegram_most_read_'.$key );
			register_setting( 'stats', 'telegram_trending_'.$key );
			register_setting( 'stats', 'telegram_top_teme_'.$key );
		}
		register_setting('stats', 'telegram_top_teme');
	}

	function test() {
		if (get_current_user_id()==1) {
			$this->get_most_read(true);
			$this->get_top_themes();
			$this->get_realtime();
		}
	}

	public function time($schedules) {
		$schedules['half_hour'] = array(
			'interval' => 1800,
			'display' => __( 'Every half hour' )
		);
		return $schedules;
	}

	public function schedule() {
		if (isset($_GET['telegram_ga_cron']) && $_GET['telegram_ga_cron']=='update') {
			$this->stuff_to_do();
		}
		if (isset($_GET['telegram_ga_realtime']) && $_GET['telegram_ga_realtime']=='update') {
			$this->get_realtime();
		}
	}
	public function stuff_to_do() {
		$this->get_most_read();
		$this->get_top_themes();
		die();
	}

	private function load_client() {
		$client_id = '121826967879-10gcv6qlqatu2bemrt7b1qjo3k0trb11.apps.googleusercontent.com';
		$service_account_name = '121826967879-10gcv6qlqatu2bemrt7b1qjo3k0trb11@developer.gserviceaccount.com';
		$key_file_location = __DIR__ . '/Telegram-e1ec54b34287.p12';

		$this->client = new Google_Client();
		$this->client->setApplicationName("Telegram");

		if (isset($this->service_token)) {
			$this->client->setAccessToken($this->service_token);
		}
		$key = file_get_contents($key_file_location);
		$cred = new Google_Auth_AssertionCredentials(
			$service_account_name,
			array('https://www.googleapis.com/auth/analytics.readonly'),
			$key
		);
		$this->client->setAssertionCredentials($cred);
		if ($this->client->getAuth()->isAccessTokenExpired()) {
			$this->client->getAuth()->refreshTokenWithAssertion($cred);
		}
		$this->service_token = $this->client->getAccessToken();
	}

	private function get_post_by_slug($slug) {
		global $wpdb;
		$id = false;
		if ($slug) {
			$id = $wpdb->get_var( "SELECT ID FROM {$wpdb->posts} WHERE  post_name LIKE '{$slug}' LIMIT 1" );
		}
		return $id;
	}

	public function get_most_read($debug=false) {
		$service = new Google_Service_Analytics($this->client);
		$opts = array(
			'dimensions' => 'ga:pagePath',
			'sort' => '-ga:pageviews',
			'max-results' => 500
		);
		try {
			$data = $service->data_ga->get( 'ga:99153115', date( 'Y-m-d', strtotime( '-2 days' ) ), date( 'Y-m-d' ), 'ga:pageviews', $opts );
			if ( count($data->getRows()) > 0 ){

				foreach ($data->getRows() as $row) {

					$link = $row[0];
					if (substr($link, -1) == '/') {
						$link = substr($link,0,-1);
					}
					$slug = explode('/', $link);
					$slug = array_pop($slug);
					$id = $this->get_post_by_slug($slug);
					if ($id) {
						$post_time = get_post_time('U', false, $id);
						if ( $post_time > ( current_time('U') - 7 * 24 * 3600 ) ) {
							$out[] = intval($id);
						}
					}
				}
				if ($debug) {
					telegram_debug($out);
				}
				if (!empty($out)) {
					set_transient('telegram_most_read', $out);
					update_option('telegram_most_read', $out);
				}
				update_option('telegram_most_read_time', date('d-m-Y H:i'));
			}
		}
		catch (apiServiceException $e) {
			$error = $e->getMessage();
		}

	}

	public function get_realtime($debug=true) {
		$service = new Google_Service_Analytics($this->client);
		$opts = array(
			'dimensions' => 'rt:pagePath',
			'sort' => '-rt:pageViews',
			'max-results' => 100
		);
		try {
			$data = $service->data_realtime->get( 'ga:99153115', 'rt:pageViews', $opts );
			if ( count($data->getRows()) > 0 ){

				foreach ($data->getRows() as $row) {

					$link = $row[0];
					if (substr($link, -1) == '/') {
						$link = substr($link,0,-1);
					}
					$slug = explode('/', $link);
					$slug = array_pop($slug);
					$id = $this->get_post_by_slug($slug);
					if ($id) {
						$out[] = intval($id);
					}
				}
				if ($debug) {
					telegram_debug($out);
				}
				if (!empty($out)) {
					set_transient('telegram_realtime', $out);
					update_option('telegram_realtime', $out);
				}
				update_option('telegram_realtime_time', date('d-m-Y H:i'));
			}
		}
		catch (apiServiceException $e) {
			$error = $e->getMessage();
			telegram_debug($error);
		}
		//die();
	}

	function debug($val) {
		echo '<pre>';
		var_dump($val);
		echo '</pre>';
	}

	function get_top_themes() {
		$posts = get_option('telegram_most_read');
		$ot = array();
		$oc = array();
		foreach ($posts as $post_id) {
			$terms = wp_get_post_terms($post_id, array('post_tag', 'category'));
			foreach ($terms as $term) {
				if ($term->taxonomy == 'post_tag') {
					if ( isset( $ot[ $term->term_id ] ) ) {
						$ot[ $term->term_id ]++;
					} else {
						$ot[ $term->term_id ] = 1;
					}
				}
				else {
					$cat = $term;
					while ($cat->parent) {
						$cat = get_category($cat->parent);
					}
					$oc[$cat->term_id][] = $post_id;
				}
			}
		}
		foreach ($oc as $key=>$value) {
			set_transient('telegram_most_read_'.$key, $value);
			update_option('telegram_most_read_'.$key, $value);
			set_transient('telegram_trending_'.$key, $value);
			update_option('telegram_trending_'.$key, $value);
			$otc = array();
			foreach($value as $post_id) {
				$terms = wp_get_post_terms($post_id, array('post_tag'));
				foreach ($terms as $term) {
						if ( isset( $otc[ $term->term_id ] ) ) {
							$otc[ $term->term_id ]++;
						} else {
							$otc[ $term->term_id ] = 1;
						}

				}
			}
			arsort($otc);
			set_transient('telegram_top_teme_'.$key, array_keys($otc));
			update_option('telegram_top_teme_'.$key, array_keys($otc));
		}

		arsort($ot);
		set_transient('telegram_top_teme', array_keys($ot));
		update_option('telegram_top_teme', array_keys($ot));
		telegram_debug($ot);
		//die();
	}
}
new Telegram_Google();
