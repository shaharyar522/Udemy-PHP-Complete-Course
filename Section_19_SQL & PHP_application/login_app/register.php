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
        //  select data
        $sql = "SELECT * FROM users WHERE username = '$name' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        //check the username is exit ;
        if (mysqli_num_rows($result) === 1) {
            $error = "Username already exit, Please Choose anohter";
        } else {
            //insert data
            $sql = "INSERT INTO users (username, email, password) VALUES ('$name', '$user_email', '$password_hastag')";
            if (mysqli_query($conn, $sql)){
                $_SESSION['log_in'] = true;
                $_SESSION['username'] = $user['username'];
                header("Location: admin.php");
                exit();
            } else {
                echo "Something happing data no inserting, error: " . mysqli_errno($conn);
            }
        }
    }
};
//mysqli_query : sever ko sql query send karnay ki ek query hain .
?>



<div class="container">



    <div class="form-container">
        <form action="" method="POST">
            <h2>Create Your Account</h2>
            <!-- when rong enery show this errors -->
            <?php if ($error): ?>
                <p style="color:red">
                    <?php echo $error; ?>
                </p>
            <?php endif; ?>

            
            <label for="username">Username:</label>
            <!--php echo isset($name) ? $name : '';  value mainhum agr mtalb agr dosray input main errors ayen tu uay baki remain rahin   -->
            <input type="text"  value="<?php echo isset($name) ? $name : '';?>" id="username" name="username" placeholder="Enter Your Username">

            <label for="email">Email:</label>
            <input type="email" value="<?php echo isset($user_email)? $user_email : ''; ?>" id="email" name="email" placeholder="Enter Your Email">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter Your password">

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Enter Your Confirm Password" required>

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