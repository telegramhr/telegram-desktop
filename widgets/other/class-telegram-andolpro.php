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
        $mobile = '';
        if (wp_is_mobile()) {
            $mobile = 'mobile';
        }
        $data = wp_cache_get('telegram_pliva_'.$mobile, 'widgets');
        if (!$data) {
            ob_start();
	        ?>
            <div class="tg-widget rainbow-widget procitajte-danas">
                <div class="tg-widget-head" style="text-transform: none;">
                    <?php echo get_post_meta( get_the_ID(), 'naslov_html', 810192, true )  ?>
                </div>
                <div class="tg-widget-body">
			        <?php
                    $articles = get_post_meta( get_the_ID(), 'clanci', 810192, true ) ;
			        foreach ($articles as $article) {
				        ?>
                        <article class="article-rainbow-small andolpro">
                            <div class="thumb">
                                <div class="overlay"></div>
						        <?php
                                echo wp_get_attachment_image($article['slika'], 'article-rainbow-small')
						         ?>
                            </div>
                            <div class="titles">
                                <h1 class="title">
                                    <a href="<?php echo esc_url($article['link']) ?>" target="_blank">
								        <?php echo esc_html($article['naslov']) ?>
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
	        if (wp_is_mobile()) {
		        ?><style>
                .article-rainbow-small.andolpro .titles .title:before {
                    content: "<?php echo get_post_meta( get_the_ID(), 'naslov_css', 810192, true )  ?>" !important;
                }
                </style><?php
	        }
	        $data = ob_get_clean();
	        wp_cache_set('telegram_pliva_'.$mobile, $data, 'widgets', 600);
        }
        echo $data;
    }

}

register_widget( 'Telegram_AndolPro' );
