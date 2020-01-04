<?php

class Telegram_Top_Vijesti extends WP_Widget
{

    public function __construct()
    {
        parent::__construct('tg_top_vijesti', 'Telegram: Top Vijesti',
            array(
                'description' => 'Urednički odabir pet top članaka u danu',
            ));
    }

    public function widget($args, $instance)
    {  ?>

        <div class="tg-widget rainbow-widget top-vijesti container">
            <div class="tg-widget-body cf">
                <?php
                $page = 749255;

                if(get_field('ukljuci', $page)) {
                    //izbori
	                $kandidati = get_field('kandidat', $page);
                        ?>
                        <article class="article-rainbow-block">
                            <div class="thumb">
			                    <img src="<?php echo $kandidati[0]['slika'] ?>" width="280" height="280">
                            </div>
                        </article>
                    <article class="article-rainbow-block" style="width: 60%">
                        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                        <div class="w3-border" style="background-color: rgb(41,91,165); margin-top: 100px; height: 40px;">
                            <div style="float:left; width:<?php echo $kandidati[0]['postotak'] ?>%; padding: 3px; background-color: rgb(234,33,45); height: 38px;"><span style="color:white; line-height: 34px;"><?php echo $kandidati[0]['postotak'] ?>%</span></div>
                            <span style="line-height: 38px; float: right; color:white;"><?php echo $kandidati[1]['postotak'] ?>%</span>
                        </div>
                    </article>
                <article class="article-rainbow-block" style="float:right;">
                    <div class="thumb">
                        <img src="<?php echo $kandidati[1]['slika'] ?>" width="280" height="280">
                    </div>
                </article>
                        <?php
                }
                else {
                    $cache = wp_cache_get('top-vijesti', 'widgets');
                    if (!$cache) {
                        ob_start();
	                    $q = z_get_zone_query( 'masthead', array( 'posts_per_page' => 5 ) );
	                    while ( $q->have_posts() ) {
		                    $q->the_post();
		                    // Rainbow article small
		                    get_template_part( 'templates/articles/article-rainbow-block' );
	                    }
	                    wp_reset_postdata();
	                    $cache = ob_get_clean();
	                    wp_cache_set('top-vijesti', $cache, 'widgets');
                    }
                    echo $cache;
                }
                ?>
            </div>
        </div>

        <?php
    }
}

register_widget( 'Telegram_Top_Vijesti' );
