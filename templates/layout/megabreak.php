<!-- MEGABREAK -->
<div class="megabreak-container">
    <div class="megabreak-frame">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/megabreak-frame.svg" width="1210"/>
    </div>

    <?php
    $args      = array(
        'posts_per_page' => 1,
        'offset' => 4,
        'post_status'    => 'publish'
    );
    $articles  = new WP_Query( $args );
    if ( $articles->have_posts() ) {
        while ( $articles->have_posts() ) {
            $articles->the_post();
            get_template_part('templates/articles/article-megabreak');
        }
    }  ?>

    <div class="megabreak-bottom">
        <div class="container">
            <div class="poster-articles">
                <?php
                $args      = array(
                    'posts_per_page' => 3,
                    'offset' => 4,
                    'post_status'    => 'publish'
                );
                $articles  = new WP_Query( $args );
                if ( $articles->have_posts() ) {
                    while ( $articles->have_posts() ) {
                        $articles->the_post();
                        get_template_part('templates/articles/article-poster');
                    }
                }  ?>
            </div>

            <?php /*
            <div class="day-quote">
                <div class="qoute">
                    Ovu stranicu pogoni
                    <a href="https://www.terrakom.hr/" target="_blank" style="color: #00b054;">
                        Terrakom Hosting</a>
                </div>
                <div class="quote-person">
                    Vaše najpametnije ulaganje
                </div>
                <img id="terrakom-ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/terrakom-ico.png"/>
            </div>
            */ ?>

        </div>

        <div class="outline-hider"></div>
    </div>
</div>