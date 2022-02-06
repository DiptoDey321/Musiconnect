<?php

session_start();
include('db.php');




$price=$_POST['price'];
$advance=$_POST['advance'];
$id = $_SESSION['id'];
// $_SESSION['price']=$price;
// $_SESSION['advance']=$advance;

$query= "UPDATE musician SET price=$price , advance=$advance WHERE m_id=$id ";
$data=mysqli_query($con,$query);
	



?>