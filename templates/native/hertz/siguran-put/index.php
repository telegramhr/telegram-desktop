<!DOCTYPE html>
<html lang="en">
<?php $native_path = 'https://www.telegram.hr/wp-content/themes/telegram2-desktop/templates/native/hertz/siguran-put/'; ?>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <?php wp_head(); ?>

    <!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
            <link rel="stylesheet" href="<?php echo $native_path ?>css/iframe-lightbox.css" />

    <!-- Libraries Stylesheet -->
    <link href="<?php echo $native_path ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo $native_path ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo $native_path ?>css/style.css" rel="stylesheet">
</head>

<body>


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary"><span  style="font-weight: 700; text-transform: uppercase; font-size: 22px; color:#000"><i>Siguran put za mene</i></span></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">

                <a href="/" class="nav-item nav-link"><span  style="font-weight: 700; text-transform: uppercase;" class="naslovni"><i>Siguran put za mene</i></span></h1></a>


                <a href="#home" class="nav-item nav-link">Istraži tržište</a>
                <a href="#pronadji-auto" class="nav-item nav-link">Pronađi auto</a>
                <a href="#otkrij-pogodnosti" class="nav-item nav-link">Otkrij pogodnosti</a>
                </div>

            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0" id="home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center" style="background:#000 url('img/gen-z-o-kupnji-auta.jpg') no-repeat; background-size: cover !important">
                        <div class="text-start p-5" style="max-width: 900px;">
                            <h1 class="display-1 text-white" style="font-size: 40px; font-family: 'Poppins'; font-weight: 200;"><span style="font-weight:700">Gen Z o kupnji auta:</span> jedni ih posuđuju od roditelja, drugi unajmljuju po potrebi, a treći smatraju neophodnima</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3" style="margin-top:30px !important">Saznaj više</a>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center" style="background:#000 url('img/10-god-skuplji.jpg') no-repeat; background-size: cover !important">
                        <div class="text-start p-5" style="max-width: 900px;">
                            <h1 class="display-1 text-white mb-md-4" style="font-size: 40px; font-family: 'Poppins'; font-weight: 200;"><span style="font-weight:700">Novi automobili gotovo su 10 tisuća eura skuplji nego prije 7 godina</span> , a prosječna starost diljem EU sve je viša</font></h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3"  style="margin-top:30px !important">Saznaj više</a>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center" style="background:#000 url('img/euri.jpg') no-repeat; background-size: cover !important">
                        <div class="text-start p-5" style="max-width: 900px;">
                            <h1 class="display-1 text-white mb-md-4" style="font-size: 40px; font-family: 'Poppins'; font-weight: 200;">Dok inflacija trese cijelu Europu, svaka je ušteda ključna.  <span style="font-weight:700">Pronašli smo uslugu koja će nam u tome pomoći</span></font></h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3"  style="margin-top:30px !important">Saznaj više</a>
                        </div>

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->





    <!-- Features Start -->
    <div class="container-fluid bg-primary feature py-5 pb-lg-0 my-5" style="margin: 0 !important" id="pronadji-auto">
        <div class="container py-5 pb-lg-0">
            <div class="mx-auto text-center mb-3 pb-2" style="max-width: 900px;">
                <h6 class="text-uppercase text-secondary">Siguran put za mene</h6>
                <h1 class="display-5 text-black" style="color:#000 !important; margin-bottom: 30px !important">Odgovori na naših deset pitanja i <span style="font-weight:700">otkrij koji je auto za tebe.</span></h1>
                <a href="test/index.html" data-padding-bottom="56.25%" aria-hidden="true" rel="lightbox" aria-label=""  class="btn btn-primary py-md-3 px-md-5 me-3 iframe-lightbox-link">Saznaj više</a>
                <img src="<?php echo $native_path ?>img/auta.png" style="max-width:100%;margin-bottom: 50px;" />
            </div>

        </div>
    </div>
    <!-- Features Start -->


    <!-- Features Start -->
    <div class="container-fluid bg-primary feature py-5 pb-lg-0 my-5" style="margin:0 !important; margin-top:-16px !important; margin-bottom:-16px !important; padding-top:100px !important; padding-bottom: 100px !important; background: url('img/clanak.jpg') no-repeat center center !important; background-size: cover !important;" id="otkrij-pogodnosti">
        <div class="container py-5 pb-lg-0">
            <div class="mx-auto text-center mb-3 pb-2" style="max-width: 900px;">
                <h6 class="text-uppercase text-secondary">HERTZ NAJAM VOZILA</h6>
                <h1 class="display-5 text-black" style="color:#fff !important; margin-bottom: 30px !important">Jeste li čuli za Flex Drive višemjesečni najam vozila u Hertzu? <span style="font-weight:700">Potpuno novi koncept najma na hrvatskom tržištu </span></h1>
                <a class="btn btn-primary py-md-3 px-md-5 me-3">Saznaj više</a>
            </div>

        </div>
    </div>
    <!-- Features Start -->





    <div class="container-fluid bg-dark text-white py-4" style="background: #fff !important; padding-top:50px !important; padding-bottom: 50px !important">
        <div class="container text-center">
            <a href="https://www.hertz.hr/hr/" target="_blank"><img src="<?php echo $native_path ?>img/hertz.png" /></a><a href="https://www.telegram.hr/" target="_blank"><img src="<?php echo $native_path ?>img/telegram.png" /></a>
            <br/><br/>
            <p class="mb-0" style="font-family: 'Poppins' !important; font-size: 14px; color:#000;">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s Hertzom i po uredničkim standardima Telegram Media Grupe.</p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $native_path ?>lib/easing/easing.min.js"></script>
    <script src="<?php echo $native_path ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo $native_path ?>lib/counterup/counterup.min.js"></script>
    <script src="<?php echo $native_path ?>lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo $native_path ?>js/main.js"></script>
    <script src="<?php echo $native_path ?>js/iframe-lightbox.js"></script>
        <script>
            (function(root, document) {
                "use strict";
                [].forEach.call(document.getElementsByClassName("iframe-lightbox-link"), function(el) {
                    el.lightbox = new IframeLightbox(el, {
                        onCreated: function() {
                            /* show your preloader */
                        },
                        onLoaded: function() {
                            /* hide your preloader */
                        },
                        onError: function() {
                            /* hide your preloader */
                        },
                        onClosed: function() {
                            /* hide your preloader */
                        },
                        scrolling: false,
                        /* default: false */
                        rate: 500 /* default: 500 */,
                        touch: false /* default: false - use with care for responsive images in links on vertical mobile screens */
                    });
                });
            })("undefined" !== typeof window ? window : this, document);
        </script>
    <?php wp_head(); ?>
</body>

</html>
