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
$name= $_POST['artist'];
$pass=$_POST['password'];

$genre=$_POST['genre'];
$id=$_SESSION['id'];
if($name!=""){ 
    $sql = "UPDATE musician SET Name='$name' WHERE m_id='$id' ";
    if ($conn->query($sql) === TRUE) {
    	$_SESSiION['name']=$name;
        // echo " Username updated successfully.<br>";
    } else {
        // echo " Error updating username: " . $conn->error;
}

}
if($name==""){
	$name1=$_SESSION['name'];
	$sql = "UPDATE musician SET Name='$name1' WHERE m_id='$id' ";
	if ($conn->query($sql) === TRUE) {
        // echo " Name remains same";
    } else {
        //   echo " Error updating name: " . $conn->error;
     }
}


if($pass!="" ){ 
    $sql1 = "UPDATE musician SET password='$pass' WHERE m_id='$id' ";

    if ($conn->query($sql1) === TRUE) {
    	$_SESSION['pass']=$pass;

        // echo " Password updated successfully";
    } else {
        //   echo " Error updating password: " . $conn->error;
     }
}

if($pass==""){
	$pass1=$_SESSION['pass'];
	$sql1 = "UPDATE musician SET password='$pass1' WHERE m_id='$id' ";
	if ($conn->query($sql1) === TRUE) {
        // echo " password remains same";
    } else {
        //   echo " Error updating password: " . $conn->error;
     }
	
}
    
if($genre!="" ){ 
    $sql1 = "UPDATE musician SET Genre='$genre' WHERE m_id='$id' ";

    if ($conn->query($sql1) === TRUE) {
        $_SESSION['genre']=$genre;

        // echo " genre updated successfully";
    } else {
        //   echo " Error updating genre: " . $conn->error;
     }
}

if($genre==""){
	$genre1=$_SESSION['genre'];
	$sql1 = "UPDATE musician SET Genre='$pass1' WHERE m_id='$id' ";
	if ($conn->query($sql1) === TRUE) {
        // echo " genre remains same";
    } else {
        //   echo " Error updating genre: " . $conn->error;
     }
	
}




		
header('location:musicianprofileedit.php');

$conn->close();
?>