$(document).ready(function () {

    $("[id$='_cart_button']").on('click',function (event) {
        // alert("hi");
        $id = event.target.id;
        $val = $id.replace('card', '');
        $val = $val.replace('_cart_button','');

        $quantity = $('#card' + $val+ '_spin').val();


        //buy/sell
        if($('#card' + $val + '_buy_button').is(':checked')){
            $buy_sell = 'b'
        }
        else{
            $buy_sell = 's'
        }

        //Price
        $price = $('#card'+$val+'_price').text();
        $price = $price.replace('Price:','');

        $total_price = $quantity * $price;

        $userId = 1;

        var data = {
            id: $val,
            quantity : $quantity,
            buy_sell : $buy_sell,
            price: $total_price,
            userId: $userId
        };

        $.ajax({
            type: "POST",
            url: "../frontend/indexHelper.php",
            dataType: 'text',
            data: data,
            success:function (response) {
                alert(response);
                window.location.href = 'index.php';

            }
        })


    });

    $("[id$='_checkout_button']").on('click',function (event) {
        $id = event.target.id;
        $val = $id.replace('card', '');
        $val = $val.replace('_checkout_button','');
        alert("hii");
        $quantity = $('#card' + $val+ '_spin').val();


        //buy/sell
        if($('#card' + $val + '_buy_button').is(':checked')){
            $buy_sell = 'b'
        }
        else{
            $buy_sell = 's'
        }

        //Price
        $price = $('#card'+$val+'_price').text();
        $price = $price.replace('Price:','');

        $total_price = $quantity * $price;

        $userId = 1;

        var data = {
            id: $val,
            quantity : $quantity,
            buy_sell : $buy_sell,
            price: $total_price,
            userId: $userId
        };

        var mapForm = document.createElement("form");
        mapForm.target = "Map";
        mapForm.method = "POST"; // or "post" if appropriate
        mapForm.action = "payment.php";

        var mapInput = document.createElement("input");
        mapInput.type = "hidden";
        mapInput.name = "id";
        mapInput.value = $val;
        mapForm.appendChild(mapInput);

        var mapInput = document.createElement("input");
        mapInput.type = "hidden";
        mapInput.name = "quantity";
        mapInput.value = $quantity;
        mapForm.appendChild(mapInput);

        var mapInput = document.createElement("input");
        mapInput.type = "hidden";
        mapInput.name = "buy_sell";
        mapInput.value = $buy_sell;
        mapForm.appendChild(mapInput);

        var mapInput = document.createElement("input");
        mapInput.type = "hidden";
        mapInput.name = "price";
        mapInput.value = $total_price;
        mapForm.appendChild(mapInput);

        document.body.appendChild(mapForm);

        mapForm.submit();
       // map = window.open("http://localhost/StockMarket/frontend/payment.php", "Map", "status=0,title=0,height=600,width=800,scrollbars=1");

        // if (map) {
        //     mapForm.submit();
        // } else {
        //     alert('You must allow popups for this map to work.');
        // }


    });

    $("[id$='up_spinner']").click(function() {
            $up_id = $(this).attr('id');
            $up_id = $up_id.replace('_up_spinner', '');
            $('#'+$up_id+'_spin').val( parseInt($('#'+$up_id+'_spin').val()) + 1);
        });
        $("[id$='down_spinner']").on('click', function() {
            $down_id = $(this).attr('id');
            $down_id = $down_id.replace('_down_spinner', '');
            $('#'+$down_id+'_spin').val( parseInt($('#'+$down_id+'_spin').val()) - 1);
        });

});

