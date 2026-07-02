<?php
$native_path = $native_path ?? get_stylesheet_directory_uri() . '/templates/native/zona-prvenstva';
require_once __DIR__ . '/../inc/standings.php';
$zp_groups = zp_get_wc_standings();
?>
<div class='w-full overflow-hidden'>
    <div class='relative max-w-[1312px] mx-auto w-full flex flex-col gap-5 md:gap-15 px-6 pt-9 md:pt-20'>
        <div class='flex flex-col md:flex-row gap-11 md:justify-between md:items-center'>
            <div class='flex flex-col gap-[22px] text-center md:text-left'>
                <h2 class='font-geist font-extrabold text-[22px] leading-7 md:text-[40px] md:leading-[52px] tracking-[-1%]'>Prati live rezultate po skupinama</h2>
            </div>
            <div class='flex flex-row gap-2 md:gap-3 justify-center items-center'>
                <button type='button' class='cursor-pointer js-table-prev w-9 h-9 md:w-10 md:h-10 rounded-full flex items-center justify-center bg-white text-[#142610] border border-white transition-colors disabled:bg-transparent disabled:text-white' aria-label='Prethodna'>
                    <svg width='18' height='18' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg' aria-hidden='true'>
                        <path d='M19 12H5M5 12L12 19M5 12L12 5' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' />
                    </svg>
                </button>
                <button type='button' class='cursor-pointer js-table-next w-9 h-9 md:w-10 md:h-10 rounded-full flex items-center justify-center bg-white text-[#142610] border border-white transition-colors disabled:bg-transparent disabled:text-white' aria-label='Sljedeća'>
                    <svg width='18' height='18' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg' aria-hidden='true'>
                        <path d='M5 12H19M19 12L12 5M19 12L12 19' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' />
                    </svg>
                </button>
            </div>
        </div>
        <?php if (empty($zp_groups)) : ?>
            <p class='font-inter text-[16px] text-[#AAAAAA]'>Tablice trenutno nisu dostupne.</p>
        <?php else : ?>
            <div class='js-table-carousel'>
                <?php foreach ($zp_groups as $group) : ?>
                    <div class='carousel-cell w-[385px] max-w-full mr-7 md:mr-5 bg-[#1B3218] flex flex-col gap-6 p-6 rounded-xl'>
                        <span class='font-inter font-bold text-[11px] uppercase'><?= $group['name']; ?></span>
                        <div class='flex flex-row justify-between items-center font-inter text-[14px] leading-5 text-[#AAAAAA]'>
                            <div class='flex flex-row gap-[14px] text-[12px] '>
                                <span>#</span>
                                <span>Reprezentacija</span>
                            </div>
                            <span>B</span>

                        </div>
                        <div class='flex flex-col gap-6'>
                            <?php foreach ($group['table'] as $i => $row) : ?>
                                <div class='flex flex-row justify-between items-center gap-3'>
                                    <div class='flex flex-row gap-[16px] font-inter text-[14px] leading-5'>
                                        <?php /* <span><?= esc_html($row['position']); ?></span> */ ?>
                                        <span><?= $i + 1; ?></span>
                                        <span class='text-[20px] leading-6'><?= zp_team_label($row['team']); ?></span>
                                    </div>
                                    <span class='font-inter text-[14px] leading-5'><?= esc_html($row['points']); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <div class='hidden md:flex flex-row gap-3 items-center mt-[-4px]'>
            <span class='text-[#9A9A9A]'>Powered by</span>
            <img class='h-[16px]' src="<?= $native_path; ?>/assets/images/supersport-white.webp" alt="Supersport logo">
        </div>
    </div>
   
</div>