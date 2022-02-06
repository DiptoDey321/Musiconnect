<?php
    include('db.php');
    session_start();
    // $details= $_POST['eventdetails'];
    $details=$_POST['eventdetails'];
    $date1=$_POST['date'];
    $month1="9";
    $year1=$_POST['year'];
    $date2=$year1."-";
    $date3=$month1."-";
    $date4=$date2.$date3;
    $date5=$date4.$date1;
    $id1 = $_SESSION['id'];

    $reg= "insert into calendar(event_date,event_details,m_id) values('$date5','$details', '$id1')";
	$num=mysqli_query($con , $reg);


    if($num == 1){
       header('location:calendar.php');
    }else{
        echo "email already taken";
        
    }
?>