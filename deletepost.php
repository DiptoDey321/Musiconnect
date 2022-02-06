<?php
    session_start();
    include('db.php');
    $id1=$_SESSION['id'];
    $text1= $_GET['text'];
    $query= "DELETE FROM posts WHERE post LIKE '$text1' and m_id='$id1'" ;
    $data=mysqli_query($con,$query);
    if($data){
        header('location:mprofile.php');
    }
    else{
        echo "Failed to delete";
    }
?>