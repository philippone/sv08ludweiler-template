(function ($) {

    $(document).ready(function () {

        console.log("Page loaded");

        $(".button-collapse").sideNav();

        // sticky navbar
        //$('.navbar').pushpin({});

        $('.sub-navigation').pushpin({
            top: $('.navbar').height() + $('.teaser-big').height(),
            offset: $('.navbar').height(),
            pinCallback: function() {
                $('main').css({'margin-top':'64px'})
            },
            releaseCallback: function() {
                $('main').css({'margin-top':'0px'})
            }
        });

        //$('.parallax').parallax();

        $('.scrollspy').scrollSpy();

    })
})(jQuery);