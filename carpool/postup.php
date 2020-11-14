<html>
<head>

</head>

<body>
<?p
 $conn = mysql_connect("mysql.cms.gre.ac.uk", "rg5319d", "rg5319d", "mdb_rg5319d"); //conection to the database
if (!$conn){
    die("cannot connect: " . mysql_error());
}
    mysql_select_db("mdb_rg5319d",$conn);
    
if (isset($_POST['update']))    {
$UpdateQuery = "UPDATE post SET Start='$_POST[start]', End='$_POST[end]', Time='$_POST[time]',
Date='$_POST[date]', Lift='$_POST[lift]', Cars='$_POST[cars]', Cost='$_POST[cost]' WHERE Start='$_POST[hidden]'";
mysql_query($UpdateQuery, $conn);
}
    
    
    
    // get input from post form
    $sql = "SELECT * FROM post";
    $myData = mysql_query($sql,$conn);
echo "<table border=1>
<tr>
<th>Username</th>
<th>Start point</th>
<th>End point</th>
<th>Time</th>
<th>Date</th>
<th>Lift</th>
<th>Cars</th>
<th>Cost</th>
</tr>";
    // sends data to database table
while($record = mysql_fetch_array($myData)){
echo "<form action=post.php method="post">";
echo "<tr>";
echo "<td>" . "<input type=text name=start value=" . $record['Start'] . "</td>";
echo "<td>" . "<input type=text name=end value=" . $record['End point'] . "</td>";
echo "<td>" . "<input type=time name=time value=" . $record['Time'] . "</td>";
echo "<td>" . "<input type=date name=date value=" . $record['Date'] . "</td>";
echo "<td>" . "<input type=text name=lift value=" . $record['Lift'] . "</td>";
echo "<td>" . "<input type=text name=cars value=" . $record['Cars'] . "</td>";
echo "<td>" . "<input type=double name=cost value=" . $record['Cost'] . "</td>";
echo "<td>" . "<input type=hidden name=hidden value=" . $record['Start'] . "</td>";    
echo "<td>" . "<input type=submit name=update value=update" . "</td>";
echo "</form>";
}

echo "</table>";
mysql_close($conn);
    ?>
    
</body>    
</html>