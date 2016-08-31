(function ($) {

    $(document).ready(function () {

        console.log("Page loaded");

        $(".button-collapse").sideNav();

        // sticky navbar
        //$('.navbar').pushpin({});

        $('.sub-navigation').pushpin({
            top: $('.navbar').height() + $('.teaser-big').height(),
            offset: $('.navbar').height()
        });

        $('.parallax').parallax();

    })
})(jQuery);