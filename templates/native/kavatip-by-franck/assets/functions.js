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

// Quiz functionality
jQuery(document).ready(function($) {
    var scores = {typeA: 0, typeB: 0, typeC: 0, typeD: 0, typeE: 0};
    var result = '';
    var currentSlide = 1;
    var totalSlides = 12;

    $('.answer').click(function() {
        var active = $('.slide.active').data('slide');
        var category = $(this).data('category');
        
        if (category) {
            scores[category]++;
        }

        // Move to next slide
        $('.slide.slide-' + active + ', .slide[data-slide="' + active + '"]').removeClass('active');
        currentSlide = active + 1;

        if (currentSlide <= totalSlides) {
            $('.slide[data-slide="' + currentSlide + '"]').addClass('active');
        } else {
            // Quiz completed, determine result
            let max = Math.max(...Object.values(scores));
            let topTypes = Object.keys(scores).filter(k => scores[k] === max);
            let highestType = topTypes[Math.floor(Math.random() * topTypes.length)];
            result = highestType;
            
            // Show email input slide
            $('.email-slide').addClass('active');
        }
        
        return false;
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

// kava svg addition (ne radi)
document.addEventListener('DOMContentLoaded', () => {
    const answerButtons = document.querySelectorAll('.kviz .answer');
  
    answerButtons.forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault(); // stop immediate default behavior
  
        const slide = btn.closest('.slide');
  
        // Remove checkmark from all buttons on this slide
        slide.querySelectorAll('.answer').forEach(b => b.classList.remove('show-icon'));
  
        // Show checkmark on the clicked button
        btn.classList.add('show-icon');
  
        // Delay advancing to the next slide
        setTimeout(() => {
          const currentSlideNum = parseInt(slide.dataset.slide);
          const nextSlide = document.querySelector(`.slide[data-slide="${currentSlideNum + 1}"]`);
          if (nextSlide) {
            slide.classList.remove('active');
            nextSlide.classList.add('active');
          }
        }, 200); // 200ms delay lets users see the icon
      });
    });
  });
