<?php
    // session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="post.css?v=<?php echo time();?>">
    <title>Document</title>
</head>
<body>
<div id="post">
    <div>

    </div>
    <div>
    <button>
    <div class="dots"><div>
    </button>
        <div class="status_bar"><?php echo $_SESSION['name']?></div>
            <p class="posttext">
            <?php
                echo  $row_user['post'];
            ?>
        </p>
        
        <br/><br/>

        
    </div>
    <br>
    <br>
</div>
<br>
<br>
</body>
</html>
