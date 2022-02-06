<html lang="en"><head>
    <meta charset="UTF-8">
    <title>Calendar </title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="bower/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/all.css">
    <!-- <link rel="stylesheet" href="index.css"> -->
</head>
<body>

<div class="calendar disable-selection" id="calendar">
    <div class="left-side">
        <div class="current-day text-center">
        <form action="event.php" method="post">
            <h1 class="calendar-left-side-day"><input type="text" name="date">20</h1>
            
            <div class="calendar-left-side-day-of-week">Sunday</div>
        </div>
        <div class="current-day-events">
            <div>Current Events:</div>
            <ul class="current-day-events-list">
                <li></li>
            </ul>
        </div>
        <div class="add-event-day">
            
                <input type="text" class="add-event-day-field" name="eventdetails" placeholder="Create an Event">
                <button type="submit"  >  click here</button>
            
        </div>
    </div>
    <div class="right-side">
        <div class="text-right calendar-change-year">
            <div class="calendar-change-year-slider">
                <span class="fa fa-caret-left cursor-pointer calendar-change-year-slider-prev"></span>
                
                <span name="year" class="calendar-current-year"><input name="year"></span>
                
                <span class="fa fa-caret-right cursor-pointer calendar-change-year-slider-next"></span>
            </div>
        </div>
        </form>
        <div class="calendar-month-list">
            
            <ul class="calendar-month">
                <li class="" data-month="1">Jan</li>
                <li class="" data-month="2">Feb</li>
                <li class="" data-month="3">Mar</li>
                <li class="" data-month="4">Apr</li>
                <li class="" data-month="5">May</li>
                <li class="" data-month="6">Jun</li>
                <li class="" data-month="7">Jul</li>
                <li class="" data-month="8">Aug</li>
               
                <li class="active" data-month="9">Sep</li>
                
                <li class="" data-month="10">Oct</li>
                <li class="" data-month="11">Nov</li>
                <li class="" data-month="12">Dec</li>
            </ul>
            
        </div>
        <div class="calendar-week-list">
            <ul class="calendar-week"><li>Sun</li><li>Mon</li><li>Tue</li><li>Wed</li><li>Thu</li><li>Fri</li><li>Sat</li></ul>
        </div>
        <div class="calendar-day-list">
            <ul class="calendar-days">
<li class="another-month" data-day="29" data-month="7" data-year="2021"></li>
<li class="another-month" data-day="30" data-month="7" data-year="2021"></li>
<li class="another-month" data-day="31" data-month="7" data-year="2021"></li>
<li class="" data-day="1" data-month="8" data-year="2021"></li>
<li class="" data-day="2" data-month="8" data-year="2021"></li>
<li class="" data-day="3" data-month="8" data-year="2021"></li>
<li class="" data-day="4" data-month="8" data-year="2021"></li>
<li class="" data-day="5" data-month="8" data-year="2021"></li>
<li class="" data-day="6" data-month="8" data-year="2021"></li>
<li class="" data-day="7" data-month="8" data-year="2021"></li>
<li class="" data-day="8" data-month="8" data-year="2021"></li>
<li class="" data-day="9" data-month="8" data-year="2021"></li>
<li class="" data-day="10" data-month="8" data-year="2021"></li>
<li class="" data-day="11" data-month="8" data-year="2021"></li>
<li class="" data-day="12" data-month="8" data-year="2021"></li>
<li class="" data-day="13" data-month="8" data-year="2021"></li>
<li class="" data-day="14" data-month="8" data-year="2021"></li>
<li class="" data-day="15" data-month="8" data-year="2021"></li>
<li class="" data-day="16" data-month="8" data-year="2021"></li>
<li class="" data-day="17" data-month="8" data-year="2021"></li>
<li class="" data-day="18" data-month="8" data-year="2021"></li>
<li class="" data-day="19" data-month="8" data-year="2021"></li>
<li class="" data-day="20" data-month="8" data-year="2021"></li>
<li class="" data-day="21" data-month="8" data-year="2021"></li>
<li class="" data-day="22" data-month="8" data-year="2021"></li>
<li class="" data-day="23" data-month="8" data-year="2021"></li>
<li class="" data-day="24" data-month="8" data-year="2021"></li>
<li class="" data-day="25" data-month="8" data-year="2021"></li>
<li class="" data-day="26" data-month="8" data-year="2021"></li>
<li class="" data-day="27" data-month="8" data-year="2021"></li>
<li class="" data-day="28" data-month="8" data-year="2021"></li>
<li class="" data-day="29" data-month="8" data-year="2021"></li>
<li class="" data-day="30" data-month="8" data-year="2021"></li>
<li class="another-month" data-day="1" data-month="9" data-year="2021"></li>
<li class="another-month" data-day="2" data-month="9" data-year="2021"></li>
<li class="another-month" data-day="3" data-month="9" data-year="2021">
</li><li class="another-month" data-day="4" data-month="9" data-year="2021"></li>
</ul>
        </div>
    </div>
</div>

 <script async="" src="scripts/all.js"></script> 
<!-- <script>
     var j = new CALENDAR();
     
    // var elements = document.getElementsByClassName("CALENDAR");
    // var value = elements[9].value;
    var date=j.getFirstElementInsideIdByClassName(CALENDAR);
    document.write(date);
        
    
</script> -->
</body>
</html>