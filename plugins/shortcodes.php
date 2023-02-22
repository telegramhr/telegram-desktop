<?php

class Telegram_Shortcodes {
	public function __construct() {
		//add_action( 'admin_init', array( $this, 'action_admin_init' ) );
		add_shortcode( 'quote_box', array( $this, 'quote_box' ) );
		add_shortcode( 'small_video_box', array( $this, 'small_video_box' ) );
		add_shortcode( 'compare_box', array( $this, 'compare_box' ) );
		add_shortcode('telegram_video', array( $this, 'video'));
		add_shortcode('okvir', array( $this, 'okvir'));
		add_shortcode('galerija', [$this,'telegram_galerija']);
		add_shortcode('telegram_quiz', [$this,'telegram_quiz']);
		add_shortcode('telegram_hidden', [$this,'telegram_hidden']);
		add_shortcode('shop_guide', [$this,'shop_guide']);
		add_shortcode('shop_category_guide', [$this,'shop_category_guide']);

        add_shortcode( 'super1_light_box', array( $this, 'light_box' ) );
        add_shortcode( 'super1_leksikon', array( $this, 'leksikon' ) );
        add_shortcode( 'super1_listikl', array( $this, 'listikl' ) );
        add_shortcode( 'super1_botun', array( $this, 'botun' ) );
        add_shortcode( 'super1_native', array( $this, 'native' ) );
        add_shortcode('super1_saloni', array( $this, 'saloni'));
        add_shortcode('super1_forma', [$this, 'forma']);
        add_shortcode('super1_form', [$this, 'form']);
        add_shortcode('super1_quiz', [$this, 'quiz']);
	}

    function telegram_hidden($atts, $content) {
        return '<div id="hidden-content">' . do_shortcode($content) . '</div>';
    }

    function form($atts, $content) {
        extract( shortcode_atts(
            array(
                'template' => ''
            ),
            $atts
        ));
        if ($template) {
            ob_start();
            get_template_part( 'templates/forms/' . $template );

            return ob_get_clean();
        }
        return '';
    }

    function quiz($atts, $content) {
        extract( shortcode_atts(
            array(
                'template' => ''
            ),
            $atts
        ));
        if ($template) {
            ob_start();
            get_template_part( 'templates/quiz/' . $template );

            return ob_get_clean();
        }
        return '';
    }

