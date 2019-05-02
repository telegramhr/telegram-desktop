<?php

class Nethr_Fossil_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct( 'nethr_fossil_widget', 'Nethr: Fossil',
            array(
                'description' => 'Widget Fossil',
            ) );
    }

    public function widget( $args, $instance ) {
       ?><style>
            .widget-satovi article {
                width: 19.99%;
                text-align: center;
                float: left;
            }

            .widget-satovi article .inner {
                padding: 20px 10px;
            }

        </style>
        <div class="tg-widget widget-satovi" style="max-width:1280px; margin: 0 auto; margin-bottom: 20px;">
            <div class="tg-widget-head" style="text-align: center">
                    Proljetni trendovi: satovi
                <div class="decail"></div>
            </div>
            <div class="widget-body fossil-slider cf">
                <article>
                    <div class="inner">
                        <a href="https://www.satovi.com/satovi/fossil" target="_blank">
                            <div class="thumb" style="height:auto;">
                                <img src="https://adriaticmedianethr.files.wordpress.com/2019/03/1-19.jpg?quality=100&strip=all&amp"
                                     style="width:100%" alt=" Muški stil u smeđoj i plavoj" />
                            </div>
                            <div class="article-text">
                                <h1 class="title">
                                    Muški stil u smeđoj i plavoj
                                </h1>
                            </div>
                        </a>
                        <a href="https://www.satovi.com/satovi/fossil" target="_blank" class="btn btn-purple">Kupi ovdje</a>
                    </div>
                </article>
                <article>
                    <div class="inner">
                        <a href="https://www.satovi.com/satovi/fossil" target="_blank">
                            <div class="thumb" style="height:auto">
                                <img src="https://adriaticmedianethr.files.wordpress.com/2019/03/2-13.jpg?quality=100&strip=all&amp"
                                     style="width:100%" alt="Srebrni sjaj na ženskoj ruci">
                            </div>
                            <div class="article-text">
                                <h1 class="title">
                                    Srebrni sjaj na ženskoj ruci
                                </h1>
                            </div>
                        </a>
                        <a href="https://www.satovi.com/satovi/fossil" target="_blank" class="btn btn-purple">Kupi ovdje</a>
                    </div>
                </article>
                <article>
                    <div class="inner">
                        <a href="https://www.satovi.com/satovi/fossil" target="_blank">
                            <div class="thumb" style="height:auto">
                                <img src="https://adriaticmedianethr.files.wordpress.com/2019/03/3-10.jpg?quality=100&strip=all&amp "
                                     style="width:100%" alt="Decentna bijela elegancija">
                            </div>
                            <div class="article-text">
                                <h1 class="title">
                                    Decentna bijela elegancija
                                </h1>
                            </div>
                        </a>
                        <a href="https://www.satovi.com/satovi/fossil" target="_blank" class="btn btn-purple">Kupi ovdje</a>
                    </div>
                </article>
                <article>
                    <div class="inner">
                        <a href="https://www.satovi.com/satovi/fossil" target="_blank">
                            <div class="thumb" style="height:auto">
                                <img src="https://adriaticmedianethr.files.wordpress.com/2019/03/4-9.jpg?quality=100&strip=alll"
                                     style="width:100%" alt="Muževan modni dodatak">
                            </div>
                            <div class="article-text">
                                <h1 class="title">
                                    Muževan modni &nbsp; dodatak&nbsp;
                                </h1>
                            </div>
                        </a>
                        <a href="https://www.satovi.com/satovi/fossil" target="_blank" class="btn btn-purple">Kupi ovdje</a>
                    </div>
                </article>
                <article>
                    <div class="inner">
                        <a href="https://www.satovi.com/satovi/fossil" target="_blank">
                            <div class="thumb" style="height:auto">
                                <img src="https://adriaticmedianethr.files.wordpress.com/2019/03/5-6.jpg?quality=100&strip=all&amp"
                                     style="width:100%" alt="Vrijeme je za Fossil Smart">
                            </div>
                            <div class="article-text">
                                <h1 class="title">
                                    Vrijeme je za Fossil Smart
                                </h1>
                            </div>
                        </a>
                        <a href="https://www.satovi.com/satovi/fossil" target="_blank" class="btn btn-purple">Kupi ovdje</a>
                    </div>
                </article>

            </div>
            <script>
                jQuery(document).ready(function() {
                jQuery('.fossil-slider').slick({
                    infinite: true,
                    slidesToShow: 5,
                    slidesToScroll: 0,
                    arrows: false,
                    autoplay: true,
                    responsive: [
                        {
                            breakpoint: 500,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                infinite: true
                            }
                        },
                    ]
                });
                });
            </script>
        </div><?php
    }
}

register_widget( 'Nethr_Fossil_Widget' );
