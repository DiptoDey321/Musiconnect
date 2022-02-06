

<html>
<head>
	<meta charset="utf-8">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="mhome.css?v=<?php echo time();?>">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<style type="text/css">
		table{
			border-collapse: collapse;
			width: 100%;
			color: black;
			font-family: Century Gothic;
			font-size: 25px;
			text-align: left;
		}
		th{
			background-color: whitesmoke;
			color: black;
		}
		tr:nth-child(even){
			background-color:whitesmoke;
		}
	</style>
</head>
<body>

<table>
	<tr>

		<th>Customer</th>
		<th>Customer'Email</th>
		<th>Customer's Phone no.</th>
		<th>Event Type</th>
		<th>Place</th>
		<th>Date</th>
        <th>Paid Amount</th>
        <th>Due</th>
		
		<!-- <th colspan="2" align="center">Operation</th> -->
	</tr>
	<?php
				
				session_start();
				include('db.php');
				
			    $name=$_SESSION['name'];
				$query = "SELECT * FROM booking where musicianname LIKE '$name'";
				if ($result = $con->query($query)) {
				
				while ($row = $result->fetch_assoc()) {
					
				 echo "
				 <tr>
				 	<td>". $row["customername"] ."</td>
					 <td>". $row["customeremail"] ."</td>

				 	<td>". $row["customerphone"] ."</td>
				 	<td>". $row["event"] ."</td>;
					 <td>". $row["date"] ."</td>;
					 <td>". $row["place"] ."</td>;
                     <td>". $row["paid_amount"] ."</td>;
                     <td>". $row["due"] ."</td>;
				 	
				 	
				 </tr>";
				}
			echo "</table>";
		}
		else{
			echo "0 result";
		}

				$con->close();

				?>
</table>


  

</body>
</html>