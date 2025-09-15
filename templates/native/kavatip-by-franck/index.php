<?php
require_once 'header.php';
?> 
        
        <!-- Prije Kviz -->
        <section class="full flex relative white-bg">
            <div class="container center relative column-full-pad more-space">
                <h2 class="full center-text">Riješi kviz i saznaj koji si kavatip!</h2>
                <img class = "full strijela absolute" src="<?php echo $native_path ?>assets/placeholders/arrow.png" alt="arrow">
                <img class = "full tape absolute" src="<?php echo $native_path ?>assets/placeholders/tape.png" alt="tape">
            </div>
        </section>
        <!-- KVIZ -->
        <section class="full center flex relative kviz">
            <div class="container center relative column-full-pad">
                <!-- slide 1 -->
                <div class="full center wrap relative slide active" data-slide ="1">
                    <p class="full center-text">1/10</p>
                    <h3 class="full center-text">Tvoj jutarnji scenarij izgleda ovako:</h3>
                    <button class = "two-thirds answer" data-category="typeA">Ekspresna priprema kave i odmah u novi dan.</button>
                    <button class = "two-thirds answer" data-category="typeB">Kava iz omiljene šalice, poznat okus i rutina koja nikad ne razočara.</button>
                    <button class = "two-thirds answer" data-category="typeC">Tišina, opuštanje i dobra knjiga uz šalicu kave.</button>
                    <button class = "two-thirds answer" data-category="typeD">Sve mora biti po mom od vaganja do mljevenja kave.</button>
                    <button class = "two-thirds answer" data-category="typeE">Kava s nogu u društvu kolega na poslu ili faksu.</button>
                </div>
            <!-- slide 2 -->
                <div class="full center wrap relative slide" data-slide ="2">
                    <p class="full center-text">2/10</p>
                    <h3 class="full center-text">Tvoj jutarnji scenarij izgleda ovako:</h3>
                    <button class = "two-thirds answer" data-category="typeA">Blizina stana, poznata atmosfera i kava točno onakva kakvu volim.</button>
                    <button class = "two-thirds answer" data-category="typeB">Da je moderan, s dobrom kavom i još boljim kolačima.</button>
                    <button class = "two-thirds answer" data-category="typeC">Volim da ima miran kutak gdje mogu nestati na sat-dva.</button>
                    <button class = "two-thirds answer" data-category="typeD">Ako ne znaju razliku između Arabice i Robuste, izlazim.</button>
                    <button class = "two-thirds answer" data-category="typeE">Mjesto gdje ne čekam predugo i gdje kava stigne čim sjednem.</button>
                </div>
            <!-- slide 3 -->
                <div class="full center wrap relative slide" data-slide ="3">
                    <p class="full center-text">3/10</p>
                    <h3 class="full center-text">Tvoj jutarnji scenarij izgleda ovako:</h3>
                    <button class = "two-thirds answer" data-category="typeA">Klasična bijela porculanska.</button>
                    <button class = "two-thirds answer" data-category="typeB">Elegantna, keramička, ručno rađena.</button>
                    <button class = "two-thirds answer" data-category="typeC">Što šarenije i veselije to bolje.</button>
                    <button class = "two-thirds answer" data-category="typeD">Mala staklena šalica za espresso.</button>
                    <button class = "two-thirds answer" data-category="typeE">Termo šalica za ponijeti.</button>
                </div>
            <!-- slide 4 -->
                <div class="full center wrap relative slide" data-slide ="4">
                    <p class="full center-text">4/10</p>
                    <h3 class="full center-text">Tvoj jutarnji scenarij izgleda ovako:</h3>
                    <button class = "two-thirds answer" data-category="typeA">S prijateljem koji nikad ne kasni.</button>
                    <button class = "two-thirds answer" data-category="typeB">Sam, dok pregledavam mailove na mobitelu.</button>
                    <button class = "two-thirds answer" data-category="typeC">S prijateljicom s kojom jedna kava traje tri sata.</button>
                    <button class = "two-thirds answer" data-category="typeD">S partnerom koji mi svako jutro pripremi kavu s pažnjom.</button>
                    <button class = "two-thirds answer" data-category="typeE">S kolegama između dva sastanka ili predavanja.</button>
                </div>
            <!-- slide 5 -->
                <div class="full center wrap relative slide" data-slide ="5">
                    <p class="full center-text">5/10</p>
                    <h3 class="full center-text">Tvoj jutarnji scenarij izgleda ovako:</h3>
                    <button class = "two-thirds answer" data-category="typeA">Uzimam pauzu i pokušavam duboko disati.</button>
                    <button class = "two-thirds answer" data-category="typeB">Odmah tražim brzo rješenje.</button>
                    <button class = "two-thirds answer" data-category="typeC">Maknem se od svega i nazovem prijatelje da se malo ispričamo i nasmijemo.</button>
                    <button class = "two-thirds answer" data-category="typeD">Vraćam se poznatim ritualima i navikama, podsjećam se da je sve rješivo.</button>
                    <button class = "two-thirds answer" data-category="typeE">Ne mirujem, istražujem što bi me moglo izvući iz toga.</button>
                </div>
            <!-- slide 6 -->
                <div class="full center wrap relative slide" data-slide ="6">
                    <p class="full center-text">6/10</p>
                    <h3 class="full center-text">Tvoj jutarnji scenarij izgleda ovako:</h3>
                    <button class = "two-thirds answer" data-category="typeA">Miris doma.</button>
                    <button class = "two-thirds answer" data-category="typeB">Izraz osobnosti i prilika za istraživanje.</button>
                    <button class = "two-thirds answer" data-category="typeC">Druženje, smijeh i kratki bijeg od svega.</button>
                    <button class = "two-thirds answer" data-category="typeD">Jutarnja rutina i vrijeme za mene.</button>
                    <button class = "two-thirds answer" data-category="typeE">Brza doza fokusa i energije.</button>
                </div>
            <!-- slide 7 -->
                <div class="full center wrap relative slide" data-slide ="7">
                    <p class="full center-text">7/10</p>
                    <h3 class="full center-text">Tvoj jutarnji scenarij izgleda ovako:</h3>
                    <button class = "two-thirds answer" data-category="typeA">Uz dobru knjigu ili omiljenu seriju.</button>
                    <button class = "two-thirds answer" data-category="typeB">Volim otkrivati nove stvari i planirati sljedeće putovanje.</button>
                    <button class = "two-thirds answer" data-category="typeC">Družim se s prijateljima.</button>
                    <button class = "two-thirds answer" data-category="typeD">Učim, treniram, razvijam se i tako punim baterije.</button>
                    <button class = "two-thirds answer" data-category="typeE">Aktivno i spontano, volim kad dan nije unaprijed isplaniran.</button>
                </div>
            <!-- slide 8 -->
                <div class="full center wrap relative slide" data-slide ="8">
                    <p class="full center-text">8/10</p>
                    <h3 class="full center-text">Tvoj jutarnji scenarij izgleda ovako:</h3>
                    <button class = "two-thirds answer" data-category="typeA">Hermione Granger – promišljena, organizirana i zna točno što želi.</button>
                    <button class = "two-thirds answer" data-category="typeB">Indiana Jones – znatiželjan, nepredvidiv, vječni avanturist.</button>
                    <button class = "two-thirds answer" data-category="typeC">Chandler Bing – duhovit, opušten i nikad ne propušta priliku za dobru šalu.</button>
                    <button class = "two-thirds answer" data-category="typeD">Sherlock Holmes - fokusiran, metodičan i potpuno u svom svijetu.</button>
                    <button class = "two-thirds answer" data-category="typeE">James Bond - praktičan, snalažljiv i uvijek korak ispred svih.</button>
                </div>
            <!-- slide 9-->
                <div class="full center wrap relative slide" data-slide ="9">
                    <p class="full center-text">9/10</p>
                    <h3 class="full center-text">Tvoj jutarnji scenarij izgleda ovako:</h3>
                    <button class = "two-thirds answer" data-category="typeA">Prostor koji ne odvlači pažnju i u kojem se lako fokusiram.</button>
                    <button class = "two-thirds answer" data-category="typeB">Prostor pun boja, inspirativnih detalja i kreativnog nereda.</button>
                    <button class = "two-thirds answer" data-category="typeC">Coworking prostor gdje mogu raditi, pričati i popiti kavu s ekipom.</button>
                    <button class = "two-thirds answer" data-category="typeD">Udoban kutak gdje mi je sve nadohvat ruke.</button>
                    <button class = "two-thirds answer" data-category="typeE">Radni kutak s dobrom rasvjetom i mojim pravilima.</button>
                </div>
            <!-- slide 10 -->
                <div class="full center wrap relative slide" data-slide ="10">
                    <p class="full center-text">10/10</p>
                    <h3 class="full center-text">Tvoj jutarnji scenarij izgleda ovako:</h3>
                    <button class = "two-thirds answer" data-category="typeA">Svaki dan.</button>
                    <button class = "two-thirds answer" data-category="typeB">Kupujem kad god stignem. Brzo, praktično i bez puno razmišljanja.</button>
                    <button class = "two-thirds answer" data-category="typeC">Kad mi nešto zatreba, ne planiram unaprijed.</button>
                    <button class = "two-thirds answer" data-category="typeD">Jednom mjesečno. Volim sve detaljno isplanirati i napraviti zalihe.</button>
                    <button class = "two-thirds answer" data-category="typeE">Sve naručujem online, bez gubljenja vremena.</button>
                </div>
             <!-- Email slide -->
            <div class="slide email-slide center wrap" data-slide="11">
                <h3 class = "full center-text">Hvala na unesenim<br>odgovorima!</h3>
                <p class = "full center-text">Zanima te koji si kavatip?<br>Personalizirani rezultat šaljemo na tvoju e-mail adresu.</p>
                <div class="email-form center full">
                    <input class = "third" type="email" id="emailInput" placeholder="vasa.email@example.com" required>
                    <button id="submitEmail">Pošaljite</button>
                </div>
            </div>
            <!-- Thank You Slide -->
                <div class="slide thank-you-slide center wrap" data-slide="12">
                    <img class = "full kava" src="<?php echo $native_path ?>assets/placeholders/kava.svg" alt="kava">
                    <h3 class = "full center-text">Rezultati su poslani na<br>tvoju e-mail adresu!</h3>
                    <button id="restartQuiz">Igrajte ponovo</button>
                </div>
            </div>
        </section>
        <div class="full divider"></div>
        <section class="full flex relative">
            <a class="full flex relative flex-responsive stretch-height" target = "_blank" href = "https://shop.franck.eu/hr/pogodnosti-franck-cluba/?utm_medium=display&utm_source=telegram&utm_campaign=loyalty&utm_content=kviz&utm_term=croatia_web_loyalty_telegram_kviz">
                <!-- <img src="<?php echo $native_path ?>assets/placeholders/franck-club.webp" aria-hidden="true"> -->
                <picture>
                    <source srcset="<?php echo $native_path ?>assets/placeholders/franck-club.webp" type="image/webp">
                    <img src="<?php echo $native_path ?>assets/placeholders/franck-club.jpg" 
                        alt="Franck club">
                </picture>
            </a>
        </section>

        <?php
        require_once 'footer.php';
        ?>