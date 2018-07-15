$(document).ready(function () {
    let navpos = $(".navbar-inner").offset();
    $(window).bind("scroll", function () {
        if ($(window).scrollTop() > navpos.top) {
            $(".navbar-inner").addClass("navbar-fixed-top");
        }
        else {
            $(".navbar-inner").removeClass("navbar-fixed-top");
        }
    });
});
