$(document).ready(function () {


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