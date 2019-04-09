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

    $("#checkout").click(function () {
        if($("#table-row").length) {
            window.location = "http://localhost/StockMarket/frontend/payment.php";
        }
        else {
            alert("No items in cart to checkout");
        }

    });
});

