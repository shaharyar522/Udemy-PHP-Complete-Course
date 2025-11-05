<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $usernameErr = $emailErr = "";
    $username = $email = "";


    //username k leuy a  validate
    if (empty($_POST['username'])) {
        $usernameErr = "username is required";
    } else {
        $username =  htmlspecialchars(trim($_POST['username']));
    }

    // email validate

    if (empty($_POST['email'])) {
        $emailErr = "email is required";
    } else {
        $email =  htmlspecialchars(trim($_POST['email']));
        

        //chek infomration 
        if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
              $email = "Invalid email formate";
        }
    }



    // last part

    if(empty($usernameErr) && empty($emailErr)){
        echo "Form is submitted";
        echo "<br>";
        echo "Username :" . $username   ."<br>". "Email :" . $email . "<br>";
    }else
    {
        echo "Errors: <br>";
        echo $usernameErr . "<br>" . $emailErr;
    }
}
