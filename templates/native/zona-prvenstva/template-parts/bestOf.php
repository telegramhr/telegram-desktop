<?php
$native_path = $native_path ?? get_stylesheet_directory_uri() . '/templates/native/zona-prvenstva';

$bestOf_cards = [
    [
        'image' => 'https://images.telegram.hr/9BRusWOVX7uRHYm7oxMSBAfFtULkO0il25dKGncUITk/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvaHJ2YXRza2EtZW5nbGVza2EtMS5qcGc.webp',
        'title' => 'Pogledajte još jednom sve golove i sažetke poraza Hrvatske od Engleza',
        'text'  => 'Spektakl u Arlingtonu',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/pogledajte-jos-jednom-sve-golove-i-sazetke-poraza-hrvatske-od-engleza/',
    ],
    [
        'image' => 'https://images.telegram.hr/Okhc0dd4AUXk7EWZZuxSgQ-_OR8MvT-dSZruq4CVZ9I/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvZW5nbGVza2EtaHJ2YXRza2Eta29ybmVyLWthbmUuanBn.webp',
        'title' => 'Fotka dana: Što je ovo bilo?',
        'text'  => 'Harry Kane, nepokriven i neometan, zabija za 2-1',
        'link'  => 'https://www.telegram.hr/telesport/price-telesport/fotka-dana-sto-je-ovo-bilo/',
    ],
    [
        'image' => 'https://images.telegram.hr/Vtucy1Qp48zTo7E-95_PcWBh9E2HYzpG9nMxVVYpwUc/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvZW5nbGVza2EtaHJ2YXRza2EtMy5qcGc.webp',
        'title' => 'Engleska je ugasila Vatrene i svojim intenzitetom ih pomela s terena',
        'text'  => 'Prvi dojam: A prvo poluvrijeme je toliko obećavalo...',
        'link'  => 'https://www.telegram.hr/telesport/price-telesport/engleska-je-ugasila-vatrene-i-svojim-intenzitetom-ih-pomela-s-terena/',
    ],
    [
        'image' => 'https://images.telegram.hr/qht1jMHFahc2N-vXqDIQ214eVi1cU5qvOIl8pYH6K6s/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvbHVrYS1tb2RyaWMtaHJ2YXRza2EtZW5nbGVza2EuanBn.webp',
        'title' => "Razočarani Modrić priznaje pogrešku: 'Penal je bio, nesmotreno sam ga zahvatio, a treći gol nas je dotukao'",
        'text'  => 'Težak dan za kapetana',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/razocarani-modric-priznaje-pogresku-penal-je-bio-nesmotreno-sam-ga-zahvatio-a-treci-gol-nas-je-dotukao/',
    ],
    [
        'link' => 'https://www.telegram.hr/telesport/na-prvu/gana-je-pobijedila-panamu-kako-to-utjece-za-hrvatsku-koja-je-sada-posljednja-u-skupini/',
        'title' => 'Gana je pobijedila Panamu. Kako to utječe za Hrvatsku koja je sada posljednja u skupini?',
        'text'  => 'Nema kalkulacija: Vatreni moraju po pobjede',
        'image'  => 'https://images.telegram.hr/4_KUekZOzYccEnS8UtMB6YCTyDCy_Juzgv6va9HaPXU/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvemxhdGtvLWRhbGljLWhydmF0c2thLXN2amV0c2tvLXBydmVuc3R2by0yMDI2LmpwZw.webp',
    ],
    [
        'image' => 'https://images.telegram.hr/yDK0KRmooPMFZCKfWmvjEBeitpv5_K_dQ7yfNCjpeII/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvcHhsLTE3MTIyMi05NzQ2NDM1Ny5qcGc.webp',
        'title' => 'Počelo je najveće Svjetsko prvenstvo u povijesti. Evo kada igra Hrvatska i kakav je put do finala',
        'text'  => 'Navijački paket iz snova s potpisanim originalnim dresom reprezentacije možete osvojiti do 21. lipnja',
        'link'  => 'https://www.telegram.hr/partneri/pocelo-je-najvece-svjetsko-prvenstvo-u-povijesti-evo-kada-igra-hrvatska-i-kakav-je-put-do-finala/',
    ],
    [
        'image' => 'https://images.telegram.hr/FYX-3j7mkRxFclZuYd9V4_zhfz2zeyNTnxuAsVqgIFI/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvYW50ZS1idWRpbWlyLTItZTE3ODE1MzEwOTI1NTIuanBn.webp',
        'title' => "Budimir fokusiran na dvoboj s Englezima: 'Nadam se da svojim pogotkom mogu donijeti reprezentaciji pobjede'",
        'text'  => 'Napadač Vatrenih pričao je na press konferenciji',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/budimir-fokusiran-na-dvoboj-s-englezima-nadam-se-da-svojim-pogotkom-mogu-donijeti-reprezentaciji-pobjede/',
    ],
    [
        'image' => 'https://images.telegram.hr/n4RsWgmW5bl_Qgp7V7MnSteyVCXiFywCIAArdYDU9N8/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvY2FsZXRhLWNhci1lMTc4MTUwODE3MjUxNS5qcGc.webp',
        'title' => "Duje Ćaleta-Car najavio dvoboj protiv Engleske: 'Bitno je da ne izgorimo od želje, moramo biti hladne glave'",
        'text'  => 'Smatra da Vatreni trebaju biti kompaktni',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/duje-caleta-car-najavio-dvoboj-protiv-engleske-bitno-je-da-ne-izgorimo-od-zelje-moramo-biti-hladne-glave/',
    ],
    [
        'image' => 'https://images.telegram.hr/6YxPPg_IIRRmlYk8vNKHD4C8lblR3V9y3xUSr9OCUhk/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvbHVrYS1zdWNpYy0yLWUxNzgxNDc0Nzc4MzQyLmpwZw.webp',
        'title' => "Luka Sučić posebno istaknuo jednog engleskog reprezentativca: 'Trebamo se paziti njega'",
        'text'  => 'Očekuje sjajnu atmosferu u Dallasu',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/luka-sucic-posebno-istaknuo-jednog-engleskog-reprezentativca-trebamo-se-paziti-njega/',
    ],
    [
        'image' => 'https://images.telegram.hr/BRDd6BNnjEPRPjx08K6gy2iPh66klobfnJxlmo-DuRY/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvY2xlbWVudC10dXJwaW4tam9za28tZ3ZhcmRpb2wtaHJ2YXRza2EuanBn.webp',
        'title' => 'Okršaj Hrvatske i Engleske pripao dobro poznatom Francuzu. Kada on sudi, Vatreni igraju sjajno',
        'text'  => 'FIFA angažirala elitno lice',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/okrsaj-hrvatske-i-engleske-pripao-dobro-poznatom-francuzu-kada-on-sudi-vatreni-igraju-sjajno/',
    ],
    [
        'image' => 'https://images.telegram.hr/wlfiB4DdkYo83ZQCABIAXGrGlb4ygzB_3Mh6-wSlvbQ/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDMvcHhsLTA4MDkyNS0xMzgwNzU3NTIuanBn.webp',
        'title' => 'Izbornik Dalić odabrao s kojim igračima otvara SP, Kramarić će svoju priliku protiv Engleza čekati s klupe?',
        'text'  => 'Petar Musa trebao bi započeti dvoboj od prve minute',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/izbornik-dalic-odabrao-s-kojim-igracima-otvara-sp-kramaric-ce-svoju-priliku-protiv-engleza-cekati-s-klupe/',
    ],
];
?>

