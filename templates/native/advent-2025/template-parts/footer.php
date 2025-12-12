 <?php
    $posts = [
        [
            "title" => "Na manje od sat i pol vožnje od Zagreba ...",
            "img" => "https://www.telegram.hr/wp-content/uploads/2025/11/tg-naslovna-2025-11-25-1-1-2.jpg",
            "link" => "https://www.telegram.hr/partneri/na-manje-od-sat-i-pol-voznje-od-zagreba-ceka-vas-genijalan-adventski-program-sve-pocinje-ovog-vikenda/ ",
        ],
        [
            "title" => "Nakon dvije godine Advent se vraća na Gornji grad ...",
            "img" =>  $native_path . '/assets/posts/advent-zagreb.webp',
            "link" => "https://www.telegram.hr/partneri/nakon-dvije-godine-advent-se-vraca-na-gornji-grad-ovo-su-lokacije-koje-necemo-propustiti/",
        ],
        [
            "title" => "Ovih dana počinju i adventski sajmovi u okolici Zagreba ...",
            "img" =>  "https://images.telegram.hr/7z4cZZsO0Fo09hjL4s3CCrsWbeMHVxfW9FroXBhJkcQ/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMTEvYWR2ZW50LXUtZ29yaWNpLWNvdmVyLmpwZw.webp",
            "link" => "https://www.telegram.hr/super1/life/adventski-sajmovi-u-okolici-zagreba-vodic/",
        ],
    ];
    $posts2 = [
        [
            'img' => $native_path . '/assets/posts/fuliranje.webp',
            'title' => 'Posjetili smo Advent i pronašli svoje favorite, donosimo veliki vodič za Fuliranje i Fooling Around',
            'link' => 'https://www.telegram.hr/super1/life/advent-fuliranje-fooling-around-sto-smo-isprobali/'
        ],
        [
            'img' => 'https://images.telegram.hr/A7gkJO_STouT_j-9ypcrQYGCcG3g0asgTOPx-CSmxE4/preset:s1single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMTEvemFncmViLWFkdmVudC0yMDI1LWxva2FjaWplLmpwZw.webp',
            'title' => ' Gdje na Advent? Fooling Around, Ledeni park i još 9 adventskih lokacija u Zagrebu',
            'link' => 'https://www.telegram.hr/super1/life/gdje-na-advent-fooling-around-ledeni-park-i-jos-9-adventskih-lokacija-u-zagrebu/'
        ],
        [
            'img' => 'https://images.telegram.hr/nhsE7U93twbNowudlQUbFDaj9oqIYE_wi2xwSLon8kY/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMTIvZHNjMTk3MC5qcGVn.webp',
            'title' => 'Više od 50 različitih jela te 16 kuhara i influencera u dvobojima Zvijezde kuhaju',
            'link' => 'https://www.telegram.hr/super1/life/50-razlicitih-jela-eu-advent/'
        ],
    ];
    ?>

 <div class="w-full px-4 overflow-hidden flex flex-col gap-[100px] lg:gap-[215px] bg-[#F2E7DC] relative ">
     <!-- Background Overlay -->
     <div class="absolute inset-0 w-full h-full pointer-events-none">
         <img src="<?= $native_path ?>/assets/stations/papir.webp" class="object-cover w-full h-full opacity-35 bg-blend-multiply" alt="Paper background">
     </div>
     <div class="max-w-[1090px] mx-auto pt-[30px] md:pt-16 flex flex-col gap-10 md:gap-[52px] relative">
         <div class="flex flex-col gap-[30px] md:gap-[46px] max-w-[670px] mx-auto w-full">
             <h2 class="font-christmas text-[39px] md:text-[60px] leading-11 md:leading-[64px] text-center text-primary">Sve priče na jednom mjestu</h2>
             <p class="font-poppins text-base md:text-[20px] text-center text-primary">Sve neodoljive trenutke blagdana okupili smo na jedno mjesto. Polarni Express vodi vas kroz provod, zalogaje, cugu i poklone - sve što vam treba za sjajan kraj godine. Pronađite svoje mjesto, udobno se smjestite, istražite sve i na kraju s ovog putovanja sa sobom ponesite najbolje blagdanske uspomene koje će vas još dugo podsjećati da je prava zimska magija započela upravo ovdje. </p>
         </div>
         <div class="flex flex-col gap-2 lg:gap-6">
             <div class="grid grid-cols-2 md:flex flex-row gap-2 lg:gap-6">
                 <?php foreach ($posts as $index => $post): ?>
                     <a href="<?= $post["link"] ?>" target="_blank" class="relative cursor-pointer hover:scale-[1.02] transition-all duration-300 
        <?php if ($index == 1): ?>
            col-span-2 aspect-[2/1] md:col-span-2 md:aspect-[1.7] md:order-2
        <?php else: ?>
            aspect-square md:col-span-1 md:aspect-square
            <?= $index == 0 ? "order-2 md:order-1" : "" ?>
            <?= $index == 2 ? "order-3 md:order-3" : "" ?>
        <?php endif; ?>
        md:h-[280px]">

                         <img src="<?= $post["img"] ?>" alt="<?= $post["title"] ?>" class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 group-hover:scale-50">

                         <div class="absolute inset-0 pointer-events-none" style="background: linear-gradient(180deg, rgba(0,0,0,0) 54.68%, rgba(0,0,0,0.8) 100%);"></div>

                         <div class="absolute bottom-0 left-0 w-full px-[14px] lg:px-6 pb-[15px] lg:pb-7 pointer-events-none">
                             <span class="line-clamp-3 md:line-clamp-4 font-poppins lg:font-semibold leading-5 lg:leading-7 lg:text-[24px] text-[#FEF4D3] text-[18px]">
                                 <?= $post["title"] ?>
                             </span>
                         </div>
                     </a>
                 <?php endforeach; ?>
             </div>

             <div class="grid grid-cols-2 md:flex flex-row gap-2 lg:gap-6">
                 <?php foreach ($posts2 as $index => $post): ?>
                     <?php
                        $mobileOrder = 3 - $index;
                        $desktopOrder = $index + 1;
                        ?>
                     <a href="<?= $post["link"] ?>" target="_blank" class="relative hover:scale-[1.02] transition-all duration-300 cursor-pointer 
        order-<?= $mobileOrder ?> md:order-<?= $desktopOrder ?>
        <?php if ($index == 2): ?>
            col-span-2 aspect-[2/1] md:col-span-2 md:aspect-[1.7]
        <?php else: ?>
            aspect-square md:col-span-1 md:aspect-square
        <?php endif; ?>
        md:h-[280px]">

                         <img src="<?= $post["img"] ?>" alt="<?= $post["title"] ?>" class="absolute inset-0 w-full h-full object-cover pointer-events-none transition duration-300">

                         <div class="absolute inset-0 pointer-events-none" style="background: linear-gradient(180deg, rgba(0,0,0,0) 54.68%, rgba(0,0,0,0.8) 100%);"></div>

                         <div class="absolute bottom-0 left-0 w-full px-[14px] lg:px-6 pb-[15px] lg:pb-7 pointer-events-none">
                             <span class="line-clamp-3 md:line-clamp-4 font-poppins md:font-semibold leading-5 lg:leading-7 md:text-[24px] text-[#FEF4D3] text-base">
                                 <?= $post["title"] ?>
                             </span>
                         </div>
                     </a>
                 <?php endforeach; ?>
             </div>
         </div>
     </div>
     <div class="pb-[148px] md:pb-50 px-4 relative">
         <img class="absolute max-w-[194px] md:max-w-none right-[-20px] bottom-0" src="<?= $native_path ?>/assets/footer/christmastree.webp" alt="">
         <img class="absolute max-w-[194px] md:max-w-none left-[-20px] bottom-0 transform -scale-x-100" src="<?= $native_path ?>/assets/footer/christmastree.webp" alt="">

         <div class="min-w-[185px] max-w-[60%] md:max-w-[640px]  mx-auto flex flex-col gap-4 lg:gap-[52px]">
             <img class="mx-auto max-w-[158px] md:max-w-[244px]" src="<?= $native_path ?>/assets/footer/tg_studio_black.webp" alt="Logo">
             <p class="font-goodsans text-center text-[14px] md:text-[20px] leading-5 md:leading-[30px] text-[#122234]">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p>
         </div>
        <div class="w-fit flex mx-auto mt-10 flex-row gap-5 lg:gap-8">
            <img src="<?= $native_path; ?>/assets/hero/zrinjevacBlack.png" alt="Zrinjevac logo"
                class="h-[40px] md:h-[54px] object-contain">
            <img src="<?= $native_path; ?>/assets/hero/splitBlack.png" alt="Split logo"
                class="h-[40px] md:h-[54px] object-contain">
        </div>
     </div>
 </div>