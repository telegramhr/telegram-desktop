<?php
$native_path = $native_path ?? get_stylesheet_directory_uri() . '/templates/native/zona-prvenstva';
?>
<div class='w-full relative h-[395px] md:h-[700px] overflow-hidden '>
    <img class='w-full h-full absolute bg-center object-cover opacity-50 z-[-10]' src="<?= $native_path; ?>/assets/images/hero-bg.webp" alt="">
        <img class='w-full h-full absolute bg-center mix-blend-hard-light opacity-35 object-cover z-[-10]' src="<?= $native_path; ?>/assets/images/hero-shadow.webp" alt="">

    <div class='max-w-[714px] w-full mx-auto px-6 md:px-0 h-full flex flex-col justify-center gap-7 md:gap-15'>
        <img class='mx-auto w-full max-w-[95px] md:max-w-[200px]' src="<?php echo $native_path; ?>/assets/images/telegram_logo_white.svg" alt="Telegram logo">
        <div class='flex flex-col gap-6 text-center'>
            <h1 class='font-inter text-[58px] md:text-[120px] leading-[105%] font-bold italic uppercase text-white'>Zona prvenstva</h1>
            <p class='text-[16px] leading-[22px] md:leading-[100%] md:text-[22px] text-white'>Sve utakmice. Sve analize. Centralni hub svjetskog prvenstva.</p>
        </div>
    </div>
</div>