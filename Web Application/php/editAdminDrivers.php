<?php
    $currentid = $_GET['id'];
    echo $currentid;
    require 'connect.php';

    $driverid = "";
    $fname = "";
    $lname= "";
    $email = "";
    $nic = "";
    $busno = "";
    
    $sql = "SELECT * FROM driver WHERE driverId = '$currentid'";
   
    $result = mysqli_query($conn, $sql);
    echo "hi";
    if(mysqli_num_rows($result)>0){
        if($row = mysqli_fetch_assoc($result)){
            $driverid = $row['driverId'];
            $fname = $row['firstName'];
            $lname= $row['lastName'];
            $email = $row['email'];
            $nic = $row['nic'];
            $busno = $row['busNo'];
            
            
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
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/editadmin.css">
</head>
<body>
<form action="updateeditadminDriver.php?id=" method="post">
        <div class="reserve-box">
            <p>Enter details below.</p><br><br><br>
            <div class="data">
                <label for="">Driver ID:</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <input type="text" id="reserveID" name="driverId" value="<?php echo $driverid ?>" readonly><br><br>

                <label for="">First Name:</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                <input type="text" id="memberID" name="fname" value="<?php echo $fname ?>" ><br><br>

                <label for="">Last Name:</label>
                <input type="text" id="from" name="lname" value="<?php echo $lname ?>" required > <br><br>
    
                <label for="">Email:</label>&nbsp &nbsp 
                <input type="text" id="to" name="email" value="<?php echo $email ?>" required><br><br>

                <label for="">NIC No:</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                <input type="number" id="distance" name="nic" value="<?php echo $nic ?>" required><br><br>
    
                <label for="">Bus No:</label>&nbsp &nbsp &nbsp 
                <input type="text" id="date" name="busno" value="<?php echo $busno ?>" required><br><br>


                <input id="edit" type="submit" value="update" name="edit" >
            </div>
        </div>
    </form>
</body>
</html>