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
    
  ?>

    <header>
      <div class="logo">Quick Ride</div>
      <nav class="nav-bar">
        <ul>
          <li>
            <a href="" class="active">Home</a>
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
        <!--  <li>
            <a href="signup.html">Sign Up</a>
          </li>
          <li>
            <a href="signin.html">Sign In</a>
          </li>-->
          <li id="account">
            <a href="userDashboard.php"><button><img src="img/user.png" alt="" /></button></a>
          </li>
        </ul>
      </nav>
    </header>
    <!-------------------------------Don't change code below-------------------------------------->
    <!-------------------------------Enter Code your Below---------------------------------------->
    <!--=============================Hero Section===============================================-->
    <section>
      <div class="hero">
        <!--<img src="img/Images/bus-2.png" alt="">-->

        <div class="slideshow-container">
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="img/Images/slide1.png" />
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="img/Images/slide2.png" />
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="img/Images/slide3.png" />
          </div>
        </div>

        <div class="hero-text">
          <img src="img/bus.png" alt="" />
          <span
            >The journey <br />
            of thousand miles <br />
            begins with a single <br />
            step</span
          ><br />
          <a href="reserve.php"><input type="button" value="Get Start"/></a>
        </div>
      </div>
    </section>
    <!--=============================End Hero Section===============================================-->

    <!--=============================Reserve Section=================================================-->
    <section id="reserve-section">
      <div class="reserve-tab">
        <div class="form">
          <form action="">
            <h2>Let's Book Your Ticket.</h2>

            <div class="inputbox">
              <i class="bx bxs-user"></i>
              <label for=""><p>From</p></label>
              <input type="text" required name="from" /> 
            </div>

            <div class="inputbox">
              <i class="bx bxs-user"></i>
              <label for=""><p>To</p></label>
              <input type="text" required name="to" /> 
            </div>

            <div class="inputbox">
              <i class="bx bxs-user"></i>
              <label for=""><p>Date</p></label>
              <input type="date" required name="date" /> 
            </div>

            <div class="inputbox">
              <input id="reserve-me" type="button" value="Reserve me!" />
            </div>
          </form>
        </div>
      </div>
    </section>

    <!--==========================Featured destinations===================================-->
    <section id="Featured">
      <div class="container">
        <div class="Featured">
          <h1>Featured Destinations</h1>
          <div class="destinations">
            <ul>
              <li>Jaffna - Colombo</li>
              <li>Pointpedro - Colombo</li>
              <li>Kilinochchi - Colombo</li>
              <li>Vauniya - Colombo</li>
              <li>Anuradhapura - Colombo</li>
              <li>Baticaloa - Colombo</li>
              <li>Akkarapaththu - Colombo</li>
              <li>Ampara - Colombo</li>
              <li>Dambulla - Colombo</li>
              <li>Polonnaruwa - Colombo</li>
            </ul>

            <ul>
              <li>Jaffna - Colombo</li>
              <li>Pointpedro - Colombo</li>
              <li>Kilinochchi - Colombo</li>
              <li>Vauniya - Colombo</li>
              <li>Anuradhapura - Colombo</li>
              <li>Baticaloa - Colombo</li>
              <li>Akkarapaththu - Colombo</li>
              <li>Ampara - Colombo</li>
              <li>Dambulla - Colombo</li>
              <li>Polonnaruwa - Colombo</li>
            </ul>
            <img src="img/Images/featured.png" alt="" />
          </div>
        </div>
      </div>
    </section>

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

    <!--=============================Slide show  scrippt====================-->
    <script>
      let slideIndex = 0;
      showSlides();

      function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
          slideIndex = 1;
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
      }
    </script>
  </body>
</html>
