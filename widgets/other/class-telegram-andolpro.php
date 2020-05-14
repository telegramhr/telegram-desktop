<?php

class Telegram_AndolPro extends WP_Widget
{

    public function __construct()
    {
        parent::__construct('tg_andolpro', 'Telegram: AndolPro',
            array(
                'description' => 'AndolPro',
            ));
    }

    public function widget($args, $instance)
    {
	        ?>
            <div class="tg-widget rainbow-widget procitajte-danas">
                <div class="tg-widget-head" style="text-transform: none;">
                    DONOSI PLIVIT&#174; D3
                </div>
                <div class="tg-widget-body">
			        <?php
			        $articles = [
				        [
					        'title' => 'Vodeći hrvatski liječnici otkrivaju: Mitovi i istine o virusima, imunitetu, srcu i prehrani',
					        'image' => 808828,
					        'link'  => 'https://doktor-online.hr/'
				        ],
				        [
					        'title' => 'Prvo žalovanje, a onda oprost: Psihijatar savjetuje kako smanjiti anksioznost u vrijeme pandemije',
					        'image' => 810119,
					        'link'  => 'https://doktor-online.hr/kako-se-osloboditi-anksioznosti-okrenite-se-prema-sebi-i-prodite-proces-zalovanja/'
				        ],
				        [
					        'title' => '"Ne propuštajte terapiju. Ni jedan dan!": Ugledna kardiologinja apelira na srčane bolesnike',
					        'image' => 809637,
					        'link'  => 'https://doktor-online.hr/zastitite-svoje-srce-3-najvaznija-pravila-za-zdravi-zivot-u-stresnim-vremenima/'
				        ],
				        [
					        'title' => 'Vitamini su sada ključni. Naši stručnjaci za zdravlje otkrivaju kako ih unijeti dovoljno',
					        'image' => 810120,
					        'link'  => 'https://doktor-online.hr/otkrivamo-10-razloga-zasto-su-vitamini-vazni-na-proljece/'
				        ],
				        [
					        'title' => 'Prvi donosimo: "Zid zahvalnosti" za potporu svim liječnicima koji u pandemiji brinu o nama ',
					        'image' => 808832,
					        'link'  => 'https://doktor-online.hr/'
				        ],
			        ];
			        foreach ($articles as $article) {
				        ?>
                        <article class="article-rainbow-small andolpro">
                            <div class="thumb">
                                <div class="overlay"></div>
						        <?php
                                echo wp_get_attachment_image($article['image'], 'article-rainbow-small')
						         ?>
                            </div>
                            <div class="titles">
                                <h1 class="title">
                                    <a href="<?php echo esc_url($article['link']) ?>" target="_blank">
								        <?php echo esc_html($article['title']) ?>
                                    </a>
                                </h1>
                                <div class="article-meta">
                                </div>
                            </div>
                        </article>
                        <?php
			        }
			        ?>
                </div>
            </div>

	        <?php
    }

}

register_widget( 'Telegram_AndolPro' );
