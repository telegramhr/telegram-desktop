<?php
$native_path = $native_path ?? get_stylesheet_directory_uri() . '/templates/native/zona-prvenstva';
require_once __DIR__ . '/../inc/standings.php';

$player = get_field('player_of_day', 'option');
$player_image = $player['image'] ?? null;
$player_image_url = $player_image['url'] ?? $native_path . '/assets/images/kane.jpg';
$player_image_caption = $player_image['caption'] ?? 'Reuters, Claudia Greco, Guliver';
$player_name = $player['name'] ?? 'Harry Kane';
$player_country = $player['country'] ?? 'England';
$player_date = $player['date'] ?? '02.07.2026.';
?>
<div id='player-of-the-day' class='w-full pt-10 pb-14 md:py-20 text-white'>
    <div class='max-w-[1307px] w-full mx-auto px-6 md:px-0 flex flex-col gap-8 '>
        <div class='flex flex-col gap-4 md:gap-[22px] max-w-[260px] mx-auto md:max-w-none text-center'>
            <h2 class='font-geist font-extrabold text-[24px] leading-7 md:text-[32px] md:leading-10 tracking-[-1%]'>
                Player of the day</h2>
            <p class='font-geist text-[16px] md:text-[18px]'>Posjeti naše društvene mreže i glasaj za najboljeg igrača
                dana</p>
        </div>
        <div
            class='max-w-[870px] md:h-[460px] bg-playerofday rounded-2xl w-full mx-auto flex flex-col md:flex-row overflow-hidden'>
            <figure class='relative w-full md:max-w-[380px] aspect-[1.64] md:aspect-auto md:h-full m-0'>
                <img class='w-full h-full object-cover'
                    src="<?= esc_url($player_image_url); ?>"
                    alt="Player of the day" loading="lazy" decoding="async">
                <div class='absolute inset-0 bg-[linear-gradient(90deg,rgba(0,0,0,0)_60%,#142610_100%)]'></div>
                <?php if (!empty($player_image_caption)) : ?>
                <figcaption
                    class='absolute bottom-0 left-2 font-geist text-[10px] md:text-[11px] leading-none text-white/80 bg-black/40 px-2 py-1 rounded'>
                    <?= esc_html($player_image_caption); ?>
                </figcaption>
                <?php endif; ?>
            </figure>
            <div class='py-7 md:py-15 px-5 md:px-13 flex flex-col gap-6 md:gap-7 justify-center md:justify-items-start'>
                <div
                    class='flex flex-col gap-3 md:gap-7 justify-center w-full max-w-[220px] md:max-w-none mx-auto md:mx-0 text-center md:text-left'>
                    <span
                        class='font-geist font-bold text-[12px] md:text-[16px] px-11 md:px-3 py-[6px] bg-[#3A7D28] rounded-md w-fit inline-flex items-center gap-2 mx-auto md:mx-0'>
                        <svg width='14' height='14' viewBox='0 0 24 24' fill='#FFC107'
                            xmlns='http://www.w3.org/2000/svg' aria-hidden='true'>
                            <path
                                d='M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z' />
                        </svg>
                        Player of the day
                    </span>
                    <span
                        class='font-geist text-[22px] md:text-[44px] md:leading-[46px] leading-[26px] font-extrabold'><?= esc_html($player_name); ?></span>
                    <p class='font-inter text-[14px] md:text-[20px] md:leading-[30px]'>
                        <?php echo zp_team_label($player_country); ?></p>
                    <p
                        class='font-geist text-[14px] md:text-[20px] md:leading-[30px] leading-3 text-[#AAAAAA] inline-flex items-center gap-2 justify-center md:justify-start'>
                        <svg class='w-5 h-5 md:w-6 md:h-6 shrink-0' viewBox='0 0 24 24' fill='none'
                            stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'
                            xmlns='http://www.w3.org/2000/svg' aria-hidden='true'>
                            <rect x='3' y='4' width='18' height='18' rx='2' />
                            <path d='M16 2v4M8 2v4M3 10h18' />
                        </svg>
                        <?= esc_html($player_date); ?>
                    </p>
                </div>
                <a href='https://www.instagram.com/telegram.hr/' target='_blank' rel='noopener noreferrer'
                    class='cursor-pointer font-geist font-medium text-[16px] leading-6 bg-white text-black p-2 md:py-3 md:px-7 flex flex-row items-center gap-1 md:gap-2 rounded-xl justify-center'>
                    Glasaj za sutrašnjeg pobjednika
                    <svg width='18' height='18' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2'
                        stroke-linecap='round' stroke-linejoin='round' xmlns='http://www.w3.org/2000/svg'
                        aria-hidden='true'>
                        <path d='M5 12H19M19 12L12 5M19 12L12 19' />
                    </svg>
                </a>
                <div class='flex flex-row gap-3 justify-center md:justify-start items-center mt-[-4px]'>
                    <span class='text-[#9A9A9A]'>Powered by</span>
                    <img class='h-[16px]' src="<?= $native_path; ?>/assets/images/supersport-white.webp"
                        alt="Supersport logo">
                </div>
            </div>
        </div>
    </div>
</div>