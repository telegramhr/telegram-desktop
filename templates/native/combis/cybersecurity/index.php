<!DOCTYPE html>
<html lang="hr">

<?php
//$native_path = get_stylesheet_directory_uri() . '/templates/native/combis/cybersecurity/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/combis/cybersecurity/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/combis/cybersecurity/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>img/aos.css?ver=1.00" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Space+Mono&family=Teko:wght@500&display=swap" rel="stylesheet">
    <script src="<?php echo $native_path ?>img/aos.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css?ver=1.20" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=1.32" type="text/css" />
    <script src="<?php echo $native_path ?>functions.js?ver=1.00"></script>
</head>
<body>
    <div class="main-container flex relative">
        <nav class="full topnav desktop-only flex relative">
            <div class="container center relative">
                <div class="center relative textlogo"><img src="<?php echo $native_path ?>img/combis_dark.png" alt="Combis logo">Klik za sigurnost</div>
                <div class="center relative">
                    <a href="#haker1" class="center relative animate">
                        <?php echo file_get_contents($native_path.'img/user-headset-solid.svg'); ?>
                        <div class="full">Ekspert 1</div>
                    </a>
                    <a href="#haker2" class="center relative animate">
                        <?php echo file_get_contents($native_path.'img/user-secret-solid.svg'); ?>
                        <div class="full">Ekspert 2</div>
                    </a>
                    <a href="#haker3" class="center relative animate">
                        <?php echo file_get_contents($native_path.'img/user-visor-solid.svg'); ?>
                        <div class="full">Ekspert 3</div>
                    </a>
                    <a href="#napadi" class="center relative animate">
                        <?php echo file_get_contents($native_path.'img/shield-keyhole-solid.svg'); ?>
                        <div class="full">Informiraj se</div>
                    </a>
                </div>
            </div>
        </nav>
        <nav class="full inpage-nav mobile-only center relative">
            <a href="#haker1" class="fourth center relative">
                <?php echo file_get_contents($native_path.'img/user-headset-solid.svg'); ?>
                <div class="full center-text">Ekspert 1</div>
            </a>
            <a href="#haker2" class="fourth center relative">
                <?php echo file_get_contents($native_path.'img/user-secret-solid.svg'); ?>
                <div class="full center-text">Ekspert 2</div>
            </a>
            <a href="#haker3" class="fourth center relative">
                <?php echo file_get_contents($native_path.'img/user-visor-solid.svg'); ?>
                <div class="full center-text">Ekspert 3</div>
            </a>
            <a href="#napadi" class="fourth center relative">
                <?php echo file_get_contents($native_path.'img/shield-keyhole-solid.svg'); ?>
                <div class="full center-text">Info</div>
            </a>
        </nav>
        <header class="full center relative">
            <div class="header-fade"></div>
            <video autoplay loop muted playsinline class="background-video">
                <source src="<?php echo $native_path ?>img/tg_header_cybersecurity_2.mp4?v=1.10" type="video/mp4">
            </video>
            <div class="container flex relative horizontal-pad">
                <h1 class="full bigger-h1 center-text" id="main-title"></h1>
                <h2 class="full center-text">Tvoj vodič za dobre online odluke</h2>
            </div>
        </header>
        <section class="full flex relative shoo-top">
            <div class="container flex center-text relative">
                <div class="half flex flex-responsive infographic-element horizontal-pad">
                    <p class="full">3.5x</p>
                    <p class="full">više malicioznih mailova primi zaposlenik male, nego srednje ili velike tvrtke</p>
                </div>
                <div class="half flex flex-responsive infographic-element horizontal-pad">
                    <p class="full">3.6M</p>
                    <p class="full">dolara je vrijednost prosječne štete po napadu na organizaciju</p>
                </div>
                <div class="full flex horizontal-pad tiny-text">
                    <p class="full infographic-descriptor">Izvori:</p>
                    <p class="full">Barracuda, Spear Phishing: Top Threats and Trends, 2022</p>
                    <p class="full">World Economic Forum, Global Cybersecurity Outlook, 2022</p>
                    <p class="full">Cybersecurity Ventures, Special Report: Cyberwarfare In The C-Suite, 2022</p>
                </div>
            </div>
        </section>
        <section class="full flex relative shoo-top" id="haker1">
            <a href = "https://www.telegram.hr/partneri/danijel-je-moralni-haker-u-combis-je-dosao-kao-student-a-danas-probija-racunalne-sustave-velikih-kompanija/ " class="container flex article-embed"
            target = "_blank">
                <div class="two-thirds flex flex-responsive horizontal-pad">
                    <img src="https://www.telegram.hr/wp-content/uploads/2022/11/sasa2451xw.jpg" alt="Ekspert Danijel Teslić">
                </div>
                <div class="third flex flex-responsive horizontal-pad">
                    <h3 class="full">Ekspert 1</h3>
                    <h2 class="full">Danijel Teslić</h2>
                    <p class="full">U Combis je došao kao student, a danas probija računalne sustave velikih kompanija: Često su nam dovoljni najobičniji alati da uđemo u sustav</p>
                    <div class="cta">Pročitaj više</div>
                </div>
            </a>
        </section>
        <section class="full flex relative shoo-top" id="haker2">
            <a href = "https://www.telegram.hr/biznis-tech/strucnjak-za-sigurnost-racunalnih-sustava-nikome-ne-vjerujem-provjeravam-i-mamin-mail-kad-mi-ga-posalje/"
            class="container flex article-embed"
            target = "_blank">
                <div class="two-thirds flex flex-responsive horizontal-pad desktop-order-2">
                    <img src="https://www.telegram.hr/wp-content/uploads/2022/11/sasa4625xw.jpg" alt="Ekspert Pero Kristić">
                </div>
                <div class="third flex flex-responsive horizontal-pad desktop-order-1">
                    <h3 class="full">Ekspert 2</h3>
                    <h2 class="full">Pero Kristić</h2>
                    <p class="full">Mislio je da će biti vrhunski sportaš, a danas štiti vrijedne sustave od najskupljih napada: Nikome ne vjerujem, provjeravam i mamin mail kad mi ga pošalje</p>
                    <div class="cta">Pročitaj više</div>
                </div>
            </a>
        </section>
       <section class="full flex relative shoo-top" id="haker3">
            <a class="container flex article-embed" href="https://www.telegram.hr/biznis-tech/sigurnosni-strucnjak-hakerima-prakticki-na-pladnju-serviramo-sve-informacije-koje-su-im-potrebne-da-nas-napadnu/"
            target = "_blank">
                <div class="two-thirds flex flex-responsive horizontal-pad">
                    <img src="https://www.telegram.hr/wp-content/uploads/2022/12/g12a2995.jpg" alt="Ekspert Goran Žiković">
                </div>
                <div class="third flex flex-responsive horizontal-pad">
                    <h3 class="full">Ekspert 3</h3>
                    <h2 class="full">GORAN ŽIVKOVIĆ</h2>
                    <p class="full">Iz banke je prešao u Combis kako bi uspostavio sustavno rješenje: 'Hakerima praktički na pladnju serviramo sve informacije koje im trebaju za napad'</p>
                    <div class="cta">Pročitaj više</div>
                </div>
            </a>
        </section>
        <section class="full flex relative shoo-top">
            <div class="container flex center-text relative">
                <div class="half flex flex-responsive infographic-element horizontal-pad">
                    <p class="full">197.6M</p>
                    <p class="full">mailova pošaljemo svake minute diljem svijet</p>
                </div>
                <div class="half flex flex-responsive infographic-element horizontal-pad">
                    <p class="full">2M</p>
                    <p class="full">dolara potrošimo online u svijetu svake minute</p>
                </div>
                <div class="full flex horizontal-pad tiny-text">
                    <p class="full infographic-descriptor">Izvori:</p>
                    <p class="full">LoriLewis via Allaccess, The Internet Minute, 2021</p>

                </div>
            </div>
        </section>
        <div class="full flex" id="napadi"></div>
        <section class="full flex relative special-section gray-bg">
            <a class="container flex center-text relative horizontal-pad">
                <div class="full center send-icon-up"><?php echo file_get_contents($native_path.'img/shield-keyhole-solid.svg'); ?></div>
                <h2 class="full center-text">Informiraj Se</h2>
                <p class="full center-text">Žrtve online napada nisu samo kompanije i njihovi zaposlenici. Rizici za sve nalaze se na svakom koraku, a zaštititi se možemo samo informiranjem i kritičkim razmišljanjem. Od napada na naše bankovne račune, do napada na nas kao ličnosti, bili odrasli ili djeca, evo kako se pripaziti.</p>
                <div class="full center relative"><div class="cta">Pročitaj više</div></div>
            </a>
        </section>
        <section class="full flex relative">
            <div class="container flex relative">
                <a href = "https://www.telegram.hr/partneri/getinvolved-sto-je-potrebno-da-biste-bili-sigurni "
                target = "_blank"
                class="fourth flex flex-responsive relative article-embed stretch pad-me">
                    <img class="shoo-bottom" src="https://images.telegram.hr/3e4t60XICO0HTDV8dZ4dz8TGkv9Mn9pV_w6u82KT4fI/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMTEvNW03YTc4MzUtZWRpdC5qcGc.webp">
                    <div class="full flex">
                        <h2 class="full">#GetInvolved - što je potrebno da biste bili sigurni?</h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>
                <a href = "https://www.telegram.hr/partneri/ovih-deset-savjeta-ucinit-ce-vam-online-soping-sigurnijim-provjerili-smo-koliko-ih-se-drzimo-u-redakciji/ "
                target = "_blank"
                class="fourth flex flex-responsive relative article-embed stretch pad-me">
                    <img class="shoo-bottom" src="https://images.telegram.hr/yoPliGrPxnFWVAShsjPlAq67Bjk5FJrAZNKINxrSB1c/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMTEvcnVwaXhlbi1jb20tcTU5aG16azM4ZXEtdW5zcGxhc2guanBn.webp">
                    <div class="full flex">
                        <h2 class="full">Ovih deset savjeta učinit će vam online šoping sigurnijim. Evo koliko ih se držimo u redakciji</h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>
                <a class="fourth flex flex-responsive relative article-embed stretch pad-me" href="https://www.telegram.hr/partneri/cyberbullying-je-sve-cesci-i-ozbiljniji-problem-psihologinja-nam-objasnjava-kako-dolazi-do-njega-i-kako-se-nositi-s-njime/ " target="_blank">
                    <img class="shoo-bottom" src="https://images.telegram.hr/didb8RlhRqjxU6CbW9VP_Roa-SmvDenTjGe2zCk4Lg4/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMTEvdGlqYW5hLTE5MDAuanBn.webp">
                    <div class="full flex">
                        <h2 class="full">Cyberbullying je sve češći i ozbiljniji problem. Psihologinja objašnjava kako dolazi do njega</h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>
                <a class="fourth flex flex-responsive relative article-embed stretch pad-me" href="https://www.telegram.hr/partneri/sve-vise-mlade-djece-vrijeme-provodi-na-internetu-ove-slikovnice-uce-ih-oprezu/ " target="_blank">
                    <img class="shoo-bottom" src="https://images.telegram.hr/MPSAhH0Q1VQqy_pGXoLHzshR7I6jnwZfEFCX1CUtx0o/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMTEvaW1hZ2UwMDAxNy5qcGVn.webp">
                    <div class="full flex">
                        <h2 class="full">Sve više mlađe djece vrijeme provodi na internetu. Ove slikovnice uče ih oprezu</h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>
            </div>
        </section>

        <footer class="full flex relative native-signature">
            <div class="container text-container flex relative stretch">
                <div class="full center logo-line">
                    <img src="<?php echo $native_path ?>img/admin-ajax.png" alt="Combis logo">
                    <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
                </div>
                <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom COMBIS i po najvišim uredničkim standardima Telegram Media Grupe.</p>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>

</html>
