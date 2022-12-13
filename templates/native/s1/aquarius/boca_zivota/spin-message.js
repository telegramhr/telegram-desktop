
    var spins = 0;
    var people = [
		"<h2>Istina</h2><p>Magnezij doprinosi smanjenju umora, a cink doprinosi normalnoj funkciji imunološkog sustava. Jedna bočica Aquarius vode nadoknađuje min. 30% dnevnog unosa minerala, cinka ili magnezija.</p>",
		"<h2>Istina</h2><p>Preporuke za dnevnu potrebu tekućine (uključujući vodu kao i ostale tekućine unesene hranom i drugim napitcima) iznosi 3,0 litre za muškarce i 2,2 l za žene.</p>",
		"<h2>Istina</h2><p>Unošenje previše vode u organizam u prekratkom roku može dovesti do intoksikacije vodom. Do intoksikacije dolazi kada voda razrijedi količinu natrija u krvi i tako uzrokuje disbalans vode u mozgu. Dozirajte unos vode u danu.</p>",
		"<h2>Istina</h2><p>Cink u našem tijelu, skraćuje vrijeme trajanja virusnih infekcija.</p>",
		"<h2>Istina</h2><p>Cink pomaže smanjenju kolesterola.</p>",
		"<h2>Izazov</h2><p>Napravi šetnju danas nakon posla. Bitno je prošetati minimalno 15 minuta i nemoj zaboraviti ponijeti bočicu vode sa sobom.</p>",
		"<h2>Izazov</h2><p>Danas prije spavanja stavi na papir 3 cilja koja želiš ostvariti sutradan. Prekriži svaki koji ostvariš i osjećaj se super. P.S. neka jedan od ciljeva bude popiti 1l vode za dobar dan.</p>",
		"<h2>Izazov</h2><p>Danas preuzmi knjigu koju dugo želiš pročitati, ali ju preuzmi kao audio-knjigu i uživaj u večeri bez mobitela i televizije. </p>",
		"<h2>Izazov</h2><p>Nazovi prijatelja ili prijateljicu koju dugo nisi čula/o. Bit ćeš sretniji i zasigurno ćeš i drugome uljepšati dan.</p>",
		"<h2>Izazov</h2><p>Izaberi na Youtubeu vježbe za cijelo tijelo. Kreni od danas s treninzima kod kuće. P.S. ne zaboravi unijeti dovoljno vode za hidrataciju tijela.</p>"
	
	];
    function spin () {
      spins++;
      var winner = Math.floor(Math.random() * people.length);
      var rotation = (spins * 720) + (winner * (360 / people.length));
      $(".bottle_img").css('transform', 'rotate('+rotation+'deg)');
      setTimeout(function () {
        $('.result').html(people[winner]).show();
      }, 3000);
    }
    var spinsTruth = 0;
    var peopleTruth = [
		"<h2>Istina <span><a class='fb-share' href='#'><i class='fa fa-facebook'></i></a></span></h2><p>Magnezij doprinosi smanjenju umora, a cink doprinosi normalnoj funkciji imunološkog sustava. Jedna bočica Aquarius vode nadoknađuje min. 30% dnevnog unosa minerala, cinka ili magnezija.</p>",
		"<h2>Istina <span><a class='fb-share' href='#'><i class='fa fa-facebook'></i></a></span></h2><p>Preporuke za dnevnu potrebu tekućine (uključujući vodu kao i ostale tekućine unesene hranom i drugim napitcima) iznosi 3,0 litre za muškarce i 2,2 l za žene.</p>",
		"<h2>Istina <span><a class='fb-share' href='#'><i class='fa fa-facebook'></i></a></span></h2><p>Unošenje previše vode u organizam u prekratkom roku može dovesti do intoksikacije vodom. Do intoksikacije dolazi kada voda razrijedi količinu natrija u krvi i tako uzrokuje disbalans vode u mozgu. Dozirajte unos vode u danu.</p>",
		"<h2>Istina <span><a class='fb-share' href='#'><i class='fa fa-facebook'></i></a></span></h2><p>Cink u našem tijelu, skraćuje vrijeme trajanja virusnih infekcija.</p>",
		"<h2>Istina <span><a class='fb-share' href='#'><i class='fa fa-facebook'></i></a></span></h2><p>Cink pomaže smanjenju kolesterola.</p>"
	
	];
    function spinTruth () {
      spinsTruth++;
      var winnerTruth = Math.floor(Math.random() * peopleTruth.length);
      var rotation = (spinsTruth * 720) + (winnerTruth * (360 / peopleTruth.length));
      $(".bottle_img").css('transform', 'rotate('+rotation+'deg)');
      setTimeout(function () {
        $('.result').html(peopleTruth[winnerTruth]).show();
      }, 3000);
    }
    var spinsDare = 0;
    var peopleDare = [
		"<h2>Izazov <span><a class='fb-share' href='#'><i class='fa fa-facebook'></i></a></span></h2><p>Napravi šetnju danas nakon posla. Bitno je prošetati minimalno 15 minuta i nemoj zaboraviti ponijeti bočicu vode sa sobom.</p>",
		"<h2>Izazov <span><a class='fb-share' href='#'><i class='fa fa-facebook'></i></a></span></h2><p>Danas prije spavanja stavi na papir 3 cilja koja želiš ostvariti sutradan. Prekriži svaki koji ostvariš i osjećaj se super. P.S. neka jedan od ciljeva bude popiti 1l vode za dobar dan.</p>",
		"<h2>Izazov <span><a class='fb-share' href='#'><i class='fa fa-facebook'></i></a></span></h2><p>Danas preuzmi knjigu koju dugo želiš pročitati, ali ju preuzmi kao audio-knjigu i uživaj u večeri bez mobitela i televizije. </p>",
		"<h2>Izazov <span><a class='fb-share' href='#'><i class='fa fa-facebook'></i></a></span></h2><p>Nazovi prijatelja ili prijateljicu koju dugo nisi čula/o. Bit ćeš sretniji i zasigurno ćeš i drugome uljepšati dan.</p>",
		"<h2>Izazov <span><a class='fb-share' href='#'><i class='fa fa-facebook'></i></a></span></h2><p>Izaberi na Youtubeu vježbe za cijelo tijelo. Kreni od danas s treninzima kod kuće. P.S. ne zaboravi unijeti dovoljno vode za hidrataciju tijela.</p>"
	
	];
    function spinDare () {
      spinsDare++;
      var winnerDare = Math.floor(Math.random() * peopleDare.length);
      var rotation = (spinsDare * 720) + (winnerDare * (360 / peopleDare.length));
      $(".bottle_img").css('transform', 'rotate('+rotation+'deg)');
      setTimeout(function () {
        $('.result').html(peopleDare[winnerDare]).show();
      }, 3000);
    }

	// Close navigation on clicking outside
	$(document).on('click', function(event) {
		$('.result').hide();
	})
    jQuery(document).ready( function () {
        jQuery('.container').on('click', '.fb-share',function(e) {
            e.preventDefault()
            FB.ui({ method: 'share', href: 'https://super1.telegram.hr/native/boca-zivota/'}, function(response){}); return false;
        })
    })