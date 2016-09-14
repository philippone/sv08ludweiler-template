(function ($) {

    $(document).ready(function () {

        console.log("Page loaded");

        // mobile navbar
        $(".button-collapse").sideNav();

        // TODO update on resize
        var navbar = $('.navbar');
        var subNavigation = $('.sub-navigation');
        if (subNavigation !== 'undefined') {

            subNavigation.pushpin({
                top: navbar.height() + $('.teaser-big-container').height(),
                offset: navbar.height(),
                pinCallback: function () {
                    $('main').css({'margin-top': subNavigation.height()})
                },
                releaseCallback: function () {
                    $('main').css({'margin-top': '0px'})
                }
            });

        }

        // $('.material-placeholder').parallax();

        // subnavigation scrolling
        $('.scrollspy').scrollSpy({'scrollOffset' : 130});

        $('.materialboxed').materialbox();


        // $( window ).resize(function() {
        //
        //     console.log('test');
        //     var navbar = $('.navbar');
        //     var subNavigation = $('.sub-navigation');
        //     if (subNavigation !== 'undefined') {
        //
        //         subNavigation.pushpin({
        //             top: navbar.height() + $('.teaser-big-container').height(),
        //             offset: navbar.height(),
        //             pinCallback: function () {
        //                 $('main').css({'margin-top': subNavigation.height()})
        //             },
        //             releaseCallback: function () {
        //                 $('main').css({'margin-top': '0px'})
        //             }
        //         });
        //
        //     }
        // });
    })
})(jQuery);