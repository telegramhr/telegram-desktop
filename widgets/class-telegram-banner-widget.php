<?php

class Telegram_Banner_Widget extends WP_Widget {

	public function __construct() {
		parent::__construct( 'tg_banner_widget', 'Telegram: Banner widget',
			array(
			'description' => 'Banner Widget širine 300px za bannere 300x250, 300x600 i više',
		) );
	}

	public function widget( $args, $instance ) {
		if (!get_option('tmg_ads_enable', 0)) {
		    return '';
        }
		if ( is_single() ) {
			$oglasi = get_post_meta( get_the_ID(), 'oglasi', true );
			if ($oglasi && is_array($oglasi) && in_array('all', $oglasi)) {
				return '';
			}
		}
		$id = $instance['size'];
			switch ( $id ) {
				case 'telegram_desktop_billboard_v1':
				case 'telegram_desktop_billboard_v2':
				case 'telegram_desktop_billboard_v3':
						?>
						<div class="billboard">
							<?php $this->banner_slave( $id, $instance ); ?>

						</div>
					<?php
					break;
				case 'telegram_desktop_wallpaper_left':
				    if (is_single() && get_post_type() === 'price'){
				        return '';
                    }
						?>
						<div class="wallpaper wallpaper-left fixed">

							<?php $this->banner_slave( $id, $instance ) ?>

						</div>
					<?php
					break;
				case 'telegram_dekstop_wallpaper_right':
					if (is_single() && get_post_type() === 'price'){
						return '';
					}
						?>
						<div class="wallpaper wallpaper-right fixed">

							<?php $this->banner_slave( $id, $instance ) ?>

						</div>
					<?php
					break;
                case 'telegram_desktop_intext_v1':
                case 'telegram_desktop_intext_v2':
                case 'telegram_desktop_intext_v3':
                case 'telegram_desktop_intext_v4':
                case 'telegram_desktop_intext_v5':
                case 'telegram_desktop_intext_v6':
                case 'telegram_desktop_intext_v7':
                case 'telegram_desktop_intext_v8':
	                ?>
                    <div class="full flex cxenseignore">
                        <div id="<?php echo $id ?>-info"
                          class="full center banner-separator relative mobile-only hide"
                        >
                          <div><span>Članak se nastavlja ispod oglasa</span></div>
                        </div>
                        <div class="full center">
		                <?php $this->banner_slave( $id, $instance ) ?>
		                </div>
	                </div>
	                <?php
	                break;
                case 'telegram_sticky':
                    ?>
                    <div class="stickyunit">
		                <?php $this->banner_slave($id, $instance) ?>
                    </div>
                    <?php
                    break;
				default:
					?>
					<div class="banner center">
						<?php $this->banner_slave( $id, $instance); ?>
					</div>
					<?php
					break;
			}

	}

	function banner_slave($id, $instance) {
		?>
        <!-- /1092744/telegram -->
        <div class="banner-slot" id='<?php echo esc_attr($id) ?>'>
            <script>
                window.googletag = window.googletag || {}
                window.googletag.cmd = window.googletag.cmd || []
                window.googletag.cmd.push(function() {
	                <?php
	                if (isset($instance['targeting']) && $instance['targeting']) {
	                ?>
                    const ds = window.googletag.defineSlot(
                        '<?php echo esc_attr($instance['targeting']['adUnitPath']) ?>',
		                <?php echo wp_json_encode($instance['targeting']['size']) ?>,
                        '<?php echo esc_attr($instance['targeting']['opt_div']) ?>'
                    );
                    ds.addService(googletag.pubads());
                    ds.setTargeting("upc", <?php echo esc_attr($instance['targeting']['up_b']) ?>);<?php
	                }
	                ?>
                });
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
