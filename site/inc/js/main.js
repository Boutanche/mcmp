(function ($) {
    "use strict"
    /* 1. Proloader */
    $(window).on('load', function () {
        $('#preloader-active').delay(450).fadeOut('slow');
        $('body').delay(450).css({
            'overflow': 'visible'
        });
    });

})(jQuery);
