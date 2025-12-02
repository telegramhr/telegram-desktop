<?php
$title = "Pročitaj više";

$cards = [
    [
        "image" => $native_path . "/assets/card-image.png",
        "text" => "Pronašli smo skulpturalni svijećnjak savršen za blagdane, evo gdje ga možete nabaviti",
        "link" => "#"

    ],
    [
        "image" => $native_path . "/assets/card-image.png",
        "text" => "Pronašli smo skulpturalni svijećnjak savršen za blagdane, evo gdje ga možete nabaviti",
        "link" => "#"
    ],
    [
        "image" => $native_path . "/assets/card-image.png",
        "text" => "Pronašli smo skulpturalni svijećnjak savršen za blagdane, evo gdje ga možete nabaviti",
        "link" => "#"
    ],
    [
        "image" => $native_path . "/assets/card-image.png",
        "text" => "Pronašli smo skulpturalni svijećnjak savršen za blagdane, evo gdje ga možete nabaviti",
        "link" => "#"
    ],
    [
        "image" => $native_path . "/assets/card-image.png",
        "text" => "Pronašli smo skulpturalni svijećnjak savršen za blagdane, evo gdje ga možete nabaviti",
        "link" => "#"
    ],
    [
        "image" => $native_path . "/assets/card-image.png",
        "text" => "Pronašli smo skulpturalni svijećnjak savršen za blagdane, evo gdje ga možete nabaviti",
        "link" => "#"
    ],
];
?>
<div class="w-full max-w-[1800px] mx-auto  bg-primary px-4 overflow-hidden relative">
    <div class="max-w-[1200px] mx-auto w-full flex flex-col gap-8 pt-[160px] text-center">

        <h2 data-aos="zoom-in" class="text-white font-ballet text-[110px] lg:text-[250px] leading-[110px] lg:leading-[220px]">
            <?= $title ?>
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-3 ">
            <?php foreach ($cards as $card): ?>
                <a href="<?= $card['link'] ?>" class="cursor-pointer flex flex-col gap-4 relative hover:scale-105 transition-transform duration-300">
                    <img src="<?= $native_path ?>assets/post-backgroundv2.webp"
                        alt="background"
                        class="absolute w-full h-full">
                    <div class="flex flex-col gap-4 relative z-10 px-[42px] py-[60px]">
                        <img src="<?= $card['image'] ?>"
                            class="max-w-[273px] mx-auto w-full aspect-[0.76]"
                            alt="card">
                        <span class="text-secondary font-climatecrisis text-[16px] leading-[18px] lg:text-[18px] uppercase">
                            <?= $card['text'] ?>
                        </span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>