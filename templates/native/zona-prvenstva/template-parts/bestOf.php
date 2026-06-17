<?php
$native_path = $native_path ?? get_stylesheet_directory_uri() . '/templates/native/zona-prvenstva';
$bestOf_cards =[ [
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
    ]   
];
?>

<div id='best-of' class='w-full pt-14 pb-10 md:pt-15 md:pb-20 text-white'>
    <div class='max-w-[1312px] w-full mx-auto px-6 flex flex-col gap-9 md:gap-15'>
        <div class='flex flex-col text-center gap-[22px] max-w-[600px] mx-auto'>
            <h2 class='font-geist font-extrabold text-[24px] leading-7 md:text-[32px] md:leading-10 tracking-[-1%]'>“Best of” utakmica Hrvatske nogometne reperezentacije</h2>
            <p class='font-geist md:hidden text-[16px] md:text-[18px]'>“Best of” utakmica Hrvatske nogometne reperezentacije</p>
        </div>
        <div class='w-full flex flex-col md:flex-row gap-10 md:gap-[14px] justify-center'>
            <?php foreach ($bestOf_cards as $card) : ?>
                <a href="<?php echo esc_url($card['link']); ?>" class=' w-full md:w-[317px] max-w-full flex flex-col gap-6 cursor-pointer group'>
                    <img class='w-full aspect-[1.77] md:aspect-[1.56] object-cover' src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>">
                    <div class='flex flex-col gap-[18px]'>
                        <h3 class='font-geist text-[20px] leading-[26px] font-semibold group-hover:underline'><?php echo esc_html($card['title']); ?></h3>
                        <p class='font-geist text-[16px] leading-[22px]'><?php echo esc_html($card['text']); ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>