<?php get_header(); ?>

<div class="dark-page error-page">
    <div class="container">
      <img id="sadfleck" src="<?php echo get_template_directory_uri(); ?>/assets/img/sadfleck.png"/>
        <div class="text">
            <h1 class="error-title">
                Čini se da je nešto još više otišlo u pogrešnom smjeru
            </h1>
            <p>
                Ova stranica kreirana je s isključivim ciljem da se na njoj nikada ne zateknete.
                Ukoliko ste vlastitom krivnjom ovdje ipak završili, srdačno Vas molimo da Telegram i dalje
                smatrate ozbiljnim portalom te se vratite na
                <a href="<?php echo home_url(); ?>">naslovnicu</a>.
            </p>
            <img id="tg-small" src="<?php echo get_template_directory_uri(); ?>/assets/img/telegram_logo.svg" height="25"/>
        </div>
    </div>
</div>

<?php
get_footer();