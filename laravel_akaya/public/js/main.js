
(function ($) {
    "use strict";
    // Like btn

    $('.like-bt').click(function () {

        var tokken = $('#_u').val();


        if ($('#_uLikes').val() == 'false') {
            $('#_uLikes').val('true');
            $('.like-bt').addClass('bt-active');
            $('.u-like').addClass('u-like-show');
            $('.u-like-show').removeClass('u-like');
        } else {
            $('.like-bt').removeClass('bt-active');
            $('#_uLikes').val('false');
            $('.u-like-show').addClass('u-like');
            $('.u-like').removeClass('u-like-show');

        }


    })

})(jQuery);
