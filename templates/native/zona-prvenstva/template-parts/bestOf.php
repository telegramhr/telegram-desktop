<?php
$native_path = $native_path ?? get_stylesheet_directory_uri() . '/templates/native/zona-prvenstva';

$bestOf_cards = [
    [
        'image' => 'https://www.telegram.hr/wp-content/uploads/2026/07/hrvatska-portugal-1.jpg',
        'title' => 'Hrvatska je mačka koja je potrošila svih svojih devet života. Je li stvarno zaslužila više?',
        'text'  => 'Prvi dojam: Šokantno ispadanje Vatrenih sa Svjetskog prvenstva',
        'link'  => 'https://www.telegram.hr/telesport/price-telesport/hrvatska-je-macka-koja-je-potrosila-svih-svojih-devet-zivota-je-li-stvarno-zasluzila-vise/',
    ],
    [
        'image' => 'https://images.telegram.hr/Pa8Pa5NHlnjeWsMdMC7gyjjw98l3Wtc0AVtt_c4AaPM/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvemxhdGtvLWRhbGljLTUuanBn.webp',
        'title' => "Dalić nakon ispadanja protiv Portugala: ‘Reći ću da je suđenje bilo jako loše za našu stranu’",
        'text'  => 'Prokomentirao je i svoju budućnost',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/dalic-nakon-ispadanja-protiv-portugala-reci-cu-da-je-sudenje-bilo-jako-lose-za-nasu-stranu/',
    ],
    [
        'image' => 'https://images.telegram.hr/u_rHNzwA0CDGm_PhurXbShmp1iggeHa7I2iEOY6CIOA/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvbWF0YW5vdmljLTMtZTE3ODMwNjA5MzEyMTUuanBn.webp',
        'title' => 'FIFA se oglasila o poništenom golu Joška Gvardiola. Objašnjenje razljutilo dio navijača',
        'text'  => 'O ovome će se još dugo pričati',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/fifa-se-oglasila-o-ponistenom-golu-joska-gvardiola-objasnjenje-razljutilo-dio-navijaca/',
    ],
    [
        'image' => 'https://images.telegram.hr/sOHEAF-KTYRBZfF6ssrSpdbwA8LPkuPKQNUE35nsnVw/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvdmxhc2ljLWUxNzgzMDY2ODEwNTQ4LmpwZw.webp',
        'title' => "Nikola Vlašić o skrivljenom penalu: 'Sudac mi je rekao da tu nema ničega, ali ga je poslije pozvao VAR'",
        'text'  => 'Hrvatski reprezentativac smatra da nije bilo elemenata za najstrožu kaznu',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/nikola-vlasic-o-skrivljenom-penalu-sudac-mi-je-rekao-da-tu-nema-nicega-ali-ga-je-poslije-pozvao-var/',
    ],
    [
        'image' => 'https://images.telegram.hr/oUXDBch4eyNQGKzJiEg2xuDNHhZIh_gCNKU5HUANLc8/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvcGFzYWxpYy5qcGc.webp',
        'title' => 'Video. Još jednom pogledajte sve golove, šanse, poništene golove i sudačke odluke u ispadanju Hrvatske',
        'text'  => 'Najvažniji trenuci nevjerojatne utakmice',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/video-jos-jednom-pogledajte-sve-golove-sanse-ponistene-golove-i-sudacke-odluke-u-ispadanju-hrvatske/',
    ],
    [
        'image' => 'https://images.telegram.hr/v1VXzpjbHSFxE2dyoJ0SSQCfMMxoL1PDGqWAdQHDql4/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvbHVrYS1tb2RyaWMuanBn.webp',
        'title' => 'Luka Modrić vjerojatno je odigrao zadnju utakmicu za Hrvatsku. Tko bi još mogao otići?',
        'text'  => 'Zlatko Dalić nije htio komentirati budućnost',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/luka-modric-vjerojatno-je-odigrao-zadnju-utakmicu-za-hrvatsku-tko-bi-jos-mogao-otici/',
    ],
    [
        'image' => 'https://images.telegram.hr/qWjON5uoqNO6wgyNQfQl0Bm2JZH2gkBkZ5ZyuRl5QBI/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvaXZhbi1wZXJpc2ljLmpwZw.webp',
        'title' => 'Gol vrijedan vodstva, ali i rekorda. Pogledajte kako je Perišić bacio Portugalce u očaj i nadmašio Šukera',
        'text'  => 'Nevjerojatan i s 37 godina',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/gol-vrijedan-vodstva-ali-i-rekorda-pogledajte-kako-je-perisic-bacio-portugalce-u-ocaj-i-nadmasio-sukera/',
    ],
    [
        'image' => 'https://images.telegram.hr/LC29gHaUTu-sC2dGAuB7nS-_W3FoDST8-2wOmdFGONk/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvaHJ2YXRza2EtcG9ydHVnYWwtZ3BiLmpwZw.webp',
        'title' => 'General prije bitke: Portugal ima novu središnju figuru, a Hrvatska je mora ograničiti',
        'text'  => 'Očekivani sastavi, ključ utakmice i prognoza',
        'link'  => 'https://www.telegram.hr/telesport/price-telesport/general-prije-bitke-portugal-ima-novu-sredisnju-figuru-a-hrvatska-je-mora-ograniciti/',
    ],
    [
        'image' => 'https://images.telegram.hr/AKIoJijDtdlC5rOrmZrB1gzdeB3qYy61IpIHYfpM2v4/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvcGVyaXNpYy1ocnZhdHNrYS5qcGc.webp',
        'title' => 'Hrvatska će učiniti sve za 10 godina iščekivanu osvetu, ali Portugal je favorit. Što očekivati od utakmice?',
        'text'  => 'TV prijenos, ključni detalji, moguće postave',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/hrvatska-ce-uciniti-sve-za-10-godina-iscekivanu-osvetu-ali-portugal-je-favorit-sto-ocekivati-od-utakmice/',
    ],
    [
        'image' => 'https://images.telegram.hr/85aETNlkp9dY13_rd-ePWOn-j10fd6Gl7Gk9suhUMg8/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvaXZhbi1wZXJpc2ljLWhydmF0c2thLWx1a2EtbW9kcmljLmpwZw.webp',
        'title' => 'Kako poraz BiH utječe na Vatrene? Hrvatska doznala potencijalne suparnike u četvrtfinalu Svjetskog prvenstva',
        'text'  => 'Ovako izgleda put do polufinala',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/kako-poraz-bih-utjece-na-vatrene-hrvatska-doznala-potencijalne-suparnike-u-cetvrtfinalu-svjetskog-prvenstva/',
    ],
    [
        'image' => 'https://images.telegram.hr/WQgoMS3BmAB9DJUASq2Z5YLy4-hURAZ_Fpthsewx9IY/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvcG9uZ3JhY2ljLmpwZw.webp',
        'title' => 'Mnogi ga kritiziraju, ali Dalić stoperu iznimno vjeruje. Sad je najavio šesnaestinu finala i Portugal',
        'text'  => 'Marin Pongračić stao je pred mikrofone',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/mnogi-ga-kritiziraju-ali-dalic-stoperu-iznimno-vjeruje-sad-je-najavio-sesnaestinu-finala-i-portugal/',
    ],
    [
        'image' => 'https://images.telegram.hr/IJwGX7HCfSBqNFtek5vqRjP9nIkdraYPI-_dZhHk5jY/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvbmlrb2xhLXZsYXNpYy5qcGc.webp',
        'title' => "Vlašić je bio junak Vatrenih protiv Gane, a sad najavljuje Portugal: 'I oni sigurno misle da smo mi jaki'",
        'text'  => 'Vatreni čekaju šesnaestinu finala',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/vlasic-je-bio-junak-vatrenih-protiv-gane-a-sad-najavljuje-portugal-i-oni-sigurno-misle-da-smo-mi-jaki/',
    ],
    [
        'image' => 'https://images.telegram.hr/h1bBy4MbFQg-txaXTRgLXg5gbr0G0rDKcaVL5VV-NLg/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvZGFsaWMtMy1lMTc4MTczNDM0MTgxNy5qcGc.webp',
        'title' => 'HRT doznao postavu koju će Dalić poslati na Portugal, izgleda da je Gvardiol ponovno na klupi',
        'text'  => 'Hrvatska traži osminu finala',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/hrt-doznao-postavu-koju-ce-dalic-poslati-na-portugal-izgleda-da-je-gvardiol-ponovno-na-klupi/ ',
    ],
    [
        'image' => 'https://images.telegram.hr/ib1M5mLwihV74MUAcpQEs4EUccWVcXe_Z7i8HamZvQ0/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvZXNwZW4tZXNrYXMuanBn.webp',
        'title' => 'Određen sudac koji će dijeliti pravdu između Hrvatske i Portugala. Vatrenima je u dobrom, a Dinamu u lošem sjećanju',
        'text'  => 'Sudio na Poljudu',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/odreden-sudac-koji-ce-dijeliti-pravdu-izmedu-hrvatske-i-portugala-vatrenima-je-u-dobrom-a-dinamu-u-losem-sjecanju/',
    ],
    [
        'image' => 'https://images.telegram.hr/VRj48LGFJyZ_d34CHGoXuX9AXEwMROn-xTr7ZKsGq8g/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvaHJ2YXRza2EtNy5qcGc.webp',
        'title' => 'Nitko kao Hrvatska, Vatreni su postali najbolja ekipa sa stopostotnim učinkom u raspucavanjima na SP-u',
        'text'  => 'Sami na vrhu',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/nitko-kao-hrvatska-vatreni-su-postali-najbolja-ekipa-sa-stopostotnim-ucinkom-u-raspucavanjima-na-sp-u/',
    ],
    [
        'image' => 'https://images.telegram.hr/gDwSfJXLjbW4EX2ZRyp4l3U2XRolSr1fmDFsR8pX0K4/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvMTA3ODc4NzIxOC5qcGc.webp',
        'title' => 'Hrvatska je pobijedila Panamu i to je najvažnije, ali zasad ovo ne izgleda dobro',
        'text'  => 'Prvi dojam: Teško izborena tri boda na Mundijalu',
        'link'  => 'https://www.telegram.hr/telesport/price-telesport/hrvatska-je-pobijedila-panamu-i-to-je-najvaznije-ali-zasad-ovo-ne-izgleda-dobro/'
    ],
    [
        'image' => 'https://images.telegram.hr/AKIoJijDtdlC5rOrmZrB1gzdeB3qYy61IpIHYfpM2v4/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvcGVyaXNpYy1ocnZhdHNrYS5qcGc.webp',
        'title' => 'Kakvo je sad stanje za Hrvatsku? Pobjeda je bila prevažna za knockout fazu, ali još nema opuštanja',
        'text'  => 'Vatreni znaju da su najmanje treći',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/kakvo-je-sad-stanje-za-hrvatsku-pobjeda-je-bila-prevazna-za-knockout-fazu-ali-jos-nema-opustanja/'
    ],
    [
        'image' => 'https://images.telegram.hr/CBp4rr1gH83BFXNR8WlEj0XPTLWXyllQxkqjIe7ChwE/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvYmF0dXJpbmEtMS1lMTc4MjI4NDEzMzU4Ni5qcGc.webp',
        'title' => 'Baturina sjajnom partijom protiv Paname ušao u odabrano društvo. Ovo je ranije uspjelo samo trojici igrača',
        'text'  => 'Majstor svojeg zanata',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/martin-baturina-sjajnom-je-partijom-protiv-paname-usao-u-odabrano-drustvo-prije-njega-ovo-je-uspjelo-samo-trojici-igraca/'
    ],
    [
        'image' => 'https://images.telegram.hr/MBcNtZ1aixJ2TtHRkQFxhKQS_wcg3K7Glcm5EX7W2Xw/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvZGFsaWMtNS1lMTc4MjI4MzA2NzY5NC5qcGc.webp',
        'title' => "Izbornik Dalić svjestan je da Vatreni imaju mjesta za napredak: 'Nismo bili na dovoljnoj razini u obje utakmice'",
        'text'  => 'Čestitao je igračima na tri boda',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/izbornik-dalic-svjestan-je-da-vatreni-imaju-mjesta-za-napredak-nismo-bili-na-dovoljnoj-razini-u-obje-utakmice/'
    ],
    [
        'image' => 'https://images.telegram.hr/HAwoQQnDtf8aIoRL9WW3BJuHDcAeiNjLm4WyLVgiR7U/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvam9za28tZ3ZhcmRpb2wuanBn.webp',
        'title' => 'Fotka dana: Što se, kvragu, događa s Gvardiolom? Hrvatska kao da igra bez njega',
        'text'  => 'Trebao bi biti nositelj i ovo bi trebao biti njegov Mundijal',
        'link'  => 'https://www.telegram.hr/telesport/price-telesport/fotka-dana-sto-se-kvragu-dogada-s-gvardiolom-hrvatska-kao-da-igra-bez-njega/'
    ],
    [
        'image' => 'https://images.telegram.hr/TSpEngb-sm6zGY-OxAtfYEnUW6KdGib5y9NXYfD9nHw/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvcGFuYW1hLTEtZTE3ODE4NTYzMDUxODIuanBn.webp',
        'title' => 'Panamci optimistični uoči dvoboja s Hrvatskom, mogao bi im se vratiti važan igrač',
        'text'  => 'Iskusni veznjak Adalberto Carrasquilla oporavio se od ozljede',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/panamci-optimisticni-uoci-dvoboja-s-hrvatskom-mogao-bi-im-se-vratiti-vazan-igrac/',
    ],
    [
        'image' => 'https://images.telegram.hr/jIoTJexwZvaTLPUl2Vh_9JN68zgfz-oYdYW2xE3iu48/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvbHVrYS12dXNrb3ZpYy1lbmdsZXNrYS5qcGc.webp',
        'title' => 'Da je Dalić na vrijeme bio odlučniji, mogao je izvući više od Vuškovića. I od drugih',
        'text'  => 'Kakvu je utakmicu imao hrvatski wunderkind?',
        'link'  => 'https://www.telegram.hr/telesport/price-telesport/da-je-dalic-na-vrijeme-bio-odlucniji-mogao-je-izvuci-vise-od-vuskovica-i-od-drugih/',
    ],
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