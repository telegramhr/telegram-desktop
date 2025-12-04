<?php
$title = "Novosti";

$cards = [
    [
        "image" => "https://images.telegram.hr/KUfD4ONzzK03h-LKfdY_UCxccoObHnhra5u5iJyKiQg/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMTIvNDMwMDgxNjQ3LTE4NDA1NjQ1MzY0MDY2MTY4LTQ1NzQ4MDQ4MjAxNDgyMTk0ODMtbi5qcGc.webp",
        "text" => "Nail inspo Od mašnica do kariranih noktiju, izdvajamo 7 najljepših božićnih manikura za ove blagdane",
        "link" => "https://www.telegram.hr/super1/beauty/od-masnica-do-kariranih-noktiju-izdvajamo-7-najljepsih-bozicnih-manikura-za-ove-blagdane/"
    ],
    [
        "image" => "https://images.telegram.hr/fpcyoUj8N4aSj00LIsl2_VHzVRRUIqmNyZGWi8nCXcM/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMTEvbXY1Ynl0Zm1tdHJtbnR5dG50ZzJtczAwbnphd2x0ZzFtZHV0b2dqaHp0aG1uZ2Zsb3dleHhrZXl4a2ZxY2djLXYxLmpwZw.webp",
        "text" => "Christmas list Svi na jednom mjestu: Donosimo popis novih božićnih filmova koji izlaze ove zime",
        "link" => "https://www.telegram.hr/super1/life/novi-bozicni-filmovi-streaming-servisi/"
    ],
    [
        "image" => "https://images.telegram.hr/L6jGIqpgJVjk5U3TYb0Os-jcBhiT_TXAT7gKSdYnFSk/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMTEvcHhsLTAxMTIyNC0xMjQ5MjkxNjAuanBn.webp",
        "text" => "Must visit Ako ove godine želite nešto drugačije, uskoro se otvara klizalište u pulskoj Areni i izgledat će čarobno",
        "link" => "https://www.telegram.hr/super1/life/klizaliste-pulska-arena-otvorenje/"
    ],
    [
        "image" => $native_path . "/assets/vijenac.webp",
        "text" => "Božićni inspo Zašto ovih blagdana ne biste izradili vlastiti adventski vijenac u duhu blagdana? Imamo super ideje",
        "link" => "https://www.telegram.hr/super1/life/adventski-vijenac-iz-kucne-radinosti-ideje-jysk/"
    ],
    [
        "image" => "https://images.telegram.hr/7z4cZZsO0Fo09hjL4s3CCrsWbeMHVxfW9FroXBhJkcQ/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMTEvYWR2ZW50LXUtZ29yaWNpLWNvdmVyLmpwZw.webp",
        "text" => "S1 vodič Ovih dana počinju i adventski sajmovi u okolici Zagreba, evo što vas sve ondje očekuje",
        "link" => "https://www.telegram.hr/super1/life/adventski-sajmovi-u-okolici-zagreba-vodic/"
    ],
    [
        "image" => $native_path . "/assets/skijaliste.webp",
        "text" => "S1 vodič Dosta vam je gužvi na poznatim europskim skijalištima? Razmislite o ovih 5 alternativnih destinacija",
        "link" => "https://www.telegram.hr/super1/life/manje-poznata-europska-skijalista/"
    ],
];
?>
<div class="w-full bg-primary">
    <div class="w-full max-w-[1920px] mx-auto  bg-primary px-4 overflow-hidden relative">
        <div class="max-w-[1200px] mx-auto w-full flex flex-col gap-4 lg:gap-8 pt-[22px] lg:pt-[160px] text-center">
            <h2 data-aos="zoom-in" class="text-white font-ballet text-[110px] lg:text-[250px] leading-[180px] lg:leading-[220px]">
                <?= $title ?>
            </h2>
            <div class="grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  gap-x-3 ">
                <?php foreach ($cards as $index => $card): 
                    if($index % 3 == 1){
                        $delay = 500;
                        $direction = 'up';
                    } elseif($index % 3 == 2){
                        $delay = 700;
                        $direction = 'left';
                    } else {
                        $delay = 300;
                        $direction = 'right';
                    }
                    ?>
                    <a data-aos="fade-<?=  $direction; ?>" data-aos-easing="linear" data-aos-delay="<?= $delay ?>" href="<?= $card['link'] ?>" class="cursor-pointer flex flex-col gap-4 relative hover:scale-105 transition-transform duration-300">
                        <img src="<?= $native_path ?>assets/post-backgroundv2.webp"
                            alt="background"
                            class="absolute w-full h-full">
                        <div class="flex flex-col gap-4 relative z-10 px-[42px] py-[60px]">
                            <img src="<?= $card['image'] ?>"
                                class="max-w-[273px] mx-auto w-full aspect-[0.76] object-cover"
                                alt="card">
                            <span class="text-secondary leading-[22px] font-climatecrisis text-[16px] lg:text-[18px] uppercase">
                                <?= $card['text'] ?>
                            </span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>