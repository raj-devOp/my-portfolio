<snip>
<?php
require 'cdb.php'; //calls cdb.php
if ( !($link = mysqli_connect('mysql.cms.gre.ac.uk', 'rg5319d', 'rg5319d', 'mdb_rg5319d')) ) {
   die('<p>Error connecting to database</p></body></html>');
} else {
   $query = "SELECT id,name,alt FROM images";
   if ( !($result = mysqli_query($link, $query)) ) {
      die('<p>Error reading database</p></body></html>');
   } else {
      for ( $i = 0 ; $i < mysqli_num_rows($result) ; $i++ ) {
        $row = mysqli_fetch_assoc($result);
        echo '<img src="geti.php?id=' . $row['id'] . '" alt="' . $row['alt'] . '" title="' . $row['name']  .'"/>  ' . "\n";
      }
   }
}
?>
</snip>