<?php
/**
 * Sadržaj Unlock December landinga.
 *
 * Članci (stories):
 *  - id        stabilni slug, NE mijenjati nakon objave (koristi ga chat i kuglice)
 *  - category  jedna od $advent_categories ili 'Zimske aktivnosti' (prikaz samo ispod vodiča)
 *  - image     URL fotografije članka (ako je prazan, prikazuje se ikona)
 *  - url       URL objavljenog članka; null = gumb "Otkrij više" neaktivan
 *  - position  [x, y] u postocima ilustracije bora; null = automatski slobodan slot
 *  - published false = članak se ne prikazuje
 *
 * Gradovi (cities): x/y u postocima karte (1536 × 1024), ne smiju prekriti prugu.
 *
 * Kad je na native postu uključeno "Borko - advent", članci dolaze iz ACF tabova
 * (inc/acf-stories.php), a ogledni $advent_stories ispod se ne koriste.
 * Inače se prikazuje ogledni sadržaj iz isporučenog koncepta.
 */

require_once __DIR__ . '/acf-stories.php';

$advent_categories = ['Sve kuglice', 'Recepti', 'Pokloni', 'Dom', 'Stil', 'Ljepota'];

$advent_stories = [
    [
        'id'        => 'recepti-djetinjstvo',
        'title'     => 'Recepti koji mirišu na djetinjstvo',
        'category'  => 'Recepti',
        'portal'    => 'Super1',
        'icon'      => '✧',
        'excerpt'   => 'Od klasičnih keksa do novih favorita za blagdanski stol.',
        'body'      => 'Počni od jednostavnog tijesta za prhke kekse. Dio začini cimetom, dio koricom naranče, a ostatak sačuvaj za čokoladu. Dok se keksi hlade, pripremi kutijice i nekoliko rukom pisanih poruka. Jedno popodne u kuhinji pretvara se u male poklone za ljude koje voliš.',
        'image'     => '',
        'image_alt' => '',
        'url'       => null,
        'position'  => [51, 23],
        'published' => true,
    ],
    [
        'id'        => 'poklon-za-kuhara',
        'title'     => 'Za osobu koja uvijek kuha za sve',
        'category'  => 'Pokloni',
        'portal'    => 'Story',
        'icon'      => '🎁',
        'excerpt'   => 'Pokloni koji će pronaći svoje mjesto u svakoj kuhinji.',
        'body'      => 'Lijepa keramička zdjela, bilježnica za obiteljske recepte ili dobro odabrana kuharica mogu biti početak poklona. Dodaj malu staklenku omiljenog začina i napiši koje biste jelo mogli pripremiti zajedno.',
        'image'     => '',
        'image_alt' => '',
        'url'       => null,
        'position'  => [46, 36],
        'published' => true,
    ],
    [
        'id'        => 'zimski-vikend',
        'title'     => 'Zimski vikend koji stane u mali kofer',
        'category'  => 'Zimske aktivnosti',
        'portal'    => 'Telegram',
        'icon'      => '❄',
        'excerpt'   => 'Kratki izleti za dane kada poželiš promjenu prizora.',
        'body'      => 'Za vikend izlet odaberi jednu bazu i nekoliko mjesta u blizini. Ostavi dovoljno vremena za dugu šetnju, ručak i spontano skretanje. Prije puta provjeri prognozu i radno vrijeme lokacija koje želiš posjetiti.',
        'image'     => '',
        'image_alt' => '',
        'url'       => null,
        'position'  => [58, 37],
        'published' => true,
    ],
    [
        'id'        => 'mali-stan',
        'title'     => 'Mali stan, puno blagdanskog ugođaja',
        'category'  => 'Dom',
        'portal'    => 'Super1',
        'icon'      => '✦',
        'excerpt'   => 'Nekoliko detalja dovoljno je da se dom promijeni.',
        'body'      => 'Grane u vazi, toplo svjetlo i nekoliko ukrasa mogu zamijeniti veliki bor. Ukrasi jednu policu ili prozor i ponovi dvije boje kroz cijeli prostor. Manje predmeta ostavlja više mjesta za druženje.',
        'image'     => '',
        'image_alt' => '',
        'url'       => null,
        'position'  => [43, 50],
        'published' => true,
    ],
    [
        'id'        => 'jos-jedno-druzenje',
        'title'     => 'Spremna za još jedno druženje',
        'category'  => 'Stil',
        'portal'    => 'Story',
        'icon'      => '✧',
        'excerpt'   => 'Omiljene komade nosimo na malo drugačiji način.',
        'body'      => 'Kreni od odjeće u kojoj se osjećaš dobro. Pletenina i svečaniji nakit ili jednostavna košulja s efektnim detaljem daju dovoljno prostora da outfit prilagodiš i poslu i večernjem druženju.',
        'image'     => '',
        'image_alt' => '',
        'url'       => null,
        'position'  => [60, 51],
        'published' => true,
    ],
    [
        'id'        => 'mali-ritual',
        'title'     => 'Mali ritual prije velikog dana',
        'category'  => 'Ljepota',
        'portal'    => 'Super1',
        'icon'      => '♡',
        'excerpt'   => 'Nekoliko mirnih minuta koje čuvamo samo za sebe.',
        'body'      => 'Pripremi omiljene proizvode i odvoji nekoliko minuta za rutinu koja ti odgovara. Za poklon biraj prema navikama osobe kojoj daruješ: njezin omiljeni miris ili proizvod koji već rado koristi uvijek su dobar početak.',
        'image'     => '',
        'image_alt' => '',
        'url'       => null,
        'position'  => [47, 65],
        'published' => true,
    ],
    [
        'id'        => 'dan-na-svjezem-zraku',
        'title'     => 'Dan na svježem zraku za cijelu ekipu',
        'category'  => 'Zimske aktivnosti',
        'portal'    => 'Story',
        'icon'      => '❄',
        'excerpt'   => 'Šetnja, topli napitak i dovoljno vremena za igru.',
        'body'      => 'Isplaniraj kraću rutu s mjestom za predah. Za izlet s djecom ponesi rezervne rukavice i ostavi prostor za njihov tempo. Ako birate klizanje ili događanje na otvorenom, prije polaska provjerite aktualne termine.',
        'image'     => '',
        'image_alt' => '',
        'url'       => null,
        'position'  => [63, 65],
        'published' => true,
    ],
];

