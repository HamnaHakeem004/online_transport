<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Quick Ride|Signin</title>
  <!--===================Fonts==============================-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet" />

  <!--===================Style Sheet=========================-->
  <link rel="stylesheet" href="css/signin.css" />
  
</head>

<body>
  <header>
    <div class="logo">Quick Ride</div>
    <nav class="nav-bar">
      <ul>
        <li>
          <a href="../index.html" >Home</a>
        </li>
        <li>
          <a href="../reserve.html">Book</a>
        </li>
        <li>
          <a href="../driverReg.html">Drive</a>
        </li>
        
        <li>
          <a href="../contact.html">Contact</a>
        </li>
        <li>
          <a href="../aboutus.html">About Us</a>
        </li>
        <li>
          <a href="signup.php">Sign Up</a>
        </li>
        <li>
          <a href="" class="active">Sign In</a>
        </li>
        <!--<li id="account">
            <a href=""><img src="img/user.png" alt="" /></a>
          </li>-->
      </ul>
    </nav>
  </header>
  <!------------------------------------------------------------------------------>

  <section>
    <div class="form-box">
      <div class="form-value">
        <form method="post" action="validateLogin.php">
          <h2>Login</h2>

          <div class="inputbox">
            <i class='bx bx-envelope'></i>
            <input type="text"  name="username" required>
            <label for="">Username</label>
          </div>

          <div class="inputbox">
            <i class='bx bxs-lock-alt'></i>
            <input type="password"  name="password" required>
            <label for="">Password</label>
          </div>

          

          <div class="forget">
            <label for=""><input type="checkbox">Remember Me <a href="#">Forget Password</a></label>

          </div>
          <button name="btnLogin">Log in</button>
          <div class="register">
            <p>Don't have a account <a href="signup.php">Register</a></p>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!------------------------------------------------------------------------------->
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