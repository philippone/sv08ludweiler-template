(function ($) {

    var init = function () {
        console.log("resize");

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

        // subnavigation scrolling
        $('.scrollspy').scrollSpy({'scrollOffset': navbar.height() + subNavigation.height()});

        console.log(navbar.height());
        console.log(subNavigation.height());
    };

    $(document).ready(function () {

        console.log("Page loaded");

        // mobile navbar
        $(".button-collapse").sideNav();

        $('.materialboxed').materialbox();

        // $('.material-placeholder').parallax();

        init();

    });


    var doit;
    $(window).on("resize", function () {

        clearTimeout(doit);
        doit = setTimeout(init , 200);

    });

})(jQuery);