$advent_cities = [
    [
        'id'      => 'zagreb',
        'name'    => 'Zagreb',
        'x'       => 23,
        'y'       => 27,
        'tagline' => 'Šetnja gradom, svjetla i topli zalogaji',
        'body'    => 'Prošeći centrom, potraži mirniju ulicu za fotografiranje i odaberi mjesto za topli napitak. Borkov prijedlog: ostavi dio večeri za šetnju bez plana.',
        'stories' => [],
    ],
    [
        'id'      => 'osijek',
        'name'    => 'Osijek',
        'x'       => 81,
        'y'       => 31,
        'tagline' => 'Slavonski okusi i zimske gradske priče',
        'body'    => 'Spoji šetnju Tvrđom s otkrivanjem slavonskih okusa. Za obiteljski izlet odaberi kraću rutu i dovoljno vremena za predah.',
        'stories' => [],
    ],
    [
        'id'      => 'rijeka',
        'name'    => 'Rijeka',
        'x'       => 19,
        'y'       => 57,
        'tagline' => 'Zimski grad s pogledom na more',
        'body'    => 'Dan započni šetnjom uz more, a večer sačuvaj za blagdanski ugođaj grada. U raspored stane i izlet do Trsata.',
        'stories' => [],
    ],
    [
        'id'      => 'split',
        'name'    => 'Split',
        'x'       => 39,
        'y'       => 86,
        'tagline' => 'Blagdani u mediteranskom ritmu',
        'body'    => 'Prođi starom gradskom jezgrom i pronađi mjesto za kavu na zubatom suncu. Zimski Split otkriva se polako.',
        'stories' => [],
    ],
    [
        'id'      => 'dubrovnik',
        'name'    => 'Dubrovnik',
        'x'       => 85,
        'y'       => 88,
        'tagline' => 'Zimsko izdanje grada od kamena',
        'body'    => 'Istraži uličice staroga grada i spoji šetnju s lokalnim okusima. Izvan ljetne vreve ima više prostora za male gradske priče.',
        'stories' => [],
    ],
];

$acf_stories = advent_borko_stories((int) get_the_ID());

return [
    'categories' => $advent_categories,
    'stories'    => $acf_stories ?? array_values(array_filter($advent_stories, fn($s) => !empty($s['published']))),
    'cities'     => $advent_cities,
    'is_demo'    => $acf_stories === null,
];
