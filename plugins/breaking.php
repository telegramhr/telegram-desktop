<?php
function telegram_breaking() {
	if ( get_option( 'breaking_status' ) == 'off' ) {
		return;
	}
	$data = wp_cache_get('telegram_breaking_desktop', 'widgets');
	//$data = false;
	if (!$data) {
		ob_start();
		$title         = stripslashes( get_option( 'breaking_title' ) );
		$subtitle      = stripslashes( get_option( 'breaking_subtitle' ) );
		$image         = get_option( 'breaking_image' );
		$breaking_link = get_option( 'breaking_link' );
		?>

		<style type="text/css">

			.breaking-head {
				width: 100%;
				height: 700px;
				background: #000;
				padding-top: 76px;
				border-bottom: 5px solid #e31739;
				position: relative;
			}

			.breaking-head .container {
				height: 100%;
			}

			.breaking-text {
				position: absolute;
				width: 100%;
				bottom: 0;
				left: 0;
				z-index: 2;
				text-align: center;
				color: #fff;
			}

			.breaking-text a {
				color: #fff;
			}

			.breaking-text a:hover {
				color: #fff !important;
				text-decoration: underline;
			}

			.breaking-text .overtitle {
				background: #ed1c39;
				display: inline-block;
				height: 24px;
				padding: 0 15px;
				color: #fff;
				font-size: 18px;
				line-height: 28px;
				margin-bottom: 15px;
			}

			.breaking-title {
				font-size: 110px;
				line-height: 1.1em;
				text-transform: uppercase;
				position: absolute;
				top: 25px;
				width: 100%;
				z-index: 5;
				color: #fff;
				text-shadow: 0 0 5px rgba(1, 1, 1, 0.3);
				text-align: center;
			}

			.breaking-text .breaking-subtitle {
				font-size: 52px;
				line-height: 1.1em;
				padding: 0 25px;
				margin-bottom: 15px;
				text-shadow: 0 0 5px rgba(1, 1, 1, 0.3);
			}

			.breaking-head .shaddow {
				background-size: 100% 100%;
				position: absolute;
				z-index: 1;
				width: 100%;
				height: 100%;
				top: 0;
				display: none;
			}

			.breaking-head .featured-img {
				position: absolute;
				z-index: 0;
				width: 100%;
				height: 100%;
				top: 0;
				background-size: cover;
				background-position: center;
			}

			.mandates {
				margin: 25px auto -40px;
				text-transform: uppercase;
				color: #888;
				border-bottom: 1px solid #ddd;
				padding-bottom: 25px;
				position: relative;
			}

			.mandate {
				position: relative;
				width: 16.66%;
				float: left;
			}

			.mandate .num {
				width: 40px;
				height: 30px;
				text-align: center;
				line-height: 35px;
				background: #666;
				color: #fff;
				float: left;
				margin-right: 10px;
				font-size: 24px;
				text-transform: uppercase;
			}

			.mandate .party {
				text-transform: none;
				font-size: 24px;
				color: #111;
				line-height: 35px;
			}

			/*.coalition .party { margin-top: 16px; }*/

			.mandate small {
				color: #111;
			}

			.wallpaper {
				top: 75px;
				position: absolute;
			}

			.big-guns {
				position: relative;
			}

			.big-guns .the-must {
				width: 20px;
				height: 65px;
				text-align: center;
				background: #ccc;
				color: #999;
				line-height: 75px;
				font-size: 42px;
				position: relative;
				float: left;
				display: none;
			}

			.big-guns .the-must h2 {
				font-size: 12px;
				width: 140px;
				position: absolute;
				top: -15px;
				left: 50%;
				margin-left: -70px;
				line-height: 1em;
			}

			.big-guns .line {
				width: 2px;
				height: 65px;
				background: #aaa;
				position: absolute;
				top: 0;
				left: 50%;
				margin-left: -1px;
			}


			.big-guns {
				padding-bottom: 20px;
				z-index: 5;
				padding-bottom: 20px;
				height: 65px;
				background: #ccc;
			}

			.big-guns > div {
				width: 50%;
				float: left;
				color: #fff;
				height: 65px;
				position: absolute;
				top: 0;
				z-index: 2;
			}

			.big-guns .party-img {
				position: absolute;
				bottom: 0;
			}

			.big-guns .num {
				font-size: 42px;
				color: #fff;
				line-height: 55px;
			}

			.big-guns .text {
				text-transform: none;
				margin-top: -5px;
			}

			.big-guns .sdp {
				background: #c72727;
				padding: 10px 10px 10px 120px;
			}

			.big-guns .sdp .party-img {
				left: 10px;
			}

			.big-guns .sdp .num {
				float: right;
			}

			.big-guns .sdp .text {
				float: left;
			}

			.big-guns .hdz {
				background: #2b6294;
				padding: 10px 155px 10px 10px;
				right: 0;
			}

			.big-guns .hdz .party-img {
				right: 10px;
			}

			.big-guns .hdz .num {
				float: left;
				position:relative;
				z-index: 6;
			}

			.big-guns .hdz .text {
				float: right;
			}

			.mandates .small-title {
				text-align: center;
				color: #666;
				font-size: 12px;
				position: absolute;
				top: -18px;
				width: 100%;
			}
		</style>

		<div class="breaking-head">

			<div class="container">

				<a href="<?php echo esc_html( $breaking_link ); ?>">
					<div class="breaking-title">
						<?php echo esc_html( $title ); ?>
					</div>
				</a>

				<div class="breaking-text">
					<div class="overtitle">
						<?php echo esc_html( strtoupper( get_option( 'breaking_overtitle' ) ) ) ?>
					</div>

					<a href="<?php echo esc_html( $breaking_link ); ?>">
						<div class="breaking-subtitle">
							<?php echo esc_html( $subtitle ); ?>
						</div>
					</a>

					<?php the_widget( 'Telegram_Featured_Carousel_Widget' ); ?>

				</div>

			</div>

			<div class="featured-img"
			     style="background-image: url(<?php echo wp_get_attachment_image_src( $image, 'price' )[0]; ?>);"></div>
			<div class="shaddow"></div>

		</div>


		<div class="mandates">
			<div class="container cf">



				<h2 class="small-title">BROJ ELEKTORSKIH GLASOVA</h2>

				<?php $parties = get_option( 'breaking_parties' );
				function compare( $a, $b ) {
					return - strnatcmp( $a['value'], $b['value'] );
				}


				usort( $parties, 'compare' ); ?>


				<div class="big-guns cf">
					<div class="line"></div>
					<?php
					$lijevo = intval( get_option( 'breaking_lijevo_broj' ) );
					$desno  = intval( get_option( 'breaking_desno_broj' ) );
					$ukupno = $lijevo + $desno;
					?>
					<div class="left hlaf sdp"
					     style="width:<?php echo $lijevo / 538 * 100; ?>%;">
						<img class="party-img"
						     src="http://www.telegram.hr/wp-content/uploads/2016/11/trump-1.png"/>
						<div class="text" style="margin-left: 25px;">
							<h2><?php echo get_option( 'breaking_lijevo' ); ?></h2>
							<div class="num"><?php echo $lijevo ?></div>
						</div>

					</div>

					<div class="the-must"
					     style="width: <?php echo ( 538 - $ukupno ) / 538 * 100; ?>%;">
					</div>

					<div class="left hlaf hdz"
					     style="width:<?php echo $desno / 538 * 100; ?>%;">
						<img class="party-img"
						     src="http://www.telegram.hr/wp-content/uploads/2016/11/clinton.png"/>
						<div class="text">
							<h2><?php echo get_option( 'breaking_desno' ); ?></h2>
							<div class="num"><?php echo $desno; ?></div>
						</div>
					</div>
				</div>


				<?php
				foreach ( $parties as $party ) {
					?>
					<div
						class="mandate cf <?php echo $party['coalition'] ? 'coalition' : '' ?>">
						<div class="num"
						     style="background-color: <?php echo esc_attr( $party['color'] ); ?>;"><?php echo esc_html( $party['value'] ); ?></div>
						<div
							class="party"><?php echo esc_html( $party['label'] ); ?></div>
					</div>
					<?php
				}
				?>
			</div>
		</div>


		<script type="application/javascript">
			jQuery(document).ready(function () {
				jQuery(window).on('scroll', function () {
					var y2 = jQuery(this).scrollTop();
					if (y2 > 841) {
						jQuery('.wallpaper').css('position', 'fixed');
						jQuery('.wallpaper').css('margin-top', '-19px');
					}
					else {
						jQuery('.wallpaper').css('position', 'absolute');
						jQuery('.wallpaper').css('margin-top', '0px');
					}
				});
			});
		</script>

		<?php
		$data = ob_get_clean();
		wp_cache_set('telegram_breaking_desktop', $data, 'widgets', MINUTE_IN_SECONDS);
	}
	echo $data;
}

 // Mobile breaking
