<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quick Ride|Home</title>
    <!--===================Fonts==============================-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap"
      rel="stylesheet"
    />

    <!--===================Style Sheet=========================-->
    <link rel="stylesheet" href="css/styles.css" />
  </head>

  <body>
    <?php

    session_start();
    //echo isset($_COOKIE["username"])?$_COOKIE["username"]:"";

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
            <a href="#" class="active">About Us</a>
          </li>
          <!-- <li>
                    <a href="signup.html" >Sign Up</a>
                </li>
                <li>
                    <a href="signin.html" >Sign In</a>
                </li>-->
          <li id="account">
            <a href="userDashboard.php"><img src="img/user.png" alt="" /></a>
          </li>
        </ul>
      </nav>
    </header>
    <!-------------------------------Don't change code below-------------------------------------->

    <div class="members">
      <table cellpadding="10" cellspacing="10" width="50%" style="margin-left:200px;margin-top:200px;">
        <tr>
          <td><h3>IT22115720</h3></td>
          <td><h3>WICKRAMASURENDRA K.D.A.D</h3></td>
        </tr>
        <tr>
          <td><h3>IT22252654</h3></td>
          <td><h3>NAVODYA D.P.D.D</h3></td>
        </tr>
        <tr>
          <td><h3>IT22228444</h3></td>
          <td><h3>PATHIRAJA G.P.K</h3></td>
        </tr>
        <tr>
          <td><h3>IT222152732</h3></td>
          <td><h3>HERATH H.M.H.S</h3></td>
        </tr>
        <tr>
          <td><h3>IT22255938</h3></td>
          <td><h3>RATHNAYAKE R.M.D.C</h3></td>
        </tr>
      </table>
    </div>

    <!-------------------------------Don't change code Below---------------------------------------->
    <footer>
      <div class="footer-content">
        <div class="footer-logo">
          Quick Ride <br />
          <span>Reservations Made Easy</span>
        </div>
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
            <li>
              Have a Question? <br />
              (+94) 11 111 1111 <br />
              info@quickride.lk
            </li>
          </ul>
        </div>
      </div>
    </footer>
  </body>
</html>
