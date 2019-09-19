<?php

class Telegram_HT_Desktop extends WP_Widget
{

    private $articles = [
	    [
		    'link' => 'https://gdehr.hit.gemius.pl/lshitredir/id=S.qhio5nzIr1QjbwNH9mRBnS7DabH1Ctoz5s4beq7q7.U7/fastid=nvkqroedovrlmckzcuzuhcobmzna/stparam=rfgkkketwj/nc=0/gdpr=0/gdpr_consent=/url=https://izsvijetaboljihmogucnosti.t.ht.hr/smart-life/?utm_source=telegram&utm_medium=display&utm_campaign=smart-life-launch-pmg&utm_term=smart-life&utm_content=widget',
		    'short_title' => 'Tehnologija koja nam je u tri dana uštedila 8320 kuna',
		    'image' => 714235,
		    'category' => 'SMART MONEY'
	    ],
	    [
		    'link' => 'https://gdehr.hit.gemius.pl/lshitredir/id=S.qhio5nzIr1QjbwNH9mRBnS7DabH1Ctoz5s4beq7q7.U7/fastid=nvkqroedovrlmckzcuzuhcobmzna/stparam=rfgkkketwj/nc=0/gdpr=0/gdpr_consent=/url=https://izsvijetaboljihmogucnosti.t.ht.hr/smart-life/?utm_source=telegram&utm_medium=display&utm_campaign=smart-life-launch-pmg&utm_term=smart-life&utm_content=widget',
		    'short_title' => 'Kako se hranimo zdravije i štedimo uz tehnologije ',
		    'image' => 714237,
		    'category' => 'SMART EAT'
	    ],
	    [
		    'link' => 'https://gdehr.hit.gemius.pl/lshitredir/id=S.qhio5nzIr1QjbwNH9mRBnS7DabH1Ctoz5s4beq7q7.U7/fastid=nvkqroedovrlmckzcuzuhcobmzna/stparam=rfgkkketwj/nc=0/gdpr=0/gdpr_consent=/url=https://izsvijetaboljihmogucnosti.t.ht.hr/smart-life/?utm_source=telegram&utm_medium=display&utm_campaign=smart-life-launch-pmg&utm_term=smart-life&utm_content=widget',
		    'short_title' => 'Obnovili smo stan i uštedjeli 15.000 kuna! ',
		    'image' => 714878,
		    'category' => 'SMART DESIGN'
	    ],
	    [
		    'link' => 'https://gdehr.hit.gemius.pl/lshitredir/id=S.qhio5nzIr1QjbwNH9mRBnS7DabH1Ctoz5s4beq7q7.U7/fastid=nvkqroedovrlmckzcuzuhcobmzna/stparam=rfgkkketwj/nc=0/gdpr=0/gdpr_consent=/url=https://izsvijetaboljihmogucnosti.t.ht.hr/smart-life/?utm_source=telegram&utm_medium=display&utm_campaign=smart-life-launch-pmg&utm_term=smart-life&utm_content=widget',
		    'short_title' => 'Pet dana na Oktoberfestu spavamo za nula kuna',
		    'image' => 714232,
		    'category' => 'SMART FUN'
	    ]
    ];

    public function __construct()
    {
        parent::__construct('tg_ht_desktop', 'Telegram: HT desktop',
            array(
                'description' => 'Urednički odabir pet top članaka u danu',
            ));
    }

    public function widget($args, $instance)
    {
        if (jetpack_is_mobile()) {
            $this->mobile();
        }
        else {
            $this->desktop();
        }
    }

    private function desktop() {
	    ?>

        <div class="tg-widget rainbow-widget top-vijesti container">
            <div class="tg-widget-body cf">
			    <?php
			    $this->cta();

			    foreach ($this->articles as $article) {
				    $this->article($article);
			    }
			    ?>
            </div>
        </div>

	    <?php
    }

    private function cta() {
        ?>
        <article class="article-rainbow-block">
            <div class="thumb">
                <a href="https://gdehr.hit.gemius.pl/lshitredir/id=S.qhio5nzIr1QjbwNH9mRBnS7DabH1Ctoz5s4beq7q7.U7/fastid=nvkqroedovrlmckzcuzuhcobmzna/stparam=rfgkkketwj/nc=0/gdpr=0/gdpr_consent=/url=https://izsvijetaboljihmogucnosti.t.ht.hr/smart-life/?utm_source=telegram&utm_medium=display&utm_campaign=smart-life-launch-pmg&utm_term=smart-life&utm_content=widget" target="_blank">
                <div class="overlay"></div>
                <img src="https://www.telegram.hr/wp-content/uploads/2019/09/tg-widget-2.jpg" width="280" height="230">
                </a>
            </div>
        </article>
        <script>
            var el = new Image();
            el.src= 'https://gdehr.hit.gemius.pl/_'+ (new Date().getTime()) +'/redot.gif?id=S.qhio5nzIr1QjbwNH9mRBnS7DabH1Ctoz5s4beq7q7.U7/fastid=jrseesueytoauubgdbuqjuuiozmw/stparam=xdindqqjgt/nc=0/gdpr=0/gdpr_consent=';
            el.width = 1;
            el.height = 1;
            document.getElementsByTagName('body')[0].appendChild(el);
        </script>
	    <?php
    }

    private function article($article) {
        ?>
        <article class="article-rainbow-block">
            <div class="thumb">
                <div class="overlay"></div>
			    <?php
			    // Thumbsize: 280x230 px
			    echo wp_get_attachment_image($article['image'], 'fourth');
			    ?>
            </div>
            <div class="titles">
                <div class="article-meta">
            <span class="rcmds">
                <?php echo $article['category']; ?>
            </span>
                </div>
                <h1 class="title">
                    <a href="<?php echo $article['link']; ?>" target="_blank">
					    <?php
					    echo $article['short_title'];
                        ?>
                    </a>
                </h1>

            </div>
        </article>
        <?php
    }

    private function mobile() {
        ?>
        <div class="tg-widget rainbow-widget procitajte-danas ht" style="margin-bottom: 30px;">
            <div class="tg-widget-head">
                SMART LIFE
            </div>
            <div class="tg-widget-body">
			    <?php
                foreach ($this->articles as $article) {
                    $this->mobile_article($article);
			    }
			    ?>
            </div>
        </div>
        <?php
    }

    private function mobile_article($article) {
        ?><article class="article-rainbow-small">
        <div class="thumb">
            <div class="overlay"></div>
		    <?php
		    // Thumbsize: 190x120 px
		    echo wp_get_attachment_image($article['image'], 'article-rainbow-small');
		    ?>
        </div>
        <div class="titles">
            <h1 class="title">
                <a href="<?php echo $article['link'] ?>">
				    <?php echo $article['short_title'] ?>
                </a>
            </h1>
            <div class="article-meta">

            </div>
        </div>
        </article><?php
    }
}

register_widget( 'Telegram_HT_Desktop' );
