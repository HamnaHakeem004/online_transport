<?php

require 'connect.php';

if (isset($_POST['edit'])) {
    $paymentid = $_POST['payid'];
    $userid= $_POST['memberid']; 
    $reserveid= $_POST['reserveid'];
    $name= $_POST['username'];
    $cardnum = $_POST['cardnum'];
    $price = $_POST['price'];
    


   


    $sql = "UPDATE payment SET 
            paymentId ='$paymentid', memberId ='$userid', reserveID ='$reserveid', nameoncard ='$name', cardnum= '$cardnum', price = '$price' WHERE paymentId='$paymentid' "; 

    if($conn->query($sql)===TRUE){
        echo "Record Updated"."<br>".
        "<button onclick='location.href=".'"adminpayment.php.'.'"'."'>"."Return"."</button>";; 
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



}

?>