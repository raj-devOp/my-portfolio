<?php
session_start();
include_once('cdb.php');
//include_once('logout.php');
?>

<!DOCTYPE html>
<html>
    <head>
     <meta charset="utf-8">
       <title>Welcome to Carpool</title>
         <link href="style.css" rel="stylesheet" type="text/css"> // css
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> // css for the tiny avatar
          </head>
    <body>


<div class="container1">          

<header>
   <h1>Carpool</h1>
</header>
  
    
<article>
<h2>Carpool Welcome Page</h2>
<form>  
  <i style="font-size:24px" class="fa">&#xf0c0;</i>
    <br><br>


  
  <div class="search-container">
    <form action="list.php"> 
      <input type="text" placeholder="Search.." >
      <button type="submit"><i class="fa fa-search"></i></button>
      </form></div>

    
<div class="container">
    
    <form action="regdb.php" method="post">
     
  
			<label>Start point</label>
			<input type="text" name="destinations" required>
		
		
			<label>Destination point</label>
			<input type="text" name="destinatione" required>
		
    <br>
		
			<label>Time</label>
			<input type="time" name="time" required>
	
    <br>    <br>

     
			<label>Date</label>
			<input type="date" name="date" required>
		
    <br>    <br>

    
			<label>Lift</label>
            <select name="lift">
    <option value=""></option>    
    <option value="offer">Offer a Lift</option>
    <option value="get">Get a Lift</option>
         </select>
		
    <br>    <br>

    
			<label>Car type</label>
			<input type="text" name="cars" required>
		
    <br>    <br>

    
			<label>Type of Licence</label>
			  <select name="licence">
    <option value=""></option>                 
    <option value="full">Full Licence</option>
    <option value="fullpass">Full with Pass Plus</option>
    <option value="fullrestrict">Full with Restricted Access</option>
            </select>
	
    <br>    <br>

    
			<label>Insurance Type</label>
			<select name="insurance">
    <option value=""></option>   
    <option value="comprehensive">Comprehensive</option>
    <option value="third">Third Party</option>
    <option value="thirdfire">Third Party with Fire and Theft</option>
            </select>
	
    <br>    <br>

     
			<label>Share Price</label>
			<input type="number" name="costs" required>
   
    <br>    <br>

   		
			<button type="submit" class="btn" name="postage">Post</button>	
    </form>
    
    <form action="igupload.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend>Image Upload</legend>
<label for="userFile">Small image to upload: </label>
<input type="file" size="40" name="userFile" id="userFile"/><br />
<br />
<label for="altText">Description of image</label>
<input type="text" size="60" name="altText" id="altText"/><br />
<br />
<input type="submit" value="Upload File" />
</fieldset>
</form>

    

</div>
 
    <button type="submit" name="logout"> <a href ="logout.php"> Logout</a> </button>
     
     
 </form>  
        


 
<footer> Copyright &copy; rg5319d@gre.ac.uk </footer>


</article>        

</div>      
        
        
        </body>
</html>