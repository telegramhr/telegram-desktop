<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/izbori/2020_parlamentarni/';


$results = json_decode(file_get_contents($native_path.'/data/'), 1);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $native_path ?>functions.js"></script>
    <link rel="stylesheet" href="https://use.typekit.net/ere5mls.css">
</head>
<div id="notification">Dogodila se greška pri dohvaćanju novih podataka. Telegram će pokušati opet za 15 sekundi, a do tada će na stranici ostati postojeći rezultati.</div>
<div class="main-container flex">
    <div class="hero full flex relative" style="background-image: url('<?php echo $native_path ?>img/glave.jpg');">
        <a href="https://telegram.hr/" class="header-logos center full">
            <img src="<?php echo $native_path ?>img/telegram_logo.svg" alt="Telegram Logo">
        </a>
        <div class="hero-title full">
            <div class="container flex relative">
                <div class="full flex flex-responsive">
                    <h1 class="full">Izbori 2020.</h1>
                    <h2 class="full">Uz Telegram pratite rezultate uživo cijelu izbornu noć.</h2>
                </div>
            </div>
        </div>
    </div>
    <section class="full flex">
        <div class="container flex relative">
            <h2 class="full">Preliminarni rezultati</h2>
            <div id="refresh-counter">Podaci ažurirani prije 0 minuta. Pokušati ćemo ažurirati podatke za 15 sekundi.</div>
            <div class="full flex relative">                
                <div class="restart-line"><span><?php echo round($results["total"]["restart"]["mandati"]); ?></span> Restart</div>
                <div class="hdz-line">HDZ <span><?php echo round($results["total"]["hdz"]["mandati"]); ?></span></div>
            </div>
            <div class="result-line full flex">
                <div class="slaganje-vlade"></div>
                <div class="restart animate" style="width: <?php echo round($results["total"]["restart"]["mandati"]/151, 4)*100; ?>%;"></div>
                <div class="mozemo animate" style="width: <?php echo round($results["total"]["mozemo"]["mandati"]/151, 4)*100; ?>%;"></div>
                <div class="dosta animate" style="width: <?php echo round($results["total"]["dosta"]["mandati"]/151, 4)*100; ?>%;"></div>
                <div class="simp animate" style="width: <?php echo round($results["total"]["simp"]["mandati"]/151, 4)*100; ?>%;"></div>
                <div class="reformisti animate" style="width: <?php echo round($results["total"]["reformisti"]["mandati"]/151, 4)*100; ?>%;"></div>
                <div class="manjine animate" style="width: 5.3%;"></div>
                <div class="petrina animate" style="width: <?php echo round($results["total"]["petrina"]["mandati"]/151, 4)*100; ?>%;"></div>
                <div class="kerum animate" style="width: <?php echo round($results["total"]["kerum"]["mandati"]/151, 4)*100; ?>%;"></div>
                <div class="most animate" style="width: <?php echo round($results["total"]["most"]["mandati"]/151, 4)*100; ?>%;"></div>
                <div class="domovinski animate" style="width: <?php echo round($results["total"]["domovinski"]["mandati"]/151, 4)*100; ?>%;"></div>
                <div class="hdz animate" style="width: <?php echo round($results["total"]["hdz"]["mandati"]/151, 4)*100; ?>%;"></div>
            </div>
            <div class="full result-line-text center-text">76 mandata za većinu</div>
            <div class="full flex">
                <div class="half flex-responsive flex result-table total-results">
                    <div class="full row flex">
                        <div>Lista</div>
                        <div>Mandata</div>
                        <div>Glasova</div>
                        <div></div>
                    </div>
                    <div class="full row flex restart animate" style="order: <?php echo 100-$results["total"]["restart"]["mandati"]; ?>">
                        <div><img src="<?php echo $native_path ?>img/lider_restart.gif" alt="RESTART - Davor Bernardić">Restart koalicija</div>
                        <div class="mandati"><?php echo $results["total"]["restart"]["mandati"];?></div>
                        <div class="postotak"><?php echo $results["total"]["restart"]["postotak"];?>%</div>
                        <div></div>
                    </div>
                    <div class="full row flex hdz animate" style="order: <?php echo 100-$results["total"]["hdz"]["mandati"]; ?>">
                        <div><img src="<?php echo $native_path ?>img/lider_hdz.gif" alt="HDZ - Andrej Plenković">Hrvatska demokratska zajednica</div>
                        <div class="mandati"><?php echo $results["total"]["hdz"]["mandati"];?></div>
                        <div class="postotak"><?php echo $results["total"]["hdz"]["postotak"];?>%</div>
                        <div></div>
                    </div>
                    <div class="full row flex domovinski animate" style="order: <?php echo 100-$results["total"]["domovinski"]["mandati"]; ?>">
                        <div><img src="<?php echo $native_path ?>img/lider_domovinski.gif" alt="Domovinski pokret - Miroslav Škoro">Domovinski pokret</div>
                        <div class="mandati"><?php echo $results["total"]["domovinski"]["mandati"];?></div>
                        <div class="postotak"><?php echo $results["total"]["domovinski"]["postotak"];?>%</div>
                        <div></div>
                    </div>
                    <div class="full row flex most animate" style="order: <?php echo 100-$results["total"]["most"]["mandati"]; ?>">
                        <div><img src="<?php echo $native_path ?>img/lider_most.gif" alt="MOST - Božo Petrov">MOST</div>
                        <div class="mandati"><?php echo $results["total"]["most"]["mandati"];?></div>
                        <div class="postotak"><?php echo $results["total"]["most"]["postotak"];?>%</div>
                        <div></div>
                    </div>
                    <div class="full row flex mozemo animate" style="order: <?php echo 100-$results["total"]["mozemo"]["mandati"]; ?>">
                        <div><img src="<?php echo $native_path ?>img/lider_mozemo.gif" alt="Možemo - Tomislav Tomašević">Lijevo-zelena koalicija</div>
                        <div class="mandati"><?php echo $results["total"]["mozemo"]["mandati"];?></div>
                        <div class="postotak"><?php echo $results["total"]["mozemo"]["postotak"];?>%</div>
                        <div></div>
                    </div>
                    <div class="full row flex simp animate" style="order: <?php echo 100-$results["total"]["simp"]["mandati"]; ?>">
                        <div><img src="<?php echo $native_path ?>img/lider_simp.gif" alt="SSIP - Dalija Orešković">Pametno / Fokus / SSIP</div>
                        <div class="mandati"><?php echo $results["total"]["simp"]["mandati"];?></div>
                        <div class="postotak"><?php echo $results["total"]["simp"]["postotak"];?>%</div>
                        <div></div>
                    </div>
                    <div class="full row flex dosta animate" style="order: <?php echo 100-$results["total"]["dosta"]["mandati"]; ?>">
                        <div><img src="<?php echo $native_path ?>img/lider_dosta.gif" alt="Dosta Pljačke - Vilibor Sinčić">Dosta pljačke koalicija</div>
                        <div class="mandati"><?php echo $results["total"]["dosta"]["mandati"];?></div>
                        <div class="postotak"><?php echo $results["total"]["dosta"]["postotak"];?>%</div>
                        <div></div>
                    </div>
                    <div class="full row flex reformisti animate" style="order: <?php echo 100-$results["total"]["reformisti"]["mandati"]; ?>">
                        <div><img src="<?php echo $native_path ?>img/lider_reformisti.gif" alt="Narodna stranka reformisti - Radimir Čačić">Narodna stranka - Reformisti</div>
                        <div class="mandati"><?php echo $results["total"]["reformisti"]["mandati"];?></div>
                        <div class="postotak"><?php echo $results["total"]["reformisti"]["postotak"];?>%</div>
                        <div></div>
                    </div>
                    <div class="full row flex kerum animate" style="order: <?php echo 100-$results["total"]["kerum"]["mandati"]; ?>">
                        <div><img src="<?php echo $native_path ?>img/lider_kerum.gif" alt="HGS - Željko Kerum">HGS</div>
                        <div class="mandati"><?php echo $results["total"]["kerum"]["mandati"];?></div>
                        <div class="postotak"><?php echo $results["total"]["kerum"]["postotak"];?>%</div>
                        <div></div>
                    </div>
                    <div class="full row flex petrina animate" style="order: <?php echo 100-$results["total"]["petrina"]["mandati"]; ?>">
                        <div><img src="<?php echo $native_path ?>img/lider_petrina.gif" alt="Nezavisna lista Stipe Petrina">Nezavisna lista Stipe Petrina</div>
                        <div class="mandati"><?php echo $results["total"]["petrina"]["mandati"];?></div>
                        <div class="postotak"><?php echo $results["total"]["petrina"]["postotak"];?>%</div>
                        <div></div>
                    </div>
                    <div class="full row flex manjine animate" style="order: 100;">
                        <div>Zastupnici manjina</div>
                        <div class="mandati">8</div>
                        <div class="postotak"></div>
                        <div></div>
                    </div>
                </div>
                <div class="half flex-responsive center main-karta">
                    <?php echo file_get_contents($native_path.'img/karta.svg'); ?>
                </div>
            </div>
            <h2 class="full white-space">Po izbornim jedinicama</h2>
            <div class="full flex relative izborne-jedinice">
                <?php 
                for ($i=1; $i < 11; $i++) { 
                    echo '
                    <div class="half flex-responsive flex">
                        <h3 class="full">'.$i.'. izborna jedinica</h2>
                        <div class="full flex">
                            <div class="half flex-responsive">
                            I. izborna jedinica obuhvaća sjeverozapadni dio Zagrebačke županije te dio centra i zapada Grada Zagreba
                            </div>
                            <div class="half flex-responsive center karta-'.$i.'">
                                '.file_get_contents($native_path.'img/karta.svg').'
                            </div>
                        </div>
                        <div class="result-table full flex result-table-'.$i.'">
                        <div class="full row flex">
                            <div>Lista</div>
                            <div>Mandata</div>
                            <div>Glasova</div>
                            <div></div>
                        </div>
                        <div class="full row flex restart animate" style="order: '.(100-$results[$i]["restart"]["mandati"]).'">
                            <div><img src="'.$native_path .'img/lider_restart.gif" alt="RESTART - Davor Bernardić">Restart koalicija</div>
                            <div class="mandati">'.$results[$i]["restart"]["mandati"].'</div>
                            <div class="postotak">'.$results[$i]["restart"]["postotak"].'%</div>
                            <div></div>
                        </div>
                        <div class="full row flex hdz animate" style="order: '.(100-$results[$i]["hdz"]["mandati"]).'">
                            <div><img src="'.$native_path .'img/lider_hdz.gif" alt="HDZ - Andrej Plenković">Hrvatska demokratska zajednica</div>
                            <div class="mandati">'.$results[$i]["hdz"]["mandati"].'</div>
                            <div class="postotak">'.$results[$i]["hdz"]["postotak"].'%</div>
                            <div></div>
                        </div>
                        <div class="full row flex domovinski animate" style="order: '.(100-$results[$i]["domovinski"]["mandati"]).'">
                            <div><img src="'.$native_path .'img/lider_domovinski.gif" alt="Domovinski pokret - Miroslav Škoro">Domovinski pokret</div>
                            <div class="mandati">'.$results[$i]["domovinski"]["mandati"].'</div>
                            <div class="postotak">'.$results[$i]["domovinski"]["postotak"].'%</div>
                            <div></div>
                        </div>
                        <div class="full row flex most animate" style="order: '.(100-$results[$i]["most"]["mandati"]).'">
                            <div><img src="'.$native_path .'img/lider_most.gif" alt="MOST - Božo Petrov">MOST</div>
                            <div class="mandati">'.$results[$i]["most"]["mandati"].'</div>
                            <div class="postotak">'.$results[$i]["most"]["postotak"].'%</div>
                            <div></div>
                        </div>
                        <div class="full row flex mozemo animate" style="order: '.(100-$results[$i]["mozemo"]["mandati"]).';">
                            <div><img src="'.$native_path .'img/lider_mozemo.gif" alt="Možemo - Tomislav Tomašević">Lijevo-zelena koalicija</div>
                            <div class="mandati">'.$results[$i]["mozemo"]["mandati"].'</div>
                            <div class="postotak">'.$results[$i]["mozemo"]["postotak"].'%</div>
                            <div></div>
                        </div>
                        <div class="full row flex simp animate" style="order: '. (100-$results[$i]["simp"]["mandati"]).';">
                            <div><img src="'. $native_path .'img/lider_simp.gif" alt="SSIP - Dalija Orešković">Pametno / Fokus / SSIP</div>
                            <div class="mandati">'. $results[$i]["simp"]["mandati"].'</div>
                            <div class="postotak">'. $results[$i]["simp"]["postotak"].'%</div>
                            <div></div>
                        </div>
                        <div class="full row flex dosta animate" style="order: '. (100-$results[$i]["dosta"]["mandati"]).';">
                            <div><img src="'. $native_path .'img/lider_dosta.gif" alt="Dosta Pljačke - Vilibor Sinčić">Dosta pljačke koalicija</div>
                            <div class="mandati">'. $results[$i]["dosta"]["mandati"].'</div>
                            <div class="postotak">'. $results[$i]["dosta"]["postotak"].'%</div>
                            <div></div>
                        </div>
                        <div class="full row flex reformisti animate" style="order: '. (100-$results[$i]["reformisti"]["mandati"]).';">
                            <div><img src="'. $native_path .'img/lider_reformisti.gif" alt="Narodna stranka reformisti - Radimir Čačić">Narodna stranka - Reformisti</div>
                            <div class="mandati">'. $results[$i]["reformisti"]["mandati"].'</div>
                            <div class="postotak">'. $results[$i]["reformisti"]["postotak"].'%</div>
                            <div></div>
                        </div>
                        <div class="full row flex kerum animate" style="order: '. (100-$results[$i]["kerum"]["mandati"]).';">
                            <div><img src="'. $native_path .'img/lider_kerum.gif" alt="HGS - Željko Kerum">HGS</div>
                            <div class="mandati">'. $results[$i]["kerum"]["mandati"].'</div>
                            <div class="postotak">'. $results[$i]["kerum"]["postotak"].'%</div>
                            <div></div>
                        </div>
                        <div class="full row flex petrina animate" style="order: '. (100-$results[$i]["petrina"]["mandati"]).';">
                            <div><img src="'. $native_path .'img/lider_petrina.gif" alt="Nezavisna lista Stipe Petrina">Nezavisna lista Stipe Petrina</div>
                            <div class="mandati">'. $results[$i]["petrina"]["mandati"].'</div>
                            <div class="postotak">'. $results[$i]["petrina"]["postotak"].'%</div>
                            <div></div>
                        </div>
                    </div>
                </div>';
                }
                ?>
            </div>
        </div>
    </section>
</div>
<style>
    <?php
        for ($i=1; $i < 11; $i++) { 
           echo '.main-karta #izborna_x5F_'.$i.' path, .karta-'.$i.' #izborna_x5F_'.$i.' path {
               position: relative; z-index: 2; ';
            if ($results[$i]["restart"]["mandati"] > $results[$i]["hdz"]["mandati"]) {
                echo 'fill: #a8353b !important;';
            }
            else if ($results[$i]["hdz"]["mandati"] > $results[$i]["restart"]["mandati"]) {
                echo 'fill: #3550a8 !important;';
            }
            else if ($results[$i]["hdz"]["mandati"] == $results[$i]["restart"]["mandati"]) {
                echo 'fill: purple !important;';
            }
            echo '}';
        }
    ?>
</style>
<?php wp_footer(); ?>
</body>

</html>