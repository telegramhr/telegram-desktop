<?php

class Telegram_Banner_Widget extends WP_Widget {

	public function __construct() {
		parent::__construct( 'tg_banner_widget', 'Telegram: Banner widget',
			array(
			'description' => 'Banner Widget širine 300px za bannere 300x250, 300x600 i više',
		) );
	}

	public function widget( $args, $instance ) {
		if (get_query_var('audit')) {
			return false;
		}
		$id = $args['size'];
			switch ( $id ) {
				case 'telegram_desktop_billboard_v1':
				case 'telegram_desktop_billboard_v2':
						?>
						<div class="billboard">
							<?php $this->banner_slave( $id ); ?>

						</div>
					<?php
					break;
				case 'telegram_desktop_wallpaper_left':
						?>
						<div class="wallpaper wallpaper-left fixed">

							<?php $this->banner_slave( $id ) ?>

						</div>
					<?php
					break;
				case 'telegram_dekstop_wallpaper_right':
						?>
						<div class="wallpaper wallpaper-right fixed">

							<?php $this->banner_slave( $id ) ?>

						</div>
					<?php
					break;
                case 'telegram_desktop_intext_v1':
                case 'telegram_desktop_intext_v2':
                case 'telegram_desktop_intext_v3':
                case 'telegram_desktop_intext_v4':
	                ?>
	                <div class="banner-intext intext">
		                <?php $this->banner_slave( $id ) ?>
	                </div>
	                <?php
	                break;
				default:
					?>
					<div class="banner">
						<?php $this->banner_slave( $id); ?>
					</div>
					<?php
					break;
			}

	}

	function banner_slave($id) {
		?>
        <!-- /1092744/telegram -->
        <div id='<?php echo esc_attr($id) ?>'>
            <script>
                googletag.cmd.push(function() { googletag.display('<?php echo esc_attr($id) ?>'); });
            </script>
        </div>
	<?php
	}

	function update( $new_instance, $instance ) {
		$instance['size']  = strip_tags( $new_instance['size'] );


		return $instance;
	}

	function form( $instance ) {

		//ovo je samo primjer za formu unutar admina
		$size  = empty( $instance['size'] ) ? '' : esc_attr( $instance['size'] );

		?>
			<p><label for="<?php echo esc_attr( $this->get_field_id( 'size' ) ); ?>">Veličina</label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'size' ) ); ?>" class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'size' ) ); ?>" type="text" value="<?php echo esc_attr( $size ); ?>"></p>


		<?php
	}
}

register_widget( 'Telegram_Banner_Widget' );
