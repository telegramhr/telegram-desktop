<?php


?>

<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/herbalife/kviz_posao/';
$test_results = [
    [
        'title' => 'Riješi test i saznaj je li vrijeme da mijenjaš posao',
    ],
    [
        'title' => 'Ti si super zadovoljan na svom poslu. Nemoj ga mijenjati!'
    ],
    [
        'title' => 'Očito imaš problema na poslu. Možda je vrijeme da promijeniš karijeru i način rada. U nastavku saznaj kako.'
    ]
]
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>css/style.css?ver2.1" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Slick -->
    <script src="assets/js/slick/slick.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/js/slick/slick.css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/js/slick/slick-theme.css" />
    <script src="https://use.fontawesome.com/d88f9d6377.js"></script>
    <!-- Wow JS -->
    <script src="<?php echo $native_path ?>assets/js/wow/wow.min.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/js/wow/animate.css" />
    <!-- Main Script -->
</head>
<!DOCTYPE html>
<html lang="hr">

<body class="mainColor">
    <div class="main-container mainColor">
        <section class="mainColor">
            <div class="container">
                <div class="whiteText centerText whiteSpace hide">
                    <h3>Kviz</h3>
                    <h2>Riješi test i saznaj je li vrijeme da mijenjaš posao</h2>
                </div>

                <div class="quiz-container">
                    <!-- Slide 1 -->
                    <div data-slide="1" class="slide slide-1 active">
                        <h3 class="question">
                            Stvaraju li ti odlasci na posao tjeskobu?
                        </h3>
                        <div class="answers flexNoWrap">
                            <div class="answer answer-1" data-one="1">
                                <h4 class="answer-text">
                                    Da
                                </h4>
                            </div>
                            <div class="answer answer-2">
                                <h4 class="answer-text">
                                    Ne
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div data-slide="2" class="slide slide-2">
                        <h3 class="question">
                        Postoji li u tvom poslovnom okruženju mogućnost napretka?
                        </h3>
                        <div class="answers flexNoWrap">
                            <div class="answer answer-1" data-one="1">
                                <h4 class="answer-text">
                                    Da
                                </h4>
                            </div>
                            <div class="answer answer-2">
                                <h4 class="answer-text">
                                    Ne
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div data-slide="3" class="slide slide-3">
                        <h3 class="question">
                        Osjećaš li da te poslodavac dovoljno cijeni?
                        </h3>
                        <div class="answers flexNoWrap">
                            <div class="answer answer-1" data-one="1">
                                <h4 class="answer-text">
                                    Da
                                </h4>
                            </div>
                            <div class="answer answer-2">
                                <h4 class="answer-text">
                                    Ne
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div data-slide="4" class="slide slide-4">
                        <h3 class="question">
                        Odgovara li tvoj plaća količini posla koji obavljaš?
                        </h3>
                        <div class="answers flexNoWrap">
                            <div class="answer answer-1" data-one="1">
                                <h4 class="answer-text">
                                    Da
                                </h4>
                            </div>
                            <div class="answer answer-2">
                                <h4 class="answer-text">
                                    Ne
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div data-slide="5" class="slide slide-5">
                        <h3 class="question">
                        Voliš li striktno definirano uredsko radno vrijeme i rad za druge?
                        </h3>
                        <div class="answers flexNoWrap">
                            <div class="answer answer-1" data-one="1">
                                <h4 class="answer-text">
                                    Da
                                </h4>
                            </div>
                            <div class="answer answer-2">
                                <h4 class="answer-text">
                                    Ne
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div data-slide="6" class="slide slide-6">
                        <h3 class="question">
                        Osjećaš li se kao da ti radno okruženje nije dovoljno fleksibilno?
                        </h3>
                        <div class="answers flexNoWrap">
                            <div class="answer answer-1" data-one="1">
                                <h4 class="answer-text">
                                    Da
                                </h4>
                            </div>
                            <div class="answer answer-2">
                                <h4 class="answer-text">
                                    Ne
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div data-slide="7" class="slide slide-7">
                        <h3 class="question">
                        Je li ti razina strasti prema poslu koji radiš i dalje jednaka kao na početku?
                        </h3>
                        <div class="answers flexNoWrap">
                            <div class="answer answer-1" data-one="1">
                                <h4 class="answer-text">
                                    Da
                                </h4>
                            </div>
                            <div class="answer answer-2">
                                <h4 class="answer-text">
                                    Ne
                                </h4>
                            </div>
                        </div>
                    </div>


                    <div data-slide="8" class="slide slide-8 result">
                        <h3 class="question">
                            <span></span>
                        </h3>

                        <div class="full center"><a class="btn animate" href="#" id="restart">Pokušaj ponovno</a></div>
                    </div>


                    <div class="progress-bar">
                        <i class="fa fa-circle-o fa-circle fa-1"></i>
                        <i class="fa fa-circle-o fa-2"></i>
                        <i class="fa fa-circle-o fa-3"></i>
                        <i class="fa fa-circle-o fa-4"></i>
                        <i class="fa fa-circle-o fa-5"></i>
                        <i class="fa fa-circle-o fa-6"></i>
                        <i class="fa fa-circle-o fa-7"></i>
                    </div>

                </div>
            </div>
            <script>
                jQuery(document).ready(function($) {
                    $('#restart').click(function() {
                        $('.slide').removeClass('active');
                        $('.fa').removeClass('fa-circle');
                        $('.slide.slide-1').addClass('active');
                        $('.fa.fa-1').addClass('fa-circle');
                        $('.progress-bar').fadeIn(0);
                        return false;
                    });
                    var descriptions = <?php echo json_encode($test_results); ?>;
                    var a = 0;
                    var result = 1;
                    $('.answer').click(function() {
                        var active = $('.slide.active').data('slide');
                        if ($(this).data('one')) {
                            a++;
                        }
                        //advance
                        $('.slide.slide-' + active).removeClass('active');
                        $('.fa.fa-' + active).removeClass('fa-circle');
                        active++;
                        if (active !== 7) {
                            $('.slide.slide-' + active).addClass('active');
                            $('.fa.fa-' + active).addClass('fa-circle');
                        } else {
                            if (a < 4) {
                                result = 1;
                            }
                            else {
                                result = 2;
                            }
                            a = 0;
                            $('.result .question span').text(descriptions[result].title);
                            $('.slide.slide-' + active).addClass('active');
                            $('.progress-bar').fadeOut(0);
                        }
                        return false;
                    });

                    /*$('.share.fb').click(function() {
                        console.log($(this).attr('href'));
                        FB.ui({
                            method: 'share',
                            href: $(this).attr('href')
                        }, function(response) {});
                        return false;
                    });
                    $('.share.tw').click(function() {
                        var url = 'https://twitter.com/intent/tweet?via=Net.hr&url=http://ljetnazastita.net.hr&text=' + encodeURIComponent($(this).data('title'));

                        window.open(url, '_blank', 'width=600,height=600');

                        return false;
                    });*/
                });
            </script>
    </div>
    </div>
    </div>
    </div>
    </section>
    <?php wp_footer(); ?>
</body>

</html>