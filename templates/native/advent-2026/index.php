<!DOCTYPE html>
<html lang="hr">

<?php

/* Native project base URL — portable across local/staging/production (no trailing slash) */
$native_path = get_stylesheet_directory_uri() . '/templates/native/advent-2026';
$distPath = __DIR__ . '/dist';
$cssPath  = $distPath . '/style.css';
$jsPath   = $distPath . '/main.js';

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

    <!-- Hero ilustracija (LCP) -->
    <link rel="preload" as="image" href="<?php echo $native_path; ?>/assets/unlock/naslovna-bor-borko.webp" fetchpriority="high">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo $native_path; ?>/dist/style.css?v=<?php echo file_exists($cssPath) ? filemtime($cssPath) : '1'; ?>">

    <!-- JavaScript -->
    <script src="<?php echo $native_path; ?>/dist/main.js?v=<?php echo file_exists($jsPath) ? filemtime($jsPath) : '1'; ?>" defer></script>
</head>

<body>
    <?php do_action('telegram_body_start'); ?>
    <?php require_once __DIR__ . '/content.php'; ?>
    <?php wp_footer(); ?>
</body>

</html>
