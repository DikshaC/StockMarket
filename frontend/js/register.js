$(document).ready(function () {
    $('#ppid').focusout(function(){
        var phone_num = $(this).val();
        var regex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
        if(regex.test(phone_num)==0){
            alert("please input correct mobile number");
        }
    });
});