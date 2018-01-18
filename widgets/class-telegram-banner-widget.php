<?php

class Telegram_Banner_Widget extends WP_Widget {

	private $banners = array(
		'naslovnica' => array(
			'master' => 'heBbtlCQ_BL0HDORhgCnrJHXo_qvfZHbV_AWrYp_ukz.v7',
			'zones' => array(
				'300x250-1' => 'adoceanrswejrbinjys',
				'300x250-2' => 'adoceanrstfqhfvgoin',
				//'billboard' => 'adoceanrspceohqplzd',
				'billboard1' => 'adoceanrsmnlshqmpts',
				'billboard' => 'adoceanrsmnlshqmpts',
				'floater' => 'adoceanrszdclokdfox',
				'470' => 'adoceanrsnhoempkhxh',
				'wallpaper-left' => 'adoceanrsmdlelnjquy',
				'wallpaper-right' => 'adoceanrszedpfsitmb',
				'skripte' => 'adoceanrsmpcieljmok'
			)
		),
		'politika-kriminal' => array(
			'master' => 'xKJRth0lHGkMLaFLsuE7MegVf41Ysm7Gok1RAXOb7lf.E7',
			'zones' => array(
				'300x250-1' => 'adoceanrslmilqoftlh',
				'300x250-2' => 'adoceanrsymprdmphug',
				//'billboard' => 'adoceanrsximrckoqrx',
				'billboard1' => 'adoceanrszncjlnguon',
				'billboard' => 'adoceanrszncjlnguon',
				'floater' => 'adoceanrsolrenrloqm',
				'wallpaper-left' => 'adoceanrsrkkojurjvr',
				'wallpaper-right' => 'adoceanrswfkfjpshga',
				'under-article' => 'adoceanrssonokwsqow',
				'intext' => 'adoceanrsvngihjjmab',
				'skripte' => 'adoceanrszpjohidrnf'
			)
		),
		'biznis-tech' => array(
			'master' => 'K3I1eics3Vi.KJqQu5yTO_Nrf_bqrG8ffhSaTqyFQtP.m7',
			'zones' => array(
				'300x250-1' => 'adoceanrsrhlfqxotbf',
				'300x250-2' => 'adoceanrsoicmdviire',
				//'billboard' => 'adoceanrskfgsfqrfxu',
				'billboard' => 'adoceanrsvkgpniprud',
				'billboard1' => 'adoceanrsvkgpniprud',
				'floater' => 'adoceanrsugepmkfpck',
				'wallpaper-left' => 'adoceanrsxfnijnlkhp',
				'wallpaper-right' => 'adoceanrsscollklfxq',
				'under-article' => 'adoceanrsyjqikpmrau',
				'intext' => 'adoceanrsljjsgssmqz',
				'skripte' => 'adoceanrsvmnektlotv'
			)
		),
		'kultura' => array(
			'master' => '_olAljRZh3JJt11pPEvo1PT7UXRdlidUP3JqG8eC_4..A7',
			'zones' => array(
				'300x250-1' => 'adoceanrsxcoppqiucd',
				'300x250-2' => 'adoceanrsudfgdosisc',
				//'billboard' => 'adoceanrsqajmfjlgjs',
				'billboard' => 'adoceanrspmemetskjx',
				'billboard1' => 'adoceanrspmemetskjx',
				'floater' => 'adoceanrskchjmtopdi',
				'wallpaper-left' => 'adoceanrsnbqsiwelin',
				'wallpaper-right' => 'adoceanrsmemicvoocg',
				'under-article' => 'adoceanrsofdtjigsxs',
				'intext' => 'adoceanrsremmglmncx',
				'skripte' => 'adoceanrspolrqnphxp'
			)
		),
		'sport' => array(
			'master' => 'HPfnm_OWd12hu7xEl_zrsB_2wpE5IZ3uKRXtFJDyBRn.i7',
			'zones' => array(
				'300x250-1' => 'adoceanrswbkiilkteg',
				'300x250-2' => 'adoceanrstcrolieiyf',
				//'billboard' => 'adoceanrsppefotmfev',
				'billboard1' => 'adoceanrswojpokqixm',
				'billboard' => 'adoceanrswojpokqixm',
				'floater' => 'adoceanrszadseoqojl',
				'wallpaper-left' => 'adoceanrsmamlbrgkkq',
				'wallpaper-right' => 'adoceanrstgrlmmmmqv',
				'under-article' => 'adoceanrsneplcthrdv',
				'intext' => 'adoceanrsqdifpvnmia',
				'skripte' => 'adoceanrswarelvmfhe'
			)
		),
		'price' => array(
			'master' => 'aHEM5w4.7SmmoWPE9JS2hQ8aY11pFxKdybhWjXFCu.H.97',
			'zones' => array(
				'300x250-1' => 'adoceanrsmnmshuduue',
				'300x250-2' => 'adoceanrszndjlrniod',
				//'billboard' => 'adoceanrsvkhpnmggft',
				'billboard1' => 'adoceanrstpqfcikndh',
				'billboard' => 'adoceanrstpqfcikndh',
				'floater' => 'adoceanrspmfmexjpkj',
				'wallpaper-left' => 'adoceanrsslofbkqkao',
				'wallpaper-right' => 'adoceanrsqhispjgrlq',
				'under-article' => 'adoceanrstprfcmrrtt',
				'intext' => 'adoceanrswokpoohnyy',
				'skripte' => 'adoceanrstbilosgkcz'
			)
		),
		'zivot' => array(
			'master' => 'CBRKyl4_82bFU2iDCbKLrQqfECib70LqWmqDQ4W1KPH.h7',
			'zones' => array(
				'300x250-1' => 'adoceanrssipmhnnuvc',
				'300x250-2' => 'adoceanrspjgtkkhjab',
				//'billboard' => 'adoceanrslgkjnvpggr',
				'billboard1' => 'adoceanrsqaimfvdsyc',
				'billboard' => 'adoceanrsqaimfvdsyc',
				'floater' => 'adoceanrsvhigeqdqwh',
				'wallpaper-left' => 'adoceanrsygrpqsjlfm',
				'wallpaper-right' => 'adoceanrsnipidxpffp',
				'under-article' => 'adoceanrszkeqbvksur',
				'intext' => 'adoceanrsmknjoxqnzw',
				'skripte' => 'adoceanrsqcprbqqomu'
			)
		),
		'fotogalerije' => array(
			'master' => '2Kb3XN3319vV4WvcD4a7OpvXDSr_3Ke1ZRp44ul6TYH._7',
			'zones' => array(
				'300x250-1' => 'adoceanrsnoqjpjsudb',
				'300x250-2' => 'adoceanrskphqcxljia',
				//'billboard' => 'adoceanrswllgfsehzq',
				'billboard1' => 'adoceanrsslnfbwigzc',
				'billboard' => 'adoceanrsslnfbwigzc',
				'floater' => 'adoceanrsqnjtlmiqtg',
				'wallpaper-left' => 'adoceanrstmcnipoljl',
				'wallpaper-right' => 'adoceanrspdfsoxekhl',
				'under-article' => 'adoceanrsxpoggufosv',
				'skripte' => 'adoceanrssnelnqftoq'
			)
		),
		'mobile' => array(
			'master' => 'zXOq_eMhA5yW6.1l6QLRaomsTkzw0luT9cUuYerF86v.f7',
			'zones' => array(
				'300x250-1' => 'adoceanrsxmpnmxshmn',
				'300x250-2' => 'adoceanrsronkdsgrnd',
				'300x250-3' => 'adoceanrsopergpqfhc',
				'floater' => 'adoceanrslamhkmkknx',
				'skripte' => 'adoceanrsuepplkrkrg'
			)
		)
	);

