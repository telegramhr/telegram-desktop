<?php
$native_path = $native_path ?? get_stylesheet_directory_uri() . '/templates/native/zona-prvenstva';

$knockout_cards = [
    [
        'image' => 'https://images.telegram.hr/8D9hVPAEX7YQ2b5SUbB6nkwF0RxkW8SbxIgvMV9xUFA/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvcm9kcmktMS5qcGc.webp',
        'title' => "Heroj dana: Rodri",
        'text'  => 'De la Fuenteov general bio je ključan u pobjedi nad Francuskom',
        'link'  => 'https://www.telegram.hr/telesport/price-telesport/heroj-dana-rodri/',
    ],
    [
        'image' => 'https://images.telegram.hr/2i6KWtm8CJUW9WaYU971VyXxF_0j4HFSeOxc2xLt8pk/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvZGFuaS1vbG1vLXNwYW5qb2xza2EuanBn.webp',
        'title' => "Uživo: 35. je dan Svjetskog prvenstva. Španjolska čeka Englesku ili Argentinu, Infantino (opet) krši pravila",
        'text'  => 'Pratimo najvažnije vijesti',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/uzivo-35-je-dan-svjetskog-prvenstva-spanjolska-ceka-englesku-ili-argentinu-infantino-opet-krsi-pravila/',
    ],
    [
        'image' => 'https://images.telegram.hr/a7MGXk68-ESOQjy7RoCjFFrLFz2_iIslQPo4TbI2mmY/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvcG9ycm8uanBn.webp',
        'title' => "Iznenadila vas je španjolska dominacija nad Francuzima? Ne bi trebala, recentna forma ovo je najavljivala",
        'text'  => 'La Roja je zaista impresivna',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/iznenadila-vas-je-spanjolska-dominacija-nad-francuzima-ne-bi-trebala-recentna-forma-ovo-je-najavljivala/',
    ],
    [
        'image' => 'https://images.telegram.hr/-SoIw2hh3jU5XaMRSUKXczAaNfqGloU9nanrl2vE2mA/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvZGFuaS1vbG1vLmpwZw.webp',
        'title' => "Bio je i pod faulom, ali nije mu smetalo. Pogledajte kako je Dani Olmo skuhao gol za mirni put u finale SP-a",
        'text'  => 'Fenomenalni dupli pas',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/bio-je-i-pod-faulom-ali-nije-mu-smetalo-pogledajte-kako-je-dani-olmo-skuhao-gol-za-mirni-put-u-finale-sp-a/',
    ],
    [
        'image' => 'https://images.telegram.hr/RJbYiFjI2wzjFKgtT7t92kvDU6ND8RWen7FthmcCI6s/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvcGVkcm8tcG9ycm8tbmljby13aWxsaWFtcy1zcGFuam9sc2thLmpwZw.webp',
        'title' => "Španjolska je prvi finalist Svjetskog prvenstva. La Roja utišala francuske superzvijede, Olmo asistirao",
        'text'  => 'Oyarzabal i Porro pogodili za veliko slavlje',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/spanjolska-je-prvi-finalist-svjetskog-prvenstva-la-roja-utisala-francuske-superzvijede-olmo-asistirao/',
    ],
    [
        'image' => 'https://images.telegram.hr/jvW5_qKGFIOW_w8Kt9cT0g2EOL2c4F2DAlMnFAg_n54/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvbWVzc2ktMS5qcGc.webp',
        'title' => "Messi propustio trening uoči polufinala s Engleskom, ali njegov problem brzo je riješen",
        'text'  => 'Sve je ipak u redu',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/messi-propustio-trening-uoci-polufinala-s-engleskom-ali-njegov-problem-brzo-je-rijesen/',
    ],
    [
        'image' => 'https://images.telegram.hr/pT0_qMxRbkPPF3Nh84xx3zh0ckmE3kjtUEEgPNL424g/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvbGFtaW5lLXlhbWFsLW5pY28td2lsbGlhbXMtc3BhbmpvbHNrYS1reWxpYW4tbWJhcHBlLWZyYW5jdXNrYS5qcGc.webp',
        'title' => "Prvo polufinale Svjetskog prvenstva donosi pravi spektakl, Francuska i Španjolska bore se za mjesto prvog finalista",
        'text'  => 'Najava, TV prijenos, ključni detalji',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/prvo-polufinale-svjetskog-prvenstva-donosi-pravi-spektakl-francuska-i-spanjolska-bore-se-za-mjesto-prvog-finalista/',
    ],
    [
        'image' => 'https://images.telegram.hr/MCtsIYfNR2R_Ttacg95YYsyFIrLS1YjKvK45aAMjYBQ/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvdGhvbWFzLXR1Y2hlbC0zLWUxNzgzODcwNjMxOTQ3LmpwZw.webp',
        'title' => "Ovakve brojke još nitko nije imao. Thomas Tuchel ima nevjerojatan učinak s Engleskom",
        'text'  => 'Nijemac je vrlo blizu ispisivanju povijesti',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/ovakve-brojke-jos-nitko-nije-imao-thomas-tuchel-ima-nevjerojatan-ucinak-s-engleskom/',
    ],
    [
        'image' => 'https://images.telegram.hr/PVKzTM6HFGTpBc5OuTVVlH8_Mau8beniSCAqh7sV9LY/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvanVkZS1iZWxsaW5naGFtLTIuanBn.webp',
        'title' => "Heroj dana: Jude Bellingham",
        'text'  => 'Engleski zlatni dječak jučer je s dva gola riješio Norvešku',
        'link'  => 'https://www.telegram.hr/telesport/price-telesport/heroj-dana-jude-bellingham/',
    ],
    [
        'image' => 'https://www.telegram.hr/wp-content/uploads/2026/07/thomas-tuchel.jpg',
        'title' => "Engleska ima manu. Tuchel je imao rješenje za nju, ali ga se odrekao uoči Mundijala",
        'text'  => 'Nedostaje li ovoj reprezentaciji Trent Alexander-Arnold?',
        'link'  => 'https://www.telegram.hr/telesport/analize/engleska-ima-manu-tuchel-je-imao-rjesenje-za-nju-ali-ga-se-odrekao-uoci-mundijala/',
    ],
    [
        'image' => 'https://images.telegram.hr/_e--iy_VyRMHTtQPvuBhRW3Td6zwyYWExxJ7-xHnYEo/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvbGVvLW1lc3NpLTEuanBn.webp',
        'title' => "Messi je oborio još jedan rekord, najbliži ovom postignuću je legendarni Maradona",
        'text'  => 'Argentinski čarobnjak',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/messi-je-oborio-jos-jedan-rekord-najblizi-ovom-postignucu-je-legendarni-maradona/',
    ],
    [
        'image' => 'https://images.telegram.hr/XG61DICuEAFYPU6PGkZ0qBsXDlnJSA5rpdF3uppEId0/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvc3BhbmpvbHNrYS1uYXZpamFjLXN2amV0c2tvLXBydmVuc3R2by5qcGc.webp',
        'title' => "Uživo: 30. dan Svjetskog prvenstva. Belgijski stoper ne smije igrati protiv Španjolske, ključni Englez bolestan",
        'text'  => 'Pratimo najvažnije vijesti',
        'link'  => 'Uživo: 30. dan Svjetskog prvenstva. Belgijski stoper ne smije igrati protiv Španjolske, ključni Englez bolestan',
    ],
    [
        'image' => 'https://images.telegram.hr/h8LfO70X7ImmwH62Z_KoZVZ01akMKmiZ1YMAV9ozKG8/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvZGVjbGFuLXJpY2UuanBn.webp',
        'title' => "Engleska zvijezda zbog bolesti ne trenira uoči četvrtfinala SP-a, navodno je izolirana od ostatka ekipe",
        'text'  => 'Četvrtfinale je za manje od dva dana...',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/engleska-zvijezda-zbog-bolesti-ne-trenira-uoci-cetvrtfinala-sp-a-navodno-je-izolirana-od-ostatka-ekipe/',
    ],
    [
        'image' => 'https://images.telegram.hr/l1938ooTqoaYbIMYHsa_tnenfZLclVyd0LPQpdowbmQ/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcva3lsaWFuLW1iYXBwZS1mcmFuY3Vza2EtbWFyb2tvLmpwZw.webp',
        'title' => "Čak se i Mbappé pridružio neslavnoj zabavi: Svjetska prvenstva ne pamte ovako loše izvođenje penala",
        'text'  => 'Što se to, kvragu, događa s izvođačima?',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/cak-se-i-mbappe-pridruzio-neslavnoj-zabavi-svjetska-prvenstva-ne-pamte-ovako-lose-izvodenje-penala/',
    ],
    [
        'image' => 'https://images.telegram.hr/Dwb8KPQmydp5XmduuIT6XAK7cUrb8vtN0mN4pHewmWA/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvbGFtaW5lLXlhbWFsLXNwYW5qb2xza2EtbWlrZWwtb3lhcnphYmFsLmpwZw.webp',
        'title' => "Belgija raste kako turnir odmiče, ali Španjolska se čini kao prevelik zalogaj. Može li Yamal napokon zasjati?",
        'text'  => 'TV prijenos, moguće postave, ključni detalji',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/belgija-raste-kako-turnir-odmice-ali-spanjolska-se-cini-kao-prevelik-zalogaj-moze-li-yamal-napokon-zasjati/',
    ],
    [
        'image' => 'https://images.telegram.hr/JqUSIcvN7en0K7tz7Th3EVNGzy0flKVeB8TX-BE_dgc/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvc2xhdmxqZS1mcmFuY3Vza2UuanBn.webp',
        'title' => "Video. Francuska je na kraju rutinski svladala Maroko iako su se branili hrabro sat vremena",
        'text'  => 'Idu u polufinale',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/video-francuska-je-na-kraju-rutinski-svladala-maroko-iako-su-se-branili-hrabro-sat-vremena/',
    ],
    [
        'image' => 'https://images.telegram.hr/F6-ub-Aub8yDVfwQ9cv886YjJWN9sBARuHtwUreLmdI/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvb3VzbWFuZS1kZW1iZWxlLWkta3lsaWFuLW1iYXBwZS5qcGc.webp',
        'title' => "Video. Francuzi preko Mbappéa i Dembéléa slomili marokanski otpor u samo šest minuta",
        'text'  => 'Branili su se sat vremena',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/video-francuzi-preko-mbappea-i-dembelea-slomili-marokanski-otpor-u-samo-sest-minuta/',
    ],
    [
        'image' => 'https://images.telegram.hr/4aeeYCJ8QERRJyz1yd29cOOcHs19t_9sa9YZZo7WxCw/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcva3lsaWFuLW1iYXBwZS5qcGc.webp',
        'title' => "Video. Argentinski sudac stalnim ponavljanjem iziritirao Mbappéa, Bounou mu je uhvatio izvedeni penal u ruke",
        'text'  => 'Nije bio smiren',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/video-argentinski-sudac-stalnim-ponavljanjem-iziritirao-mbappea-bounou-mu-je-uhvatio-izvedeni-penal-u-ruke/',
    ],
    [
        'image' => 'https://images.telegram.hr/bfHAB0IGXqMb--0KWwn0GFBY_PgA5TDN2HMebPCZywo/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvZW5nbGVza2EuanBn.webp',
        'title' => "Utakmica Engleske i Norveške mogla bi se odgoditi, četvrtfinalu prijeti grmljavinska oluja",
        'text'  => 'Susreti koji bi mogao trajati kasno u noć',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/utakmica-engleske-i-norveske-mogla-bi-se-odgoditi-cetvrtfinalu-prijeti-grmljavinska-oluja/',
    ],
    [
        'image' => 'https://images.telegram.hr/0w7CKHFaZmddo5mj6RjsA_DjxwAbJiqlftZ1JByUtEc/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYva3lsaWFuLW1iYXBwZS1mcmFuY3Vza2EuanBn.webp',
        'title' => 'Došao je red na četvrtfinale Svjetskog prvenstva, može li Maroko šokirati snažnu Francusku?',
        'text'  => 'TV prijenos, ključni detalji, moguće postave',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/dosao-je-red-na-cetvrtfinale-svjetskog-prvenstva-moze-li-maroko-sokirati-snaznu-francusku/',
    ],
    [
        'image' => 'https://images.telegram.hr/oWlVdLUPXxnEqQ7FcFAsKCW_R7uCWMpCLhevhXRi2C8/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvYm91YWJiaS0xLmpwZw.webp',
        'title' => 'Ayyoub Bouaddi je neodoljiv. Ovo Svjetsko prvenstvo i Maroko otkrili su ga svima',
        'text'  => 'Bio je kapetan (mlade) Francuske, a sad igra protiv nje',
        'link'  => 'https://www.telegram.hr/telesport/price-telesport/ayyoub-bouaddi-je-neodoljiv-ovo-svjetsko-prvenstvo-i-maroko-otkrili-su-ga-svima/',
    ],
    [
        'image' => 'https://www.telegram.hr/wp-content/uploads/2026/07/messi-scaloni.jpg',
        'title' => 'Scaloni je sve podredio Messiju i svi ostali igraju za njega. To je strateška odluka',
        'text'  => 'Argentina je ekipa koja ima dva potpuno različita identiteta',
        'link'  => 'https://www.telegram.hr/telesport/analize/scaloni-je-sve-podredio-messiju-i-svi-ostali-igraju-za-njega-to-je-strateska-odluka/',
    ],
    [
        'image' => 'https://images.telegram.hr/2PAOBxiT5ti21uQORycT9YFdzQuUru-_H2AB29Azp5I/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvbGV0ZXhpZXIuanBn.webp',
        'title' => 'Nova tragikomedija na Mundijalu, Egipćani traže izbacivanje kompletne sudačke postave iz utakmice s Argentinom',
        'text'  => 'Bura ne jenjava',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/nova-tragikomedija-na-mundijalu-egipcani-traze-izbacivanje-kompletne-sudacke-postave-iz-utakmice-s-argentinom/',
    ],
    [
        'image' => 'https://images.telegram.hr/-0YuHKrKmUR_wqWtl47QzFNF4Nhf9Jl74GAoB8r1X10/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvZ3JlZ29yLWtvYmVsLmpwZw.webp',
        'title' => 'Heroj dana: Gregor Kobel',
        'text'  => 'Spasio je ekipu u utakmici, a u raspucavanju joj donio pobjedu',
        'link'  => 'https://www.telegram.hr/telesport/price-telesport/heroj-dana-gregor-kobel/',
    ],
    [
        'image' => 'https://images.telegram.hr/LQohZZC5vX85Dl1x9d_1pRokulCXSLLoQHyTLuG0-hI/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvc3ZpY2Fyc2thLWtvbHVtYmlqYS5qcGc.webp',
        'title' => 'Ako ste zaspali, nitko vas neće kriviti. Švicarska i Kolumbija odigrale su jednu od najdosadnijih utakmica na SP-u',
        'text'  => 'To su potvrdile i brojke',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/ako-ste-zaspali-nitko-vas-nece-kriviti-svicarska-i-kolumbija-odigrale-su-jednu-od-najdosadnijih-utakmica-na-sp-u/',
    ],
    [
        'image' => 'https://images.telegram.hr/P7kFuDZ1dpduX163yDste5NNEDZ0-mBmPxOTqitBFZs/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvaGFycnkta2FuZS0zLmpwZw.webp',
        'title' => 'Svjetsko prvenstvo došlo je do najbolje osmorke. Ovo su utakmice i termini četvrtfinala Mundijala',
        'text'  => 'Još samo sedam utakmica do kraja',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/svjetsko-prvenstvo-doslo-je-do-najbolje-osmorke-ovo-su-utakmice-i-termini-cetvrtfinala-mundijala/',
    ],
    [
        'image' => 'https://images.telegram.hr/32iwM-9xijlbOHpwSvIO7PNbFWIXzQNZowoUU9hY_-0/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvc3ZpY2Fyc2thLTQtZTE3ODM0NjQ2MDc0OTIuanBn.webp',
        'title' => 'Švicarska posljednji putnik u četvrtfinale SP-a, Kolumbijci pali nakon raspucavanja jedanaesteraca',
        'text'  => 'Drama u Vancouveru pripala Europljanima',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/svicarska-posljednji-putnik-u-cetvrtfinale-sp-a-kolumbijci-pali-nakon-raspucavanja-jedanaesteraca/',
    ],
    [
        'image' => 'https://images.telegram.hr/-UxNfHzjcMwDLDlWKMzXdCb9S4ob4NVwfbZebSGNEQo/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvbGVvLW1lc3NpLTEuanBn.webp',
        'title' => 'Susret Argentine i Egipta bio je najluđi na SP-u. Pogledajte još jednom preokret, golove i sporne situacije',
        'text'  => 'Sažetak je vrlo, vrlo bogat',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/susret-argentine-i-egipta-bio-je-najludi-na-sp-u-pogledajte-jos-jednom-preokret-golove-i-sporne-situacije/',
    ],
    [
        'image' => 'https://images.telegram.hr/0mRqRoCPHcFvHSQF89nLNuCInYtTcu1cQpPV0DNW2nM/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvemlrby1lMTc4MzQ1Mjg2MTI0Mi5qcGc.webp',
        'title' => "Egipatski ofenzivac ogorčen nakon ispadanja: 'Čestitam Argentini na osvajanju Svjetskog prvenstva'",
        'text'  => 'Smatra da je turnir namješten',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/egipatski-ofenzivac-ogorcen-nakon-ispadanja-cestitam-argentini-na-osvajanju-svjetskog-prvenstva/',
    ],
    [
        'image' => 'https://images.telegram.hr/jvW5_qKGFIOW_w8Kt9cT0g2EOL2c4F2DAlMnFAg_n54/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvbWVzc2ktMS5qcGc.webp',
        'title' => 'Messi redom ruši sve rekorde, pa i ovaj negativni. Nitko nikad nije zapucao dva penala na istom SP-u',
        'text'  => 'Pa ipak, već ima sedam golova',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/messi-redom-rusi-sve-rekorde-pa-i-ovaj-negativni-nitko-nikad-nije-zapucao-dva-penala-na-istom-sp-u/',
    ],
    [
        'image' => 'https://images.telegram.hr/aMY5kK9XLB_sTwYl3y7I7aCVZsAunu6m4PVRL5RavGM/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvcnViZW4tZGlhcy5qcGc.webp',
        'title' => 'Video. Iskusni portugalski branič došao u mix-zonu pa zbog neviđenog propusta odbio dati izjavu',
        'text'  => 'Nije mogao više izdržati',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/video-iskusni-portugalski-branic-dosao-u-mix-zonu-pa-zbog-nevidenog-propusta-odbio-dati-izjavu/',
    ],
    [
        'image' => 'https://images.telegram.hr/sSIc2LTfBivtPUzmb0bHCn-jGyLwrx48WYaxCWTJ0pA/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvZm9sYXJpbi1iYWxvZ3VuLXNhZC5qcGc.webp',
        'title' => 'Napadač zbog čijeg je crvenog kartona reagirao Trump igrao protiv Belgije, nije se proslavio',
        'text'  => 'Loša partija',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/napadac-zbog-cijeg-je-crvenog-kartona-reagirao-trump-igrao-protiv-belgije-nije-se-proslavio/',
    ],
    [
        'image' => 'https://images.telegram.hr/smnRymA1jFS5-nMhBXW4TQa4rPjn5JIdE_D7rYfPC18/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvcnVkaS1nYXJjaWEtaS1mb2xhcmluLWJhbG9ndW4uanBn.webp',
        'title' => "Belgijski izbornik popričao s kontroverznim Balogunom: ‘On nije osoba koju treba okriviti’",
        'text'  => 'Skroz drukčiji ton nakon pobjede',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/belgijski-izbornik-popricao-s-kontroverznim-balogunom-on-nije-osoba-koju-treba-okriviti/',
    ],
    [
        'image' => 'https://images.telegram.hr/Wl-CrZW4Ffcn8Jv5m3t7UhnZNDHzhf1YshOMfjuGQEs/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvZm9sYXJpbi1iYWxvZ3VuLTEuanBn.webp',
        'title' => 'Uživo: 27. je dan Svjetskog prvenstva. Belgija deklasirala SAD, portugalski izbornik napustio reprezentaciju',
        'text'  => 'Pratimo najvažnije događaje',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/uzivo-27-je-dan-svjetskog-prvenstva-belgija-deklasirala-sad-nakon-svih-kontroverzi/',
    ],
    [
        'image' => 'https://images.telegram.hr/Fd4XPlx_Yq5QR_KPjSDkIfv377YaygPCHi0D91_bRwY/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvcm9iZXJ0by1tYXJ0aW5lei5qcGc.webp',
        'title' => 'Nakon poraza od Španjolske, Roberto Martínez potvrdio da napušta portugalsku reprezentaciju',
        'text'  => 'Izbornik odlazi nakon neuspjeha',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/nakon-poraza-od-spanjolske-roberto-martinez-potvrdio-da-napusta-portugalsku-reprezentaciju/',
    ],
    [
        'image' => 'https://images.telegram.hr/1at70FmGYb-LZYMAUsqZTqV62D4Dadu43BBNCtdrdLw/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvc3BhbmpvbHNrYS1wb3J0dWdhbGEtZTE3ODMzNzE5ODk2NDAuanBn.webp',
        'title' => 'Svjetsko prvenstvo uživo: Španjolska u završnici zabila Portugalu i prošla u četvrtfinale (1-0)',
        'text'  => 'Pratili smo i komentirali',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/svjetsko-prvenstvo-uzivo-hrvatski-krvnik-i-europski-prvak-u-spektakularnom-okrsaju-za-cetvrtfinale/',
    ],
    [
        'image' => 'https://images.telegram.hr/Doue1prG8oFtSAlMUgyWxS3PAZVZkMEhQh_p-wVdX4g/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvamFycmVsbC1xdWFuc2FoLWktamVzdXMtZ2FsbGFyZG8uanBn.webp',
        'title' => 'Kako je ovo moguće? Engleski branič krvnički uklizao Meksikancu, sudac nije ni svirao faul, a na kraju je isključen',
        'text'  => 'Veliki sudački propust',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/kako-je-ovo-moguce-engleski-branic-krvnicki-uklizao-meksikancu-sudac-nije-ni-svirao-faul-a-na-kraju-je-iskljucen/',
    ],
    [
        'image' => 'https://images.telegram.hr/LFs1Vho5LGXLgAxknzAg5_c9RPWN1Aw9eDAl3judSwg/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDYvY3Jpc3RpYW5vLXJvbmFsZG8uanBn.webp',
        'title' => 'Je li situacija s Ronaldom zaista presedan za poništeni crveni? Postoje dvije ključne razlike u tim slučajevima',
        'text'  => 'Svjetsko prvenstvo potresa popriličan skandal',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/je-li-situacija-s-ronaldom-zaista-presedan-za-ponisteni-crveni-postoje-dvije-kljucne-razlike-u-tim-slucajevima/',
    ],
    [
        'image' => 'https://images.telegram.hr/xV8F5SW6OCRB0aJgby640amHBuvYhnWO8r-Zid44VHc/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvZGVjbGFuLXJpY2UtaS1qb3JkYW4tcGlja2ZvcmQuanBn.webp',
        'title' => 'Uživo: 26. je dan Svjetskog prvenstva. Svi kritiziraju FIFA-u zbog kontroverznog pojačanja domaćina',
        'text'  => 'Pratimo najvažnije događaje',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/uzivo-26-je-dan-svjetskog-prvenstva-poznati-tv-producent-spomenuo-vatrene-engleska-nadjacala-meksiko/',
    ],
    [
        'image' => 'https://images.telegram.hr/EG5R1emxK0aL_M5peM1r2a2vxUDzTco1AgapSSRYwNU/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvcm9vbmV5LmpwZw.webp',
        'title' => "Engleska legenda oštro udarila po FIFA-i: 'Ne možeš suspendirati crveni na godinu dana, Infantino se treba sramiti'",
        'text'  => 'Ponudio je primjer iz svoje karijere',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/engleska-legenda-ostro-udarila-po-fifa-i-ne-mozes-suspendirati-crveni-na-godinu-dana-infantino-se-treba-sramiti/',
    ],
    [
        'image' => 'https://images.telegram.hr/JkjjBpyHRF0jMY7bj5LK5kuRZ4oo7wffY7iAJagkkEo/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvc3BhbmpvbHNrYS1lMTc4MzAyNTY3Mzk4My5qcGc.webp',
        'title' => 'Što nas čeka 26. dana Svjetskog prvenstva? Derbi Pirenejskog poluotoka, domaćin ima kontroverzno pojačanje',
        'text'  => 'Najava, TV prijenos, ključni detalji',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/sto-nas-ceka-26-dana-svjetskog-prvenstva-derbi-pirenejskog-poluotoka-domacin-ima-kontroverzno-pojacanje/',
    ],
    [
        'image' => 'https://images.telegram.hr/gpjgkb-j1fDC2k8-9xi6gj9PCN6S2kgVZ6R3hAObunQ/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvcGVuYWwtYnJhemlsLmpwZw.webp',
        'title' => 'Penal za Brazil izazvao je velike polemike, a mnogi se pitaju zašto nije korišten senzor koji je izbacio Hrvatsku',
        'text'  => 'Je li prvo bio start Norvežanina na loptu?',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/penal-za-brazil-izazvao-je-velike-polemike-a-mnogi-se-pitaju-zasto-nije-koristen-senzor-koji-je-izbacio-hrvatsku/',
    ],
    [
        'image' => 'https://images.telegram.hr/MNZTXN3hFzci3b9b6_48UjB54Mv1h-kCFxqIXaYmoh4/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvZW1ib2xvLWUxNzgzMDY1MjYwMzQzLmpwZw.webp',
        'title' => 'Švicarska rutinski sredila Alžirce i izborila osminu finala SP-a. Pogledajte sve golove',
        'text'  => 'Europska reprezentacija opravdala je ulogu favorita',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/svicarska-rutinski-sredila-alzirce-i-izborila-osminu-finala-sp-a-pogledajte-sve-golove/',
    ],
    [
        'image' => 'https://images.telegram.hr/gm-AKCmce6SekColfxO9Uizam-UFXQDmn5-M3Z34dM4/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvcm9uYWxkby01LWUxNzgzMDYzNzc2MTM4LmpwZw.webp',
        'title' => 'Cristiano Ronaldo dobio nagradu za igrača utakmice, mnogi ismijavaju FIFA-inu odluku',
        'text'  => 'Brojke kažu da su petorica igrača bila bolja od 41-godišnjeg Portugalca',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/cristiano-ronaldo-dobio-nagradu-za-igraca-utakmice-mnogi-ismijavaju-fifa-inu-odluku/',
    ],
    [
        'image' => 'https://images.telegram.hr/FeuZ9zs-hgh-UcHZUpQwYd4BEsNTqGl1h6L8slnbpaA/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvcGVkcm8tcG9ycm8tc3BhbmpvbHNrYS1hdXN0cmlqYS5qcGc.webp',
        'title' => 'Španjolci golovima protiv Austrije prekinuli nestvaran crni niz koji je trajao čak 16 godina',
        'text'  => 'Oyarzabal je prvi nakon Inieste s ovim uspjehom',
        'link'  => 'https://www.telegram.hr/telesport/na-prvu/spanjolci-golovima-protiv-austrije-prekinuli-nestvaran-crni-niz-koji-je-trajao-cak-16-godina/',
    ],
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
        'image' => 'https://images.telegram.hr/DET5xpNyBaBrJ0OkHJtLdyhXGYtuIJ59STQEPvaY_3Y/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjYvMDcvdXNhLWJpaC0zLmpwZw.webp',
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