function telegram_breaking_mobile() {
	if ( get_option( 'breaking_status' ) == 'off' ) {
		return;
	}
	$data = wp_cache_get('telegram_breaking_mobile', 'widgets');
	//$data = false;
	if (!$data) {
		ob_start();
		$title         = stripslashes( get_option( 'breaking_title' ) );
		$subtitle      = stripslashes( get_option( 'breaking_subtitle' ) );
		$image         = get_option( 'breaking_image' );
		$breaking_link = get_option( 'breaking_link' );
		?>

		<style>
			.breaking-head {
				text-align: center;
				height: 300px;
				color: #fff;
				background-size: cover;
				background-position: center;
				position: relative;
			}

			.breaking-text {
				position: absolute;
				bottom: 10px;
				left: 0;
				width: 100%;
				padding: 10px;
			}

			.breaking-title {
				font-size: 36px;
				text-transform: uppercase;
				position: absolute;
				top: 20px;
				left: 0;
				width: 100%;
			}

			.breaking-subtitle {
				font-size: 32px;
				line-height: 1em;
				margin-bottom: 20px;
				text-shadow: 0 0 5px rgba(1, 1, 1, 0.3);
			}

			.breaking-subtitle a {
				color: #fff;
			}

			.breaking-text .button {
				padding: 8px 25px 5px;
			}

			.mandates {
				margin: 20px auto 5px;
				text-transform: uppercase;
				color: #888;
				border-bottom: 1px solid #ddd;
				padding-bottom: 5px;
				position: relative;
			}

			.mandates .small-title {
				position: absolute;
				top: -18px;
				width: 100%;
				font-size: 12px;;
			}

			.mandate {
				position: relative;
				width: 33.33%;
				float: left;
				margin-bottom: 10px;
			}

			.mandate .num {
				width: 35px;
				height: 25px;
				text-align: center;
				line-height: 30px;
				background: #666;
				color: #fff;
				float: left;
				margin-right: 5px;
				font-size: 18px;
				text-transform: uppercase;
			}

			.mandate .party {
				text-transform: none;
				font-size: 14px;
				color: #111;
				line-height: 30px;
			}

			.mandate small {
				color: #111;
				font-size: 12px;
			}

			.big-guns {
				position: relative;
				background: #ccc;
				height: 45px;
				width: 100%;
			}

			.big-guns .the-must {
				width: 70px;
				height: 45px;
				line-height: 55px;
				font-size: 36px;
				text-align: center;
				color: #848484;
				background: #ccc;
				display: none;
			}

			.big-guns .the-must h2 {
				position: absolute;
				top: -35px;
				font-size: 12px;
				width: 150px;
				left: 50%;
				margin-left: -75px;
			}

			.big-guns {
				padding-bottom: 17px;
			}

			.big-guns > div {
				width: 50%;
				float: left;
				position: absolute;
				top: 0;
				color: #fff;
				height: 45px;
			}

			.big-guns .line {
				width: 2px;
				height: 45px;
				background: #aaa;
				position: absolute;
				top: 0;
				left: 50%;
				margin-left: -1px;
				z-index: 5;
			}

			.big-guns .party-img {
				position: absolute;
				bottom: 0;
			}

			.big-guns .num {
				font-size: 24px;
				color: #fff;
				line-height: 30px;
			}

			.big-guns .text {
				text-transform: none;
				margin-top: -5px;
			}

			.big-guns .sdp {
				background: #c72727;
				padding: 10px;
			}

			.big-guns .sdp .party-img {
				left: 10px;
			}

			.big-guns .sdp .num {
				float: right;
			}

			.big-guns .sdp .text {
				float: left;
			}

			.big-guns .hdz {
				background: #2b6294;
				padding: 10px;
				right: 0;
			}

			.big-guns .hdz .party-img {
				right: 10px;
			}

			.big-guns .hdz .num {
				float: left;
			}

			.big-guns .hdz .text {
				float: right;
				text-align: right;
			}

		</style>


		<div class="breaking-head"
		     style="background-image: url(<?php echo wp_get_attachment_image_src( $image, 'g1' )[0]; ?>);">
			<div class="breaking-title">
				<?php echo esc_html( $title ); ?>
			</div>
			<div class="breaking-text">
				<div class="breaking-subtitle">
					<a href="<?php echo esc_html( $breaking_link ); ?>">
						<?php echo esc_html( $subtitle ); ?>
					</a>
				</div>
				<a href="<?php echo esc_html( $breaking_link ); ?>"
				   class="button">Vidi više</a>
			</div>
		</div>


		<div class="mandates cf">
			<div class="container cf">

				<?php
				$lijevo = intval( get_option( 'breaking_lijevo_broj' ) );
				$desno  = intval( get_option( 'breaking_desno_broj' ) );
				$ukupno = $lijevo + $desno;
				?>

				<div class="big-guns cf">
					<div class="line"></div>
					<div class="left hlaf sdp"
					     style="width:<?php echo $lijevo / 538 * 100; ?>%;">
						<div class="text">
							<h2>TRUMP</h2>
							<div
								class="num"><?php echo get_option( 'breaking_lijevo_broj' ); ?></div>
						</div>
					</div>

					<div class="the-must"
					     style="width: <?php echo ( 538 - $ukupno ) / 538 * 100; ?>%;">
						<h2>Broj elektorskih glasova</h2>
					</div>

					<div class="left hlaf hdz"
					     style="width:<?php echo $desno / 538 * 100; ?>%;">
						<div class="text">
							<h2>CLINTON</h2>
							<div
								class="num"><?php echo get_option( 'breaking_desno_broj' ); ?></div>
						</div>
					</div>
				</div>

				<?php $parties = get_option( 'breaking_parties' );
				function compare( $a, $b ) {
					return - strnatcmp( $a['value'], $b['value'] );
				}

				usort( $parties, 'compare' );
				foreach ( $parties as $party ) {
					?>
					<div
						class="mandate cf <?php echo $party['coalition'] ? 'coalition' : '' ?>">
						<div class="num"
						     style="background-color: <?php echo esc_attr( $party['color'] ); ?>;"><?php echo esc_html( $party['value'] ); ?></div>
						<div
							class="party"><?php echo esc_html( $party['label'] ); ?></div>
					</div>
					<?php
				}
				?>
			</div>
		</div>

		<?php
		$data = ob_get_clean();
		wp_cache_set('telegram_breaking_mobile', $data, 'widgets', MINUTE_IN_SECONDS);
	}
	echo $data;
}