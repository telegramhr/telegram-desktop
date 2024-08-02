
<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/tzhvar';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Oooh+Baby&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css?v=09052024">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/owl.css">
</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="15" class="pozadina">
<?php do_action('telegram_body_start'); ?>
  <!-- ***** Preloader Start ***** -->


  <div class="main-banner" id="top">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="row">
            <div class="col-lg-8 offset-lg-2 align-self-center">
              <div class="left-content show-up header-text wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2><span>Feel Hvar</span> Naša ultimativna destinacija za jedinstveni ljetni doživljaj.</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<div class="blog" style="background: url('<?php echo $native_path ?>/assets/images/back.png') repeat;">
  <div class="container">
      <div class="row">
        <div class="col-lg-1"></div>
          <div class="col-lg-5 text-left marginagornja wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <h2>Feel <span>Hvar Nature</span></h2>
            <p>Kristalno čistom moru i mističnom otočnom maestralu pjevao je Petar Hektorović. Mjestu u kojemu sunce gotovo da i ne zalazi divio se legendarni Hanibal Lucić, posvetivši ovom bajkovitom otoku na stotine stihova. Dobrodošli u komadić raja u najljepšem dijelu Mediterana, gdje sreća miriše na beskrajna polja lavande, smilja, ružmarina i drugog začinskog bilja, poput lovora, origana i buhača. Dobrodošli na otok sreće, gdje se, među stoljetnim maslinicima, krije i do 1150 biljnih vrsta, od kojih je čak 44 endemskih. Dobrodošli na mjesto gdje gotovo svaka vala ima svoju priču. Dobrodošli na otok Hvar, ovo je njegova priča.   </p>
          </div>

          <div class="col-lg-5 text-left wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1s">
            <p><img src="<?php echo $native_path ?>/assets/images/slika1.png"/></p>
          </div>
          <div class="col-lg-1"></div>
        </div>

      <div class="row">
        <div class="col-lg-1 order-lg-4"></div>
          <div class="col-lg-5 text-left marginagornja order-lg-3 wow fadeInRightBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p>Ovo je otok sreće, gdje se, među stoljetnim maslinicima, krije i do 1150 biljnih vrsta, od kojih je čak 44 endemskih, gdje pogled bježi na ćukove i sove, a pod morem na jata riba, hobotnice i morske ježince.</p><br/><br/>
            <h2>Doživite<br/><span> potpuni odmor </span></h2>
          </div>

          <div class="col-lg-5 text-left order-lg-2 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p><img src="<?php echo $native_path ?>/assets/images/slika2.png"/></p>
          </div>
          <div class="col-lg-1 order-lg-1"></div>
        </div>

      <div class="row" style="margin-top:50px">
          <div class="col-lg-12 text-center"><img src="<?php echo $native_path ?>/assets/images/skoljka.png" style="width: 200px;" /></div>
      </div>
    </div>
</div>



<div class="blog" style="margin:0; padding: 0; background: url('<?php echo $native_path ?>/assets/images/back.png') repeat;">
  <div class="container-fluid p-0">

      <div class="row">
          <div class="col-lg-12">
             <img src="<?php echo $native_path ?>/assets/images/valovi.png" />
          </div>
        </div>


    </div>
</div>
<div class="blog" style="background: #fff; padding-top: 80px;">
  <div class="container">

      <div class="row">
        <div class="col-lg-1 order-lg-4"></div>
          <div class="col-lg-10 text-left marginagornja order-lg-3 wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <h2 style="color:#003879 !important">3 prekrasne <span>rute za bicikliste</span></h2>
          </div>
          <div class="col-lg-1 order-lg-1"></div>
        </div>


      <div class="row"  style="margin-top:50px">
          <div class="col-lg-4 text-leftwow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/710.jpg"  style="border-radius:15px; box-shadow: 0px 0px 25px -5px rgba(0,0,0,0.3);"/><br/>
            <p style="color:#000"><strong>Malo grablje 710</strong>,<br/>20 kilometara kroz Hvar, Milnu, Velo Grablje i Brusje</p>
            <p><a href="https://visithvar.hr/see-and-do/710-malo-grablje/" target="_blank" style="color:#000">Pogledaj rutu</a></p>
         </div>
          <div class="col-lg-4 text-leftwow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/709.webp"  style="border-radius:15px; box-shadow: 0px 0px 25px -5px rgba(0,0,0,0.3);"/><br/>
            <p style="color:#000"><strong>Dubova 709</strong>,<br/>20 kilometara kroz Milnu, Dubovicu, Moču i Malo Grablje</p>
            <p><a href="https://visithvar.hr/hr/see-and-do/709-dubova-2/" target="_blank" style="color:#000">Pogledaj rutu</a></p>
         </div>
          <div class="col-lg-4 text-leftwow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/707.jpg"  style="border-radius:15px; box-shadow: 0px 0px 25px -5px rgba(0,0,0,0.3);"/><br/>
            <p style="color:#000"><strong>Purkin Kuk 707</strong>,<br/>21 kilometar kroz Stari Grad, Vidikovac, Sv. Nikolu i Dol</p>
            <p><a href="https://visithvar.hr/see-and-do/707-purkin-kuk/" target="_blank" style="color:#000">Pogledaj rutu</a></p>
         </div>
      </div>

    </div>
