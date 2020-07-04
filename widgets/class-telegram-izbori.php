<?php

class Telegram_Izbori extends WP_Widget {

public function __construct() {
	parent::__construct( 'tg_izbori', 'Telegram: Izbori',
		array(
			'description' => 'Najpopularniji članci telegramovih autora',
		) );
}

public function widget( $args, $instance ) {

$results = json_decode(file_get_contents('http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/izbori/2020_parlamentarni/data/'), 1);

?>
<div class="container">
    <div class="izbori-widget">
        <div class="nadnaslov">Uživo</div>
        <div class="naslov">Preliminarni rezultati izbora</div>
        <div class="podnaslov">Ažurirano prije <?php echo $results["age"]; ?> minuta. <u>Pratite detaljnije na našem specijalu.</u></div>
    </div>
    <div class="flex">
        <div class="eighty">
            <?php
                $detalji_stranke = array(
                    "restart" => array(
                        "lider" => 'Davor Bernardić',
                        "ime" => 'Restart'
                    ),
                    "hdz" => array(
                        "lider" => 'Andrej Plenković',
                        "ime" => 'HDZ'
                    ),
                    "domovinski" => array(
                        "lider" => 'Miroslav Škoro',
                        "ime" => 'Domovinski pokret'
                    ),
                    "most" => array(
                        "lider" => 'Božo Petrov',
                        "ime" => 'MOST'
                    ),
                    "mozemo" => array(
                        "lider" => 'Tomislav Tomašević',
                        "ime" => 'Lijevo-zelena'
                    ),
                    "simp" => array(
                        "lider" => 'Dalija Orešković',
                        "ime" => 'Pam./Fok./SSIP'
                    ),
                    "dosta" => array(
                        "lider" => 'Ivan Vilibor Sinčić',
                        "ime" => 'Dosta Pljačke'
                    ),
                    "reformisti" => array(
                        "lider" => 'Radimir Čačić',
                        "ime" => 'NS Reformisti'
                    ),
                    "kerum" => array(
                        "lider" => 'Željko Kerum',
                        "ime" => 'HGS'
                    ),
                    "petrina" => array(
                        "lider" => 'Stipe Petrina',
                        "ime" => 'NL Stipe Petrina'
                    )
                );
                foreach ($results["total"] as $key => $value) {
                    echo '
                        <div class="fourth '.$key.'" style="order: '.(100-$value["mandati"]).';'; if ($value["mandati"] > 0) { echo ' display: flex;'; } echo' ">
                            <img src="http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/izbori/2020_parlamentarni/img/lider_'.$key.'.gif" alt="'.$detalji_stranke[$key]['ime'].' - '.$detalji_stranke[$key]['lider'].'">
                            <div class="stranka">'.$detalji_stranke[$key]['ime'].'</div>
                            <div class="mandati">'.$value["mandati"].'</div>
                        </div>
                    ';
                }
            ?>
        </div>
        <div class="twenty">
            <?php echo file_get_contents('http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/izbori/2020_parlamentarni/img/hrvatska.svg'); ?>
        </div>
    </div>
</div>
<style>
    .izbori-widget {
        border-bottom: 3px solid white;
        font-family: fjalla one cro,Impact,sans-serif;
        color: white;
    }
    .izbori-widget .nadnaslov {
        width: 100px;
        height: 30px;
        font-size: 18px;
        letter-spacing: 2px;
        background-color: #e5143e;
        text-align: center;
        margin: 0 auto;
    }¸
    .izbori-widget .naslov {
        width: 100%;
        font-size: 48px;
        text-align: center;
        margin: 8px;
    }
    .izbori-widget .podnaslov {
        font-family: pt sans,arial,helvetica,sans-serif;
        font-size: 14px;
        opacity: 0.5;
        width: 100%;
        text-align: center;
        margin-bottom: 24px;
    }
    .izbori-widget .flex {
        display: flex;
        width: 100%;
    }
    .izbori-widget .eighty {
        width: 79.99%;
    }
    .izbori-widget .twenty {
        width: 19.99%;
    }
    .izbori-widget .fourth {
        width: 24.99%;
        padding-left: 130px;
        padding-bottom: 32px;
        position: relative;
    }
    .izbori-widget .fourth img {
        left: 17px;
        top: 0px;
        width: 96px;
        height: 96px;
        object-fit: contain;
        border-radius: 48px;
    }
    .izbori-widget .fourth .stranka {
        font-family: pt sans,arial,helvetica,sans-serif;
        font-size: 18px;
        opacity: 0.5;
        margin-bottom: 8px;
    }
    .izbori-widget .fourth .mandati {
        font-size: 72px;
    }
    .izbori-widget .eighty .fourth:nth-child(n+9) {
        display: none;
    }
    .restart img {
        background-color: #a8353b;
    }
    .hdz img {
        background-color: #3550a8;
    }
    .domovinski img {
        background-color: #444760;
    }
    .most img {
        background-color: #358ea8;
    }
    .mozemo img {
        background-color: #35a843;
    }
    .dosta img {
        background-color: #e8d63d;
    }
    .reformisti img {
        background-color: #e89319;
    }
    .kerum img {
        background-color: #2ae8cf;
    }
    .petrina img {
        background-color: #126358;
    }
    .simp img {
        background-color: #9e47ff;
    }
    .hrvatska-izborne {
        fill: #999999;
        width: 100%;
        height: auto;
        object-fit: contain;
    }
    <?php
        for ($i=1; $i < 9; $i++) { 
           echo '#Layer1_'.$i.'_MEMBER_0_FILL {';
            if (rand(0,10) > 5) {
                echo 'fill: #a8353b !important;';
            }
            else {
                echo 'fill: #3550a8 !important;';
            }
            echo '}';
        }
    ?>
</style>

<?php }

}

register_widget( 'Telegram_Izbori' );