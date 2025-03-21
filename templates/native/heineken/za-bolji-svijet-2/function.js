// Load main functions...
function hideEverything() {
    $('#header-form-success').removeClass('hide');
    $('.hide-later').addClass('hide');
    $('.header-form').addClass('hide-before');
  }

jQuery(document).ready(function () {

    $('.gallery').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<div class="arrow arrow-left"></div>',
        nextArrow: '<div class="arrow arrow-right"></div>',
        arrows: true,
        autoplay: false,
        autoplaySpeed: 5000,
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
    

    $('.mobile-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<div class="arrow arrow-left"></div>',
        nextArrow: '<div class="arrow arrow-right"></div>',
        arrows: true,
        autoplay: false,
        autoplaySpeed: 5000,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });


    $('.info-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<div class="arrow arrow-left"></div>',
        nextArrow: '<div class="arrow arrow-right"></div>',
        arrows: true,
        autoplay: false,
        autoplaySpeed: 5000
    });

    $('.video-center').slick({
        speed: 750,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        infinite: true,
        dots: false,
        prevArrow: '<div class="arrow arrow-left"></div>',
        nextArrow: '<div class="arrow arrow-right"></div>',
        arrows: true,
        centerMode: true,
        draggable: true,
        centerPadding: '24px',
        responsive: [
          {
            breakpoint: 1025,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 786,
            settings: {
              slidesToShow: 1,
            }
          },
        ]
      });

    var $form = $('form#pitanje-strucnjacima'),
    url = 'https://script.google.com/macros/s/AKfycbw5UMTk2_4IMikXgHUcJ9nasjRDNgJRTb-07oQ14VAZZCK9MfeDHgBeZz1zDy17Ay8_gw/exec'


    $('#submit-form').on('click', function (e) {
        let submit_data = {pitanje: $('form#pitanje-strucnjacima textarea').val()};
          e.preventDefault();
          var jqxhr = $.ajax({
            url: url,
            method: "GET",
            dataType: "json",
            data: submit_data
          }).done(
            hideEverything()
          );
      })
});


