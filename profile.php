

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="profile.css?v=<?php echo time();?>">
  <script src="refresh.js"></script>
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
            <li><a href="mhome.php" data-after="Home">HOME</a></li>
            <!-- <li><a href="#" data-after="Service">LOGIN</a></li> -->
            <li><a href="mprofile.php" data-after="Projects">Profile</a></li>
            <!-- <li><a href="#" data-after="Contact">LATEST PROGRAM</a></li> -->
            <li><a href="#" data-after="Contact">About</a></li> 
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
          
              <?php
              session_start();
                  include('db.php');
                  $_SESSION['m'] = $_GET['id'];
                  $str=mysqli_real_escape_string($con,$_GET['id']);
                  $sql="select * from musician where Name like '%$str%'";
                  $res=mysqli_query($con,$sql);
                  if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){
                        $img=$row['image'];
          
                        }
                    }
                    
              ?>
          
              <img  src="img/<?php echo $img?>" alt="" height="100">
          

    <div class="herocontainer">
        
      <div>
          <div class="details">
            

            </script> -->
                <?php
                    include('db.php');
                    
                    
                    $mname=$_GET['id'];
                    $str=mysqli_real_escape_string($con,$_GET['id']);
                    $sql="select * from musician where Name like '%$str%'";
                    $res=mysqli_query($con,$sql);
                    if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){
                    echo  '<h1>'.'Name: '.$row['Name'].'</h1>';
                    echo "<br/>";
                    echo '<h1>'.'Genre: '.$row['Genre'].'</h1>';
                    echo '<iframe style="display:none;" name="target"></iframe>';
                    session_start();
                    $sender_id=$_SESSION['id'];
                    $s='select * from follow where sender_id = '.$sender_id.' && receiver_id= '.$row['m_id'].'';
                    
                    $res1=mysqli_query($con,$s);
                    $num1 = mysqli_num_rows($res1);
                    if ($result = $con->query($s)){
	                  $row1 = $result->fetch_assoc();
                    }
                    if($num1==1){
                      $output="<a href='follow.php?name=".$row['Name']."&id=".$row['m_id']."' target='target'> <button  type='button' class='cta' onclick='refresh()'>Unfollow</button> </a>";
                      header("refresh: 1;");
                    }
                    else{
                      $output="<a href='follow.php?name=".$row['Name']."&id=".$row['m_id']."' target='target'> <button  type='button' class='cta' onclick='refresh()'>Follow</button> </a>";
                      header("refresh: 1;");
                    }

                    echo $output;
                    
                     //header("refresh: 0;");
                    // echo "<a href='follow.php?name=".$row['Name']."&id=".$row['m_id']."' target='target'> <button  type='button' class='cta' onclick='button1()'>Follow</button> </a>" ;                  
                    // echo "<a href='#?name=".$row['Name']."&id=".$row['m_id']."' target='target'> <button type='button' class='cta2' onclick='button3()'>Follower</button> </a>" ;
                    // echo "<a href='#?name=".$row['Name']."&id=".$row['m_id']."' target='target'> <button style='margin-right:10px' type='button' class='cta2' onclick='button3()'>Following</button> </a>" ;
                    echo "<div class='dropdown'>";
                    echo "<button type='button' class='cta2'>Follower</button>";
                      echo "<div class='dropdown-content'>";
                            $receiver_id=$row['m_id'];
                            $s1='select * from follow where receiver_id= '.$receiver_id.'';
                            $res2=mysqli_query($con,$s1);
                            if(mysqli_num_rows($res2)>0){
                              while($row2=mysqli_fetch_assoc($res2)){  
                                  echo "<a href='#'>".$row2['sender_name']."</a>";
                              }
                            }
                            else{
                              echo "<a href='#'>'No Follower'</a>";
                            }      
                      echo "</div>";
                
                    echo "</div>";
                    
                    
                    echo "<div class='dropdown2'>";
                    echo "<button type='button' class='cta2'>Following</button>";
                      echo "<div class='dropdown-content2'>";
                            $receiver_id=$row['m_id'];
                            $s1='select * from follow where sender_id= '.$receiver_id.'';
                            $res2=mysqli_query($con,$s1);
                            if(mysqli_num_rows($res2)>0){
                              while($row2=mysqli_fetch_assoc($res2)){  
                                  echo "<a href='#'>".$row2['receiver_name']."</a>";
                              }
                            }
                            else{
                              echo "<a href='#'>'No Following'</a>";
                            }      
                      echo "</div>";
                
                    echo "</div>";


                    }
                    }  
                            
        echo "</div>";
        
        
        
        ?>
       
        
        
          
      </div>
    </div>
  </section>
  <br>
  <!-- End Hero Section  -->
  <section id="menubar">
          <div class="menubutton">
            <a href="mprofile.php"><button class="button" type="button">Timeline</button></a>
            <a href="calendar.php"><button class="button" type="button">Calendar</button></a>
            <!-- <button class="button" type="button"></button> -->
            <?php
            echo "<a href='book.php?name=$mname'><button class='button' type='button'>Book Now</button></a>";
            ?>
          </div>
  </section>

<!-- Slideshow container -->
<section id="softwares">
<div class="slideshow-container">
  <div><br>
    <div class="section-top">
      <h1 class="section-title">News<span> Feed</span></h1>
                      <div id='post_bar'>
      
                      <?php
                      include('db.php');
                      $str1=mysqli_real_escape_string($con,$_GET['id']);
                      $sql="select * from musician where Name like '%$str1%'";
                      $res=mysqli_query($con,$sql);
                      
                      if ($res = $con->query($sql)){
                        $row1 = $res->fetch_assoc();
                        }
                      if(mysqli_num_rows($res)>0){
                        $sql1="select * from posts where m_id = ".$row1['m_id']."";
                        $res1=mysqli_query($con,$sql1);
                        if(mysqli_num_rows($res1)>0){
                         
                          
                      while($row=mysqli_fetch_assoc($res1)){
                                  echo  "<div id='post'>";
                                  echo "<div>";
                                  echo "<div class='status_bar'>".$row1['Name']."</div>";
                                  
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
                       
                            ?>

      </div>

    </div>
  </div>
<br>
</section>
</body>
</html>


