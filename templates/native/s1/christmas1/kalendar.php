<!DOCTYPE html>
<html lang="en">
<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/christmas1/';
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $native_path ?>css/style.css?v=4.5">
    <link rel="stylesheet" href="https://use.typekit.net/daa3ndb.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

</head>

<body>
    <?php do_action('body_start') ?>
    <header class="cotntainer-fluid">

        <div class="container">
            <div class="row justify-content-lg-between justify-content-center">
                <div class="col-lg-3 text-center">
                    <img src="<?php echo $native_path ?>img/logo-zeleni.svg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-2">
                    <div class="btn btn-zeleni d-none d-lg-flex" id="shareBtn">
                        <img src="<?php echo $native_path ?>img/face.svg" alt="" class="img-fluid">
                        <p>podijeli</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pokloni">
                <div class="col-lg-7 naslov text-center">
                    <h2>Pratite nas svakog dana, zaželite najdivnije želje i osvojite....</h2>
                    <p>Kliknite na otvoreni poklon i saznajte više</p>
                </div>
                <div class="col-lg-10">
                    <div class="kalendar">
                        <div class="dan jedan" id="dan-4">
                        </div>
                        <div class="dan dva" id="dan-7">

                        </div>
                        <div class="dan tri" id="dan-8">

                        </div>
                        <div class="dan cetri" id="dan-9">

                        </div>
                        <div class="dan pet" id="dan-10">

                        </div>
                        <div class="dan sest" id="dan-11">

                        </div>
                        <div class="dan sedam" id="dan-14">

                        </div>
                        <div class="dan osam" id="dan-15">

                        </div>
                        <div class="dan devet" id="dan-16">

                        </div>
                        <div class="dan deset" id="dan-17">

                        </div>
                        <div class="dan jedanaest" id="dan-18">

                        </div>
                        <div class="dan dvanaest" id="dan-20">

                        </div>
                        <div class="dan trinaest" id="dan-21">

                        </div>
                        <div class="dan cetrnaest" id="dan-22">

                        </div>
                        <div class="dan petnaest" id="dan-23">

                        </div>
                        <div class="dan sesnaest" id="dan-24">

                        </div>
                        <div class="dan sedamnaest" id="dan-25">

                        </div>
                        <div class="dan osamnaest" id="dan-28">

                        </div>
                        <div class="dan devetnaest" id="dan-29">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="container-fluid" id="dan">
        <div class="ukras-klijent">
            <img src="<?php echo $native_path ?>img/klijent-bg.svg" alt="" class="img-fluid">
        </div>
        <div class="ukras-klijent2">
            <img src="<?php echo $native_path ?>img/klijent-bg2.svg" alt="" class="img-fluid">
        </div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-9 naslov">
                    <p><span id="dan-text"></span></p>
                    <h2 id="naslov-text"></h2>
                    <div class="pow">
                        <p>Powered by:</p>
                        <div class="logo">
                            <img id="logo-url" src="" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row poklon-klijent justify-content-between">
                <div class="col-lg-5">
                    <div class="okvir">
                        <img id="animacija-url" src="" alt="" class="img-fluid">
                        <div class="cane">
                            <img src="<?php echo $native_path ?>img/okvir.svg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h4 id="uvod-text"></h4>

                    <p id="ostalo-text"></p>
                </div>
                <div id="winner-wrapper" class="col-lg-12 d-none">
                    <div class="pobjednik row justify-content-center">
                        <div class="col-lg-4">
                            <h2>Pobjednica dana</h2>
                            <h3 id="pobjednik-ime"></h3>
                        </div>
                        <div class="col-lg-6">
                            <p id="pobjednik-text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid" id="forma">
        <div class="container">
            <div class="row justify-content-between">
                <div id="forma-wrapper" class="col-lg-5">
                    <div class="naslov">
                        <h3>Zaželite želju i osvojite poklone</h3>
                        <p>Najkreativniji odgovor nagrađujemo s dva sweatshirta s vizualom mede</p>
                    </div>

                    <form id="forma-element">
                        <div class="form-group">
                            <label for="ime">Ime i prezime</label>
                            <input type="text" class="form-control" id="ime" required>
                            <div class="invalid-feedback">
                                Polje je obavezno ispuniti prije slanja.
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="e-mail">Email address</label>
                            <input type="email" class="form-control" id="e-mail" required>
                            <div class="invalid-feedback">
                                Polje je obavezno ispuniti prije slanja.
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="adresa">Adresa</label>
                            <input type="text" class="form-control" id="adresa">

                        </div>

                        <div class="form-group">
                            <label id="pitanje-text" for="pitanje"></label>
                            <textarea class="form-control" id="pitanje" rows="5" required></textarea>
                            <div class="invalid-feedback">
                                Polje je obavezno ispuniti prije slanja.
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Prihvaćam <a href="https://super1.telegram.hr/pravila-privatnosti/"
                                        target="_blank">pravila privatnosti Super1</a> i <a
                                        href="https://super1.telegram.hr/snaga/opci-uvjeti-nagradnog-natjecaja/"
                                        target="_blank">pravila
                                        kreativnog natječaja</a>
                                </label>
                                <div class="invalid-feedback">
                                    Polje je obavezno ispuniti prije slanja.
                                </div>
                            </div>
                        </div>
                        <button id="form-submit" class="btn btn-forma">Pošaljite</button>
                    </form>
                </div>
                <div class="col-lg-6 col-10 ilu">
                    <img src="<?php echo $native_path ?>img/forma-bg.svg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid" id="zelje">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 naslov text-center bijeli">
                    <h3>Vaše najljepše želje</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="arrows d-none d-sm-block">
                        <div class="d-inline-flex">
                            <div class="prev"></div>
                            <div class="next"></div>
                        </div>
                    </div>
                    <div class="slider">
                        <div class="slide-zelja">
                            <div class="zelja varjedan">
                                <div class="zelja1"></div>
                                <p>Sarma meni već je spremna,<br>
                                    Baka nam je bila sretna,<br>
                                    Namotala za dva lonca,<br>
                                    Biti će gozbe, zvone zvonca!<br>
                                    Sa Fantom sve bolje miriše,<br>
                                    Sretan Božić i ništa više<br>
                                    Ne trebamo sada mi jer<br>
                                    Sretni smo skupa svi.</p>
                                <h5>SILVIJA VRGOČ</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja vardva">
                                <div class="zelja2"></div>
                                <p> Baka Mira sprema najbolju sarmu na svijetu, sve dok ne pita mene za pomoć. Moja
                                    omiljena (ne)zgoda s njom je upravo vezana za sarmu. Baka uvijek sprema sarmu za sve
                                    svoje potomke, a s obzirom da nas ima dosta, sarme se broje u dvoznamenkastom broju.
                                    Tako je jedan dan namotala sarme i zvala mene da dođem pripaziti na njih dok se
                                    kuhaju jer je imala obveza. "Pazi na vatru, dolij vode kad treba i to je to". Znam,
                                    vrlo jednostavan posao i bilo bi super da ja nisam zaspala. Sarme se zapalile, kuća
                                    se zadimila, sve smrdi po dimu, ne vidi se ništa, pas laje, ja kašljem i skačem po
                                    kući s krpom. Scena kao iz filmova. Bila je "presretna" kad je došla kući. Danas se
                                    toj situaciji smijemo, ali više ne smijem prilaziti njenoj kuhinji. Sarme ne smijem
                                    ni pogledati sve dok ih ne dobijem u tanjur :D</p>
                                <h5>Naomy Čačić</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja varjedan">
                                <div class="zelja1"></div>
                                <p>Kada dođe red na sarmu, mama je kuharica prava,
                                    na svome mjestu mora biti svaki začin, svaki sastojak i svaka tava.
                                    Jedne je godine odlučila veliki ručak organizirati,
                                    i cijelu bližu i dalju obitelj pozvati.
                                    Cijela joj je ova situacija bila jako stresna,
                                    no u pomoć je priskočila i baka Vesna.
                                    Sve je moralo biti savršeno, mama je zanat morala dokazati,
                                    jako se nadala da će se sva sarma smazati.
                                    Satima su je pripremale, cijelu kuću zamirišale,
                                    zbog dobre atmosfere glazbu nisu stišale.
                                    Sutradan, točno na Božić, okupila se obitelj cijela,
                                    u nadi da bi im sarma dobro sjeli.
                                    Tanjuri bili puni, a napetost na vrhuncu,
                                    više nije ostala niti jedna sarma u loncu.
                                    Samo se čulo dobar tek i nakon njega muk,
                                    kad odjednom - kreštavi vrisak i zvuk.
                                    Pošećerila sam sarmu! viknula je baka,
                                    a u tom trenutku mama ostade bez zraka.
                                    Večera je upropaštena, nema mi spasa,
                                    ali zato krene osmijeh od sto glasa.
                                    Slatka sarma, to će biti obiteljska tradicija,
                                    mogli bismo je nazvati Jelićeva delicija! </p>
                                <h5>Karlo Jelić</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja vardva">
                                <div class="zelja2"></div>
                                <p> Moja junakinja ove 2020.-te, ali i zadnjih 10 godina koliko se poznajemo, zove se
                                    Iskra Škorić. Kako joj samo ime kaže, ona je zaista iskra dobrote i vjernosti u mom
                                    životu.
                                    Uvijek je iskrena (pun intended), čak i kad se razilazimo u stavovima, ali nikad mi
                                    nije okrenula leđa. Ove godine napose njezino mi je prijateljstvo bilo neizmjerno
                                    potrebno budući da sam imala rizičnu trudnoću i često sam trebala podršku i riječi
                                    utjehe u teškim trenucima. Iskra je bila tu za mene u mojim teškoćama iako je ove
                                    godine ostala bez posla, i to ne zbog korone, nego zato što se usudila dovesti u
                                    pitanje neetično poslovanje bivše tvrtke. U svemu što radi, ona je poštena,
                                    dosljedna i nepokolebljiva, čak i kad je na cijeni njezina vlastita egzistencija.
                                    Iskra zaslužuje jedan veliki poklon kao što je ovaj makeover jer su njezinu pokloni
                                    uvijek promišljeni (nikad nisam dobila nešto od nje za rođendan, a da nije bilo i
                                    korisno i prekrasno - jako dobro sluša što pričam). Dajmo priliku Iskri da
                                    zasvijetli :)</p>
                                <h5>Mihaela Vučić</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja varjedan">
                                <div class="zelja1"></div>
                                <p>Teško je u malo riječi sažeti svu zahvalnost prema ženi koja ti je poklonila nešto
                                    najdragocjenije na svijetu, a to je život.
                                    Svakim udisajem, svakim osmijehom, svakom suzom koja život znači, svakoga dana
                                    iznova joj zahvaljujem jer je najbolja mama. Znam da je pratila i još uvijek prati
                                    sve moje uspone i padove, od prvih nesigurnih koraka do sada kada kroz život kročim
                                    sigurnim korakim, kada se može ponositi mojim uspjesima i kada je moja sreća njezina
                                    neizmjerna radost. Sretna sam sto znam da u mnogim neverama života imam mirnu luku
                                    gdje znam da uvijek mogu doći tražiti savjet, pitati i dobiti mudre odgovore pune
                                    životnog iskustva. Ona je žena bez premca, žena koju ne uspoređujem sa drugim ženama
                                    jer je ustrajna, borbena, puna optimizma i sve je to svojim životnim lekcijama
                                    nastojala prenjeti i na mene. Ona je moj oslonac, ona me bodri od prvoga dana, ona
                                    vjeruje u mene, ona je onaj vjetar u leđa koji ti je potreban kada posustaješ i
                                    misliš da više ne možeš. Hvala ti majko za sve!! </p>
                                <h5>Ana Pušić Oklopčić</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja vardva">
                                <div class="zelja2"></div>
                                <p>Bilo ih je puno, a posebno se sjećam kad mi je "uhvatila " dva roja pčela, naime,
                                    bilo je proljeće, vrijeme kad se pčele roje ,a ja morala na neodgodivo putovanje . A
                                    šta sve uzgaja u svom vrtu, ko bi to pobrojao, sve čisto ekološki, a neznaš je li
                                    ljepše ili je ukusnije, kao da i te biljke, a tu su i kokice, psi i mace, osjećaju
                                    to veliko srce. Kod nje nema bacanja, a čini ti se da iz "ničega" napravi ne nešto,
                                    nego svašta. Kod nje je uvijek zatvoren krug!
                                    Moja Karmela , sretni ti blagdani i nova godina i budi mi uvijek zdrava i sretna,
                                    puna entuzijazma i da te nikad ne napušta ta djetinja znatiželja!</p>
                                <h5>GORJANA VLAIĆ</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja varjedan">
                                <div class="zelja1"></div>
                                <p>Jedino kod moje susjede kuhano vino ima poseban miris i okus. Što li ona koristi,
                                    koji je njezin začin? Mislim da je najvažniji začin njena ljubav koju ulaže u svaki
                                    kompot ili kuhano vino koje sprema. Očekujemo i ove godine nešto specijalno uz želju
                                    za vesele blagdane i češća buduća druženja. </p>
                                <h5>Tihana Matika</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja vardva">
                                <div class="zelja2"></div>
                                <p> Prijateljice moja,
                                    dužiti neću, samo ti želim čestitati Božić i podsjetiti te koliko mi u životu
                                    donosiš sreću.
                                    Ti si kao cimet mom kolaču za čijim receptom svi moji gosti plaču. Đumbir mljeveni
                                    si kao u mom pudingu od vanilije pa mi je s tobom sve u životu milije.
                                    Želim da zauvijek ostanemo ovako bliske kao klinčića dva jer je to tajna
                                    prijateljstva sva. Što jedna drugu podiže više, to se uz nas obje lakše diše.
                                    Nadam se da sam i ja začin tvom životu i želim ti svu sreću jer pripreme kolača
                                    stalno kroz ovo zimsko razdoblje kreću. Za kraj, samo da ti kažem, puno te volim pa
                                    ti evo šaljem ovako puse da što manje pamet solim. Dok praviš kod sebe domaći kruh,
                                    želim ti najzačinjeniji božićni duh! :)</p>
                                <h5>Helena Kozina</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja varjedan">
                                <div class="zelja1"></div>
                                <p>Kuhano vino ja oduvijek zovem VINSKI ČAJ. Još u vrijeme moje mladosti; kad bi se
                                    vratila iz škole, na ploči starog "šparheta" na drva, čekao je mirisni i vrući čaj
                                    od vina. Cijela kuhinja bila je puna mirisa, zrak je titrao od začina koje je baka
                                    dodavala u opojnu tekućinu. Danas takav vinski čaj od kuhanog vina sprema moj
                                    suprug. Uz moju rječitu asistenciju i Podravka začine, naučio je od običnog vina
                                    spremiti najbolje kuhano vino na svijetu! Najukusnije piće koje grije za hladni
                                    Božić! Sretan nam Božić svima!</p>
                                <h5>Irena Vičević</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja vardva">
                                <div class="zelja2"></div>
                                <p> Moj šogor je takva faca da ako se dogovori druženje i on iz nekog razloga ne može
                                    doći - svi otkažu jer znaju da je on ona "jedna žličica vegete" koja bi nedostajala
                                    za zabavu!</p>
                                <h5>Petra Jozinović</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja varjedan">
                                <div class="zelja1"></div>
                                <p>Mr.Bean do koljena joj nije, njoj se svatko u društvu smije. Njene fore svi volimo
                                    jako, a pričanje istih njoj ide lako. Ovim putem joj svu sreću želim, našem druženju
                                    se iskreno veselim. Nek joj Božić najljepši bude pa da nam smisli nove fore lude.
                                    Želim joj ljubav, mir i veselje, nek joj se ispune sve želje!</p>
                                <h5>Naomy Čačić</h5>
                            </div>
                        </div>

                        <div class="slide-zelja">
                            <div class="zelja vardva">
                                <div class="zelja2"></div>
                                <p>Kume Zlatko tvoja kotlovina je naj bolja kada pivu stavis umijesto vina i svima nam
                                    je fina .Da te nema svijet nebi bio isti bez tvojih fora i ideja mi nebi znali kako
                                    se i gulas pravi . Vrhunski si kuhar a jos bolji prijatelj i zabavljac s tobom u
                                    drustvu dosadno nije poneko cak od smijeha i flekove krije . Kume moj ovo sala nije
                                    zelim ti uz Super 1 sve najbolje ,Sretan ti Bozic i Godina Nova i jos puno novih
                                    fora .</p>
                                <h5>Marija Lackovic</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja varjedan">
                                <div class="zelja1"></div>
                                <p>Najljepse blagdanske uspomene vezu me uz bakine gibanice .Jedva cekam Blagdane i
                                    poziv svoje bake . Dođi mila gotova je gibanica . Taj miris ,taj okus ta ljubav u
                                    bakinom srcu to vam ja opisati ne mogu .Koliko god je stara i slaba ali svu svoju
                                    snagu i ljubav u te gibanice da i da udovolji nama .Tada se ona osijeca jakom i
                                    korisnom i to joj daje snagu i volju za zivotom.Bakice paket ovaj nam zelim i da
                                    svoje znanje i ljubav s menom podijelis .Hvala ti sto si moja baka i sto nam s
                                    ljubavlju naj finije strudle ,gibanice i digance radis a ja cu te voljeti i cijeniti
                                    i drzati ko kap vode na dlanu .Sretne blagdane ti zelim i gibanicu pripremi.</p>
                                <h5>Marija Lackovic</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja vardva">
                                <div class="zelja2"></div>
                                <p>Sve najbolje teta Marica! Nikad vam neću moći dovoljno zahvaliti što ste me naučila
                                    svemu što sad znam napraviti u kuhinji!</p>
                                <h5>BARBARA POPOVIĆ</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja varjedan">
                                <div class="zelja1"></div>
                                <p>Draga mama, hvala što si uvijek priređivala fine kolače i ukusne slastice za nas, ne
                                    samo za Božić, nego i za rođendane, nedjelje, petke i utorke. Bilo je divno s tobom
                                    sudjelovati u pripremi čupavaca, ruskih kapa, metar kolača, kokos kiflica i
                                    medenjaka koji su bili neizostavni svakog Božića. Naša kuća uvijek je mirisala po
                                    kolačima i hrani. Naša mala kuhinja proizvela je čuda. Ali najveće čudo stvorila si
                                    ti u našim srcima. Hvala što i ja danas mogu to isto učiniti sa svojim djevojčicama,
                                    a potom doći k tebi i zaželjeti od srca sretan Božić.</p>
                                <h5>Gordana Stuparić</h5>
                            </div>
                        </div>

                        <div class="slide-zelja">
                            <div class="zelja vardva">
                                <div class="zelja2"></div>
                                <p>Draga mama, jer ti uvijek brineš o meni evo jedan proizvod koji njeguje tvoju kožu.
                                    Malo njege i hidratacije za ovo zimsko razdoblje.</p>
                                <h5>anja mihalković</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja varjedan">
                                <div class="zelja1"></div>
                                <p>Sve najbolje mojoj privatnoj vizažistici-mojoj sebi od koje uvijek dobijem najbolji
                                    savjet za njegu kože, kose, za odjeću. </p>
                                <h5>SILVIJA VRGOČ</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja vardva">
                                <div class="zelja2"></div>
                                <p>Mislim da ne griješim kad kažem da će ova nesretna 2020. godina ostati u gorkom
                                    sjećanju većini ljudi, pa tako i meni. No, svijetla točka u ovoj mračnoj godini je
                                    to što smo svi naučili više cijeniti neke svakodnevne sitnice i male radosti. Moje
                                    kćeri su vrijeme karantene odlučile ispuniti učenjem starih obiteljskih recepata, te
                                    iako nisam mogla biti fizički s njima, trudila sam se dati što bolje upute preko
                                    poziva, videopoziva, poruka i svih ostalih forma komunikacije koje nam srećom
                                    omogućuje današnja tehnologija. Bilo je tu naravno svašta, od uspješnih do onih
                                    manje uspješnih pokušaja, ali sve to vrijeme koje smo proveli skupa raspravljajući o
                                    tome zašto se tijesto nije diglo ili zašto su keksi ostali tvrdi je neprocjenjivo. A
                                    mojim dragim lutkicama želim da i dalje ostanu tamo marljive studentice i sad već
                                    vrhunske kuharice te se nadam da ćemo uskoro skupa uživati u mirisu božićnih
                                    keksića. Voli vas najviše vaša mama!</p>
                                <h5>Ivanka Marić</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja varjedan">
                                <div class="zelja1"></div>
                                <p>Najbolji zeleni savjet dobila sam od svoje drage prijateljice Anne, Austrijanke koja
                                    me upoznala s višim standardima ekološkog života od onih koje poznajemo mi u
                                    Hrvatskoj. Kad smo se prilikom jednog davnijeg druženja hvalili kako odvajamo otpad
                                    i ponekad radimo kompost, aludirajući kako smo bolji od prosjeka, na lijep nam je
                                    način objasnila kako su stvari poput odvajanja otpada tek minimum minimuma koje
                                    svatko od nas mora obavljati ako planeti Zemlji želi uopće dati šansu. Nakon tog
                                    edukativnog razgovora i sama sam svoju, inače ne pretjerano zainteresiranu okolinu,
                                    počela hrabriti da čini to isto. Jer je zbilja nužno! I ponosna sam na to koliko ih
                                    se tih načela drži i dan danas, godinama kasnije ;)</p>
                                <h5>Nada Janković</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja vardva">
                                <div class="zelja2"></div>
                                <p>Moj otac mi je uvijek govorio: "Priroda nam je toliko toga dala, stoga je dužnost
                                    svakog čovjeka vratiti natrag barem nekakav minimum". Od malih nogu upozoravao me da
                                    nikad ne bacam smeće na pod, učio me o važnosti reciklaže i razvrstavanja otpada te
                                    prenio na mene svoju ljubav prema uzgoju biljaka, od raznog voća i povrća pa sve do
                                    onih malih kućnih biljčica u tegli. Dragi tata, hvala ti što si mi kroz godine
                                    usadio sve "zelene" vrijednosti koje čovjeka treba imati, a tebi za Božić želim da
                                    ti svaka biljka uspije, pa čak i onaj bosiljak u tegli koji te uvijek namuči..</p>
                                <h5>Martina Marić</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja varjedan">
                                <div class="zelja1"></div>
                                <p>Moja sestra uvijek sa sobom nosi bocu vode i stalno me opominje na važnost unošenje
                                    tekućine u organizam. Moram priznati da je prošlo dugo vremena prije nego sam
                                    prihvatila njen savjet. Danas redovito nosim vodu i pijem je tokom cijelog dana
                                    Moja koza više nije suha, a manje sam i umorna tokom dana. Draga seko , uz tebe sam
                                    zavoljela zelenu boju jer zeleno nosi zdravlje.</p>
                                <h5>Dubravka Šarić</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja vardva">
                                <div class="zelja2"></div>
                                <p>Mislim da ne griješim kad kažem da će ova nesretna 2020. godina ostati u gorkom
                                    sjećanju većini ljudi, pa tako i meni. No, svijetla točka u ovoj mračnoj godini je
                                    to što smo svi naučili više cijeniti neke svakodnevne sitnice i male radosti. Moje
                                    kćeri su vrijeme karantene odlučile ispuniti učenjem starih obiteljskih recepata, te
                                    iako nisam mogla biti fizički s njima, trudila sam se dati što bolje upute preko
                                    poziva, videopoziva, poruka i svih ostalih forma komunikacije koje nam srećom
                                    omogućuje današnja tehnologija. Bilo je tu naravno svašta, od uspješnih do onih
                                    manje uspješnih pokušaja, ali sve to vrijeme koje smo proveli skupa raspravljajući o
                                    tome zašto se tijesto nije diglo ili zašto su keksi ostali tvrdi je neprocjenjivo. A
                                    mojim dragim lutkicama želim da i dalje ostanu tamo marljive studentice i sad već
                                    vrhunske kuharice te se nadam da ćemo uskoro skupa uživati u mirisu božićnih
                                    keksića. Voli vas najviše vaša mama!</p>
                                <h5>Ivanka Marić</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja varjedan">
                                <div class="zelja1"></div>
                                <p>Da ljubav baš nekako kroz želudac ide,<br>
                                    naučih kao dijete od bake i dide.<br>
                                    Domaće juhe, lovački gulaš i pokoja pita,<br>
                                    bilo je svega i sva djeca su uvijek bila sita.<br>
                                    Ponekad bi pomogao stric ili jedna od teta.<br>
                                    Ali, praznici su bili dugi, a nas cijela četa.<br>
                                    Zato vam, dragi moji, puno hvala<br>
                                    Za sve što kao mala nisam znala:<br>
                                    Za strpljenje, naporan rad i silnu brigu,<br>
                                    za recepte koje si, bako, pisala u knjigu.<br>
                                    Za sve usjeve koje si posadio, djede,<br>
                                    i pobrinuo se da svatko na vrijeme jede.<br>
                                    Nek' ste vi meni i dalje veseli i zdravi<br>
                                    I nek' vas nijedan unuk ne zaboravi.<br>
                                    Puno sreće, zdravlja i ljubavi želi vam vaša unuka... </p>
                                <h5>Dragica Bunčić</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja vardva">
                                <div class="zelja2"></div>
                                <p>Gurman sam veliki i ljubitelj kolača koje moja žena sprema svakoga dana. Zbog
                                    nakupljenih kila ona je mene stavila pod kontrolu i zabranila da se približavam
                                    stolu. Nakon juhe, sarme i pečenja uhvati me grižnja ljuta al šta ću kad ne mogu da
                                    odolim toj gurmanskoj hrani. Zbog ljubavi njene odlučila je da je sarmi i umaka
                                    dosta da će zbog mene kuhat zdravije i manje. Zbog nje zaboravit ću grešne užitke,
                                    prelazim na zdrave napitke i zato joj od srca veliko Hvala! </p>
                                <h5>VELIMIR ZANZE</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja varjedan">
                                <div class="zelja1"></div>
                                <p>Moj najveći heroj 2020. godine je moja teta. Još od malih nogu nas sve mazi i pazi, a
                                    njoj nikako da krene. Krajem prošle godine se razbolila te je zbog bolesti i cijele
                                    situacije s koronom, nedavno ostala bez posla, 4 godine prije penzije. No ljudi
                                    moji, nema tog potresa, pandemije, bolesti, loših ljudi niti bilo čega drugog što
                                    nju može zaustaviti. Toliko je pozitivna, toliko i dalje pomaže svima oko sebe i
                                    unosi radost i toplinu gdje god dođe. Najljepše od svega mi je vidjeti ju ponovno
                                    zaljubljenu, što je i dokaz da ljubav ponekad pruža nadnaravne moći. Da ne duljim,
                                    teško je izdvojiti jedno dobro dijelo koje je napravila, no mislim da je u ovom
                                    razdoblju pandemije najvažnija emocionalna podrška, a vjerujte mi, ona ju pruža
                                    nemalom broju ljudi svakodnevno. Zato želim svojoj teti lavici da zablista u punom
                                    sjaju ovaj Božić! </p>
                                <h5>Andrea Šepak</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja vardva">
                                <div class="zelja2"></div>
                                <p>Mojoj dragoj prijateljici, koja je tim veći čovjek što je čovjekom teže biti! Ove je
                                    godine radila i noć i dan da nitko od njenih radnika ne ostane bez posla ili svoje
                                    pune plaće, a prije nekoliko dana je posegnula u vlastitu ušteđevinu da bi im
                                    isplatila Božićnicu, jer je račun tvrtke uslijed 2020. ostao suh k'o barut. Ona,
                                    nadam se, i sama zna da je velika - a ja želim da to zna i cijeli svijet. Hvala ti
                                    na tome što si baš takva, Velika moja!</p>
                                <h5>Matea Radovan</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja varjedan">
                                <div class="zelja1"></div>
                                <p>Iako je 2020.godina započela loše, okruženi smo ljudima koji žele pomoći onim
                                    potrebitima. Oni nalaze svjetlo na kraju tunela i vraćaju osmjehe na lica. Ove
                                    godine mogu istaknuti svoju prijateljicu koja je ne samo što je postala,, kum''
                                    jednom djetetu u Africi te je i pomagala starijima u borbi s virusom COVID-19.
                                    Svojom vedrinom, toplinom i dobrim namjerama se brinula o nezbrinutoj djeci tako što
                                    im je poklonila igračke no osim materijalnog dijela ono najbitnije poklonila im je
                                    svoju ljubav te naučila najbitnije vrijednosti života. Zbog njene dobrote i ljubavi
                                    prema svim ljudima ona je tu za svoje prijatelje. Savjetuje, pomaže, sluša, sve što
                                    najbolji prijatelji rade. Želim njoj i svim ljudima da se sve želje ostvare u
                                    nadolazećoj godini te da oni koji čitaju su inspirirani pričom te da će oni učiniti
                                    razliku u sebi, a i u svijetu. </p>
                                <h5>Jelena Zulim</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja vardva">
                                <div class="zelja2"></div>
                                <p>Tko te zapravo jedini poznaje najbolje? Nitko drugi nego tvoja mama. Najljepši
                                    trenutak? Od svake sekunde provedene sa tom ženom, kao najljepši jedino mogu
                                    izdvojiti onaj, kada je doktor rekao:" Izlječeni ste gospođo, pobjedili ste rak." Ne
                                    mogu opisati taj uzdah nakon, kao da je prvi puta uistinu udahnula i izdahnula zrak.
                                    Oduvijek je bila lavica i u dubini duše znala sam da će sve to jednog dana proći..
                                    Po prvi puta shvaćam stihove "Vratio sam se živote, potjero sam dane sive, ima li za
                                    mene još ljepote, vratio sam se opet među žive.." volim te mama ❤️</p>
                                <h5>Marija Lacić</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja varjedan">
                                <div class="zelja1"></div>
                                <p>Prije desetak godina bila sam nekoliko dana poslovno u Beču i iskoristila sam jedno
                                    slobodne poslijepodne za šoping s kolegicom u velikom trgovačkom centru. Sjećam se
                                    da sam se tomu jako veselila zbog robnih marki kojih nije bilo kod nas, bio je to
                                    divan dan, zabavljale smo se unatoč umoru i bile zadovoljne kupnjom.
                                    Prije izlaska otišle smo u toalet i u gužvi i brzini zaboravila sam jednu, ali
                                    najtežu, vrećicu vjerojatno kod umivaonika. Imala sam još druge osobne stvari,
                                    veliku torbu sa spisima, tako da sam tek navečer pri povratku u hotel shvatila što
                                    se dogodilo. Šoping-centar se zatvorio, ljutnja na samu sebe miješala se s tugom, a
                                    kolegica me nagovarala da provjerimo sutradan ujutro odmah nakon otvaranja trgovine
                                    čeka li me kojim čudom vreća sa stvarima. Otišle smo odmah u WC, nije bilo ničega,
                                    malo smo prošetale jučerašnjom rutom, a mene su brzo napuštali optimizam i nada.
                                    Na kolegičin prijedlog otišle smo provjeriti na infopult i za koji trenutak ja sam s
                                    nevjericom promatrala djelatnicu kako mi spremno pruža moje izgubljeno blago.
                                    Zavirila sam u vrećicu i na vrhu sam opazila poruku s nacrtanim smješkom koja je u
                                    prijevodu s njemačkog glasila: „Super odabir!“. Mojoj sreći nije bilo kraja i
                                    sljedećih sam dana u mislima intenzivno zahvaljivala poštenoj nalaznici i željela
                                    joj sve najljepše u životu.</p>
                                <h5>Ana Marija Pšeničnik</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja vardva">
                                <div class="zelja2"></div>
                                <p>Jedan od najljepših trenutaka koji sam uopće ikada doživjela se dogodio u tako
                                    svakodnevnom,skoro pa bezveznom trenutku,kada sam ga i najmanje očekivala. Seka i ja
                                    smo bile u našoj sobi,nešto smo pričale,tv je bio upaljen,ali prigušen i taman smo
                                    se prisjećale neke stare reklame iz TopShopa,radilo se o nekom super valjku,kad eto
                                    na ekranu opet taj valjak,ali u suvremenijoj verziji.
                                    Počele smo se tako smijati,da nas je netko vidio,rekao bi da smo lude i da nas je
                                    grom udario,ali u tom trenutku,sve se nekako činilo kako treba-tu smo skupa u
                                    sadašnjosti,ali smo bile i u prošlosti,i iako su kroz naše živote prošle godine od
                                    kojih su neke bile bolje,a neke lošije,još se smijemo i još uvijek nismo izgubile tu
                                    pozitivnu energiju u sebi❤ zato,hvala ti seko što postojiš i jednio to ti i želim,a
                                    i sebi,da smo zauvijek skupa</p>
                                <h5>Ana Fajdetić</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja varjedan">
                                <div class="zelja1"></div>
                                <p>Nema shoppinga bez moje seke! Ona je čudo! Skoro pa doslovno bez nje ne uspijem
                                    vidjet pa ni kupit ništa, pogotovo kad je baš hitno za neku priliku. Shopping života
                                    obavile smo prije cca 5 godina kad sam tražila kožnjak - već na rubu snaga,
                                    praktički odustala, a seka me natjera da uđemo u tu još jednu trgovinu i to je bilo
                                    to - klasična crna kožna jakna koju nosim već godinama. (Plus dodatne vansezonske
                                    stvari koje smo usput uspjele upiknuti i uživati u njima kad je stigla sezona).
                                    Draga seka, želim nam još bezbroj zajedničkih druženja i uspješnih shoppinga!!</p>
                                <h5>Matea Hermanović</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja vardva">
                                <div class="zelja2"></div>
                                <p>Definitivno najbolji odlasci u shoping su s mojom prijateljicom Ivanom. Ni ja ni ona
                                    nismo od shopinga i uglavnom idemo po zadatku, necije vjencanje i slicno. Niti jedan
                                    od tih odlazaka u shoping nije zavrsavao isti dan. Ponekad je trajao i cijeli
                                    tjedan. Zasto? Zato sto nikad nismo usle u vise od dva ducana, prosvrljale,
                                    pogledale se i otisle na pelinkovac. Draga Giove, u 2021. uz kraj korone, zelim nam
                                    jos puno veselih shopinga</p>
                                <h5>Marina Glavurtić</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja varjedan">
                                <div class="zelja1"></div>
                                <p>S obzirom na to da moja najbolja prijateljica gubi novčanike kad ide u shopping, a
                                    rođendan joj je 26.12. ovaj bih poklon najrađe podijelila s njom! Moja fashion
                                    ikona, moj oslonac, moja sestra, ne samo prijateljica. Zaslužila je ovaj poklon bon
                                    jer je najnesebičnija osoba koju poznajem, uvijek sve druge stavlja na prvo mjesto
                                    pa bi sad bio red da ga i ona zauzme. :) </p>
                                <h5>Anamarija Pacek</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja vardva">
                                <div class="zelja2"></div>
                                <p>Mama se za mjesec dana seli na Island jer je primorana radi nepovoljne financijske
                                    situacije otići zaraditi novac. Htjela bih joj pokloniti "krug" ogrlicu da uvijek
                                    kada ju pogleda i dotakne zna da sam blizu iako sam fizički daleko, te da ju
                                    svakodnevno na vratu podsjeća da nikada nije sama iako je daleko od svih, a sebi bih
                                    ostavila naušnice kao simbol nekakve "fizičke bliskosti" na daljinu i iščekivanje
                                    ponovnog susreta, za par godina, kada će se naš komplet nakita ponovno spojiti..
                                    Voljela bih joj pokloniti nešto lijepo i sentimentalno prije nego što ode, a mislim
                                    da bi ovo bio divan poklon za poželjeti joj sreću i izraziti zahvalnost.</p>
                                <h5>Marta Krajčević</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja varjedan">
                                <div class="zelja1"></div>
                                <p>Nikad neću zaboraviti kako si me tri sata čekala na pljusku u razdoblju naše rane
                                    mladosti kad još nije bilo mobitela. Umjesto bilo kakvog pitanja, samo si me
                                    zagrlila, prošaptala nadimak i pustila me da govorim. Otad je prošlo mnogo godina,
                                    ti sad živiš u drugoj vremenskoj zoni, na drugom kontinentu. Imala si skromno
                                    zaleđe, a toliko si toga sama postigla, ponosim se tvojim poslovnim uspjehom.
                                    I dalje smo često u kontaktu, a zahvaljujući društvenim mrežama i videopozivima više
                                    nema neuobičajenih kašnjenja. Održavamo ritual susreta uživo gotovo svake godine u
                                    novogodišnje vrijeme. Želim na najljepši mogući način zahvaliti onoj koja mi je
                                    uvijek bila potpora blizu i izdaleka.</p>
                                <h5>Aleksandra Pšeničnik</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja vardva">
                                <div class="zelja2"></div>
                                <p>Naš naljepši trenutak bio je tvoja unučica,<br>
                                    maleni palčić smotuljak.<br>
                                    Onako mirisna, bespomoćno mala,<br>
                                    u nježni,topli zagrljaj bake ,<br>
                                    tog je snježnog Prosinca stala.<br>
                                    Draga,majko zbog svega što s tobom budućnost nosi ja se veselim,<br>
                                    15.12 ti i tata prstenom ste stvorili bračnu sreću<br>
                                    i nakon trideset prve godine zajedno koračate kroz snijeg,bure i oluje,<br>
                                    ali iz vaših usta:Volim te, još se uvijek čuje.<br>
                                    Nek ti Blagdani budu provedeni uz obitelj u zdravlju i smijehu,<br>
                                    sarmu i raspjevanog Djeda Mraza na Sjevernom brijegu,<br>
                                    niz tvoj dimnjak doma nek se spusti...Ho,Ho,Ho<br>
                                    Sretan Božić želi ti Super1 uz ostavljen dar<br>
                                    on ,izusti.</p>
                                <h5>Tihana Vučić</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja">
                                <div class="zelja1"></div>
                                <p>Moja sestra je uvijek tu za mene, najbolja prijateljica, najveća kritičarka i moja
                                    make-up savjetnica. Iako je mlađa od mene i iako smo po pitanju šminke kao nebo i
                                    zemlja različite, najbolji savjet koji sam od nje dobila je taj da pazim na to da je
                                    manje- uvijek više, da ne pretjerujem u ničemu i da bez maskare ne izlazim iz kuće.
                                    Iako sada bez maske ne napuštamo kuću, malo maskare svaki pogled može učiniti
                                    zavodljivijim i dati ženi potrebno samopouzdanje i u ovim tmurnim danima kada nam je
                                    samo na pameti ova ružna situacija sa Covidom učiniti da se osjećam lijepom i da
                                    kada se pogledam u ogledalo vidim ženu koja drži do sebe, koja voli sebe i koja
                                    pršti samopouzdanjem.</p>
                                <h5>Ana Pušić Oklopčić</h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja vardva">
                                <div class="zelja2"></div>
                                <p>Moja cimerica i ja bez maskare ne idemo nikamo. Obje se slažemo da su trepavice baš
                                    ono što mijenja cijeli izgled lica, stoga nam je jako bitno izabrati dobru maskaru.
                                    Iz naše skromne sobice u domu izlaze neke od najvećih make-up tajni!
                                    Draga cimi,
                                    ovih blagdana želim ti mir u srcu, veselje u izobilju i još puno noći otkrivanja
                                    beauty trikova provedenih sa mnom. </p>
                                <h5>Danijela Šarić </h5>
                            </div>
                        </div>
                        <div class="slide-zelja">
                            <div class="zelja varjedan">
                                <div class="zelja1"></div>
                                <p>*D*raga D,<br>
                                    *O*tkad se znamo čuvaš mi leđa,<br>
                                    *U*vijek je uz nas maskara smeđa.<br>
                                    *G*odina ova bliži se kraju, od naših pogleda<br>
                                    uzdasi staju.<br>
                                    *L*ijepe želje tebi se daruju<br>
                                    *A*s osmijehom na licu sve se ostvaruju,<br>
                                    *S*retan Božić želim Ti! </p>
                                <h5>Marina Živković </h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="ukras-footer2">
            <img src="<?php echo $native_path ?>img/ukras-footer2.svg" alt="" class="img-fluid">
        </div>
        <div class="container">
            <div class="ukras-footer">
                <img src="<?php echo $native_path ?>img/ukras-footer.svg" alt="" class="img-fluid">
            </div>
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-3 col-8">
                    <img src="<?php echo $native_path ?>img/tg-studio.svg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-3 col-8">
                    <img src="<?php echo $native_path ?>img/super1-zeleni.svg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center zavrsni">
                    <p>Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u
                        suradnji s partnerima i po najvišim uredničkim standardima Telegram Media Grupe.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $native_path ?>js/main.js?v=6.6"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        document.getElementById('shareBtn').onclick = function () {
            FB.ui({
                display: 'popup',
                method: 'share',
                href: 'https://super1.telegram.hr/native/christmas1/',
            }, function (response) {});
        }
    </script>
    <script>
        jQuery('.slider').slick({
            slidesToShow: 2,
            prevArrow: jQuery(".prev"),
            nextArrow: jQuery(".next"),
            autoplay: false,
            adaptiveHeight: false,
            responsive: [

                {
                    breakpoint: 992,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        autoplay: true,
                        autoplaySpeed: 4000,
                        adaptiveHeight: true
                    }
                }
            ]

        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>