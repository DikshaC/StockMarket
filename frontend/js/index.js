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

