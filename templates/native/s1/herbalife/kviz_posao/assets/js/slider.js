$(document).ready(function() {
	$('.sliderInput').on('click', function () {
		clearInterval(myVar);
		$('.sliderInput').removeClass("fillCircle");
		$(this).addClass("fillCircle");
		$('.sliderText').children().fadeOut(350);
	    switch ($(this).attr("id")) {
	    case "1":
	        $('.sunce').animate({
			    top: "170px",
			    left: "30px"
			  }, 700, function() {
			    // Animation complete.
			  });

	        $('.0700').delay(350).fadeIn(350);
	        break;
	    case "2":
	        $('.sunce').animate({
			    top: "150px",
			    left: "35px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.0710').delay(350).fadeIn(350);
	        break;
	    case "3":
	        $('.sunce').animate({
			    top: "145px",
			    left: "37px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.0711').delay(350).fadeIn(350);
	        break;
	    case "4":
	        $('.sunce').animate({
			    top: "130px",
			    left: "45px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.0730').delay(350).fadeIn(350);
	        break;
	    case "5":
	        $('.sunce').animate({
			    top: "42px",
			    left: "120px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.1238').delay(350).fadeIn(350);
	        break;
	    case "6":
	        $('.sunce').animate({
			    top: "55px",
			    left: "250px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.1700').delay(350).fadeIn(350);
	        break;
	    case "7":
	        $('.sunce').animate({
			    top: "115px",
			    left: "310px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.1830').delay(350).fadeIn(350);
	        break;
	    case "8":
	        $('.sunce').animate({
			    top: "150px",
			    left: "320px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.2000').delay(350).fadeIn(350);
	        break;
	    default: 
	        console.log($(this).val());
	    };
	});

	var counter=2;

	function myTimer() {
		$('.sliderText').children().fadeOut(350);
		$('.sliderInput').removeClass("fillCircle");
		$('#'+counter).addClass("fillCircle");
	    switch (counter) {
	    case 1:
	        $('.sunce').animate({
			    top: "170px",
			    left: "30px"
			  }, 700, function() {
			    // Animation complete.
			  });

	        $('.0700').delay(350).fadeIn(350);
	        break;
	    case 2:
	        $('.sunce').animate({
			    top: "150px",
			    left: "35px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.0710').delay(350).fadeIn(350);
	        break;
	    case 3:
	        $('.sunce').animate({
			    top: "145px",
			    left: "37px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.0711').delay(350).fadeIn(350);
	        break;
	    case 4:
	        $('.sunce').animate({
			    top: "130px",
			    left: "45px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.0730').delay(350).fadeIn(350);
	        break;
	    case 5:
	        $('.sunce').animate({
			    top: "42px",
			    left: "120px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.1238').delay(350).fadeIn(350);
	        break;
	    case 6:
	        $('.sunce').animate({
			    top: "55px",
			    left: "250px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.1700').delay(350).fadeIn(350);
	        break;
	    case 7:
	        $('.sunce').animate({
			    top: "115px",
			    left: "310px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.1830').delay(350).fadeIn(350);
	        break;
	    case 8:
	        $('.sunce').animate({
			    top: "150px",
			    left: "320px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.2000').delay(350).fadeIn(350);
	        break;
	    default: 
	        console.log($(this).val());
	    };
	    counter++;
	    if (counter==9) {
	    	counter=1;
	    }
	};

	var myVar = setInterval(myTimer, 3500);
});