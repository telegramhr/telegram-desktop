
</div> <!-- END Main Container -->

<footer>
    <div class="container">
        <div class="footer-1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/telegram_logo.svg" height="70"/>
            <div class="claim">
                Portal za društvena i kulturna pitanja
            </div>
            <div class="meta">
                Sva prava pridržana &copy; <?php the_date(Y); ?> Telegram Media Grupa d.o.o.
            </div>
        </div>
        <div class="footer-2">
            <div class="categories">
                <h2>Rubrike</h2>
                <?php wp_nav_menu( array( 'theme_location' => 'footer_1' ) ); ?>
            </div>
            <div class="info">
                <h2>Info</h2>
                <?php wp_nav_menu( array( 'theme_location' => 'footer_2' ) ); ?>
            </div>
        </div>
        <div class="footer-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tmg_logo.svg" height="50"/>
            <?php wp_nav_menu( array( 'theme_location' => 'footer_3' ) ); ?>
        </div>
    </div>
</footer>


<?php
wp_footer();
// Floater & Scripts
the_widget('Telegram_Banner_Widget', array('size' => 'floater'));
the_widget('Telegram_Banner_Widget', array('size' => 'skripte')); ?>
</body>
</html>