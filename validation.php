<?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'musiconnect');

$email= $_POST['email'];
$pass= $_POST['password'];



$s= " select * from usertable where email = '$email' && password= '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if ($result1 = $con->query($s)){
	$row = $result->fetch_assoc();
	$_SESSION['name']=$row['username'];
	$_SESSION['id']=$row['userid'];

}

if($num == 1){

	$_SESSION['email']=$email;
	$_SESSION['pass']=$pass;
	header('location:home.php');
	

	
}else{
	echo "wrong info";
	header('location:index.php');
}

?>