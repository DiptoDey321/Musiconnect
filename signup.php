<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css?v=<?php echo time();?>">
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
            <form action="registration.php" method="post">
        

                <div class="container">
                    <label><b>Username</b></label>
				    <input type="text" placeholder="Enter Username" name="user"  required>


                    <label ><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" name="email" required>

                    <label ><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>

                    <button type="submit">Login</button>
                
                </div>

                <div class="container1" style="background-color:#f1f1f1">
                <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
                    <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
                </div>
            </form>
        </div>
    
</body>
</html>