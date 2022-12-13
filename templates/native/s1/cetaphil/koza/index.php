<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/cetaphil/koza/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/cetaphil/koza/';
//$native_path = 'http://localhost/super1-theme/templates/native/cetaphil/koza/';

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); 
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=2.0" type="text/css" />
    <link rel="stylesheet" id="frank-rhul-libre-css" href="//fonts.googleapis.com/css?family=Frank+Ruhl+Libre%3A300%2C400&amp;subset=latin-ext&amp;ver=5.7.2" type="text/css" media="all">
    <link rel="stylesheet" id="catamaran-css" href="//fonts.googleapis.com/css?family=Catamaran%3A500%2C700&amp;subset=latin-ext&amp;ver=5.7.2" type="text/css" media="all">
    <script src="<?php echo $native_path ?>slick/slick.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>slick/slick.css" type="text/css" />
    <script src="<?php echo $native_path ?>functions.js?ver=3.1"></script>
</head>
<div class="main-container flex">
    <header class="native-hero-adv full flex relative">
        <a href="https://super1.telegram.hr/" class="header-logos center full" target="_blank">
            <img src="<?php echo $native_path ?>img/super1_logo.svg" alt="Super1 Logo">
        </a>
        <video src="<?php echo $native_path ?>img/cetaphil_bg.mp4" autoplay loop muted playsinline></video>
        <div class="full native-title center">
            <h1 class="full center-text">Zavolimo svoju kožu</h1>
        </div>
    </header>
    <section class="full flex relative">
        <div class="text-container flex relative column-full-pad remove-top-pad">
            <h2 class="full">Ivna, Latica, Ema i Kristina progovorile su o problemima s kožom s kojima se većina žena susreće svaki dan. Zavoljele su svoju kožu, posvetile joj vrijeme te je pravilna njega postala ritual koji ne preskaču, a koža im vraća na najbolji mogući način.</h2>
            <p>Koža je naš najveći organ i svakodnevno je na udaru štetnih utjecaja. Ima sposobnost istovremeno obavljati više zadataka odjedanput, primjerice – u isto vrijeme štiti nas od udaraca, ogrebotina i kemijskih agensa, ali i različitih temperaturnih utjecaja poput vrućine, hladnoće ili vjetra. No zbog takvog opetanovog multitaskinga s vremenom njezina sposobnost samoiscjeljivanja opada. Zato ju je bitno <b>zavoljeti, pružiti odgovarajuću njegu i konstantno ju hidratizirati.</b> Donosimo vam stvarne priče koje će odgovoriti na pitanje kako se brinuti o osjetljivoj koži sklonoj aknama, crvenilu i ekcemima.</p>
            <h2 class="full center-text special-title">Stvarna iskustva, stvarnih žena</h2>
            <p class="full special-subtitle center-text">Tri različite generacije žena, tri različita problema s kožom</h3>
            <div class="full flex relative testimonial stretch">
                <img src="<?php echo $native_path ?>img/ema.jpg" aria-hidden="true">
                <div class="flex relative">
                    <p class="full bold">Ema (25)</p>
                    <h3 class="full desktop-only">“Sve ono što (ni)sam ulagala u svoju kožu s navršenih 25 godina već je došlo na naplatu. I to u obliku crvenila.”</h3>
                </div>
            </div>
            <h3 class="full mobile-only">“Sve ono što (ni)sam ulagala u svoju kožu s navršenih 25 godina već je došlo na naplatu. I to u obliku crvenila.”</h3>
            <p>U mom je slučaju <b>vrijedila</b> ona da <b>mlada koža sve trpi</b>, pa čak i to da se o njoj gotovo uopće <b>ne treba brinuti</b>. Kroz srednju školu i prve godine fakulteta nisam mogla manje mariti o potrebama svoje kože; koliko god da sam izlazila, malo spavala, izlagala se suncu ili neuravnoteženo hranila, ona je svejedno uvijek izgledala dobro.</p>
            <details class="full flex">
                <summary onclick="$(this).hide();" class="full">Pročitaj više</summary>
                <p>Štoviše, svojom sam se nemarnošću po pitanju stabilne rutine njege kože čak i hvalila, naivno vjerujući kako će ona zauvijek ostati takva. To se, naravno, nije dogodilo, <b>a brojka od navršenih 25 godina kod je mene označila prekretnicu.</b> Sve ono što (ni)sam ulagala u svoju kožu počelo je polako dolaziti na naplatu, a problem koji u prvom redu više nisam mogla ignorirati bio je – <b>crvenilo.</b></p>
                <p>Možda to iz uvoda i opisa nemarnih navika njege kože ne biste pomislili, ali oduvijek sam bila štreberica, pa sam i ovom problemu odlučila doskočiti temeljito čitajući o razlozima nastanka crvenila i potencijalnim rješenjima. Moja potraga dovela me do Cetaphil PRO Redness linije.</p>
            </details>

            <div class="full flex relative testimonial stretch">
                <img src="<?php echo $native_path ?>img/kristina.jpg" aria-hidden="true">
                <div class="flex relative">
                    <p class="full bold">Kristina (23)</p>
                    <h3 class="full desktop-only">“Primijetila sam da mi koža reagira na micelarnu koju koristim i da se poprilično zacrveni, doslovno burno reagira.”</h3>
                </div>
            </div>
            <h3 class="full mobile-only">“Primijetila sam da mi koža reagira na micelarnu koju koristim i da se poprilično zacrveni, doslovno burno reagira.”</h3>
            <p>Studentica četvrte godine ekonomije, Kristina Jamičić, <b>od rođenja ima problem s crvenilom</b> koje joj se obično javlja na obrazima, a u intenzivnijim periodima djelomično i na nosu. “Primijetila sam da mi koža reagira na <b>micelarnu koju koristim i da se poprilično zacrveni,</b> doslovno burno reagira. I tako bude neko vrijeme pa se primiri”, dodaje govoreći kako je prije tri tjedna uz savjetovanje s farmaceutkinjom kupila <a href="https://visk.hr/proizvod/cetaphil-pro-rednesscontrol-pjena-za-njezno-ciscenje/" target="_blank">Cetaphilovu RednessControl pjenu za čišćenje</a> te da je već nakon nekoliko dana osjetila veliku promjenu.</p>
            <details class="full flex">
                <summary onclick="$(this).hide();" class="full">Pročitaj više</summary>
                <p>“Sada nakon skoro <b>tri puna tjedna</b> korištenja mogu reći da koža <b>više ne reagira onako burno,</b> ova <b>pjena je iznimno nježna</b>, jako sam <b>zadovoljna rezultatom i osjećajem</b> koji ostavlja na koži”, kaže dodajući kako razmišlja da će prije ljeta uložiti i u toniranu dnevnu kremu sa zaštitnim faktorom <b>30 jer joj je crvenilo u to doba godine najizraženije.</b></p>
            </details>

            <div class="full flex relative testimonial stretch">
                <img src="<?php echo $native_path ?>img/latica.jpg" aria-hidden="true">
                <div class="flex relative">
                    <p class="full bold">Latica (36)</p>
                    <h3 class="full desktop-only">“S aknama se borim zapravo od faksa, što je u jednu ruku neobično jer sam ih, iz sadašnje perspektive gledano, na svoju veliku žalost propustila u pubertetu.”</h3>
                </div>
            </div>
            <h3 class="full mobile-only">“S aknama se borim zapravo od faksa, što je u jednu ruku neobično jer sam ih, iz sadašnje perspektive gledano, na svoju veliku žalost propustila u pubertetu.”</h3>
            <p><b>“S aknama se borim zapravo od faksa,</b> što je u jednu ruku neobično jer sam ih, iz sadašnje perspektive gledano, na svoju veliku žalost <b>propustila u pubertetu.</b> U mom slučaju uzroka je ovdje više, disbalans hormona štitnjače koje redovito moram kontrolirati, jedan oblik gastritisa, a pridodala bih tu i stres za koji je danas rijetko tko ostao “zakinut”.</p>
            <details class="full flex">
                <summary onclick="$(this).hide();" class="full">Pročitaj više</summary>
                <p>S licem <b>imam boljih dana, ali i lošijih,</b> definitivno mi ne doprinosi činjenica da u zadnjih godinu i nešto mjeseci nosim kao i svi masku koja mi je unatoč njezi napravila baš nered na licu”, govori Latica.</p>
                <p>Upravo <b>je disciplinirana</b> njega <b>iznimno bitna</b> kod <b>borbe s aknama,</b> a ključan korak <b>rutine</b> je <b>čišćenje</b>. Presudan faktor kod <b>preparata</b> za <b>čišćenje</b> je taj da nježno uklanjaju nečistoće s lica, ali i da reguliraju razinu sebuma. Zato sam počela koristiti Cetaphil PRO SpotControl proizvode.</p>
            </details>

            <div class="full flex relative testimonial stretch">
                <img src="<?php echo $native_path ?>img/ivna.jpg" aria-hidden="true">
                <div class="flex relative">
                    <p class="full bold">Ivna (42)</p>
                    <h3 class="full desktop-only">“Najveći problem mi predstavljaju ekcemi koji se povremeno javljaju, najčešće zimi kada je koža izložena drastičnim izmjenama.”</h3>
                </div>
            </div>
            <h3 class="full mobile-only">“Najveći problem mi predstavljaju ekcemi koji se povremeno javljaju, najčešće zimi kada je koža izložena drastičnim izmjenama.”</h3>
            <p>Budući da <b>crvenilo,</b> baš kao i akne, <b>ne poznaje godine,</b> s ovim se problemom susreće i Ivna Bobanac (42) koja već nekoliko godina vodi borbu sa suhom kožom.</p>
            <details class="full flex">
                <summary onclick="$(this).hide();" class="full">Pročitaj više</summary>
                <p><b>“Najveći problem</b> mi predstavljaju <b>ekcemi</b> koji se povremeno javljaju, najčešće zimi kada je koža izložena drastičnim izmjenama suhog i grijanog zraka u zatvorenim prostorima te vjetru i hladnoći na otvorenom. A kako je ove godine hladno vrijeme odlučilo duboko zagaziti u proljeće, problem se produbio.</p>
                <p><b>Svjesna sam</b> kako je <b>mojoj koži</b> koja je <b>posljednjih godina sve suša</b> potrebna posebna njega te kako <b>moram paziti</b> na <b>odabir preparata</b>. Naime, kako bi takva koža dobila dodatnu potporu preporučuje se birati <b>hipoalergene proizvode bez konzervansa, parabena i parfema koji mogu izazvati iritacije.</b> Zato sam izabrala Cetaphil PRO Restoraderm.</p>
            </details>
            
            <h2 class="full center-text special-title">Zavoli svoju kožu uz jedinstvenu Pro liniju Cetaphil proizvoda</h2>
            <p class="full special-subtitle center-text">Linija prilagođena određenim stanjima kože</h3>

            <div class="full flex fullstretch galleries">
                <div class="third flex flex-responsive relative column-full-pad">
                    <h3 class="full">Cetaphil PRO RESTORADERM</h3>
                    <div class="full gallery flex fullstretch">
                        <div>
                            <a href="https://visk.hr/proizvod/cetaphil-pro-rednesscontrol-tonirana-dnevna-krema-spf-30/" target="_blank" class="full flex">
                                <img src="<?php echo $native_path ?>img/redness1.jpg">
                                <p class="full center-text">Cetaphil PRO RednessControl tonirana dnevna krema SPF 30</p>
                                <div class="full center">
                                    <div class="cta">Više o proizvodu</div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="https://visk.hr/proizvod/cetaphil-pro-rednesscontrol-pjena-za-njezno-ciscenje/" target="_blank" class="full flex">
                                <img src="<?php echo $native_path ?>img/redness2.jpg">
                                <p class="full center-text">Cetaphil PRO RednessControl pjena za nježno čišćenje</p>
                                <div class="full center">
                                    <div class="cta">Više o proizvodu</div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="https://visk.hr/proizvod/cetaphil-pro-rednesscontrol-umirujuca-nocna-krema/" target="_blank" class="full flex">
                                <img src="<?php echo $native_path ?>img/redness3.jpg">
                                <p class="full center-text">Cetaphil PRO RednessControl umirujuća noćna krema</p>
                                <div class="full center">
                                    <div class="cta">Više o proizvodu</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <p class="full">Cetaphil PRO Restoraderm dokazano obnavlja kožnu barijeru, vlaži i pomaže održati vlažnost kože. Cetaphil PRO Restoraderm proizvodi dermatološki su oblikovani za kožu sklonu ekcemima i pomažu prekinuti krug svrbeža i češanja.</p>
                </div>
                <div class="third flex flex-responsive relative column-full-pad">
                    <h3 class="full">Cetaphil PRO SPOTCONTROL</h3>
                    <div class="full gallery flex fullstretch">
                        <div>
                            <a href="https://visk.hr/proizvod/cetaphil-pro-dermacontrol-foam-wash/" target="_blank" class="full flex">
                                <img src="<?php echo $native_path ?>img/spotcontrol2.jpg">
                                <p class="full center-text">Cetaphil PRO SpotControl Foam Wash</p>
                                <div class="full center">
                                    <div class="cta">Više o proizvodu</div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="https://visk.hr/proizvod/cetaphil-pro-dermacontrol-moisturizer-spf30/" target="_blank" class="full flex">
                                <img src="<?php echo $native_path ?>img/spotcontrol1.jpg">
                                <p class="full center-text">Cetaphil PRO SpotControl Moisturizer SPF30</p>
                                <div class="full center">
                                    <div class="cta">Više o proizvodu</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <p class="full">Cetaphil PRO SpotControl čine dermatološki oblikovan proizvod za čišćenje kože i hidratantna krema koji klinički dokazano umiruju i ublažavaju iritacije kože, kontroliraju razinu masnoće i održavaju kožnu barijeru kože s aknama. Pogodni su za upotrebu tijekom terapije akni.</p>
                </div>
                <div class="third flex flex-responsive relative column-full-pad">
                    <h3 class="full">Cetaphil PRO REDNESS</h3>
                    <div class="full gallery flex fullstretch">
                        <div>
                            <a href="https://visk.hr/proizvod/cetaphil-restoraderm-hidratantni-losion/" target="_blank" class="full flex">
                                <img src="<?php echo $native_path ?>img/restoraderm1.jpg">
                                <p class="full center-text">Cetaphil PRO RESTORADERM hidratantni losion</p>
                                <div class="full center">
                                    <div class="cta">Više o proizvodu</div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="https://visk.hr/proizvod/cetaphil-restoraderm-sindet-za-pranje/" target="_blank" class="full flex">
                                <img src="<?php echo $native_path ?>img/restoraderm2.jpg">
                                <p class="full center-text">Cetaphil PRO RESTORADERM Body Wash</p>
                                <div class="full center">
                                    <div class="cta">Više o proizvodu</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <p class="full">Cetaphil PRO Redness čistač, dnevna i noćna krema za osjetljivu kožu sklonu crevnilu koja smanjuje crvenilo, pritom njeguje i obnavlja suhu kožu te čuva kožnu barijeru.</p>
                </div>
            </div>
        </div>
    </section>
    <footer class="full native-signature">
        <div class="container flex">
            <div class="full center">
                <img class="partner" src="<?php echo $native_path ?>img/cetaphil-logo.png" alt="Cetaphil logo" />
                <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
            </div>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Medical intertrade, brand Cetaphil i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
    </footer>
</div>

<?php wp_footer(); 
?>
</body>

</html>