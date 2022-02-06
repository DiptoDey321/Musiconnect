<!DOCTYPE html>
<html>
<head>
	<title>User Login and Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
<?php
session_start();
  $_SESSION['pid']=$_GET['id'];
  ?>
	<div class="container">
		<div class="login-box">
		<div class="row">
		<div class="col-md-4 login-left" style="margin: 20px;" >
			<h2>Payment with Card</h2>
			<form action="paid.php" method="post">
				<div class="form-group">
					<label>Card Number</label>
					<input type="text" name="cnumber" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Amount</label>
					<input type="text" name="amount" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary"> Payment </button>
			</form>
		</div>
		<div class="col-md-4 login-right"  style="margin: 20px;">
			<h2>Payment with Bkash</h2>
			<form action="paid.php" method="post">
				<div class="form-group">
					<label>Bkash number</label>
					<input type="text" name="bnumber" class="form-control" required>
				</div>
				
				<div class="form-group">
					<label>Amount</label>
					<input type="text" name="amount" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary"> Payment </button>
			</form>
		</div>
		</div>
	</div>
	</div>
</body>
</html>