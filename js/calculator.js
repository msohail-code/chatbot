function deductPercent(percent,total)
{
    return (total*percent);
}

$(document).ready(function(){
    $("#calc_amount_slider").change(function(){
        $('#calc_amount').val($(this).val());
    })

    $("#calc_period_slider").change(function(){
        $('#calc_period').val($(this).val());
    })
    
    $('#calc_amount').keyup(function(){
        if($(this).val() == '' || $(this).val() == 0){
            $("#calc_amount_slider").val(0)
        }
        else
            {
                $("#calc_amount_slider").val($(this).val())
            }
    }) 
    
    $('#calc_period').keyup(function(){
        if($(this).val() == '' || $(this).val() == 0){
            $("#calc_period_slider").val(0)
        }
        else
            {
                $("#calc_period_slider").val($(this).val())
            }
    })
    
    $('#calc_action').click(function(){
        var valueToFix = $('#calc_result');
        var valueToShow = 0;
        var currentRate = 150;
        var calc_curreny = $("#calc_curreny:checked").val();
        var calcu_amount = $('#calc_amount'); 
        var calc_amount = $('#calc_amount').val(); 
        var calc_period = $('#calc_period').val(); 
        var in_packages = $('#in_packages').val(); 
        var calc_error = $('#calc_error'); 
        var calc_profit = $('#calc_profit'); 
        
        if(calc_amount == 0 && calc_period == 0 && in_packages == 0){
            calc_error.html('All Feilds are required!<br/> <br/>');
        }
        else{
            calc_error.hide();
            if(calc_amount == 0)
            {
                $('#amount_error').html('Please choose the amount!');
            } else if(calc_period == 0){
                $('#period_error').html('Please choose the Period!');
            } else if(in_packages == 0){
                $('#package_error').html('Please choose the Package!');
            } else{
            
        
                var total_profit = calc_amount*calc_period;
                var deduct_profit =     deductPercent(in_packages,calc_amount)
                if(calc_curreny ==1){
                    curreny = currentRate;
                    calcu_amount.val(calc_amount*currentRate);
                    
                    
                }
                else
                {
                    curreny = 1;
                }
                
                alert(curreny)

                if(in_packages != 0){
                    valueToShow = deductPercent(in_packages,total_profit)
                } 

                $(".result_area").css("display","block");
                valueToFix.val(valueToShow*curreny)
                calc_profit.val((valueToShow+total_profit)*curreny)
            }
        }
        
    })
})