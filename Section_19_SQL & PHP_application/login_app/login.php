<?php

include('partials/header.php');
include('partials/navigation.php');


// isset($_SESSION["log_in"]) && $_SESSION["log_in"] === true es ko main ek function main add kya hnva hian is_user_logged_in()
// jo k functions.php ki file main hain 

/// i have to add cuturm fuction in function.php is_user_logged_in() and redirect()  
session_start();
if (is_user_logged_in()) {
    // now redriect uay bhi function hain 
    redirect('admin.php');
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name =  htmlspecialchars(trim($_POST["username"]));
    $password =  htmlspecialchars(trim($_POST["password"]));

    //select data
    $sql = "SELECT * FROM users WHERE username = '$name' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    //  if (mysqli_num_rows($result) === 1)     

    //Note 
    //**  uay opar wala maray pass old code hian now es ko main ek function main add kar dia hain hian or us function es main  **//


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