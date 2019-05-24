<?php

class Telegram_Midas_Widget extends WP_Widget {

	public function __construct() {
		parent::__construct( 'telegram_midas_widget', 'Midas widget',
			array(
			'description' => 'Midas Widget',
		) );
	}

	public function widget( $args, $instance ) {
	    ?>
        <style>
            /* Desktop */
            #midasWidget__657 {
                border-top: 1px solid #ddd;
            }

            #midasWidget__657 .tg-widget-body {
                margin: 0 -10px;
            }

            /* Mobile */
            #midasWidget__658 .midas-caption {
                font-weight: 700;
                color: #301860;
                font-size: 16px;
                text-transform: uppercase;
                border-bottom: 3px solid #301860;
                padding: 0 0 5px;
                letter-spacing: .1em;
                text-align: center;
                width: 100%;
                margin-bottom: 10px;
            }

            #midasWidget__658 .midas-title {
                font-size: 24px !important;
                line-height: 1.3em !important;
                color: #000;
                margin-bottom: 10px;
                font-family: fjalla one cro,Impact,sans-serif !important;
                padding-top: 15px;
                padding-bottom: 14px;
                border-bottom: 1px solid #ddd;
            }
        </style>
        <?php if (!jetpack_is_mobile()) { ?>
        <div class="container widget-midas" style="margin-top: 50px;">
        <div class="tg-widget-head big-title">
           Više s weba
        </div>
        <?php } ?>
        <div id="midasWidget__<?php echo intval($instance['id']) ?>"></div><?php
        if ($instance['script']) {
            ?>
            <script async src="https://cdn.midas-network.com/Widget/IndexAsync/2?portalWidgetId=<?php echo esc_attr($instance['script']) ?>"
                    type="text/javascript"></script>
            </div> <!-- end midas -->
            <?php
        }

	}

	public function update($new_instance, $instance) {
        $instance['id']  = intval( $new_instance['id'] );
        $instance['script']  = strip_tags( $new_instance['script'] );
        return $instance;
    }

    public function form($instance) {
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

register_widget( 'Telegram_Midas_Widget' );