</div>



<div class="blog" style="padding:0 !important; background: url('<?php echo $native_path ?>/assets/images/back.png') repeat;">
  <div class="container-fluid">
      <div class="row ">
        <div class="col-lg-12 p-0">

            <div class="overlajslike">
                <img src="<?php echo $native_path ?>/assets/images/aaa.jpg" class="slika1">
                <img src="<?php echo $native_path ?>/assets/images/bbb.jpg" class="slika2">
            </div>
        </div>
      </div>
    </div>
</div>




<div class="blog" style="background: url('<?php echo $native_path ?>/assets/images/back.png') repeat;">
  <div class="container">
      <div class="row" style="margin-top:10px">
          <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s"><img src="<?php echo $native_path ?>/assets/images/star.png" style="width: 200px;" /></div>
      </div>
      <div class="row" style="margin-bottom: 50px;">
        <div class="col-lg-1"></div>
          <div class="col-lg-10 text-left wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <h2>Feel <span>Hvar Landmarks</span></h2>
            <h3><span>Jednim posjetom doživite čak </span>6 UNESCO zaštićenih kulturnih baština</h3>
          </div>
          <div class="col-lg-1"></div>
        </div>

      <div class="row">
        <div class="col-lg-1 order-lg-4"></div>
          <div class="col-lg-5 text-left marginagornjadva order-lg-3 wow fadeInRightBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p>Već više od 2400 godina hvarsko <span style="font-weight: 800;">Starogradsko polje</span> gotovo je potpuno netaknuto. Okruženo nepreglednim maslinicima i vinogradima, ovo je područje <a href="https://whc.unesco.org/en/list/1240/" target="_blank">upisano na UNESO-ov Popis svjetske baštine</a> 2008. godine kao kulturni krajolik. Gomile, kako suhozide nazivaju Hvarani, temelj su ovog remek-djela, fenomena starogrčke parcelacije i ujedno najbolje sačuvane katastarske podjele.</p>
          </div>

          <div class="col-lg-5 text-left order-lg-2 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p><img src="<?php echo $native_path ?>/assets/images/slika4.png"/></p>
          </div>
          <div class="col-lg-1 order-lg-1"></div>
        </div>


      <div class="row">
        <div class="col-lg-1 order-lg-4"></div>
          <div class="col-lg-5 text-left marginagornjadva order-lg-2 wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p><span style="font-weight: 800;">Doživite čaroliju klapskog pjevanja</span>, glazbene tradicije koja se s ponosom prenosi s generacije na generaciju. Na otoku Hvaru, klapsko pjevanje nije samo glazba već i značajni dio kulturnog identiteta. Jedinstvena glazbena struktura te melodija i harmonija čine klape lako prepoznatljivima. </p>
          </div>

          <div class="col-lg-5 text-left order-lg-3 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p><img src="<?php echo $native_path ?>/assets/images/slika5.png"/></p>
          </div>
          <div class="col-lg-1 order-lg-1"></div>
        </div>



      <div class="row">
        <div class="col-lg-1 order-lg-4"></div>
          <div class="col-lg-5 text-left marginagornjadva order-lg-3 wow fadeInRightBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p>Brojna hvarska polja i vinograde odvajaju <span style="font-weight: 800;">hvarski suhozidi</span> - kamene strukture koje vješto vijugaju kroz krajolik. Doživite žive spomenike kulturnog nasljeđa otoka i podsjetnik na vrijednost tradicije, strpljenja i umijeća generacija koje su ih izgradile. <a href="https://visithvar.hr/hr/see-and-do/suhozidi/" target="_blank">Posjetite Suhozidni park kod Velog Grablja</a>. </p>
          </div>

          <div class="col-lg-5 text-left order-lg-2 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p><img src="<?php echo $native_path ?>/assets/images/slika6.png"/></p>
          </div>
          <div class="col-lg-1 order-lg-1"></div>
        </div>

      <div class="row" style="margin-top:10px">
          <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s"><img src="<?php echo $native_path ?>/assets/images/skoljka-2.png" style="width: 200px;" /></div>
      </div>


      <div class="row">
        <div class="col-lg-1 order-lg-4"></div>
          <div class="col-lg-5 text-left marginagornjadva order-lg-2 wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p><span style="font-weight: 800;">Procesija ‘Za križem’</span> jedinstveni je vjerski obred koji se održava neprekidno već pet stoljeća na Veliki četvrtak. Ova noćna procesija, koja povezuje šest hvarskih mjesta, simbolizira zajedništvo lokalne zajednice koja skupno moli i izvodi arhaične napjeve na putu dugom više od 20 kilometara. </p>
          </div>

          <div class="col-lg-5 text-left order-lg-3 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p><img src="<?php echo $native_path ?>/assets/images/slika7.png"/></p>
          </div>
          <div class="col-lg-1 order-lg-1"></div>
        </div>


      <div class="row">
        <div class="col-lg-1 order-lg-4"></div>
          <div class="col-lg-5 text-left marginagornjadva order-lg-3 wow fadeInRightBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p><span style="font-weight: 800;">Mediteranska prehrana</span>, poznata po svojoj nutritivnoj vrijednosti i zdravstvenim prednostima, temelji se na svježoj ribi, morskim plodovima, maslinovom ulju, voću i povrću. Upravo su to namirnice kojima obiluje otok Hvar. Više od same prehrane, predstavlja i način života, okupljajući ljude za istim stolom čime pridonosi očuvanju kulturnog identiteta mediteranskih zajednica. </p>
          </div>

          <div class="col-lg-5 text-left order-lg-2 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p><img src="<?php echo $native_path ?>/assets/images/slika8.png"/></p>
          </div>
          <div class="col-lg-1 order-lg-1"></div>
        </div>

      <div class="row">
        <div class="col-lg-1 order-lg-4"></div>
          <div class="col-lg-5 text-left marginagornjadva order-lg-2 wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p><span style="font-weight: 800;">Vješto isprepletene niti agave</span> čine unikatno umjetničko djelo koje predstavlja stoljetnu tradiciju otoka Hvara. Ovaj delikatan rad izrađuju benediktinske časne sestre strpjivo utkajući u rad hvarsku tradiciju. </p>
          </div>

          <div class="col-lg-5 text-left order-lg-3 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p><img src="<?php echo $native_path ?>/assets/images/slika9.png"/></p>
          </div>
          <div class="col-lg-1 order-lg-1"></div>
        </div>
    </div>
