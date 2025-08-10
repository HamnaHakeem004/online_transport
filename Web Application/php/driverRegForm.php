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
    <!--===================script==============================-->
    <script src="js/mainScript.js"></script>

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
    <div class="content">
        <p id="work">Work With Us</p>
    </div>

    <form method="post" action="saveDriver.php">
        <p>Enter your details below.</p><br><br>

        <div class="inputBox">
            <label >First Name:</label>
            <input type="text" placeholder="   First name" id="fname" name="fname" required>
        </div>

        <div class="inputBox">
            <label >Last Name:</label>
            <input type="text" placeholder="  Last name" id="lname" name="lname" required>
        </div>

        <div class="inputBox">
            <label >Email:</label>
            <input type="text" placeholder="  Your best Email" id="email" name="email" required>
        </div>

        <div class="inputBox">
            <label >NIC Number:</label>
            <input type="text" placeholder="  NIC Number" id="nic" name="nic" required>
        </div>

        <div class="inputBox">
            <label for="">Bus Reg Number:</label>
            <input type="text" placeholder="  Bus Reg Number" id="busreg" name="busno" required>
        </div>
        <div class="inputBox">
            <button type="submit"  id="btn-driver-reg" name="submit" onclick="validatedriver()">Submit</button>
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
    <script>
        /**=========driver registration validation===============  */
        function validatedriver(){
        var fname = document.getElementById('fname').value;
        var lname = document.getElementById('lname').value;
        var email = document.getElementById('email').value;
        var nic = document.getElementById('nic').value;
        var busreg= document.getElementById('busreg').value;

        isTexEmpty(fname,'fname');
        isTexEmpty(lname,'lname');
        isTexEmpty(email,'email');
        isTexEmpty(nic,'nic');
        isTexEmpty(busreg,'busreg');

        }
        function isTexEmpty(tf,idd){

            if(tf=="" || tf == null){
                document.getElementById(idd).style.borderColor="red";
            }else{
                document.getElementById(idd).style.borderColor="green";
            }
        }
    </script>
</body>
</html>