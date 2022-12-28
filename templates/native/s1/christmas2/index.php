<!DOCTYPE html>
<html lang="en">
<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/christmas2/';
//$native_path = 'http://localhost/super1-theme/templates/native/christmas2/';
?>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
  <!-- Bootstrap core CSS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="<?php echo $native_path ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $native_path ?>css/style.css?ver=1.03">
  <link rel="stylesheet" href="https://use.typekit.net/daa3ndb.css">
  <script src="<?php echo $native_path ?>slick/slick.js"></script>
  <link rel="stylesheet" href="<?php echo $native_path ?>slick/slick.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $native_path ?>slick/slick-theme.css" type="text/css" />
</head>

<body>
<?php
  do_action('body_start');
?>
  <div class="snowflakes" aria-hidden="true">
    <div class="snowflake">
      <img src="<?php echo $native_path ?>img/pahulja.svg" alt="" class="img-fluid">
    </div>
    <div class="snowflake">
      <img src="<?php echo $native_path ?>img/pahulja.svg" alt="" class="img-fluid">
    </div>
    <div class="snowflake">
      <img src="<?php echo $native_path ?>img/pahulja.svg" alt="" class="img-fluid">
    </div>
    <div class="snowflake">
      <img src="<?php echo $native_path ?>img/pahulja.svg" alt="" class="img-fluid">
    </div>
    <div class="snowflake">
      <img src="<?php echo $native_path ?>img/pahulja.svg" alt="" class="img-fluid">
    </div>
    <div class="snowflake">
      <img src="<?php echo $native_path ?>img/pahulja.svg" alt="" class="img-fluid">
    </div>
    <div class="snowflake">
      <img src="<?php echo $native_path ?>img/pahulja.svg" alt="" class="img-fluid">
    </div>
    <div class="snowflake">
      <img src="<?php echo $native_path ?>img/pahulja.svg" alt="" class="img-fluid">
    </div>
    <div class="snowflake">
      <img src="<?php echo $native_path ?>img/pahulja.svg" alt="" class="img-fluid">
    </div>
    <div class="snowflake">
      <img src="<?php echo $native_path ?>img/pahulja.svg" alt="" class="img-fluid">
    </div>
  </div>

  <section class="container-fluid" id="pocetna">

    <div class="ukras prvi" data-depth="0.2">
      <img src="<?php echo $native_path ?>img/ukras1.svg" alt="" class="img-fluid">
    </div>
    <div class="ukras drugi">
      <img src="<?php echo $native_path ?>img/ukras2.svg" alt="" class="img-fluid">
    </div>
    <div class="ukras treci">
      <img src="<?php echo $native_path ?>img/ukras3.svg" alt="" class="img-fluid">
    </div>

    <div class="ukras cetvrti">
      <img src="<?php echo $native_path ?>img/ukras4.svg" alt="" class="img-fluid">
    </div>

    <div class="ukras peti">
      <img src="<?php echo $native_path ?>img/ukras5.svg" alt="" class="img-fluid">
    </div>

    <div class="ukras sesti">
      <img src="<?php echo $native_path ?>img/ukras6.svg" alt="" class="img-fluid">
    </div>

    <div class="ukras sedmi">
      <img src="<?php echo $native_path ?>img/ukras7.svg" alt="" class="img-fluid">
    </div>

    <div class="container">
      <div class="row justify-content-center uvod text-center">
        <div class="col-lg-7">
          <h1>Super1 Adventski Giveaway</h1>
          <p>Kako bismo oživjeli onaj osjećaj sreće svakog adventskog jutra kada smo otvarali novi prozorčić adventskog kalendara, ove smo vam godine pripremili Super1 Adventski Giveaway koji vam od 01. do 24. prosinca donosi mnoštvo genijalnih poklona u suradnji s našim vrijednim partnerima.</p>
          <p>Kako biste sudjelovali u darivanju, trebate nas, kao i naše partnere, zapratiti na Instagramu te lajkati objavu s aktivnim natječajem za koji se prijavljujete. I to je to. Svaki dan čekat će vas novi vrijedni pokloni, nekad jedan, a nekad i više njih, a što se sve krije iza prozorčića vam ne smijemo otkriti – na vama je da probudite dijete u sebi te okušate svoju sreću u ovim prekrasnim blagdanskim danima.</p>
          <p>Pravila nagradnog natječaja možete pronaći <a href="https://super1.telegram.hr/promo/pravila-nagradnog-natjecaja-adventski-giveaway-2022/" target="_blank">ovdje.</a></p>
          <div class="donosi">
            <p>donosi:</p>
            <img src="<?php echo $native_path ?>img/s1_logo_white.svg" alt="" class="img-fluid" style="max-width: 320px;">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container-fluid" style="padding-bottom: 5vh;">
    <div class="container embiggen-container">
      <div class="row justify-content-center">
        <div class="gallery">
          <div class="flex relative column-pad animate">
              <div class="full flex gallery-link">
                <div class="full flex noisy-boi">
                  <div class="full element-of-surprise">
                  </div>
                  <div class="full flex slide-padding">
                    <h3 class="full">Krenimo...</h3>
                    <p class="full">Svaki dan čeka vas nova nagrada</p>
                    <div class="clickable button" onclick="$('.gallery').slick('slickNext');">Idemo!</div>
                  </div>
                </div>
            </div>
          </div>
          <?php
            $prizes = array();
            $prize_01 = array(
              "name" => "Orašar za novu godinu",
              "description" => "Oni donose sreću obiteljima i štite njihov dom od zlih sila. Orašar EUKLAS iz JYSKove kolekcije savršeno će se uklopiti uz svako božićno drvce.",
              "date_show" => "2022-12-01 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_1.jpg",
              "winner" => "Dobitnici: @persic.ka, @dora.ostrek, @gabrijelaw, @valka220, @ber_sibic",
              "logo" => "logo_1.png"
            );
            array_push($prizes, $prize_01);
            $prize_02 = array(
              "name" => "Mlijeko za tijelo",
              "description" => "Biotherm Lait Corporel L'Original ojačat će zaštitni sloj vaše kože i štiti njezinu prirodnu elastičnost. Nježna tekstura, ugodan miris, bez masnih tragova za baršunastu kožu.",
              "date_show" => "2022-12-02 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_2.jpg",
              "winner" => "Dobitnici: @petrablack007, andrijana.tudor, zizisoltado, jadricmirjana, cirkva",
              "logo" => "logo_2.png"
            );
            array_push($prizes, $prize_02);
            $prize_03 = array(
              "name" => "Njega za kosu",
              "description" => "Ona je dio imidža i odraz stila, a najveći su joj neprijatelj hladnoća, suhi zrak i kriva njega. Proizvodi ovog švicarskog brenda Revalid® vratit će joj prirodni sjaj.",
              "date_show" => "2022-12-03 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_3.jpg",
              "winner" => "Dobitnici: @tea9998",
              "logo" => "logo_3.png"
            );
            array_push($prizes, $prize_03);
            $prize_04 = array(
              "name" => "Wasabi delikates majoneza",
              "description" => "Neobična, a tako dobra kombinacija kremaste strukture omiljene majoneze i ljutine popularne japanske delicije za uzbudljivu notu svakog sljedećeg jela.",
              "date_show" => "2022-12-04 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_4.jpg",
              "winner" => "Dobitnici: @bandickaa_26, @aracicgabrijela, @danijela.hnk, @aciluap, @elvira.puskaric",
              "logo" => "logo_4.png"
            );
            array_push($prizes, $prize_04);
            $prize_05 = array(
              "name" => "OPPO Find X5 Pro 5G",
              "description" => "Omiljene blagdanske trenutke pretvorite u uspomene. Uz 50MP kameru fotkat ćete kao profesionalac, a sve kadrove pregledati na bioničkom zaslonu s jednom milijardom boja.",
              "date_show" => "2022-12-05 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_5.jpg",
              "winner" => "Dobitnici: @sedic_s",
              "logo" => "logo_5.png"
            );
            array_push($prizes, $prize_05);
            $prize_06 = array(
              "name" => "Ergobaby Metro+ dječja kolica",
              "description" => "Kompaktna dječja kolica za udobnost od rođenja, s opcijom gnijezda, autosjedalice ili kao putna kolica. S brojnim dodatnim značajkama kao stvorena su za nove avanture.",
              "date_show" => "2022-12-06 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_6.jpg",
              "winner" => "Dobitnici: @buk_marina",
              "logo" => "logo_6.png"
            );
            array_push($prizes, $prize_06);
            $prize_07 = array(
              "name" => "TV i more sadržaja",
              "description" => "Samsung UHD TV uređaj s dijagonalom od 163 cm i TV Stick ispunjeni raznovrsnim programima unutar 3 mjeseca besplatne usluge Iskon.Play TV-a.",
              "date_show" => "2022-12-07 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_7.jpg",
              "winner" => "Dobitnici: @simunovic_terezija",
              "logo" => "logo_7.png"
            );
            array_push($prizes, $prize_07);
            $prize_08 = array(
              "name" => "Medaljon Lace of Pag",
              "description" => "Inspiriran tradicionalnom paškom čipkom, on predstavlja nakit koji se nosi i osjeća. Ovaj spoj tradicije i modernog dizajna personalizirajte omiljenim parfemom i ugraviranom posvetom.",
              "date_show" => "2022-12-08 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_8.jpg",
              "winner" => "Dobitnici: @gabs_cro , @prpicmartina",
              "logo" => "logo_8.png"
            );
            array_push($prizes, $prize_08);
            $prize_09 = array(
              "name" => "Bajadera Panettone",
              "description" => "Nastala u suradnji Kraša i Kroštule, ova slastica sjedinjuje neodoljivi okus tradicionalnog blagdanskog kolača i ukusnog namaza od nougata i najfinijeg kakaa.",
              "date_show" => "2022-12-09 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_9.jpg",
              "winner" => "Dobitnici: @senka1511",
              "logo" => "logo_9.png"
            );
            array_push($prizes, $prize_09);
            $prize_10 = array(
              "name" => "TaO krema i retinol 0,3%",
              "description" => "Hrvatski brend dermokozmetike Aprive svakodnevnoj će rutini dugotrajno poboljšati stanje i strukturu kože, spriječiti pojavu bora te joj pružiti kvalitetnu hidrataciju.",
              "date_show" => "2022-12-10 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_10.jpg",
              "winner" => "Dobitnici: @veronika_cikovic i @grcic_anamarija",
              "logo" => "logo_10.png"
            );
            array_push($prizes, $prize_10);
            $prize_11 = array(
              "name" => "LELO DOT™ vibrator",
              "description" => "Klitoralni vibrator koji omogućava višestruke orgazme. Doživite novu razinu užitka sa savršenim partnerom za uzbudljivu solo igru ili igru u paru.",
              "date_show" => "2022-12-11 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_11.jpg",
              "winner" => "Dobitnici: @katarina_bajer",
              "logo" => "logo_11.png"
            );
            array_push($prizes, $prize_11);
            $prize_12 = array(
              "name" => "Skinlick kozmetički proizvodi",
              "description" => "Novi, sestrinski brend Skintegre dolazi u obliku jednostavnijih formulacija, za sve koji traže pouzdanu, pristupačnu njegu koja ima pomalo razigran karakter.",
              "date_show" => "2022-12-12 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_12.jpg",
              "winner" => "Dobitnici: @kejkej i @dinasabljak",
              "logo" => "logo_12.png"
            );
            array_push($prizes, $prize_12);
            $prize_13 = array(
              "name" => "Paket Dukat proizvoda",
              "description" => "Za lagano jutro, pauzu od posla ili za savršene kolače, Dukatovi mliječni proizvodi odlično se uklapaju, a u ovom se paketu nalazi 10 najpopularnijih.",
              "date_show" => "2022-12-13 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_13.jpg",
              "winner" => "Dobitnici: @jantoljakpetra, @urbanovicanita , @andreabukvic, @rozicmatea, @marta_2810",
              "logo" => "logo_13.png"
            );
            array_push($prizes, $prize_13);
            $prize_14 = array(
              "name" => "Zalando poklon bon",
              "description" => "Na Zalandu na jednostavan način otkrijte modu online, pretražite ponudu brojnih brendova te kreirajte savršene outfite. Pritom ne zaboravite ovaj poklon bon u vrijednosti od 750 kuna.",
              "date_show" => "2022-12-14 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_14.jpg",
              "winner" => "Dobitnici: @iriskarak",
              "logo" => "logo_14.png"
            );
            array_push($prizes, $prize_14);
            $prize_15 = array(
              "name" => "Lisca spavaćica",
              "description" => "Ova spavaćica nordijskog uzorka idealna je za ugodne snove tijekom blagdana. Osim toga, super se kombinira s mekanim papučama.",
              "date_show" => "2022-12-15 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_15.jpg",
              "winner" => "Dobitnici: @emiramatun",
              "logo" => "logo_15.png"
            );
            array_push($prizes, $prize_15);
            $prize_16 = array(
              "name" => "Majice s božićnim motivom",
              "description" => "Ove božićne majice djelo su kreativnih stručnjaka iz Zone Tri, a savršeno će se uklopiti u svaku blagdansku modnu kombinaciju.",
              "date_show" => "2022-12-16 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_16.jpg",
              "winner" => "Dobitnici: @angie_zgb , @jelenakrsnik , @agica_603",
              "logo" => "logo_16.png"
            );
            array_push($prizes, $prize_16);
            $prize_17 = array(
              "name" => "Avene Tolérance HYDRA-10",
              "description" => "‘Manje je više’ posebno vrijedi za osjetljivu i dehidriranu kožu, a ova krema sastoji se od 10 sastojaka koji su dovoljni za potpunu njegu kože lica i 48-satnu hidrataciju.",
              "date_show" => "2022-12-17 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_17.jpg",
              "winner" => "Dobitnici: @branka_barisic, @saskalex_ , @valerijamandir, @martina_vk, @spenceeh",
              "logo" => "logo_17.png"
            );
            array_push($prizes, $prize_17);
            $prize_18 = array(
              "name" => "Ziggy Cup™ 2 čašica",
              "description" => "Ojačan i fleksibilan materijal, tanak poput latice, za svaki oblik tijela i bezbrižnost onih dana u  mjesecu. U cijelosti izrađena od medicinskog silikona i potpuno sigurna za tijelo.",
              "date_show" => "2022-12-18 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_18.jpg",
              "winner" => "Dobitnici: @marija_super_baka , @andeladodig i @teacrnoja",
              "logo" => "logo_18.png"
            );
            array_push($prizes, $prize_18);
            $prize_19 = array(
              "name" => "Paket čokolada u prvom planu",
              "description" => "JIMMY FANTASTIC pravi je izbor za svakog istinskog čokoljupca. Velike kocke u svakom pakiranju garantiraju punoću okusa i pravi užitak baš svaki put.",
              "date_show" => "2022-12-19 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_19.jpg",
              "winner" => "Dobitnici: @ivanagujinovic",
              "logo" => "logo_19.png"
            );
            array_push($prizes, $prize_19);
            $prize_20 = array(
              "name" => "Prima poklon bon",
              "description" => "Sve što vam je potrebno da kuću ili stan pretvorite u topli dom pronaći ćete u Prima salonima, samo ne zaboravite ovaj poklon bon u iznosu od 1000 kuna. ",
              "date_show" => "2022-12-20 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_20.jpg",
              "winner" => "Dobitnici: @vedranamajcica",
              "logo" => "logo_20.png"
            );
            array_push($prizes, $prize_20);
            $prize_21 = array(
              "name" => "Srebrni komplet ",
              "description" => "Iz DOMINIK Jewelry zlatarnice stigla je nova božićna kolekcija. Izdvojili smo komplet koji se sastoji od srebrnih naušnica i prstena pomno ukrašenih cirkonima i safirima. ",
              "date_show" => "2022-12-21 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_21.jpg",
              "winner" => "Dobitnici: @ksenija.dautovic",
              "logo" => "logo_21.png"
            );
            array_push($prizes, $prize_21);
            $prize_22 = array(
              "name" => "Dječja drvena kuhinja Kidland",
              "description" => "Sadrži dvije ploče za kuhanje s LED svjetlima i zvukovima kuhanja i prženja, pećnicu sa svjetlom, pladnjem za pečenje, mikrovalnu pećnicu i hladnjak s ledomatom.",
              "date_show" => "2022-12-22 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_22.jpg",
              "winner" => "Dobitnici: @nenaa128",
              "logo" => "logo_22.png"
            );
            array_push($prizes, $prize_22);
            $prize_23 = array(
              "name" => "Diamond Clean 9000",
              "description" => "Ova sonična električna četkica s aplikacijom osigurat će zdravije zube za cijeli život. Gruba prema naslagama, blaga prema desnima, dizajnirana je za do sada najdublje čišćenje.",
              "date_show" => "2022-12-23 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_23.jpg",
              "winner" => "Dobitnici: @nikolina_84",
              "logo" => "logo_23.png"
            );
            array_push($prizes, $prize_23);
            $prize_24 = array(
              "name" => "Paket Nutrigold proizvoda",
              "description" => "Kombucha, hummus ili sirup od agave samo su neki od Nutrigold proizvoda kojima se potrošačima nastoji pružiti zdrava prehrana koja je cjenovno prihvatljiva, ukusna i kvalitetna.",
              "date_show" => "2022-12-24 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_24.jpg",
              "winner" => "Dobitnici: @lorena_mihelcic",
              "logo" => "logo_24.png"
            );
            array_push($prizes, $prize_24);
            $counter = 1;
            $now = date("Y-m-d H:i:s");
            foreach ($prizes as $key => $value) {
              if ($now > $value["date_show"]) {
                ?>
                  <div class="flex relative column-pad animate">
                      <a class="full flex gallery-link" target="_blank" href="<?php echo $value["link"]; ?>">
                        <div class="full flex noisy-boi">
                          <div class="full element-of-surprise">
                            <img src="<?php echo $native_path; ?>img/<?php echo $value["image"]; ?>" class="gift-image">
                            <img src="<?php echo $native_path; ?>img/<?php echo $value["logo"]; ?>" class="client-logo">
                          </div>
                          <div class="full flex slide-padding">
                            <h3 class="full"><?php echo $value["name"]; ?></h3>
                            <p class="full"><?php echo $value["description"]; ?></p>
                            <?php
                              if ($value["winner"]) {
                                ?>
                                  <p class="full"><?php echo $value["winner"]; ?></p>
                                  <div class="button locked-btn">Prijave zatvorene</div>
                                <?php
                              }
                              else {
                                ?>
                                  <div class="button">Prijavi se</div>
                                <?php
                              }
                            ?>
                          </div>
                        </div>
                      </a>
                  </div>
                <?php
                $counter++;
              }
            }
            for ($i=$counter; $i < 25; $i++) {
              ?>
              <div class="flex relative column-pad animate">
                <div class="full flex gallery-link">
                  <div class="full flex noisy-boi">
                    <div class="full element-of-surprise"></div>
                    <div class="full flex slide-padding">
                      <h3 class="full"><?php echo $i; ?>.12.2022.</h3>
                      <p class="full">Dolazi uskoro...</p>
                      <div class="button locked-btn">Prijave uskoro</div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }
          ?>
        </div>
      </div>
    </div>
  </section>
  <div style="display: none;"><?php echo $now; ?></div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
  <script>
    jQuery(document).ready(function () {
      $('.gallery').slick({
      speed: 750,
      slidesToShow: 3,
      slidesToScroll: 1,
      initialSlide: <?php echo $counter-1; ?>,
      centerMode: true,
      autoplay: false,
      infinite: false,
      dots: true,
      prevArrow: '<div class="arrow arrow-left"></div>',
      nextArrow: '<div class="arrow arrow-right"></div>',
      arrows: true,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
          }
        },
      ]
    });
    });

  </script>

<?php wp_footer(); ?>
</body>

</html>
