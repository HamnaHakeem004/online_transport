<?php 
    include 'connect.php';
    $reserveId = $_GET['id'];

    $sql = "DELETE FROM cancelations WHERE reserveId='$reserveId'";

    if(mysqli_query($conn,$sql)){
        echo "Record is deleted!"."<br>".
        "<button onclick='location.href=".'"adminCancelations.php.'.'"'."'>"."Return"."</button>";
    }else{
        echo "Error :".mysqli_error($conn)."<br>".$sql;  
    }
?>