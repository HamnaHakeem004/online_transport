<?php
    include 'connect.php';
    echo "<br>";
    if(isset($_POST['submit']))
{
    $fname = isset($_POST['fname']) ? $_POST['fname']:"null";
    $lname = isset($_POST['lname']) ? $_POST['lname']:"";
    $un = isset($_POST['username']) ? $_POST['username']:"";
    $email = isset($_POST['email']) ? $_POST['email']:"";
    $pw = isset($_POST['password']) ? $_POST['password']:"";
    
    echo $fname ."<br>";
    echo $lname."<br>";
    echo $un."<br>";
    echo $email."<br>";
    echo $pw."<br>";


    $sql = "INSERT INTO member (firstName, lastName, username, email, pass)
VALUES ('$fname', '$lname', '$un', '$email', '$pw')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}

?>