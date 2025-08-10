<?php
    $currentid = $_GET['id'];
    echo $currentid;
    require 'connect.php';

    $reserveid = "";
    $memberid = "";
    $from="";
    $to ="";
    $distance ="";
    $date = "";
    $type = "";
    $price = "";
    
    $sql = "SELECT * FROM reservations WHERE memberId = '$currentid'";
   
    $result = mysqli_query($conn, $sql);
    echo "hi";
    if(mysqli_num_rows($result)>0){
        if($row = mysqli_fetch_assoc($result)){
            $reserveid = $row['reserveId'];
            $memberid = $row['memberId'];
            $from= $row['routeStart'];
            $to = $row['routeEnd'];
            $distance = $row['distance'];
            $date = $row['reserveDay'];
            $type = $row['jtype'];
            $price = $row['price'] ;
            
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
<form action="updateeditadminreservation.php?id=" method="post">
        <div class="reserve-box">
            <p>Enter details below.</p><br><br><br>
            <div class="data">
                <label for="">Resrve ID:</label>
                <input type="text" id="reserveID" name="reserveId" value="<?php echo $reserveid ?>"><br><br>

                <label for="">Member ID:</label>
                <input type="text" id="memberID" name="memberid" value="<?php echo $memberid ?>" readonly><br><br>

                <label for="">From:</label>
                <input type="text" id="from" name="from" value="<?php echo $from ?>" required > <br><br>
    
                <label for="">To:</label>
                <input type="text" id="to" name="to" value="<?php echo $to ?>" required><br><br>

                <label for="">Distance:</label>
                <input type="number" id="distance" name="distance" value="<?php echo $distance ?>" required><br><br>
    
                <label for="">Date:</label>
                <input type="date" id="date" name="date" value="<?php echo $date ?>" required><br><br>
    
                <label for="">Journey Type:</label>
                <select name="jtype" value="<?php echo $type ?>" id="jtype"  >
                    <option value="Null">Please select</option>
                    <option value="Bus">Bus</option>
                    <option value="Train">Train</option>
                </select><br><br>

                <label for="">price:</label>
                <input type="text" id="price" name="price" value="<?php echo $price ?>" required><br><br>

                <input id="edit" type="submit" value="update" name="edit" >
            </div>
        </div>
    </form>
</body>
</html>