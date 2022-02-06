

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

		<th>Musician</th>
		
		<th>Event Type</th>
		<th>Place</th>
		<th>Date</th>
		
		<th colspan="2" align="center">Operation</th>
	</tr>
	<?php
				
				session_start();
				include('db.php');
				
			    $name=$_SESSION['name'];
				$query = "SELECT * FROM booking where customername LIKE '$name'";
				if ($result = $con->query($query)) {
				
				while ($row = $result->fetch_assoc()) {
                    $s =$row['status'];
                    $c="confirm";
					
				 
                 echo " <tr>";
				 echo "	<td>". $row["musicianname"] ."</td>";
					 

				 	
                 echo "<td>". $row["event"] ."</td>";
                 echo "	 <td>". $row["place"] ."</td>";
                 echo "	 <td>". $row["date"] ."</td>";
                 echo "   <td>". $row["status"] ."</td>";
                     
                     
                     
                     if(strcmp($s,$c)==0){
                         echo "<td><a href='payment.php?id=".$row['id']."' >Pay Now</a></td>";
                     }
				 	
					 
				 	
				echo " </tr>";
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