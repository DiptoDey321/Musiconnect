<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="musicainprofileedit.css?v=<?php echo time();?>">
    <title>Document</title>
</head>
<body>
    
        <div>
            <section id="header">
                    <div class="header container">
                        <div class="nav-bar">
                            <div class="brand">
                                <h1><span>MUSI</span>CON<span>N</span>ect</h1>
                            </div>
                        <div class="nav-list">
                        <!-- <div class="hamburger"><div class="bar"></div></div> -->
                        <ul>
                            <li><a href="mhome.php" data-after="Home">HOME</a></li>
                            <li><a href="musicianprofileedit.php" data-after="Service">EDIT PROFILE</a></li>
                            <!-- <li><a href="#" data-after="Projects">REGISTRATION</a></li> -->
                            <li><a href="logout.php" data-after="Contact">Log Out</a></li>
                            
                        </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class = "form">
            <form action="medit.php" method="post">
        

                <div class="container">
                    <label><b>Artist</b></label>
				    <input type="text" placeholder="Enter Artist Name" name="artist"  >


                    <label ><b>Genre</b></label>
                    <input type="text" placeholder="Enter Genre" name="genre" >


                    <label ><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" >

                    <button type="submit">Confirm</button>
                
                </div>

                <div class="container1" style="background-color:#f1f1f1">
                 <a href="mprofile.php">  <button type="button" class="cancelbtn">Cancel</button> </a> 
                   
            </form>
        </div>
    
</body>
</html>