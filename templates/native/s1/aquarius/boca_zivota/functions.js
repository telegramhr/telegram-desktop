// Load main functions...

$(function () {
	$('.slider').slick({
		autoplay:true,
		autoplaySpeed:1500,
		arrows:true,
		prevArrow:'<button type="button" class="slick-prev"></button>',
		nextArrow:'<button type="button" class="slick-next"></button>',
		centerMode:true,
		slidesToShow:1,
		slidesToScroll:1
	});
	$('.slider2').slick({
		autoplay:true,
		autoplaySpeed:1500,
		prevArrow:'<button type="button" class="slick-prev"></button>',
		nextArrow:'<button type="button" class="slick-next"></button>',
		centerMode:true,
		fade: true,
		slidesToShow:1,
		slidesToScroll:1
	});
	  

	var modalIstina = $('#istina'), modalIzazov = $('#izazov');
	

	$('.istina01, .istina02').on('click', function(){
		istinaRandSentence = istinaSentenceArray[Math.floor(Math.random() * istinaSentenceArray.length)];
		modalIstina.modal('show');
	})
	

	var istinaSentenceArray = [
		"Magnezij doprinosi smanjenju umora, a cink doprinosi normalnoj funkciji imunološkog sustava. Jedna bočica Aquarius vode nadoknađuje min. 30% dnevnog unosa minerala, cinka ili magnezija.",
		"Preporuke za dnevnu potrebu tekućine (uključujući vodu kao i ostale tekućine unesene hranom i drugim napitcima) iznosi 3,0 litre za muškarce i 2,2 l za žene.",
		"Unošenje previše vode u organizam u prekratkom roku može dovesti do intoksikacije vodom. Do intoksikacije dolazi kada voda razrijedi količinu natrija u krvi i tako uzrokuje disbalans vode u mozgu. Dozirajte unos vode u danu.",
		"Cink u našem tijelu, skraćuje vrijeme trajanja virusnih infekcija.",
		"Cink pomaže smanjenju kolesterola."
	];
	istinaRandSentence = istinaSentenceArray[Math.floor(Math.random() * istinaSentenceArray.length)];


	modalIstina.on('show.bs.modal', function (event) {
		$(this).find('.modal-body #info').html(istinaRandSentence);
	});
	
	
	$('.izazov01, .izazov02').on('click', function(){
		izazovRandSentence = izazovSentenceArray[Math.floor(Math.random() * izazovSentenceArray.length)];
		modalIzazov.modal('show');
	})

	var izazovSentenceArray = [
		"Napravi šetnju danas nakon posla. Bitno je prošetati minimalno 15 minuta i nemoj zaboraviti ponijeti bočicu vode sa sobom.",
		"Danas prije spavanja stavi na papir 3 cilja koja želiš ostvariti sutradan. Prekriži svaki koji ostvariš i osjećaj se super. P.S. neka jedan od ciljeva bude popiti 1l vode za dobar dan.",
		"Danas preuzmi knjigu koju dugo želiš pročitati, ali ju preuzmi kao audio-knjigu i uživaj u večeri bez mobitela i televizije. ",
		"Nazovi prijatelja ili prijateljicu koju dugo nisi čula/o. Bit ćeš sretniji i zasigurno ćeš i drugome uljepšati dan.",
		"Izaberi na Youtubeu vježbe za cijelo tijelo. Kreni od danas s treninzima kod kuće. P.S. ne zaboravi unijeti dovoljno vode za hidrataciju tijela."
	];
	izazovRandSentence = izazovSentenceArray[Math.floor(Math.random() * izazovSentenceArray.length)];


	modalIzazov.on('show.bs.modal', function (event) {
		$(this).find('.modal-body #info2').html(izazovRandSentence);
	});

	// modalIzazov.on('show.bs.modal', function (event) {
	// 	$(this).find('.modal-body #info').html(randSentence);
	// });
});