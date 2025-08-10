<?php
session_start();
require 'connect.php';
$userid = $_GET['member_id'];

$sqlid = "SELECT reserveId FROM reservations WHERE memberId='$userid'";
$sqlprice = "SELECT price FROM reservations WHERE memberId='$userid'";
$sqlreserveid = "SELECT reserveId FROM reservations WHERE memberId='$userid'";

$result = mysqli_query($conn, $sqlid);
$result2 = mysqli_query($conn, $sqlprice);
$result3 = mysqli_query($conn, $sqlreserveid);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $reserveid = $row['reserveId'];

    }
}
if ($result2->num_rows > 0) {
    while ($row = $result2->fetch_assoc()) {
        $price = $row['price'];
        $reserveid = $row['reserveId'];

    }
}
if ($result3->num_rows > 0) {
    while ($row = $result3->fetch_assoc()) {
        
        $reserveid = $row['reserveId'];

    }
}



if (isset($_POST['submit'])) {

    $fname = $_POST['email'];
    $add = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $nameon = $_POST['nameoncard'];
    $cnumber = $_POST['cardnumber'];
    $exmonth = $_POST['expmonth'];
    $exyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];

    $sql = "INSERT INTO payment(memberId,reserveID, email, addres, usercity, userstate, zip, nameoncard, cardnum, expmonth, expyear,cvv,price)
                VALUES ('$userid','$reserveid','$fname','$add','$city','$state','$zip','$nameon','$cnumber','$exmonth','$exyear','$cvv','$price')";

    if ($conn->query($sql) === TRUE) {
        header("location:paymentReturn.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



}




?>