	private $mobile_banners = [
		'naslovnica' => [
			'master' => '9PcFaf.v7ZjuYDU225DHC4DV87lXSbJE4wVZ3wg8g1D.37',
			'zones' => [
				'300x250-1' => 'adoceanrsxfdfnlskdb',
				'300x250-2' => 'adoceanrsugklqimpnw',
				'300x250-3' => 'adoceanrsrhrrdwfuxr',
				'floater' => 'adoceanrsoiiihtpicq',
				'skripte' => 'adoceanrsljpokqjnml'
			]
		],
		'politika-kriminal' => [
			'master' => 'BKA2.Y1IgmK88MtDPzVS7mRfcBiC_wMoz4AAXWIYvJf.l7',
			'zones' => [
				'300x250-1' => 'adoceanrsvknlblngbf',
				'300x250-2' => 'adoceanrssleseihlwa',
				'300x250-3' => 'adoceanrspmliivqpvv',
				'floater' => 'adoceanrsmncplskuqq',
				'skripte' => 'adoceanrsznjfppejkp'
			]
		],
		'biznis-tech' => [
			'master' => 'f0gx36ksXLHDSJcSIp1kdAyf4VU_fMdWFYdNyk_s5lX.P7',
			'zones' => [
				'300x250-1' => 'adoceanrsldrmhxdrir',
				'300x250-2' => 'adoceanrsyditkunfrq',
				'300x250-3' => 'adoceanrsvepjorhkml',
				'floater' => 'adoceanrssfgqbprohg',
				'skripte' => 'adoceanrspgngfmltcb'
			]
		],
		'kultura' => [
			'master' => 'M52bQVpFSHWMnK6AeJyqN3VEjM4dFJAVWdg86RXFCwv.x7',
			'zones' => [
				'300x250-1' => 'adoceanrszhltlwomkv',
				'300x250-2' => 'adoceanrswickptirqq',
				'300x250-3' => 'adoceanrstjjqcrsfkp',
				'floater' => 'adoceanrsqkqggomkfk',
				'skripte' => 'adoceanrsnlhnjlgpaf'
			]
		],
		'sport' => [
			'master' => '1YUGFn.CkuLudaAqtSuyrjSq.rvi3TseiZ1IH3GnWDj.H7',
			'zones' => [
				'300x250-1' => 'adoceanrsnoggdijffr',
				'300x250-2' => 'adoceanrskpnmgvsjtm',
				'300x250-3' => 'adoceanrsxpetjsmodh',
				'floater' => 'adoceanrsuamjnpgtjc',
				'skripte' => 'adoceanrsrbdqqmqhdb'
			]
		],
		'price' => [
			'master' => 'Nv1XrCsv5_Q6nOsHcYpeRZLhvd96.obnDnZVPDxGkf7.V7',
			'zones' => [
				'300x250-1' => 'adoceanrstphsfkispf',
				'300x250-2' => 'adoceanrsqapijxrgje',
				'300x250-3' => 'adoceanrsnbgpmullez',
				'floater' => 'adoceanrskcnfqrfqzu',
				'skripte' => 'adoceanrsxcemdppujp'
			]
		],
		'zivot' => [
			'master' => '0ibm8Sdw0roKZcT9EeM.73xwLx0urk93lTYqMO96Q93.Q7',
			'zones' => [
				'300x250-1' => 'adoceanrsrecjkjdojj',
				'300x250-2' => 'adoceanrsofjpnwmsxe',
				'300x250-3' => 'adoceanrslgqfbughnd',
				'floater' => 'adoceanrsyghmerqlmy',
				'skripte' => 'adoceanrsvhoshokqwt'
			]
		],
		'fotogalerije' => [
			'master' => 'gl_gJgbNl_oqK5bzkPJ.sfDqH0BH5K8dtlL0YKUMS9r.f7',
			'zones' => [
				'300x250-1' => 'adoceanrspjmpoiojln',
				'300x250-2' => 'adoceanrsmkdgcwhori',
				'300x250-3' => 'adoceanrszkkmftrsfd',
				'floater' => 'adoceanrswlrsiqlhzc',
				'skripte' => 'adoceanrstmijmnfmfx'
			]
		]
	];

