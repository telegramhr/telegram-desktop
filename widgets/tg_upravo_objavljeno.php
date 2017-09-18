<?php

class TG_Procitajte_Danas extends WP_Widget
{

    public function __construct()
    {
        parent::__construct('tg_procitajte_danas', 'Telegram: Upravo objavljeno',
            array(
                'description' => 'Pet najsvježijih članaka na portalu',
            ));
    }

    public function widget($args, $instance)
    {  ?>
        <div class="tg-widget rainbow-widget procitajte-danas">
            <div class="tg-widget-head">
                Upravo objavljeno
            </div>
            <div class="tg-widget-body">
                <?php
                $q = z_get_zone_query('masthead', array('posts_per_page' => 5));
                while ($q->have_posts()) {
                    $q->the_post();
                    // Rainbow article small
                    get_template_part('templates/articles/article-rainbow-small');
                } ?>
            </div>
        </div>

        <?php
    }

}

register_widget( 'TG_Procitajte_Danas' );
