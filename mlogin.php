<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css?v=<?php echo time();?>">
    <title>Document</title>
</head>
<body>

    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <a href="#hero"><h1><span>MUSI</span>CON<span>N</span>ect</h1></a>
                </div>
            
            </div>
        </div>
    </section>
    <div class="form">
        <form action="mvalidation.php" method="post">
        

            <div class="container">
                <label ><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" required>

                <label ><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit">Login</button>
                
            </div>

            <div class="container1" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>
</body>
</html>