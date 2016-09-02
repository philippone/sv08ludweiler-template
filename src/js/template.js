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

        //$('.parallax').parallax();

        // subnavigation scrolling
        $('.scrollspy').scrollSpy();

    })
})(jQuery);