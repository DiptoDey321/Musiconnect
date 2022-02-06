<?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'musiconnect');

$event= $_POST['events'];
$date= $_POST['date'];
$place= $_POST['place'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$mname= $_SESSION['m'];
$cname=$_SESSION['name'];
// $price=$_SESSION['price'];
// $advance=$_SESSION['advance'];
// $due=$price-$advance;


$s1= " select * from musician where Name = '$mname' ";

$result1 = mysqli_query($con, $s1);
$row = $result1->fetch_assoc();
$price=$row['price'];
$advance=$row['advance'];
// $advance=$advance1/100;
$due=$price-$advance;





	$reg= "insert into booking(musicianname,customername,customeremail,customerphone,event,date,place,totalprice,advance,due) values ('$mname' ,'$cname', '$email','$phone','$event','$date','$place','$price','$advance','$due')";
	mysqli_query($con , $reg);
	
	// $_SESSION['email']=$email;
	// $_SESSION['name']=$artist;
	// $_SESSION['genre']=$genre;
	// $_SESSION['pass']=$pass;
	
	
// }




?>