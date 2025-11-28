<main class="w-full ">
    <div class="snow"></div>
    <?php include 'template-parts/hero.php'; ?>
    <?php include 'template-parts/calendar.php'; ?>

    <?php partial('stations', [
        'native_path' => $native_path,
        'style' => 'bordo',
        'title' => 'Top stanice za provod',
        'description' => 'Lorem ipsum dolor sit amet consectetur. Senectus vivamus elit nec turpis sed aenean sem tempor aenean. Netus varius consequat lacus in vel non et posuere quis. Nunc viverra aliquet pellentesque et.',
        'polaroids' => [
            ['image' => $native_path . '/assets/stations/polaroid2.webp', 'text' => 'Top fritule pronašli smo na Trgu kralja Tomislava u Zagrebu'],
            ['image' => $native_path . '/assets/stations/polaroid2.webp', 'text' => 'Najbolji sendvič s trganom janjetinom potraži u Marićevom prolazu u Veli...'],
            ['image' => $native_path . '/assets/stations/polaroid2.webp', 'text' => 'Aposlutno najbolji izbor božićnih slatkiša obišli smo u samom centru Čakovca'],
        ],
    ]); ?>
    <?php partial('stations', [
        'native_path' => $native_path,
        'style' => 'dark-green',
        'title' => 'Top stanice za zalogaj',
        'description' => 'Lorem ipsum dolor sit amet consectetur. Senectus vivamus elit nec turpis sed aenean sem tempor aenean. Netus varius consequat lacus in vel non et posuere quis. Nunc viverra aliquet pellentesque et.',
        'polaroids' => [
            ['image' => $native_path . '/assets/stations/polaroid2.webp', 'text' => 'Top fritule pronašli smo na Trgu kralja Tomislava u Zagrebu'],
            ['image' => $native_path . '/assets/stations/polaroid2.webp', 'text' => 'Najbolji sendvič s trganom janjetinom potraži u Marićevom prolazu u Veliko...'],
            ['image' => $native_path . '/assets/stations/polaroid2.webp', 'text' => 'Aposlutno najbolji izbor božićnih slatkiša obišli smo u samom centru Čakovca'],
        ],
    ]); ?>
    <?php partial('stations', [
        'native_path' => $native_path,
        'style' => 'red',
        'title' => 'Top stanice za cugu',
        'description' => 'Lorem ipsum dolor sit amet consectetur. Senectus vivamus elit nec turpis sed aenean sem tempor aenean. Netus varius consequat lacus in vel non et posuere quis. Nunc viverra aliquet pellentesque et.',
        'polaroids' => [
            ['image' => $native_path . '/assets/stations/polaroid2.webp', 'text' => 'Top fritule pronašli smo na Trgu kralja Tomislava u Zagrebu'],
            ['image' => $native_path . '/assets/stations/polaroid2.webp', 'text' => 'Najbolji sendvič s trganom janjetinom potraži u Marićevom prolazu u Veliko...'],
            ['image' => $native_path . '/assets/stations/polaroid2.webp', 'text' => 'Aposlutno najbolji izbor božićnih slatkiša obišli smo u samom centru Čakovca'],
        ],
    ]); ?>

    <?php partial('stations', [
        'native_path' => $native_path,
        'style' => 'blue',
        'title' => 'Top stanice za poklone',
        'description' => 'Lorem ipsum dolor sit amet consectetur. Senectus vivamus elit nec turpis sed aenean sem tempor aenean. Netus varius consequat lacus in vel non et posuere quis. Nunc viverra aliquet pellentesque et.',
        'polaroids' => [
            ['image' => $native_path . '/assets/stations/polaroid2.webp', 'text' => 'Top fritule pronašli smo na Trgu kralja Tomislava u Zagrebu'],
            ['image' => $native_path . '/assets/stations/polaroid2.webp', 'text' => 'Najbolji sendvič s trganom janjetinom potraži u Marićevom prolazu u Veliko...'],
            ['image' => $native_path . '/assets/stations/polaroid2.webp', 'text' => 'Aposlutno najbolji izbor božićnih slatkiša obišli smo u samom centru Čakovca'],
        ],
    ]); ?>
    <?php include 'template-parts/footer.php'; ?>






</main>
<?php

function partial($template, $props = [])
{
    extract($props);

    include __DIR__ . "/template-parts/{$template}.php";
}
?>