<?php
$native_path = $native_path ?? get_stylesheet_directory_uri() . '/templates/native/zona-prvenstva';

$knockout_cards = [
    [
        'image' => $native_path . '/assets/images/modric.webp',
        'title' => 'Foto. Oduševljeni navijači dočekali reprezentativce u Alexandriji, Vatreni će trenirati u Biskupskoj gimnaziji',
        'text'  => 'Analiza i predikcije za svaku utakmicu.',
        'link'  => '#',
    ],
    [
        'image' => $native_path . '/assets/images/modric.webp',
        'title' => 'Foto. Oduševljeni navijači dočekali reprezentativce u Alexandriji, Vatreni će trenirati u Biskupskoj gimnaziji',
        'text'  => 'Analiza i predikcije za svaku utakmicu.',
        'link'  => '#',
    ],
    [
        'image' => $native_path . '/assets/images/modric.webp',
        'title' => 'Foto. Oduševljeni navijači dočekali reprezentativce u Alexandriji, Vatreni će trenirati u Biskupskoj gimnaziji',
        'text'  => 'Analiza i predikcije za svaku utakmicu.',
        'link'  => '#',
    ],
    [
        'image' => $native_path . '/assets/images/modric.webp',
        'title' => 'Foto. Oduševljeni navijači dočekali reprezentativce u Alexandriji, Vatreni će trenirati u Biskupskoj gimnaziji',
        'text'  => 'Analiza i predikcije za svaku utakmicu.',
        'link'  => '#',
    ],
];
?>
<div id='knockout-watch' class='w-full bg-[#1B3218] text-white pt-10 pb-8 md:py-15'>
    <div class='max-w-[1312px] w-full mx-auto px-6 flex flex-col gap-13 md:gap-15'>

    <div class='flex flex-col w-full max-w-[600px] md:mx-auto gap-[22px] text-left md:text-center'>
        <h2 class='font-geist font-extrabold text-[24px] leading-7 md:text-[32px] md:leading-10 tracking-[-1%]'>Knockout Watch</h2>
        <p class='font-geist text-[16px] md:text-[18px]'>Telesportovi novinari nakon svake utakmice analiziraju tko prolazi dalje, tko ispada i koje su mogući raspleti skupina u borbi za iduću fazu.</p>
    </div>

    <div class='js-knockout-carousel'>
        <?php foreach ($knockout_cards as $card) : ?>
        <a href="<?php echo esc_url($card['link']); ?>" class='carousel-cell w-[281px] md:w-[317px] max-w-full mr-[21px] md:mr-[14px] flex flex-col gap-6 cursor-pointer group'>
            <img class='w-full aspect-[1.39] md:aspect-[1.56] object-cover' src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>">
            <div class='flex flex-col gap-[18px]'>
            <h3 class='font-geist text-[20px] leading-[26px] font-semibold group-hover:underline'><?php echo esc_html($card['title']); ?></h3>
            <p class='font-geist text-[16px] leading-[22px]'><?php echo esc_html($card['text']); ?></p>
            </div>
        </a>
        <?php endforeach; ?>
    </div>
    </div>
</div>