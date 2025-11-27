 <?php
    $posts = [
        [
            'title' => "10 jela sa zagrebačkog Adventa koja će..",
            'img' => $native_path . '/assets/posts/advent-1.png',
            'link' => 'www.telegram.hr',
        ],
        [
            'title' => "10 jela sa zagrebačkog Adventa koja će..",
            'img' => $native_path . '/assets/posts/advent-2.png',
            'link' => 'www.telegram.hr',
        ],
        [
            'title' => "10 jela sa zagrebačkog Adventa koja će..",
            'img' => $native_path . '/assets/posts/advent-3.png',
            'link' => 'www.telegram.hr',
        ],
    ];
    $posts2 = [
        [
            'title' => "10 jela sa zagrebačkog Adventa koja će..",
            'img' => $native_path . '/assets/posts/advent-4.png',
            'link' => 'www.telegram.hr',
        ],
        [
            'title' => "10 jela sa zagrebačkog Adventa koja će..",
            'img' => $native_path . '/assets/posts/advent-5.png',
            'link' => 'www.telegram.hr',
        ],
        [
            'title' => "10 jela sa zagrebačkog Adventa koja će..",
            'img' => $native_path . '/assets/posts/advent-6.png',
            'link' => 'www.telegram.hr',
        ],
    ]
    ?>

 <div class="w-full px-4 overflow-hidden bg-[#F2E7DC] relative ">

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
                             <span class="font-poppins md:font-semibold leading-7 md:text-[24px] text-[#FEF4D3] text-base">
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
                             <span class="font-poppins md:font-semibold leading-7 md:text-[24px] text-[#FEF4D3] text-base">
                                 <?= $post['title']; ?>
                             </span>
                         </div>
                     </a>
                 <?php endforeach; ?>
             </div>
         </div>
     </div>



     <div class="pt-[136px] pb-[148px] md:py-[160px] px-4 relative">
         <img class="absolute max-w-[194px] md:max-w-none right-[-20px] bottom-0" src="<?= $native_path; ?>/assets/footer/christmastree.webp" alt="">
         <img class="absolute max-w-[194px] md:max-w-none left-[-20px] bottom-0 transform -scale-x-100" src="<?= $native_path; ?>/assets/footer/christmastree.webp" alt="">

         <div class="max-w-[185px] md:max-w-[640px]  mx-auto flex flex-col gap-4 lg:gap-[52px]">
             <img class="mx-auto max-w-[158px] md:max-w-[244px]" src="<?= $native_path; ?>/assets/footer/tg_studio_black.webp" alt="Logo">
             <p class="font-goodsans text-center text-[14px] md:text-[20px] leading-5 md:leading-[30px] text-[#122234]">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p>
         </div>
     </div>
 </div>