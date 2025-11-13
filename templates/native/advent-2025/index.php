<!DOCTYPE html>
<html lang="hr">

<?php

/* Potential native paths */
//$native_path = get_stylesheet_directory_uri() . '/templates/native/client/landing/';
$native_path = 'https://www.telegram.hr/wp-content/themes/telegram2-desktop/templates/native/advent-2025/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/kavatip-by-franck/';
//$native_path = 'https://telegram-wp.ddev.site/wp-content/themes/telegram-desktop/templates/native/advent-2025';
$distPath = __DIR__ . '/dist';
$cssPath = $native_path . '/style.css';
$jsPath = $native_path . '/main.js';

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); 
    ?>
    <link rel="stylesheet" href="<?php echo $native_path; ?>/dist/style.css?v">
    <script src="<?php echo $native_path;?>/dist/main.js"></script>
</head>

<body>
    <?php do_action('telegram_body_start'); ?>
    <div class="">
        <!-- Header -->

        <?php
        require_once 'content.php';
        ?>
        <!-- Footer -->

        <?php
        require_once 'footer.php';
        ?>
        <?php wp_footer(); 
        ?>
    </div>
</body>

</html>