	public function __construct() {
		parent::__construct( 'tg_banner_widget', 'Telegram: Banner widget',
			array(
			'description' => 'Banner Widget širine 300px za bannere 300x250, 300x600 i više',
		) );
	}

	public function widget( $args, $instance ) {
		if (get_query_var('audit')) {
			return false;
		}
		$category = isset( $instance['category']) ? $instance['category'] : '';
		$size = isset( $instance['size'] ) ? $instance['size'] : '300x250-1';

		if ( (isset($_COOKIE['akm_mobile']) && 'true' == $_COOKIE['akm_mobile']) || jetpack_is_mobile() ) {
			$banners = $this->mobile_banners;
		}
		else {
			$banners = $this->banners;
		}
		if ( is_single() ) {
			if ( get_post_type() == 'fotogalerije'  ) {
				$category = 'fotogalerije';
			}
			else if (get_post_type() == 'price') {
				$category = 'price';
			}
			else {
				$cat = get_the_category();
				$cat = $cat[0];
				while ( $cat->parent ) {
					$cat = get_category( $cat->parent );
				}
				$category = $cat->slug;
			}
		}
		else if ( is_category() ) {
			$cat = get_category( get_query_var( 'cat' ) );
			while ( $cat->parent ) {
				$cat = get_category( $cat->parent );
			}
			$category = $cat->slug;
		}

		if ( ! $category ) {
			$category = 'naslovnica';
		}
		if ( ! $size ) {
			$size = '300x250-1';
		}
		if ($category == 'promo') {
			$category = 'naslovnica';
		}
		$id = $banners[ $category ]['zones'][ $size ];
		$master = $banners[ $category ]['master'];
		if ( $id && $master ) {
			switch ( $size ) {
				case 'billboard1':
				case 'billboard':
					//if (in_array(get_post_type(), array('post', 'fotogalerije'))) {
						?>
						<div class="billboard">
							<?php $this->banner_slave( $id, $master ); ?>

						</div>
					<?php
					//}
					break;
				case 'wallpaper-left':
					//if (in_array(get_post_type(), array('post', 'fotogalerije'))) {
						?>
						<div class="wallpaper wallpaper-left fixed">

							<?php $this->banner_slave( $id, $master ) ?>

						</div>
					<?php
					//}
					break;
				case 'wallpaper-right':
					//if (in_array(get_post_type(), array('post', 'fotogalerije'))) {
						?>
						<div class="wallpaper wallpaper-right fixed">

							<?php $this->banner_slave( $id, $master ) ?>

						</div>
					<?php
					//}
					break;
                case 'intext':
	                ?>
	                <div class="banner-intext intext">
		                <?php $this->banner_slave( $id, $master ) ?>
	                </div>
	                <?php
	                break;
                case 'under-article':
					?>
					<div class="banner-intext">
						<?php $this->banner_slave( $id, $master ) ?>
					</div>
					<?php
					break;
				case 'skripte':
					 $this->banner_slave($id, $master);
					break;
				default:
					?>
					<div class="banner">
						<?php $this->banner_slave( $id, $master ); ?>
					</div>
					<?php
					break;
			}
		}
	}

	function banner_slave($id, $master) {
		?>
		<!-- start slave -->
		<div id="<?php echo esc_html( $id ) ?>"></div>
		<script type="text/javascript">
			/* (c)AdOcean 2003-2014, NET.HR.Telegram.hr.Telegram.hr */
			ado.slave('<?php echo esc_html( $id ) ?>', {myMaster: '<?php echo esc_html( $master ) ?>' });
		</script>
		<!--  end slave  -->
	<?php
	}

	function update( $new_instance, $instance ) {
		$instance['size']  = strip_tags( $new_instance['size'] );


		return $instance;
	}

	function form( $instance ) {

		//ovo je samo primjer za formu unutar admina
		$size  = empty( $instance['size'] ) ? '' : esc_attr( $instance['size'] );

		?>
			<p><label for="<?php echo esc_attr( $this->get_field_id( 'size' ) ); ?>">Veličina</label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'size' ) ); ?>" class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'size' ) ); ?>" type="text" value="<?php echo esc_attr( $size ); ?>"></p>


		<?php
	}
}

register_widget( 'Telegram_Banner_Widget' );
