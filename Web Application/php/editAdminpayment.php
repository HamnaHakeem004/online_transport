<?php
$userpaymentid = $_GET['id'];

require 'connect.php';

$paymentid = "";
$userid = "";
$reserveid = "";
$name = "";
$cardnum = "";
$price = "";


$sql = "SELECT * FROM payment WHERE paymentId = '$userpaymentid'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    if ($row = mysqli_fetch_assoc($result)) {
        $paymentid = $row['paymentId'];
        $userid = $row['memberId'];
        $reserveid = $row['reserveID'];
        $name = $row['nameoncard'];
        $cardnum = $row['cardnum'];
        $price = $row['price'];



    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit | Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/editadmin.css">
</head>

<body>
    <form action="updateeditadminpayment.php?id=" method="post">
        <div class="reserve-box">
            <p>Enter details below.</p><br><br><br>
            <div class="data">
                <label for="">Payment ID:</label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <input type="text" id="reserveID" name="payid" value="<?php echo $paymentid ?>" readonly><br><br>

                <label for="">Member Name:</label>  &nbsp &nbsp &nbsp &nbsp &nbsp
                <input type="text" id="memberID" name="memberid" value="<?php echo $userid ?>" readonly><br><br>

                <label for="">Reserve ID:</label>&nbsp &nbsp &nbsp &nbsp
                <input type="text" id="from" name="reserveid" value="<?php echo $reserveid ?>"  readonly> <br><br>

                <label for="">Member:</label>&nbsp &nbsp &nbsp 
                <input type="text" id="to" name="username" value="<?php echo $name ?>" required><br><br>

                <label for="">Card Number:</label>&nbsp &nbsp &nbsp &nbsp 
                <input type="text" id="distance" name="cardnum" value="<?php echo $cardnum ?>" required><br><br>

                <label for="">Price:</label>&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
                <input type="text" id="date" name="price" value="<?php echo $price ?>" required><br><br>


                <input id="edit" type="submit" value="update" name="edit">
            </div>
        </div>
    </form>
</body>

</html>