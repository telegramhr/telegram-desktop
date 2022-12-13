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
  <link rel="stylesheet" href="<?php echo $native_path ?>css/style.css">
  <link rel="stylesheet" href="https://use.typekit.net/daa3ndb.css">
</head>

<body>
<?php do_action('body_start') ?>
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
          <img src="<?php echo $native_path ?>img/logo.svg" alt="" class="img-fluid">
          <p>Iako je 2020. bila grozna - da grozna!</p>
          <p>
            Svejedno joj imamo na čemu zahvaliti. Uvijek treba pogledati iza sebe i zahvaliti se na divnim ljudima koji
            nam ispunjavaju život.
          </p>
          <p>
            Zato ćemo na ovoj platformi prikupljati najdivnije želje za svoje najmilije, a usput ćemo vas darivati
            vrijednim darovima koje smo pripremili u suradnji s našim dugogodišnjim partnerima. I tako 2020. ispratiti,
            baš kao što je i zaslužila – sa stilom! </p>
          <a href="https://super1.telegram.hr/native/christmas1-kalendar/">
            <div class="btn btn-crveni">
              <p>Ispunite želju</p>
            </div>
          </a>
          <div class="donosi">
            <p>donosi:</p>
            <img src="<?php echo $native_path ?>img/super1.svg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>

<?php wp_footer(); ?>
</body>

</html>