</div>
<div class="blog" style="margin:0; padding: 0; background: url('<?php echo $native_path ?>/assets/images/back.png') repeat;">
  <div class="container-fluid p-0">

      <div class="row">
          <div class="col-lg-12">
             <img src="<?php echo $native_path ?>/assets/images/valovi.png" />
          </div>
        </div>


    </div>
</div>
<div class="blog" style="background: #fff; padding-top: 80px;">
  <div class="container">

      <div class="row" style="margin-top:50px;">
        <div class="col-lg-1 order-lg-4"></div>
          <div class="col-lg-10 text-left order-lg-2 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p style="color:#000">Dobrodošli na Hvar. Otok koji ponosno nosi titulu jednog od najvažnijih kulturnih središta na Jadranu. U srcu grada Hvara možete doživjeti najstarije javno kazalište u Europi, osnovano 1612. godina. Iznad grada dominira tvrđava Fortica, s koje se pruža spektakularan pogled na grad i otoke. U blizini, uz obalu, nalazi se Arsenal koji svjedoči o pomorskoj snazi Hvara kroz stoljeće. Tu je i renesansna Lođa, nekadašnje sjedište gradske uprave, koja danas stoji kao još jedno svjedočanstvo bogate povijesti Hvara. </p><br/><br/>
            <h2 style="color:#003879 !important">Doživite kulturno središte <span>u srcu Jadrana</span></h2>
          </div>
          <div class="col-lg-1 order-lg-1"></div>
        </div>


    </div>
