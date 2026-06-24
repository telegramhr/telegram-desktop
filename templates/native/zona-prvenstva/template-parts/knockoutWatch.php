<?php
$native_path = $native_path ?? get_stylesheet_directory_uri() . '/templates/native/zona-prvenstva';

$knockout_cards = [
    [
        'image' => 'https://images.telegram.hr/10yCGXIEocbP95MCo6VTG11NsQdKrJ-Tq_5EbPZEUqE/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvYmloLTEuanBn.webp',
        'title' => 'Što nas čeka 14. dana Svjetskog prvenstva? BiH hvata slamku spasa protiv Katara kao i Češka protiv Meksika',
        'text'  => 'Najava, TV prijenos, ključni detalji',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/sto-nas-ceka-14-dana-svjetskog-prvenstva-bih-hvata-slamku-spasa-protiv-katara-kao-i-ceska-protiv-meksika/',
    ],
    [
        'image' => 'https://www.telegram.hr/wp-content/uploads/2026/06/deniz-undav-2.jpg',
        'title' => 'Njemačka je uredna i sofisticirana, a on je sve suprotno. Upravo zato joj je trebao',
        'text'  => 'Deniz Undav otključao je Nagelsmannov napad',
        'link'  => 'https://www.telegram.hr/telesport/analize/njemacka-je-uredna-i-sofisticirana-a-on-je-sve-suprotno-upravo-zato-joj-je-trebao/',
    ],
    [
        'image' => 'https://www.telegram.hr/wp-content/uploads/2026/06/bouaddi-4.jpg',
        'title' => 'Maroko je odličan i sanja velike snove. Čemu zapravo duguje svoj nogometni uspon?',
        'text'  => 'Oni su mladi, nabrijani, hrabri i prgavi; može li bolje od toga?',
        'link'  => 'https://www.telegram.hr/telesport/price-telesport/maroko-je-odlican-i-sanja-velike-snove-cemu-zapravo-duguje-svoj-nogometni-uspon/',
    ],
    [
        'image' => 'https://images.telegram.hr/UKL5rXmeyNSQ-GTX6325jA6y-FDCG89PaBza3SArMGQ/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYva2FuYWRhLTItZTE3ODE4NTM0MjU2MzguanBn.webp',
        'title' => 'Uživo: Deveti dan Svjetskog prvenstva. Kanada deklasirala Katar, Meksikanci izborili prolaz u knockout fazu',
        'text'  => 'Pratimo najvažnije događaje',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/uzivo-deveti-dan-svjetskog-prvenstva-kanada-deklasirala-katar-meksikanci-izborili-prolaz-u-knockout-fazu/',
    ],
    [
        'image' => 'https://images.telegram.hr/o43Rfy-2tee6ytKMCbfoIA7TqT-sbXnp4VdReiwB6O0/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvaXNtYWVsLWtvbmUtZTE3ODE4NTQ2NzE4MzQuanBn.webp',
        'title' => 'Teška ozljeda obilježila dvoboj SP-a: Kanadski veznjak iznesen na nosilima',
        'text'  => 'Unatoč teškom trenutku, Koné je pokazao veliku gestu prema navijačima i mahnuo publici',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/teska-ozljeda-obiljezila-dvoboj-sp-a-kanadski-veznjak-iznesen-na-nosilima/',
    ],
    [
        'image' => 'https://images.telegram.hr/YevsMMbnVoKKVYhKOYpTx9qDcEb6Ca30EqJCotStllQ/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvbHVpcy1yb21vLW1la3Npa28tZTE3ODE4NTA5OTc5MTQuanBn.webp',
        'title' => 'Meksiko pobjedom protiv Južne Koreje osigurao prolazak u knockout fazu SP-a. Pogledajte gol za veliko slavlje',
        'text'  => 'Luis Romo postao je heroj domaćina',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/meksiko-pobjedom-protiv-juzne-koreje-osigurao-prolazak-u-knockout-fazu-sp-a-pogledajte-gol-za-veliko-slavlje/',
    ],
    [
        'image' => 'https://images.telegram.hr/aqXgcB26u00CDLnaE0abjQgdfPLqavCq5hVmuLvn_yA/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYva2FuYWRhLWUxNzgxODQ5ODMyNjUzLmpwZw.webp',
        'title' => 'Domaćin SP-a potopio Katar i srušio nekoliko rekorda, susret obilježila i teška ozljeda kanadskog igrača',
        'text'  => 'U visokoj pobjedi sudjelovao je i Hajdukovog Niko Sigur',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/domacin-sp-a-potopio-katar-i-srusio-nekoliko-rekorda-susret-obiljezila-i-teska-ozljeda-kanadskog-igraca/',
    ],
    [
        'image' => 'https://images.telegram.hr/FhomCFMgnERfsypBXEn1pBhUMg46gj-2N4X6eeRJZYg/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvYXltZW4taHVzc2Vpbi0yLmpwZw.webp',
        'title' => 'Heroj dana: Aymen Hussein',
        'text'  => 'Aymen Hussein: Priča iza tragičnog mundijalskog junaka',
        'link'  => 'https://www.telegram.hr/telesport/price-telesport/heroj-dana-al-qaeda-mu-je-ubila-oca-isil-oteo-brata-a-on-je-zabio-i-gol-i-autogol/',
    ],
    [
        'image' => 'https://images.telegram.hr/EfERVEQpEA6Qh0rRYAbUbai7-44UQ0ooTc7F6LTywQU/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvdGhvbWFzLXR1Y2hlbC0xLmpwZw.webp',
        'title' => 'Tuchel je nekoliko zvijezda ostavio kod kuće. Engleskoj to povećava šanse za uspjeh',
        'text'  => 'Izbornik je donio tešku, ali ispravnu odluku',
        'link'  => 'https://www.telegram.hr/telesport/analize/tuchel-je-nekoliko-zvijezda-ostavio-kod-kuce-engleskoj-to-povecava-sanse-za-uspjeh/',
    ],
    [
        'image' => 'https://www.telegram.hr/wp-content/uploads/2026/06/yan-diomande-1.jpg',
        'title' => 'Yan Diomande na putu je da postane velika zvijezda. Protiv Ekvadora je bio impresivan',
        'text'  => 'Obala Bjelokosti dobila je utakmicu, a on je bio njeno prvo ime',
        'link'  => 'https://www.telegram.hr/telesport/analize/yan-diomande-na-putu-je-da-postane-velika-zvijezda-protiv-ekvadora-je-bio-impresivan/',
    ],
    [
        'image' => 'https://images.telegram.hr/JojELEC3AArSVYbm6wMcTDO0gWsfKHuRgH9mqRrpxgw/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvamFwYW4tbml6b3plbXNrYS5qcGc.webp',
        'title' => 'Fotka dana: Bogovi su pali na tjeme Daichija Kamade, a zatim u nizozemsku mrežu',
        'text'  => 'Japanac je zabio prilično neobičan gol glavom',
        'link'  => 'https://www.telegram.hr/telesport/price-telesport/fotka-dana-bogovi-su-pali-na-tjeme-daichija-kamade-a-zatim-u-nizozemsku-mrezu/',
    ],
    [
        'image' => 'https://images.telegram.hr/6ZEO9MPDvnXeEaje6e0xcV-PJIUfnp4Ktb8AVPXMKsw/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvc3ZpY2Fyc2thLTIuanBn.webp',
        'title' => 'Europljani nisu naročito impresivno krenuli na Svjetskom prvenstvu. Hoće li se potvrditi stara teorija?',
        'text'  => 'Tek tri pobjede od 10 pokušaja',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/europljani-nisu-narocito-impresivno-krenuli-na-svjetskom-prvenstvu-hoce-li-se-potvrditi-stara-teorija/',
    ],
    [
        'image' => 'https://images.telegram.hr/ZcmgsgbIGZIFCj3y8mIwivPUHVKgkJvSbv7VJeu794s/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvYWwtb3dhaXMuanBn.webp',
        'title' => 'Saudijski golman oborio je rekord ovog Mundijala, ali u recentnoj povijesti i dalje je bolji Livaković',
        'text'  => 'Čovjek je Urugvajcima poskidao sve',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/saudijski-golman-oborio-je-rekord-ovog-mundijala-ali-u-recentnoj-povijesti-i-dalje-je-bolji-livakovic/',
    ],
    [
        'image' => 'https://www.telegram.hr/wp-content/uploads/2026/06/wc-2.jpg',
        'title' => 'Tko kad igra? Raspored i rezultati Svjetskog prvenstva, utakmice hrvatske reprezentacije',
        'text'  => 'Sve o Mundijalu čitajte na Telesportu',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/tko-kad-igra-raspored-i-rezultati-svjetskog-prvenstva-utakmice-hrvatske-reprezentacije/',
    ],
    [
        'image' => 'https://images.telegram.hr/URrLHAzj_mymcOmHoxwYOV6gVqQ-7uffZ7X1fI5HnPU/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvemVsZW5vcnRza2EtcmVwdWJsaWthLXNwYW5qb2xza2EuanBn.webp',
        'title' => 'Traži se bilo kakav pobjednik: peti dan SP-a obilježili su neriješeni rezultati, ovo nije viđeno 68 godina',
        'text'  => 'Dan bez slavljenika i poraženih',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/trazi-se-bilo-kakav-pobjednik-peti-dan-sp-a-obiljezili-su-nerijeseni-rezultati-ovo-nije-videno-68-godina/',
    ],
    [
        'image' => 'https://images.telegram.hr/dw61QvAsTqnTeQeckPsm5zQnSJog74AzJ-9QsHCfSPY/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvc2F1ZGlqc2thLWFyYWJpamEtdXJ1Z3Zhai5qcGc.webp',
        'title' => 'Saudijska Arabija i Urugvaj su remizirali u susretu koji su obilježila dva odbijanca',
        'text'  => 'Podsjeća na jednu utakmicu s prošlog Mundijala',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/saudijska-arabija-i-urugvaj-su-remizirali-u-susretu-koji-su-obiljezila-dva-odbijanca/',
    ],
    [
        'image' => 'https://images.telegram.hr/AcbWr4-l5nWrxdanMwvFneYl4Ih-sUlzvzuPL106PAc/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvYXNob3VyLWNvdXJ0b2lzLWJlbGdpamEtZWdpcGF0LmpwZw.webp',
        'title' => 'Ovo ne može dohvatiti ni sjajni Courtois. Pogledajte krasan gol kojim je Egipat poveo protiv Belgije',
        'text'  => 'Nova senzacija na pomolu?',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/ovo-ne-moze-dohvatiti-ni-sjajni-courtois-pogledajte-krasan-gol-kojim-je-egipat-poveo-protiv-belgije/',
    ],
    [
        'image' => 'https://images.telegram.hr/Ku_bTB-F2GLhRPv6lgig-pOvydoKR5vpQnj7PhUj4x4/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvc3BhbmpvbHNrYS16ZWxlbm9ydHNrYS1yZXB1Ymxpa2EuanBn.webp',
        'title' => 'Senzacija na Svjetskom prvenstvu, debitant šokirao Španjolsku koja nije uspjela doći do pobjede',
        'text'  => 'Neočekivan rasplet utakmice',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/senzacija-na-svjetskom-prvenstvu-debitant-sokirao-spanjolsku-koja-nije-uspjela-doci-do-pobjede/',
    ],
    [
        'image' => 'https://images.telegram.hr/hyFOd_Ltw0CEVevxudwFUWYi535aGUA-bBE75Pw6_Vo/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvbGV0ZXhpZXItaS1jYWljZWRvLmpwZw.webp',
        'title' => 'Ovo nije loše. Ekvadorac postao prva žrtva pravila protiv izležavanja na travnjaku, ali nije mu se to svidjelo',
        'text'  => 'Sudac ga je poslao van igre na minutu',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/ovo-nije-lose-ekvadorac-postao-prva-zrtva-pravila-protiv-izlezavanja-na-travnjaku-ali-nije-mu-se-to-svidjelo/',
    ],
    [
        'image' => 'https://images.telegram.hr/FH22vnrtAYHXFtwfXpdrukZ8t4y15BXsemA14CB8IuM/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvb2JhbGEtYmplbG9rb3N0aS1la3ZhZG9yLWUxNzgxNTA0NDc4OTcyLmpwZw.webp',
        'title' => 'Prekinut veliki ekvadorski niz bez poraza. Pogledajte kako je zvijezda Obale Bjelokosti riješila susret u 90. minuti',
        'text'  => 'Afrička zemlja stigla je do važne pobjede na otvaranju',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/prekinut-veliki-ekvadorski-niz-bez-poraza-pogledajte-kako-je-zvijezda-obale-bjelokosti-rijesila-susret-u-90-minuti/',
    ],

];
?>
<div id='knockout-watch' class='w-full bg-[#1B3218] text-white pt-10 pb-8 md:py-15'>
    <div class='max-w-[1312px] w-full mx-auto px-6 flex flex-col gap-13 md:gap-8'>

        <div class='flex flex-col w-full max-w-[600px] md:mx-auto gap-[22px] text-left md:text-center'>
            <h2 class='font-geist font-extrabold text-[24px] leading-7 md:text-[32px] md:leading-10 tracking-[-1%]'>Knockout Watch</h2>
            <p class='font-geist text-[16px] md:text-[18px]'>Telesportovi novinari nakon svake utakmice analiziraju tko prolazi dalje, tko ispada i koje su mogući raspleti skupina u borbi za iduću fazu.</p>
        </div>
        <div class='js-knockout-wrap flex flex-col gap-2'>
            <div class='hidden md:flex flex-row gap-2 md:gap-3 justify-end items-center'>
                <button type='button' class='cursor-pointer js-knockout-prev w-5 h-5 md:w-8 md:h-8 rounded-full flex items-center justify-center bg-white text-[#142610] border border-white transition-colors disabled:bg-transparent disabled:text-white' aria-label='Prethodna'>
                    <svg width='18' height='18' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg' aria-hidden='true'>
                        <path d='M19 12H5M5 12L12 19M5 12L12 5' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' />
                    </svg>
                </button>
                <button type='button' class='cursor-pointer js-knockout-next w-5 h-5 md:w-8 md:h-8 rounded-full flex items-center justify-center bg-white text-[#142610] border border-white transition-colors disabled:bg-transparent disabled:text-white' aria-label='Sljedeća'>
                    <svg width='18' height='18' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg' aria-hidden='true'>
                        <path d='M5 12H19M19 12L12 5M19 12L12 19' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' />
                    </svg>
                </button>
            </div>

            <div class='js-knockout-carousel'>
                <?php foreach ($knockout_cards as $card) : ?>
                    <a href="<?php echo esc_url($card['link']); ?>" class='carousel-cell w-[281px] md:w-[317px] max-w-full mr-[21px] md:mr-[14px] flex flex-col gap-6 cursor-pointer group'>
                        <img class='w-full aspect-[1.39] md:aspect-[1.56] object-cover' src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
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