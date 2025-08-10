<?php
    include 'connect.php';

    $sql = "SELECT * FROM driver";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo "Driver Id:".$row['driverId']."<br>".
                "first Name:".$row['firstName']."<br>".
                "Last Name:".$row['lastName']."<br>".
                "Email:".$row['email']."<br>".
                "Nic Number:".$row['nic']."<br>".
                "Bus Number:".$row['busNo']."<br>";
        }
    }

?>