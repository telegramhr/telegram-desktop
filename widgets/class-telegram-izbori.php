<?php

class Telegram_Izbori extends WP_Widget {

public function __construct() {
	parent::__construct( 'tg_izbori', 'Telegram: Izbori',
		array(
			'description' => 'Najpopularniji članci telegramovih autora',
		) );
}

public function widget( $args, $instance ) {

	$results = get_option('tmg_izbori_2020_total');
?>
<div class="izbori-widget-parent">
    <a class="izbori-widget" href="http://staging.telegram.hr/native/parlamentarni-izbori-2020-uzivo-uz-telegram/">
        <div class="nadnaslov">Uživo</div>
        <div class="naslov">Preliminarni rezultati izbora</div>
        <div class="podnaslov">Ažurirano prije <?php echo $results["age"]; ?> minuta. <u><a href="https://www.telegram.hr/parlamentarni-izbori-2020">Pratite detaljnije na našem specijalu.</a></u></div>
        <div class="flex full">
            <div class="eighty flex">
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
                        ?>
                            <div class="flex fourth <?php echo $key ?>" style="order: <?php echo (100-$value["mandati"]) . ';'; if ($value["mandati"] > 0) { echo ' display: flex;'; } ?>">
                                <img src="https://www.telegram.hr/wp-content/themes/telegram2-desktop/templates/native/izbori/2020_parlamentarni/img/lider_<?php echo $key ?>.gif" alt="<?php echo $detalji_stranke[$key]['ime'].' - '.$detalji_stranke[$key]['lider'] ?>">
                                <div class="full stranka"><?php echo $detalji_stranke[$key]['ime'] ?></div>
                                <div class="full mandati"><?php echo $value["mandati"] ?></div>
                            </div>
                        <?php
                    }
                ?>
            </div>
            <div class="twenty flex">
                <?php echo file_get_contents('https://www.telegram.hr/wp-content/themes/telegram2-desktop/templates/native/izbori/2020_parlamentarni/img/hrvatska.svg'); ?>
            </div>
        </div>
    </a>
</div>
<style>
    .izbori-widget {
        font-family: fjalla one cro,Impact,sans-serif;
        z-index: 10;
        color: black;
        position: relative;
        padding-top: 32px;
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
        font-family: pt sans,arial,helvetica,sans-serif;
        font-size: 14px;
        opacity: 0.5;
        width: 100%;
        text-align: center;
        margin-bottom: 48px;
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
    .izbori-widget .eighty {
        width: 79.99%;
    }
    .izbori-widget .twenty {
        width: 19.99%;
    }
    .izbori-widget .fourth {
        width: 24.99%;
        padding-left: 110px;
        padding-bottom: 32px;
        position: relative;
    }
    .izbori-widget .fourth img {
        left: 20px;
        top: 0px;
        width: 72px;
        height: 72px;
        object-fit: contain;
        border-radius: 48px;
        position: absolute;
        filter: grayscale(100);
        z-index: 10;
    }
    .izbori-widget .fourth::before {
        content: ' ';
        position: absolute;
        top: 0px;
        left: 20px;
        width: 72px;
        height: 72px;
        border-radius: 48px;
        z-index: 7;
    }
    .izbori-widget .fourth .stranka {
        font-family: pt sans,arial,helvetica,sans-serif;
        font-size: 14px;
        height: 14px;
        overflow: show;
        opacity: 0.5;
        margin-bottom: 4px;
    }
    .izbori-widget .fourth .mandati {
        height: 50px;
        font-size: 50px;
    }
    .izbori-widget .fourth:nth-child(n+6) {
        display: none;
    }
    .izbori-widget .restart::before {
        background-color: #a8353b;
    }
    .izbori-widget .hdz::before {
        background-color: #3550a8;
    }
    .izbori-widget .domovinski::before {
        background-color: #444760;
    }
    .izbori-widget .most::before {
        background-color: #358ea8;
    }
    .izbori-widget .mozemo::before {
        background-color: #35a843;
    }
    .izbori-widget .dosta::before {
        background-color: #e8d63d;
    }
    .izbori-widget .reformisti::before {
        background-color: #e89319;
    }
    .izbori-widget .kerum::before {
        background-color: #2ae8cf;
    }
    .izbori-widget .petrina::before {
        background-color: #126358;
    }
    .izbori-widget .simp::before {
        background-color: #9e47ff;
    }
    .izbori-widget .hrvatska-izborne {
        fill: #999999;
        width: 100%;
        height: auto;
        object-fit: contain;
        padding: 0px 24px;
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