// Load main functions...

jQuery(document).ready(function () {
    AOS.init({
        duration: 1000,
        delay: 250
    });
});

// Initialize AOS
jQuery(document).ready(function() {
    AOS.init({
        duration: 1000,
        delay: 250
    });
});

// // Quiz functionality
// jQuery(document).ready(function($) {
//     var scores = {typeA: 0, typeB: 0, typeC: 0, typeD: 0, typeE: 0};
//     var result = '';
//     var currentSlide = 1;
//     var totalSlides = 12;

//     $('.answer').click(function() {
//         var active = $('.slide.active').data('slide');
//         var category = $(this).data('category');
        
//         if (category) {
//             scores[category]++;
//         }

//         // Move to next slide
//         $('.slide.slide-' + active + ', .slide[data-slide="' + active + '"]').removeClass('active');
//         currentSlide = active + 1;

//         if (currentSlide <= totalSlides) {
//             $('.slide[data-slide="' + currentSlide + '"]').addClass('active');
//         } else {
//             // Quiz completed, determine result
//             let max = Math.max(...Object.values(scores));
//             let topTypes = Object.keys(scores).filter(k => scores[k] === max);
//             let highestType = topTypes[Math.floor(Math.random() * topTypes.length)];
//             result = highestType;
            
//             // Show email input slide
//             $('.email-slide').addClass('active');
//         }
        
//         return false;
//     });


jQuery(document).ready(function ($) {
    var scores = {typeA: 0, typeB: 0, typeC: 0, typeD: 0, typeE: 0};
    var result = '';
    var currentSlide = 1;
    var totalSlides = 12;

    // Answer click: show checkmark + Next button
    $('.answer').click(function () {
        var $this = $(this);
        var $slide = $this.closest('.slide');
        var category = $this.data('category');

        $slide.find('.answer').removeClass('active');
        $this.addClass('active');

        if (category) scores[category]++;

        $slide.find('.next-btn').fadeIn();
    });

    // NEXT button
    $('.next-btn').click(function () {
        var $slide = $(this).closest('.slide');
        var active = $slide.data('slide');

        $slide.removeClass('active');
        currentSlide = active + 1;

        if (currentSlide <= totalSlides) {
            $('.slide[data-slide="' + currentSlide + '"]').addClass('active');
        } else {
            let max = Math.max(...Object.values(scores));
            let topTypes = Object.keys(scores).filter(k => scores[k] === max);
            result = topTypes[Math.floor(Math.random() * topTypes.length)];
            $('.email-slide').addClass('active');
        }

        $(this).hide();
    });

    // PREVIOUS button
    $('.prev-btn').click(function () {
        var $slide = $(this).closest('.slide');
        var active = $slide.data('slide');

        if (active > 1) {
            $slide.removeClass('active');
            currentSlide = active - 1;
            $('.slide[data-slide="' + currentSlide + '"]').addClass('active');
        }
    });

    // Email submission
    $('#submitEmail').click(function() {
        var email = $('#emailInput').val();
        
        if (!email || !isValidEmail(email)) {
            showError('Molimo unesite validnu email adresu.');
            return false;
        }
        else{
            $('.email-slide').removeClass('active');
            $('.thank-you-slide').addClass('active');
        }

        return false;
    });

    // Restart quiz
    $('#restartQuiz').click(function() {
        $('.slide').removeClass('active');
        $('.slide[data-slide="1"]').addClass('active');
        scores = {typeA: 0, typeB: 0, typeC: 0, typeD: 0, typeE: 0};
        currentSlide = 1;
        result = '';
        
        // Reset email form
        $('#emailInput').val('');
        $('#submitEmail').prop('disabled', false);
        $('.result-display').hide();
        $('.success-message, .error-message').hide().text('');
        $('#continueToThanks').remove();
        
        return false;
    });

    // Helper functions
    function isValidEmail(email) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function showSuccess(message) {
        $('.error-message').hide();
        $('.success-message').text(message).show();
    }

    function showError(message) {
        $('.success-message').hide();
        $('.error-message').text(message).show();
    }

});
