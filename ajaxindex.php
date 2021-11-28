<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<!-- <script>
  function showHint(str) {
    if (str.length <= 3) {
      document.getElementById("txtHint").innerHTML = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      }
      xmlhttp.open("GET", "gethint.php?qt="+str, true);
      xmlhttp.send();
    }
  }
</script> -->





<script type="text/javascript">

  function fetch_select3(val){
     $.ajax({
       type: 'post',
       url: 'ajaxhit.php',
       data: {
        get_option:val
     },
   success: function (response) {
      document.getElementById("new_select3").innerHTML=response; 
     }
   });
  }

</script>



</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form action="">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
</form>


<form method="post">
<select name="users" onchange="fetch_select(this.value)">
  <option value="">Select a person:</option>
  <option value="Dhaka">Dhaka</option>

  </select>
</form>

<select id="new_select" onchange="fetch_select3(this.value)">
  <option>Hall Name</option>
</select>









<select id="new_select3" >
  <option>Select City</option>
  
</select>


</body>
</html>