<?php session_start(); 
$member_id = $_SESSION['memberId'];
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
    <link rel="stylesheet" href="css/driverreg.css">

</head>

<body>
<?php //echo $member_id;
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
                    <a href="driverReg.php" class="active" >Drive</a>
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
        <div class="content">
            <h2>Be a part of <br> <p>Quick Ride</p>family.</h2><br><span>Work with us, make what you need</span>
            <img src="img/Images/Bus driver2.png" alt="" ><br>
            <a href="driverRegform.php"><input id="btn" type="button" value="Get Start" ></a>
            
        </div>

        <div class="details">
            <h1>Why become a Quick Ride driver</h1>
            <img src="img/Images/Bus driver1.png" alt="">
            <div class="card" id="card1">
                <h4><b>*Get paid fast</b></h4><br>
                <p>When you get paid to drive using Uber, your earnings automatically get transferred to your bank account every week. Plus, with Instant Pay, you can cash out up to 5 times a day</p>
            </div>

            <div class="card">
                <h4><b>*Get support at every turn</b></h4><br>
                <p>If you have questions, you can reach us anytime online or in the app. Ask about background checks, weekly promotions, how to get paid, and much more.</p>
            </div>

            <div class="card">
                <h4><b>*With life insuarance</b></h4><br>
                <p>Life insurance is one of the most important types of insurance to have. It helps financially protect your family in the event of your death.</p>
            </div>
            
        </div>
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