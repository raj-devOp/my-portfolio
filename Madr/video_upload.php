<html>
<body>

<?php
move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);

    echo "<video width='400' height='500' controls>
    <source src='upload/" . $_FILES["file"]["name"] . "' type='video/mp4'>
    </video>";
    
</body>
</html>