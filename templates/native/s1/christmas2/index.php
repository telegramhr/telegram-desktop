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
            <img src="<?php echo $native_path ?>img/super1.svg" alt="" class="img-fluid">
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
              "winner" => FALSE,
              "logo" => "logo_7.png"
            );
            array_push($prizes, $prize_07);
            $prize_08 = array(
              "name" => "Medaljon Lace of Pag",
              "description" => "Inspiriran tradicionalnom paškom čipkom, on predstavlja nakit koji se nosi i osjeća. Ovaj spoj tradicije i modernog dizajna personalizirajte omiljenim parfemom i ugraviranom posvetom.",
              "date_show" => "2022-12-08 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_8.jpg",
              "winner" => FALSE,
              "logo" => "logo_8.png"
            );
            array_push($prizes, $prize_08);
            $prize_09 = array(
              "name" => "Bajadera Panettone",
              "description" => "Nastala u suradnji Kraša i Kroštule, ova slastica sjedinjuje neodoljivi okus tradicionalnog blagdanskog kolača i ukusnog namaza od nougata i najfinijeg kakaa.",
              "date_show" => "2022-12-09 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_9.jpg",
              "winner" => FALSE,
              "logo" => "logo_9.png"
            );
            array_push($prizes, $prize_09);
            $prize_10 = array(
              "name" => "TaO krema i retinol 0,3%",
              "description" => "Hrvatski brend dermokozmetike Aprive svakodnevnoj će rutini dugotrajno poboljšati stanje i strukturu kože, spriječiti pojavu bora te joj pružiti kvalitetnu hidrataciju.",
              "date_show" => "2022-12-10 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_10.jpg",
              "winner" => FALSE,
              "logo" => "logo_10.png"
            );
            array_push($prizes, $prize_10);
            $prize_11 = array(
              "name" => "LELO DOT™ vibrator",
              "description" => "Klitoralni vibrator koji omogućava višestruke orgazme. Doživite novu razinu užitka sa savršenim partnerom za uzbudljivu solo igru ili igru u paru.",
              "date_show" => "2022-12-11 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_11.jpg",
              "winner" => FALSE,
              "logo" => "logo_11.png"
            );
            array_push($prizes, $prize_11);
            $prize_12 = array(
              "name" => "Skinlick kozmetički proizvodi",
              "description" => "Novi, sestrinski brend Skintegre dolazi u obliku jednostavnijih formulacija, za sve koji traže pouzdanu, pristupačnu njegu koja ima pomalo razigran karakter.",
              "date_show" => "2022-12-12 09:00:00",
              "link" => "https://www.instagram.com/super1.hr",
              "image" => "gift_12.jpg",
              "winner" => FALSE,
              "logo" => "logo_12.png"
            );
            array_push($prizes, $prize_12);
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