<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/goodfood';
    // use this for versioning, to avoid cache problems
    $version = 1;
    $votes_total = wp_cache_get('sheet_19wADYkOoYl5aRA8fLl_AAlBEf0tk4x41mzkcbUAxEA8_count', 'sheets');
    $votes = wp_cache_get('sheet_19wADYkOoYl5aRA8fLl_AAlBEf0tk4x41mzkcbUAxEA8_messages', 'sheets');
?>
<!DOCTYPE html>
<html lang="hr">


<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/owl.css">
</head>

<body>

<?php do_action('telegram_body_start'); ?>
  <div id="clanci" class="blog">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 text-center" style="margin:0; padding: 0;">
            <div class="sticky-top">
                    <img src="<?php echo $native_path ?>/assets/images/salata.png"/>
          </div>
        </div>
        <div class="col-lg-6 text-left kontent">
            <img src="<?php echo $native_path ?>/assets/images/logos.png" class="slikahero" />
            <h1>Biramo <span style="color:#e5d6a2">Super1</span> Salad Stilista</h1>
            <h3>Svojim glasom podrži salatu koju želiš vidjeti na GoodFood meniju.</h3>
            <div class="border-first-button scroll-to-section">
               <a href="#odaberi-pobjednika">Odaberi pobjednika</a>
            </div>
            <img src="<?php echo $native_path ?>/assets/images/salata01.png"/>

            <h3 id="odaberi-pobjednika" style="font-weight:900">Zaprimili smo više od 250 originalnih recepata za hranjivu i ukusnu salatu od čitatelja. </h3>
            <p class="ostali">Sada se ovih pet finalista bori za titulu najboljeg. Glasovanje traje do ponedjeljka 11. prosinca u 23:59. U svakom trenutku možeš vidjeti tko u tom trenutku ima najviše glasova, a svoj možeš dodijeliti samo jednom.</p>
            <p class="ostali">Pobjednička salata mjesec dana nalazit će se na GoodFood meniju, a njezin autor osvojit će mjesec dana besplatnih obroka u GoodFoodu i udio zarade od svoje salate. Pobjednika ćemo proglasiti na Super1 portalu do 20. prosinca.</p>
            <p class="ostali"><a href="#" target="_blank">Pravila nagradnog natječaja pronađi ovdje.</a></p>
            <p class="ostali">Daj glas za najbolju kombinaciju okusa!</p>


        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <img src="<?php echo $native_path ?>/assets/images/s01.png"/>
                    <p style="text-align: center !important;"><span data-artikl="1" class="artikl-score" style="font-weight:900; ">
                            <?php echo number_format($votes[1]/$votes_total * 100) ?>%
                    </span>
                    </p>
                    <center><form>
                            <button class="glasackibutton"  type="button" name="id_artikla" value="1">❤</button>
                    </form>
                    </center>

                </div>
                <div class="col-lg-8">
                        <h3>Think Pink </h3>
                        <p><span style="font-weight:900;">Baza:</span> Quinoa, rikola & crveni radič<br/>
                        <span style="font-weight:900;">Dodaci:</span> Pileći file, prepečeni tofu, edamame & rotkvica<br/>
                        <span style="font-weight:900;">Umak:</span> Pink hummus: slanutak, cikla, češnjak, limun, sol, papar & maslinovo ulje<br/><br/>

                        Think Pink stilist: <span style="font-weight:900;">Vana Grgurinović </span></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <img src="<?php echo $native_path ?>/assets/images/s02.png"/>
                    <p style="text-align: center !important;"><span data-artikl="2" class="artikl-score" style="font-weight:900; "><?php echo number_format($votes[2]/$votes_total * 100) ?>%</span>
                    </p>
                    <center> <form>
                        <button class="glasackibutton"  type="button" name="id_artikla" value="2">❤</button>
                    </form>
                    </center>

                </div>
                <div class="col-lg-8">
                        <h3>Cheesy Kale </h3>
                        <p><span style="font-weight:900;">Baza:</span> Kovrčavi kelj<br/>
                        <span style="font-weight:900;">Dodaci:</span> Smeđa riža ili kvinoja, listići parmezana, pečeni hrskavi slanutak, avokado i piletina<br/>
                        <span style="font-weight:900;">Umak:</span> Maslinovo ulje, sok limuna, sol, papar, češnjak, ribani parmezan, majčina dušica<br/><br/>

                        Cheesy Kale stilist: <span style="font-weight:900;">Tena Marčac</span></p>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <img src="<?php echo $native_path ?>/assets/images/s03.png"/>
                    <p style="text-align: center !important;"><span  data-artikl="3" class="artikl-score" style="font-weight:900; "><?php echo number_format($votes[3]/$votes_total * 100) ?>%</span>
                    </p>
                    <center> <form>
                        <button class="glasackibutton"  type="buton" name="id_artikla" value="3">❤</button>
                    </form>
                    </center>

                </div>
                <div class="col-lg-8">
                        <h3>Fetalicious Falafel</h3>
                        <p><span style="font-weight:900;">Baza:</span> Iceberg, radič, rikula<br/>
                        <span style="font-weight:900;">Dodaci:</span> Falafel, batat, sjemenke suncokreta, marinirane pečene cherry rajčice u češnjaku i ulju od bosiljka & mrkva<br/>
                        <span style="font-weight:900;">Umak:</span> Blend fete, grčkog jogurta, češnjaka & kopra <br/><br/>

                        Fetalicious Falafel stilist: <span style="font-weight:900;">Helena Hastor</span></p>
                </div>
            </div>


            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <img src="<?php echo $native_path ?>/assets/images/s04.png"/>
                    <p style="text-align: center !important;"><span  data-artikl="4" class="artikl-score" style="font-weight:900; ">
                            <?php echo number_format($votes[4]/$votes_total * 100) ?>%
                   </span>
                    </p>
                    <center> <form>
                        <button class="glasackibutton"  type="button" name="id_artikla" value="4">❤</button>
                    </form>
                    </center>

                </div>
                <div class="col-lg-8">
                        <h3>Piri-Piri Salata</h3>
                        <p><span style="font-weight:900;">Baza:</span> Špinat, crveni radič & rikula<br/>
                        <span style="font-weight:900;">Dodaci:</span> Pileća krilca marinirana, pirjani šampinjoni, cikla, pečena tikva, pečena mrkva, avokado, krastavac, klice soje & klice alfa alfa<br/>
                        <span style="font-weight:900;">Umak:</span> Balsamico dressing<br/><br/>

                        Piri-Piri Salata stilist: <span style="font-weight:900;">Klara Kolarić</span></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <img src="<?php echo $native_path ?>/assets/images/s05.png"/>
                    <p style="text-align: center !important;"><span  data-artikl="5" class="artikl-score" style="font-weight:900; "><?php echo number_format($votes[5]/$votes_total * 100) ?>%</span>
                    </p>
                    <center> <form>
                        <button class="glasackibutton"  type="button" name="id_artikla" value="5">❤</button>
                        <input type="hidden" name="glasaj" value="1">
                    </form>
                    </center>

                </div>
                <div class="col-lg-8">
                        <h3>Vegan Winter</h3>
                        <p><span style="font-weight:900;">Baza:</span> Kristal salata, matovilac, crveni kupus<br/>
                        <span style="font-weight:900;">Dodaci:</span> Pečeni dimljeni tofu, pečeni batat, pečene prokulice, ukiseljena mrkva & zrnca šipka<br/>
                        <span style="font-weight:900;">Umak:</span> Veganski ranch (veganska majoneza, biljno mlijeko, jabučni ocat, češnjak u prahu, luk u prahu, peršin, kopar & papar)<br/><br/>

                        Vegan Winter stilist: <span style="font-weight:900;">Lara Levak</span></p>
                </div>
            </div>



        </div>
            <div class="poruka" style="display:none;">Već ste glasovali. Možete glasovati samo jednom!</div>

            <p class="prviblok">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom GoodFood i po najvišim uredničkim standardima Telegram Media Grupe.</p>
            <img src="<?php echo $native_path ?>/assets/images/telegram-studio.png" style="max-width: 180px; height: auto;" /><br/><br/>
        </div>
      </div>
    </div>
  </div>
