$(function(){
    $(document).ready(function(){
        $('.tabs').tabs();
        $('select').formSelect();
        $(".dropdown-trigger").dropdown();
        $('.datepicker').datepicker({
            'format': 'yyyy-mm-dd',
            'autoClose': true,
            'showClearBtn': true
        });
        $('.timepicker').timepicker({
            'twelveHour': false,
            'autoClose': true,
            'showClearBtn': true
        });

        //Confirm dialog message
        $('[data-confirm]').on('click', function(e){
            e.preventDefault();
            e.stopPropagation();

            var message = $(this).data('confirm');

            if(confirm(message)){
                $(this).closest('form').submit();
            }
        })
    });
});