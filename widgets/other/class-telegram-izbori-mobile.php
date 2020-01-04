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
	        //$data = wp_cache_get( 'tg_izbori_mobile', 'widgets' );
	        //if ( ! $data ) {
		      //  ob_start();

		        ?>
                <div class="tg-widget rainbow-widget procitajte-danas izbori" style="margin-top: 20px;">
                    <div class="tg-widget-head">
                        Izbori uživo
                    </div>
                    <div class="tg-widget-body">
                        <?php
                        $kandidati = get_field('kandidat', 749255);
                        foreach ($kandidati as $kandidat) {
                            ?>
                            <article class="article-rainbow-small">
                                <div class="thumb">
                                    <div class="overlay"></div>
			                        <img src="<?php echo $kandidat['slika'] ?>" height="150" width="150">
                                </div>
                                <div class="titles">
                                    <h1 class="title">
                                        <a href="#">
					                        <?php echo $kandidat['ime'] ?> - <?php echo $kandidat['postotak'] ?>%
                                        </a>
                                    </h1>
                                </div>
                            </article>
                            <?php
                        }
                        ?>
                    </div>
                </div>

		        <?php
		     //   $data = ob_get_clean();
		     //   wp_cache_set( 'tg_izbori_mobile', $data, 'widgets', 60 );
	        //}
	       // echo $data;
        }
    }

}

register_widget( 'Telegram_Izbori_Mobile' );
