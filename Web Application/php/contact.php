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
    <link rel="stylesheet" href="css/driverreg.css">

</head>

<body>
<?php

session_start();
 isset($_COOKIE["username"])?$_COOKIE["username"]:"";

 if(isset($_SESSION["username"])){
   //echo "Hello".$_SESSION["memberId"];
 }else{
   //header("location: signin.php");
 }
 
?>
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
                    <a href="driverReg.php" >Drive</a>
                </li>
                
                <li>
                    <a href="contact.php" class="active" >Contact</a>
                </li>
                <li>
                    <a href="aboutus.php" >About Us</a>
                </li>
                <!--<li>
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
        <div class="content">
            <h2>We’re just a<br> <p> Phone</p>away.</h2><br><span>You can get help from us 24/7 hours.</span>
            <img src="img/Images/call-center.png" alt="" ><br>
            <a href=""><input id="btn" type="button" value="Make a call" ></a>
            
        </div>

        <div class="details">
            <h1>You asked, we answered</h1>
            <img src="img/Images/call-center-2.png" alt="">
            <div class="card" id="card1">
                <h4><b>We value your time</b></h4><br>
                <p>People who drive using the Quick Ride wanted the option of contacting us by phone when they needed help or had a question. <br><br>  Thanks to their feedback, Uber offers in-app and phone support for drivers on the road or off.
                    <br>
                    Whether you have a question about your account or want to report an incident, you can contact us.
                    <br><br>
                    To speak directly with a trained agent on the phone, go to Contact page in the Quick Ride Website, then navigate to make a call you’re experiencing to see the support options available.</p>
                </p>
            </div>
            
           <!--<div class="card">
                <h4><b>*Get support at every turn</b></h4><br>
                <p>If you have questions, you can reach us anytime online or in the app. Ask about background checks, weekly promotions, how to get paid, and much more.</p>
            </div>

            <div class="card">
                <h4><b>*With life insuarance</b></h4><br>
                <p>Life insurance is one of the most important types of insurance to have. It helps financially protect your family in the event of your death.</p>
            </div>-->
            
        </div>
    </div>





    <!-------------------------------Don't change code Below---------------------------------------->
    <footer>
        <div class="footer-content" id="footer-content">
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