</div>



<div class="blog" style="padding:0 !important; background: url('<?php echo $native_path ?>/assets/images/back.png') repeat;">
  <div class="container-fluid">
      <div class="row ">
        <div class="col-lg-12 p-0">

            <div class="overlajslike">
                <img src="<?php echo $native_path ?>/assets/images/eee.jpg" class="slika1">
                <img src="<?php echo $native_path ?>/assets/images/fff.jpg" class="slika2">
            </div>
        </div>
      </div>
    </div>
</div>


<div class="blog" style="background: url('<?php echo $native_path ?>/assets/images/back.png') repeat;">
  <div class="container">
      <div class="row" style="margin-top:100px">
        <div class="col-lg-1"></div>
          <div class="col-lg-5 text-left marginagornja wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <h2>Feel <span>Hvar Gastro</span></h2>
            <p>Duga otočka tradicija, ali i vrijedne ruke Hvarana, zaslužne su za činjenicu da su specijaliteti otoka 2013. godine uvršteni na UNESCO-ov popis nematerijalne baštine. Gregada, panada, pašticada, kao i specijaliteti ispod peke zadovoljit će okusne pupoljke i najzahtjevnijih gurmana. Vrhunske otočke specijalitete valja spariti <a href="https://visithvar.hr/hr/eat-and-drink/enologija/" target="_blank">s autohtonim vinima</a>. Ne smijete propustiti autohtonu vinsku sortu koja se uzgaja isključivo na otoku Hvaru – Bogdanušu kojoj i samo ime kaže – Bogom je dana.</p><br/><br/>
          </div>

          <div class="col-lg-5 text-left wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1s">
            <p><img src="<?php echo $native_path ?>/assets/images/slika10.png"/></p>
          </div>
          <div class="col-lg-1"></div>
        </div>

      <div class="row">
        <div class="col-lg-1 order-lg-4"></div>
          <div class="col-lg-5 text-left marginagornja order-lg-3 wow fadeInRightBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p>Iz osunčanih hvarskih maslinika proizlazi izvanredno i višestruko nagrađivano maslinovo ulje, prepoznatljivo po svojoj aromi i brojnim blagodatima za zdravlje. U kombinaciji s ranije spomenutim lokalnim delicijama, svježe ulovljenom ribom, plodovima mora te domaćim povrćem, gastro ponuda otoka Hvara pruža autentično iskustvo okusa Mediterana. Bogatu ponudu otočkih restorana, kao i kušaonica maslinova ulja, potražite <a href="https://visithvar.hr/hr/eat-and-drink/restorani/" target="_blank">ovdje</a>.</p><br/><br/>
            <h2>Doživite <br/><span>okuse Mediterana</span></h2>
          </div>

          <div class="col-lg-5 text-left order-lg-2 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p><img src="<?php echo $native_path ?>/assets/images/slika11.png"/></p>
          </div>
          <div class="col-lg-1 order-lg-1"></div>
        </div>

      <div class="row" style="margin-top:120px">

          <div class="col-lg-6 text-left" style="padding:0;">
            <img src="<?php echo $native_path ?>/assets/images/gregada.jpg" style="border-bottom-left-radius: 30px; border-top-left-radius: 30px;" />
          </div>
          <div class="col-lg-6 text-left" style="background: #fff; padding:30px; border-bottom-right-radius: 30px; border-top-right-radius: 30px;">
            <h3 style="color:#003879 !important">Hvarska gregada <span>ili forska gregoda</span></h3>
            <p style="color:#000">Hvarska gregada je tradicionalno ribarsko jelo s otoka Hvara, koje se priprema od različitih vrsta ribe, krumpira, luka i maslinovog ulja. Ova jednostavna, ali ukusna dalmatinska delicija često se začinjava vinom, peršinom i češnjakom, stvarajući bogat okus mora. Gregada se kuha polako, u jednom loncu, što omogućava svim sastojcima da se prožmu i stvore harmoniju okusa.</p>
            <p style="color:#000"><strong>Glavni sastojci</strong>: 1kg ribe po izboru, 1kg luka, 1kg krumpira, 1 manja glavica češnjaka, šaka peršinovog lista, čaša maslinovog ulja, 1L vode ili temeljca, sol, papar i drugi začini po želji</p>
            <p style="color:#000"><strong>Priprema</strong>: U veći lonac stavite maslinovog ulja kako bi pokrilo dno, zatim posložite grubo nasjeckani luk. Posolite i popaprite te na luk složite ribu izrezanu na veće komade. Uz ribu dodajte češnjaka i peršina i sve prekrijte krumpirom. Ukoliko koristite uži lonac, isto napravite u dva reda. Sve prelijte ribljim temeljcem i stavite kuhati na veći plamenik do nekih 30ak minuta, svakako dok krumpir nije skuhan i omekšao.</p>
          </div>
        </div>

      <div class="row" style="margin-top:120px">
          <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s"><img src="<?php echo $native_path ?>/assets/images/skoljka-3.png" style="width: 300px;" /></div>
      </div>


      <div class="row" style="margin-top:50px;">
        <div class="col-lg-1 order-lg-4"></div>
          <div class="col-lg-5 text-left marginagornjadva order-lg-3 wow fadeInRightBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <h2><span><br/> Fun Fact #1</span></h2>
            <p>Vjerojatnost da će vas prilikom odmora na Hvaru dočekati loše vrijeme itekako je mala jer ovaj otok godišnje mjeri i do 2800 sunčanih sati, što ga čini najsunčanijim otokom u ovom dijelu Mediterana. </p>
          </div>

          <div class="col-lg-5 text-left order-lg-2 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p><img src="<?php echo $native_path ?>/assets/images/bogdanusa.png"/></p>
          </div>
          <div class="col-lg-1 order-lg-1"></div>
        </div>


      <div class="row" style="margin-top:50px;">
        <div class="col-lg-1 order-lg-4"></div>
          <div class="col-lg-5 text-left marginagornja order-lg-2 wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <h2><span><br/> Fun Fact #2</span></h2>
            <p>Naš rajski otok njeguje tradiciju organiziranog turizma već 156 godina, što Hvar čini kolijevkom hrvatskog turizma. Naime, Higijeničko društvo, prvo turističko udruženje u Hrvatskoj i Europi intenzivno  je poticalo turizam i u Hvaru te ga pozicioniralo kao najvažniju gospodarsku granu. Hvar je danas na svjetsku turističku mapu upisan kao jedna od najzanimljivijih destinacija, koja kroz godinu različitim sadržajima privlači turiste iz cijeloga svijeta.</p>
          </div>

          <div class="col-lg-5 text-left order-lg-3 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p><img src="<?php echo $native_path ?>/assets/images/turisti.png"/></p>
          </div>
          <div class="col-lg-1 order-lg-1"></div>
        </div>


      <div class="row" style="margin-top:50px;">
        <div class="col-lg-1 order-lg-4"></div>
          <div class="col-lg-5 text-left marginagornja order-lg-3 wow fadeInRightBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <h2><span><br/> Fun Fact #3</span></h2>
            <p>Hvarska meteorološka postaja uvrštena je u svjetsku kulturnu i znanstvenu baštinu. Na ovom je području djelovao znameniti Hvaranin, prirodoslovac i meteorolog, Grgur Bučić, utemeljitelj meteorološke službe u Hvaru, kao i spomenutog Higijeničkog društva u Hvaru, prvog takvog udruženja u Europi. </p>
          </div>

          <div class="col-lg-5 text-left order-lg-2 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p><img src="<?php echo $native_path ?>/assets/images/bucic.png"/></p>
          </div>
          <div class="col-lg-1 order-lg-1"></div>
        </div>

      </div>

