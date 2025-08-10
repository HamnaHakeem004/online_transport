<?php
session_start();


require 'connect.php';

if (isset($_POST['book'])) {
  
    $userid= $_GET['member_id']; 
    $from = $_POST['from'];
    $to = $_POST['to'];
    $distance = $_POST['distance'];
    $date = $_POST['date'];
    $type = $_POST['jtype'];

    if($type == 'Bus'){
        $pricePerKm = 10.00;
    }else{
        $pricePerKm = 5.00;
    }

    //Price calculations for ride
    $price = $distance * $pricePerKm;
    $_SESSION['price'] = $price;
    
    $sql = "INSERT INTO reservations (memberId, routeStart, routeEnd, distance, reserveDay, jtype, price)
            VALUES('$userid','$from','$to','$distance','$date','$type','$price')"; 

    if($conn->query($sql)===TRUE){
        header("location:payment.php");
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



}

?>