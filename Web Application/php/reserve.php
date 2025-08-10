<?php session_start(); 
$member_id = $_SESSION['memberId'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Ride|Book</title>
    <!--===================Fonts==============================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

    <!--===================Style Sheet=========================-->
    <link rel="stylesheet" href="css/reserve.css">
    <!--===================Script==============================-->
    <script src="js/mainScript.js"></script>

</head>

<body>
<?php //echo $member_id;?>
    <header>
        <div class="logo">Quick Ride</div>
        <nav class="nav-bar">
            <ul>
                <li>
                    <a href="index.php" >Home</a>
                </li>
                <li>
                    <a href="#" class="active" >Book</a>
                </li>
                <li>
                    <a href="driverReg.php" >Drive</a>
                </li>
                
                <li>
                    <a href="contact.php" >Contact</a>
                </li>
                <li>
                    <a href="aboutus.php" >About Us</a>
                </li>
               <!-- <li>
                    <a href="signup.html" >Sign Up</a>
                </li>
                <li>
                    <a href="signin.html" >Sign In</a>
                </li>-->
                <li id="account">
                    <a href="userDashboard.php"><img src="img/user.png" alt="" ></a>
                </li>
            </ul>
        </nav>  
    </header>
    <!-------------------------------Don't change code below-------------------------------------->
    <!-------------------------------Enter your Code below---------------------------------------->
    
    <div class="content">
        <h2>Make a Reservation</h2>
    </div>
    <form action="saveReserve.php?member_id=<?php echo $_SESSION['memberId']?>" method="post">
        <div class="reserve-box">
            <p>Enter your details below.</p><br><br><br>
            <div class="data">
                <label for="">From</label>
                <input type="text" id="from" name="from" required>
    
                <label for="">To</label>
                <input type="text" id="to" name="to" required>

                <label for="">Distance</label>
                <input type="number" id="distance" name="distance" required>
    
                <label for="">Date</label>
                <input type="date" id="date" name="date" required>
    
                <label for="">Journey Type</label>
                <select name="jtype" id="jtype" >
                    <option value="Null">Please select</option>
                    <option value="Bus">Bus</option>
                    <option value="Train">Train</option>
                </select>

                <input id="reserve-btn" type="submit" value="Book" name="book" onclick="validateBook()">
            </div>
        </div>
    </form>

    


    <!-------------------------------Don't change code Below---------------------------------------->
    <footer>
        <div class="footer-content">
            <div class="footer-logo">Quick Ride <br> <span>Reservations Made Easy</span></div><div class="v1"></div>
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