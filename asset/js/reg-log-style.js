
jQuery(document).ready(function ($) {
    $('#login').hide();

    $('.show-login').click(function () {

        $('.wrap-register').hide();
        $('#login').show();
    });

    $('.show-register').click(function () {

        $('#login').hide();
        $('.wrap-register').show();
    });

});