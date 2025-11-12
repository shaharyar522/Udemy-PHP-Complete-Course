<?php
include 'db.php';
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name =  htmlspecialchars(trim($_POST["username"]));
    $password =  htmlspecialchars(trim($_POST["password"]));

    //select data

    $sql = "SELECT * FROM users WHERE username = '$name' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['log_in'] = true;
            $_SESSION['username'] = $user['username'];
            header("Location: admin.php");
            exit();
        } else {
            echo "Invaild password ";
        }
    } else {
        echo "user not found ";
    }


}


//mysqli_query : sever ko sql query send karnay ki ek query hain .
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>

    <h2>Login</h2>

    <?php if ($error): ?>
        <p style="color:red">
            <?php echo $error; ?>
        </p>
    <?php endif; ?>





    <form action="" method="POST">

        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>

        <input type="submit" value="Login">
    </form>



</body>

</html>
<!-- db colse optinal but fast applicatio -->
<?php
mysqli_close($conn);
?>