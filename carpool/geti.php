<?php
require 'cdb.php'; //sends information to database
$link = mysqli_connect('mysql.cms.gre.ac.uk', 'rg5319d', 'rg5319d', 'mdb_rg5319d');
$query = 'SELECT type,img FROM images WHERE id="' . $_GET['id'] . '"'; 
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
header('Content-Type: ' . $row['type']);
echo $row['img'];
?>