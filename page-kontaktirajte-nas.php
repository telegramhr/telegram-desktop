<?php
$mail = false;

if (
    $_SERVER['REQUEST_METHOD'] === 'POST'
    && wp_verify_nonce($_POST['verification'], 'telegram_email')
    && strpos($_POST['_wp_http_referer'], 'kontaktirajte-nas')>-1
    && $_POST['ime'] && $_POST['email'] && $_POST['message']
) {
    //have a post!
    $name = esc_html($_POST['ime']);
    $email = esc_html($_POST['email']);
    $message = 'Korisnik '.$name.' <'.$email."> vam je poslao poruku: \r\n\r\n";
    $message .= esc_html($_POST['message']);

    $autor = intval($_POST['autor']);
    if ($autor) {
        $autor = get_user_by('id', $autor);
        $autor = $autor->user_email;
    }
    else {
        $autor = 'kontakt@telegram.hr';
    }
    $mail = wp_mail($autor, 'Poruka s Telegram.hr', $message);
}
get_header();
?>

    <div class="single-page container contact-page">

        <?php while (have_posts()) {
            the_post();
            ?>

            <div class="single-head">

                <h1 class="title title-bigger uppercase">Kontaktiraj Telegram</h1>

                <div class="decail"></div>

                <?php
                if ($mail) {
                    ?>
                    <h2>Vaša poruka je poslana.</h2>
                    <?php
                }
                ?>
                <form method="post" action="<?php site_url('kontaktirajte-nas') ?>">
                    <?php
                    $autor = false;
                    if (isset($_GET['autor']) && $_GET['autor']) {
                        $autor = get_user_by('id', intval($_GET['autor']));
                    }
                    if ($autor) {
                        $autor = $autor->display_name;
                    }
                    else {
                        $autor = 'Uredništvo Telegrama';
                    }
                    ?>
                    <br>
                    <h2 class="subtitle">Prima: <?php echo $autor; ?></h2>
                    <input autofocus type="text" required name="ime" placeholder="Tvoje ime...">
                    <input type="email" required name="email" placeholder="Tvoj email...">
                    <textarea name="message" placeholder="Poruka..." rows="10"></textarea>
                    <input type="hidden" name="autor" value="<?php if(isset($_GET['autor'])) echo intval($_GET['autor']) ?>">
                    <?php wp_nonce_field('telegram_email', 'verification', true, true); ?>
                    <input type="submit" value="Pošalji" class="btn">
                </form>

                <div class="the-content"><?php the_content(); ?></div>

            </div> <!-- Left content END -->
        <?php }
        ?>
        <br>
        <br>
        <br>

    </div>

<?php get_footer();