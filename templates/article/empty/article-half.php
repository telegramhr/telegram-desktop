<?php
global $editable;
?>

<article class="article-half empty" data-id="<?php the_ID(); ?>" data-position="telesport_h<?php echo $editable ?>_fullwidth_half">

    <div class="featured-img">
        <?php
            echo '<img src="'.get_template_directory_uri().'/assets/img/dummy/article-1.png"/>';
        ?>
    </div>

    <header>
        <h1 class="title">
            Postavi članak
        </h1>
        <h2 class="subtitle">
            Postavi članak povlačenjem iz lijevog izbronika
        </h2>
    </header>

</article>