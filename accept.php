<?php
session_start();
include('db.php');


$c="confirm";
//$email= $_SESSION['email'];
$id=$_GET['id'];
$query= "UPDATE booking SET status='$c' WHERE id='$id' ";
$data=mysqli_query($con,$query);
if($data){
	echo "Updated";
}
else{
	echo "Failed to delete";
}
?>

