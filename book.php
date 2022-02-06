<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="book.css">
    <title>Document</title>
</head>
<body>
  <?php
  session_start();
  $mname=$_GET['name'];
  $_SESSION['m_name']=$mname;
  ?>

<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="form-header">
                        <h1>Confirm Your Date</h1>
                    </div>
                    <form action="booking.php" method="post">
                        <div class="form-group"> <select class="form-control" name="events" required>
                            <option value="" selected hidden>Events</option>
                            <option>National Holiday</option>
                            <option>University Programme</option>
                            <option>Army/Navy/Airforce event</option>
                            <option>Corporate event</option>
                            <option>Charity event</option>
                            <option>Weeding</option>
                            <option>Sporting event</option>
                            <option>Festival/ outdoor event</option>
                        </select> <span class="select-arrow"></span> <span class="form-label">Events</span> </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <input class="form-control" type="date" name="date" required> <span class="form-label">Date</span> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <input class="form-control" type="text" placeholder= Place name="place" required> <span class="form-label">Place</span> </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-md-4">
                               
                                      
                            </div>
                            <div class="col-md-4">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <input class="form-control" type="email" placeholder="Enter your Email" name="email" required> <span class="form-label">Email</span> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <input class="form-control" type="tel" placeholder="Enter you Phone" name="phone" required> <span class="form-label">Phone</span> </div>
                            </div>
                        </div>
                        <div class="form-btn"> 
                            <a href="payment.php"><button class="submit-btn">Book Now</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>