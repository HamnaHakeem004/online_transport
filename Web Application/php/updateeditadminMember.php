<?php

require 'connect.php';

if (isset($_POST['edit'])) {
    $memberid = $_POST['memberid'];
    $fname= $_POST['fname']; 
    $lname= $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];


    $sql = "UPDATE member SET 
            firstName ='$fname', lastName ='$lname', username ='$username', email ='$email', pass = '$pass 'WHERE memberId='$memberid' "; 

    if($conn->query($sql)===TRUE){
        echo "Record Updated"."<button onclick='location.href=".'"adminMembers.php.'.'"'."'>"."Return"."</button>"; 
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



}

?>