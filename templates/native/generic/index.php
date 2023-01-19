<!DOCTYPE html>
<html lang="hr">
<?php
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/generic/';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_head(); ?>
    <!-- use this logic to embed all the files from project -->
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=1" type="text/css" />
</head>
<body>
    <div>
      your content here
      <img src="<?php echo $native_path ?>images/some_image.jpg" alt="">
    </div>
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>
