<div class="tg-widget blitz-articles">
    <div class="tg-widget-head">
        <h1>Na prvu</h1>
    </div>
    <div class="tg-widget-body cf">
    <?php
    $args = array(
        'post_type' => array('telesport'),
        'posts_per_page' => 5
    );
    $articles = new WP_Query($args);
    if ( $articles->have_posts() ) {
        while ($articles->have_posts()) {
            $articles->the_post();
            get_template_part('templates/article/article-blitz');
        }
    }
   ?>
    </div>
</div>