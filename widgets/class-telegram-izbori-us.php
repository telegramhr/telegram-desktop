<?php

class Telegram_Izbori_Us extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            'tg_izbori_us',
            'Telegram: Izbori USA',
            array(
                'description' => 'Najpopularniji članci telegramovih autora',
            )
        );
    }

    public function widget($args, $instance)
    {
        $results = array(
            "DC" => array(
                "votes" => 3,
                "name" => "District of Columbia",
                "forecast_d" => 90.1,
                "forecast_r" => 6.7
            ),
            "VT" => array(
                "votes" => 3,
                "name" => 'Vermont',
                "forecast_d" => 66.7,
                "forecast_r" => 30.8
            ),
            "MA" => array(
                "votes" => 11,
                "name" => 'Massachusetts',
                "forecast_d" => 66.9,
                "forecast_r" => 31.6
            ),
            "HI" => array(
                "votes" => 4,
                "name" => 'Hawaii',
                "forecast_d" => 66.4,
                "forecast_r" => 32.1
            ),
            "NY" => array(
                "votes" => 29,
                "name" => 'New York',
                "forecast_d" => 64.4,
                "forecast_r" => 34.6
            ),
            "MD" => array(
                "votes" => 10,
                "name" => 'Maryland',
                "forecast_d" => 64.1,
                "forecast_r" => 34.5
            ),
            "CA" => array(
                "votes" => 55,
                "name" => 'California',
                "forecast_d" => 66.4,
                "forecast_r" => 34.51
            ),
            "RI" => array(
                "votes" => 4,
                "name" => 'Rhode Island',
                "forecast_d" => 63.3,
                "forecast_r" => 35.4
            ),
            "DE" => array(
                "votes" => 3,
                "name" => 'Delaware',
                "forecast_d" => 62.2,
                "forecast_r" => 36.6
            ),
            "WA" => array(
                "votes" => 12,
                "name" => 'Washington',
                "forecast_d" => 60.5,
                "forecast_r" => 37.4
            ),
            "CT" => array(
                "votes" => 7,
                "name" => 'Connecticut',
                "forecast_d" => 60.9,
                "forecast_r" => 38.3
            ),
            "NJ" => array(
                "votes" => 14,
                "name" => 'New Jersey',
                "forecast_d" => 60.3,
                "forecast_r" => 39
            ),
            "OR" => array(
                "votes" => 7,
                "name" => 'Oregon',
                "forecast_d" => 58.1,
                "forecast_r" => 39.8
            ),
            "IL" => array(
                "votes" => 20,
                "name" => 'Illinois',
                "forecast_d" => 57.7,
                "forecast_r" => 40.9
            ),
            "NM" => array(
                "votes" => 5,
                "name" => 'New Mexico',
                "forecast_d" => 42.8,
                "forecast_r" => 55.3
            ),
            "CO" => array(
                "votes" => 9,
                "name" => 'Colorado',
                "forecast_d" => 55.3,
                "forecast_r" => 42.9
            ),
            "VA" => array(
                "votes" => 13,
                "name" => 'Virginia',
                "forecast_d" => 55.7,
                "forecast_r" => 43.3
            ),
            "ME" => array(
                "votes" => 4,
                "name" => 'Maine',
                "forecast_d" => 55.2,
                "forecast_r" => 43.4
            ),
            "NH" => array(
                "votes" => 4,
                "name" => 'New Hampshire',
                "forecast_d" => 54.8,
                "forecast_r" => 44.2
            ),
            "MI" => array(
                "votes" => 16,
                "name" => 'Michigan',
                "forecast_d" => 53.8,
                "forecast_r" => 45.1
            ),
            "WI" => array(
                "votes" => 10,
                "name" => 'Wisconsin',
                "forecast_d" => 53.6,
                "forecast_r" => 45.5
            ),
            "MN" => array(
                "votes" => 10,
                "name" => 'Minnesota',
                "forecast_d" => 53.3,
                "forecast_r" => 45.2
            ),
            "NV" => array(
                "votes" => 6,
                "name" => 'Nevada',
                "forecast_d" => 52.8,
                "forecast_r" => 45.7
            ),
            "PA" => array(
                "votes" => 20,
                "name" => 'Pennsylvania',
                "forecast_d" => 52.2,
                "forecast_r" => 47.1
            ),
            "AZ" => array(
                "votes" => 11,
                "name" => 'Arizona',
                "forecast_d" => 50.7,
                "forecast_r" => 48
            ),
            "FL" => array(
                "votes" => 29,
                "name" => 'Florida',
                "forecast_d" => 50.6,
                "forecast_r" => 48.7
            ),
            "NC" => array(
                "votes" => 15,
                "name" => 'Sjeverna Carolina',
                "forecast_d" => 50.5,
                "forecast_r" => 48.8
            ),
            "GA" => array(
                "votes" => 16,
                "name" => 'Georgia',
                "forecast_d" => 50.1,
                "forecast_r" => 49.7
            ),
            "IA" => array(
                "votes" => 6,
                "name" => 'Iowa',
                "forecast_d" => 49,
                "forecast_r" => 49.7
            ),
            "OH" => array(
                "votes" => 18,
                "name" => 'Ohio',
                "forecast_d" => 49.2,
                "forecast_r" => 49.8
            ),
            "TX" => array(
                "votes" => 38,
                "name" => 'Texas',
                "forecast_d" => 48.5,
                "forecast_r" => 50.6
            ),
            "MT" => array(
                "votes" => 3,
                "name" => 'Montana',
                "forecast_d" => 45.3,
                "forecast_r" => 52.7
            ),
            "SC" => array(
                "votes" => 9,
                "name" => 'Južna Carolina',
                "forecast_d" => 45.4,
                "forecast_r" => 53.7
            ),
            "AK" => array(
                "votes" => 3,
                "name" => 'Alaska',
                "forecast_d" => 44.7,
                "forecast_r" => 53.1
            ),
            "MO" => array(
                "votes" => 10,
                "name" => 'Missouri',
                "forecast_d" => 44.9,
                "forecast_r" => 53.8
            ),
            "IN" => array(
                "votes" => 11,
                "name" => 'Indiana',
                "forecast_d" => 44.5,
                "forecast_r" => 54.1
            ),
            "KS" => array(
                "votes" => 6,
                "name" => 'Kansas',
                "forecast_d" => 43.8,
                "forecast_r" => 54.5
            ),
            "NE" => array(
                "votes" => 5,
                "name" => 'Nebraska',
                "forecast_d" => 43.2,
                "forecast_r" => 55.1
            ),
            "MS" => array(
                "votes" => 6,
                "name" => 'Mississippi',
                "forecast_d" => 42.5,
                "forecast_r" => 56.7
            ),
            "UT" => array(
                "votes" => 6,
                "name" => 'Utah',
                "forecast_d" => 41.2,
                "forecast_r" => 55.9
            ),
            "SD" => array(
                "votes" => 3,
                "name" => 'Južna Dakota',
                "forecast_d" => 41.3,
                "forecast_r" => 57.2
            ),
            "TN" => array(
                "votes" => 11,
                "name" => 'Tennessee',
                "forecast_d" => 41.3,
                "forecast_r" => 57.7
            ),
            "KY" => array(
                "votes" => 8,
                "name" => 'Kentucky',
                "forecast_d" => 40.5,
                "forecast_r" => 58.4
            ),
            "LA" => array(
                "votes" => 8,
                "name" => 'Lousiana',
                "forecast_d" => 40.6,
                "forecast_r" => 58.5
            ),
            "AL" => array(
                "votes" => 9,
                "name" => 'Alabama',
                "forecast_d" => 39.7,
                "forecast_r" => 59.5
            ),
            "ND" => array(
                "votes" => 3,
                "name" => 'Sjeverna Dakota',
                "forecast_d" => 38,
                "forecast_r" => 59.5
            ),
            "ID" => array(
                "votes" => 4,
                "name" => 'Idaho',
                "forecast_d" => 37.3,
                "forecast_r" => 59.9
            ),
            "AR" => array(
                "votes" => 6,
                "name" => 'Arkansas',
                "forecast_d" => 37.1,
                "forecast_r" => 61.4
            ),
            "OK" => array(
                "votes" => 7,
                "name" => 'Oklahoma',
                "forecast_d" => 37.2,
                "forecast_r" => 61.7
            ),
            "WV" => array(
                "votes" => 5,
                "name" => 'Zapadna Virginia',
                "forecast_d" => 35.1,
                "forecast_r" => 63.1
            ),
            "WY" => array(
                "votes" => 3,
                "name" => 'Wyoming',
                "forecast_d" => 29.2,
                "forecast_r" => 67.8
            ),
        );
        $results_live = get_option('us_elections');
        //$results["age"] = rand(1, 24);
        $total_d = 0;
        $total_r = 0;
        foreach ($results as $key => $value) {
            $results[$key]["counted"] = 0;
            $results[$key]["vote_d"] = $results_live[$key]["biden"]["votePercent"];
            if ($results_live[$key]["biden"]["totalDelegates"]) {
                $total_d = $total_d+$results_live[$key]["biden"]["totalDelegates"];
            }
            if ($results_live[$key]["trump"]["totalDelegates"]) {
                $total_d = $total_r+$results_live[$key]["biden"]["totalDelegates"];
            }
            $results[$key]["vote_r"] = 0;
            $results[$key]["counted"] = $results_live[$key]["percentReporting"];
        }
        $now=time();
        $results["age"] = round(($now-$results_live["lastUpdate"])/60);
?>
        <div class="izbori-widget-parent">
            <div class="izbori-widget">
                <div class="nadnaslov">Uživo</div>
                <div class="naslov">Rezultati izbora u Americi</div>
                <div class="podnaslov">Ažurirano prije <?php echo $results["age"]; ?> minuta.</div>
                <div class="full flex candidate-line relative">
                    <div class="half flex"><img src="https://telegram.hr/wp-content/themes/telegram2-desktop/assets/temp/widget_biden.png" alt="Joe Biden viče">
                        <div><span class="desktop-only">Biden</span> <?php echo $total_d; ?></div>
                    </div>
                    <div class="half flex">
                        <div><?php echo $total_r; ?> <span class="desktop-only">Trump</span></div><img src="https://telegram.hr/wp-content/themes/telegram2-desktop/assets/temp/widget_trump.png" alt="Donald Trump viče">
                    </div>
                </div>
                <div class="full flex result-line">
                    <div class="indicator"></div>
                    <?php
                    foreach ($results as $key => $value) {
                            $flipped = "";
                            $width = round($value["votes"]/538, 4)*100;
                            $order=500;
                            if ($value["vote_r"]) {
                                $order = round($value["vote_r"], 1)*10;
                            }
                            else if ($value["forecast_d"] > 53) {
                                $order=499;
                            }
                            else if ($value["forecast_r"] > 53) {
                                $order=501;
                            }
                            if ($value["vote_d"] > $value["vote_r"]) {
                                $class="democrat";
                                $order = $order-1;
                            }
                            else if ($value["vote_d"] < $value["vote_r"]) {
                                $class="republican";
                                $order = $order+1;
                            }
                            else {
                                if ($value["forecast_d"] > 53) {
                                    $class="lean-democrat";
                                }
                                else if ($value["forecast_r"] > 53) {
                                    $class="lean-republican";
                                }
                                else {
                                    $class="swing";
                                }
                            }
                            if ($value["forecast_d"] > 53) {
                                if ($value["vote_d"] < $value["vote_r"]) {
                                    $flipped = "flipped";
                                }
                            }
                            else if ($value["forecast_r"] > 53) {
                                if ($value["vote_d"] > $value["vote_r"]) {
                                    $flipped = "flipped";
                                }
                            }
                        ?>
                        <div class="result-segment flex <?php echo $key.' '.$class.' '.$flipped; ?>" style="width: <?php echo $width; ?>%; order: <?php echo $order; ?>;" data-dem="<?php echo $value["vote_d"]; ?>" data-rep="<?php echo $value["vote_r"]; ?>" data-name="<?php echo $value["name"]; ?>" data-votes="<?php echo $value["votes"]; ?>" data-counted="<?php echo $value["counted"]; ?>" data-shorthand="<?php echo $key; ?>"></div>
                    <?php
                    }
                    ?>
                </div>
                <div class="full result-indicator-text">270 do pobjede</div>
                <div class="full flex swing-states">
                    <div class="two-thirds flex-responsive">
                        <?php $random_key = array_rand($results); ?>
                        <h2><?php echo $results[$random_key]["name"]; ?></h2>
                        <div class="full flex swing-state-info">
                            <div class="flex electoral-votes">
                                <b><?php echo $results["PA"]["votes"]; ?></b> elektorskih glasova
                            </div>
                            <div class="flex biden-votes">
                                <b><?php echo $results["PA"]["vote_d"]; ?>%</b> glasova za Bidena
                            </div>
                            <div class="flex trump-votes">
                                <b><?php echo $results["PA"]["vote_r"]; ?>%</b> glasova za Trumpa
                            </div>
                            <div class="flex counted-votes">
                                <b><?php echo $results["PA"]["counted"]; ?>%</b> prebrojanih glasova
                            </div>
                        </div>
                        <div class="full legend-line animate flex">
                            <div class="democrat"></div>Biden osvaja<div class="lean-democrat"></div>ankete za Bidena<div class="democrat flipped"></div>Biden osvaja suprotno anketama
                        </div>
                        <div class="full legend-line animate flex">
                            <div class="republican"></div>Trump osvaja<div class="lean-republican"></div>ankete za Trumpa<div class="republican flipped"></div>Trump osvaja suprotno anketama
                        </div>
                    </div>
                    <div class="third flex-responsive">
                        <?php echo file_get_contents("https://telegram.hr/wp-content/themes/telegram2-desktop/assets/temp/karta_usa.svg"); ?>
                    </div>
                </div>
            </div>
        </div>
        <script>
                window.onload = function() {
                    $( ".result-segment").click(function() {
                        $('.result-segment-active').toggleClass('result-segment-active');
                        $('.map-area-active').toggleClass('map-area-active');
                        $(this).toggleClass('result-segment-active');
                        var votes = $(this).attr('data-votes');
                        var dem = $(this).attr('data-dem');
                        var rep = $(this).attr('data-rep');
                        var counted = $(this).attr('data-counted');
                        var name = $(this).attr('data-name');
                        var shorthand = $(this).attr('data-shorthand')
                        $('.map-usa #'+shorthand).toggleClass('map-area-active');
                        $('.swing-states h2').html(name);
                        $('.swing-states .electoral-votes b').html(votes);
                        $('.swing-states .biden-votes b').html(dem+'%');
                        $('.swing-states .trump-votes b').html(rep+'%');
                        $('.swing-states .counted-votes b').html(counted+'%');
                    });
                    $(".map-usa path").click(function(){
                        $('.result-segment-active').toggleClass('result-segment-active');
                        $('.map-area-active').toggleClass('map-area-active');
                        $(this).toggleClass('map-area-active');
                        var state_id=$(this).attr('id');
                        $('.result-line .'+state_id).toggleClass('result-segment-active');
                        var votes = $('.result-line .'+state_id).attr('data-votes');
                        var dem = $('.result-line .'+state_id).attr('data-dem');
                        var rep = $('.result-line .'+state_id).attr('data-rep');
                        var counted = $('.result-line .'+state_id).attr('data-counted');
                        var name = $('.result-line .'+state_id).attr('data-name');
                        $('.swing-states h2').html(name);
                        $('.swing-states .electoral-votes b').html(votes);
                        $('.swing-states .biden-votes b').html(dem+'%');
                        $('.swing-states .trump-votes b').html(rep+'%');
                        $('.swing-states .counted-votes b').html(counted+'%');
                    })
                };
        </script>
        <style>
            .izbori-widget {
                font-family: fjalla one cro, Impact, sans-serif;
                z-index: 10;
                color: black;
                position: relative;
                padding-top: 32px;
                padding-bottom: 16px;
                margin-bottom: 16px;
                display: block;
            }

            .home-top-container .izbori-widget-parent {
                width: 1230px;
                padding: 0 15px;
                margin: 0 auto;
                position: relative;
            }

            .home-top-container .izbori-widget {
                color: white;
                border-bottom: 2px solid white;
            }

            .izbori-widget .nadnaslov {
                width: 100px;
                height: 30px;
                font-size: 18px;
                color: white;
                letter-spacing: 2px;
                background-color: #e5143e;
                text-align: center;
                margin: 0 auto;
                text-transform: uppercase;
                padding-top: 5px;
            }

            .izbori-widget .naslov {
                width: 100%;
                font-size: 48px;
                text-align: center;
                margin: 8px;
            }

            .izbori-widget .podnaslov {
                font-family: pt sans, arial, helvetica, sans-serif;
                font-size: 14px;
                opacity: 0.5;
                width: 100%;
                text-align: center;
            }

            .izbori-widget .flex {
                display: flex;
                flex-flow: row;
                flex-wrap: wrap;
                align-items: flex-start;
                align-content: flex-start;
            }

            .izbori-widget .full {
                width: 100%;
            }

            .izbori-widget .third {
                width: 33.33%;
            }

            .izbori-widget .two-thirds {
                width: 66.66%;
            }

            .izbori-widget .three-fourths {
                width: 74.99%;
            }

            .izbori-widget .half {
                width: 49.99%;
            }

            .izbori-widget .fourth {
                width: 24.99%;
            }

            .izbori-widget .result-line {
                position: relative;
                flex-wrap: nowrap;
            }

            .izbori-widget .legend-line {
                color: #666;
                font-size: 12px;
                padding-top: 10px;
                font-family: pt sans, arial, helvetica, sans-serif;
            }

            .izbori-widget .legend-line>div {
                display: inline-block;
                margin-left: 16px;
                margin-right: 4px;
                width: 10px;
                height: 10px;
                position: relative;
                bottom: -2.5px;
            }

            .izbori-widget .legend-line>div:first-child {
                margin-left: 0px;
            }

            .izbori-widget .legend-line:last-child {
                text-align: right;
            }

            .izbori-widget .result-indicator-text {
                text-align: center;
                font-size: 14px;
                padding-top: 5px;
                opacity: .5;
                font-family: pt sans, arial, helvetica, sans-serif;
                margin-bottom: 32px;
            }

            .izbori-widget .result-line .indicator {
                position: absolute;
                left: 49.75%;
                width: 0.5%;
                height: 100%;
                z-index: 10;
                background-color: white;
            }

            .izbori-widget .result-segment {
                border-right: 1px solid #666;
                background-color: #333;
                order: 3;
                height: 20px;
                cursor: pointer;
                box-shadow: 0px 0px 5px transparent;
            }

            .izbori-widget .result-line .result-segment:hover {
                box-shadow: 0px 0px 5px white;
            }

            .izbori-widget .result-line .result-segment-active {
                box-shadow: 0px 0px 5px white;
            }

            .izbori-widget .democrat {
                background-color: #4c6aea;
            }

            .izbori-widget .republican {
                background-color: #dd393c;
            }

            .izbori-widget .lean-democrat {
                background-color: #2c3557;
            }

            .izbori-widget .lean-republican {
                background-color: #4f3435;
            }

            .izbori-widget .flipped {
                background-image: url('https://super1.telegram.hr/wp-content/themes/super1-theme/assets/media/patterns/pattern-line.svg');
            }

            .izbori-widget .swing-states h2 {
                font-size: 36px;
                margin-bottom: 20px;
            }
            .izbori-widget .swing-state-info {
                margin-bottom: 30px;
            }
            .izbori-widget .swing-state-info>.flex {
                padding-right: 24px;
                padding-top: 20px;
                border-top: 1px solid #333;
                position: relative;
                font-family: pt sans, arial, helvetica, sans-serif;
            }

            .izbori-widget .swing-state-info>.flex:last-child {
                border-top: none;
            }

            .izbori-widget .swing-state-info>.flex::before {
                content: ' ';
                background-color: #e5143e;
                width: 30px;
                height: 8px;
                position: absolute;
                top: -4px;
                left: 0;
            }

            .izbori-widget .swing-state-info>.flex b {
                font-family: fjalla one cro, Impact, sans-serif;
                font-size: 28px;
                display: block;
                width: 100%;
            }

            .izbori-widget .swing-states a {
                display: block;
                font-size: 16px;
                margin-top: 24px;
                opacity: .7;
                font-family: pt sans, arial, helvetica, sans-serif;
            }

            .izbori-widget .swing-states a:hover {
                text-decoration: underline;
                opacity: 1;
            }

            .izbori-widget .candidate-line {
                font-size: 48px;
                padding-bottom: 0px;
            }

            .izbori-widget .candidate-line .half {
                align-items: flex-end;
            }

            .izbori-widget .candidate-line .half div {
                padding-bottom: 4px;
            }

            .izbori-widget .candidate-line .half:last-child div {
                padding-right: 4px;
            }

            .izbori-widget .candidate-line img {
                width: 195px;
                height: auto;
                display: inline-block;
            }

            .izbori-widget .candidate-line .half:last-child {
                text-align: right;
                justify-content: flex-end;
            }

            .izbori-widget .map-usa {
                width: 100%;
                height: auto;
            }

            .izbori-widget .map-usa .state>path {
                fill: #666;
                opacity: .6;
            }

            .izbori-widget .map-usa .state>path:hover {
                opacity: 1;
                cursor: pointer;
            }

            .izbori-widget .map-usa .state>.map-area-active {
                opacity: 1;
            }

            .izbori-widget .mobile-only {
                display: none;
            }

            @media screen and (max-width: 1023px) {
                .izbori-widget {
                    padding: 15px;
                    padding-bottom: 30px;
                }

                body.home .izbori-widget {
                    background-color: black;
                    color: white;
                }

                .izbori-widget .naslov {
                    font-size: 32px;
                    margin: 0px;
                    margin-top: 8px;
                }

                .izbori-widget .podnaslov {
                    margin-bottom: 15px;
                }

                .izbori-widget .candidate-line {
                    font-size: 32px;
                }

                .izbori-widget .candidate-line .half {
                    position: relative;
                }

                .izbori-widget .candidate-line img {
                    position: relative;
                    left: -2%;
                    margin-right: -6%;
                    width: 60%;
                }

                .izbori-widget .candidate-line .half:last-child img {
                    left: auto;
                    margin-right: 0px;
                    margin-left: -4%;
                    right: -4%;
                }

                .izbori-widget .mobile-only {
                    display: flex;
                }

                .izbori-widget .desktop-only {
                    display: none;
                }

                .izbori-widget .result-indicator-text {
                    margin-bottom: 16px;
                    font-size: 12px;
                }
                .izbori-widget .swing-states .two-thirds {
                    width: 100%;
                    order: 2;
                    margin-top: 20px;
                }
                .izbori-widget .swing-states .third {
                    width: 100%;
                    order: 1;
                }
                .izbori-widget .swing-states h2 {
                    font-size: 28px;
                }
                .izbori-widget .swing-state-info > .flex {
                    width: 49.99%;
                    font-size: 12px;
                    margin-bottom: 20px;
                }
                .izbori-widget .nadnaslov {
                    width: 75px;
                    height: 26px;
                    font-size: 14px;
                }
                .izbori-widget .swing-state-info > .flex b {
                    font-size: 24px;
                }
                .izbori-widget .swing-state-info {
                    margin-bottom: 0px;
                }
                .izbori-widget .legend-line {
                    font-size: 9px;
                }
                .izbori-widget .legend-line > div {
                    width: 9px;
                    height: 9px;
                    bottom: -1.5px;
                }
                .izbori-widget .swing-state-info>.flex:nth-child(2) {
                    border-top: none;
                }
                .izbori-widget .result-segment {
                    border-right: 1px solid rgba(255,255,255,0.1);
                }
            }

            <?php
                foreach ($results as $key => $value) {
                    echo '.izbori-widget .map-usa #'.$key.' { ';
                        if ($value["vote_d"] > $value["vote_r"]) {
                            echo 'fill: #4c6aea; ';
                            $order = $order-1;
                        }
                        else if ($value["vote_d"] < $value["vote_r"]) {
                            echo 'fill: #dd393c; ';
                            $order = $order+1;
                        }
                        else {
                            if ($value["forecast_d"] > 53) {
                                echo 'fill: #2c3557; ';
                            }
                            else if ($value["forecast_r"] > 53) {
                                echo 'fill: #4f3435; ';
                            }
                        }
                        if ($value["forecast_d"] > 53) {
                            if ($value["vote_d"] < $value["vote_r"]) {
                                echo "background-image: url('https://super1.telegram.hr/wp-content/themes/super1-theme/assets/media/patterns/pattern-line.svg'); ";
                            }
                        }
                        else if ($value["forecast_r"] > 53) {
                            if ($value["vote_d"] > $value["vote_r"]) {
                                echo "background-image: url('https://super1.telegram.hr/wp-content/themes/super1-theme/assets/media/patterns/pattern-line.svg'); ";
                            }
                        }
                        echo '}';
                }
            ?>
        </style>

<?php }
}

register_widget('Telegram_Izbori_Us');
