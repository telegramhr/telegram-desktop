<?php

$style = $props['style'] ?? 'red';
$title = $props['title'] ?? 'Test';
$description = $props['description'] ?? '';
$polaroids = array_slice($props['polaroids'] ?? [], 0, 3);
$block_id = 'stations-' . uniqid();
$is_first = ($style === 'bordo');
$native_path = $props['native_path'];
?>

<?php if ($is_first): ?>
    <div id="train-journey-wrapper" class="" style="position: relative; width: 100%; pointer-events: none;">
        <img id="vlak" class="w-[70px] lg:w-[150px]" src="<?= $native_path; ?>/assets/stations/vlak.png"
            style="position: absolute; 
                pointer-events: none; 
                z-index: 9999;
                top: 0;
                left: 0;
                will-change: transform;"
            alt="Vlak" />
    </div>
<?php endif; ?>

<div id="<?= $style; ?>" class="relative w-full min-h-[600px] pt-[158px] pb-[66px] flex flex-col gap-[110px] items-center justify-center  
<?php if ($style == 'bordo'): ?> bg-[#842238] 
<?php elseif ($style == 'dark-green'): ?> bg-[#3D5928] 
<?php elseif ($style == 'red'): ?> bg-[#B52513] 
<?php elseif ($style == 'green'): ?> bg-[#4D803D] 
<?php elseif ($style == 'blue'): ?> bg-[#122339] <?php endif; ?>">

    <!-- Decorative Images -->
    <div class="absolute inset-0 w-full h-full pointer-events-none overflow-hidden">
        <?php if ($style == 'bordo'): ?>
            <img class="absolute right-[-20px] md:left-[100px] rotate-[24deg] md:rotate-0 top-[-10px] md:top-0" src="<?= $native_path; ?>/assets/stations/cuga-motiv.webp" alt="Cuga Motiv">
            <img class="absolute left-[-80px] md:left-[-20px] top-0 md:top-[30px] rotate-[10deg] md:rotate-[-30deg]" src="<?= $native_path; ?>/assets/stations/cuga-motiv.webp" alt="Cuga Motiv">
            <img class="absolute rotate-[-20deg] md:rotate-[30deg] left-[-10px] md:left-auto md:right-[160px] top-[-36px] md:top-[-20px]" src="<?= $native_path; ?>/assets/stations/cuga-motiv.webp" alt="Cuga Motiv">
            <img class="absolute rotate-[40deg] md:rotate-0 right-[50px] top-[-60px] md:top-0 " src="<?= $native_path; ?>/assets/stations/cuga-motiv.webp" alt="Cuga Motiv">
            <img class="absolute md:hidden bottom-0 right-[-70px] rotate-[190deg] " src="<?= $native_path; ?>/assets/stations/cuga-motiv.webp" alt="Cuga Motiv">
            <img class="absolute md:hidden bottom-[-20px] right-0 rotate-[150deg]" src="<?= $native_path; ?>/assets/stations/cuga-motiv.webp" alt="Cuga Motiv">
        <?php elseif ($style == 'dark-green'): ?>
            <img class="absolute right-0 top-0 max-w-[280px] lg:max-w-[400px]" src="<?= $native_path; ?>/assets/stations/green-motiv.webp" alt="Green Motiv">
            <img class="absolute block md:hidden left-0 bottom-0 rotate-180 max-w-[280px]" src="<?= $native_path; ?>/assets/stations/green-motiv.webp" alt="Green Motiv">
        <?php elseif ($style == 'red'): ?>
            <img class="absolute left-[-20px] md:left-0 top-[-10px] md:top-[50px] rotate-[-30deg] md:rotate-[-50deg]" src="<?= $native_path; ?>/assets/stations/cuga-motiv.webp" alt="Cuga Motiv">
            <img class="absolute bottom-[-10px] right-[-10px] rotate-[150deg] md:rotate-0 md:left-[100px] md:top-0" src="<?= $native_path; ?>/assets/stations/cuga-motiv.webp" alt="Cuga Motiv">
            <img class="absolute hidden md:block left-[30%] top-0" src="<?= $native_path; ?>/assets/stations/cuga-motiv.webp" alt="Cuga Motiv">
            <img class="absolute right-0 top-[-100px] md:top-0" src="<?= $native_path; ?>/assets/stations/boce.webp" alt="Boca Sampanjca">
            <img class="absolute md:hidden left-[-25px] bottom-0 rotate-180" src="<?= $native_path; ?>/assets/stations/boce.webp" alt="Boca Sampanjca">
        <?php elseif ($style == 'green'): ?>
            <img class="absolute top-0 right-0 max-w-[180px] md:max-w-none" src="<?= $native_path; ?>/assets/stations/light-green.webp" alt="LightGreen Motiv">
            <img class="absolute top-[-20px] left-[-10px] md:left-0 md:top-0 max-w-[120px] md:max-w-none" src="<?= $native_path; ?>/assets/stations/light-green2.webp" alt="LightGreen Motiv">
            <img class="absolute md:hidden bottom-0 left-0 max-w-[180px] rotate-180" src="<?= $native_path; ?>/assets/stations/light-green.webp" alt="LightGreen Motiv">
            <img class="absolute md:hidden bottom-[-20px] right-[-10px] rotate-180 max-w-[120px]" src="<?= $native_path; ?>/assets/stations/light-green2.webp" alt="LightGreen Motiv">
        <?php elseif ($style == 'blue'): ?>
            <img class="absolute top-[-40px] md:top-0 left-0 max-w-[120px] md:max-w-none" src="<?= $native_path; ?>/assets/stations/blueleft.webp" alt="LightBlue Motiv">
            <img class="absolute right-0 top-[-40px] md:top-0 max-w-[200px] md:max-w-none" src="<?= $native_path; ?>/assets/stations/blueright.webp" alt="LightBlue Motiv">
            <img class="absolute md:hidden bottom-0 right-0 max-w-[120px] rotate-180 md:max-w-none" src="<?= $native_path; ?>/assets/stations/blueleft.webp" alt="LightBlue Motiv">
            <img class="absolute md:hidden left-[-40px] bottom-0 max-w-[200px] rotate-180 md:max-w-none" src="<?= $native_path; ?>/assets/stations/blueright.webp" alt="LightBlue Motiv">
        <?php endif; ?>
    </div>

    <!-- Title and Description -->
    <div class="max-w-[640px] w-full mx-auto flex flex-col gap-[42px] relative z-10 px-4">
        <div class="flex flex-col gap-[36px]">
            <h2 class="font-christmas text-[39px] md:text-[60px] leading-[64px] text-center text-light-sand "><?= $title; ?></h2>
            <p class="text-[16px] md:text-[20px] font-poppins text-center text-light-sand ">
                <?= $description; ?>
            </p>
        </div>
        <button id="toggleBtn-<?= $block_id; ?>" class="bg-white px-5 py-[9px] rounded-[3px] shadow-sm w-fit mx-auto items-center text-black uppercase text-[16px] md:text-[20px] font-bold leading-6 flex flex-row gap-1 font-lato z-40">
            <span class="cursor-pointer">Posjeti ih</span>
            <i id="arrow-up-<?= $block_id ?>" class="fa-solid fa-angle-down"></i>
        </button>
    </div>

    <!-- SVG paths -->
    <?php if ($style == 'dark-green'): ?>
        <div class="absolute block bottom-[-180px] lg:bottom-[-25%] right-[25%] z-[4]">
            <svg id="path-darkgreen" class="hidden lg:block" width="147" height="349" viewBox="0 0 147 349" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M77.3359 347.122L33.4843 285.914C28.3099 278.692 29.8022 268.667 36.8557 263.264C49.679 253.443 67.5018 266.046 62.5161 281.41L58.8938 292.572C52.749 311.507 25.7728 310.959 20.4027 291.789L2.97891 229.593C-1.09977 215.033 6.29375 199.714 20.2298 193.849L126.149 149.273C143.581 141.937 149.958 120.497 139.369 104.826L113.033 65.8494C107.829 58.147 106.489 48.467 109.406 39.6406L122.298 0.627612" stroke="#F3E6E6" stroke-opacity="0.25" stroke-width="4" stroke-dasharray="12 12" />
            </svg>

            <svg id="path-dark-green-mobile" class="lg:hidden" width="147" height="349" viewBox="0 0 147 349" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M77.3361 347.122L33.4845 285.914C28.3102 278.692 29.8025 268.667 36.8559 263.264C49.6792 253.443 67.502 266.046 62.5163 281.41L58.894 292.572C52.7492 311.507 25.773 310.959 20.4029 291.789L2.97915 229.593C-1.09952 215.033 6.29399 199.714 20.23 193.849L126.149 149.273C143.581 141.937 149.958 120.497 139.37 104.826L113.034 65.8494C107.829 58.147 106.49 48.467 109.406 39.6406L122.298 0.627612" stroke="#F3E6E6" stroke-opacity="0.25" stroke-width="4" stroke-dasharray="12 12" />
            </svg>

        </div>
    <?php elseif ($style == 'green'): ?>
        <div class="absolute block bottom-[-180px] lg:bottom-[-25%] left-[25%] lg:left-auto right-[25%] z-[4]">
            <svg id="path-green" class="hidden lg:block" width="177" height="462" viewBox="0 0 177 462" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M37.5 459.5L125.643 418.537C142.536 410.687 148.265 389.499 137.63 374.205L100.84 321.294C85.2501 298.873 105.287 268.977 131.95 274.876L137.701 276.148C167.906 282.829 187.232 244.963 164.1 224.423L12.7398 90.022C3.79177 82.0766 0.421442 69.5733 4.16392 58.207L23 0.999992" stroke="white" stroke-opacity="0.25" stroke-width="4" stroke-dasharray="12 12" />
            </svg>
            <svg id="path-green-mobile" class="lg:hidden rotate-180" width="136" height="343" viewBox="0 0 136 343" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M70.4798 1.75153L17.5225 30.9438C1.3886 39.8375 -2.99215 61.0364 8.29494 75.5966L61.1388 143.765C68.6138 153.407 69.5045 166.616 63.3919 177.175L41.5178 214.96C28.928 236.708 47.0539 263.37 71.9078 259.662L99.1255 255.602C117.472 252.864 133.881 267.266 133.547 285.813L132.527 342.496" stroke="white" stroke-opacity="0.25" stroke-width="4" stroke-dasharray="12 12" />
            </svg>

        </div>
    <?php elseif ($style == 'bordo'): ?>
        <div class="absolute block bottom-[-180px] lg:bottom-[-20%] left-[25%] z-[4]">
            <svg id="path-bordo" class="hidden lg:block" width="348" height="330" viewBox="0 0 348 330" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M160 2L26.5086 29.1708C-2.16346 35.0067 -6.37324 74.2407 20.408 86.0267L124.661 131.907C146.599 141.561 148.916 171.772 128.708 184.659L106.349 198.918C80.2662 215.552 93.3762 255.993 124.257 254.16L314.223 242.886C331.46 241.863 346 255.566 346 272.833V330" stroke="white" stroke-opacity="0.25" stroke-width="4" stroke-dasharray="12 12" />
            </svg>
            <svg id="path-bordo-mobile" class="lg:hidden" width="136" height="343" viewBox="0 0 136 343" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M70.4798 1.75153L17.5225 30.9438C1.3886 39.8375 -2.99215 61.0364 8.29494 75.5966L61.1388 143.765C68.6138 153.407 69.5045 166.616 63.3919 177.175L41.5178 214.96C28.928 236.708 47.0539 263.37 71.9078 259.662L99.1255 255.602C117.472 252.864 133.881 267.266 133.547 285.813L132.527 342.496" stroke="white" stroke-opacity="0.25" stroke-width="4" stroke-dasharray="12 12" />
            </svg>

        </div>
    <?php elseif ($style == 'red'): ?>
        <div class="absolute block bottom-[-180px] lg:bottom-[-20%] left-[25%] z-[4]">
            <svg id="path-red" class="hidden lg:block" width="348" height="330" viewBox="0 0 348 330" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M160 2L26.5086 29.1708C-2.16346 35.0067 -6.37324 74.2407 20.408 86.0267L124.661 131.907C146.599 141.561 148.916 171.772 128.708 184.659L106.349 198.918C80.2662 215.552 93.3762 255.993 124.257 254.16L314.223 242.886C331.46 241.863 346 255.566 346 272.833V330" stroke="white" stroke-opacity="0.25" stroke-width="4" stroke-dasharray="12 12" />
            </svg>
            <svg id="path-red-mobile" class="lg:hidden" width="136" height="343" viewBox="0 0 136 343" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M70.4798 1.75153L17.5225 30.9438C1.3886 39.8375 -2.99215 61.0364 8.29494 75.5966L61.1388 143.765C68.6138 153.407 69.5045 166.616 63.3919 177.175L41.5178 214.96C28.928 236.708 47.0539 263.37 71.9078 259.662L99.1255 255.602C117.472 252.864 133.881 267.266 133.547 285.813L132.527 342.496" stroke="white" stroke-opacity="0.25" stroke-width="4" stroke-dasharray="12 12" />
            </svg>

        </div>
    <?php endif; ?>

    <!-- Background overlay -->
    <div class="absolute inset-0 w-full h-full">
        <img src="<?= $native_path; ?>/assets/stations/papir.webp" class="object-cover w-full h-full <?= $style !== 'blue' ? 'mix-blend-color-burn' : 'mix-blend-color-dodge' ?> <?= $style == 'blue' ? 'opacity-10' : 'opacity-50' ?>" alt="">
    </div>

    <!-- Polaroids -->
    <div id="polaroids-<?= $block_id ?>" class="hidden flex-col md:flex-row gap-12 relative z-20 [&>div]:first:rotate-[-3deg] [&>div]:last:rotate-[3deg] px-4" style="opacity: 0; max-height: 0; transition: opacity 0.6s ease-in-out, max-height 0.6s ease-in-out, transform 0.6s ease-in-out; transform: translateY(-20px);">
        <?php foreach ($polaroids as $polaroid): ?>
            <div class="flex flex-col gap-[22px] px-4 pt-9 pb-7 bg-white max-w-[320px]">
                <img class="aspect-square z-30" src="<?= $polaroid['image'] ?>" alt="">
                <p class="font-poppins font-medium text-[20px] leading-7"><?= $polaroid['text'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<?php if ($is_first): ?>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/MotionPathPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
    <script>
        (function() {
            let isInitialized = false;

            function initTrainAnimation() {
                gsap.registerPlugin(ScrollTrigger, MotionPathPlugin);

                const vlak = document.getElementById('vlak');
                if (!vlak) {
                    return;
                }

                gsap.set(vlak, {
                    opacity: 0,
                    scale: 0.8
                });

                const isMobile = window.innerWidth < 1024;

                const pathConfig = [{
                        name: 'bordo',
                        id: isMobile ? 'path-bordo-mobile' : 'path-bordo',
                        reverse: false
                    },
                    {
                        name: 'dark-green',
                        id: isMobile ? 'path-dark-green-mobile' : 'path-darkgreen',
                        reverse: isMobile ? true : true
                    },
                    {
                        name: 'red',
                        id: isMobile ? 'path-red-mobile' : 'path-red',
                        reverse: false
                    },
                    {
                        name: 'green',
                        id: isMobile ? 'path-green-mobile' : 'path-green',
                        reverse: isMobile ? true : true
                    },
                ];

                const sections = [];
                pathConfig.forEach(config => {
                    const section = document.getElementById(config.name);
                    const svg = document.getElementById(config.id);
                    const path = svg ? svg.querySelector('path') : null;
                    const wrapper = svg ? svg.parentElement : null;

                    if (section && path && wrapper) {
                        sections.push({
                            ...config,
                            section,
                            path,
                            svg,
                            wrapper
                        });
                    }
                });

                if (sections.length === 0) return;

                const masterTL = gsap.timeline({
                    scrollTrigger: {
                        trigger: sections[0].section,
                        endTrigger: sections[sections.length - 1].section,
                        start: "top top",
                        end: "bottom bottom",
                        scrub: 2.5,
                        markers: false,
                        id: "master-train"
                    }
                });

                sections.forEach((item, index) => {
                    const isLastSection = index === sections.length - 1;

                    // 1. FADE IN
                    masterTL.to(vlak, {
                        opacity: 1,
                        scale: 1,
                        duration: 0.2,
                        ease: "power2.out"
                    }, index === 0 ? 0 : ">");

                    // 2. MOTION PATH 
                    masterTL.to(vlak, {
                        motionPath: {
                            path: item.path,
                            align: item.path,
                            autoRotate: true,
                            alignOrigin: [0.5, 0.5],
                            start: item.reverse ? 1 : 0,
                            end: item.reverse ? 0 : 1
                        },
                        opacity: 1,
                        duration: 3,
                        ease: "none"
                    }, ">");

                    // 3. FADE OUT
                    masterTL.to(vlak, {
                        opacity: 0,
                        scale: 0.7,
                        duration: 0.2,
                        ease: "power2.in",
                        immediateRender: false
                    }, ">");

                    if (!isLastSection) {
                        const nextItem = sections[index + 1];
                        masterTL.set(vlak, {
                            motionPath: {
                                path: nextItem.path,
                                align: nextItem.path,
                                autoRotate: true,
                                alignOrigin: [0.5, 0.5],
                                start: nextItem.reverse ? 1 : 0,
                                end: nextItem.reverse ? 1 : 0
                            },
                            opacity: 0,
                            scale: 0.8
                        });
                    }
                });

                isInitialized = true;
            }

            function refreshMotionPaths() {
                if (!isInitialized) return;

                const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

                ScrollTrigger.getAll().forEach(trigger => trigger.kill());

                const vlak = document.getElementById('vlak');
                if (vlak) {
                    gsap.killTweensOf(vlak);
                }

                setTimeout(() => {
                    initTrainAnimation();

                    requestAnimationFrame(() => {
                        window.scrollTo(0, currentScroll);
                        ScrollTrigger.refresh();
                    });
                }, 50);
            }

            let resizeTimer;
            window.addEventListener('resize', () => {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(() => {
                    ScrollTrigger.getAll().forEach(trigger => trigger.kill());
                    gsap.killTweensOf('#vlak');
                    initTrainAnimation();
                }, 250);
            });

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', initTrainAnimation);
            } else {
                initTrainAnimation();
            }

            window.refreshMotionPaths = refreshMotionPaths;
            window.initTrainAnimation = initTrainAnimation;
        })();
    </script>
<?php endif; ?>
<script>
    (function() {
        const toggleBtn = document.getElementById('toggleBtn-<?= $block_id ?>');
        if (!toggleBtn) return;

        const polaroids = document.getElementById('polaroids-<?= $block_id ?>');
        const arrow = document.getElementById('arrow-up-<?= $block_id ?>');

        toggleBtn.addEventListener('click', () => {
            const isOpen = polaroids.style.opacity === '1';

            if (isOpen) {
                polaroids.style.opacity = '0';
                polaroids.style.maxHeight = '0';
                polaroids.style.transform = 'translateY(-20px)';
                arrow.style.transition = 'transform 0.3s ease';
                arrow.style.transform = 'rotate(0deg)';

                setTimeout(() => {
                    polaroids.classList.add('hidden');
                    polaroids.classList.remove('flex');

                    if (typeof window.refreshMotionPaths === 'function') {
                        window.refreshMotionPaths();
                    } else if (typeof ScrollTrigger !== 'undefined') {
                        ScrollTrigger.refresh();
                    }
                }, 650);
            } else {
                polaroids.classList.remove('hidden');
                polaroids.classList.add('flex');

                void polaroids.offsetHeight;

                polaroids.style.opacity = '1';
                polaroids.style.maxHeight = '2000px';
                polaroids.style.transform = 'translateY(0)';
                arrow.style.transition = 'transform 0.3s ease';
                arrow.style.transform = 'rotate(180deg)';

                setTimeout(() => {
                    if (typeof window.refreshMotionPaths === 'function') {
                        window.refreshMotionPaths();
                    } else if (typeof ScrollTrigger !== 'undefined') {
                        ScrollTrigger.refresh();
                    }
                }, 650);
            }
        });
    })();
</script>
<style>
    #polaroids-<?= $block_id ?> {
        transition: opacity 0.7s ease-in-out, max-height 0.7s ease-in-out;
    }
</style>