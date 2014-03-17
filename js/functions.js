( function( $ ) {

    ( function() {

        $( "[data-animate-delay]" ).each(function( index ) {

            $(this).css('-webkit-animation-delay', $(this).attr('data-animate-delay')).css('-moz-animation-delay', $(this).attr('data-animate-delay'))

        });

        fadeInUp();

    } )();

    // $(window).focus(function() {
    //     fadeInUp();
    // });

    // $(window).blur(function() {
    //     fadeInUp();
    // });

    // $("[data-animate='fadeInUp']").waypoint(function() {
    //     fadeInUp();
    // },
    //     {
    //         offset: function() {
    //             return -$(this).height();
    //         }
    //     }
    // );

    function fadeInUp() {
        $("[data-animate='fadeInUp']").removeClass().addClass('animated fadeInUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass();
        });
    }

} )( jQuery );