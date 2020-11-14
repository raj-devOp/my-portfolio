<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lists page</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    </head>
<body>

<div class="container1">

<header>
   <h1>Welcome to Carpool</h1>
</header>
  
<article>
 



<?php
	ini_set('display_errors', 1); //borrowed from coursework resources
	error_reporting(~0); 

	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
	if(isset($_GET["txtKeyword"]))
	{
		$strKeyword = $_GET["txtKeyword"];
	}
?>
<form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table width="599" border="1">
    <tr>
      <th>Keyword
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>
<?php
   $serverName = "mysql.cms.gre.ac.uk";
   $userName = "rg5319d";
   $userPassword = "rg5319d";
   $dbName = "mdb_rg5319d";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$sql = "SELECT * FROM search WHERE start LIKE '%".$strKeyword."%' ";
	$query = mysqli_query($conn,$sql);

	$num_rows = mysqli_num_rows($query);

	$per_page = 10;   // Per Page
	$page  = 1;
	
	if(isset($_GET["Page"]))
	{
		$page = $_GET["Page"];
	}

	$prev_page = $page-1;
	$next_page = $page+1;

	$row_start = (($per_page*$page)-$per_page);
	if($num_rows<=$per_page)
	{
		$num_pages =1;
	}
	else if(($num_rows % $per_page)==0)
	{
		$num_pages =($num_rows/$per_page) ;
	}
	else
	{
		$num_pages =($num_rows/$per_page)+1;
		$num_pages = (int)$num_pages;
	}
	$row_end = $per_page * $page;
	if($row_end > $num_rows)
	{
		$row_end = $num_rows;
	}

	$sql .= " ORDER BY id ASC LIMIT $row_start ,$row_end ";
	$query = mysqli_query($conn,$sql);

?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">Id </div></th>
    <th width="98"> <div align="center">Start point</div></th>
    <th width="198"> <div align="center">End point </div></th>
    <th width="97"> <div align="center">Time </div></th>
    <th width="59"> <div align="center">Date </div></th>
    <th width="71"> <div align="center">Costs </div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["id"];?></div></td>
    <td><?php echo $result["start"];?></td>
    <td><?php echo $result["end"];?></td>
    <td><div align="center"><?php echo $result["time"];?></div></td>
    <td align="right"><?php echo $result["date"];?></td>
    <td align="right"><?php echo $result["cost"];?></td>
  </tr>
<?php
}
?>
</table>
<br>
Total <?php echo $num_rows;?> Record : <?php echo $num_pages;?> Page :
<?php
if($prev_page)
{
	echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$prev_page&txtKeyword=$strKeyword'><< Back</a> ";
}

for($i=1; $i<=$num_pages; $i++){
	if($i != $page)
	{
		echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i&txtKeyword=$strKeyword'>$i</a> ]";
	}
	else
	{
		echo "<b> $i </b>";
	}
}
if($page!=$num_pages)
{
	echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$next_page&txtKeyword=$strKeyword'>Next>></a> ";
}
$conn = null;
    
?>
     <span class="auser" >Login page <a href="login.html">Login</a></span> 
    </article>
    </div>
    
</body>
</html>