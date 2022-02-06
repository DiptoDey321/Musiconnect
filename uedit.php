<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "musiconnect";





$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name= $_POST['name'];
$pass=$_POST['password'];


$id=$_SESSION['id'];
if($name!=""){ 
    $sql = "UPDATE usertable SET username='$name' WHERE userid='$id' ";
    if ($conn->query($sql) === TRUE) {
    	$_SESSiION['name']=$name;
        // echo " Username updated successfully.<br>";
    } else {
        // echo " Error updating username: " . $conn->error;
}

}
if($name==""){
	$name1=$_SESSION['name'];
	$sql = "UPDATE usertable SET username='$name1' WHERE userid='$id' ";
	if ($conn->query($sql) === TRUE) {
        // echo " Name remains same";
    } else {
        //   echo " Error updating name: " . $conn->error;
     }
}


if($pass!="" ){ 
    $sql1 = "UPDATE usertable SET password='$pass' WHERE userid='$id' ";

    if ($conn->query($sql1) === TRUE) {
    	$_SESSION['pass']=$pass;

        // echo " Password updated successfully";
    } else {
        //   echo " Error updating password: " . $conn->error;
     }
}

if($pass==""){
	$pass1=$_SESSION['pass'];
	$sql1 = "UPDATE usertable SET password='$pass1' WHERE userid='$id' ";
	if ($conn->query($sql1) === TRUE) {
        // echo " password remains same";
    } else {
        //   echo " Error updating password: " . $conn->error;
     }
	
}
    





		
header('location:userprofileedit.php');

$conn->close();
?>