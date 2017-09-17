<?php
get_header(); ?>

<div class="single-page page-dark search-results">
    <div class="container">

    <?php
    // G1
    if (have_posts()) { ?>
        <h2 class="title page-title"><i class="fa fa-search"></i> Traženi pojam: <span><?php echo get_search_query(); ?></span></h2>
        <div class="search-results-container">
            <?php
            while (have_posts()) {
                the_post();
                get_template_part('templates/articles/article-fourth');
                }
            $m = $wp_query->post_count % 4;
            if ($m) {
                while ($m<4) {
                    ?>
                    <article class="article-fourth anim">
                        <div class="inner"></div>
                    </article>
                    <?php
                    $m++;
                }
            }
            ?>
        </div>

        <?php } else { ?>
            <div class="no-results">
                <h3>Ups. Čini se da nismo pronašli ništa što odgovara traženom pojmu:</h3>
                <h2>"<?php echo get_search_query(); ?>"</h2>
            </div>
        <?php
        }
    ?>

    </div>
</div>

<?php
get_footer();