<?php session_start(); 
$member_id = $_SESSION['memberId'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--===================Fonts==============================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/dash.css">

    <script>
        function updateTime() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12;
            var timeString = hours.toString().padStart(2, '0') + ':' + minutes.toString().padStart(2, '0') + ' ' + ampm;
            document.getElementById('time').textContent = timeString;
        }

        // Update the time every second
        setInterval(updateTime, 1000);
    </script>

</head>

<body>
    
    <header>
        <div class="logo">Quick Ride</div>
        <nav class="nav-bar">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="reserve.php">Book</a>
                </li>
                <li>
                    <a href="driverReg.php">Drive</a>
                </li>
                
                <li>
                    <a href="contact.php">Contact</a>
                </li>
                <li>
                    <a href="aboutus.php">About Us</a>
                </li>
                <!--<li>
                <a href="signup.html" >Sign Up</a>
            </li>
            <li>
                <a href="signin.html" >Sign In</a>
            </li>-->
                <li id="account">
                    <!--<input type="submit" name="logout" id="signout" value="Signout" onclick="logout.php">-->
                    <button id="signout" name="logout" type="submit"
                        onclick="location.href='logout.php'">Signout</button>
                </li>
            </ul>
        </nav>
    </header>

    <div class="dash">

        <table border="1" cellspacing="0" width="100%">
            <tr>
                <th id="logo">Quick Ride</th>
                <td><b> &nbsp My</b>&nbsp Reservations</td>

            </tr>

            <tr>
                <td>
                    <div class="side">
                        <br><span id="time"></span><br><br>
                        <a href="userDashboard.php" class="button">Dashboard</a><br>
                        <a href="reserve.php" class="button">Make a Reservation</a><br>
                        <a href="Cancel_Reservation.php" class="button">Cancel a Reservation</a><br>
                        <a href="myreservations.php" class="button">My Reservations</a><br>
                        <a href="mypayments.php" class="button">Payment</a><br>
                        <a href="driverReg.php" class="button">Become a Driver</a><br>
                        
                    </div>
                </td>

                <td>
                    <!--PHP code below retrieve from database-->

                    <?php 
                        require 'connect.php';

                        $result = mysqli_query($conn,"SELECT * FROM reservations WHERE memberId = '$member_id'");
                        echo "<table border='1' style='margin:auto;cellpadding:50px;border-color:black;'>
                            <tr>
                                <th>Reservation ID</th>
                                <th>Member ID</th>
                                <th>Journey Start</th>
                                <th>Journey End</th>
                                <th>Distance</th>
                                <th>Journey Date</th>
                                <th>Journey Type</th>
                                <th>Price for Journey</th>
                            </tr>";

                        while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                            echo "<td>".$row['reserveId']."</td>";
                            echo "<td>".$row['memberId']."</td>";
                            echo "<td>".$row['routeStart']."</td>";
                            echo "<td>".$row['routeEnd']."</td>";
                            echo "<td>".$row['distance']."KM"."</td>";
                            echo "<td>".$row['reserveDay']."</td>";
                            echo "<td>".$row['jtype']."</td>";
                            echo "<td>".$row['price'].".00"."</td>";
                            echo "</tr>";
                        }
                    echo "</table>";
                    mysqli_close($conn);

                    ?>

                </td>
            </tr>
            <table>
                <div>

                    <footer>
                        <div class="footer-content">
                            <div class="footer-logo">Quick Ride <br> <span>Reservations Made Easy</span></div>
                            <div class="v1"></div>
                            <div class="footer-text">
                                <ul>
                                    <li>FAQ</li>
                                    <li>Contact Us</li>
                                    <li>About Us</li>
                                    <li>Terms and Conditions</li>
                                </ul>

                                <ul>
                                    <li>Offers</li>
                                    <li>Agents</li>
                                    <li>Routes</li>
                                    <li>Service Updates</li>
                                </ul>

                                <ul>
                                    <li>Have a Question?
                                        <br> (+94) 11 111 1111 <br> info@quickride.lk
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </footer>
</body>

</html>