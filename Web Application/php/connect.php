<?php

    $conn = mysqli_connect("localhost","root","","public_transport_reserve");

    if(!$conn){
        die("Coonection failed!".mysqli_connect_error());
    }
?>
