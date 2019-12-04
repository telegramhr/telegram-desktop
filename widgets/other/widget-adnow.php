<?php

class Telegram_Adnow_Widget extends WP_Widget {

	public function __construct() {
		parent::__construct( 'telegram_adnow_widget', 'Adnow widget',
			array(
			'description' => 'Midas Widget',
		) );
	}

	public function widget( $args, $instance ) {
		$oglasi = get_post_meta( get_the_ID(), 'oglasi', true );
		if ($oglasi && is_array($oglasi) && in_array('all', $oglasi)) {
			return '';
		}
	    ?>
        <div class="container widget-midas">
        <div class="tg-widget-head big-title" style="margin-bottom: 20px;">
           OGLASI
        </div>
		<div id="SC_TBlock_707823" class="SC_TBlock">učitavanje...</div>

		<script type="text/javascript">
            (sc_adv_out = window.sc_adv_out || []).push({
                id : "707823",
                domain : "n.domnovrek.com"
            });
		</script>
		<script type="text/javascript" src="//st-n.domnovrek.com/js/a.js"></script>
        </div>
        <?php

	}

	public function update($new_instance, $instance) {
       // $instance['id']  = intval( $new_instance['id'] );
       // $instance['script']  = strip_tags( $new_instance['script'] );
        return $instance;
    }

    public function form($instance) {
		return '';
        $id  = empty( $instance['id'] ) ? '' : esc_attr( $instance['id'] );
        $script = empty( $instance['script'] ) ? '' : esc_attr( $instance['script'] );
        ?>
        <p><label for="<?php echo esc_attr( $this->get_field_id( 'id' ) ); ?>">ID:</label>
            <input id="<?php echo esc_attr( $this->get_field_id( 'id' ) ); ?>" class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'id' ) ); ?>" type="text" value="<?php echo esc_attr( $id ); ?>"></p>
        <p><label for="<?php echo esc_attr( $this->get_field_id( 'script' ) ); ?>">Script:</label>
            <input id="<?php echo esc_attr( $this->get_field_id( 'script' ) ); ?>" class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'script' ) ); ?>" type="text" value="<?php echo esc_attr( $script ); ?>"></p>
        <?php
    }
}

register_widget( 'Telegram_Adnow_Widget' );