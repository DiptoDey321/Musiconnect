<?php

session_start();
include('db.php');
$paid = $_POST['amount'];
$pid=$_SESSION['pid'];






$reg= "update  booking SET paid_amount=$paid where id=$pid ";
mysqli_query($con , $reg);

$s1= " select * from booking where id=$pid";

$result1 = mysqli_query($con, $s1);
$row = $result1->fetch_assoc();
$price=$row['totalprice'];
// $advance=$row['advance'];
// $advance=$advance1/100;
$due=$price-$paid;

$query= "UPDATE booking SET  due=$due WHERE id=$pid ";
$data=mysqli_query($con,$query);
?>