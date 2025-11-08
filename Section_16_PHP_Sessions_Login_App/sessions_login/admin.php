<?php  
session_start();
if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    
<h2>Welcome to <?php echo $_SESSION['username']?> admin</h2>

<a href="logout.php">Logout</a>

</body>
</html>