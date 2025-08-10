<?php
    include 'connect.php';

if(isset($_POST['submit']))
{
    $fname = isset($_POST['fname']) ? $_POST['fname']:"";
    $lname = isset($_POST['lname']) ? $_POST['lname']:"";
    $email = isset($_POST['email']) ? $_POST['email']:"";
    $nic = isset($_POST['nic']) ? $_POST['nic']:"0";
    $busregno = isset($_POST['busno']) ? $_POST['busno']:"0";

    $sql = "INSERT INTO driver (firstName, lastName, email,nic, busNo)
    VALUES ('$fname', '$lname', '$email', '$nic', '$busregno')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully"."<br>".
        "<button onclick='location.href=".'"driverReg.php.'.'"'."'>"."Return"."</button>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}

?>