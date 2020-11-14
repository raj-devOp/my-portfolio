<?php
include_once('include/Database.php');
define('SS_DB_NAME', 'mdb_rg5319d');
define('SS_DB_USER', 'rg5319d');
define('SS_DB_PASSWORD', 'rg5319d');
define('SS_DB_HOST', 'mysql.cms.gre.ac.uk');

$dsn	= 	"mysql:dbname=".SS_DB_NAME.";host=".SS_DB_HOST."";
$pdo	=	"";
try {
	$pdo = new PDO($dsn, SS_DB_USER, SS_DB_PASSWORD);
}catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
$db 	=	new Database($pdo);
?>