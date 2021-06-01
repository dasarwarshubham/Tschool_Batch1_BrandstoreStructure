$(document).ready(function () {

    var quantitiy = 0;
    $('.plus-btn').click(function (e) {
        e.preventDefault();
        var quantity = parseInt($('#quantity').val());
        if (quantity < 5) {
            $('#quantity').val(quantity + 1);
        }
    });

    $('.minus-btn').click(function (e) {
        e.preventDefault();
        var quantity = parseInt($('#quantity').val());
        if (quantity > 1) {
            $('#quantity').val(quantity - 1);
        }
    });

});