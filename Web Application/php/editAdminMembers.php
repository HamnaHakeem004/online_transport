<?php
    $currentid = $_GET['id'];
    echo $currentid;
    require 'connect.php';

    $memberid = "";
    $fname = "";
    $lname= "";
    $username="";
    $email = "";
    $pass = "";
    
    
    $sql = "SELECT * FROM member WHERE memberId = '$currentid'";
   
    $result = mysqli_query($conn, $sql);
    echo "hi";
    if(mysqli_num_rows($result)>0){
        if($row = mysqli_fetch_assoc($result)){
            $memberid = $row['memberId'];
            $fname = $row['firstName'];
            $lname= $row['lastName'];
            $username = $row['username'];
            $email = $row['email'];
            $pass = $row['pass'];
            
            
            
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
<form action="updateeditadminMember.php?id=" method="post">
        <div class="reserve-box">
            <p>Enter details below.</p><br><br><br>
            <div class="data">
                <label for="">Member ID:</label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <input type="text" id="reserveID" name="memberid" value="<?php echo $memberid ?>" readonly><br><br>

                <label for="">First Name:</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                <input type="text" id="memberID" name="fname" value="<?php echo $fname ?>" ><br><br>

                <label for="">Last Name:</label>&nbsp &nbsp &nbsp 
                <input type="text" id="from" name="lname" value="<?php echo $lname ?>" required > <br><br>
    
                <label for="">Username:</label> 
                <input type="text" id="to" name="username" value="<?php echo $username ?>" required><br><br>

                <label for="">Email:</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp
                <input type="email" id="distance" name="email" value="<?php echo $email ?>" required><br><br>
    
                <label for="">Password:</label>&nbsp &nbsp &nbsp 
                <input type="text" id="date" name="pass" value="<?php echo $pass ?>" required><br><br>


                <input id="edit" type="submit" value="update" name="edit" >
            </div>
        </div>
    </form>
</body>
</html>