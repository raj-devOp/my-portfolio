<!DOCTYPE html>

<html>
<head>
<link href="style.css" rel="stylesheet">    
<title><a href="Index.php"> Homepage </a></title>    

    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="header">
  <a class="active" href="Index.php" class="logo">Mad-R</a>
  <div class="header-left">
     <a href="contact.html">Contact</a>
    <a href="about.html">About</a>
  </div>
</div>

<div class="w3-container"> 
  <h2><a href="Sports.php">Sports</a></h2>
  <p>Tell me more about Sports.</p>
  <hr>
</div>
    
<div class="w3-container"> 
  <h2><a href="NF.php">#NeverForget</a></h2>
  <p>Tell me more about Sports.</p>
  <hr>
</div>

<article class="w3-container"> 
    <h2><a href="Random.php">Random</a></h2>
  <p>What would you do if you are stranded into imaginary world?</p>
  <hr>
</article>

<section class="w3-container"> 
    <h2><a href="WTF.php">WTF</a></h2>
  <p>If you fool a foolish then would you the person foolish person a fool...</p>
  <hr>
</section>

<section class="w3-container"> 
    <h2>Daily Feeds</h2> <hr>
    <form action="video_upload.php" method="post" enctype="multipart/form-data">
        Video:
        <input type="file" name="file">
        <br><br>
        <input type="submit" name="submit" value="submit">    
    </form>
</section>

    
    
</body>
</html>
