<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="msignup.css?v=<?php echo time();?>">
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
            
                    </div>
                </div>
            </section>
        </div>
        <div class = "form">
            <form action="uedit.php" method="post">
        

                <div class="container">
                    <label><b>Username</b></label>
				    <input type="text" placeholder="Enter username" name="name"  >

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