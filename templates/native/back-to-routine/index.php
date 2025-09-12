<!DOCTYPE html>
<html lang="hr">

<?php

/* Potential native paths */
//$native_path = get_stylesheet_directory_uri() . '/templates/native/client/landing/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/superone/back-to-routine/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/back-to-routine/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/superone/back-to-routine/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/client/landing/';
//$native_path = 'http://native.ddev.site/back-to-routine/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); 
    ?>
    <script src="<?php echo $native_path ?>assets/jquery.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ballet:opsz@16..72&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Special+Elite&display=swap"
        rel="stylesheet">

    <!-- Animate on scroll -->
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/aos/aos.css?v=1.00" type="text/css" />
    <script src="<?php echo $native_path ?>assets/aos/aos.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/operon.css?v=1.10" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/style.css?v=<?= filemtime('assets/style.css'); ?>"
        type="text/css" />
    <!-- Slick slider -->
    <script src="<?php echo $native_path ?>assets/slick/slick.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/slick/slick.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/slick/slick-theme.css" type="text/css" />
    <!-- Functions -->
    <script src="<?php echo $native_path ?>assets/functions.js"></script>
</head>

<body>
    <div class="main-container flex relative">
        <!-- Desktop-only Header-->
        <?php
        require_once 'header.php';
        ?>
        <!-- Notebook part -->
        <?php
        require_once 'notebook.php';
        ?>
        <!-- featured articles -->
        <?php
        require_once 'featured-articles.php';
        ?>
        <!-- Fashion -->
        <?php
        require_once 'fashion.php';
        ?>
        <!-- Beauty -->
        <?php
        require_once 'beauty.php';
        ?>
        <!-- Lifestyle -->
        <?php
        require_once 'lifestyle.php';
        ?>
        <!-- Design -->
        <?php
        require_once 'design.php';
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