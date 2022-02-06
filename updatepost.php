<?php
    session_start();
    include('db.php');
    $id1=$_SESSION['id'];
    $text1= $_GET['text'];
    $query= "UPDATE posts SET post='$name' WHERE email='$email' " ;
    $data=mysqli_query($con,$query);
    if($data){
        header('location:mprofile.php');
    }
    else{
        echo "Failed to delete";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div class="write"> 
                <!-- <div class="write1" >  -->
                    <form method="post"> 
                        <textarea name="post" placeholder="Whats on your mind"></textarea> 
                        
                        <input class="postbutton" id="post_button" type="submit" value="Post">
                        <br>
                    </form>
        </div>
</body>
</html>