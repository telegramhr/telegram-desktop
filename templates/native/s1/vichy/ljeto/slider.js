$(document).ready(function() {
	$('.zg-alex .sliderInput').on('click', function () {
		clearInterval(myVar);
		$('.zg-alex .sliderInput').removeClass("fillCircle");
		$(this).addClass("fillCircle");
		$('.zg-alex .sliderText').children().fadeOut(350);
	    switch ($(this).attr("circle-id")) {
	    case "1":
	        $('.zg-alex .sunce').animate({
			    top: "149px",
			    left: "18px"
			  }, 700, function() {
			    // Animation complete.
			  });

	        $('.zg-alex .0700').delay(350).fadeIn(350);
	        break;
	    case "2":
	        $('.zg-alex .sunce').animate({
			    top: "137px",
			    left: "21px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.zg-alex .0710').delay(350).fadeIn(350);
	        break;
	    case "3":
	        $('.zg-alex .sunce').animate({
			    top: "117px",
			    left: "28px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.zg-alex .0711').delay(350).fadeIn(350);
	        break;
	    case "4":
	        $('.zg-alex .sunce').animate({
			    top: "102px",
			    left: "34px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.zg-alex .0730').delay(350).fadeIn(350);
	        break;
	    case "5":
	        $('.zg-alex .sunce').animate({
			    top: "88px",
			    left: "40px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.zg-alex .1238').delay(350).fadeIn(350);
	        break;
	    case "6":
	        $('.zg-alex .sunce').animate({
			    top: "55px",
			    left: "250px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.zg-alex .1700').delay(350).fadeIn(350);
	        break;
	    case "7":
	        $('.zg-alex .sunce').animate({
			    top: "58px",
			    left: "252px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.zg-alex .1830').delay(350).fadeIn(350);
	        break;
	    case "8":
	        $('.zg-alex .sunce').animate({
			    top: "150px",
			    left: "307px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.zg-alex .2000').delay(350).fadeIn(350);
	        break;
	    default: 
	        console.log($(this).val());
	    };
	});

	var counter=2;

	function myTimer() {
		$('.zg-alex .sliderText').children().fadeOut(350);
		$('.zg-alex .sliderInput').removeClass("fillCircle");
		$('.zg-alex .circle-'+counter).addClass("fillCircle");
	    switch (counter) {
			case 1:
				$('.zg-alex .sunce').animate({
					top: "149px",
					left: "18px"
				  }, 700, function() {
					// Animation complete.
				  });
	
				$('.zg-alex .0700').delay(350).fadeIn(350);
				break;
			case 2:
				$('.zg-alex .sunce').animate({
					top: "137px",
					left: "21px"
				  }, 700, function() {
					// Animation complete.
				  });
				$('.zg-alex .0710').delay(350).fadeIn(350);
				break;
			case 3:
				$('.zg-alex .sunce').animate({
					top: "117px",
					left: "28px"
				  }, 700, function() {
					// Animation complete.
				  });
				$('.zg-alex .0711').delay(350).fadeIn(350);
				break;
			case 4:
				$('.zg-alex .sunce').animate({
					top: "102px",
					left: "34px"
				  }, 700, function() {
					// Animation complete.
				  });
				$('.zg-alex .0730').delay(350).fadeIn(350);
				break;
			case 5:
				$('.zg-alex .sunce').animate({
					top: "88px",
					left: "40px"
				  }, 700, function() {
					// Animation complete.
				  });
				$('.zg-alex .1238').delay(350).fadeIn(350);
				break;
			case 6:
				$('.zg-alex .sunce').animate({
					top: "55px",
					left: "250px"
				  }, 700, function() {
					// Animation complete.
				  });
				$('.zg-alex .1700').delay(350).fadeIn(350);
				break;
			case 7:
				$('.zg-alex .sunce').animate({
					top: "58px",
					left: "252px"
				  }, 700, function() {
					// Animation complete.
				  });
				$('.zg-alex .1830').delay(350).fadeIn(350);
				break;
			case 8:
				$('.zg-alex .sunce').animate({
					top: "150px",
					left: "307px"
				  }, 700, function() {
					// Animation complete.
				  });
				$('.zg-alex .2000').delay(350).fadeIn(350);
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

$(document).ready(function() {
	$('.os-lorin .sliderInput').on('click', function () {
		clearInterval(myVar2);
		$('.os-lorin .sliderInput').removeClass("fillCircle");
		$(this).addClass("fillCircle");
		$('.os-lorin .sliderText').children().fadeOut(350);
	    switch ($(this).attr("circle-id")) {
	    case "1":
	        $('.os-lorin .sunce').animate({
			    top: "188px",
			    left: "20px"
			  }, 700, function() {
			    // Animation complete.
			  });

	        $('.os-lorin .0700').delay(350).fadeIn(350);
	        break;
	    case "2":
	        $('.os-lorin .sunce').animate({
			    top: "25px",
			    left: "125px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.os-lorin .0710').delay(350).fadeIn(350);
	        break;
	    case "3":
	        $('.os-lorin .sunce').animate({
			    top: "14px",
			    left: "162px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.os-lorin .0711').delay(350).fadeIn(350);
	        break;
		case "4":
			$('.os-lorin .sunce').animate({
				top: "40px",
				left: "250px"
				}, 700, function() {
				// Animation complete.
				});
			$('.os-lorin .0730').delay(350).fadeIn(350);
			break;
		case "5":
			$('.os-lorin .sunce').animate({
				top: "42px",
				left: "254px"
				}, 700, function() {
				// Animation complete.
				});
			$('.os-lorin .1238').delay(350).fadeIn(350);
			break;
		case "6":
			$('.os-lorin .sunce').animate({
				top: "105px",
				left: "298px"
				}, 700, function() {
				// Animation complete.
				});
			$('.os-lorin .1700').delay(350).fadeIn(350);
			break;
		case "7":
			$('.os-lorin .sunce').animate({
				top: "150px",
				left: "307px"
				}, 700, function() {
				// Animation complete.
				});
			$('.os-lorin .1830').delay(350).fadeIn(350);
			break;
	    default: 
	        console.log($(this).val());
	    };
	});

	var counter2=2;

	function myTimer2() {
		$('.os-lorin .sliderText').children().fadeOut(350);
		$('.os-lorin .sliderInput').removeClass("fillCircle");
		$('.os-lorin .circle-'+counter2).addClass("fillCircle");
	    switch (counter2) {
			case 1:
	        $('.os-lorin .sunce').animate({
			    top: "188px",
			    left: "20px"
			  }, 700, function() {
			    // Animation complete.
			  });

	        $('.os-lorin .0700').delay(350).fadeIn(350);
	        break;
	    case 2:
	        $('.os-lorin .sunce').animate({
			    top: "25px",
			    left: "125px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.os-lorin .0710').delay(350).fadeIn(350);
	        break;
	    case 3:
	        $('.os-lorin .sunce').animate({
			    top: "14px",
			    left: "162px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.os-lorin .0711').delay(350).fadeIn(350);
	        break;
		case 4:
			$('.os-lorin .sunce').animate({
				top: "40px",
				left: "250px"
				}, 700, function() {
				// Animation complete.
				});
			$('.os-lorin .0730').delay(350).fadeIn(350);
			break;
		case 5:
			$('.os-lorin .sunce').animate({
				top: "42px",
				left: "254px"
				}, 700, function() {
				// Animation complete.
				});
			$('.os-lorin .1238').delay(350).fadeIn(350);
			break;
		case 6:
			$('.os-lorin .sunce').animate({
				top: "105px",
				left: "298px"
				}, 700, function() {
				// Animation complete.
				});
			$('.os-lorin .1700').delay(350).fadeIn(350);
			break;
		case 7:
			$('.os-lorin .sunce').animate({
				top: "150px",
				left: "307px"
				}, 700, function() {
				// Animation complete.
				});
			$('.os-lorin .1830').delay(350).fadeIn(350);
			break;
	    default: 
	        console.log($(this).val());
	    };
	    counter2++;
	    if (counter2==8) {
	    	counter2=1;
	    }
	};

	var myVar2 = setInterval(myTimer2, 3500);
});

$(document).ready(function() {
	$('.st-pasalic .sliderInput').on('click', function () {
		clearInterval(myVar3);
		$('.st-pasalic .sliderInput').removeClass("fillCircle");
		$(this).addClass("fillCircle");
		$('.st-pasalic .sliderText').children().fadeOut(350);
	    switch ($(this).attr("circle-id")) {
	    case "1":
	        $('.st-pasalic .sunce').animate({
			    top: "184px",
			    left: "18px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.st-pasalic .0700').delay(350).fadeIn(350);
	        break;
	    case "2":
	        $('.st-pasalic .sunce').animate({
			    top: "137px",
			    left: "21px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.st-pasalic .0710').delay(350).fadeIn(350);
	        break;
	    case "3":
	        $('.st-pasalic .sunce').animate({
			    top: "117px",
			    left: "28px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.st-pasalic .0711').delay(350).fadeIn(350);
	        break;
	    case "4":
	        $('.st-pasalic .sunce').animate({
			    top: "19px",
			    left: "203px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.st-pasalic .0730').delay(350).fadeIn(350);
	        break;
	    case "5":
	        $('.st-pasalic .sunce').animate({
			    top: "34px",
			    left: "223px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.st-pasalic .1238').delay(350).fadeIn(350);
	        break;
	    case "6":
	        $('.st-pasalic .sunce').animate({
			    top: "40px",
			    left: "235px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.st-pasalic .1700').delay(350).fadeIn(350);
	        break;
	    case "7":
	        $('.st-pasalic .sunce').animate({
			    top: "199px",
			    left: "300px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.st-pasalic .1830').delay(350).fadeIn(350);
	        break;
	    default: 
	        console.log($(this).val());
	    };
	});

	var counter3=2;

	function myTimer3() {
		$('.st-pasalic .sliderText').children().fadeOut(350);
		$('.st-pasalic .sliderInput').removeClass("fillCircle");
		$('.st-pasalic .circle-'+counter3).addClass("fillCircle");
	    switch (counter3) {
			case 1:
	        $('.st-pasalic .sunce').animate({
			    top: "184px",
			    left: "18px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.st-pasalic .0700').delay(350).fadeIn(350);
	        break;
	    case 2:
	        $('.st-pasalic .sunce').animate({
			    top: "137px",
			    left: "21px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.st-pasalic .0710').delay(350).fadeIn(350);
	        break;
	    case 3:
	        $('.st-pasalic .sunce').animate({
			    top: "117px",
			    left: "28px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.st-pasalic .0711').delay(350).fadeIn(350);
	        break;
	    case 4:
	        $('.st-pasalic .sunce').animate({
			    top: "19px",
			    left: "203px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.st-pasalic .0730').delay(350).fadeIn(350);
	        break;
	    case 5:
	        $('.st-pasalic .sunce').animate({
			    top: "34px",
			    left: "223px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.st-pasalic .1238').delay(350).fadeIn(350);
	        break;
	    case 6:
	        $('.st-pasalic .sunce').animate({
			    top: "40px",
			    left: "235px"
			  }, 700, function() {
			    // Animation complete.
			  });
	        $('.st-pasalic .1700').delay(350).fadeIn(350);
	        break;
	    case 7:
	        $('.st-pasalic .sunce').animate({
			    top: "199px",
			    left: "300px"
			  }, 700, function() {
			    // Animation complete.
			  });
				$('.st-pasalic .1830').delay(350).fadeIn(350);
				break;
	    default: 
	        console.log($(this).val());
	    };
	    counter3++;
	    if (counter3==8) {
	    	counter3=1;
	    }
	};

	var myVar3 = setInterval(myTimer3, 3500);
});