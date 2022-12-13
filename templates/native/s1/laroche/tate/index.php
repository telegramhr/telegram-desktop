<!DOCTYPE html>
<html lang="hr">
<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/laroche/tate/';
?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head() ?>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="<?php echo $native_path ?>jquery.serialize-object.min.js"></script>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo $native_path ?>css/style.css?ver=3.72">


</head>

<body>
  <?php do_action('body_start') ?>
  <header class="container-fluid">
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#page-top">
          <img src="<?php echo $native_path ?>img/logo.svg" class="img-fluid" alt="Tate za tate (vrijedi i za mame)">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#savjeti-roditelja">Savjeti roditelja</a></li>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#ugc">Iskustva tata</a></li>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#kutak">Brižni kutak</a></li>
          </ul>
          <span class="navbar-img">
            <p>powered by:</p>
            <img src="<?php echo $native_path ?>img/la-roche-logo.svg" alt="Logo La Roche-Posay" class="img-fluid">
          </span>
        </div>
      </div>
    </nav>



    <div class="polaroid1">
      <img src="<?php echo $native_path ?>img/polaroid1alt.png?ver=2.0" alt="Polaroid fotografija - s bebom od prvog dana" class="img-fluid">
    </div>
    <div class="container" id="page-top">
      <div class="row justify-content-between text-center">
        <div class="col-lg-6 uvod">

          <img src="<?php echo $native_path ?>img/logo.svg" class="img-fluid" alt="Tate za tate (vrijedi i za mame)">
          <div class="mame">
            <img src="<?php echo $native_path ?>img/mame.svg" aria-hidden="true" class="img-fluid">
          </div>
          <p>Puno je pitanja koja se tatama motaju po glavi. No nešto je manje mjesta gdje mogu pronaći točne odgovore. Zato smo okupili tate s iskustvom i tate stručnjake kako bi svojim znanjem pomogli roditeljima. Uz njihove savjete saznajte sve o brizi i odgoju djeteta od prvog dana života.</p>
          <a href="#savjeti-roditelja">
            <div class="btn btn-bijeli">Otkrij odgovore</div>
          </a>
        </div>
      </div>
    </div>
  </header>
  <section class="container-fluid" id="video2">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 naslov shoo-top">
          <h1>Baby shower</h1>
          <h1 class="pomak">s <span class="underline-magical">tatama i stručnjacima</span></h1>
        </div>
      </div>
      <div class="row">
        <div class=" col-lg-6">
          <p>U kampanji ”Tate za tate” Amar Bukvić ugostio je stručnjake i tate, dermatologa Domagoja Ćužića i pedijatra Silvija Šegulju, koji su dali odgovore na 12 najučestalijih pitanja roditelja.</p>
        </div>
        <div class="col-lg-10 shoo-top">
          <div class="fb-video" data-href="https://www.facebook.com/watch/?v=4522850101125244" data-width="840" data-show-text="false">
            <blockquote cite="https://developers.facebook.com/super1.hr/videos/4522850101125244/" class="fb-xfbml-parse-ignore"><a href="https://developers.facebook.com/super1.hr/videos/1631714777165202/">0:02 / 2:06
