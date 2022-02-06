<?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'musiconnect');

$email= $_POST['email'];
$pass= $_POST['password'];



$s= " select * from musician where Email = '$email' && password= '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if ($result = $con->query($s)){
	$row = $result->fetch_assoc();
	$_SESSION['name']=$row['Name'];
    $_SESSION['id']=$row['m_id'];
    $_SESSION['genre']=$row['Genre'];
	$_SESSION['pass']=$pass;
	
    
}

if($num == 1){

	$_SESSION['name']=$row['Name'];
	$_SESSION['pass2']=$pass;

    header('location:mhome.php');
    
	

	
}else{
	echo "wrong info";
	header('location:index.php');
}

?>