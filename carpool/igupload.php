<body> 
<h1>Uploading Images to MySQL</h1><p>
<?php
if ( !($_FILES['userFile']['type']) ) {
   die('<p>No images submitted</p></body></html>'); //borrowed from coursework resources 
}
?>
You submitted this file:<br /><br />
Temporary name: <?php echo $_FILES['userFile']['tmp_name'] ?><br />
Original name: <?php echo $_FILES['userFile']['name'] ?><br />
Size: <?php echo $_FILES['userFile']['size'] ?> bytes<br />
Type: <?php echo $_FILES['userFile']['type'] ?></p>

<?php
require 'cdb.php'; //sends input to the database

    // Validate uploaded image file
if ( !preg_match( '/gif|png|x-png|jpeg/', $_FILES['userFile']['type']) ) {
   die('<p>Only browser compatible images allowed</p></body></html>');
} else if ( strlen($_POST['altText']) < 0 ) {
   die('<p>Please provide meaningful alternate text</p></body></html>');
} else if ( $_FILES['userFile']['size'] > 16384 ) {
   die('<p>Sorry file too large</p></body></html>');

    // Connect to database
} else if ( !($link = mysqli_connect('mysql.cms.gre.ac.uk', 'rg5319d', 'rg5319d', 'mdb_rg5319d')) ) {
   die('<p>Error connecting to database</p></body></html>');

    // Copy image file into a variable
} else if ( !($handle = fopen ($_FILES['userFile']['tmp_name'], "r")) ) {
   die('<p>Error opening temp file</p></body></html>');
} else if ( !($images = fread ($handle, filesize($_FILES['userFile']['tmp_name']))) ) {
   die('<p>Error reading temp file</p></body></html>');
} else {
   fclose ($handle);
   
    // Commit image to the database
   $images = mysqli_real_escape_string($link, $images);
   $alt = htmlentities($_POST['altText']);
   $query = 'INSERT INTO images (type,name,alt,img) VALUES ("' . $_FILES['userFile']['type'] . '","' . $_FILES['userFile']['name']  . '","' . $alt  . '","' . $images . '")';
   if ( !(mysqli_query($link, $query)) ) {
      die('<p>Error writing images to database</p></body></html>');
   } else {
      die('<p>Images successfully copied to database</p></body></html>');
   }
}
?>
</body>