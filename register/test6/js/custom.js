$(document).ready(function(){
    $('#country').on('change', function(){
        var iso2 = $(this).val();
    
        if(iso2){
            $.ajax({
                type:'POST',
                url:'getAjaxData.php',
                data:'iso2_val='+iso2,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change', function(){
        var countryIdVal = $('#country').val();
        var iso2ID = $(this).val();
        if(iso2ID){
            $.ajax({
                type:'POST',
                url:'getAjaxData.php',
                data:'state_iso2='+iso2ID+'&sel_country_id='+countryIdVal,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
