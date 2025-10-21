<!DOCTYPE html>
<html lang="hr">

<?php

/* Potential native paths */
//$native_path = get_stylesheet_directory_uri() . '/templates/native/client/landing/';
$native_path = 'https://www.telegram.hr/wp-content/themes/telegram2-desktop/templates/native/mg-mivela';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/kavatip-by-franck/';
//$native_path = '';
$distPath = __DIR__ . '/dist';
$cssPath = $distPath . '/style.css';
$jsPath = $distPath . '/main.js';

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); 
    ?>
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo $native_path; ?>/dist/style.css?v=<?php echo file_exists($cssPath) ? filemtime($cssPath) : '1'; ?>">
    <link rel="preload" href="<?php echo $native_path; ?>/assets/hero/hero-video.webm" as="video" type="video/webm" crossorigin="anonymous">

    <!-- JavaScript -->
    <script src="<?php echo $native_path; ?>/dist/main.js?v=<?php echo file_exists($jsPath) ? filemtime($jsPath) : '1'; ?>" defer></script>
</head>

<body>
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