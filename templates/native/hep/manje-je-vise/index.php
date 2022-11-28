<!DOCTYPE html>
<html lang="en">
<?php $native_path = 'https://www.telegram.hr/wp-content/themes/telegram2-desktop/templates/native/hep/manje-je-vise/' ?>
<head>
    <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?php wp_head(); ?>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo $native_path; ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo $native_path; ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo $native_path; ?>css/style.css" rel="stylesheet">
</head>

<body>


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel" >
            <div class="carousel-inner">
                <div class="carousel-item active"  style="height: 600px; background: url('img/carousel-1.jpg') no-repeat center fixed; background-size: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-center">
                        <div class="p-5">

                            <h1 class="display-3 text-white mb-md-4">Manje je više</h1>
                            <p>Moj plan za energetsku učinkovitost<br/><br/>Sadržaj omogućava <b>HEP</b><br/>&nbsp;</p>
                            <a target="_blank" href="#kreni" class="btn btn-primary">Saznajte više</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Info Start -->
    <div class="container-fluid pb-5 contact-info" id="kreni">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0 text-center" style="background: #fabf0b !important">

                    <div class="">
                        <h1 class="mb-2" style="color:#fff !important">53% građana </h1>
                        <h4 class="m-0" style="color:#fff !important">u EU ne zna koliko energije troši</h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Info End -->



    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">

                    <h1 class="section-title mb-3">Naši stručnjaci</h1>
                </div>

            </div>
            <div class="row">

                        <div class="col-lg-4">

                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img w-100" src="<?php echo $native_path; ?>img/team-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="d-flex flex-column  text-center py-4">
                                <h5 class="font-weight-bold">Vesna Bukarica</h5>
                                <p class="text-black m-0">voditeljica Odjela za energetsku učinkovitost<br/><img src="<?php echo $native_path; ?>img/eihp.png" style="margin-top: 20px;" /></p>
                            </div>

                        </div>
                        <div class="col-lg-4">

                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="<?php echo $native_path; ?>img/team-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="d-flex flex-column  text-center py-4">
                                <h5 class="font-weight-bold">Marko Bišćan</h5>
                                <p class="text-black m-0">viši stručni suradnik<br/>&nbsp;<br/><img src="<?php echo $native_path; ?>img/eihp.png" style="margin-top: 20px;" /></p>
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="<?php echo $native_path; ?>img/team-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="d-flex flex-column  text-center py-4">
                                <h5 class="font-weight-bold">Ružica Budim</h5>
                                <p class="text-black m-0">viša stručna suradnica<br/>&nbsp;<br/><img src="<?php echo $native_path; ?>img/eihp.png" style="margin-top: 20px;" /></p>
                            </div>


                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Article Start -->
    <div class="container-fluid py-5 mb-5" style="background:#f3f3f3; margin-bottom: 0px !important">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <a target="_blank" href="https://www.telegram.hr/partneri/energetski-strucnjak-otkriva-koji-uredaji-najvise-gutaju-struju-provjerite-imate-li-ih-u-domu/"><img src="<?php echo $native_path; ?>img/gutanje-struje.jpg" style="width: 100%;"/></a>
                    </div>

                <div class="col-lg-7 pt-5 pl-5 pb-lg-5">
                    <p><br/></p>
                    <h1 class="mb-4 section-title">Energetski stručnjak otkriva koji uređaji najviše gutaju struju</h1>
                    <h5 class="text-muted font-weight-normal mb-3">Nakon uvođenja novih oznaka dogodilo se to da na tržištu nema televizora energetskog razreda A</h5>
                    <p></p>
                    <div class="d-flex align-items-center pt-4">
                        <a target="_blank" href="https://www.telegram.hr/partneri/energetski-strucnjak-otkriva-koji-uredaji-najvise-gutaju-struju-provjerite-imate-li-ih-u-domu/" class="btn btn-primary mr-5">Pročitajte više</a>

                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Article End -->


    <!-- Infograph Start -->
    <div class="container-fluid py-5" style="background:#fcf1e7; margin-bottom: 50px; margin-top: 0px;">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 pt-lg-5 pb-3">
                    <h1>Cijena 1kWh isporučene toplinske energije prema korištenim tehnologijama za grijanje prostora</h1>
                    <img src="<?php echo $native_path; ?>img/graf.png" style="max-width: 100%; margin-top: 50px;" />

                </div>

            </div>
        </div>
    </div>
    <!-- Infograph End -->

    <!-- Article Start -->
    <div class="container-fluid py-5 pt-5 mb-5">
        <div class="container">
            <div class="row">
                <br/>
                <div class="col-lg-7 pt-5 pl-5 pb-lg-5">
                    <p><br/></p>
                    <h1 class="mb-4 section-title">Energetska stručnjakinja otkriva kako uštedjeti i do 90 posto na grijanju</h1>
                    <h5 class="text-muted font-weight-normal mb-3">Postoje kratkoročne mjere s kojima možemo krenuti već danas, a dugoročne zahtijevaju ulaganje koje se vrlo brzo isplati</h5>
                    <p></p>
                    <div class="d-flex align-items-center pt-4">
                        <a target="_blank" href="https://www.telegram.hr/partneri/energetska-strucnjakinja-otkriva-kako-ustedjeti-i-do-90-posto-na-grijanju-evo-sto-mozete-uciniti-vec-danas/" class="btn btn-primary mr-5" style="margin-bottom:50px !important">Pročitajte više</a>

                    </div>
                </div>
                <div class="col-lg-5">
                    <a target="_blank" href="https://www.telegram.hr/partneri/energetska-strucnjakinja-otkriva-kako-ustedjeti-i-do-90-posto-na-grijanju-evo-sto-mozete-uciniti-vec-danas/"><img src="<?php echo $native_path; ?>img/strucnjakinja-otkriva.jpg" style="width: 100%;"/></a>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- Article End -->


 <!-- Blog Start -->
    <div class="container-fluid pt-5" style="background:#f3f3f3">
        <div class="container pt-0">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">SAVJETI</h6>
                    <h1 class="section-title mb-3">Sačuvaj toplinu doma uz ova tri savjeta</h1>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="<?php echo $native_path; ?>img/blog-1.jpg" alt="">
                    </div>

                    <a style="color:#000 !important; text-decoration: inherit !important;" href="https://www.telegram.hr/partneri/praktican-vodic-7-ekonomicnih-savjeta-za-odrzavanje-topline-doma-mozete-ustedjeti-oko-20-posto-energije/"><h5 class="font-weight-bold mb-2">#1 Zavjese</h5>
                    <p class="mb-4">Nabavite zavjese s termalnom postavom</p></a>
                    <a target="_blank" href="https://www.telegram.hr/partneri/praktican-vodic-7-ekonomicnih-savjeta-za-odrzavanje-topline-doma-mozete-ustedjeti-oko-20-posto-energije/" class="btn btn-primary mr-5">Pročitajte više</a>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="<?php echo $native_path; ?>img/blog-2.jpg" alt="">
                    </div>

                    <a style="color:#000 !important; text-decoration: inherit !important;" href="https://www.telegram.hr/partneri/praktican-vodic-7-ekonomicnih-savjeta-za-odrzavanje-topline-doma-mozete-ustedjeti-oko-20-posto-energije/"><h5 class="font-weight-bold mb-2">#2 Termostat</h5>
                    <p class="mb-4">Ugradite termostat u sve prostorije</p></a>
                    <a target="_blank" href="https://www.telegram.hr/partneri/praktican-vodic-7-ekonomicnih-savjeta-za-odrzavanje-topline-doma-mozete-ustedjeti-oko-20-posto-energije/" class="btn btn-primary mr-5">Pročitajte više</a>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="<?php echo $native_path; ?>img/blog-3.jpg" alt="">
                    </div>

                    <a style="color:#000 !important; text-decoration: inherit !important;" href="https://www.telegram.hr/partneri/praktican-vodic-7-ekonomicnih-savjeta-za-odrzavanje-topline-doma-mozete-ustedjeti-oko-20-posto-energije/"><h5 class="font-weight-bold mb-2">#3 Temperatura</h5>
                    <p class="mb-4">Provjerite idealne temperature za svaku sobu</p></a>
                    <a target="_blank" href="https://www.telegram.hr/partneri/praktican-vodic-7-ekonomicnih-savjeta-za-odrzavanje-topline-doma-mozete-ustedjeti-oko-20-posto-energije/" class="btn btn-primary mr-5">Pročitajte više</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Info Start -->
    <div class="container-fluid contact-info" style="margin-bottom: 0px !important;">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0 text-center"  style="background: #34baf8 !important; color:#fff !important">

                    <div class="">
                        <h4 class="m-0" style="color: #fff !important;">Neizolirana kućanstva za grijanje imaju</h4>
                        <h1 class="mb-2" style="color: #fff !important;">x3.5 veće račune nego izolirana</h1>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Info End -->



    <!-- Article Start -->
    <div class="container-fluid py-5 mb-5" style="background:#f3f3f3; margin-top: 0px !important">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <a target="_blank" href="https://www.telegram.hr/partneri/izracunali-smo-godisnje-cijene-grijanja-s-razlicitim-energentima-strucnjaci-otkrivaju-sto-provjeriti-u-svome-domu/"><img src="<?php echo $native_path; ?>img/izracun.jpg" style="width: 100%;"/></a>
                    </div>

                <div class="col-lg-7 pt-5 pl-5 pb-lg-5">

                    <h1 class="mb-4 section-title">Izračunali smo godišnje cijene grijanja. Stručnjaci otkrivaju što provjeriti u svome domu</h1>
                    <h5 class="text-muted font-weight-normal mb-3">U cijeloj priči najvažniji faktor je stupanj učinkovitosti tehnologije</h5>
                    <p></p>
                    <div class="d-flex align-items-center pt-4">
                        <a target="_blank" href="https://www.telegram.hr/partneri/izracunali-smo-godisnje-cijene-grijanja-s-razlicitim-energentima-strucnjaci-otkrivaju-sto-provjeriti-u-svome-domu/" class="btn btn-primary mr-5">Pročitajte više</a>

                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Article End -->


    <!-- Footer Start -->
    <div class="container bg-light align-items-center text-center mt-5 py-5 px-sm-3 px-md-5" style="background:#fff !important">
        <div class="row">
            <div class="col-lg-2 col-md-2 mb-2">

            </div>
            <div class="col-lg-8 col-md-8 mb-8">
                <img src="<?php echo $native_path; ?>img/telegram.png"/> <img src="<?php echo $native_path; ?>img/hep.png"/>
                <br/><br/>
                Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s  HEP-om i po uredničkim standardima Telegram Media Grupe.
            </div>
            <div class="col-lg-2 col-md-2 mb-2">

             </div>
        </div>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $native_path; ?>lib/easing/easing.min.js"></script>
    <script src="<?php echo $native_path; ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo $native_path; ?>lib/counterup/counterup.min.js"></script>
    <script src="<?php echo $native_path; ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo $native_path; ?>lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?php echo $native_path; ?>lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

<?php wp_footer(); ?>
</body>

</html>
