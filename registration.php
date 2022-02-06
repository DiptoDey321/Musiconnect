<?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'musiconnect');

$name= $_POST['user'];
$email= $_POST['email'];
$pass= $_POST['password'];


$s= " select * from usertable where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "email already taken";
}else{
	$reg= "insert into usertable(username,email,password) values ('$name' ,'$email', '$pass')";
	mysqli_query($con , $reg);
	$_SESSION['email']=$email;
	$_SESSION['name']=$name;
	$_SESSION['pass']=$pass;
	
}

$s1= " select * from usertable where email = '$email' ";

$result1 = mysqli_query($con, $s1);

$num = mysqli_num_rows($result1);
if ($result1 = $con->query($s1)){
	$row = $result1->fetch_assoc();
	
	$_SESSION['id']=$row['userid'];
	header('location:home.php');
}

?>