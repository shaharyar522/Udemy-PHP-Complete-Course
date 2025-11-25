<?php

include('partials/header.php');
include('partials/navigation.php');


session_start();
if (isset($_SESSION["log_in"]) && $_SESSION["log_in"] === true) {
    header("Location: admin.php");
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name =  htmlspecialchars(trim($_POST["username"]));
    $password =  htmlspecialchars(trim($_POST["password"]));

    //select data
    $sql = "SELECT * FROM users WHERE username = '$name' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {

        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {
            $_SESSION['log_in'] = true;
            $_SESSION['username'] = $user['username'];
            header("Location: admin.php");
            exit();
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "User not found!";
    }
}
//mysqli_query : sever ko sql query send karnay ki ek query hain .
?>


<div class="container">



    <div class="form-container">

        <form action="" method="POST">
            <h2>Login</h2>

            <?php if ($error): ?>
                <p style="color:red">
                    <?php echo $error; ?>
                </p>
            <?php endif; ?>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="Login">
        </form>
    </div>

</div>

<?php
include('partials/footer.php');
?>
<!-- db colse optinal but fast applicatio -->
<?php
mysqli_close($conn);
?>