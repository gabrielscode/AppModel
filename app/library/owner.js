$(document).ready(function() {
    $('.sidebar li').click(function() {
        $('.sidebar .active').removeClass('active');

        var $parent = $(this);
        $parent.addClass('active');
    });
});

$(function() {  
    $("body").niceScroll();
});

$("body").niceScroll({
    cursorcolor: "#2e404d", // change cursor color in hex
    cursoropacitymin: 0, // change opacity when cursor is inactive (scrollabar "hidden" state), range from 1 to 0
    cursoropacitymax: 0.8, // change opacity when cursor is active (scrollabar "visible" state), range from 1 to 0
    cursorwidth: "8px", // cursor width in pixel (you can also write "5px")
    cursorborder: "0", // css definition for cursor border
    railpadding: { top: 15, right: 2, left: 0, bottom: 15 }, // set padding for rail bar
    smoothscroll: true, // scroll with ease movement
    hidecursordelay: 600, // set the delay in microseconds to fading out scrollbars
});



