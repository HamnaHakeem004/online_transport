<?php session_start(); 
$member_id = $_SESSION['memberId'];
$price = $_SESSION['price'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Ride|Home</title>
    <!--===================Fonts==============================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

    <!--===================Style Sheet=========================-->
    <link rel="stylesheet" href="css/paymentForm.css">

</head>

<body>
<?php // echo $member_id;?>
    <header>
        <div class="logo">Quick Ride</div>
        <nav class="nav-bar">
            <ul>
                <li>
                    <a href="index.php" >Home</a>
                </li>
                <li>
                    <a href="reserve.php" >Book</a>
                </li>
                <li>
                    <a href="driverReg.php">Drive</a>
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
    <div class="container">
    <?php echo "<h3 style='margin-top:-600px;margin-left:-50px'>"."Your Journey cost is:"."   ".$price.".00"."</h3>"; ?>

    <form action="savePayment.php?member_id=<?php echo $_SESSION['memberId'] ?>" method="post">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="fname" placeholder="Your Name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="address" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text"  name="city" placeholder="Colombo">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text"name="state" placeholder="Sri Lanka">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" name="zip" placeholder="123 456">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="img/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" name="nameoncard" placeholder="mr. Asanka Dilshan">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" name="cardnumber" placeholder="070 123 4567 ">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" name="expmonth" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" name="expyear" placeholder="2027">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name="cvv" placeholder="123">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" name="submit" value="proceed to checkout" class="submit-btn" onclick.href="userDashboard.php">

    </form>

</div>


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