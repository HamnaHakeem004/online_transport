<?php 
    
    include 'connect.php';
    $memberId = $_GET['id'];

    $sql = "DELETE FROM driver WHERE driverId='$memberId'";

    if(mysqli_query($conn,$sql)){
        echo "Record is deleted!"."<br>".
        "<button onclick='location.href=".'"adminDrivers.php.'.'"'."'>"."Return"."</button>";
    }else{
        echo "Error :".mysqli_error($conn)."<br>".$sql;  
    }
?>