Pitali smo tate kako bi organizirali baby shower. Odgovori su nas oduševili</a>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section class="container-fluid" id="savjeti-roditelja">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 naslov shoo-top">
          <h1>Najvažniji</h1>
          <h1 class="pomak">savjeti <span class="underline-magical">roditelja</span></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <p>Kako bi stručnjaci imali bolji uvid u pitanja koja muče roditelje, na portalu Super1 proveli smo anketu u trajanju od 29. listopada do 18. studenoga. U anketi je sudjelovalo 335 roditelja, a ovo su neki od najzanimljivijih rezultata.</p>
          <img src="<?php echo $native_path ?>img/infografika.jpg?ver=1" alt="infografika" class="img-fluid infografika">
        </div>

      </div>
    </div>
  </section>

  <section class="container-fluid" id="ugc">
    <div class="polaroid2">
      <img src="<?php echo $native_path ?>img/polaroid2.png?ver=2" alt="Polaroid fotografija - prvo uspavljivanje" class="img-fluid">
    </div>
    <div class="container">
      <div class="row naslovni">
        <div class="col-lg-6 naslov bijeli">
          <h1>Tate za <span class="underline-magical white">tate</span></h1>
          <p style="color: white; margin-top: 8px;">Puno je pitanja koja tatama motaju po glavi.
            No, nešto je manje mjesta gdje mogu pronaći odgovore.
            Tate, znamo da cijenite mišljenje drugih tata, zato smo okupili različite tate i pitali ih kako je to biti tata.
          </p>
        </div>
      </div>

      <!--Novi layout kartica -->

      <div class="row savjeti">
        <div id="init" class="card-columns">
          <?php $savjeti = new WP_Query([
            'post_type' => 'laroche-savjeti',
            'posts_per_page' => 4,
            'post_status' => 'publish',
            'no_found_rows' => true,
            'ignore_sticky_posts' => true,
          ]);
          while ($savjeti->have_posts()) {
            $savjeti->the_post();
          ?>
            <div class="card">
              <div class="savjet">
                <div class="tape text-center">
                  <img src="<?php echo $native_path ?>img/tape.svg" aria-hidden="true" class="img-fluid">
                </div>
                <div class="ime-savjet">
                  <h3><span><?php echo explode(' ', get_post_meta($savjeti->post->ID, 'ime', true))[0] ?></span> savjetuje</h3>
                </div>
                <div class="text-savjet">
                  <p><?php echo get_post_meta($savjeti->post->ID, 'savjet', true) ?>
                  </p>
                </div>
              </div>
            </div>
          <?php
          }
          wp_reset_postdata();
          ?>
        </div>
      </div>



      <div id="more" class="row justify-content-center text-center">
        <div class="col-lg-4">
          <div id="read-more" class="btn btn-bijeli">Učitajte više</div>
        </div>
      </div>
      <script>
        window.page = 2;
        jQuery('#read-more').click(function() {
          jQuery.post('<?php echo site_url() ?>/wp-admin/admin-post.php', {
            'action': 'super1_laroche_posts',
            'page': window.page
          }, function(res) {
            let out = ''
            res.posts.forEach(function(item) {
              out += '<div class="card"> <div class="savjet"> <div class="tape text-center"> <img src="<?php echo $native_path ?>img/tape.svg" aria-hidden="true" class="img-fluid"></div> ' +
                '<div class="ime-savjet"> <h3><span>' + item.ime + '</span> savjetuje</h3> </div>' +
                '<div class="text-savjet"> <p>' + item.savjet + ' </p> </div> </div> </div>'
            })
            jQuery('#init').append(out)
            window.page++
          })
        })
      </script>

    </div>
    <div class="polaroid3">
      <img src="<?php echo $native_path ?>img/polaroid3.png?ver=3" alt="Polaroid fotografija - prvi sastanak" class="img-fluid">
    </div>
  </section>

  <section class="container-fluid" id="video">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 naslov">
          <h1>Evo što su ovi tate </h1>
          <h1 class="pomak">rekli o <span class="underline-magical">očinstvu.</span></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-10">
          <div class="fb-video" data-href="https://www.facebook.com/watch/?v=574413303516524" data-width="840" data-show-text="false">
            <blockquote cite="https://developers.facebook.com/super1.hr/videos/574413303516524/" class="fb-xfbml-parse-ignore"><a href="https://developers.facebook.com/super1.hr/videos/574413303516524/">Pet tata priča o tome koliko ih je očinstvo promijenilo. Pogledajte što su poručili mamama</a>
              <p>Ovo je preslatko. Pet tata priča o tome kako je to biti tata.

                &quot;Omiljeni trenuci su mi kad se tek probudi i kad prvi put ugleda nekoga tko ga je došao vidjeti. Taj njegov prvi osmijeh ne bih mijenjao ni za što.&quot;</p>Posted by <a href="https://www.facebook.com/super1.hr/">Super1</a> on Wednesday, 24 February 2021
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="container-fluid" id="kutak">
    <div class="container">
      <div class="row naslovni">
        <div class="col-lg-6 naslov">
          <div class="nadnaslov">
            <span>brižni kutak</span>
          </div>
          <h1>Njega <span class="underline-magical">bebe</span> od</h1>
          <h1 class="pomak">prvog dana rođenja</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5 promo">
          <div class="polaroid4">
            <img src="<?php echo $native_path ?>img/polaroid4.png" alt="Polaroid fotografija - pojavilo se crvenilo" class="img-fluid">
          </div>

          <div class="promo-tekst">
            <img src="<?php echo $native_path ?>img/strelice2.svg" aria-hidden="true" class="img-fluid">
            <p>Tu se uvijek možete osloniti na Lipikar <span>#zaštitniktvojekože</span></p>
            <a href="https://www.laroche-posay.com.hr/proizvodi-tretmani/Lipikar/Suha-koza-pracena-osjecajem-neugode-r411.aspx" target="_blank">
              <div class="btn btn-plavi btn-mali">Saznajte više</div>
            </a>
          </div>

        </div>
        <div class="col-lg-7">
          <div class="naslov-accordion">
            <h5>Na vaša pitanja odgovorili su i stručnjaci</h5>
          </div>
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Beba ima crvenu i suhu kožu koja ju svrbi?
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  Crvena i suha koža može biti simptom ekcema. Kod novorođenčadi se ekcem najčešće pojavljuje na licu, a
                  kod male djece on se najčešće pojavljuje na naborima kože oko koljena i na laktovima. Javlja se jak
                  svrbež koji je naročito pojačan na zaraženim dijelovima te koji može narušiti čak i normalan san.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Kako razlikovati običnu suhu kožu koja se pojavljuje zimi od atopijskog dermatitisa (ekcema)?
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  Za dijagnozu atopijskog dermatitisa postoje točno određeni dermatološki kriteriji koji moraju biti
                  ispunjeni da bi se dijagnoza postavila; to se odnosi na izgled upalnih promjena na koži kao i na
                  lokalizaciju promjena. Osim suhoće važan je i kronicitet ili ponavljajuće javljanje promjena i svrbež
                  kože.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Što je atopijski dermatitis ili ekcem?
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  Atopijski dermatitis ili ekcem vrlo je česta, kronična i ponavljajuća bolest, a karakterizira je
                  upala. Što uzrokuje atopijski dermatitis? Genetska predispozicija za alergijske reakcije na okolne
                  čimbenike. Ova ozbiljna suhoća, koju uzrokuje genetska modifikacija obrane kože, uzrok je svrbežu.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Može li se beba od početka mazati kremama za atopijski dermatitis ili postoji dobno ograničenje?
                  </button>
                </h2>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                  Primjena hipoalergenih neutralnim emolientnih krema bez mirisa i konzervansa može se koristiti za
                  njegu dječje kože od najranije dobi. U slučaju da dijete ima atopijske kožne promjene potrebno je što
                  prije započeti terapiju uz pojačanu njegu kože i nanošenje protuupalnih pripravaka po preporuci
                  liječnika.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFive">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Koje terapije pomažu kod atopijskog dermatitisa?
                  </button>
                </h2>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                <div class="card-body">
                  Liječnici obično propisuju kreme s dermokortikoidima; One su neophodne u liječenju ekcema. Ove visokoučinkovite kreme
                  moraju se nanositi sve dok se simptomi ne povuku (nekoliko dana). Nakon toga preporučujem redovito
                  korištenje krema s umirujućim učinkom kako bi se hidratizirala koža, što pomaže smanjiti učestalost
                  izbijanja simptoma.
                  <a href="https://www.laroche-posay.com.hr/proizvodi-tretmani/Lipikar/Suha-koza-pracena-osjecajem-neugode-r411.aspx" target="_blank">Lipikar linija proizvoda </a> temelji se na 20 godina iskustva u tretiranju suhe i
                  atopiji sklone kože.
                </div>
              </div>
            </div>
          </div>
          <div class="promo-section text-center">
            <p>Više o koži sklonoj atopijskom dermatitisu saznajte <a href="https://www.laroche-posay.com.hr/article/sto-je-atopijski-dermatitis-od-uzroka-do-rjesenja-ovdje-cete-pronaci-sve-sto-trebate-znati" target="_blank">ovdje.</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container-fluid" id="clanci">
    <div class="container">
      <div class="row naslovni justify-content-center">
        <div class="col-lg-6 naslov manji text-center">
          <h1>Pročitajte <span class="underline-magical ">više</span></h1>
        </div>
      </div>
      <div class="row">
        <?php
        $p = new WP_Query([
          'posts_per_page' => 9,
          'post_type' => 'post',
          'post_status' => 'publish',
          'no_found_rows' => true,
          'ignore_sticky_posts' => true,
          'tag' => 'tate-za-tate'
        ]);
        while ($p->have_posts()) {
          $p->the_post();
        ?>
          <div class="col-lg-4">
            <a href="<?php the_permalink(); ?>" target="_blank">
              <div class="clanak">
                <div class="clanak-fotka prva" style="background: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'featured-mobile2x') ?>') no-repeat"></div>
                <div class="clanak-naslov text-center">
                  <h5><?php echo get_post_meta(get_the_ID(), 'nadnaslov', true) ?></h5>
                  <h3><?php the_title() ?></h3>
                </div>
              </div>
            </a>
          </div>
        <?php
        }
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-4 col-10">
          <img src="<?php echo $native_path ?>img/la-roche-logo.svg" alt="Logo La Roche-Posay" class="img-fluid">
        </div>
        <div class="col-lg-4 col-8">
          <img src="<?php echo $native_path ?>img/super1.svg" alt="Logo Super1" class="img-fluid">
        </div>
      </div>
      <div class="row claim justify-content-center text-center">
        <div class="col-lg-6">
          <p>Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s
            partnerom La Roche-Posay i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
  <!-- Bootstrap core JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script>
    document.getElementById('shareBtn').onclick = function() {
      FB.ui({
        display: 'popup',
        method: 'share',
        href: '<?php echo get_the_permalink(get_queried_object_id()) ?>',
      }, function(response) {});
    }
  </script>


</body>

</html>