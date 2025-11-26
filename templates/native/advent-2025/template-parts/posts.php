<?php
$posts = [
    [
        'title' => "10 jela sa zagrebačkog Adventa koja će vas..",
        'img' => $native_path . '/assets/posts/advent-1.png',
        'link' => 'www.telegram.hr',
    ],
    [
        'title' => "10 jela sa zagrebačkog Adventa koja će vas..",
        'img' => $native_path . '/assets/posts/advent-2.png',
        'link' => 'www.telegram.hr',
    ],
    [
        'title' => "10 jela sa zagrebačkog Adventa koja će vas..",
        'img' => $native_path . '/assets/posts/advent-3.png',
        'link' => 'www.telegram.hr',
    ],
];
$posts2 = [
    [
        'title' => "10 jela sa zagrebačkog Adventa koja će vas..",
        'img' => $native_path . '/assets/posts/advent-4.png',
        'link' => 'www.telegram.hr',
    ],
    [
        'title' => "10 jela sa zagrebačkog Adventa koja će vas..",
        'img' => $native_path . '/assets/posts/advent-5.png',
        'link' => 'www.telegram.hr',
    ],
    [
        'title' => "10 jela sa zagrebačkog Adventa koja će vas..",
        'img' => $native_path . '/assets/posts/advent-6.png',
        'link' => 'www.telegram.hr',
    ],
]
?>

<div class="w-full relative px-4 bg-[#F2E7DC]">
    <!-- Background Overlay -->
    <div class="absolute inset-0 w-full h-full pointer-events-none">
        <img src="<?= $native_path; ?>/assets/stations/papir.webp" class="object-cover w-full h-full opacity-35 bg-blend-multiply" alt="Paper background">
    </div>
    <div class="max-w-[1090px] mx-auto pt-[30px] md:pt-[60px] pb-[32px] md:pb-[100px] flex flex-col gap-10 md:gap-[52px] relative">
        <div class="flex flex-col gap-[30px] md:gap-[46px] max-w-[670px] mx-auto w-full">
            <h2 class="font-christmas text-[39px] md:text-[60px] leading-11 md:leading-[64px] text-center text-primary">Sve priče na jednom mjestu</h2>
            <p class="font-poppins text-base text-center text-primary">Lorem ipsum dolor sit amet consectetur. Senectus vivamus elit nec turpis sed aenean sem tempor aenean. Netus varius consequat lacus in vel non et posuere quis. Nunc viverra aliquet pellentesque et.</p>
        </div>
        <div class="flex flex-col gap-6">
            <div class="grid grid-cols-2 md:flex flex-row gap-6">
                <?php foreach ($posts as $index => $post): ?>
                    <a href="<?= $post['link']; ?>" target="_blank" class="relative cursor-pointer hover:scale-[1.02] transition-all duration-300 
        <?php if ($index == 1): ?>
            col-span-2 aspect-[2/1] md:col-span-2 md:aspect-[1.7] md:order-2
        <?php else: ?>
            aspect-square md:col-span-1 md:aspect-square
            <?= $index == 0 ? 'order-2 md:order-1' : '' ?>
            <?= $index == 2 ? 'order-3 md:order-3' : '' ?>
        <?php endif; ?>
        md:h-[280px]">

                        <img src="<?= $post['img']; ?>" alt="<?= $post['title']; ?>" class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 group-hover:scale-50">

                        <div class="absolute inset-0 pointer-events-none" style="background: linear-gradient(180deg, rgba(0,0,0,0) 54.68%, rgba(0,0,0,0.8) 100%);"></div>

                        <div class="absolute bottom-0 left-0 w-full px-[14px] lg:px-6 pb-[15px] lg:pb-4 pointer-events-none">
                            <span class="font-poppins text-white text-base">
                                <?= $post['title']; ?>
                            </span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

            <div class="grid grid-cols-2 md:flex flex-row gap-6">
                <?php foreach ($posts2 as $index => $post): ?>
                    <?php
                    $mobileOrder = 3 - $index;
                    $desktopOrder = $index + 1;
                    ?>
                    <a href="<?= $post['link']; ?>" target="_blank" class="relative hover:scale-[1.02] transition-all duration-300 cursor-pointer 
        order-<?= $mobileOrder ?> md:order-<?= $desktopOrder ?>
        <?php if ($index == 2): ?>
            col-span-2 aspect-[2/1] md:col-span-2 md:aspect-[1.7]
        <?php else: ?>
            aspect-square md:col-span-1 md:aspect-square
        <?php endif; ?>
        md:h-[280px]">

                        <img src="<?= $post['img']; ?>" alt="<?= $post['title']; ?>" class="absolute inset-0 w-full h-full object-cover pointer-events-none transition duration-300">

                        <div class="absolute inset-0 pointer-events-none" style="background: linear-gradient(180deg, rgba(0,0,0,0) 54.68%, rgba(0,0,0,0.8) 100%);"></div>

                        <div class="absolute bottom-0 left-0 w-full <?= ($index == 2) ? 'px-[14px] pb-[15px]' : 'px-[9px] pb-[17px]' ?> lg:px-6 lg:pb-4 pointer-events-none">
                            <span class="font-poppins text-white text-base">
                                <?= $post['title']; ?>
                            </span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</div>