<?php 

function alert($classname, $mess){

       return $text =  "<div class='alert alert-".$classname." alert-dismissible fade show' role='alert'>
        <strong>".$mess."</strong>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>";

}



//SELECT
function SelectData($TableName, $moresql){

    global $conn;
    $sql = "SELECT * FROM $TableName $moresql";
    $select = mysqli_query($conn, $sql);
    return $select;
}


function Trailer($data){
    $row = mysqli_fetch_array(SelectData('trailer',"WHERE id ='1'"));
    return $row[$data];
}

?>