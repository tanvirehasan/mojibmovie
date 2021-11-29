   
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


