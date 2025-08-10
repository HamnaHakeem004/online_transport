<?php 
    include 'connect.php';
    $paymentId = $_GET['id'];

    $sql = "DELETE FROM payment WHERE paymentId='$paymentId'";

    if(mysqli_query($conn,$sql)){
        echo "Record is deleted!"."<br>".
        "<button onclick='location.href=".'"adminpayment.php.'.'"'."'>"."Return"."</button>";
    }else{
        echo "Error :".mysqli_error($conn)."<br>".$sql;  
    }
?>