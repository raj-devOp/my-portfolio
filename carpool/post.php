<html>
<head>

</head>

<body>
<?p
 $conn = mysql_connect("mysql.cms.gre.ac.uk", "rg5319d", "rg5319d", "mdb_rg5319d"); //connection to the database
if (!$conn){
    die("cannot connect: " . mysql_error());
}
    mysql_select_db("mdb_rg5319d",$conn);
    $sql = "SELECT * FROM post";
    $myData = mysql_query($sql,$conn);
    
    //displays the table on screen
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
    
//retrieve data and sends input into database    
while($record = mysql_fetch_array($myData)){
echo "<tr>";
echo "<td>" . $record['Start point'] . "</td>";
echo "<td>" . $record['End point'] . "</td>";
echo "<td>" . $record['Time'] . "</td>";
echo "<td>" . $record['Date'] . "</td>";
echo "<td>" . $record['Lift'] . "</td>";
echo "<td>" . $record['Cars'] . "</td>";
echo "<td>" . $record['Cost'] . "</td>";
}

echo "</table>";
mysql_close($conn);
    ?>
    
</body>    
</html>