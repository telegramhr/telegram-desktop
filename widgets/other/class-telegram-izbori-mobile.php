<?php

class Telegram_Izbori_Mobile extends WP_Widget
{

    public function __construct()
    {
        parent::__construct('tg_izbori_mobile', 'Telegram: Izbori mobile',
            array(
                'description' => 'Izbori malo',
            ));
    }

    public function widget($args, $instance)
    {
        if (get_field('ukljuci', 749255)) {
	        $data = wp_cache_get( 'tg_izbori_mobile', 'widgets' );
	        if ( ! $data ) {
		        ob_start();

		        ?>
                <div class="tg-widget rainbow-widget procitajte-danas">
                    <div class="tg-widget-head">
                        Izbori uživo
                    </div>
                    <div class="tg-widget-body">
                        <?php
                        $kandidati = get_field('kandidat');
                        usort($kandidati,function($first,$second){
	                        return $first['broj_glasova'] < $second['broj_glasova'];
                        });
                        foreach ($kandidati as $kandidat) {
                            ?>
                            <article class="article-rainbow-small">
                                <div class="thumb">
                                    <div class="overlay"></div>
			                        <img src="<?php echo $kandidat['slika'] ?>" height="150" width="150">
                                </div>
                                <div class="titles">
                                    <h1 class="title">
                                        <a href="<?php echo $kandidat['link'] ?>">
					                        <?php echo $kandidat['ime'] ?>
                                        </a>
                                    </h1>
                                    <div class="article-meta">
            <span class="rcmds">
                <?php echo $kandidat['postotak'] ?>% - <?php echo $kandidat['broj_glasova']; ?> glasova
            </span>
                                    </div>
                                </div>
                            </article>
                            <?php
                        }
                        ?>
                    </div>
                </div>

		        <?php
		        $data = ob_get_clean();
		        wp_cache_set( 'tg_izbori_mobile', $data, 'widgets', 60 );
	        }
	        echo $data;
        }
    }

}

register_widget( 'Telegram_Izbori_Mobile' );
