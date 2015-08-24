(function ($) {
    'use strict';

    $(document).ready(function () {

        // task 4  adding to cart with ajax
        $('.add-to-cart-button').click(function (e) {
            e.preventDefault();

            var form = $(this).closest('form');
            form.find('.errorMessage').remove();
            form.find('.successMessage').remove();


            $.post(form.attr('action'), form.serialize(), function (data) {
                $('.masthead').find('.first').find('span').html('View cart (' + data.itemsCount + ') ' + data.cartTotal);
                form.append('<div class="row successMessage">' +
                    '<div class="alert alert-success">Item has been added to cart.</div>' +
                    '</div>');
            }).fail(function (data) {
                console.log(data);
                form.append('<div class="row errorMessage">' +
                    '<div class="alert alert-danger">' + data.responseJSON.errorMessage + '</div>' +
                    '</div>');
            });

        });
    });

})(jQuery);
