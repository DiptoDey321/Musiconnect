<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mhome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <li><a href="#" data-after="Home">HOME</a></li>
            <li><a href="#" data-after="Service">Profile</a></li>
            <li><a href="req.php" data-after="Projects">Booking Status</a></li>
            <li><a href="logout.php" data-after="Contact">Log Out</a></li>
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
        <h1>Plan The Perfect Event with Talented Musicians</h1>
        <form class="search" method="post">
            <input type="text" name="str" placeholder="Musician,Genre" require/>
            <button type="submit" name="submit"><i class="fa fa-search"></i></button>
            <!--<input type="submit" name="submit" value="Search"/>-->
        </form>
        

        <?php
        session_start();
        include('db.php');
        if(isset($_POST['submit'])){
            $str=mysqli_real_escape_string($con,$_POST['str']);
            $sql="select * from musician where Name like '$str' or Genre like '$str'";
            $res=mysqli_query($con,$sql);
            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_assoc($res)){
                    echo "<h1>" ."<a href='profile.php?id=".$row['Name']."'>".$row['Name']."</a>"."</h1>";
                    echo "<br/>";
            
                }
            }
            else{
                echo"<h1> Sorry,No search found!!</h1>";
            }
        }
        ?>
      </div>
    </div>
  </section>
  <br>
  <!-- End Hero Section  -->
  
  <section id="softwares">
<div class="slideshow-container">
  <div><br>
    <div class="section-top">
      <h1 class="section-title">News<span> Feed</span></h1>
                      <div id='post_bar'>
      
                      <?php
                      include('db.php');
                      // session_start();
                      // $str1=mysqli_real_escape_string($con,$_SESSION['id']);
                      $sid=$_SESSION['id'];
                      // $name=$_SESSION['name'];
                      
                      $sql="select * from follow where sender_id = $sid ";
                      $res=mysqli_query($con,$sql);
                      
                      if(mysqli_num_rows($res)>0){
                        while($row1=mysqli_fetch_assoc($res)){  
                          $sql1="select * from posts where m_id = ".$row1['receiver_id']."";
                          $res1=mysqli_query($con,$sql1);
                          if(mysqli_num_rows($res1)>0){
                           
                            while($row=mysqli_fetch_assoc($res1)){
                              echo  "<div id='post'>";
                              echo "<div>";
                              echo "<div class='status_bar'>".$row1['receiver_name']."</div>";
                              
                              echo "<p class='posttext'>";
                        
                              echo  $row['post'];
                        
                              echo "</p>";
                              echo "<br/>";
                              echo "<br/>";  
                              echo "</div>";
                              echo "<br>";
                              echo "<br>";
                              echo "</div>";
                              echo "<br>";
                              echo "<br>";
                  }
                  }
                  }
                }
                
                 
              
                 
                      ?>

</div>

</div>
</div>
<br>
</section>




  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div><h1 class="section-title">Contact <span>info</span></h1></div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png"/></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>01642006300</h2>
            
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png"/></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>uiucc@gmail.com</h2>
            
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png"/></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Kallyanpur,Mirpur,Dhaka</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  
</body>
</html>

