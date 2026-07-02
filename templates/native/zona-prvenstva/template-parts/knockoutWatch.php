<?php
$native_path = $native_path ?? get_stylesheet_directory_uri() . '/templates/native/zona-prvenstva';

$knockout_cards = [
    [
        'image' => 'https://images.telegram.hr/9izOk-0YtBPZm916esWWizY4AF_tCbDCTQCS9UIzgc8/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvYmloLW5hdmlqYWNpLXNwLmpwZw.webp',
        'title' => 'Uživo: 22. dan Svjetskog prvenstva. Večeras igra Hrvatska, stižu reakcije na ispadanje Bosne i Hercegovine',
        'text'  => 'Pratimo najvažnije događaje',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/uzivo-22-je-dan-svjetskog-prvenstva-veceras-igra-hrvatska-stizu-reakcije-na-ispadanje-bosne-i-hercegovine/',
    ],
    [
        'image' => 'https://images.telegram.hr/Dwb8KPQmydp5XmduuIT6XAK7cUrb8vtN0mN4pHewmWA/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvbGFtaW5lLXlhbWFsLXNwYW5qb2xza2EtbWlrZWwtb3lhcnphYmFsLmpwZw.webp',
        'title' => 'Tko igra prije i poslije Vatrenih? Yamal želi zablistati, a samo najzagriženiji pratit će utakmicu u 5 ujutro',
        'text'  => 'Najava, TV prijenos, ključni detalji',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/tko-igra-prije-i-poslije-vatrenih-yamal-zeli-zablistati-a-samo-najzagrizeniji-pratit-ce-utakmicu-u-5-ujutro/',
    ],
    [
        'image' => 'https://www.telegram.hr/telesport/price-telesport/fotka-dana-nije-ovo-bio-dan-za-sevdah-trenutak-odluke-za-bosnu-i-hercegovinu/',
        'title' => 'Fotka dana: Nije ovo bio dan za sevdah. Trenutak odluke za Bosnu i Hercegovinu',
        'text'  => 'Malik Tillman izravno iz slobodnog udarca zabija za 2-0',
        'link'  => 'https://www.telegram.hr/telesport/price-telesport/fotka-dana-nije-ovo-bio-dan-za-sevdah-trenutak-odluke-za-bosnu-i-hercegovinu/',
    ],
    [
        'image' => 'https://images.telegram.hr/0cZ2BKvn93sNcrUXnFPK506JpwKytbS3As50XK-jOuk/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvcm9tZWx1LWx1a2FrdS0xLmpwZw.webp',
        'title' => 'Lukaku je najpodcjenjeniji napadač svoje generacije. Belgija ni sad ne može bez njega',
        'text'  => "I ovakav 'polovičan' i dalje je najbolje rješenje u napadu",
        'link'  => 'https://www.telegram.hr/telesport/price-telesport/lukaku-je-najpodcjenjeniji-napadac-svoje-generacije-belgija-ni-sad-ne-moze-bez-njega/',
    ],
    [
        'image' => 'https://images.telegram.hr/lTj1217FkwubJMVVaqtRH4RLZFJQES99AogDF1Awag8/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvYm9zbmEtc2xhdmkuanBn.webp',
        'title' => 'Uživo: 21. dan Svjetskog prvenstva. Meksiko prošao dalje, večeras igra Bosna i Hercegovina',
        'text'  => 'Pratimo najvažnije događaje',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/uzivo-21-dan-svjetskog-prvenstva-meksiko-prosao-dalje-veceras-igra-bosna-i-hercegovina/',
    ],
    [
        'image' => 'https://images.telegram.hr/DdHlpC194YRLuVVOdrQpNxwy-yCgTfxVIoqt7wcgXY4/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvZ2lsYmVydG8tbW9yYS1tZWtzaWtvLmpwZw.webp',
        'title' => 'Meksički reprezentativac zaigrao protiv Ekvadora i stao uz bok legendarnom Peléu',
        'text'  => 'Počeo je od prve minute',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/meksicki-reprezentativac-zaigrao-protiv-ekvadora-i-stao-uz-bok-legendarnom-peleu/',
    ],
    [
        'image' => 'https://images.telegram.hr/itv2YgNTpjqrbh5K1OAbG8lwDOJTyNdX1UhIZEnXxAQ/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvbWVrc2lrby5qcGc.webp',
        'title' => 'Meksiko prvi put nakon 1986. slavio u knockout fazi i prošao u osminu finala Svjetskog prvenstva',
        'text'  => 'Pogledajte golove',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/meksiko-prvi-put-nakon-1986-slavio-u-knockout-fazi-i-prosao-u-osminu-finala-svjetskog-prvenstva/',
    ],
    [
        'image' => 'https://images.telegram.hr/VCkMOuc3ONGKM4s5jXHr91ZK4kGpqdBcnz8bweBq_OA/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvbWJhcHBlLTMuanBn.webp',
        'title' => 'Fotka dana: Trenutak u kojem se Kylian Mbappé osjeća neuništivo i besmrtno',
        'text'  => 'Nemojmo ih samo prebrojavati, uživajmo u njegovim golovima',
        'link'  => 'https://www.telegram.hr/telesport/price-telesport/fotka-dana-trenutak-u-kojem-se-kylian-mbappe-osjeca-neunistivo-i-besmrtno/',
    ],
    [
        'image' => 'https://images.telegram.hr/dBW9VzqLqO1lJXy1eC-zxVSDvx80hkY0iY-I4bS-ukU/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvc2ViYXN0aWFuLWJlY2NhY2VjZS1la3ZhZG9yLmpwZw.webp',
        'title' => 'Ekvadorci poludjeli zbog meksičkih navijača koji su im ometali san, smatraju da je narušen fair-play',
        'text'  => 'Poslali su pritužbu organizatoru',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/ekvadorci-poludjeli-zbog-meksickih-navijaca-koji-su-im-ometali-san-smatraju-da-je-narusen-fair-play/',
    ],
    [
        'image' => 'https://images.telegram.hr/AS7ML7866hPucFRe5j6_7wORigG_zGdZt0GjwZ-pqoE/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvYm9uby15YXNzaW5lLXN1bW1lcnZpbGxlLW5pem96ZW1za2EtbWFyb2tvLmpwZw.webp',
        'title' => 'Nizozemac je pucao jako i pod prečku, a golman mu se narugao. Je li Bounou pokrenuo revoluciju branjenja penala?',
        'text'  => 'Marokanac je viralan',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/nizozemac-je-pucao-jako-i-pod-precku-a-golman-mu-se-narugao-je-li-bounou-pokrenuo-revoluciju-branjenja-penala/',
    ],
    [
        'image' => 'https://images.telegram.hr/Lk2-hQ05muPXyYMREupJh514fgVaD8Fxs5mAM6AVGgo/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvam9zaHVhLWtpbW1pY2gtbmplbWFja2EuanBn.webp',
        'title' => "Njemački kapetan nakon šokantnog ispadanja sa Svjetskog prvenstva: ‘Pogriješili smo i preuzimamo odgovornost’",
        'text'  => 'Preuzeo je odgovornost',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/njemacki-kapetan-nakon-sokantnog-ispadanja-sa-svjetskog-prvenstva-pogrijesili-smo-i-preuzimamo-odgovornost/',
    ],
    [
        'image' => 'https://www.telegram.hr/wp-content/uploads/2026/06/njemacka-3.jpg',
        'title' => 'Kad sustav nije dovoljan: Zašto Njemačka nastavlja gubiti na svjetskim prvenstvima',
        'text'  => 'Elf je opet kapitulirao i jasno je da se mora dubinski mijenjati',
        'link'  => 'https://www.telegram.hr/telesport/price-telesport/kad-sustav-nije-dovoljan-zasto-njemacka-nastavlja-gubiti-na-svjetskim-prvenstvima/',
    ],
    [
        'image' => 'https://images.telegram.hr/GMhxMRJ1-KRP1xvIGl4NsIK9DQTixQF3G4JvFriv0a8/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvYWNocmFmLWhha2ltaS1tYXJva28uanBn.webp',
        'title' => 'Novo iznenađenje na Mundijalu, Maroko zabio u 91. minuti pa nakon raspucavanja izbacio Nizozemsku',
        'text'  => 'Pogledajte golove',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/novo-iznenadenje-na-mundijalu-maroko-zabio-u-91-minuti-pa-nakon-raspucavanja-izbacio-nizozemsku/',
    ],
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