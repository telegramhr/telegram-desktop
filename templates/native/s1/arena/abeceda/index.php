<?php get_header(); ?>

<?php

$the_bois = array(
    array(
        "letter" => "A",
        "file" => "A",
        "title" => "Auto na daljinsko upravljanje",
        "description" => "Automobil na daljinsko upravljanje raznih svjetskih poznatih brandova poput Mercedesa, Lamborghinija, Ferrari i drugih poznatih imena oduševit će svako dijete, ali i one malo veće.",
        "url" => "https://www.arenacentar.hr/brand/denis/",
        "info" => "Denis, 139,99 kuna"
    ),
    array(
        "letter" => "B",
        "file" => "B",
        "title" => "NutriBullet",
        "description" => " Uz ovaj vrhunski ekstraktor izvucite maksimum hranjivih sastojaka iz namirnica, pa i one skrivene u pulpi, sjemenkama i kori voća i povrća.",
        "url" => "https://www.arenacentar.hr/hr/novosti/sve-za-novi-jesenski-pocetak/",
        "info" => "Top Shop, 599,90 kn"
    ),
    array(
        "letter" => "C",
        "file" => "C",
        "title" => "Crveni ruž",
        "description" => "Kultni ruž Ruby Woo savršene crvene nijanse jedan je od onih kozmetičkih proizvoda koji svaka žena treba ove jeseni.",
        "url" => "https://www.arenacentar.hr/brand/mac/",
        "info" => "MAC, 165 kn"
    ),
    array(
        "letter" => "Č",
        "file" => "C_1",
        "title" => "Čizme",
        "description" => "Obožavane gležnjače hit su i ove modne sezone. Prednjače crna, zlatna i srebrna kao kraljice street stylea.",
        "url" => "https://www.arenacentar.hr/brand/guess/",
        "info" => "Guess, 1.269 kn"
    ),
    array(
        "letter" => "Ć",
        "file" => "C_2",
        "title" => "Ćup",
        "description" => "Šalica za olovke, flomastere i bojice i ostale sitnice svakom školarcu neophodna je na radnom stolu.",
        "url" => "https://www.arenacentar.hr/brand/mueller/",
        "info" => "Müller, 7,90 kn"
    ),
    array(
        "letter" => "D",
        "file" => "D",
        "title" => "Dres za trening",
        "description" => "Povratak u školu označava i povratak na trening. Svakog će dečka oduševiti treniranje u profi dresu.",
        "url" => "https://www.arenacentar.hr/hr/brand/under-armour/",
        "info" => "Under Armour, majica 199 kn, hlačice 259 kn"
    ),
    array(
        "letter" => "Đ",
        "file" => "D_1",
        "title" => "Đumbir",
        "description" => "Kako biste bili zdravi i odoljeli jesenjim virozama, posegnite za svojim izvorom vitamina.",
        "url" => "https://www.arenacentar.hr/hr/brand/biobio/",
        "info" => "Bio&bio, tinktura đumbira 79,90 kn, korijen đumbira 71,90 kg"
    ),
    array(
        "letter" => "DŽ",
        "file" => "D_2",
        "title" => "Džemper",
        "description" => "Sa širokim rukavima, pletenicama, s etno uzorkom ili jednobojne, veste su must have ove sezone. Nosite ih preko košulja, na boho suknje ili traperice.",
        "url" => "https://www.arenacentar.hr/hr/brand/replay/",
        "info" => "Replay, 1270 kn"
    ),
    array(
        "letter" => "E",
        "file" => "E",
        "title" => "Električni uvijač za kosu",
        "description" => "Želite li savršenu frizuru svakog dana, rješenje je Philips pegla za kosu uz koju možete raditi kovrče ili izravnati kosu.",
        "url" => "https://www.arenacentar.hr/hr/brand/elipso/",
        "info" => "Elipso, 699 kn"
    ),
    array(
        "letter" => "F",
        "file" => "F",
        "title" => "Flomasteri",
        "description" => "Za naglasiti važne stvari u svojim bilješkama ili za crtanje na školskim satima važno je imati pravi spektar boja.",
        "url" => "https://www.arenacentar.hr/hr/brand/dm/",
        "info" => "dm, 14,90 kn"
    ),
    array(
        "letter" => "G",
        "file" => "G",
        "title" => "Grudnjak",
        "description" => "Čipkasti, svileni, satenski ili pamučni...svakoj je ženi najvažnije pronaći najbolji model za novu sezonu.",
        "url" => "https://www.arenacentar.hr/hr/brand/intimissimi/",
        "info" => "Intimissimi, 279 kn"
    ),
    array(
        "letter" => "H",
        "file" => "H",
        "title" => "Hoodie",
        "description" => "Sasvim obične pamučne majice s kapuljačom poput ove Puma postale su neizoistavne u ormarima svih generacija. Nova sezona, novi izbor!",
        "url" => "https://www.arenacentar.hr/hr/brand/intersport/",
        "info" => "Intersport, 439 kn"
    ),
    array(
        "letter" => "I",
        "file" => "I",
        "title" => "Igra",
        "description" => "Najljepši trenuci u životu su oni provedeni u bezbrižnoj igri i nikada se ne bi trebali prestati igrati. Monopoly igraju i mladi i stari.",
        "url" => "https://www.arenacentar.hr/hr/brand/hocu-knjigu/",
        "info" => "Hoću knjigu, 261,99 kn"
    ),
    array(
        "letter" => "J",
        "file" => "J",
        "title" => "Jeans",
        "description" => "Ove sezone traperice su ponovno u prvom planu, a one širokog „maminog“ kroja su vodeći trend.",
        "url" => "https://www.arenacentar.hr/hr/brand/levis/",
        "info" => "Levi's, 899 kn"
    ),
    array(
        "letter" => "K",
        "file" => "K",
        "title" => "Kabanica",
        "description" => "Ove jeseni želimo kabanicu za odrasle koja je oličenje funkcije, ali i šarmantnog stila i važno je, naravno, da se može nositi uz sve modne kombinacije.",
        "url" => "https://www.arenacentar.hr/hr/brand/petit-bateau/",
        "info" => "Petit Bateau, 1227 kn"
    ),
    array(
        "letter" => "L",
        "file" => "L",
        "title" => "Laptop",
        "description" => "Školarci, studenti, zaposleni, pa čak i oni koji su u mirovini, život više ne mogu zamisliti bez prijenosnog računala.",
        "url" => "https://www.arenacentar.hr/hr/brand/lenovo/",
        "info" => "Lenovo, 3799 kn"
    ),
    array(
        "letter" => "LJ",
        "file" => "LJ",
        "title" => "Ljuljačka",
        "description" => "Joie njihaljka/ležaljka s glazbenim notama namijenjena je bebama od rođenja pa do 9 mjeseci starosti.",
        "url" => "https://www.arenacentar.hr/hr/brand/magic-baby/",
        "info" => "Magic Baby, 1499,90 kn"
    ),
    array(
        "letter" => "M",
        "file" => "M",
        "title" => "Mobitel",
        "description" => "Statistike kažu kako prosječnu uz svoj mobitel, primjerice Samsung Galaxy A80, provedemo čak 3,5 sati dnevno. Čitamo vijesti, dopisujemo se, razgovaramo.",
        "url" => "https://www.arenacentar.hr/hr/brand/samsung-experience-store/",
        "info" => "Samsung, 3839 kn"
    ),
    array(
        "letter" => "N",
        "file" => "N",
        "title" => "Naočale",
        "description" => "Trendi ružičasti okviri pristaju svakoj boji očiju i kose, a svakoj će školarki nadopuniti i modni stil.",
        "url" => "https://www.arenacentar.hr/hr/brand/Ghetaldus/",
        "info" => "Ghetaldus, 378 kn"
    ),
    array(
        "letter" => "NJ",
        "file" => "NJ",
        "title" => "Njoki",
        "description" => "Volimo ih kada se tope u ustima i ukusno sljube s omiljenim umakom ili sočnim komadom mesa.",
        "url" => "https://www.arenacentar.hr/hr/brand/interspar/",
        "info" => "Interspar, 11,49 kn"
    ),
    array(
        "letter" => "O",
        "file" => "O",
        "title" => "Ogrlica za ljubimce",
        "description" => "Kada su psi i mace u pitanju, svatko se od nas trudi odabrati im ogrlicu koja će biti lijepa, ali i ugodna.",
        "url" => "https://www.arenacentar.hr/hr/brand/zoo-city/",
        "info" => "ZOO City 34,99 kn"
    ),
    array(
        "letter" => "P",
        "file" => "P",
        "title" => "Probiotici za kožu",
        "description" => "Jesen je pravo vrijeme da učinite nešto za svoj izgled – posegnite za prvim probiotičkim suplementom Skin Youth Biome.",
        "url" => "https://www.arenacentar.hr/hr/brand/dermacare/",
        "info" => "Dermacare, 399 kn"
    ),
    array(
        "letter" => "R",
        "file" => "R",
        "title" => "Remen",
        "description" => "Odraz je stila, muževnosti i stava. Pravi muški kožnati remen Hugo Boss komad je u kojeg vrijedi investirati.",
        "url" => "https://www.arenacentar.hr/hr/brand/xyz/",
        "info" => "XYZ Fashion Store, 399 kn"
    ),
    array(
        "letter" => "S",
        "file" => "S",
        "title" => "Serum",
        "description" => "Osnažite kožu moćnim serumom Dr. Irena Eris sa hranjivim sastojcima. Nanesite ga ujutro ili navečer, na očišćenu kožu.",
        "url" => "https://www.arenacentar.hr/hr/brand/douglas/",
        "info" => "Douglas, 275 kn"
    ),
    array(
        "letter" => "Š",
        "file" => "S_1",
        "title" => "Školski ruksak",
        "description" => "Vans ruksak najbolji je suputnik svakog školarca. Knjige, bilježnice, oprema za sport, pernica i još mnogo toga putuje s njim.",
        "url" => "https://www.arenacentar.hr/hr/brand/shoebedo/",
        "info" => "ShoeBeDo, 489 kn"
    ),
    array(
        "letter" => "T",
        "file" => "T",
        "title" => "Tenisice",
        "description" => "Za sve sportske trenutke, ali i one modne te slobodno vrijeme, adidas Ozweego tenisice su najbolji izbor.",
        "url" => "https://www.arenacentar.hr/hr/brand/adidas/",
        "info" => "adidas, 899 kn"
    ),
    array(
        "letter" => "U",
        "file" => "U",
        "title" => "Usisavač",
        "description" => "Vi odmarate, on usisava! Savršen kućni pomagač koji je će mnogima omraženi posao obaviti umjesto vas.",
        "url" => "https://www.arenacentar.hr/hr/brand/iRobot/",
        "info" => "iRobot, 3.299 kn"
    ),
    array(
        "letter" => "V",
        "file" => "V",
        "title" => "Vitamini",
        "description" => "Trebamo ih kako bi osnažili imunitet i mogućnost zaraze raznim virozama sveli na minimum. Za djecu su dobar izbor Dietpharm Centravit Lizzy bomboni.",
        "url" => "https://www.arenacentar.hr/hr/brand/farmacia/",
        "info" => "Farmacia, 79 kn"
    ),
    array(
        "letter" => "Z",
        "file" => "Z",
        "title" => "Zvučnici",
        "description" => "Uz Logitech zvučnike gledanje omiljenog filma, sportskog događaja, crtića ili slušanje glazbe bit će potpuni doživljaj.",
        "url" => "https://www.arenacentar.hr/hr/brand/instar-informatika/",
        "info" => "Instar, 249 kn"
    ),
    array(
        "letter" => "Ž",
        "file" => "Z_1",
        "title" => "Žalfija",
        "description" => "Zbog svog širokog spektra djelovanja često je nazivaju kraljicom ljekovitog bilja. Čaj od kadulje odličan je za jačanje otpornosti organizma i prevenciju.",
        "url" => "https://www.arenacentar.hr/hr/brand/harissa/",
        "info" => "Harissa 30 g, 8,57 kn"
    ),
);

