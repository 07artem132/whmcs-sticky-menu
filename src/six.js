$(document).ready(function()
{
    let navpos = $("#main-menu").offset();
    $(window).bind("scroll", function()
    {
        if($(window).scrollTop() > navpos.top)
        {
            $("#main-menu").addClass("navbar-fixed-top");
        }
        else
        {
            $("#main-menu").removeClass("navbar-fixed-top");
        }
    });
});
