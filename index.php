<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Musiconnect</title>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero"><h1><span>MUSI</span>CON<span>N</span>ect</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <!-- <li><a href="signup.php" data-after="Login">Sign Up</a></li> -->
            <div class="dropdown">
               <li> <button onclick="myFunction()"   class="dropbtn">Sign Up</button> </li>
                <div id="myDropdown" class="dropdown-content">
                    <a href="msignup.php">Sign up as a Musician</a>
                    <a href="signup.php">Sign up as an Audience</a>
                    
                </div>
            </div>
            <!-- <li><a href="login.php" data-after="Sign Up">LOGIN</a></li> -->
            <div class="dropdown2">
               <li> <button onclick="myFunction2()"   class="dropbtn2">Log In</button> </li>
                <div id="myDropdown2" class="dropdown-content2">
                    <a href="mlogin.php">Log in as a Musician</a>
                    <a href="login.php">Log in as an Audience</a>
                    
                </div>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Find The Perfect Event With Talented Musicians </h1>
        <a href="#" type="button" class="cta">Visit</a>
      </div>

        </div>
    </div>
  </section>
  <br>
  <!-- End Hero Section  -->



 
  <section id="contact">
    <div class="contact container">
      <div><h1 class="section-title">Contact <span>info</span></h1></div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png"/></div>
          <div class="contact-info">
            <h1>Contact</h1>
            <h2>965895133</h2>
            
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png"/></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>Musiconnect@gmail.com</h2>
            
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png"/></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Kratos</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="footer">
    <div class="footer container">
      <div class="brand"><h1><span>Mus</span>icon<span>nect</span></h1></div>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png"/></a>
        </div>
      </div>
      <p>Copyright © 2021 Musiconnect All rights reserved</p>
    </div>

       
     <script>
         /* When the user clicks on the button,
                toggle between hiding and showing the dropdown content */
                function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
                }

                // Close the dropdown menu if the user clicks outside of it
                window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    
                if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                    }
                }
                }
                function myFunction2() {
                document.getElementById("myDropdown2").classList.toggle("show");
                }

                // Close the dropdown menu if the user clicks outside of it
                window.onclick = function(event) {
                if (!event.target.matches('.dropbtn2')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content2");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    
                if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                    }
                }
                }
     </script> 
   
 

  

  
</body>
</html>