<?php

require 'connect.php';

if (isset($_POST['edit'])) {
    $reserveId = $_POST['reserveId'];
    $userid= $_POST['memberid']; 
    $from = $_POST['from'];
    $to = $_POST['to'];
    $distance = $_POST['distance'];
    $date = $_POST['date'];
    $type = $_POST['jtype'];
    $price = $_POST['price'];

    if($type == 'Bus'){
        $pricePerKm = 10.00;
    }else{
        $pricePerKm = 5.00;
    }

    //Price calculations for ride
    $price = $distance * $pricePerKm;


    $sql = "UPDATE reservations SET 
            routeStart ='$from', routeEnd ='$to', distance ='$distance', reserveDay ='$date', jtype = '$type', price = '$price' WHERE memberId='$userid' "; 

    if($conn->query($sql)===TRUE){
        echo "Record Updated"."<br>".
        "<button onclick='location.href=".'"adminReservations.php'.'"'."'>"."Return"."</button>";; 
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



}

?>