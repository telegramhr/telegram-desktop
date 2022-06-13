<!DOCTYPE html>
<html lang="hr">

<?php
//$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/zapi/razmisli/';
$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/zapi/razmisli/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/zapi/razmisli/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>img/aos.css?ver=1.0" type="text/css" />
    <link rel="stylesheet" href="https://use.typekit.net/yjw4lwh.css">
    <script src="<?php echo $native_path ?>img/aos.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css?ver=1.1" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=1.1" type="text/css" />
    <script src="<?php echo $native_path ?>jquery.serialize-object.min.js"></script>
    <script src="<?php echo $native_path ?>functions.js"></script>
</head>
<div class="main-container flex relative">
    <header class="native-hero episode-overlay full flex relative center">
        <video src="<?php echo $native_path ?>img/tg_header_razmisli.mp4" autoplay loop muted playsinline class="background-video"></video>
        <a href="https://telegram.hr/" class="hero-logo mobile-only center full">
                <img src="<?php echo $native_path ?>img/telegram_logo_white.svg" alt="Telegram Logo">
        </a>
        <div class="full native-title center">
            <img src="<?php echo $native_path ?>img/logo-razmisli-header.png" alt="Razmisli Logo">
        </div>
        <div class="flex hero-left center">
            <a href="https://telegram.hr/" class="hero-logo center full">
                <img src="<?php echo $native_path ?>img/telegram_logo_white.svg" alt="Telegram Logo">
            </a>
            <nav class="full flex">
                <a class="full flex" href="#razmisli">Razmisli</a>
                <a class="full flex" href="#video">I oni su razmislili</a>
                <a class="full flex" href="#utjecaj">Utjecaj alkohola</a>
                <a class="full flex" href="#procitajte-vise">Priče</a>
            </nav>
        </div>
        <div class="flex hero-right hide center">
        </div>
        <div class="flex hero-top hide">
            <h2>Razmisli</h2>
        </div>
        <div class="desktop-only arrow-indicator center"><div></div></div>
    </header>
    <section class="full episode relative" id="razmisli">
        <div class="full flex normal-page-padding">
            <h2 class="full relative episode-title">Razmisli</h2>
            <p class="full project-intro">U prvih 9 mjeseci 2021. godine zbog vožnje pod utjecajem alkohola dogodilo se:</p>
            <div class="full flex sad-stat" data-aos="fade-left" data-aos-delay="1000"><p class="full bold">956</p><p class="full"> prometnih nesreća s nastradalim osobama</p></div>
            <div class="full flex sad-stat" data-aos="fade-left" data-aos-delay="2000"><p class="full bold">1281</p><p class="full"> osoba zadobila je tjelesne ozljede</p></div>
            <div class="full flex sad-stat" data-aos="fade-left" data-aos-delay="3000"><p class="full bold">34</p><p class="full"> osobe smrtno su stradale</p></div>
        </div>
    </section>
    <section class="full episode relative" id="video">
        <div class="full flex normal-page-padding">
            <h2 class="full relative episode-title">I oni su razmislili</h2>
            <div class="full flex video-parent">
                <div class="full video-container">
                    <iframe src='https://www.youtube.com/embed/c_-QdAw-2BY' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                </div>
            </div>
            <p class="full" data-aos="fade-right" data-aos-delay="500">Konzumiranje alkohola smanjuje sposobnost upravljanja vozilom.</p>
            <p class="full" data-aos="fade-right" data-aos-delay="750">Razmislite kad sjedate za volan.</p>
            <p class="full" data-aos="fade-right" data-aos-delay="1000">Evo što su nam Remi, Daniel i Hrvoje još rekli.</p>
            <a href="#" class="insite-btn" target="_blank" data-aos="fade-right" data-aos-delay="1750">Pročitajte više</a>
        </div>
    </section>
    <section class="full episode relative" id="utjecaj">
        <div class="full flex">
            <h2 class="full relative episode-title">Utjecaj razine alkohola na fizičke i mentalne funkcije</h2>
            <div class="full sugovornici extra-content flex stretch">
                <div class="third flex-responsive flex">
                    <div class="full center utjecaj-indicator"><div></div></div>
                    <h3 class="full" data-aos="fade-right" data-aos-delay="250">0,2 do 0,4 promila</h3>
                    <p data-aos="fade-right" data-aos-delay="250">Osoba počinje osjećati blagu euforiju, opuštenost i postaje više otvorena i ekstrovertirana. Kod nekih osoba pada koncentracija i sposobnost održavanja pozornosti.</p>
                </div>
                <div class="third flex-responsive flex">
                    <div class="full center utjecaj-indicator"><div></div></div>
                    <h3 class="full" data-aos="fade-right" data-aos-delay="500">0,5 do 0,7 promila</h3>
                    <p data-aos="fade-right" data-aos-delay="500">Dolazi do smanjenja inhibicije ponašanja, što znači da osoba postaje više društvena i pričljiva. Kod većine ljudi slabe motoričke sposobnosti, zbog čega je upravo 0.5 promila dopušteni zakonski limit.</p>
                </div>
                <div class="third flex-responsive flex">
                    <div class="full center utjecaj-indicator"><div></div></div>
                    <h3 class="full" data-aos="fade-right" data-aos-delay="1000">0,8 do 1,2 promila</h3>
                    <p data-aos="fade-right" data-aos-delay="1000">Srednje do značajne poteškoće u upravljanju vozilom. Osobe su sklone voziti brže nego inače. Dolazi do smanjene pozornosti, koncentracije i budnosti. Osim što dodatno opadaju motoričke sposobnosti, slabe i refleksi te je sposobnost reagiranja zakašnjela.</p>
                </div>
                <div class="third flex-responsive flex">
                    <div class="full center utjecaj-indicator"><div></div></div>
                    <h3 class="full" data-aos="fade-right" data-aos-delay="1250">1,3 do 1,5 promila </h3>
                    <p data-aos="fade-right" data-aos-delay="1250">Ozbiljne poteškoće u upravljanju vozilom. Velike smetnje u motoričkim funkcijama, govoru i razboritosti, odnosno percepciji okoline i procjeni vlastitih sposobnosti.  Slabi koordinacija pokreta, osobe teško upravljaju vozilom te većina više nije u stanju voziti ravno u traci.</p>
                </div>
                <div class="third flex-responsive flex">
                    <div class="full center utjecaj-indicator"><div></div></div>
                    <h3 class="full" data-aos="fade-right" data-aos-delay="1500">1.6 do 2 promila</h3>
                    <p data-aos="fade-right" data-aos-delay="1500">Osoba je vidno pod utjecajem alkohola, mogu se javiti i ozbiljne poteškoće vida pa neke osobe mogu doživjeti da im se vozna traka udvostručuje. Uz slabu koordinaciju i reflekse, sada kod nekih ljudi vrlo lako može doći i do povremenog gubitka svijesti.</p>
                </div>
                <div class="third flex-responsive flex">
                    <div class="full center utjecaj-indicator"><div></div></div>
                    <h3 class="full">2 do 3 promila</h3>
                    <p>Dolazi do povraćanja, inkontinencije i pojavljuju se simptomi alkoholne intoksikacije. U ovom trenutku osoba više nije u stanju kontrolirati vozilo, prisutne su ozbiljne poteškoće vida te osoba često gubi svijest. Refleksi su usporeni, a reakcije zakašnjele, zbog poteškoća s vidom te koordinacijom pokreta osoba više nije u stanju vozilom pratiti cestu.</p>
                </div>
                <div class="third flex-responsive flex">
                    <div class="full center utjecaj-indicator"><div></div></div>
                    <h3 class="full">3 do 4 promila</h3>
                    <p>Prisutni su znakovi teške intoksikacije alkoholom. Osoba se uglavnom ne može kretati bez pomoći drugih. Uz prisutnu oslabljenu sposobnost rasuđivanja te slabe reflekse i poteškoće vida, može doći i do nesvjestice te potpunog gubitka svijesti. Osoba nije sposobna upravljati vozilom.</p>
                </div>
                <div class="third flex-responsive flex">
                    <div class="full center utjecaj-indicator"><div></div></div>
                    <h3 class="full">Iznad 4</h3>
                    <p>Potencijalno fatalno po život, može nastupiti komatozno stanje. U većini slučajeva dolazi do potpunog gubitka svijesti i osoba nije sposobna samostalno hodati, a kamoli upravljati vozilom. </p>
                </div>
            </div>
            <p class="full utjecaj-izvor">Izvor: <a href="https://www.sciencedirect.com/topics/biochemistry-genetics-and-molecular-biology/blood-alcohol-content" target="_blank">https://www.sciencedirect.com/topics/biochemistry-genetics-and-molecular-biology/blood-alcohol-content</a></p>
        </div>
    </section>
    <section class="full episode relative" id="procitajte-vise">
        <div class="full flex">
            <h2 class="full relative episode-title" data-aos="fade-left">Oni su podjelili svoje priče</h2>
            <div class="full sugovornici flex stretch">
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="500">
                    <img src="https://www.telegram.hr/wp-content/uploads/2021/11/kobal-djuro.jpg" aria-hidden="true">
                    <h3 class="full">‘Godinama sam znao voziti toliko pijan da ne bih vidio ni crtu na cesti. Danas se pitam - što da mi je neko dijete izletjelo’</h3>
                    <p>Đuro Kopal iz Varaždina iskreno govori o godinama kada je, bez ikakvog razmišljanja, vozio posve pijan.</p>
                    <a href="https://www.telegram.hr/velike-price/godinama-sam-znao-voziti-toliko-pijan-da-ne-bih-vidio-ni-crtu-na-cesti-danas-se-pitam-sto-da-mi-je-neko-dijete-izletjelo/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="750">
                    <img src="<?php echo $native_path ?>img/grey_placeholder.png" aria-hidden="true">
                    <h3 class="full">Lorem Ipsum Dolor Sit Amet</h3>
                    <p>Cras lacus nibh, posuere eu velit a, porta accumsan risus. Aliquam erat volutpat, nullam vel ex congue.</p>
                    <a href="#" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="1000">
                    <img src="<?php echo $native_path ?>img/grey_placeholder.png" aria-hidden="true">
                    <h3 class="full">Lorem Ipsum Dolor Sit Amet</h3>
                    <p>Cras lacus nibh, posuere eu velit a, porta accumsan risus. Aliquam erat volutpat, nullam vel ex congue.</p>
                    <a href="#" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
            </div>
        </div>
    </section>
    <footer class="full native-signature">
        <div class="container flex">
            <div class="full center hide">
            </div>
            <div class="full center">
            <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio_white.svg" alt="TG Studio logo" />
            </div>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerima i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>
</body>

</html>