    function forma() {
        ob_start();
        ?>
        <h3>Pišite nam jer Super1 i Douglas najkretivniji odgovor daruju poklon paketom predivnih proizvoda u vrijednosti od 500kn.</h3>
        <form id="test-form">
            <input type="text" id="ime" name="ime" placeholder="Ime i prezime">
            <input type="email" id="email" name="email" placeholder="Email">
            <label for="pitanje">Kako ti slaviš svoju individualnost? Kako izgleda tvoje "vrijeme za sebe"?</label>
            <textarea id="pitanje" name="pitanje"></textarea>
            <button id="submit-form">Pošalji</button>

            <small><a href="https://super1.telegram.hr/snaga/opci-uvjeti-nagradnog-natjecaja/" target="_blank">Pravila  nagradnog natječaja</a></small>
        </form>
        <h3 id="submitted">Hvala na prijavi</h3>
        <script>
            var $form = jQuery('form#test-form'),
                url = 'https://script.google.com/macros/s/AKfycbxwiaQ91DEAsv0RxLdDA_HrRjDmu3VqWJDEhe7DtGUem3Rdxxo1/exec'

            jQuery('#submit-form').on('click', function(e) {
                e.preventDefault();
                var jqxhr = jQuery.ajax({
                    url: url,
                    method: "GET",
                    dataType: "json",
                    data: $form.serializeObject()
                }).done(
                    function(){
                        jQuery('#test-form').hide();
                        jQuery('#submitted').show();
                    }
                );
            })
        </script>
        <style>
            input[type=text], input[type=text-area], input[type=email], textarea {
                border: 1px solid rgba(0,0,0,0.2);
                background: transparent;
                outline: none;
                font-size: 24px;
                padding: 15px;
                width: 100%;
                margin-bottom: 10px;
                border-radius: 5px;
            }
            label {
                margin-bottom: 8px;
                margin-top: 16px;
            }
            #submit-form {
                cursor: pointer;
                border: 1px solid rgba(0,0,0,0.2);
                margin-top: 50px;
                outline: none;
                background-color: #df1990;
                color: white;
                padding: 15px 40px;
                font-size: 20px;
                font-weight: bold;
                letter-spacing: 4px;
                margin-bottom: 50px;
                text-transform: uppercase;
            }
        </style>
        <?php
        return ob_get_clean();
    }

    function light_box( $atts, $content ) {
        return '<div class="article-box light-box cf">' . do_shortcode( wp_kses_post( $content ) ). '</div>';
    }

    function leksikon( $atts, $content ) {
        return '<div class="article-box leksikon cf">' . do_shortcode( wp_kses_post( $content ) ). '</div>';
    }

    function listikl( $atts, $content ) {
        return '<div class="article-box listikl cf">' . do_shortcode( wp_kses_post( $content ) ). '</div>';
    }

    function botun( $atts, $content ) {
        extract( shortcode_atts(
            array(
                'url' => ''
            ),
            $atts
        ));
        return '<a class="btn" target="_blank" href="' . $url . '">' . $content  . '</a>';
    }

    function native( $atts, $content ) {
        return '<div class="article-box native cf"><img src="' . get_template_directory_uri() . '/assets/media/icons/tg_studio.svg" width="70" />' . do_shortcode( wp_kses_post( $content ) ). '</div>';
    }

    function saloni($atts, $content) {
        ob_start();
        ?>
        <div class="saloni">
            <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.11/lodash.min.js"></script>
            <div id="app" class="flex">
                <div class="third">
                    <ul>
                        <li v-for="city in cities" :key="city" @click="selected_city=city">{{ city }}</li>
                    </ul>
                </div>
                <div class="third">
                    <ul v-if="selected_city">
                        <li v-for="salon in csalons" :key="salon.id" @click="selected_salon=salon">{{ salon.title }}</li>
                    </ul>
                </div>
                <div class="third">
                    <div v-if="csalons.length && selected_salon">
                        <h2>{{ selected_salon.title }}</h2>
                        <p v-for="address in selected_salon.address" :key="address.address">
                            {{ address.adresa }}, {{ address.grad }}
                        </p>
                        <p>
                            <strong>Najpopularnija metoda:</strong> {{ selected_salon.metoda }} <br>
                            <strong>Broj preporučenih tretmana:</strong> {{ selected_salon.tretmani }} <br>
                            <strong>Cijena:</strong> {{ selected_salon.cijena }} <br>
                            <strong>Napomena:</strong> {{ selected_salon.napomena }} <br>
                        </p>
                    </div>
                </div>
            </div>
            <?php
            global $wpdb;
            $cities_results = $wpdb->get_results("SELECT meta_value FROM wp_postmeta WHERE meta_key LIKE 'adresa_%_grad' AND meta_value Is NOT NULL AND meta_value <> '' GROUP by meta_value;");
            $cities = [];
            foreach ($cities_results as $city) {
                $cities[] = $city->meta_value;
            }
            $salons = [];
            $salon_query = new WP_Query([
                'posts_per_page' => -1,
                'post_type' => ['salon', 'poliklinika'],
                'ignore_sticky_posts' => true,
                'no_found_rows'       => true,
            ]);
            while ($salon_query->have_posts()) {
                $salon_query->the_post();
                $salons[] = [
                    'title' => $salon_query->post->post_title,
                    'id' => $salon_query->post->ID,
                    'address' => get_post_meta( get_the_ID(), 'adresa', $salon_query->post->ID, true ) ,
                    'metoda' => get_post_meta( get_the_ID(), 'najpopularnija_metoda', true ) ,
                    'tretmani' => get_post_meta( get_the_ID(), 'broj_preporucenih_tretmana', true ) ,
                    'cijena' => get_post_meta( get_the_ID(), 'cijena_tretmana', true ) ,
                    'napomena' => get_post_meta( get_the_ID(), 'napomena', true )
                ];

            }
            ?>
            <script>
                var app = new Vue({
                    el: '#app',
                    data: {
                        selected_city: '',
                        selected_salon: '',
                        cities: <?php echo wp_json_encode($cities) ?>,
                        salons: <?php echo wp_json_encode($salons) ?>
                    },
                    computed: {
                        csalons() {
                            if (this.selected_city) {
                                var city = this.selected_city;
                                return _.filter(this.salons, function(item) {
                                    var t = _.filter(item.address, function(address) {
                                        console.log(address.grad);
                                        return address.grad === city;
                                    });
                                    return t.length;
                                });
                            }
                            return [];
                        }
                    }
                })
            </script>
        </div>
        <?php
        $c = ob_get_contents();

        return $c;
    }

    function shop_category_guide() {
        return '<div id="guide-category-container"></div>';
    }

    function shop_guide() {
	    return '<div id="guide-container"></div>';
    }

    function telegram_quiz() {
        return '<div id="quiz-container"></div>';
    }