?>
<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap&subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/templates/native/arena/abeceda/style.css?v=2" type="text/css" />
<div class="main-container barracuda">
    <div class="hero center">
        <div class="container">
            <div class="hero-title wow fadeInUp" data-wow-delay="1s">
                <h1>Baš sve od A do Ž</h1>
                <h2>Ultimativna shopping abeceda</h2>
            </div>
        </div>
        <img class="wave" src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/arena/abeceda/img/waveHeader2.svg">
    </div>
    <div class="container flex">
        <p class="introduction first">
            Djeca su krenula u škole i vrtiće, roditelji na nove poslovne avanture, studenti na predavanja, a u Arena Centar su stigle nove kolekcije. Ukratko, postala je činjenica da nam trebaju mnoge nove stvari za hladniji dio godine: tenisice, jakne, laptop, mobitel,...Osim toga, činjenica je i da nemamo previše vremena, pa da svu kupnju želimo obaviti na jednom mjestu.</p>
        <p class="introduction">
            Stoga smo same sebi postavile jedan izazov: napraviti ultimativnu lifestyle shopping abecedu. Jer ako išta voli redakcija Super1, to su izazovi. Ok, i shopping. Stoga smo jedan dan u redakciji zamijenile našim najvećim shopping centrom - Arena Centrom, s namjerom da provjerimo ima li ondje <a href="https://www.arenacentar.hr/hr/a-do-z/" target="_blank">baš sve od A do Ž</a>. U nastavku donosimo potvrdu da smo u tome uspjele
        </p>
    </div>
    <div class="container flex arena-container">
        <?php
            foreach ($the_bois as $key => $value) {
                echo '
                <div class="third pad-me flex-responsive">
                    <a href="';
                    if ($value["url"] == "https://www.arenacentar.hr/hr/novosti/sve-za-novi-jesenski-pocetak/") {
                        echo $value["url"];
                    }
                    else {
                        echo "https://www.arenacentar.hr/hr/";
                    }
                    echo '" class="tilt-card" target="_blank" data-tilt>
                        <div class="img-parent">
                            <img class="animate" src="'; echo get_stylesheet_directory_uri(); echo'/templates/native/arena/abeceda/img/'.$value["file"].'.png">
                        </div>
                        <div class="letter">'.$value["letter"].'</div>
                        <div class="full card-info flex pad-me">
                            <h3 class="full">'.$value["title"].'</h3>
                            <p class="full">'.$value["description"].'</p>
                            <p class="info">'.$value["info"].'</p>
                        </div>
                    </a>
                </div>
                ';
            }
        ?>
    </div>
    <a href="https://www.arenacentar.hr/hr/a-do-z/" target="_blank"><p class="outro animate">Za savršen lifestyle shopping baš sve od A do Ž pronađite u Arena Centru.</p></a>
    <div class="native-signature wow fadeInUp">
        <div class="container flex center">
            <img class="tg-studio" src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/arena/abeceda/img/tg_studio.png" alt="TG Studio logo" />
            <p>Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Arena Centar i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
    </div>
</div>
<script src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/arena/abeceda/universal-tilt.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/arena/abeceda/functions.js"></script>
<script>
    var time = new Date().getTime()
    var image = new Image(1,1);
    image.src= 'https://gdehr.hit.gemius.pl/_'+time+'/redot.gif?id=0iI7K6NMnAfG655e42CFBpQ5LW8uOIMgP8Yixf__vX3.D7/fastid=ieymdalfekckpplunndqiwkbtbka/stparam=vjmphijhdn/nc=0/gdpr=0/gdpr_consent=';
    document.body.appendChild(image);
</script>
<?php get_footer();