jQuery(document).ready(function () {

  let explanations = {
      1: `<div class = "feedback-title">✅ Točno!</div> Ne preporuča se razgovarati s djetetom dok je pod utjecajem alkohola. Važno je da ga najprije zbrinete te mu jasno date do znanja da ćete razgovarati kasnije. Potom otvorite razgovor, mirno, bez podizanja tona, bez uvođenja velikih kazni. Uvedite nova pravila, primjerice skraćeno vrijeme izlaska i jasno predstavite posljedice ako se dogovor ponovno prekrši. Djetetu komunicirajte „Dopustili smo ti da izađeš, vratio/la si se u ovakvom stanju. Idući put ćeš se vratiti ranije, a ako ponoviš isto – više nećeš moći izlaziti dok svojim ponašanjem ne dokažeš da si se promijenio/la i shvatio/la poruku.`,
      2: `<div class = "feedback-title">✅ Točno!</div>Transgeneracijski aspekt konzumiranja alkohola kod mladih odnosi se na obrasce ponašanja i stavove prema alkoholu koji se prenose s generacije na generaciju. Ako roditelji ili stariji članovi obitelji toleriraju ili sami konzumiraju alkohol u pretjeranim količinama, mladi često usvajaju takve navike kao društveno prihvatljive. Osim toga, nedostatak razgovora o posljedicama alkohola i izostanak pozitivnih uzora povećavaju rizik da mladi ponove obrasce koje su vidjeli u svojoj obitelji. Ako roditelj svojim primjerom ne ukazuje na važnost umjerene konzumacije, veća je vjerojatno da to neće znati ni dijete jednom kad bude odraslo. Imajte na umu da alkohol može biti dio uravnoteženog životnog stila, ali nikada nije prihvatljiv za osobe mlađe od 18 godina, kao niti u situacijama kada, primjerice, upravljate vozilom.`,
      3: `<div class = "feedback-title">✅ Točno!</div>Slušanje djeteta bez osuđivanja ključno je kako bi se izgradilo povjerenje i stvorilo sigurno okruženje za otvoreni dijalog. Pitanjem poput "Što ti misliš o tome?" ili "Što bi ti želio učiniti?" potiče se djetetova sposobnost kritičkog razmišljanja i donošenja vlastitih odluka, što jača njihovo samozastupanje i osjećaj odgovornosti. Povezivanje s vršnjacima koji su prošli kroz slične izazove može pružiti osjećaj podrške i razumijevanja te pomoći djetetu da se osjeća manje usamljeno. Također, informiranje o zdravstvenim rizicima na primjeren i nenametljiv način pomaže djeci razumjeti dugoročne posljedice svojih odluka, što ih može motivirati na zdravije izbore`,
      4: `<div class = "feedback-title">✅ Točno!</div>Stručnjaci često ističu važnost korištenja tzv. „ja poruka“. Radi se o načinu komunikacije koji uvelike  pomaže roditeljima da jasno izraze svoje osjećaje i stavove bez optuživanja ili nametanja krivnje djetetu, čime se potiče otvoreniji i konstruktivniji razgovor. Na primjer, rečenice poput "Osjećam zabrinutost jer mi se čini da si uzrujan" omogućuju djetetu da bolje razumije roditeljske emocije i perspektivu. Ako smo otvoreni da čujemo svoju djecu, postoji puno veća šansa da i oni čuju nas.`,
      5: `<div class = "feedback-title">✅ Točno!</div>Konzumacija alkohola kod maloljetnika predstavlja ozbiljnu prijetnju mozgu koji je još u razvoju i može ostaviti trajne posljedice. Ujedno može narušiti stvarnu sliku situacije u kojoj se osoba nalazi i smanjiti sposobnost donošenja ispravnih odluka, a za djecu je to posebno rizično jer njihove kognitivne vještine, poput rješavanja problema i odlučivanja, još nisu potpuno razvijene. Stoga konzumacija alkohola u ranoj dobi može usporiti ili poremetiti kognitivni i emocionalni razvoj, a to se kasnije često ne može nadoknaditi`,
      6:`<div class = "feedback-title">✅ Točno!</div>Otvorena komunikacija u obitelji ima višestruke pozitivne učinke kada je riječ o prevenciji konzumacije alkohola kod maloljetnika. Roditeljski primjer igra ključnu ulogu jer, ako roditelji ne pokazuju važnost umjerene konzumacije, djeca neće znati kako se odgovorno ponašati prema alkoholu kad odrastu. U obiteljima gdje se otvorenije razgovara o konzumaciji alkohola, djeca su manje sklona sama ga probati. Svjesnija su opasnosti koje pijenje alkohola u toj dobi može izazvati, a samim time i odgovornija. Ako postoji iskrenost i otvorena komunikacija, veća je šansa da dijete osjeća da ima s kime razgovarati o vlastitim problemima, ne samo o alkoholu i izlascima, već i o drugim stvarima koje ga potencijalno muče. Jednostavnije, imat će više povjerenja.`,
      7:`<div class = "feedback-title">✅ Točno!</div>Važno je koristiti rječnik i primjere koje dijete razumije jer to omogućava bolju komunikaciju i lakše usklađivanje s njegovim razmišljanjima.  Reći im otvoreno što mogu očekivati tijekom izlazaka, čuti što oni misle o tome, što planiraju i pomoći im da budu pripremljeni, kako na dobre stvari, tako i na moguće izazove i alkohol kao jedan od njih. Razgovor temeljen na djetetovim iskustvima i pitanjima pomaže mu da se osjeća prihvaćeno i potiče otvorenost. Također, ovakav pristup doprinosi stvaranju povjerenja i priprema dijete za izazove s kojima se može susresti, poput situacija u tinejdžerskoj dobi, ali i kasnije u odrasloj. `,
      8:`<div class = "feedback-title">✅ Točno!</div>Jedan od načina prevencije nepoželjnog ponašanja kod djece je korištenje asertivne komunikacije i postavljanje jasnih granica koje su primjerene za dijete. To pak znači da kroz razgovor jasno iskažete svoje osjećaje i zabrinutosti bez kritiziranja, na smiren i razumljiv način, istovremeno pokazujući razumijevanje za djetetove potrebe i osjećaje. Ovaj pristup pomaže roditeljima da jasno izraze očekivanja i pravila, dok istovremeno poštuju djetetovu autonomiju. Na taj način djeca razumiju odgovornosti i posljedice svojih postupaka, što doprinosi razvoju odgovornog ponašanja.`,


  };

  $(".answer").click(function () {
    let $this = $(this);
    let isCorrect = $this.data("correct") === true;
    let $slide = $this.closest(".slide");
    let slideNumber = $slide.data("slide");
    let $feedback = $slide.find(".feedback");
    let $nextButton = $slide.find(".next-question");
    let $learnMore = $slide.find(".link-button");
    let $img = $slide.find("img");
    
    if (isCorrect) {
        $feedback.html(explanations[slideNumber]).fadeIn();
        $learnMore.fadeIn();
        $nextButton.fadeIn();
        $this.find("span").html("✔");
    } else {
        $feedback.html(` <div class = "feedback-title">❌ Razmisli ponovo! Pokušaj odabrati drugi odgovor.</div>`).fadeIn();
        // $feedback.html(` <div class = "feedback-title">✖ Razmisli ponovo!</div>`).fadeIn();

        $this.find("span").html("✖");
    }
  });

  // Initially hide .chat-bg on the first slide
  $(".slide-1 .chat-bg.full-margin").hide();
  $(".podcast-btn").show()

  $(".answer").click(function () {
      let $this = $(this);
      let $slide = $this.closest(".slide");
      let $chatBg = $slide.find(".chat-bg");

      $chatBg.fadeIn(); // Show chat-bg
      
  });

  $(".next-question").click(function () {
    let $currentSlide = $(this).closest(".slide");
    let $nextSlide = $currentSlide.next(".slide"); // Select next slide using .next()
    let totalSlides = $(".slide").length; // Total number of slides
    let currentSlideNumber = parseInt($currentSlide.data("slide"));
    window.scrollTo(0,0);



    // Check if the next slide exists
    if ($nextSlide.length > 0) {
        // Hide current slide and show next slide
        $currentSlide.fadeOut(300, function () {
            $nextSlide.fadeIn(300);
            // Hide images and chat-bg for the next slide
            $nextSlide.find(".chat-bg").hide();
        });
      }
    }

    
    
  );

});