// Pogledaj galeriju
	function telegram_galerija($atts, $content) {
		$atts = shortcode_atts(array(
			'id' => 0,
			'url' => ''
		), $atts);
		if (!$atts['id'] && !$atts['url'])
			return '';
		$url = $atts['url'];
		$id = $atts['id'];
		if (!$url) {
			$url = get_permalink($id);
		}
		else {
			$id = url_to_postid($url);
		}
		ob_start();

		?>
        <a href="<?php echo $url ?>" class="gallery-link uppercase">
            <div class="inner">
                <div class="gallery-link-text">
                    <i class="fa fa-camera"></i>&nbsp;<span>Pogledaj<br> fotogaleriju</span>
                    <br>
                    <div class="decail"></div>
                </div>
            </div>
			<?php echo get_the_post_thumbnail($id, 'g1') ?>
        </a>
		<?php
		return ob_get_clean();
	}

	function action_admin_init() {
		if ( current_user_can( 'edit_posts' ) ) {
		//	add_filter( 'mce_buttons', array( $this, 'buttons' ), 99, 1 );
		//	add_filter( 'mce_external_plugins', array( $this, 'plugins' ) );
		}
	}

	function buttons( $buttons ) {
		if(($key = array_search('blockquote', $buttons)) !== false) {
			unset($buttons[$key]);
		}
		array_push( $buttons, 'separator', 'telegram_shortcodes', 'telegram_mali-video' );

		return $buttons;
	}

	function plugins( $plugins ) {
		$plugins['telegram_shortcodes'] = get_theme_root_uri() . '/telegram2-desktop/assets/js/mce-shortcodes.js?v=1.2';
		return $plugins;
	}

	function okvir($atts, $content) {
		return '<div class="tg-okvir">' . do_shortcode( wp_kses_post( $content ) ). '</div>';
    }

	function quote_box( $atts, $content ) {
		ob_start();
        ?>
        <div class="big-quote extra-width">
            <p><?php echo do_shortcode( $content ); ?></p>
        </div>

<?php
        return ob_get_clean();
	}

	function small_video_box( $atts, $content ) {
		global $wp_embed;
		global $telegram_smaller;
		$telegram_smaller = true;
		$width = 560;
		$height = 315;
		ob_start();
        ?>
            <?php echo  do_shortcode( '[youtube='.$content.'&w=560&h=315&t=11]' ); ?>
<?php
        return ob_get_clean();
	}

	function compare_box($atts, $content) {
		$img1 = intval($atts['img1']);
		$img2 = intval($atts['img2']);
		$size = 'g1';
		if (isset($atts['full']) && intval($atts['full'])) {
			$size = 'full';
		}
		$class = 'special-left cd-image-container';
		ob_start();
		?>

		<figure class="<?php echo $class; ?>">
			<img src="<?php echo wp_get_attachment_image_src($img2, $size)[0] ?>" style="width: 100%; height: auto;">
			<span class="cd-image-label" data-type="original"><?php echo esc_attr($atts['tekst2']) ?></span>

			<div class="cd-resize-img"> <!-- the resizable image on top -->
				<img src="<?php echo wp_get_attachment_image_src($img1, $size)[0] ?>">
				<span class="cd-image-label" data-type="modified"><?php echo esc_attr($atts['tekst1']) ?></span>
			</div>

			<span class="cd-handle"></span> <!-- slider handle -->
		</figure> <!-- cd-image-container -->
<?php
		return ob_get_clean();
	}

	function video($atts, $content) {
		extract( shortcode_atts(
			array(
				'poster' => '',
				'autoplay' => 1,
				'loop' => 1,
				'muted' => 1,
				'controls' => 0,
				'width' => 0,
				'height' => 0,
          'class' => '',
          'is_mobile_only' => 0,
          'is_desktop_only' => 0
			),
			$atts
		));
		if ( $is_mobile_only && !wp_is_mobile() ) {
		  return '';
	  }
		if ( $is_desktop_only && wp_is_mobile() ) {
		  return '';
	  }
		return '<video playsinline ' . ($autoplay?'autoplay ':'') .
		       ($loop?'loop ':'') .
		       ($muted?'muted ':'') .
		       ($controls?'controls ':'') .
		       ($poster?'poster='.esc_url($poster):'') .' ' .
		       ($width?'width='.intval($width):'') .' ' .
		       ($height?'height='.intval($height):'') .' ' .
		       ' class="native-video '.$class.'" style="'. ($width?'width:'.intval($width).'px;':'') . ($height?' height:'.intval($height).'px;':'') .'">
            <source type="video/mp4" src="' . esc_url($content) . '">
        </video>';


	}
}

new Telegram_Shortcodes();