</div>


<div class="blog" style="padding:0 !important; background: url('<?php echo $native_path ?>/assets/images/back.png') repeat;">
  <div class="container-fluid">
      <div class="row ">
        <div class="col-lg-12 p-0">

            <div class="overlajslike">
                <img src="<?php echo $native_path ?>/assets/images/ggg.jpg" class="slika1">
                <img src="<?php echo $native_path ?>/assets/images/hhh.jpg" class="slika2">
            </div>
        </div>
      </div>
    </div>
</div>


<div class="blog" style="background: url('<?php echo $native_path ?>/assets/images/back.png') repeat;">
  <div class="container">
            <div class="row"  style="margin-top:50px;">
        <div class="col-lg-1 order-lg-4"></div>
          <div class="col-lg-10 text-left marginagornja order-lg-3 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <h2>Doživite <br/><span>Hvar Heritage</span></h2>
            <p>Ako još uvijek niste dovoljno doživjeli otok kroz njegove okuse i mirise, povijest Hvara možete upoznati i kroz nekolicinu muzeja. Kulturno putovanje po otoku možete započeti u Galeriji Arsenal, koja se nalazi tik uz more, pa nastaviti do Muzeja hvarske baštine, smještenog u ljetnikovcu Hanibala Lucića, najpoznatijeg hvarskog pjesnika. </p><br/><br/>
          </div>
          <div class="col-lg-1 order-lg-1"></div>
        </div>

      <div class="row">
        <div class="col-lg-1 order-lg-4"></div>
          <div class="col-lg-5 order-lg-3 text-left marginagornjadva wow fadeInRightBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p>Pomalo nespojivo, ali čaroban, miran i prepun mirisa i okusa Hvar ključan je dio i moderne kriminalistike. Upravo se na otoku rodio Ivan Vučetić koji je razvio metodu daktiloskopije  identifikaciju pojedinaca koja se temelji na otiscima prstiju. Na Hvaru možete posjetiti njegovu kuću koja je danas genijalan Novi muzej misterije, odnosno interpretacijski centar posvećen jednom od najvažnijih pionira forenzičke znanosti.</p>
          </div>

          <div class="col-lg-5 order-lg-2 text-left wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1s">
            <p><img src="<?php echo $native_path ?>/assets/images/slika13.png"/></p>
          </div>
          <div class="col-lg-1 order-lg-1"></div>
        </div>

      <div class="row">
        <div class="col-lg-1 order-lg-4"></div>
          <div class="col-lg-5 text-left marginagornjadva order-lg-2 wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p>Tvrđava Fortica obnovljena je 1579. godine. Ondje se danas nalazi zbirka amfora te drugih eksponata iz vremena Antike i Srednjeg vijeka. Osim što će vas oduševiti svojom arhitekturom, doživjet ćete nezaboravan panoramski pogled na grad Hvar, njegovu okolicu i Paklene otoke. Ljubitelji muzeja uživat će i u Franjevačkom samostanu s bogatim zbirkama mletačkog, grčkog i rimskog novca, kao i rijetkim primjerima amfora te slikama venecijanskih slikara. </p>
          </div>

          <div class="col-lg-5 text-left order-lg-3 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p><img src="<?php echo $native_path ?>/assets/images/slika14.png"/></p>
          </div>
          <div class="col-lg-1 order-lg-1"></div>
        </div>

      <div class="row" style="margin-top:50px">
        <div class="col-lg-1 order-lg-4"></div>
          <div class="col-lg-10 text-left  order-lg-2 wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <h2>Doživite <span>kulturu otoka Hvara</span></h2><br/><br/>
          </div>

          <div class="col-lg-1 order-lg-1"></div>
        </div>

      <div class="row">
          <div class="col-lg-4 text-leftwow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/kult1.png" style="border-radius:15px;" /><br/>
            <p>Galerija moderne umjetnosti / Arsenal</p>
         </div>
          <div class="col-lg-4 text-leftwow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/kult2.png" style="border-radius:15px;" /><br/>
            <p>Muzej hvarske baštine / Ljetnikovac Hanibala Lucića</p>
         </div>
          <div class="col-lg-4 text-leftwow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/kult3.png" style="border-radius:15px;" /><br/>
            <p>Franjevački samostan </p>
         </div>
      </div>



      <div class="row">
        <div class="col-lg-1 order-lg-4"></div>
          <div class="col-lg-10 text-left marginagornja order-lg-3 wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <h2>Feel <br/><span>Hvar Sun</span></h2>
          </div>
          <div class="col-lg-1 order-lg-1"></div>
        </div>


      <div class="row" style="margin-top: 50px;">
        <div class="col-lg-1 order-lg-4"></div>
          <div class="col-lg-5 text-left order-lg-2 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p>
                Borov otok, otok lavande ili najsunčaniji otok u Hrvatskoj - sve su to imena koja povezujemo s ovim otokom. Ne čudi, stoga, što je upravo Hvar proglašen 3. najboljim otokom u Europi i 7. na svijetu prema čitateljima Travel + Leisure magazina. Iznimno velik broj sunčanih sati čine ga idealnim za posjet cijele godine dok je idealno vrijeme za uživanje u Jadranskom moru između svibnja i listopada. Preporučujemo da ljepotu Jadrana doživite na mjestima poput Zaraća, Dubovice ili Paklenih otoka.
            </p>
          </div>

          <div class="col-lg-5 text-left order-lg-3 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p>Sunce, ali i zvijezde, doživjeti možete u Opservatoriju Hvar smještenom u blizini najviše točke otoka - Sv. Nikola. Posjetiteljima je dostupno nekoliko teleskopa, uključujući reflektore te solarni teleskop za promatranje sunca. </p><br/><br/>
            <h3>Doživite više od<br/><span>2.800 sunčanih sati godišnje</span></h3>
          </div>
          <div class="col-lg-1 order-lg-1"></div>
        </div>

      <div class="row" style="margin-top:50px">
        <div class="col-lg-1 order-lg-4"></div>
          <div class="col-lg-5 text-left order-lg-3 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/LApaLCjB_JY?autoplay=1&loop=1&controls=0&mute=1&playlist=LApaLCjB_JY" frameborder="0" allow="autoplay; loop; fullscreen" allowfullscreen></iframe>
                    <div style="position: absolute; width: 100%; height: 100%;"></div>
                </div>

            </p>
          </div>

          <div class="col-lg-5 text-left order-lg-2 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <p><img src="<?php echo $native_path ?>/assets/images/slika17.png"/></p>
          </div>
          <div class="col-lg-1 order-lg-1"></div>
        </div>


    </div>
