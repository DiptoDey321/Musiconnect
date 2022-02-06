<?php

    include('db.php');
    
    session_start();

   
    $sender_name=$_SESSION['name'];
    $sender_id=$_SESSION['id'];
    $receiver_name=$_GET['name'];
    $receiver_id=$_GET['id'];


    $check=" select * from follow where sender_id = '$sender_id' && receiver_id= '$receiver_id'";
    $result = mysqli_query($con, $check);

    $num = mysqli_num_rows($result);
    if ($result = $con->query($check)){
	$row = $result->fetch_assoc();
	
}

if($num==1){
    $sql="DELETE FROM follow WHERE sender_id='$sender_id' && receiver_id= '$receiver_id'";

    mysqli_query($con, $sql);
    header(location:'profile.php');
}
else{


    $sql1= "insert into follow(sender_id,sender_name,receiver_id,receiver_name) values ('$sender_id' ,'$sender_name', '$receiver_id','$receiver_name')";
	mysqli_query($con , $sql1);
    header(location:'profile.php');
}
?>