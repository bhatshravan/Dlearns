/*====================================
=            ON DOM READY            =
====================================*/
$(function() {
    $('.toggle-nav').click(function() {
        // Calling a function in case you want to expand upon this.
        toggleNav();
    });
});


/*========================================
=            CUSTOM FUNCTIONS            =
========================================*/
function toggleNav() {
    if ($('#container').hasClass('show-nav')) {
        // Do things on Nav Close
        $('#container').removeClass('show-nav');
    } else {
        // Do things on Nav Open
        $('#container').addClass('show-nav');
    }

    //$('#container').toggleClass('show-nav');
}