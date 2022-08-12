<!DOCTYPE html>
<html lang="hr">

<?php
//$native_path = get_stylesheet_directory_uri() . '/templates/native/dm/euro/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/dm/euro/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/dm/euro/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/dm/euro/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css?ver=1.00" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=1.11" type="text/css" />
    <script src="<?php echo $native_path ?>functions.js?ver=1.10"></script>
</head>
<body>
    <div class="main-container flex relative">
        <header class="full flex relative">
             <div class="full waves-container">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(233, 246, 253, 0.7)" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(233, 246, 253, 0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(233, 246, 253, 0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#e9f6fd" />
                    </g>
                </svg>
            </div>
            <div class="container flex relative stretch">
                <div class="half center flex-responsive relative desktop-second">
                    <img src="<?php echo $native_path ?>img/tg_visual_dmeuro_new.svg?ver=1.0" alt="Ilustracija ljudih koji su veseli oko prelaska na euro">
                </div>
                <div class="half center flex-responsive relative">
                    <div class="full flex relative pad-me">
                        <!-- (c) 2000-2022 Gemius SA version 2.0 Impressions: campaign: dm Uvođenje eura, placement: /telegram.hr / super1.hr/landing page , creative: Landing page -->
                        <IMG SRC="https://gdehr.hit.gemius.pl/_[TIMESTAMP]/redot.gif?id=zIE7YLCccI5buK17uKC7m6bkLU_Ijg7GRXn9WnvgrJ3.P7/fastid=afczgahirzzblxngmngpfjkhlkkm/stparam=zhkretktaf/nc=0/gdpr=0/gdpr_consent=" />
                        <div class="full flex relative"><img class="dm-logo" src="<?php echo $native_path ?>img/logo_dm.svg?ver=1.0" alt="Logo dm-a"></div>
                        <h1 class="full">Dobre cijene <br>i kad euro krene</h1>
                        <p>Shopping se početkom iduće godine mijenja, ali samo u valuti kojom plaćamo - 1.1.2023. euro postaje službena valuta u Hrvatskoj.</p>
                        <div class="full countdown-element flex relative">
                            <div class="countdown-day-block center">
                                <div class="countdown-tiles flex">
                                    <div class="countdown-tile" id="cd-day-1">0</div>
                                    <div class="countdown-tile" id="cd-day-2">0</div>
                                    <div class="countdown-tile" id="cd-day-3">0</div>
                                </div>
                                <div class="countdown-subtitle">dana</div>
                            </div>
                            <div class="countdown-day-divider center">:</div>
                            <div class="countdown-day-block center">
                                <div class="countdown-tiles flex">
                                    <div class="countdown-tile" id="cd-hour-1">0</div>
                                    <div class="countdown-tile" id="cd-hour-2">0</div>
                                </div>
                                <div class="countdown-subtitle">sati</div>
                            </div>
                            <div class="countdown-day-divider center">:</div>
                            <div class="countdown-day-block center">
                                <div class="countdown-tiles flex">
                                    <div class="countdown-tile" id="cd-min-1">0</div>
                                    <div class="countdown-tile" id="cd-min-2">0</div>
                                </div>
                                <div class="countdown-subtitle">minuta</div>
                            </div>
                            <div class="countdown-day-divider center">:</div>
                            <div class="countdown-day-block center">
                                <div class="countdown-tiles flex">
                                    <div class="countdown-tile" id="cd-sec-1">0</div>
                                    <div class="countdown-tile" id="cd-sec-2">0</div>
                                </div>
                                <div class="countdown-subtitle">sekundi</div>
                            </div>
                        </div>
                        <p>Obavezno dvojno iskazivanje cijena počinje 5.9.2022. i završava 31.12.2023., a plaćanje u ovom periodu i dalje je moguće isključivo u kunama.</p>
                    </div>
                </div>

            </div>
        </header>
        <section class="full flex relative">
            <div class="container flex relative stretch">
                <a href="https://www.telegram.hr/partneri/ova-poznata-drogerija-odlucila-je-trajno-zadrzati-dobre-cijene-i-nakon-promjene-valute/" class="full center flex-responsive blue-section relative" target="_blank">
                    <div class="full flex relative">
                        <div class="two-thirds flex flex-responsive pad-me mobile-order-2">
                            <h2 class="full">Ova poznata drogerija odlučila je trajno zadržati dobre cijene i nakon promjene valute</h2>
                            <p>U svojim su prodavaonicama već započeli s uvođenjem dvojnog iskazivanja cijena</p>
                            <p class="italic">Pročitajte više...</p>
                        </div>
                        <div class="third flex flex-responsive pad-me mobile-order-1">
                            <img src="https://images.telegram.hr/pPQTaQQ90fFDXkH15q1kId-IrX-DlQWTe7xLPDZjPcE/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDcvZG0uanBn.jpg" alt="Police povoljne zdrave hrane u dm-u">
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <section class="full flex relative">
            <div class="container flex relative stretch">
                <div class="half center flex-responsive relative">
                    <img class="element-bg" src="<?php echo $native_path ?>img/tg_visual_dmeuro_blobbg_1.png" aria-hidden="true">
                    <div class="flex-table flex relative">
                        <div class="full flex stretch flex-table-row">
                            <div class="third flex relative">Cijena u kunama</div>
                            <div class="third flex relative">Cijena u eurima prije zaokruživanja</div>
                            <div class="third flex relative">Cijena u eurima nakon zaokruživanja</div>
                        </div>
                        <div class="full flex stretch flex-table-row">
                            <div class="third flex relative">69,99 kn</div>
                            <div class="third flex relative">9,289269360 EUR</div>
                            <div class="third flex relative">9,29 EUR</div>
                        </div>
                        <div class="full flex stretch flex-table-row">
                            <div class="third flex relative">189,99 kn</div>
                            <div class="third flex relative">25,2016006370 EUR</div>
                            <div class="third flex relative">25,20 EUR</div>
                        </div>
                        <div class="full flex stretch flex-table-row">
                            <div class="third flex relative">10 kn</div>
                            <div class="third flex relative">1,327228084 EUR</div>
                            <div class="third flex relative">1,33 EUR</div>
                        </div>
                        <div class="full flex stretch flex-table-row">
                            <div class="third flex relative">0,03 kn</div>
                            <div class="third flex relative">0,00398168 EUR</div>
                            <div class="third flex relative">0,00 EUR</div>
                        </div>
                        <div class="full flex stretch flex-table-row">
                            <div class="third flex relative">0,04 kn</div>
                            <div class="third flex relative">0,00530891 EUR</div>
                            <div class="third flex relative">0,01 EUR</div>
                        </div>
                    </div>
                </div>
                <div class="half center flex-responsive relative">
                    <div class="full flex relative pad-me">
                        <h2 class="full">Primjeri konverzije cijena iz kuna u euro</h2>
                        <p>Tijekom cijelog razdoblja dvojnog iskazivanja cijena fiksni tečaj konverzije prikazivat će se uvijek na isti način, 1 EUR = 7,53450 HRK.</p>
                        <p>Fiksni tečaj ne smije se zaokruživati, mora se koristiti puni brojčani iznos od 6 znamenki (glavni broj i pet decimala), a dvojno iskazivanje cijena omogućit će praćenje konverzije cijena iz kune u euro kao garanciju da se preračunavanje neće iskoristiti za zaokruživanje na višu cijenu.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="full flex relative">
            <div class="container flex relative stretch">
                <div class="full center blue-section relative">
                    <div class="full flex relative converter stretch">
                        <div class="half flex flex-responsive pad-me">
                            <h2 class="full">Pomoću konvertera izračunajte željenu cijenu iz kuna u eure</h2>
                        </div>
                        <div class="half center flex-responsive relative">
                            <div class="fourty center relative flex-responsive pad-me">
                                <input type="number" value="0" step="0.01" id="converter-kune"> kn
                            </div>
                            <div class="fifth center relative flex-responsive pad-me">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M32 160h319.9l.0791 72c0 9.547 5.652 18.19 14.41 22c8.754 3.812 18.93 2.078 25.93-4.406l112-104c10.24-9.5 10.24-25.69 0-35.19l-112-104c-6.992-6.484-17.17-8.217-25.93-4.408c-8.758 3.816-14.41 12.46-14.41 22L351.9 96H32C14.31 96 0 110.3 0 127.1S14.31 160 32 160zM480 352H160.1L160 279.1c0-9.547-5.652-18.19-14.41-22C136.9 254.2 126.7 255.9 119.7 262.4l-112 104c-10.24 9.5-10.24 25.69 0 35.19l112 104c6.992 6.484 17.17 8.219 25.93 4.406C154.4 506.2 160 497.5 160 488L160.1 416H480c17.69 0 32-14.31 32-32S497.7 352 480 352z"/></svg>
                            </div>
                            <div class="fourty center flex-responsive relative pad-me">
                                <input type="number" value="0" step="0.01" id="converter-euri"> €
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="full flex relative">
            <div class="container flex relative stretch">
                <div class="half center flex-responsive relative desktop-second">
                    <img src="<?php echo $native_path ?>img/tg_visual_dmeuro_blob_cijene.png" alt="Lokacije iskazanih cijena u obje valute na fizičkim i digitalnim računima">
                </div>
                <div class="half center flex-responsive relative">
                    <div class="full flex relative pad-me">
                        <h2 class="full">Dobre cijene u svako vrijeme</h2>
                        <p>Odlukom o uvođenju dvojnog iskazivanja cijena gotovo dva mjeseca prije zakonske obveze, dm kupcima želi omogućiti duži prijelazni period i lakšu prilagodbu na novu službenu valutu. Cijena u kunama bit će iskazana većim fontom, a cijena u eurima manjim.</p>
                        <p>Obveza dvojnog iskazivanja cijena ostaje sve do kraja 2023. godine, ali od 1.1.2023., kada počinje i plaćanje eurima, cijena u eurima bit će iskazana većim fontom, a u kunama manjim.</p>
                        <p>U prva dva tjedna iduće godine, točnije od 1.1. do 14.1.2023., počinje plaćanje eurima, ali će se još uvijek moći plaćati i u kunama, no na blagajnama će se vraćati novac isključivo u eurima.</p>
                        <p>Konceptom dobre cijene u svako vrijeme dm jamči kupcima da se povoljne cijene proizvoda neće mijenjati tijekom najmanje četiri mjeseca.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="full flex relative">
            <div class="container flex relative stretch">
                <a href="https://www.telegram.hr/partneri/i-kod-dvojnog-iskazivanja-cijena-postoje-iznimke-neka-prodajna-mjesta-ne-moraju-ih-imati-znamo-koja/" class="full center flex-responsive blue-section relative" target="_blank">
                    <div class="full flex relative">
                        <div class="two-thirds flex flex-responsive pad-me mobile-order-2">
                            <h2 class="full">I kod dvojnog iskazivanja cijena postoje iznimke. Neka prodajna mjesta ne moraju ih imati, znamo koja</h2>
                            <p>Kako bi se potrošači što lakše priviknuli na novu valutu, obveza prikazivanja cijena u kunama i eurima trajat će do 1.1.2024. </p>
                            <p class="italic">Pročitajte više...</p>
                        </div>
                        <div class="third flex flex-responsive pad-me mobile-order-1">
                            <img src="https://images.telegram.hr/ULlzaoPhjpvqFsEkaphxYcbZHWbSzSnBLfQTgZsq0BI/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDcvaW1nLTU2MDQuanBn.jpg" alt="Primjer dvojnog iskazivanja cijena u dm-u">
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <section class="full flex relative">
            <a href="https://www.telegram.hr/partneri/tajni-kupci-krecu-u-nadzor-preracunavanja-cijena-u-euro-otkrili-su-nam-gdje-bi-moglo-biti-najvise-problema/" target="_blank" class="container flex relative stretch">
                <div class="half center flex-responsive relative desktop-second">
                    <img src="<?php echo $native_path ?>img/tg_visual_dmeuro_blob_kupci.jpg" alt="Ana Knežević, preddsjednica Hrvatske udruge za zaštitu potrošača">
                </div>
                <div class="half center flex-responsive relative">
                    <div class="full flex relative pad-me">
                        <h2 class="full">Tajni kupci kreću u nadzor preračunavanja cijena u euro. Otkrili su nam gdje bi moglo biti najviše problema</h2>
                        <p>Razgovarali smo s Anom Knežević, predsjednicom Hrvatske udruge za zaštitu potrošača.</p>
                        <p class="italic">Pročitajte više...</p>
                    </div>
                </div>
            </a>
        </section>
        <section class="full flex relative">
            <div class="container flex relative stretch">
                <a href="https://www.telegram.hr/partneri/dm-uvodi-dvojno-iskazivanje-cijena-u-eurima-i-kunama/" class="full center flex-responsive blue-section relative" target="_blank">
                    <div class="full flex relative">
                        <div class="two-thirds flex flex-responsive pad-me mobile-order-2">
                            <h2 class="full">dm uvodi dvojno iskazivanje cijena u eurima i kunama</h2>
                            <p>U četvrtak, 14.7.2022., gotovo dva mjeseca prije zakonske obveze, dm je započeo s uvođenjem dvojnog iskazivanja cijena, kako bi kupcima omogućio duži prijelazni period i lakšu prilagodbu na euro kao novu službenu valutu Republike Hrvatske.</p>
                            <p class="italic">Pročitajte više...</p>
                        </div>
                        <div class="third flex flex-responsive pad-me mobile-order-1">
                            <img src="https://images.telegram.hr/i6iA-gGTMy-2-GOOxZ2TtMLw1vCLF1QNz7XBVQbyx6k/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDcvZGFyaW8ta2xlbWFyLTEuanBn.jpg" alt="Dario Klemar, prokurist i voditelj resora Informatike, Financija, Računovodstva i Kontrolinga u dm-u">
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <footer class="full flex relative native-signature">
            <div class="container flex relative stretch">
                <div class="full center">
                    <img class="dm-logo" src="<?php echo $native_path ?>img/logo_dm.svg?ver=1.0" alt="Logo dm-a">
                    <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
                </div>
                <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom dm i po najvišim uredničkim standardima Telegram Media Grupe.</p>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>

</html>