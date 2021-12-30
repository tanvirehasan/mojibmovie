   $(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'config/ajax.php',
                data:'country_id='+countryID,
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
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'config/ajax.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});




   //Select Hall Name
   function Hall_Select(val){
        $.ajax({
        type: 'post',
        url: 'config/ajax.php',
        data: {
        get_option:val
        },
    success: function (response) {
        document.getElementById("HallName").innerHTML=response; 
        }
    });
    }


    //Select Show Time
   function Time_Select(val){
        $.ajax({
            type: 'post',
            url: 'config/ajax.php',
            data: {get_time:val},
            success: function (response) {
            document.getElementById("Show_Time").innerHTML=response; 
            }
        });



         $.ajax({
            type: 'post',
            url: 'config/ajax.php',
            data: {get_sit:val},
            success: function (response) {
            document.getElementById("SitType").innerHTML=response; 
            }
        });

    }


