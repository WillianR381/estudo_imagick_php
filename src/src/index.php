<?php ?>


<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="imageToUpload" id="imageToUpload">
  <input type="submit" value="uploadImage" name="submit">
</form>

</body>

<style>
    body{
        height: 100vh ;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    form{
        display: flex;
        flex-direction: column;
        margin-bottom: 300px;    
    }

    form input[type=submit]{
        max-width: 100px;
    }
</style>
</html>