<img src="<?php echo $native_path ?>/assets/images/bubble.png" class="bubble"/>
  <!-- Scripts -->
  <script src="<?php echo $native_path ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $native_path ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/owl-carousel.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/animation.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/imagesloaded.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/custom.js"></script>
<script src="https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/super1/superdan/jquery.serialize-object.min.js"></script>
<script>
    var voted = false,
        url = 'https://script.google.com/macros/s/AKfycbzKRR797zOgV8-J3pfBNm8sJwYo_WaIQM9xYBXKGziCsjq0HHiAX9QcWRF5_LTS7f4OZw/exec'

    jQuery('.glasackibutton').on('click', function(e) {
        e.preventDefault();
        jQuery('.glasackibutton').attr('disable', true);
        if (getCookie('good_food_vote') == 1 || voted) {
            jQuery('.poruka').text('Već ste glasovali. Možete glasovati samo jednom!').show()
            //jQuery('.poruka').show();
            return;
        }
        jQuery('.poruka').text('Hvala na glasu!').show();
        setCookie('good_food_vote', 1, 30)
        voted = true;
        var jqxhr = jQuery.ajax({
            url: url,
            method: "GET",
            dataType: "json",
            data: {
                vote: jQuery(this).val()
            }
        })
    })

    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        let expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
</script>
<?php wp_footer(); ?>
</body>
</html>