</div>


<div class="blog" style="padding:0 !important; background: url('<?php echo $native_path ?>/assets/images/back.png') repeat;">
  <div class="container-fluid">
      <div class="row ">
        <div class="col-lg-12 p-0">

            <div class="overlajslike">
                <img src="<?php echo $native_path ?>/assets/images/iii.jpg" class="slika1">
                <img src="<?php echo $native_path ?>/assets/images/jjj.jpg" class="slika2">
            </div>
        </div>
      </div>
    </div>
</div>


<div class="blog" style="background: url('<?php echo $native_path ?>/assets/images/back.png') repeat;">
  <div class="container">


      <div class="row" style="margin-top:0px">
          <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s"><img src="<?php echo $native_path ?>/assets/images/skoljka4.png" style="width: 200px;" /></div>
      </div>

      <div class="row" style="margin-top:20px">
        <div class="col-lg-1 order-lg-4"></div>
          <div class="col-lg-10 text-left marginagornja order-lg-3 wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <h2>5 plaža <span>koje morate posjetiti</span></h2>
          </div>
          <div class="col-lg-1 order-lg-1"></div>
        </div>


      <div class="row"  style="margin-top:50px">
          <div class="col-lg-4 text-leftwow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/dubovica.webp"  style="border-radius:15px;"/><br/>
            <p>Dubovica</p>
         </div>
          <div class="col-lg-4 text-leftwow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/lucisce.webp"  style="border-radius:15px;"/><br/>
            <p>Lučišće</p>
         </div>
          <div class="col-lg-4 text-leftwow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/jagodna.webp"  style="border-radius:15px;"/><br/>
            <p>Jagodna</p>
         </div>
      </div>

      <div class="row"  style="margin-top:50px">
          <div class="col-lg-6 text-leftwow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/mekiceva.webp"  style="border-radius:15px;"/><br/>
            <p>Mekićeva</p>
         </div>
          <div class="col-lg-6 text-leftwow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/borce.webp"  style="border-radius:15px;"/><br/>
            <p>Borče</p>
         </div>
      </div>

    </div>
</div>




  <div id="clanci" class="blog" style="z-index: 100; position: relative; padding-top: 100px; padding-bottom: 120px; overflow: hidden; background: url('<?php echo $native_path ?>/assets/images/back.png') repeat;">


    <div class="container-fluid wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">

      <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
              <p style="color:#fff">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p><br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/telegram.png" style="max-width: 186px;"  />
          </div>
        </div>
      </div>
  </div>

  <script type="text/javascript">
          window.addEventListener('scroll', function() {
              var slika2 = document.querySelector('.slika2');
              var rect = slika2.getBoundingClientRect();

              if (rect.top <= 0) {
                  slika2.style.zIndex = 3;
              } else {
                  slika2.style.zIndex = 2;
              }
          });

  </script>
  <script src="<?php echo $native_path ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $native_path ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/owl-carousel.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/animation.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/imagesloaded.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/custom.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/script.js"></script>

    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>
