$( document ).ready(function() {
  
    // Accordion
    $('.acctitle').click(function() {
        $accCross = $(this).children('.pmcontainer');
        $('.pmcontainer').not($accCross).removeClass('pmrotate');
        $(this).children('.pmcontainer').toggleClass('pmrotate');

        $accordion_content = $(this).children('.acclist');
        $('.acclist').not($accordion_content).slideUp(600);
        $accordion_content.stop(true, false).slideToggle(600);
    });

    // Goto
    $('.goto').click(function() {
        var goto = $($(this).attr('href')).offset().top - 120;
        
        $("body, html").animate({scrollTop: goto}, 1000);
    });

    // additionalPerson
    document.getElementById('additionalPerson').addEventListener('change', function() {
        var additionalPersonFields = document.getElementById('additionalPersonFields');
        if (this.checked) {
          additionalPersonFields.style.display = 'block';
        } else {
          additionalPersonFields.style.display = 'none';
        }
      });

      $('#contact-submit').click(function(event) {
        event.preventDefault();

        // Führe reCAPTCHA v2-Überprüfung durch
        grecaptcha.ready(function() {
            var site_key = '6LebgkInAAAAAK4nXFcjKyUAvT03n48B69zxheQq'; // Ersetze durch deinen reCAPTCHA-Schlüssel
            grecaptcha.execute(site_key, { action: 'submit' }).then(function(token) {
                // Füge den reCAPTCHA-Token zum Formulardaten hinzu
                $('#contact').append('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');

                // Sende das Formular
                $('#contact').submit();
            });
        });
    });

      
});
  