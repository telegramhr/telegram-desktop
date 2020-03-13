<?php

class Telegram_Corona_Mobile extends WP_Widget {

    public function __construct() {
        parent::__construct( 'tg_covid_19_mobile', 'Telegram: Corona mobile',
            array(
                'description' => 'Corona',
            ) );
    }
    public function corona_print ($number, $yesterday) {
        if ($number > $yesterday) {
            $difference = $number-$yesterday;
            return number_format($number, 0, '', '.').' <span class="corona-red">(+'.number_format($difference, 0, '', '.').')</span>';
        }
        else if ($number < $yesterday) {
            $difference = $yesterday-$number;
            return number_format($number, 0, '', '.').' <span class="corona-green">(-'.number_format($difference, 0, '', '.').')</span>';
        }
        else {
            return number_format($number, 0, '', '.').' <span class="corona-green">(-)</span>';
        }
    }

    public function widget( $args, $instance ) {
        $total = get_option('tmg_covid_total');
        $croatia  = get_option('tmg_covid_croatia');
        $days  = get_option('tmg_covid_days');
        $total_yesterday = get_option('tmg_covid_total_yesterday', $total);
	    $updated = strtotime($total['created']);
	    $mtime = get_the_modified_time('U', 780032);
	    if ($mtime > $updated) {
	        $updated = $mtime;
        }
	    $current = time();
	    $time = floor(($current-$updated)/60);
    ?>
    <div class="corona-widget">
        <div class="corona-widget-element">
            <div class="corona-widget-title">Koronavirus</div>
            <div class="corona-widget-subtitle" style="position: absolute; top: 6px; right: 0px;">Ažurirano prije <?php echo $time  ?> minut<?php echo ($time%10<5 && $time%10!=0)?'e':'a' ?></div>
        </div>
        <div class="corona-widget-element">
            <!--<div class="corona-widget-head">Uživo na Telegramu</div>-->
            <div class="corona-widget-head">Slučajevi</div>
            <div class="corona-widget-title"><?php echo $this->corona_print ($total["confirmed"], $total_yesterday["confirmed"]); ?></div>
            <div class="corona-widget-subtitle">U Hrvatskoj <?php echo number_format($croatia['confirmed'], 0, '', '.'); ?> slučaj<?php echo ($croatia['confirmed']%10===1)?'':'a' ?></div>
        </div>
        <div class="corona-widget-element">
            <div class="corona-widget-head">Oporavci</div>
            <div class="corona-widget-title no-u"><?php echo $this->corona_print ($total["recovered"], $total_yesterday["recovered"]); ?></div>
            <div class="corona-widget-subtitle">U Hrvatskoj <?php echo number_format($croatia['recovered'], 0, '', '.'); ?> oporav<?php echo ($croatia['recovered']%10===1)?'ak':'ka' ?></div>
        </div>
        <div class="corona-widget-element">
            <div class="corona-widget-head">Preminulih</div>
            <div class="corona-widget-title"><?php echo $this->corona_print ($total["deaths"], $total_yesterday["deaths"]); ?></div>
            <div class="corona-widget-subtitle">U Hrvatskoj <?php echo number_format($croatia['deaths'], 0, '', '.'); ?> smrt<?php echo ($croatia['deaths']%10===1)?'':'i' ?></div>
        </div>
        <div class="corona-widget-element">
            <div class="corona-widget-head">
                <?php 
                    echo date("d.m",strtotime('-10 days'));
                ?>.
                <div style="float: right;"><?php echo date("d.m") ?>.</div>
            </div>
            <div class="corona-graph">
                <?php 
                    $days = array_reverse($days);
                    $peak = max($days);
                    foreach ($days as $key => $value) {
                        $percentage = round($value/$peak, 2)*100;
                        echo '<div class="corona-graph-column">
                                <div class="corona-graph-column-color" style="height: '.$percentage.'%;"><div class="corona-graph-column-value">'.$value.'</div></div>
                            </div>';
                    }
                ?>
            </div>
        </div>
    </div>
    <style>
        .corona-widget {
            width: 100%;
            padding: 15px;
            position: relative;
            z-index: 10;
            display: flex;
            flex-wrap: wrap;
            color: white;
            align-items: stretch;
            background-image: linear-gradient(to top, #111417, #232a31);
        }
        .corona-red {
            color: #e31739;
        }
        .corona-green {
            color: #17e35f;
        }
        .no-u .corona-red {
            color: #17e35f;
        }
        .no-u .corona-green {
            color: #e31739;
        }
        .corona-widget-element {
            width: 49.99%;
            padding: 15px 0px;
            position: relative;
            font-family: "PT Sans", "Arial", "Helvetica", sans-serif;
        }
        .corona-widget-element:first-child {
            width: 100%;
            padding: 0px;
        }
        .corona-widget-head {
            font-size: 12px;
            width: 100%;
            opacity: .7;
            text-transform: uppercase;
            padding-top: 15px;
        }
        .corona-widget-head:first-child {
            padding-top: 0px;
        }
        .corona-widget-title {
            text-transform: uppercase;
            padding-top: 4px;
            padding-bottom: 2px;
            font-size: 20px;
            font-family: "Fjalla One CRO", Impact, sans-serif;
        }
        .corona-widget-subtitle {
            font-size: 12px;
        }
        .corona-graph {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            padding-top: 16px;
            height: 46px;
        }
        .corona-graph-column div {
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -ms-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }
        .corona-graph-column {
            width: 10%;
            display: flex;
            padding: 0px 4px;
            align-items: flex-end;
            justify-items: flex-end;
        }
        .corona-graph-column-color {
            position: relative;
            opacity: .7;
            background-color: #e31739;
            width: 100%;
        }
        .corona-graph-column:hover div {
            opacity: 1;
        }
        .corona-graph-column-value {
            position: absolute;
            top: -16px;
            width: 100%;
            opacity: 0;
            text-align: center;
            font-family: "PT Sans", "Arial", "Helvetica", sans-serif;
            font-size: 12px;
        }
    </style>
    <?php
}

    function update( $new_instance, $instance ) {
        $instance['num']  = strip_tags( $new_instance['num'] );
        return $instance;
    }

    function form( $instance ) {
        //ovo je samo primjer za formu unutar admina
        $num  = empty( $instance['num'] ) ? '' : esc_attr( $instance['num'] );
        ?>
        <p><label for="<?php echo esc_attr( $this->get_field_id( 'num' ) ); ?>"><?php _e( 'Broj članaka:', 'twentyfourteen' ); ?></label>
            <input id="<?php echo esc_attr( $this->get_field_id( 'num' ) ); ?>" class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'num' ) ); ?>" type="text" value="<?php echo esc_attr( $num ); ?>"></p>

        <?php
    }
}
register_widget( 'Telegram_Corona_Mobile' );