$(document).ready(function () {
    $(".fa-trash").click(function (event) {
        var data = {
          number: event.target.id
        };
        console.log(data);
        $.ajax({
            type: "POST",
            url: "../frontend/cart.php",
            dataType: 'text',
            data: data,
            success:function () {
                location.reload();
            }
        })
    });

    $("#checkout").click(function (event) {
        if($("#table-row").length) {
            window.location = "payment.php";
        }
        else {
            $('.error_msg').html("No items in cart to checkout");
            $('#myModal').modal('show');
            $('.modal-backdrop.in').css('opacity', '0.5');
            event.preventDefault();
        }
    });
});

