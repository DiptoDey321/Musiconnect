<?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'musiconnect');

$artist= $_POST['artist'];
$email= $_POST['email'];
$pass= $_POST['password'];
$genre= $_POST['genre'];


 $s= " select * from musician where Email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "email already taken";
}
else{
	$reg= "insert into musician(Name,Email,password,Genre) values ('$artist' ,'$email', '$pass','$genre')";
	mysqli_query($con , $reg);
	
	$_SESSION['email']=$email;
	$_SESSION['name']=$artist;
	$_SESSION['genre']=$genre;
	$_SESSION['pass']=$pass;
	
	
}

if($num==0){

	$s1= " select * from musician where Email = '$email' ";
	$result1 = mysqli_query($con, $s1);

	$num1 = mysqli_num_rows($result1);
	if ($result1 = $con->query($s1)){
		$row = $result1->fetch_assoc();
		
		$_SESSION['id']=$row['m_id'];
		header('location:mhome.php');
		
		
		
	}
	
}




?>