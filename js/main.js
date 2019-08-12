// Function to ensure that the footer only toggles on mobile
$(window).resize(function () { 
    var width = $(window).width();
    if (width <= 750) {
        $('.footer__nav-section__head').attr("data-toggle" , 'collapse');
        $('.footer__nav-section__collapse-wrapper').addClass('collapse');
    }
    else {
        $('.footer__nav-section__head').attr("data-toggle" , '');
        $('.footer__nav-section__collapse-wrapper').removeClass('collapse');    
    }
});

$(window).trigger('resize');