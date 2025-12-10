<main class="w-full ">
    <div class="snow"></div>
    <?php include 'template-parts/hero.php'; ?>

    <?php partial('stations', [
        'native_path' => $native_path,
        'style' => 'bordo',
        'title' => 'Top stanice za provod',
        'description' => 'Blagdanski dani skrivaju najljepše priče, a najbolje od njih događaju se upravo na našim top stanicama za provod. Na brojnim pozornicama pronaći ćete idealnu priliku za ples, obiteljsko druženje, romantičnu šetnju ili čisto uživanje u zimskoj atmosferi. Ovi živahni punktovi namijenjeni su za sve koji žele osjetiti pravi duh blagdana.',
        'polaroids' => [
            ['image' => 'https://www.telegram.hr/wp-content/uploads/2025/11/tg-naslovna-2025-11-25-1-1-2.jpg', 'text' => 'Na manje od sat i pol vožnje od Zagreba čeka vas genijalan adventski program. Sve počinje ovog vikenda', 'link' => ' https://www.telegram.hr/partneri/na-manje-od-sat-i-pol-voznje-od-zagreba-ceka-vas-genijalan-adventski-program-sve-pocinje-ovog-vikenda/ '],
            ['image' => $native_path . '/assets/posts/advent-zagreb.webp', 'text' => 'Nakon dvije godine Advent se vraća na Gornji grad: ovo su lokacije koje nećemo propustiti', 'link' => 'https://www.telegram.hr/partneri/nakon-dvije-godine-advent-se-vraca-na-gornji-grad-ovo-su-lokacije-koje-necemo-propustiti/'],
            ['image' => 'https://images.telegram.hr/7z4cZZsO0Fo09hjL4s3CCrsWbeMHVxfW9FroXBhJkcQ/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMTEvYWR2ZW50LXUtZ29yaWNpLWNvdmVyLmpwZw.webp', 'text' => 'Ovih dana počinju i adventski sajmovi u okolici Zagreba, evo što vas sve ondje očekuje', 'link' => 'https://www.telegram.hr/super1/life/adventski-sajmovi-u-okolici-zagreba-vodic/'],
            ['image' => 'https://images.telegram.hr/jmLMtwZNq6gp2K3Ibf4YcUEmMMtdYqZ0xs1A6CKcFK8/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMTIvcml2YS5qcGc.webp', 'text' => 'Božićna čarolija uz more: doznali smo zašto ovaj mediteranski Advent treba posjetiti čim prije', 'link' => 'https://www.telegram.hr/partneri/bozicna-carolija-uz-more-doznali-smo-zasto-ovaj-mediteranski-advent-treba-posjetiti-cim-prije/'],
        ],
    ]); ?>
    <?php partial('stations', [
        'native_path' => $native_path,
        'style' => 'dark-green',
        'title' => 'Top stanice za zalogaj',
        'description' => 'Ovdje vas čekaju mirisi koji mame izdaleka, delicije koje spajaju tradiciju i modernost te zalogaji koji podsjećaju zašto u prosincu ne brojimo kalorije. Krenite s nama na gastro obilazak u kojemu će i najzahtjevniji gurmani pronaći nešto po svom ukusu. ',
        'polaroids' => [
            ['image' => $native_path . '/assets/posts/fuliranje.webp', 'text' => 'Posjetili smo Advent i pronašli svoje favorite, donosimo veliki vodič za Fuliranje i Fooling Around', 'link' => 'https://www.telegram.hr/super1/life/advent-fuliranje-fooling-around-sto-smo-isprobali/'],
            ['image' => 'https://images.telegram.hr/A7gkJO_STouT_j-9ypcrQYGCcG3g0asgTOPx-CSmxE4/preset:s1single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMTEvemFncmViLWFkdmVudC0yMDI1LWxva2FjaWplLmpwZw.webp', 'text' => ' Gdje na Advent? Fooling Around, Ledeni park i još 9 adventskih lokacija u Zagrebu', 'link' => 'https://www.telegram.hr/super1/life/gdje-na-advent-fooling-around-ledeni-park-i-jos-9-adventskih-lokacija-u-zagrebu/'],
            ['image' => 'https://images.telegram.hr/nhsE7U93twbNowudlQUbFDaj9oqIYE_wi2xwSLon8kY/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMTIvZHNjMTk3MC5qcGVn.webp', 'text' => 'Više od 50 različitih jela te 16 kuhara i influencera u dvobojima Zvijezde kuhaju', 'link' => 'https://www.telegram.hr/super1/life/50-razlicitih-jela-eu-advent/'],
        ],
    ]); ?>
    <?php partial('stations', [
        'native_path' => $native_path,
        'style' => 'red',
        'title' => 'Top stanice za cugu',
        'description' => 'Na našim top stanicama za cugu pronađite inspiraciju za najbolja zimska party druženja s ekipom, ali i opuštenije tople napitke koji će oduševiti čak i one najmanje. Kuhano vino, zimski kokteli i neodoljivi punčevi i tople čokolade, izbor je na vama.',
        'polaroids' => [
            [
                'image' => 'https://images.telegram.hr/Orz4Hy7XVE9UG3x8_qFeFMHZfoI81V7J6dk8AlOXtzQ/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDEvc2h1dHRlcnN0b2NrLTIwNzgzOTk4NTcuanBn.webp',
                'text' => 'Na TikToku svi piju zdravu verziju vruće čokolade sa sastojkom koji nikad ne biste pogodili',
                'link' => 'https://www.telegram.hr/super1/recepti/vruca-cokolada-s-temeljcem-od-kostiju-tiktok-recept/'
            ],
            [
                'image' => $native_path . '/assets/posts/fuliranje.webp',
                'text' => 'Posjetili smo Advent i pronašli svoje favorite, donosimo veliki vodič za Fuliranje i Fooling Around',
                'link' => 'https://www.telegram.hr/super1/life/advent-fuliranje-fooling-around-sto-smo-isprobali/'
            ],
        ],
    ]); ?>

    <?php partial('stations', [
        'native_path' => $native_path,
        'style' => 'blue',
        'title' => 'Top stanice za poklone',
        'description' => 'Krenite u potragu za poklonima koji će razveseliti, iznenaditi i ostati zapamćeni još dugo nakon što se lampice ugase, a božićne pjesme utihnu. Ovdje vas čekaju kreativne ideje, neodoljive sitnice, domaći proizvodi i unikatni darovi.',
        'polaroids' => [
            [
                'image' => 'https://www.telegram.hr/wp-content/uploads/2025/11/party-kolekcije-cover.jpg',
                'text' => 'Stigle su party kolekcije za blagdansku sezonu! Ovo su svi komadi koje trebate u svojim košaricama',
                'link' => 'https://www.telegram.hr/super1/shopping-vodic/party-kolekcije-najbolji-modeli-zimski-party-look/'
            ],
            [
                'image' => 'https://images.telegram.hr/GvHZHC8wJcL4aAimlkOfPiSpBh0i4MwC5mwWzMtZZk0/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMTEvYnVyaW1vdmEtY292ZXIuanBn.webp',
                'text' => 'Što svi žele za Božić? Google je objavio listu najpoželjnijih poklona na kojoj smo našli super ideje',
                'link' => 'https://www.telegram.hr/super1/life/google-holiday-100-bozicni-pokloni-vodic/'
            ],
            [
                'image' => 'https://images.telegram.hr/wGrzNGVq6bIt953P6m7NrYL9D1b4z14aOkmYgTqLnhg/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMTEvc2h1dHRlcnN0b2NrLTI2Njc0OTgwNzkuanBn.webp',
                'text' => 'Ovi proizvodi neizostavni su u dekoriranju božićnog doma. Znamo gdje ih uloviti na popustu',
                'link' => 'https://www.telegram.hr/partneri/ovi-proizvodi-neizostavni-su-u-dekoriranju-bozicnog-doma-znamo-gdje-ih-uloviti-na-popustu/'
            ],
        ],
    ]); ?>
    <?php include 'template-parts/footer.php'; ?>

</main>
<?php

function partial($template, $props = [])
{
    extract($props);

    include __DIR__ . "/template-parts/{$template}.php";
}
?>