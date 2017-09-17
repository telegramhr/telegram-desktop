<?php

class Telegram_Importer {
	private $access_key = "vjAH5wZKTthQ#)jSZaUu#QiD@GwsOzO9ClAo^)I^gYZ6Re3FsCaIfSg5t3(#!Ck8";
	public function __construct() {
		add_action('admin_menu', array($this, 'menu'));
	}

	public function menu() {
		add_posts_page('Import', 'Import', 'edit_posts', 'tg_import', array($this, 'import'));
	}

	public function import() {
		echo '<div class="wrap">';
		if (isset($_POST['net_id']) && $_POST['net_id']) {
			$id = $this->nethr_import( intval($_POST['net_id']));
			if ($id) {
				?>
				<div class="notice notice-success">
					<p>
					<a href="<?php echo site_url( 'wp-admin/post.php?post=' . $id . '&action=edit' ) ?>">Pregledaj
						objavu</a>
					</p>
				</div>
				<?php
			}
			else {
				?><div class="notice notice-error"><p>Neuspjelo dodavanje</p></div><?php
			}
		}
		?><form method="post">
			<label>
				Net.hr post ID:
			</label>
			<input type="text" size="5" name="net_id">
			<br>
			<input type="submit" value="Uvezi">
		</form>
		</div><?php
	}

	private function auth() {
		$code = 'gdm9ufsIGQ';
		$token = [
			"access_token" => "vjAH5wZKTthQ#)jSZaUu#QiD@GwsOzO9ClAo^)I^gYZ6Re3FsCaIfSg5t3(#!Ck8",
    "token_type" => "bearer",
    "blog_id" => "90557224",
    "blog_url" =>  "http://adriaticmedianethr.wordpress.com",
    "scope" => ""
];

	}

	private function nethr_import($post_id) {
		$r = wp_remote_get('https://public-api.wordpress.com/rest/v1.1/sites/net.hr/posts/'.$post_id.'?context=edit', array(
			'headers' => array( 'Authorization' => ' Bearer ' . $this->access_key )
		));
		$body = json_decode( $r['body'], true );
		$content = $body['content'];

		$postarr = array(
			'post_title' => $body['title'],
			'post_content' => $content,
			'post_date' => $body['date']
		);
		$id = wp_insert_post($postarr);
		$tags = [];
		foreach ($body['tags'] as $one) {
			$tags[] = $one['name'];
		}
		wp_set_post_terms($id, $tags, 'post_tag');
		$thumb_url = $body['post_thumbnail']['guid'];
		$thumb_id = $this->download_image($thumb_url, $id);
		set_post_thumbnail($id, $thumb_id);
		foreach ($body['metadata'] as $one) {
			switch($one['key']) {
				case 'extra_titles':
					update_post_meta($id, 'short_title', $one['value']['over_title']);
					break;
				case '_thumbnail_id':
					$thumb = $one['value'];
			}
		}
		if ($thumb) {
			$r    = wp_remote_get( 'https://public-api.wordpress.com/rest/v1.1/sites/net.hr/posts/' . $thumb );
			$body = json_decode( $r['body'], true );
			foreach ($body['metadata'] as $meta) {
				if ($meta['key'] == 'photographer_name') {
					update_post_meta($thumb_id, 'fotograf', $meta['value']);
				}
			}
		}
		return $id;
		//wp_redirect(site_url('wp-admin/post.php?post='.$id.'&action=edit'));
	}

	private function download_image($url, $post_id, $dry_mode = true) {
		// build up array like PHP file upload
		$file = array();
		$urls = explode('/', $url);
		$file['name'] = array_pop($urls);
		$file['tmp_name'] = download_url($url);
		if (is_wp_error($file['tmp_name'])){
			return false;
		}
		if (is_wp_error($file['tmp_name'])) {
			@unlink($file['tmp_name']);
		}

			$attachmentId = media_handle_sideload( $file, $post_id );
			// create the thumbnails
			$attach_data = wp_generate_attachment_metadata( $attachmentId, get_attached_file( $attachmentId ) );

			wp_update_attachment_metadata( $attachmentId, $attach_data );
			return $attachmentId;

	}

}

new Telegram_Importer();