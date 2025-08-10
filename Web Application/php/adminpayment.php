<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | New Drivers</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <section id="menu">
        <div class="logo">
            <h2>Quick Ride <br><span>admin</span></h2>
        </div>

        <div class="items">
            <li><a href="#">Dashboard &nbsp &nbsp</a></li>
            <li><a href="adminReservations.php">&nbsp Reservations</a></li>
            <li><a href="adminMembers.php">&nbsp &nbsp Members &nbsp &nbsp</a></li>
            <li><a href="adminCancelations.php">Cancelations</a></li>
            <li><a href="adminDrivers.php">&nbsp New Drivers &nbsp </a></li>
            <li><a href="adminpayment.php"> User Payments</a></li>
            
        </div>

    </section>

    <section id="interface">
        <div class="navigation">
            <div class="search">
                
            </div>
        

            <div class="profile">
                <img src="img/user.png" alt="user" width="50%">
            </div>
        </div>

        
        <div class="details">
            <!--Retrive member data from database-->
            <?php
                require 'connect.php';

                $result = mysqli_query($conn,"SELECT * FROM payment");

                echo "<table border='1' cellpadding='25' width='90%' style='margin:auto;margin-top:70px;cellpadding:20px;background-color: #e8faeb;min-height:500px;'>
                <tr>
                <th>Payment ID</th>
                <th>Member ID</th>
                <th>Reserve ID</th>
                <th>Member Name</th>
                <th>Email</th>
                <th>Card Number</th>
                <th>Price</th>
                <th>Action</th>
                <tr>";

                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>"."&nbsp".$row['paymentId']."</td>";
                    echo "<td>"."&nbsp".$row['memberId']."</td>";
                    echo "<td>"."&nbsp".$row['reserveID']."</td>";
                    echo "<td>"."&nbsp".$row['nameoncard']."</td>";
                    echo "<td>"."&nbsp".$row['email']."</td>";
                    echo "<td>"."&nbsp".$row['cardnum']."</td>";
                    echo "<td>"."&nbsp".$row['price']."</td>";
                    echo "<td>"."&nbsp"."<button onclick='location.href=".'"editAdminpayment.php?id='.$row['paymentId'].'"'."'> Edit</button>"."&nbsp"."&nbsp"
                                        ."<button onclick='deleteRecord(".$row['paymentId'].")'>Delete</button>"."</td>";
                    echo "</tr>";
                }

                echo "</table>";

                mysqli_close($conn);
            ?>
            <script>
                function deleteRecord(id){
                    var result = confirm("Are you sure want to delete this Recoord!");
                    if(result){
                        window.location.href = "deleteAdminpayment.php?id="+id;
                    }else{
                        alert('Record is not deleted!');
                    }
                }
            </script>
        </div>

   
</body>
</html>