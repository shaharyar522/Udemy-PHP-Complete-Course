<?php
include('partials/header.php');
include('partials/navigation.php');

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name =  htmlspecialchars(trim($_POST["username"]));
    $user_email = isset($_POST["email"]) ? htmlspecialchars(trim($_POST["email"])) : "";
    $password =  htmlspecialchars(trim($_POST["password"]));
    $confirm_password =  htmlspecialchars(trim($_POST["confirm_password"]));
    //check the password and confirm password is equal
    if ($password !== $confirm_password) {
        $error =  "Password does not match";
    } else {
        $password_hastag = password_hash($password, PASSWORD_DEFAULT);

        //select data
        $sql = "SELECT * FROM users WHERE username = '$name' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        //check the username is exit ;
        if (mysqli_num_rows($result) === 1) {
            echo "Username already exit, Please Choose anohter";
        } else {
            //insert data
            $sql = "INSERT INTO users (username, email, password) VALUES ('$name', '$user_email', '$password_hastag')";
            if (mysqli_query($conn, $sql)) {
                echo "Data insert";
            } else {
                echo "Something happing data no inserting, error: " . mysqli_errno($conn);
            }
        }
    }
};
//mysqli_query : sever ko sql query send karnay ki ek query hain .
?>



<div class="container">

    <?php if ($error): ?>
        <p style="color:red">
            <?php echo $error; ?>
        </p>
    <?php endif; ?>
<h2>Register</h2>
    <div class="form-container">
        <form action="" method="POST">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br><br>

            <label for="confirm_password">Confirm Password:</label><br>
            <input type="password" id="confirm_password" name="confirm_password" required><br><br>

            <input type="submit" value="Register">
        </form>
    </div>
</div>
<?php

?>
<!-- db colse optinal but fast applicatio -->
<?php
mysqli_close($conn);
?>