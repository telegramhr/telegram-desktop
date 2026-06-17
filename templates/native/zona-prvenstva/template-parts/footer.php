<?php
$native_path = $native_path ?? get_stylesheet_directory_uri() . '/templates/native/zona-prvenstva';

$zp_socials = [
    'Instagram' => 'https://www.instagram.com/telegram.hr/',
    'Facebook'  => 'https://www.facebook.com/Telegram.hr/',
    'Twitter'   => 'https://x.com/telegramhr',
    'Youtube'   => 'https://www.youtube.com/@TelegramhrVideo',
];
?>
<div class='w-full bg-[#121D17] md:pt-20'>
<div class='w-full bg-[#121D17] md:border-t md:border-[#E3E3E3]'>
    <div class='max-w-[1307px] w-full mx-auto px-6 flex flex-col md:flex-row gap-10 pt-8 pb-13  md:pt-18 md:pb-24 md:justify-between '>
        <div class='flex flex-col gap-4 md:gap-7 w-full max-w-[384px] mx-auto md:mx-0'>
            <a class='cursor-pointer' href="https://www.telegram.hr/" target="_blank" rel="noopener" class='inline-block'>
            <img class='w-full mx-auto md:mx-0 max-w-[136px] md:max-w-[200px]' src="<?php echo $native_path; ?>/assets/images/telegram_logo_white.svg" alt="Telegram logo">
            </a>
        </div>

        <div class='flex flex-row justify-between gap-6 md:gap-[105px] w-full max-w-[554px]'>
            <div class='flex flex-col gap-3 md:gap-4 font-geist text-[14px] leading-6 text-white'>
                <span class='font-bold'>Rubrike</span>
                <a href="#best-of" class='hover:underline'>Best of</a>
                <a href="#knockout-watch" class='hover:underline'>Knockout Watch</a>
                <a href="#player-of-the-day" class='hover:underline'>Player of the day</a>
            </div>

             <div class='flex flex-col gap-3 md:gap-4 font-geist text-[14px] leading-6 text-white'>
                <span class='font-bold'>Telegram</span>
                <a href="https://www.telegram.hr/vijesti/" target="_blank" rel="noopener" class='hover:underline'>Vijesti</a>
                <a href="https://www.telegram.hr/politika-kriminal/" target="_blank" rel="noopener" class='hover:underline'>Politika i kriminal</a>
                <a href="https://www.telegram.hr/komentari/" target="_blank" rel="noopener" class='hover:underline'>Komentari</a>
            </div>

             <div class='flex flex-col gap-3 md:gap-4 font-geist text-[14px] leading-6 text-white'>
                <span class='font-bold'>Social</span>
                <?php foreach ($zp_socials as $name => $url) : ?>
                <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener" class='inline-flex items-center gap-2 w-fit hover:underline'>
                    <?php echo esc_html($name); ?>
                    <svg class='w-4 h-4 shrink-0' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' xmlns='http://www.w3.org/2000/svg' aria-hidden='true'>
                        <path d='M5 12H19M19 12L12 5M19 12L12 19'/>
                    </svg>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
          
    </div>
</div>
</div>
<div class='w-full bg-white flex flex-row justify-between md:justify-center md:gap-5 px-6 py-5 md:py-4'>
    <p class='font-geist text-[14px] leading-6 text-[#666666]'>© 2026 Presshaus · Telegram.hr</p>
    <img class='w-[90px]' src="<?php echo $native_path; ?>/assets/images/supersport-red.webp" alt="Supersport logo">
</div>