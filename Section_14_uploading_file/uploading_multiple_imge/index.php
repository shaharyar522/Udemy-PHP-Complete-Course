<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploading multiple file</title>
</head>
<body>
    

<h1>Uploading Multiples Files</h1>

<form action="upload.php" method="POST" enctype="multipart/form-data">
     Select a files : <input type="file" name="files[]" multiple><br><br>
     <input type="submit" value="Uploads">
</form>

</body>
</html>