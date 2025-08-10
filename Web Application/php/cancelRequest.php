<?php
    require 'connect.php';

    if(isset($_POST['submit'])){
        $reserveId = $_POST['reserveId'];
        $email = $_POST['email'];
        $reason = $_POST['reason'];

        $sql = "INSERT INTO cancelations( reserveId, userEmail, reason)VALUES ('$reserveId','$email','$reason')";

        if($conn->query($sql)===TRUE){
            echo "Your Request is submitted to admin for review.";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

?>