<div id='best-of' class='w-full pt-14 pb-10 md:pt-15 md:pb-20 text-white'>
    <div class='max-w-[1312px] w-full mx-auto px-6 flex flex-col gap-9 md:gap-8'>
        <div class='flex flex-col text-center gap-[22px] max-w-[600px] mx-auto'>
            <h2 class='font-geist font-extrabold text-[24px] leading-7 md:text-[32px] md:leading-10 tracking-[-1%]'>“Best of” utakmica Hrvatske nogometne reperezentacije</h2>
        </div>
        <div class='js-bestof-wrap flex flex-col gap-2'>
            <div class='hidden md:flex flex-row gap-2 md:gap-3 justify-end items-center'>
                <button type='button' class='cursor-pointer js-bestof-prev w-5 h-5 md:w-8 md:h-8 rounded-full flex items-center justify-center bg-white text-[#142610] border border-white transition-colors disabled:bg-transparent disabled:text-white' aria-label='Prethodna'>
                    <svg width='18' height='18' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg' aria-hidden='true'>
                        <path d='M19 12H5M5 12L12 19M5 12L12 5' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' />
                    </svg>
                </button>
                <button type='button' class='cursor-pointer js-bestof-next w-5 h-5 md:w-8 md:h-8 rounded-full flex items-center justify-center bg-white text-[#142610] border border-white transition-colors disabled:bg-transparent disabled:text-white' aria-label='Sljedeća'>
                    <svg width='18' height='18' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg' aria-hidden='true'>
                        <path d='M5 12H19M19 12L12 5M19 12L12 19' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' />
                    </svg>
                </button>
            </div>
            <div class='js-bestof-carousel'>
                <?php foreach ($bestOf_cards as $card) : ?>
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
</div>