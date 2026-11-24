<section id="adventski-vodic" aria-labelledby="guideTitle">
    <div id="guideIntro">
        <div class="guide-heading">
            <p class="eyebrow">Blagdanski specijal</p>
            <h2 id="guideTitle">Adventski vodič</h2>
            <p class="hand">S Borkom na putovanju dobrih priča.</p>
            <p class="intro">Kreni s nama kroz hrvatske gradove. Na svakoj stanici čekaju te nove ideje.</p>
        </div>
    </div>
    <section class="stage map-stage" id="map" aria-label="Karta adventskog vodiča">
        <!-- Putanja #route je u koordinatama karte 1536 × 1024; slika i SVG moraju zadržati isti omjer. -->
        <svg viewBox="0 0 1536 1024" role="img" aria-label="Borko vozi vlak s poklonima po adventskoj pruzi">
            <defs>
                <path id="route" d="M 320 353 C 440 361 540 342 690 347 S 970 372 1110 378 C 1270 383 1369 408 1377 477 C 1387 556 1260 590 1110 598 C 910 608 700 603 490 613 C 320 620 205 657 200 720 C 191 778 259 811 330 866 C 389 928 540 922 680 925 C 865 927 980 917 1080 901 Q 1150 887 1210 889" />
            </defs>
            <g id="train">
                <image href="<?php echo esc_url($assets . '/borko-vlak-pokloni.webp'); ?>" x="-105" y="-102" width="210" height="107" />
            </g>
        </svg>
        <div id="stations"></div>
    </section>
    <p class="map-caption">Od Zagreba do Dubrovnika, svaka stanica skriva novu priču. Klikni na ime grada i istraži Borkove prijedloge.</p>
    <section class="stories winter-stories" aria-labelledby="winterTitle">
        <div class="section-head">
            <div>
                <p class="eyebrow">Iz adventskog vodiča</p>
                <h2 id="winterTitle">Zimske aktivnosti</h2>
            </div>
            <div class="carousel-tools">
                <p id="winterCount"></p>
                <div class="carousel-arrows">
                    <button class="carousel-arrow" id="previousWinter" type="button" aria-label="Prethodne zimske aktivnosti" aria-controls="winterGrid">←</button>
                    <button class="carousel-arrow" id="nextWinter" type="button" aria-label="Sljedeće zimske aktivnosti" aria-controls="winterGrid">→</button>
                </div>
            </div>
        </div>
        <div class="story-grid" id="winterGrid" tabindex="0" aria-label="Zimske aktivnosti — listaj lijevo ili desno"></div>
    </section>
</section>
