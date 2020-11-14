<?php
function build_calendar($month, $year){
    $mysqli = new mysqli('mysql.cms.gre.ac.uk', 'rg5319d', 'rg5319d', 'mdb_rg5319d');
//    $stmt = $mysqli->prepare("select * from bookings where MONTH(date) =? AND YEAR(date) =?");
//    $stmt->bind_param('ss', $month, $year);
//    $bookings = array();
//    if($stmt->execute()){
//        $result = $stmt->get_result();
//        if($result->num_rows>0){
//            while($row = $result->fetch_assoc()){
//                $bookings[] = $row['date'];
//            }
//            
//            $stmt->close();
//        }
//    }
    // array contains name of all days in a week.
    $daysOfWeek = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    
    //first day of the month
    $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
    
    // no of days in a month contains
    $numberDays = date('t', $firstDayOfMonth);
    
    // information about first day of this month
    $dateComponents = getdate($firstDayOfMonth);
    
    // get name of this month
    $monthName = $dateComponents['month'];
    
    //get index value 0-6 of the first day of this month
    $dayOfWeek = $dateComponents['wday'];
    if($dayOfWeek==0){
        $dayOfWeek = 6;
    } else {
        $dayOfWeek = $dayOfWeek-1;
    }
    
    // get the current date
    $dateToday = date('Y-m-d');
    
    // creating HTML table
    $calendar = "<table class='table table-bordered'>";
    $calendar.= "<center><h2>$monthName $year</h2>";
    
    $calendar.="<a class='btn btn-xs btn-primary' href='?month=".date('m', mktime(0, 0, 0, $month-1, 1, $year))." &year=".date('Y', mktime(0, 0, 0, $month-1, 1, $year))."'>Previous Month</a> ";
    
    $calendar.="<a class='btn btn-xs btn-primary' href='?month=".date('m')."&year=".date('Y')."'>Current Month</a> ";
    
    $calendar.="<a class='btn btn-xs btn-primary' href='?month=".date('m', mktime(0, 0, 0, $month+1, 1, $year))." &year=".date('Y', mktime(0, 0, 0, $month+1, 1, $year))."'>Next Month</a></center><br>";
    
    
    $calendar.= "<tr>";
    
    // calender headers
    foreach($daysOfWeek as $day){
        $calendar.="<th class='header'>$day</th>";
    }
     
     $currentDay = 1;
    
    $calendar.= "</tr><tr>";
    
    // restrict to 7 coloumns
    if($dayOfWeek > 0){
        for($k=0;$k<$dayOfWeek;$k++){
            $calendar.="<td class='empty'></td>";
        }
    }
    
    //data counter begins
//    $currentDay = 1;
    
    //getting month number
    $month = str_pad($month, 2, "0", STR_PAD_LEFT);
    
    while($currentDay <=$numberDays){
        
        // once seventh coloumn reached start a new row
        if($dayOfWeek == 7){
            $dayOfWeek = 0;
            $calendar.="</tr><tr>";
        }
        
        $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
        $date = "$year-$month-$currentDayRel";
        
        $dayname = strtolower(date('l', strtotime($date)));
        $eventNum = 0;
        $today = $date==date('Y-m-d')? "today": "";
        if($date<date('Y-m-d')){
            $calendar.="<td><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>N/A</button>";
        } else {
            $calendar.="<td class='$today'><h4>$currentDay</h4> <a href='book.php?date=".$date."' class='btn btn-success btn-xs'>Book</a>";
        }
        
        $calendar.="</td>";
        
        //incrementing the counters
        $currentDay++;
        $dayOfWeek++;
    }
    
    // completing the row of the last week in month, if neccessary
    if($dayOfWeek != 7){
        $remainingDays = 7-$dayOfWeek;
        for($i=0;$i<$remainingDays;$i++){
            $calendar.="<td></td>";
        }
    }
    
    $calendar.="</tr>";
    $calendar.="</table>";
    
    echo $calendar;   
    
}
?>

<html>
<head>
    
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
    <style>
        table{
            table-layout: fixed;
        }
        
        td{
            width: 34%;
        }
        
        .today{
            background: orange;
        }
        
        body {margin:0;}

/* Css for Index/Home page */
.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}

.navbar-right{
float: right;
}

       
        
.footer{
overflow: hidden;
background-color: #333;
position: fixed;
bottom: 0;
color: white;
width: 100%;
height: 6%;
}
        
        
.fa {
  padding: 10px;
  font-size: 10px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

    </style>

    
</head>

    <body>
        
        <div class="navbar">
  
  <a href="userhome.php"><i><b>Sports Society App</b></i></a>
  <a href="Aboutus.html">About Us</a>
  <a href="Contactus.php">Feedback</a>
<!--  <a href="Inplay.php">In-Play</a>-->
  <a href="Stats.php">Statistics</a>
       
    <div class="navbar-right">
     <a href="userhome.php" class="previous">&laquo; Back</a>
    </div>
</div>
<br><br>	

        
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    
    <?php
        $dateComponents = getdate();
        $month = $dateComponents['mon'];
        $year = $dateComponents['year'];
        echo build_calendar($month, $year);
    
    ?>
    
    </div>
    </div>
    </div>
     <br><br>
<div class="footer">
<a href="https://en-gb.facebook.com/" class="fa fa-facebook"></a>
<a href="https://twitter.com/explore" class="fa fa-twitter"></a>
<a href="https://www.youtube.com/" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/?hl=en" class="fa fa-instagram"></a>
<a href="https://www.snapchat.com/l/en-gb/" class="fa fa-snapchat-ghost"></a> 
<a>copyrights @ rg5319d@gre.ac.uk</a>   
</div>

    </body>
</html>