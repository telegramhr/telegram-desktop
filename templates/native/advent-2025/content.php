<main class="w-full ">
    <div class="snow"></div>
    <?php include 'template-parts/hero.php'; ?>
    <?php include 'template-parts/calendar.php'; ?>

    <?php partial('stations', [
        'style' => 'bordo',
        'title' => 'Top stanice za provod',
        'description' => 'Lorem ipsum dolor sit amet consectetur. Senectus vivamus elit nec turpis sed aenean sem tempor aenean. Netus varius consequat lacus in vel non et posuere quis. Nunc viverra aliquet pellentesque et.',
        'polaroids' => [
            ['image' => $native_path . '/assets/stations/polaroid.webp', 'text' => 'Stanica 1'],
            ['image' => $native_path . '/assets/stations/polaroid2.webp', 'text' => 'Stanica 2'],
            ['image' => $native_path . '/assets/stations/polaroid3.webp', 'text' => 'Stanica 3'],
        ],
    ]); ?>
    <?php partial('stations', [
        'style' => 'dark-green',
        'title' => 'Top stanice za provod',
        'description' => 'Lorem ipsum dolor sit amet consectetur. Senectus vivamus elit nec turpis sed aenean sem tempor aenean. Netus varius consequat lacus in vel non et posuere quis. Nunc viverra aliquet pellentesque et.',
        'polaroids' => [
            ['image' => $native_path . '/assets/stations/polaroid.webp', 'text' => 'Stanica 1'],
            ['image' => $native_path . '/assets/stations/polaroid2.webp', 'text' => 'Stanica 2'],
            ['image' => $native_path . '/assets/stations/polaroid3.webp', 'text' => 'Stanica 3'],
        ],
    ]); ?>
    <?php partial('stations', [
        'style' => 'red',
        'title' => 'Top stanice za cugu',
        'description' => 'Lorem ipsum dolor sit amet consectetur. Senectus vivamus elit nec turpis sed aenean sem tempor aenean. Netus varius consequat lacus in vel non et posuere quis. Nunc viverra aliquet pellentesque et.',
        'polaroids' => [
            ['image' => $native_path . '/assets/stations/polaroid.webp', 'text' => 'Stanica 1'],
            ['image' => $native_path . '/assets/stations/polaroid2.webp', 'text' => 'Stanica 2'],
            ['image' => $native_path . '/assets/stations/polaroid3.webp', 'text' => 'Stanica 3'],
        ],
    ]); ?>
    <?php partial('stations', [
        'style' => 'green',
        'title' => 'Top stanice za cugu',
        'description' => 'Lorem ipsum dolor sit amet consectetur. Senectus vivamus elit nec turpis sed aenean sem tempor aenean. Netus varius consequat lacus in vel non et posuere quis. Nunc viverra aliquet pellentesque et.',
        'polaroids' => [
            ['image' => $native_path . '/assets/stations/polaroid.webp', 'text' => 'Stanica 1'],
            ['image' => $native_path . '/assets/stations/polaroid2.webp', 'text' => 'Stanica 2'],
            ['image' => $native_path . '/assets/stations/polaroid3.webp', 'text' => 'Stanica 3'],
        ],
    ]); ?>
    <?php partial('stations', [
        'style' => 'blue',
        'title' => 'Top stanice za cugu',
        'description' => 'Lorem ipsum dolor sit amet consectetur. Senectus vivamus elit nec turpis sed aenean sem tempor aenean. Netus varius consequat lacus in vel non et posuere quis. Nunc viverra aliquet pellentesque et.',
        'polaroids' => [
            ['image' => $native_path . '/assets/stations/polaroid.webp', 'text' => 'Stanica 1'],
            ['image' => $native_path . '/assets/stations/polaroid2.webp', 'text' => 'Stanica 2'],
            ['image' => $native_path . '/assets/stations/polaroid3.webp', 'text' => 'Stanica 3'],
        ],
    ]); ?>
    <?php include 'template-parts/posts.php'; ?>
    <?php include 'template-parts/footer.php'; ?>






</main>
<?php

function partial($template, $props = [])
{
    extract($props);

    include __DIR__ . "/template-parts/{$template}.php";
}
?>