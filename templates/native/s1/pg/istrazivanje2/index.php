<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/pg/istrazivanje2/';
//$native_path = 'http://localhost/super1-theme/templates/native/pg/istrazivanje2/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=2.0" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $native_path ?>jquery.serialize-object.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4878256e09.js" crossorigin="anonymous"></script>
</head>
<div class="main-container flex">
    <div class="container">
        <img src="<?php echo $native_path ?>img/pg_header_vizual.jpg" alt="P&G vizual proizvoda">
        <div class="header-logos center full">
            <img src="<?php echo $native_path ?>img/super1_logo.svg" alt="Super1 Logo">
            <img src="<?php echo $native_path ?>img/pg_logo.png" alt="P&G Logo">
        </div>
        <h3 class="full center-text overtitle">ŽELITE PAMETNO KUPOVATI, ALI I DALJE KORISTITI PROIZVODE KOJIMA VJERUJETE?</h3>
        <h1 class="full flex center-text"><span class="full">OTKRIVAMO</span><span class="full superbold">POTROŠAČKE NAVIKE HRVATA</span><span class="full">PO PITANJU OSOBNE HIGIJENE I HIGIJENE DOMA</span></h1>
        <div class="full flex relative">
            <div class="full relative intro">
                <div class="line"></div>
                <div class="line"></div>Super1 i P&G proveli su veliko istraživanje o navikama kupovanja Hrvata, izdvojili smo najzanimljivije rezultate.
            </div>
            <img class="infographic" src="<?php echo $native_path ?>img/tg_infographic_pgistrazivanje2.jpg" alt="Infografika s rezultatima istraživanja">
        </div>
        <h3 class="full center-text overtitle section-overtitle">PROIZVODI KOJIMA VJERUJEMO ZA OSOBNU HIGIJENU</h3>
        <div class="full flex">
            <a class="half flex-responsive article" href="https://super1.telegram.hr/look/brade-su-u-povijesti-bile-pitanje-casti-a-danas-su-stvar-stila-pitali-smo-i-zene-jesu-li-im-zbilja-privlacne/ " target="_blank">
                <img src="https://super1.telegram.hr/wp-content/uploads/sites/3/2021/10/shutterstock-313676516-880x520.jpg" alt="Brade su u povijesti bile pitanje časti, a danas su stvar stila. Pitali smo i žene jesu li im zbilja privlačne">
                <div class="full article-box flex">
                    <div class="full flex">
                        <h2 class="full">Brade su u povijesti bile pitanje časti, a danas su stvar stila. Pitali smo i žene jesu li im zbilja privlačne </h2>
                        <p>Dok ih danas u pravilu gledamo kroz prizmu modnih trendova, 60-ih su godina brade bile oblik protesta protiv političkog poretka</p>
                        <div class="cta animate">Pročitaj više</div>
                    </div>
                </div>
            </a>
            <a class="half flex-responsive article" href="https://super1.telegram.hr/look/razgovarali-smo-s-majstorom-za-brade-otkrio-nam-je-sto-ce-biti-popularno-u-2022-ali-i-koji-trendovi-odlaze-u-zaborav/" target="_blank">
                <img src="https://super1.telegram.hr/wp-content/uploads/sites/3/2021/11/pexels-stefan-lorentz-668196-880x520.jpg" alt="Razgovarali smo s majstorom za brade. Otkrio nam je što će biti popularno u 2022., ali i koji trendovi odlaze u zaborav">
                <div class="full article-box flex">
                    <div class="full flex">
                        <h2 class="full">Razgovarali smo s majstorom za brade. Otkrio nam je što će biti popularno u 2022., ali i koji trendovi odlaze u zaborav</h2>
                        <p>Nema više ekstremnih brada, novi trendovi vraćaju nas u neka druga vremena</p>
                        <div class="cta animate">Pročitaj više</div>
                    </div>
                </div>
            </a>
        </div>
        <h3 class="full center-text overtitle section-overtitle">PROIZVODI KOJIMA VJERUJEMO ZA HIGIJENU DOMA</h3>
        <div class="full flex">
            <a class="half flex-responsive article" href="https://super1.telegram.hr/relax/pronasli-smo-kul-proizvode-uz-koje-nam-se-vrijeme-ciscenja-stana-prepolovilo/" target="_blank">
                <img src="https://super1.telegram.hr/wp-content/uploads/sites/3/2021/11/shutterstock-1570550158-1-880x520.jpg" alt="Pronašli smo kul proizvode uz koje nam se vrijeme čišćenja stana prepolovilo">
                <div class="full article-box flex">
                    <div class="full flex">
                        <h2 class="full">Pronašli smo kul proizvode uz koje nam se vrijeme čišćenja stana prepolovilo </h2>
                        <p>Ne samo da su multifunkcionalni, nego omogućuju čišćenje teško dostupnih površina</p>
                        <div class="cta animate">Pročitaj više</div>
                    </div>
                </div>
            </a>
        </div>
        <section class="full flex native-signature">
            <p class="full center-text">Pobjednici nagradnog natječaja održanog u anketi: Vedrana Todorović, Zvonimir Pospiš, Madonna Ojurović Čačić, Zoran Šinjak i Irena Grgić.</p>
            <div class="full center">
                <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
            </div>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom P&G i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </section>
    </div>
</div>

<?php wp_footer(); ?>
</body>

</html>