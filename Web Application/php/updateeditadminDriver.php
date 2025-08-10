<?php

require 'connect.php';

if (isset($_POST['edit'])) {
    $driverid = $_POST['driverId'];
    $fname= $_POST['fname']; 
    $lname= $_POST['lname'];
    $email = $_POST['email'];
    $nic = $_POST['nic'];
    $busno = $_POST['busno'];


    $sql = "UPDATE driver SET 
            firstName ='$fname', lastName ='$lname', email ='$email', nic ='$nic', busNo = '$busno'WHERE driverId='$driverid' "; 

    if($conn->query($sql)===TRUE){
        echo "Record Updated"."<button onclick='location.href=".'"adminDrivers.php.'.'"'."'>"."Return"."</button>"; 
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



}

?>