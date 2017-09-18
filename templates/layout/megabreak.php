<!-- MEGABREAK -->
<div class="megabreak-container">
    <div class="megabreak-frame">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/megabreak-frame.svg" width="1210"/>
    </div>

    <?php
    telegram_load_megabreak('break', 1);
      ?>

    <div class="megabreak-bottom">
        <div class="container">
            <div class="poster-articles">
                <?php
                telegram_load_megabreak('smallbreak', 1);
                telegram_load_megabreak('smallbreak', 2);
                telegram_load_megabreak('smallbreak', 3);
                  ?>
            </div>

        </div>

        <div class="outline-hider"></div>
    </div>
</div>