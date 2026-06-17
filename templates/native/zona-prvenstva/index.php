<!DOCTYPE html>
<html lang="hr">

<?php

/* Native project base URL — portable across local/staging/production (no trailing slash) */
$native_path = get_stylesheet_directory_uri() . '/templates/native/zona-prvenstva';
$distPath = __DIR__ . '/dist';
$cssPath  = $distPath . '/style.css';
$jsPath   = $distPath . '/main.js';

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo $native_path; ?>/dist/style.css?v=<?php echo file_exists($cssPath) ? filemtime($cssPath) : '1'; ?>">

    <!-- JavaScript -->
    <script src="<?php echo $native_path; ?>/dist/main.js?v=<?php echo file_exists($jsPath) ? filemtime($jsPath) : '1'; ?>" defer></script>
</head>

<body>
    <?php do_action('telegram_body_start'); ?>
    <div>
        <?php require_once __DIR__ . '/content.php'; ?>
        <?php require_once __DIR__ . '/footer.php'; ?>
        <?php wp_footer(); ?>
    </div>
</body>

</html>
