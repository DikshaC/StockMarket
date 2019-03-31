$(document).ready(function () {

    $(".fa-trash").click(function (event) {
        alert(event.target.id)
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
        alert("hii");

        window.location = "http://localhost/StockMarket/frontend/payment.php";

    });
});

