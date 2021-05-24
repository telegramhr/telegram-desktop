<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = 'https://www.telegram.hr/wp-content/themes/telegram2-desktop/templates/native/velux/bioraznolikost/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/velux/bioraznolikost/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/velux/bioraznolikost/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();
    ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=4.0" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>/slick/slick.css" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $native_path ?>/slick/slick.js"></script>
    <script src="<?php echo $native_path ?>functions.js?ver=3.0"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,800;1,800&family=Merriweather:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<div class="main-container flex">
    <div class="native-hero full flex relative">
        <a href="https://telegram.hr/" class="header-logos center">
            <img src="<?php echo $native_path ?>img/telegram_logo_white.svg" alt="Telegram Logo">
        </a>
        <video src="<?php echo $native_path ?>img/cover_sklat.mp4" autoplay muted playsinline loop></video>
        <h1 class="full native-title center-text hide">Ovo je sklat, znan i kao ANGEL SHARK, pušten u Jadran nakon što se upleo u ribarsku mrežu. Toliko je rijedak da ga do tada većina ribara nikad nije vidjela.</h1>
        <div class="tile-overlay hide" style="background-image: url('<?php echo $native_path ?>img/gridtile.png');"></div>
    </div>
    <section class="full native-content">
        <div class="text-container flex relative">
            <img src="<?php echo $native_path ?>img/wwf_03.jpg" alt="Petra, Patrik, Neven i Fabijan">
            <h2 class="full center-text">Petra, Patrik, Neven i Fabijan čuvari su naših prirodnih staništa i životinja. Evo s čime se susreću svaki dan</h2>
            <div class="full flex relative metadata">
                <div>22.05.2021.</div>
                <div>U suradnji s partnerom Velux</div>
            </div>
            <p>Sredinom travnja jedan je ribar na području rta Kamenjak u Istri svojim trostrukim mrežama stajaćicama za sipe, na dubini od 23 metara, slučajno ulovio mladog “plosnatog morskog psa”. Neozlijeđenu jedinku dugu tek nešto malo više od pola metra odmah je donio u pulski Aquarium gdje je ustanovljeno da se radi o mladom sklatu sivcu, strogo zaštićenoj i ugroženoj vrsti.</p>
            <p>Stručnjaci tamošnjeg Aquariuma su ga 4. svibnja odlučili vratiti u more. Odabrano je područje Nacionalnog parka Brijuni u kojem je ribolov zabranjen te je pogodan za razmnožavanje jedinki. O ugroženosti životinjskih vrsta, o bioraznolikosti Jadrana, Hrvatske i svijeta, ali i o tome što možemo kao pojedinci i društvo učiniti kako bismo oživjeli naš Planet, razgovarali smo sa stručnjacima iz WWF-a Adria, nevladine organizacije za zaštitu prirode.</p>
            <style>
                .video-container {
                    position: relative;
                    padding-bottom: 56.25%;
                    padding-top: 30px;
                    height: 0;
                    overflow: hidden;
                }

                .video-container iframe,
                .video-container object,
                .video-container embed {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                }
            </style>
            <div class='full video-container'><iframe src='https://www.youtube.com/embed/2D68B08AJhA' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>
            <p>U međuvremenu su na snazi razne akcije kojima se želi očuvati bioraznolikost našeg mora. Primjerice projektom Fish Forward se želi podići svijest o društvenim i ekološkim utjecajima potrošnje proizvoda iz ribarstva, a u sklopu njega je umjetnik Boris Bare u zagrebačkom naselju Sigečica oslikao mural na kojem posebno mjesto ima i sklat sivac.</p>
            <p>“Za lokaciju je odabrana Sigečica u kojoj sve ulice nose imena naših otoka. Mural koji je oslikao umjetnik Boris Bare nalazi se u Rapskoj ulici 26b, a njegova posebnost je što je oslikan bojama koje pročišćavaju zrak”, govori nam Petra Počanić, stručnjakinja za komunikacije i voditeljica projekta Fish Forward u WWF Adria.</p>
            <img src="<?php echo $native_path ?>img/wwf_01.jpg" alt="Petra, Patrik, Neven i Fabijan">
            <p>Ni na kopnu situacija nije ništa bolja i članovi WWF-a Adria vrijedno rade na očuvanju ugroženih vrsta, posebice vuka, risa i medvjeda, tri velike zvijeri koje su u potpunosti nestale iz velikog dijela Europe. No, na sreću, situacija u našim krajevima nije nikada bila tako crna kao na zapadu Europe. “Najgore je prošao ris, tajanstvena i plaha mačka koja je gotovo u potpunosti nestala te se populacija na našim prostorima očuvala reintrodukcijom šest jedinki iz Karpata 1973. godine. Populacija medvjeda nam je stabilna i rijedak je primjer vrlo dobre suradnje lovaca, istraživača i nadležnih tijela”, ističe Neven Šlopar, koordinator u Programu divljih vrsta WWF-a.</p>
            <h3 class="full center-text">
                BIORAZNOLIKOST - PUT ZA OPSTANAK <br>
                Živjeli smo od glavnice, umjesto od kamata
            </h3>
            <p>Pitanje očuvanja bioraznolikosti postalo je pitanje opstanka biljnog i životinjskog svijeta, ali i pitanje čovjekova opstanka. Biološku raznolikost gubimo zabrinjavajućom brzinom. Od 1970. godine veličina populacija sisavaca, ptica, riba, vodozemaca i gmazova smanjena je za zabrinjavajućih 68 posto. Ljudi i planet nikada nisu bili bliže katastrofi i hitno moramo promijeniti svoje navike i staviti očuvanje prirode u prvi plan.</p>
            <p>Vrlo je uska i veza između epidemija koje predstavljaju ozbiljnu ugrozu ljudskoj populaciji i epohalnih razmjera gubitka prirode uzrokovanih ljudskim aktivnostima. Mnoge bolesti, poput ebole, SIDE, SARS-a, ptičje gripe, svinjske gripe i novog koronavirusa COVID-19, nisu sasvim slučajne katastrofe, već su neizravna posljedica našeg utjecaja na prirodne ekosustave. </p>
            <p>Pojava novih patogenih virusa za ljude, koji su prethodno kružili samo životinjskim svijetom, fenomen je nadaleko poznat kao prelijevanje (engl. spillover). U ekologiji i epidemiologiji spillover označava trenutak kada patogen prelazi iz jedne vrste domaćina na drugu, a smatra se da i ovaj prijelaz može biti u osnovi porijekla novog koronavirusa s kojim se borimo. </p>
            <p>“Kolaps bioraznolikosti, kao i klimatski kolaps, vode u kolaps civilizacije i čovječanstva. Činjenica je da Zemlja ubrzano gubi svoju bioraznolikost, raznolikost gena, vrsta i ekosustava. Koliko god neki to izabrali ignorirati, naš opstanak ovisi o uslugama koje ekosustavi pružaju, a čist zrak, pitka voda i hrana samo su one najosnovnije bez kojih život nije moguć”, govori nam Patrik Krstinić. </p>
            <p>A kako smo došli do toga? “Koristili smo resurse i mogućnosti našeg planeta preko one mjere koju biofizički dozvoljavaju ekološki sustavi i procesi. Živjeli smo od glavnice umjesto od kamata. Nismo bili niti odgovorni niti održivi. Prelovili smo mora, preorali smo šume, sve smo podredili kratkoročnim ekonomskim ciljevima i povećavali smo pritisak na okoliš. Nismo znali, no sad to znamo i nemamo više opravdanja”, napominje Krstinić. </p>
            <p>Zahvaljujući znanosti i organizacijama koje već dugi niz godina štite interese prirode i ljudi, teme zaštite okoliša konačno dolaze u centar pažnje i javnosti i politike. “Ljudi pokazuju da su spremni i sposobni mijenjati se. Mijenjaju svoje potrošačke i životne navike, mijenjaju svoje prioritete, mlade generacije traže brže promjene. Sve nam to daje razlog za optimizam i vjeru da ćemo ipak uspjeti vratiti naš planet u ravnotežu”, optimističan je.</p>
            <h3 class="full center-text slider-title">7 najugroženijih vrsta Jadrana</h3>
            <div class="full gallery relative">
                <div>
                    <img src="<?php echo $native_path ?>img/novisklat.jpg" aria-hidden="true">
                    <h3 class="full">SKLAT SIVAC (Squatina squatina)</h3>
                    <p>Jedna od najugroženijih vrsta hrskavičnih riba (morskih pasa i raža) u Jadranu. Ugroženost sklatova u Jadranu posljedica su dugotrajnog i intenzivnog ribolova koćom, mrežama stajaćicama i pridnenim parangalima, ali i gubitkom staništa uzrokovanog ribolovnim aktivnostima. Opstanak ove vrste ovisi o razvoju mjera zaštite kao što su područja ograničena za ribolov. Foto: Aquarium Pula</p>
                </div>
                <div>
                    <img src="<?php echo $native_path ?>img/jadran/jegulja.jpg" aria-hidden="true">
                    <h3 class="full">JEGULJA (Anguilla anguilla)</h3>
                    <p>Jegulja je riba koštunjača koja iz slatkih voda putuje na mrijest u more. Iz europskih slatkovodnih vodotoka spolno zrele jedinke odlaze u Sargaško more u sjeverozapadnom Atlantiku gdje se mrijeste na dubini od 500 - 1000 m. Nakon mriješćenja odrasle jedinke ugibaju a ličinke nakon izlijeganja započinju svoj dugi povratak u Europske rijeke. Brojnost jegulja u Europi se smanjuje, a uzrok tome je pretjerani lov i izgradnja brana na rijekama bez ribljih staza.</p>
                </div>
                <div>
                    <img src="<?php echo $native_path ?>img/jadran/crveni-koralj.jpg" aria-hidden="true">
                    <h3 class="full">CRVENI KORALJ (Corallium rubrum)</h3>
                    <p>Od davnina se koristila za izradu nakita što potvrđuju crteži na zidovima starih Egipćana, Grka i Rimljana. U novije vrijeme intenzitet vađenja crvenog koralja je porastao. Procjenjuje se da se godišnje se iz Sredozemnog mora izvadi oko 70 tona crvenog koralja. Osim eksploatacije za izradu nakita, na populacije crvenog koralja utječe povećanje temperature mora uzrokovano klimatskim promjenama i zagađenje mora, ali i spor rast koji iznosi 4 do 8 mm godišnje.</p>
                </div>
                <div>
                    <img src="<?php echo $native_path ?>img/jadran/periska.jpg" aria-hidden="true">
                    <h3 class="full">PERISKA (Pinna nobilis)</h3>
                    <p>Periska je endem i najveći Mediteranski školjkaš, koji može dosegnuti visinu od 120 centimetara. Uzroci ugroženosti ove vrste u prošlosti bili su izlov, sidrenje i ribolov obalnim mrežama potegačama. Zaštita periski uvedena 1977. godine rezultirala je oporavkom populacije u Jadranu. Nažalost, 2016. godine na području Baleara periske su počele oboljevati od nepoznate bolesti sa smrtnošću većom od 99%. Bolest se brzo proširila cijelim Mediteranom. Prva potvrda o pojavi zaraze u Jadranu zaprimljena je u svibnju 2019. Do danas cijela jadranska populacija periski podlegla je bolesti. Trenutno je periska pod visokim rizikom od izumiranja u cijelom Sredozemnom moru.</p>
                </div>
                <div>
                    <img src="<?php echo $native_path ?>img/jadran/GREGULA--2.jpg" aria-hidden="true">
                    <h3 class="full">GREGULA (Puffinus yelkouan)</h3>
                    <p>Gregula je morska ptica iz skupine cjevonosnica, kojoj pripada i albatros, ptica s najvećim rasponom krila. Gregula je endem Sredozemnog mora. Svega 300 do 400 parova gregula gnijezdi na pučinskim otocima srednjeg Jadrana, Svetom Andriji i lastovskom arhipelagu. Slučajno naseljavanje štakora brodovima na otoke gdje gnijezde gregule negativno utječe na populaciju gregula.U nedostatku hrane, štakori se hrane jajima i tek izleglim pticama, a negativno utječe i slučajni ulov u ribolovnim alatima.</p>
                </div>
                <div>
                    <img src="<?php echo $native_path ?>img/jadran/Sredozemna-med.jpg" aria-hidden="true">
                    <h3 class="full">SREDOZEMNA MEDVJEDICA (Monachus monachus)</h3>
                    <p>Sredozemna medvjedica je jedna od najugroženijih vrsta sisavaca na svijetu. Svega 600 jedinki živi u tri zemljopisno izolirane populacije – istočno Sredozemlje (Grčka, Cipar, Turska), zapadna obala Afrike i otočje Madeira. Premda se smatra izumrlom u Jadranu pojedine jedinke iz Grčke populacije povremeno posjećuju Jadransko more. Sredozemna medvjedica povijesno je bila izlovljavanja radi smanjenja interakcije s ribarstvom. Danas je njezina ugroženost najviše povezana sa smanjenjem obalnih staništa i dostupnog plijena.</p>
                </div>
                <div>
                    <img src="<?php echo $native_path ?>img/jadran/OCEANSKI-POROST.jpg" aria-hidden="true">
                    <h3 class="full">OCEANSKI POROST (Posidonia oceanica)</h3>
                    <p>Oceanski porost ili jednostavno posidonija je endemska morska cvjetnica Sredozemnog mora. Ova biljka jedna je od najdugovječnijih organizama Sredozemlja te može živjeti i do 1000 godina. Procjenjuje se da je livada posidonije uz obale otoka Ibice, koja se prostire u dužini od 8 km stara oko 100000 godina. Livade posidonije sposobne su "zarobiti“ velike količine ugljičnog dioksida. Ugrožene su brojnim ljudskim djelovanjem: gradnjom i nasipavanjem u obalnom području, sidrenjem, ribolovom povlačnim mrežama, otpadnim vodama, marikulturom i širenjem invazivnih vrsta.</p>
                </div>
            </div>
            <h3 class="full center-text">Koliko je godina potrebno jednoj kompaniji da nadoknadi svoj ukupni CO2 footprint?</h3>
            <p>Pariški sporazum o klimatskim promjenama 2015. godine potpisalo je 195 zemalja koje su se okupile kako bi ostvarile zajednički cilj – smanjile emisije stakleničkih plinova i ograničile rast globalne temperature na manje od 2°C u odnosu na predindustrijsku razinu. Pritom su se sve članice Europske unije obvezale da će do 2030. smanjiti emisije stakleničkih plinova za najmanje 40 posto kako bi se ublažile posljedice globalnog zatopljenja.</p>
            <p>Trenutna emisija stakleničkih plinova najviša je u povijesti. Ona uzrokuje stvaranje efekta staklenika i povećanje globalne temperature, ali i ekstremnih vremenskih nepogoda. Utječe i na povećanje razine mora, razaranje prirodnih staništa i izumiranje prirodnih vrsta. Premda mnoge kompanije traže rješenja za smanjenje svog negativnog utjecaja na okoliš, malo je primjera velikih kompanija koje su otišle dalje od onoga što nazivamo greenwashingom. </p>
            <p>Pozitivan primjer dolazi iz tvrtke <a href="https://www.velux.hr/o-nama/lifetime-carbon-neutral" target="_blank">Velux,</a> koja radi zanimljivu stvar. Oni su jedna od prvih kompanija u svijetu koja se obvezala da će izbrisati svoj ekološki footprint. Objavili su inovativnu Strategiju održivosti s ciljem potpunog nadoknađivanja svoje emisiju ugljikova dioksida koju su proizveli od osnutka 1941. godine. Zajedno s WWF-om su izračunali da njihov footprint iznosi približno 5,6 milijuna tona C02 . Naravno, cilj im je smanjiti i buduće emisije CO2 te su s WWF-om dogovorili 20-godišnje partnerstvo.”Ne samo da će smanjiti i svoje buduće emisije CO2, već će zatražiti i od svojih dobavljača da učine isto”, rekla je Petra Boić Petrač.</p>
            <p>Strategijom održivosti tvrtka se obvezala da će u skladu s Pariškim sporazumom do 2030. postati ugljično neutralna kompanija. Kako bi transformirala svoje poslovanje, grupa će ubrzati ulaganja u energetsku učinkovitost, prijeći na obnovljivu energiju i kupovati električnu energiju iz 100% obnovljivih izvora, te uvesti promjene u nabavi i obradi materijala, s ciljem zaštita šuma i bioraznolikosti. </p>
            <p>Na svjetskoj razini uništeno je 80 posto površina šuma, a krčenje šuma jedan je od glavnih uzroka smanjenja bioraznolikosti. Emisije koje nastaju uglavnom zbog krčenja šuma, drugi su najveći uzrok klimatskih promjena nakon upotrebe fosilnih goriva pa je djelovanje u tom području iznimno važno.</p>
            <p>Tako u Ugandi provode projekt kojim žele obnoviti degradirane šume, potaknuti uzgoj novih i zaštititi preostale prirodne šume kroz širok spektar mjera - od pošumljavanja do sadnje novih šuma, ali i podizanjem plantaža izvan zaštićenih područja kako bi se zadovoljila potražnja za šumskim proizvodima i tako smanjio pritisak na prirodne šume.</p>
            <h3 class="full center-text slider-title">Ugrožene životinje Ugande</h3>
            <div class="full gallery relative">
                <div>
                    <img src="<?php echo $native_path ?>img/uganda1.jpg" aria-hidden="true">
                    <p>Afrički slon</p>
                </div>
                <div>
                    <img src="<?php echo $native_path ?>img/uganda2.jpg" aria-hidden="true">
                    <p>Čagalj</p>
                </div>
                <div>
                    <img src="<?php echo $native_path ?>img/uganda3.jpg" aria-hidden="true">
                    <p>Čimpanza</p>
                </div>
                <div>
                    <img src="<?php echo $native_path ?>img/uganda4.jpg" aria-hidden="true">
                    <p>Colobus majmun</p>
                </div>
                <div>
                    <img src="<?php echo $native_path ?>img/uganda5.jpg" aria-hidden="true">
                    <p>Prepelica</p>
                </div>
                <div>
                    <img src="<?php echo $native_path ?>img/uganda6.jpg" aria-hidden="true">
                    <p>Rogač</p>
                </div>
                <div>
                    <img src="<?php echo $native_path ?>img/uganda7.jpg" aria-hidden="true">
                    <p>Vodenkonj</p>
                </div>
            </div>
            <h3 class="full center-text">
                Samo zdrava priroda može nam pružati sigurnost koja nam je potrebna
            </h3>
            <p>Sve što radimo stvara pritisak na prirodu – hrana koju jedemo, odjeća koju kupujemo, kako putujemo, kako se zabavljamo.</p>
            <p>“Zato je važno činiti promjenu na svim razinama - od malih osobnih promjena do velikih i brzih pomaka na državnim i međunarodnim razinama. Moramo birati bolje i moramo zahtijevati više. Sve što činimo mora prije svega štititi prirodu - jer, samo zdrava priroda može nam pružati sigurnost koja nam je potrebna”, govori Petra Boić Petrač, direktorica komunikacija u WWF Adria.</p>
            <p>“Trebali bismo svi osvijestiti koliki je naš osobni utjecaj na planet te pokušati redovito primjenjivati neke osnovne korake koji mogu pomoći očuvanju bioraznolikosti. Kupovanje proizvoda iz provjerenih izvora koji garantiraju da proizlaze iz održivih izvora sjajan je primjer. Ne bismo trebali kupovati više no što možemo pojesti - otpad od hrane gorući je problem u svijetu”, napominje dodajući: “I ono najvažnije, trebamo drastično smanjiti svoje emisije CO2, biti energetski učinkoviti i nezavisni.”</p>
            <p>Ljudske aktivnosti su te koje najviše prijete prirodi i to uništavanjem mjesta na kojima određene vrste žive i iskorištavanjem vrsta na neodržive načine. Sjajan primjer kako ljudske aktivnosti mogu potaknuti očuvanje prirodnih staništa dolazi s Lastova, našeg najudaljenijeg naseljenog otoka. Tamo WWF gradi inkubator poslovnih ideja koje spajaju malo poduzetništvo i zaštitu prirode. “Stvaramo poslovne planove, istražujemo tržište i osluškujemo trendove te tako s nositeljima plavih ideja želimo pokazati da zaštitom prirode možemo zaštiti i ljude”, govori nam Fabijan Hrvatin Peronja, koordinator projekta WWF-a Plavi inkubator.</p>
            <p>Lastovski inkubator trenutno je u fazi u kojoj traže tržište i kupce kako bi poslovne ideje doveli do stvarnih proizvoda ili usluga. Prva tvrtka koja je investirala u Plavi inkubator na našem najudaljenijem naseljenom otoku je <a href="https://www.velux.hr/o-nama/lifetime-carbon-neutral" target="_blank">VELUX</a>.</p>
            <div class="full gallery poduzetnici relative">
                <div class="poduzetnik-slide">
                    <div class="icon"><img src="<?php echo $native_path ?>img/ikone/boat1.png?ver=2.0" aria-hidden="true"></div>
                    <h3 class="full">Obrt Gango - Izvlačilište i popravak drvenih brodova</h3>
                    <p>Ivan Jurica Gango profesionalni je graditelj brodova koji svoj zanat želi unaprijediti s izvlačilištem i halom te tako mještanima otoka omogućiti da se njihovi brodovi održavaju i popravljaju na Lastovu.</p>
                </div>
                <div class="poduzetnik-slide">
                    <div class="icon"><img src="<?php echo $native_path ?>img/ikone/fish2.png?ver=2.0" aria-hidden="true"></div>
                    <h3 class="full">Obrt Survival - ribolovni turizam</h3>
                    <p>Profesionalni ribar Ivica Lešić zna da je pritisak na riblji fond prevelik. Sa ženom Helenom pokrenuo turiste vodi na ture na kojima im demonstriraju čari ribolova. Pritom umjesto 2000 bacaju samo 200 metara mreža. Tako Ivica lovi manje, a zarađuje više.</p>
                </div>
                <div class="poduzetnik-slide">
                    <div class="icon"><img src="<?php echo $native_path ?>img/ikone/bike.png?ver=2.0" aria-hidden="true"></div>
                    <h3 class="full">Obrt Toni - e-bicikli i solarna punionica</h3>
                    <p>Iskusna turistička poduzetnica Mila Blašković trenutno iznajmljuje kajake, SUP daske, pedaline i bicikle. Radom na terenu stekla je dojam da je pravo vrijeme za investiranje u e-bicikle kako bi turistima omogućila potpunu slobodu tijekom istraživanja Lastova.</p>
                </div>
                <div class="poduzetnik-slide">
                    <div class="icon"><img src="<?php echo $native_path ?>img/ikone/grozdje.png?ver=2.0" aria-hidden="true"></div>
                    <h3 class="full">OPG Bačko - Agroturizam</h3>
                    <p>Marijo Bačko, rendžer Parka prirode Lastovsko otočje, u slobodno vrijeme strastveni je vinar. Susrećući posjetitelje parka uvidio je da se turistička ponuda može obogatiti tako da turistima pruži autentično iskustvo branja i prerade grožđa u vino.</p>
                </div>
                <div class="poduzetnik-slide">
                    <div class="icon"><img src="<?php echo $native_path ?>img/ikone/sir.png?ver=2.0" aria-hidden="true"></div>
                    <h3 class="full">OPG Bokor - eko-certificirani kozji proizvodi</h3>
                    <p>Nataša i Željko Bokor napustili su “daleki” Zagreb i pokrenuli održivu farmu na Lastovu. Njihov OPG ima zavidnu lepezu proizvoda od prirodnih krema i ulja baziranih na ljekovitim lastovskim biljkama, do prerade ribe trupca, ali i kozjeg mlijeka, jogurta I sira.</p>
                </div>
                <div class="poduzetnik-slide">
                    <div class="icon"><img src="<?php echo $native_path ?>img/ikone/olives.png?ver=2.0" aria-hidden="true"></div>
                    <h3 class="full">OPG Trojković - eko-certificirano, ekstra djevičansko maslinovo ulje</h3>
                    <p>Annette i Zoltan Trojković ugledni su otočki proizvođači ekstra djevičanskog monostortnog maslinovog ulja od autohtone vrste piculje. Redovito osvajaju priznanja i medalje na natjecanjima diljem Europe.</p>
                </div>
                <div class="poduzetnik-slide">
                    <div class="icon"><img src="<?php echo $native_path ?>img/ikone/sea1.png?ver=2.0" aria-hidden="true"></div>
                    <h3 class="full">Obrt Vodanović - prikupljanje glomaznog otpada</h3>
                    <p>Toni Vodanović odlučio se uhvatiti u koštac s problemom kojim se susreće većina otoka - otpadom. Vođen mišlju kako park prirode mora biti primjer drugima, odlučio je očistiti otok od krupnog otpada.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="full native-signature">
        <div class="container flex">
            <div class="full center">
                <img class="partner" src="<?php echo $native_path ?>img/velux.png" alt="Velux logo" />
                <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
            </div>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Velux i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
    </section>
</div>

<?php wp_footer();
?>
</body>

</html>