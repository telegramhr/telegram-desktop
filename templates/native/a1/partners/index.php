<!DOCTYPE html>
<html lang="hr">

<?php

/* Potential native paths */
//$native_path = get_stylesheet_directory_uri() . '/templates/native/a1/partners/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/a1/partners/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/a1/partners/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/a1/partners/';
//$native_path = 'http://localhost/partners/';

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="<?php echo $native_path ?>assets/jquery.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;700&family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <!-- Animate on scroll -->
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/aos/aos.css?v=1.00" type="text/css" />
    <script src="<?php echo $native_path ?>assets/aos/aos.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/operon.css?v=1.03" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/style.css?v=1.07" type="text/css" />
    <!-- Functions -->
    <script src="<?php echo $native_path ?>assets/functions.js"></script>
</head>
<body>
    <div class="main-container flex relative">
        <!-- Top Sticky Nav -->
        <header class="full flex relative">
            <nav class="full top-nav flex relative">
                <div class="container column-horizontal-pad flex relative">
                    <div class="full center relative"><img src="<?php echo $native_path ?>assets/logos/telegram_logo_black.svg" class="top-nav-logo" alt="Telegram logo" /></div>
                </div>
            </nav>
            <div class="full flex relative hero stretch">
                <a href="#ivan" class="fifth flex column-mini-full-pad flex-responsive column-right-border" data-aos="fade-up" data-aos-delay="0">
                    <!-- <div class="full subject-name column-mini-full-pad"><b>Ivan </b><br> Funčić</div> -->
                    <img src="<?php echo $native_path ?>assets/images/ivan_vertical.jpg" alt="Ivan Funčić (Securitas)" class="desktop-only">
                    <img src="<?php echo $native_path ?>assets/images/ivan_horizontal.jpg" alt="Ivan Funčić (Securitas)" class="mobile-only">
                    <div class="full subject-name column-mini-full-pad"><b>Ivan </b><br> Funčić</div>
                </a>
                <a href="#katarina" class="fifth flex column-mini-full-pad flex-responsive column-right-border" data-aos="fade-down" data-aos-delay="750">
                    <!-- <div class="full subject-name column-mini-full-pad"><b>Katarina </b><br> Amižić</div> -->
                    <img src="<?php echo $native_path ?>assets/images/katarina_vertical.jpg" alt="Katarina Amižić (Reboot)" class="desktop-only">
                    <img src="<?php echo $native_path ?>assets/images/katarina_horizontal.jpg" alt="Katarina Amižić (Reboot)" class="mobile-only">
                    <div class="full subject-name column-mini-full-pad"><b>Katarina </b><br> Amižić</div>
                </a>
                <a href="#sinisamarko" class="fifth flex column-mini-full-pad flex-responsive column-right-border" data-aos="fade-up" data-aos-delay="1500">
                    <!-- <div class="full subject-name column-mini-full-pad"><span class="desktop-only"><b>Siniša Pašić </b><br> & Marko Petrak</span><span class="mobile-only"><b>Siniša </b><br> & Marko</span></div> -->
                    <img src="<?php echo $native_path ?>assets/images/inkubator_vertical.jpg" alt="Siniša Pašić & Marko Petrak (Podcast Inkubator)" class="desktop-only">
                    <img src="<?php echo $native_path ?>assets/images/inkubator_horizontal.jpg" alt="Siniša Pašić & Marko Petrak (Podcast Inkubator)" class="mobile-only">
                    <div class="full subject-name column-mini-full-pad"><span class="desktop-only"><b>Siniša Pašić </b><br> & Marko Petrak</span><span class="mobile-only"><b>Siniša </b><br> & Marko</span></div>
                </a>
                <a href="#danijela" class="fifth flex column-mini-full-pad flex-responsive column-right-border" data-aos="fade-down" data-aos-delay="2250">
                    <!-- <div class="full subject-name column-mini-full-pad"><b>Danijela  </b><br> Mirko</div> -->
                    <img src="<?php echo $native_path ?>assets/images/danijela_vertical.jpg" alt="Danijela Mirko (Dizajn Snova)" class="desktop-only">
                    <img src="<?php echo $native_path ?>assets/images/danijela_horizontal.jpg" alt="Danijela Mirko (Dizajn Snova)" class="mobile-only">
                    <div class="full subject-name column-mini-full-pad"><b>Danijela  </b><br> Mirko</div>
                </a>
                <a href="#ivanaandreja" class="fifth flex column-mini-full-pad flex-responsive" data-aos="fade-up" data-aos-delay="3000">
                    <!-- <div class="full subject-name column-mini-full-pad"><span class="desktop-only"><b>Ivana Matanović </b><br> & Andreja Šeperac</span><span class="mobile-only"><b>Ivana </b><br> & Andreja</span></div> -->
                    <img src="<?php echo $native_path ?>assets/images/pismo_vertical.jpg" alt="Ivana Matanović & Andreja Šeperac (PISMO Inkubator)" class="desktop-only">
                    <img src="<?php echo $native_path ?>assets/images/pismo_horizontal.jpg" alt="Ivana Matanović & Andreja Šeperac (PISMO Inkubator)" class="mobile-only">
                    <div class="full subject-name column-mini-full-pad"><span class="desktop-only"><b>Ivana Matanović </b><br> & Andreja Šeperac</span><span class="mobile-only"><b>Ivana </b><br> & Andreja</span></div>
                </a>
            </div>
            <h1 class="full center-text column-horizontal-pad">25 godina uspješnih suradnji</h1>
        </header>
        <section class="full flex relative" id="intro">
            <div class="container column-full-pad text-container flex relative">
                <p class="full bigger-text column-top-pad">Redefinirajući pojam povezanosti na ovom području, A1 Hrvatska u posljednjih se 25 godina prometnuo u tehnološkog lidera koji svojim uslugama i rješenjima oblikuje budućnost digitalne komunikacije.</p>
                <p class="full bigger-text">Od prvog dana tako pomiču granice, s jasnom vizijom prema budućnosti, poslujući u različitim okolnostima, ali nikad unutar vlastite zone komfora. Taj je mindset utkan u DNK kompanije koji se kroz vrijeme odrazio na sve zaposlenike i kulturu poslovanja, uvodeći niz inovacija. Svaka od njih se pamti, a posebno one prve.</p>
                <p class="full bigger-text column-bottom-pad">U nastavku donosimo priče onih koji s A1 Hrvatska posluju godinama i zajedničkim snagama kroz uspješna partnerstva mijanjaju naše društvo na bolje.</p>
            </div>
        </section>
        <article class="full flex relative" id="ivan">
            <div class="full flex relative article-head column-full-pad mobile-no-pad">
                <div class="half flex-responsive flex column-full-pad">
                    <div class="full relative subject-name"><b data-aos="fade-right" data-aos-delay="250">Ivan </b><br> <span data-aos="fade-right" data-aos-delay="1000">Funčić</span></div>
                    <div class="full red-text"><b data-aos="fade-right" data-aos-delay="1250"">Securitas</b></div>
                    <h2 class="full subject-intro" data-aos="fade-right" data-aos-delay="2000">Od tjelesne zaštite do sigurnosnih programa, ova industrija doživjela je pravu revoluciju u posljednjih 10 godina</h2>
                </div>
                <figure class="half flex-responsive flex column-full-pad">
                    <img src="<?php echo $native_path ?>assets/images/ivan_big.jpg" alt="Ivan Funčić (Securitas)">
                    <figcaption class="image-subtitle">Foto: Marko Miščević</figcaption>
                </figure>

            </div>

            <div class="container column-full-pad text-container flex relative">
                <p>U posljednjih 25 godina, svijet se potpuno promijenio - internet je postao stvar potrebe, a ne luksuz. Ušao je u svaku poru našeg života, od onih očekivanih kao što su komunikacija s našim najbližima, pa do onih o kojima možda ne razmišljamo aktivno, a to je sustav osiguravanja.</p>
                <p>Tvrtka Securitas prisutna je u Hrvatskoj od 2011. godine, a od samog početka njihov je glavni partner A1 Hrvatska, kompanija koja ove godine slavi 25 godina svoga postojanja. Upravo zahvaljujući njihovoj infrastrukturi, u posljednjih su 13 godina napravili brojne pomake u ovoj industriji te postavili nove standarde zaštite.</p>
            </div>
            <div class="full center relative center-wrap column-full-pad">
                <figure class="half center flex-responsive center-wrap column-full-pad">
                <img src="<?php echo $native_path ?>assets/images/ivan_big2.jpg" alt="Ivan Funčić (Securitas)" loading="lazy">
                    <figcaption class="image-subtitle full left-text">Foto: Marko Miščević</figcaption>
                </figure>
                <p class="half bigger-text giant-text bold shoo-bottom flex-responsive column-full-pad" data-aos="fade-right">"Industrija zaštite dijeli se na tehničku i tjelesnu, a naš primarni fokus je integracija obje. Naglasak je na sve većem značaju tehničkih sustava, a trenutno su najveći izazovi kako da ljudski faktor uspješno prati njihov skokoviti razvoj", govori Ivan Funčić, direktor Securitasa.
                </p>
            </div>
            <details class = "full">
                <summary>Pročitaj više o Ivanu</summary>
                <div class="container column-full-pad text-container flex relative">
                    <p>Razvoj tehnologije vodi prema smanjenju broja potrebnih izvršitelja fizički na lokaciji, a kako je u Hrvatskoj svakako prisutan trend manjka radnika, objašnjava Funčić, rade na optimizaciji troškova. "Izdaci nam rastu iz godine u godinu zbog rasta plaća, a to pozdravljamo."</p>
                    <p class="full bigger-text bold">Tehnološki skok u posljednjih deset godina</p>
                    <p>Zahvaljujući stabilnoj internetskoj vezi i telekomunikacijama, videonadzor je otišao miljama daleko u posljednjih deset godina. "Prije je snimač postojao na lokaciji, ali mreže su bile slabe, nije bilo moguće prebaciti svu potrebnu količinu podataka. Današnji snimači većinom se nalaze u oblaku, a moderne kamere sadrže i termoviziju."</p>
                    <p>Pojašnjava tako da tehnologija funkcionira na način da sustav automatski upozorava osobu da provjeri zbivanja na kameri zahvaljujući termovizijskoj detekciji. Takav sustav koriste prilikom osiguravanja hrvatske granice. "Sustav se napaja solarnim pločama, a kretanja ljudi i vozila mogu se detektirati s velikih udaljenosti."</p>
                    <p>Brinu i za sigurnost na hrvatskim cestama. Tako se najveći broj kamera nalazi u tunelima, a sam sustav koristi i umjetnu inteligenciju. </p>
                    <p class="giant-text shoo-bottom">"Sve se snima i detektira, a sustav uči na temelju podataka kako bi mogao prepoznati što se točno dogodilo – je li izbila vatra ili se pak nekakav predmet nalazi na cesti. Sve to kako bismo što prije preusmjerili ili zaustavili promet te ograničili posljedice", dodaje.</p>
                    <p class="full bigger-text bold">Osiguravaju hrvatsku granicu i ceste</p>
                    <p>O sigurnosti u Hrvatskoj govori i činjenica da smo prvi u Europskoj uniji po pitanju percepcije – dojam je to i domaćih i stranih ljudi, ističe Funčić. Primjerice, turistima je jako bitno da se osjećaju sigurno na aerodromu, pogotovo tijekom sezone kad su velike gužve zbog učestalijih letova.</p>
                </div>
                <div class="full center relative center-wrap column-full-pad">
                    <figure class="half center flex-responsive center-wrap column-full-pad">
                        <img src="<?php echo $native_path ?>assets/images/ivan_horizontal_2.jpg" alt="Ivan Funčić (Securitas)" loading="lazy">
                        <figcaption class="image-subtitle full left-text">Foto: Marko Miščević</figcaption>
                    </figure>
                    <p class="half bigger-text giant-text bold shoo-bottom flex-responsive column-full-pad" data-aos="fade-right">"Osiguravamo zračne luke u Zagrebu, Puli i Dubrovniku. Imamo zaposlenike posebno obučene za zaštitu putnika i prtljage te ih neprestano educiramo. Tehnologija i tu ide naprijed, a dobar primjer su sustavi napravljeni za skeniranje putnika i prtljage. I tu će doći do velikih promjena u narednih godinu do dvije, zbog novih standarda na razini Europske unije."
                    </p>
                </div>
                <div class="container column-full-pad text-container flex relative">
                    <p>Svi tehnički sustavi koje nude su usluge s dodanom vrijednošću i većom razinom specijalizacije i stručnosti samog osoblja. Tako njihov tehnički odjel čini 60-ak ljudi, a većinu programiranja i softverske podrške pružaju interno. U uspostavljanju svih procesa najviše im je pomoglo iskustvo kolega na razini čitave grupacije.</p>
                    <p>"Dobar je primjer digitalno izvještavanje putem My Securitas aplikacije. Mogli bismo reći da su nas na to 'natjerali' jer smo mi bili lijeni za samostalnu implementaciju, ali sad kad smo vidjeli koliko nam je to olakšalo cijelo poslovanje, teško je zamisliti posao bez toga."</p>
                    <p class="full bigger-text bold">Zaštita kritične infrastrukture</p>
                    <p>Tehnološke promjene dopustile su im i veću transparentnost u komunikaciji s klijentima, što je dovelo i do većeg povjerenja. Tako Funčić objašnjava da sve što rade, rade kako bi omogućili bolju produktivnost. </p>
                    <p>Iako sudjeluju na brojnim velikim projektima, kao što su zaštita logističkih kompanija, pomorskih luka i kritične infrastrukture važne za državu, brinu i za privatne objekte – kuće i stanove.</p>
                    <p class="giant-text shoo-bottom">"Danas je tehnologija sve jeftinija i jeftinija pa korisnici ne vide razlog zbog kojeg ne bi imali efikasan sustav zaštite. Recimo, kad se nešto dogodi, dobijemo odmah signal te pošaljemo patrolu. Ako samo imaš alarm, dogodi se da on počne zvoniti, a ljudi ignoriraju. Mi imamo dobru pokrivenost i jaki smo na terenu."</p>
                    <p>Upravo im tehnička infrastruktura od partnera A1 omogućuje da svi procesi glatko i sigurno napreduju – bez sigurne mreže nema ničega. S druge strane, Securitas osigurava urede kompanije A1, njihov kampus i regionalne urede te trgovine diljem Hrvatske.</p>
                </div>
            </details>
        </article>
        <article class="full flex relative" id="katarina">
            <div class="full flex relative article-head column-full-pad mobile-no-pad">
                <div class="half flex-responsive flex column-full-pad">
                    <div class="full relative subject-name"><b data-aos="fade-right" data-aos-delay="250">Katarina </b><br> <span data-aos="fade-right" data-aos-delay="1000">Amižić</span></div>
                    <div class="full red-text"><b data-aos="fade-right" data-aos-delay="1250">Reboot</b></div>
                    <h2 class="full subject-intro" data-aos="fade-right" data-aos-delay="2000">Ona je strastvena gejmerica koja stoji iza najvećeg gejming događanja u regiji s 50.000 sudionika</h2>
                </div>
                <figure class="half flex-responsive flex column-full-pad">
                    <img src="<?php echo $native_path ?>assets/images/katarina_big.jpg?ver=3.0" alt="Katarina Amižić (Securitas)">
                    <figcaption class="image-subtitle">Foto: Marko Miščević</figcaption>
                </figure>

            </div>
            <div class="container column-full-pad text-container flex relative">
                <p>W, A, S i D svojevrsni su kompas za osvajanje svjetova podijeljenih u mnoštvu različitih nivoa, dodataka i opcija, daleko više od običnih tipki na tipkovnicama. Klik na mišu nije tek običan klik već strateški promišljen potez i jedinstvena meta uspjeha u pomalo drugačijem sportu.</p>
                <p>Zaista, ma što tko o tome mislio, ekipa koja satima sjedi za monitorom daleko je od geekova i ljubitelja tehnologije. Gejming je, naime, odavno prerastao iz hobija u globalni fenomen sa sportskim sjajem, gdje refleksi, strategija i timski rad definiraju uspjeh.</p>
                </div>
            <div class="full center relative center-wrap column-full-pad">
                <figure class="half center flex-responsive center-wrap column-full-pad">
                <img src="<?php echo $native_path ?>assets/images/katarina_big2.jpg?ver=2.0" alt="Katarina Amižić" loading="lazy">
                    <figcaption class="image-subtitle full left-text">Foto: Marko Miščević</figcaption>
                </figure>
                <p class="half bigger-text giant-text bold shoo-bottom flex-responsive column-full-pad" data-aos="fade-right">Virtualni su prostori postali moderni stadioni, a igrači iza tipkovnica i monitora pravi heroji modernog doba, gdje se granice između igara i stvarnosti sve više brišu.
                </p>
            </div>
            <details class = "full">
                <summary>Pročitaj više o Katarini</summary>
                    <div class="container column-full-pad text-container flex relative">
                        <p>Mnogi se skeptici i danas pitaju kako je moguće da sjedenje pred ekranom biva ekvivalentno sportu, no brojni turniri, vojska fanova i milijarde dolara u različitim nagradnim fondovima nameću vrlo jednostavan odgovor.</p>
                        <p class="full bigger-text bold">'Baš kao tenis ili nogomet'</p>
                        <p>“Gejming možda ne spada u okvire klasičnog sporta, pogotovo zbog manjka fizičke aktivnosti za vrijeme samog natjecanja, no sve više ljudi je svjesno da profesionalni  gejmer mora uložiti jednako vježbe i truda za postizanje dobrih rezultata kao i sportaš u nekom tradicionalnom sportu“, objašnjava nam <b>Katarina Amižić</b>, voditeljica produkcije u Rebootu, tvrtki koja stoji iza najvećih konferencija, poput Reboot Develop Bluea i Reboot Develop Reda, i gejming sajmova, kao što je Reboot InfoGamer, u regiji.  </p>
                        <p>Ističe da gejming danas na mnogo načina funkcionira kao sport, poput nogometa ili tenisa. Naime, postoje turniri s velikim nagradnim fondovima, profesionalnim komentatorima, uvodnim točkama, peharima i slično.</p>
                        <p>“Na kraju krajeva, Međunarodni olimpijski odbor sklopio je partnerstvo s Nacionalnim olimpijskim odborom Saudijske Arabije za održavanje inauguralnih Olimpijskih igara u esportu iduće godine“, dodaje Amižić, strastvena gejmerica koja je dio ovog službenog virtualnog svijeta još od 2015. godine.</p>
                        <p class="full bigger-text bold">Postoji i određeni problemi</p>
                        <p>Kao studentica priključila se najprije ekipi koja je tada razvijala jednu računalnu igru, bez ikakvih očekivanja i ideje da će ovo postati nešto više od hobija i „passion projekta“, kako sama kaže.</p>
                    </div>
                    <div class="full center relative center-wrap column-full-pad">
                        <figure class="half center flex-responsive center-wrap column-full-pad">
                            <img src="<?php echo $native_path ?>assets/images/katarina_big3.jpg?ver=2.0" alt="Katarina Amižić" loading="lazy">
                            <figcaption class="image-subtitle full left-text">Foto: Marko Miščević</figcaption>
                        </figure>
                        <p class="half bigger-text giant-text bold shoo-bottom flex-responsive column-full-pad" data-aos="fade-right">“U skoro 10  godina dobro sam se upoznala s domaćom gejming scenom i  obožavam pratiti napredak i uspjehe domaćih studija i svih tvrtki koje na pozitivan način promoviraju domaću gejming scenu“, kaže.
                        </p>
                    </div>
                    <div class="container column-full-pad text-container flex relative">
                        <p>Kako su se videoigre popularizirale, paralelno se krenulo raditi i na rješavanju konkretnih problema gejminga kao takvog, a koji su godinama bili ignorirani. Tu u prvom redu ističe cyber bullying, kao i ovisnost o igrama i nedostatak edukacije u poljima videoigara.</p>
                        <p>“Sve navedeno dugo je zasjenjivalo pozitivne strane i ljepotu videoigara - razvoj kognitivnih  sposobnosti, motoričkih vještina, socijalnih vještina, multitaskinga, strateškog razmišljanja i slično“, pojašnjava.</p>
                        <p class="full bigger-text bold">Godinama promoviraju gejming</p>
                        <p>Kada je riječ o promociji pozitivnih strana gejminga, ali i podizanju svijesti o potencijalnim problemima, uvelike prednjači popularni Reboot InfoGamer powered by A1.</p>
                        <p>Najveći je to regionalni gejming događaj na ovom području koji je prošle godine posjetilo gotovo 50.000 ljudi. “Sve kreće od jako dobre interne suradnje i organizacije posla. Ako je to dobro postavljeno, šanse za pogreške su minimalne“, kaže Katarina.</p>
                        <p>U tom kontekstu ističe da je, s obzirom na manjak događaja ovakvog tipa te njegove veličine, interes izlagača prilično velik. “Na nama je da na Reboot InfoGamer dovedemo što više zanimljivog sadržaja i da svatko može naći nešto za sebe. Uvijek smo u potrazi za inovativnim i  jedinstvenim projektima i izlagačima koji predstavljaju nešto što naši posjetitelji dosad nisu imali prilike vidjeti.“</p>
                        <p class="full bigger-text bold">Ključno je imati dobrog partnera</p>
                        <p>Što je događaj bliže, posla je sve više, a samim time i potencijalnih izmjena originalnog plana. Tu je, kaže Katarina, izrazito važno da u kratkom vremenskom periodu i pod velikim pritiskom što manje kompromitiraju viziju s početka.</p>
                        <p class="giant-text shoo-bottom">“U organizaciji su nam jako važni i naši partneri, a s obzirom na to da ovo radimo više od 10 godina svi naši partneri su tvrtke i individualci s kojima imamo dugogodišnju suradnju i za koje smo sigurni da će posao obaviti kako treba. A1 je naš najvažniji partner već dugi niz godina i igra važnu ulogu u uspješnosti našeg eventa“, ističe.</p>
                        <p>Naime, A1 Adria League je, kao najdugovječnija regionalna esport liga, već nekoliko godina dobro poznat i neizbježan dio Reboot InfoGamera na kojem se održavaju velika finala. Također, od prošle godine, na pozornici u A1 Zoni održava se i finale A1 Student eChallengea, studentske gejming lige. Uz ove aktivnosti, A1 je pokrenuo i velik broj edukativnih aktivacija vezanih uz esport i gejming, pojašnjava nam Katarina.</p>
                        <p class="full bigger-text bold">Ni COVID ih nije spriječio</p>
                        <p>Dodaje da im je iznimno bitno, uz zabavan i kvalitetan sadržaj, svoje posjetitelje i educirati, mladima pružiti sve potrebe informacije vezane uz odgovorno igranje. “A1 Hrvatska je partner koji upravo projektom #BoljiOnline pokušava educirati mlade o toj temi.“</p>
                        <p>Osim toga, brz internet na cijelom sajmu mogu zahvaliti upravo ekipi iz A1 koja se svake godine trudi osigurati maksimalnu brzinu i stabilnost interneta za sve izlagače, ali i posjetitelje.</p>
                        <p>“Njihova podrška igrala je veliku ulogu za Reboot i u vrijeme COVID-a kad nam je bilo onemogućeno raditi događanja u obliku koji smo radili do tada pa smo u suradnji s A1 organizirali nekoliko izdanja Reboot Online Games Weeka, odnosno online gejming festivala“, kaže Amižić.</p>
                        <p>Osim navedenog, u to su vrijeme organizirali i nekoliko Reboot Games Weekenda, mini izdanja Reboot  InfoGamera, onda kada su to okolnosti dopuštale. “Činili smo sve kako bismo omogućili bar nekakav gejming sadržaj publici u Hrvatskoj i u regiji.“</p>
                        <p class="full bigger-text bold">'Nije ideja zgrnuti lovu'</p>
                        <p>Organizacija ovakvih događaja prilično je zahtjevna. Bez sjajno uigranog tima gotovo je nemoguće održati kvalitetu te paralelno proaktivno raditi na unaprjeđenju kompletnog događaja. </p>
                        <p>Pritom, neovisno o samoj veličini ovog eventa, zbog svih regionalnih izazova Reboot InfoGamer je uvijek na rubu financijske isplativosti, priznaje Katarina. “Ideja InfoGamera nikad nije bila zgrnuti hrpu love, već donijeti svjetski sadržaj domaćoj publici“, dodaje.</p>
                        <p class="giant-text shoo-bottom">Paralelno, igre su u Hrvatskoj i regiji sve popularnije. Iako mlađa od drugih, gejming se industrija vrlo brzo prilagodila različitim promjenama na tržištu, a vrlo su brzo nestali i određeni stereotipi.</p>
                        <p>“Osobno se nisam susrela s nekim stereotipima samo zato jer sam žena. Drago mi je vidjeti da nestaju te neke staromodne prakse gdje nečiji spol, orijentacija ili rasa utječu na zaposlenje ili potencijalan napredak“, govori Katarina koja se trudi ohrabriti sve žene koje imaju bilo kakav strah ili predrasudu o gejming industriji.</p>
                        <p class="full bigger-text bold">Jedan od najvećih evenata</p>
                        <p>U pripremi novog InfoGamera, u moru obaveza i sastanaka, Katarina kaže da je ipak najponosnija na svoj tim, ali i na sve one ljude koji su prošli kroz Reboot tijekom godina te na bilo koji način pridonijeli tome da su Reboot Infogamer i Reboot Develop jedni od najvećih i najprepoznatijih događaja tog tipa na ovim prostorima.</p>
                        <p>“Posebno sam ponosna na to što svjetska gejming industrija zna za nas i što s oduševljenjem prihvaćaju pozive za gostovanja na našoj konferenciji. To je razlog zašto nas svjetska industrija i posjećuje u ogromnom broju i zbog čega smo postali jedan od najvećih poslovnih evenata u tom segmentu“, zaključuje.</p>
                    </div>
            </details>
        </article>
        <article class="full flex relative" id="sinisamarko">
            <div class="full flex relative article-head column-full-pad mobile-no-pad">
                <div class="half flex-responsive flex column-full-pad">
                    <div class="full relative subject-name"><b data-aos="fade-right" data-aos-delay="250">Siniša Pašić</b><br> <span data-aos="fade-right" data-aos-delay="1000">& Marko Petrak</span></div>
                    <div class="full red-text"><b data-aos="fade-right" data-aos-delay="1250"">Podcast</b><br><span data-aos="fade-right" data-aos-delay="2000">Inkubator</span></div>
                    <h2 class="full subject-intro" data-aos="fade-right" data-aos-delay="2000">Od otkaza i nule na računu do najpopularnijeg podcasta u regiji: 'Jedna je stvar bila game changer'</h2>
                </div>
                <figure class="half flex-responsive flex column-full-pad">
                    <img src="<?php echo $native_path ?>assets/images/inkubator_big.jpg" alt="Siniša Pašić i Marko Petrak (Podcast Inkubator)">
                    <figcaption class="image-subtitle">Foto: Marko Miščević</figcaption>
                </figure>
            </div>
            <div class="container column-full-pad text-container flex relative">
                <p>Kolekcionarska Disneyjeva svinjica, high kick Mirka Filipovića zamrznut u modelu figurice, fratar, pisaća mašina, prastari broj Bleka, viseći kostur, potpisana nogometna lopta i na desetke drugih drangulija u Slavonskoj 50, poprištu kontroliranog kaosa koji se naziva Podcast Inkubator.</p>
                <p>Prostorijom ipak dominira kožnati crveni dvosjed na kojemu su sjedili Jadranka Kosor, Joško Gvardiol, Baby Lasagna, Zdavko Mamić, Ante Čačić, Mirko Filipović, Dean Sinovičić, Siniša Vuco i mnogi, ali zaista mnogi drugi.</p>

                </div>
            <div class="full center relative center-wrap column-full-pad">
                <figure class="half center flex-responsive center-wrap column-full-pad">
                <img src="<?php echo $native_path ?>assets/images/inkubator_big3.jpg" alt="Siniša Pašić i Marko Petrak (Podcast Inkubator)" loading="lazy">
                    <figcaption class="image-subtitle full left-text">Foto: Marko Miščević</figcaption>
                </figure>
                <p class="half bigger-text giant-text bold shoo-bottom flex-responsive column-full-pad" data-aos="fade-right">Najgledaniji je to podcast u cijeloj zemlji, a njihove epizode, čije trajanje često prelazi i dva sata, zauzimaju među prvim mjestima na YouTube trendingu u cijeloj Hrvatskoj. Bave se različitim temama iz svijeta sporta, ali i politike, glazbe i aktualnosti uopće i danas zapošljavaju 15 ljudi.
                </p>
            </div>
            <details class = "full">
                <summary>Pročitaj više o Siniši i Marku</summary>
                <div class="container column-full-pad text-container flex relative">
                    <p>Ipak, prije pet godina u priči je bila tek nekolicina entuzijasta, ekipa koja se skupila gotovo potpuno slučajno, sjela ispred i iza kamere i kreirala pitki format s kojim je u to vrijeme malo tko koketirao. Sjeli smo s <b>Markom Petrakom</b>, idejnim začetnikom Inkubatora i majstorom ispred kamera te <b>Sinišom Pašićem</b>, producentom, realizatorom i majstorom iza kamera.</p>
                    <p class="full bigger-text bold">Među prvima su krenuli</p>
                    <p>"Radio sam tad kao urednik na televiziji i nakon posla bih gledao američke podcaste. Mislio sam kako je moguće da još uvijek u Hrvatskoj nitko ne radi nešto slično. Kuhalo se u meni neko vrijeme, mislio sam - mogao bih ja prvi,  a onda sam samo prelomio", govori Petrak.</p>
                    <p>Njegova tadašnja redakcija nalazila se u zagrebačkom VMD-u. Tog se dana, kao i milijun puta do tada, liftom uputio do ureda, ali je krajičkom oka ugledao da zgrada iznajmljuje male urede "to go".</p>
                    <p class="giant-text shoo-bottom">"Jednostavno nazoveš, dobiješ termin i zakupiš na kratko prostor. Tad sam shvatio da bih mogao okupiti ljude, iznajmiti opremu i početi snimati. Otud zapravo i naziv Inkubator, bila je ideja da inkubiramo više novih projekata na jednom mjestu", pojašnjava Marko koji je odmah kontaktirao Sinišu, zaljubljenika u televiziju, nekadašnjeg cable guyja koji je motao kabele na terenu.</p>
                    <p>Uvjeren da će uspjeti, godinama je naporno radio i prometnuo se u jednog od najuspješnijih producenata na ovom tržištu. "Radio sam često i po tri posla, sve kako bih se financirao, ali i dokazao ekipi da mogu i znam raditi više od motanja kabela", govori.</p>
                    <p class="full bigger-text bold">'Rekao sam - buraz, to je to'</p>
                    <p>"Onda me nazvao Marko. Sjeli smo u birc u Radničkoj, bio je jedanaesti mjesec. Pružio mi je ruku, praktički nije još ni sjeo za stol i rekao: 'Stari, ako ne gledaš podcaste ovaj razgovor nema nikakvog smisla'. Rekao sam samo da obožavam <b>Joea Rogana</b> i to je bilo to, rekao sam doslovno - buraz, to je to. I tako je počelo", kaže Siniša.</p>
                    </div>
                <div class="full center relative center-wrap column-full-pad">
                    <figure class="half center flex-responsive center-wrap column-full-pad">
                    <img src="<?php echo $native_path ?>assets/images/inkubator_big4.jpg" alt="Siniša Pašić i Marko Petrak (Podcast Inkubator)" loading="lazy">
                        <figcaption class="image-subtitle full left-text">Foto: Marko Miščević</figcaption>
                    </figure>
                    <p class="half bigger-text giant-text bold shoo-bottom flex-responsive column-full-pad" data-aos="fade-right">Danas je iza njih više od 1500 snimljenih epizoda, prepoznatljiv brend i milijunski pregledi. "Uvijek sam nekako vjerovao u ovo. Znao sam da će mi to jednog dana biti stalni posao jer smo u samo nekoliko mjeseci privukli veliku pažnju", govori Marko i priznaje da je njihov početni kapital iznosio ravno tri tisuće kuna.
                    </p>
                </div>
                <div class="container column-full-pad text-container flex relative">
                    <p>"Svatko je dao koliko je mogao. Kupili smo kauč, a ja sam s ostatkom novca otišao na Hrelić i pokupovao sitnice koje su i danas dio scenografije. Ostatak su nam poklanjali gosti kako su dolazili, a do danas ih je bilo na stotinu", govori Siniša.</p>
                    <p>Od ljevice do desnice, glazbenika i pjevača do različitih sportaša. "Podcast nije intervju, budući da ti sa svakim sugovornikom moraš aktivno sudjelovati u razgovoru, razmjenjivati mišljenja. Jedino tako gost će ti se u potpunosti otvoriti, vjerovati ti i naposljetku iskreno pokazati kakav je", pojašnjava Petrak.</p>
                    <p class="full bigger-text bold">'Sve je ovo improvizacija'</p>
                    <p>"Sve što radim je improvizacija. Vozeći od Samobora do Zagreba razmišljam o čemu bih potencijalno mogao razgovarati s gostom, što bih ga mogao pitati i slično. Ali onda dođem ovdje, sjednem s čovjekom, pitam ga kako si, što ima i razgovor sam krene", dodaje Marko koji je prvi u cijeloj ekipi dao otkaz na svom stalnom poslu.</p>
                    <p>Njegovom tadašnjem šefu nije se sviđalo da radi na dva mjesta u isto vrijeme, a Inkubator je postajao sve popularniji, no još uvijek financijski neisplativ. "Prelomio sam, dao otkaz i od tada dvije godine nisam imao primanja. Reći ću otvoreno  - financirala me je žena. Doslovno mi je dala karticu s tisuću kuna da imam za kavu", priznaje.</p>
                    <p class="giant-text shoo-bottom">U svojoj je kuhinji tada složio mali radni stol i pokušavao se snalaziti - pisao je biografije,  tražio sponzore za podcast, ali nikada, kaže, nije prestao vjerovati u cijeli projekt.</p>
                    <p>"Dvije godine kasnije dogodio se prvi klik, prvi trenutak kad sam zaista dobio vjetar u leđa. Do tada  - preživljavaš i boriš se. Onda se pojavio naš prvi veliki sponzor, A1 Hrvatska, koji nas je maksimalno pogurao."</p>
                    <p class="full bigger-text bold">Internet im je bio najveći trošak</p>
                    <p>Priča je, kaže, vrlo jednostavna -  na komadu papira ispisivao je tekuće troškove, a na listi je trošak interneta bio daleko najveći - tisuću kuna, iznos koji im je tada bio nevjerojatno velik. "Nazvao sam frenda koji radi u A1 i zamolio da nam ugovori sastanak. Siniša i ja smo se spremili i već za dva tjedna smo sjedili u uredu kompanije", priča Marko.</p>
                    <p>U dvije minute prezentirali su zašto im je potrebna kompenzacija za internet. "Doslovno dvije minute kasnije, rekli su može, imate li još nešto što biste nam prodali. Nismo imali apsolutno ništa", prisjeća se Siniša koji je u sekundi problijedio kad je čuo Marka kako izgovara riječ - nogomet.</p>
                    <p>"Mogao si mi čuti zrikavce u glavi, ogledao sam se oko sebe i samo mi je to palo na pamet - nogomet. Rekao sam da imamo u planu pokrenuti podcast za nogomet, u sklopu svega što radimo. Za dva tjedna ponuda je bila prihvaćena", kaže Marko.</p>
                    <p class="full bigger-text bold">'Bio je to game changer'</p>
                    <p>Do danas su, u suradnji s A1 Hrvatska, kompanijom koja ove godine slavi svoj 25. rođendan, kreirali više od 200 epizoda nogometnog podcasta, ali i A1 GAMEON podcast. "Doveli smo Prosinečkog, naše bivše i sadašnje reprezentativce koji su nam ispričali sve one priče koje se događaju iza kulisa", objašnjava Siniša.</p>
                    <p class="giant-text shoo-bottom">Reakcije publike bile su genijalne. "Sjećam se da je prvi gost bio <strong>Joško Jeličić</strong> koji je ispričao priču o kasinu. Dinamo je tada igrao protiv Bayerna, a obje su se momčadi uoči tekme našle u kockarnici. Igrači Bayerna kockaju za jedan cent, naši se hvalisaju i ubacuju po par eura. Baš takve priče naša je publika obožavala", dodaje.</p>
                    <p>Do danas broje stotine tisuća pretplatnika, uvjereni da publika želi potpuno drugačiji sadržaj od onog koji plasiraju tradicionalni mediji. "Ovdje svatko ima priliku ispričati svoju priču i zbog toga nam se gosti redovito vraćaju, govore da nigdje drugdje nisu dobili takav tretman kao kod nas", kaže Marko.</p>
                    <p class="full bigger-text bold">Bude epizoda koje ih potpuno razmontiraju</p>
                    <p>Od kaosa kada na crveni kauč sjedne Siniša Vuco i ekipa iz Noćne more do potpunog psihičkog razmontiravanja kada je ondje <b>Slaven Škrobot</b>, bloger koji je nakon jednog skoka u more ostao nepokretan.</p>
                    <p>"Potpuno me to rastavilo i vratilo u perspektivu. Ritam života je poprilično zeznut, a onda shvatiš što je zapravo najvažnije, kad čuješ takvu priču. Jedan moj banalan pokret njemu predstavlja teret i potencijalnu bol, samo da sjedne na ovaj naš kauč. Bio je to šamar realnosti koji je trebao i nama, ali i publici", govori Siniša.</p>
                    <p>Upravo zbog toga često ugošćuju i one koji imaju takve priče. Nije sve samo zezancija, kažu. "Sve je to život i sve to što se događa vani, može se ispričati ovdje kod nas. Ovo je prostor u kojemu možeš izraziti svoje mišljenje, ispričati svoju stranu i ovdje je svatko dobrodošao."</p>
                </div>
            </details>
        </article>
        <article class="full flex relative" id="danijela">
            <div class="full flex relative article-head column-full-pad mobile-no-pad">
                <div class="half flex-responsive flex column-full-pad">
                    <div class="full relative subject-name"><b data-aos="fade-right" data-aos-delay="250">Danijela </b><br> <span data-aos="fade-right" data-aos-delay="1000">Mirko</span></div>
                    <div class="full red-text"><b data-aos="fade-right" data-aos-delay="1250"">Dizajn</b><br><span data-aos="fade-right" data-aos-delay="2000">Snova</span></div>
                    <h2 class="full subject-intro" data-aos="fade-right" data-aos-delay="2000">Napustila je korporaciju kako bi radila za sebe: 'Stalno otkrivam nove interese i pretvaram ih u biznis'</h2>
                </div>
                <figure class="half flex-responsive flex column-full-pad">
                    <img src="<?php echo $native_path ?>assets/images/danijela_big.jpg?v=2" alt="Danijela Mirko">
                    <figcaption class="image-subtitle">Foto: Marko Miščević</figcaption>
                </figure>

            </div>
            <div class="container column-full-pad text-container flex relative">
                <p>Posao je mnogima jedna od najbitnijih stvari u životu. Čak i kad ne želimo da nam to bude prioritet, ne možemo zanemariti činjenicu da čak trećinu dana provodimo s našim kolegama. Stoga je bitno pronaći okruženje u kojemu se osjećamo ugodno, gdje postoji prilika za stvaranje kvalitetnih odnosa.</p>
                <p><b>Danijela Mirko</b> je to shvatila doslovno, pa je tako svojeg muža upoznala prije 20 godina, radeći za A1, tadašnji Vipnet. "Radila sam kao hostesa i išli smo na Pag. Došla sam tamo i radila na odbojci te tamo upoznala svojeg muža. Bilo je nešto sigurno u toj odbojci jer su se, uz naš, iz toga rodila još tri braka."</p>
                </div>
            <div class="full center relative center-wrap column-full-pad">
                <figure class="half center flex-responsive center-wrap column-full-pad">
                <img src="<?php echo $native_path ?>assets/images/danijela_big2.jpg" alt="Danijela Mirko" loading="lazy">
                    <figcaption class="image-subtitle full left-text">Foto: Marko Miščević</figcaption>
                </figure>
                <p class="half bigger-text giant-text bold shoo-bottom flex-responsive column-full-pad" data-aos="fade-right">Nekoliko godina ranije, 1999., bila je jedna od prvih promotorica za A1 Hrvatska, kompanije koja ove godine slavi 25 godina svoga postojanja. Tada je bila studentica prve godine veterine, a radila je studentske poslove – kao hostesa na partyjima, košarkaškim tekmama i poslije utakmica u klubu. Postoji tako i njezina fotografija u jednom od internih časopisa tvrtke iz 2005. godine, koju je izrezao njezin muž kad je naišao na nju.
                </p>
            </div>
            <details class = "full">
                <summary>Pročitaj više o Danijeli</summary>
                <div class="container column-full-pad text-container flex relative">
                    <p class="full bigger-text bold">Ledena kraljica na Cvjetnom</p>
                    <p>S godinama se njezina uloga mijenjala, ali ljubav prema marketingu je ostala. Stizala je na sve više pozicije, no tijekom godina jedan joj je projekt ostao omiljen - promocija Snježne kraljice prije desetak godina.</p>
                    <p>"Imali smo postav na Cvjetnom trgu. Inspirirana krunom koju je dobivala Snježna kraljica, naručila sam čovjeka koji je motornom pilom rezbario logo od ogromnih gromada leda nasred grada. Led je trebao izdržati cijelo vrijeme trajanja utrke, a ja sam osmislila i nacrtala dizajn."</p>
                    <p>Kroz smijeh mi tako prepričava da je u tom trenutku bila trudna te se penjala po Sljemenu kako bi se uvjerila ide li sve po planu. "Posljednjeg dana utrke razgovarala sam s direktorom i rekla mu da idem na porodiljni od ponedjeljka – već mi je bio krajnji rok, 45 dana prije samog termina."</p>
                    <p class="full bigger-text bold">One-woman show</p>
                    <p>Danijela je danas mikropoduzetnica koja radi sama za sebe, ali pritom intenzivno nastavlja surađivati s A1. Nakon što je deset godina provela na istom poslu, 2016. godine dogodio joj se, prepričava, klik u glavi.</p>
                </div>
                <div class="full center relative center-wrap column-full-pad">
                    <figure class="half center flex-responsive center-wrap column-full-pad">
                        <img src="<?php echo $native_path ?>assets/images/danijela_big3.jpg" alt="Danijela Mirko" loading="lazy">
                        <figcaption class="image-subtitle full left-text">Foto: Marko Miščević</figcaption>
                    </figure>
                    <p class="half bigger-text giant-text bold shoo-bottom flex-responsive column-full-pad" data-aos="fade-right">"Shvatila sam da sam posao koji sam tada odrađivala za nekog drugog radila praktički sama. Ako mogu to raditi za nekoga drugoga, onda valjda mogu i za samu sebe. Sada sam one-woman show, ali meni to nije naporno, jer to volim. I dalje mi je izazovno i dinamično."
                    </p>
                </div>
                <div class="container column-full-pad text-container flex relative">
                    <p>Trenutno radi na velikoj kampanji za A1 povodom njihova 25. rođendana, kroz segment darivanja u A1 centrima na 39 lokacija diljem Hrvatske. Osmislila je tako tri promotivne aktivnosti koje se sve događaju istodobno.</p>
                    <p>'Imamo boss puzzle koje korisnici mogu igrati na tabletima u dućanima, memory kartice koje dolaze u fizičkom obliku te lego kockice za centralu. "Prodavačica u trgovini i ja smo sat i pol vremena slagale njihov logo. I uspjele smo na kraju – ja sam bila zadovoljna pa onda nakon toga, naravno, i oni."</p>
                    <p>Sudjelovala je tako u brojnim akcijama i promocijama, a među najpoznatijima je i Pannonian Challenge koji se godinama održava u Osijeku, uvijek pod pokroviteljstvom A1. Međutim, nakon pandemije, opseg događanja uživo se smanjio te je sve prebačeno u online svijet.</p>
                    <p class="full bigger-text bold">Stabilna internetska veza</p>
                    <p>Upravo zbog toga joj je iznimno bitno da ima stabilnu mobilnu vezu, kako bi sve mogla riješiti kroz nekoliko klikova. Zahvaljujući brzom internetu, 90 posto svog posla rješava mobitelom te može raditi bilo gdje.</p>
                    <p class="giant-text shoo-bottom">"Kao mikropoduzetnici, bitno mi je i da imam riješen problem fiskalizacije. Kroz A1 imam njihovu blagajnu koju koristim. U principu su u svim granama posla kojima se bavim, svugdje su prisutni. Jedino ne koristim nadzor voznog parka, ostalo je sve tu. I nemam veliku potrebu po pitanju podrške u smjeru clouda i servera", smije se Danijela.</p>
                    <p>Poduzetnica je već sedam godina, a osim što se bavi marketingom, od 2014. godine ima i ispušni ventil za svoju kreativnu stranu. “Nakon što sam rodila drugi put, počela sam šivati. Samouka sam te sam počela izrađivati personalizirane dekice, jastučiće i slinčeke za djecu. Nedavno sam otvorila i fitness gdje znam držati radionice, a uskoro ću postati certificirana instruktorica pilatesa."</p>
                    <p>Danijela je tako osoba s 1000 interesa i 1000 zanimanja, a sve to može raditi upravo zbog fleksibilnosti vlastitog posla. Nalazi vremena za druženje i igru s djecom, vlastitu kreativu,  hobije te kvalitetno provedeno vrijeme s najdražima. A sve zbog dobre povezanosti.</p>
                </div>
            </details>
        </article>
        <article class="full flex relative" id="ivanaandreja">
            <div class="full flex relative article-head column-full-pad mobile-no-pad">
                <div class="half flex-responsive flex column-full-pad">
                    <div class="full relative subject-name"><b data-aos="fade-right" data-aos-delay="250">Ivana Matanović</b><br> <span data-aos="fade-right" data-aos-delay="1000">& Andreja Šeperac</span></div>
                    <div class="full red-text"><b data-aos="fade-right" data-aos-delay="1250"">Pismo</b><br><span data-aos="fade-right" data-aos-delay="2000">Inkubator</span></div>
                    <h2 class="full subject-intro" data-aos="fade-right" data-aos-delay="2000">Povezali su nespojivo i preobratili cijelu zajednicu: Ovaj inkubator danas je razlog zašto se ljudi sele u Novsku</h2>
                </div>
                <figure class="half flex-responsive flex column-full-pad">
                    <img src="<?php echo $native_path ?>assets/images/pismo_big.jpg" alt="Ivana i Andreja (PISMO Inkubator)">
                    <figcaption class="image-subtitle">Foto: Marko Miščević</figcaption>
                </figure>

            </div>
            <div class="container column-full-pad text-container flex relative">
                <p>Velika nezaposlenost i odljev mladih. To su bili glavni motivi iza danas izuzetno uspješne priče o našem najvećem inkubatoru za startupe u gejmingu - Inkubator PISMO powered by A1. U županiji koju krasi tradicija teške industrije, rad u smjenama i više odlazaka nego dolazaka novih susjeda, izgradnja nekog centra za tvrtke koje bi razvijale video igrice izazivala je razne začudne reakcije.</p>
                <p>No, tim koji je stajao iza ideje o prvom takvom inkubatoru u Hrvatskoj, to nije obeshrabrilo. Otpočetka su znali da žele privući mlade, a onima koji su već u Sisačko-Moslavačkoj županiji ponuditi razlog da tamo i ostanu. U Novskoj, gradu s tek više od 10.000 stanovnika, udaljenom kojih 15 kilometara od granice s Bosnom i Hercegovinom, otvoren je inkubator koji ju je zauvijek promijenio.</p>
                </div>
            <div class="full center relative center-wrap column-full-pad">
                <figure class="half center flex-responsive center-wrap column-full-pad">
                <img src="<?php echo $native_path ?>assets/images/andreja.jpg" alt="Andreja Šeperac (PISMO Inkubator)" loading="lazy">
                    <figcaption class="image-subtitle full left-text">Foto: Marko Miščević</figcaption>
                </figure>
                <p class="half bigger-text giant-text bold shoo-bottom flex-responsive column-full-pad" data-aos="fade-right">„Tri smo godine paralelno gradili zgradu i akademsku tj. poslovnu priču, okupljali ljude koji bi doprinijeli ideji, a kasnije i sami poslali dijelom naše zajednice. Prvi je period obilježilo puno priče, objašnjavanja, s ministarstvima i agencijama“, prisjeća se <strong>Andreja Šeperac</strong>, voditeljica projekata koja je dijelom tima od samog početka.
                </p>
            </div>
            <details class = "full">
                <summary>Pročitaj više o Ivani i Andreji</summary>
                <div class="container column-full-pad text-container flex relative">
                    <p class="full bigger-text bold">Navala prijava po otvorenju</p>
                    <p>Sudjelovali su u velikom EU natječaju koji su dobili, okupili ljude, našli prostor, realizirali planove, a potom je došao i dan kada su svoja vrata trebali i službeno otvoriti. Tada je najvažnije pitanje postalo hoće li itko doći, zna li itko za njih.</p>
                    <p class="giant-text shoo-bottom">„Imali smo četrdeset slobodnih mjesta. Zaprimili smo više od 500 prijava. Tri godine ranije stajala sam na ovom mjestu s kolegama i suradnicima dok se gradilište tek otvaralo. Jedan uspješni poduzetnik u gejmingu gledao je s nama u tadašnju ruševinu i pitao me mislim li da će se ovo zaista ostvariti.“
                    </p>
                    <p>Danas u Inkubatoru PISMO sudjeluje 80 startupa koji zapošljavaju 120 ljudi – 40 u njihovoj zgradi ima urede, dok 40 ima virtualne urede. Kada bi se cijeli Inkubator gledao kao jedna kompanija, ona bi bila peta po prihodu u industriji na našem tržištu, ponosno će <b>Ivana Matanović</b>, voditeljica promocije.</p>
                    <p>Ivana se užem timu pridružila prije tri godine, kada su potpisali jubilarni 50. startup. Nedugo zatim A1 Hrvatska osigurao im je najbržu fiksnu i mobilnu mrežu, koji ove godine slavi svoj 25. rođendan, a gejming industriju podržava još od 2017. godine kada su pokrenuli A1 Adria League.</p>
                    <p class="full bigger-text bold">Startupima pružaju svu potporu koju mogu</p>
                    <p>Svi uživaju iste benefite od inkubatora. Prvo i osnovno je šest mjeseci edukacije s minimalnom plaćom i osiguranjem kad se inkubatoru tek pridruže. Za one koji posluju imaju tromjesečne edukacije. Samo njihovo djelovanje je po povoljnijim uvjetima, cijene računala, režije, najma. A, pojašnjava Andreja, imaju i nas kao mikro zajednicu koja bdije nad njima i pomaže kad god zatreba.</p>
                    </div>
                <div class="full center relative center-wrap column-full-pad">
                    <figure class="half center flex-responsive center-wrap column-full-pad">
                    <img src="<?php echo $native_path ?>assets/images/ivana.jpg" alt="Ivana Matanović (PISMO Inkubator)" loading="lazy">
                        <figcaption class="image-subtitle full left-text">Foto: Marko Miščević</figcaption>
                    </figure>
                    <p class="half bigger-text giant-text bold shoo-bottom flex-responsive column-full-pad" data-aos="fade-right">Tako, na primjer, nakon što osnuju startup i žele povući sredstva za samozapošljavanje, tim iz inkubatora im je na raspolaganju za pomoć. Tu su također i potpore grada Novske koje postoje još od 2018., no, naglašava Ivana, buknule su s dolaskom gejmera.
                    </p>
                </div>
                <div class="container column-full-pad text-container flex relative">
                    <p>Uz osnovnu potporu koju pružaju startupima iznimno im se važnim pokazalo i partnerstvo s A1 koje im je otvorilo neka sasvim nova vrata. Od raznih edukacija i evenata koje su s njima pokrenuli, jedan im se događaj baš usjekao u pamćenje.</p>
                    <p>„Bilo je to kada su nas investitori iz Litve odlučili posjetiti, konkretno Nordcurrent Lands. Bilo nas je malo strah tih sastanaka s našim startupima jer su im to bili prvi poslovni susreti takve vrste. Međutim, imati velike oznake A1 na zidovima pokazalo je investitorima da smo ozbiljna zajednica koju prepoznaje i podržava globalna kompanija. To im je ulilo tu sigurnost da su došli na pravo mjesto“, kaže Ivana.</p>
                    <p>Tako je <a href="https://cgda.eu/data-item/analiza-industrije-2022/">Croatian Game Development Allianceom (CGDA)</a> u svoju Analizu industrije videoigara u Hrvatskoj 2022. godine powered by A1 po prvi put uključio i sve kompanije unutar Inkubatora.</p>
                    <p class="full bigger-text bold">Uloga partnera najvažnija u izazovnim trenucima</p>
                    <p>Nešto kasnije, nastavlja Ivana, radili su na projektu za izgradnju cijelog kampusa i trebala im je 3D vizualizacija cijelog projekta. Na njoj su radili i startupi iz inkubatora – Loomi studio i Hiroma design. Pregledali su vizualizaciju tisuću puta prije predaje i imali stotinjak ispravaka kojom su je poboljšavali i nadograđivali. I onda se dogodio kobni trenutak dva sata prije sastanaka na kojemu su projekt trebali prezentirati. Ivana je zvala ekipu da joj treba finalna verzija za predaju, odmah. </p>
                    <p>No njima je za renderiranje trebalo barem par dana. Ivana, kaže, ne znajući uobičajeni proces, očekivala je da datoteku tek treba prebaciti na USB i to je to. Kolega se, na sreću, sjetio da imaju sasvim novo superračunalo i najbržu A1 fiksnu mrežu. Video su isporučili u sat i 45 minuta. Stigli su na sastanak i prezentirali vizualizaciju.</p>
                    <p class="full bigger-text bold">Sigurnost i edukacija su im prioritet</p>
                    <p>Oni su se, govore Andreja i Ivana, uvijek držali tog argumenta da je gejming industrija jača od filmske i glazbene. Ona je jaka i u Hrvatskoj, no to nije industrija u kojoj možeš ne raditi i preživjeti. Treba se truditi i puno raditi, da bi uspjeli, ali tako je to u poduzetništvu. Usko su povezani s velikim gejming tvrtkama. Polako su korak po korak ušli u sve analize i istraživanja. Uvijek su pri vrhu kad se priča o regiji. </p>
                    <p>Imaju jedinstveni pristup edukaciji i potpori i svjesni su da im svima treba ta zajednička snaga da izađu na tržište. Nisu ni oni sve znali na početku, ali su se oslonili na iskustvo partnera. Danas pak educiraju svoje startupe, ali i širu zajednicu.</p>
                    <p>U svojim edukacijama uvrštene imaju i smjernice platforme #BoljiOnline, koju je A1 pokrenuo u suradnji s Centrom za sigurniji internet. Tako educiraju i djecu iz regije, ali i njihove roditelje o sigurnosti na internetu i prilikom igranja video igara. Isto čine i sa svojim startupima koje educiraju kako razvijati sigurne i inkluzivne igre.</p>
                    <p class="full bigger-text bold">Lokalna zajednica je procvala</p>
                    <p>Dobra suradnja s lokalnom zajednicom iznimno im je važna, potvrđuju obje. "Ne želimo umanjiti vrijednost postojećih industrija, nego biti dodatna vrijednost. Promijeniti tu svijest bio im je najveći izazov, ali danas je to puno bolje."</p>
                    <p>Pojašnjavaju kako su promjene u lokalnom društvu silno vidljive. Omjer umirovljenika na zaposlene je daleko bolji, društveni život je aktivniji, u Novskoj ima nikad više prijavljenih novo otvorenih kompanija. </p>
                    <p class="giant-text shoo-bottom">„Nedavno sam čula nekoga da komentira kako mu je žao što je kupio stan u Zagrebu, a ne ostao u Novskoj. To bi prije bilo nemoguće. Gejming je Novsku sasvim promijenio i to vide svi. Navikla sam da nedjeljom poslijepodne uz kavu s pogledom na kolodvor vidim mlade kako vuku torbe jer idu u srednje i na fakultete prema stanici. Sad je pak suprotno. Odmah mi je srce puno“, kaže Ivana koja u Novskoj živi cijeli život.</p>
                </div>
            </details>
        </article>
        <!-- Footer -->
        <footer class="full flex relative">
            <div class="container text-container flex relative column-full-pad">
                <div class="full center logo-line column-full-pad">
                    <img src="<?php echo $native_path ?>assets/logos/telegram_logo_black.svg" alt="Telegram logo" />
                    <img src="<?php echo $native_path ?>assets/logos/a1.jpg" alt="A1 logo" />
                </div>
                <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom A1 i po najvišim uredničkim standardima Telegram Media Grupe.</p>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </div>
</body>

</html>
