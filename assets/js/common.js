// Inicia o OwlCarousel
jQuery(document).ready(function () {
    jQuery(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
});

// Efeito suave do Back to Top
jQuery(document).ready(function(){
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 50) {
            jQuery('#back-to-top').fadeIn();
        } else {
            jQuery('#back-to-top').fadeOut();
        }
    });
        // scroll body to 0px on click
        jQuery('#back-to-top').click(function () {
            jQuery('body,html').animate({
                scrollTop: 0
            }, 400);
            return false;
        });
    });