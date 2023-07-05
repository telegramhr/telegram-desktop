<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/generic/';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_head(); ?>
    <!-- use this logic to embed all the files from project -->
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=<?php echo $version; ?>" type="text/css" />
</head>
<body>
<!-- this is required to load all the analytics and other scripts -->
<?php do_action('telegram_body_start'); ?>
    <div>
      your content here
      <img src="<?php echo $native_path ?>images/some_image.jpg?ver=<?php echo $version; ?>" alt="">
    </div>
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>
