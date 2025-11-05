<?php

//trim => remove this extera spaces
//htmlspecialchars => USED FOR SECURITY HACKING 

//
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST["username"]));
    $password = htmlspecialchars(trim($_POST["password"]));

    if (!empty($username) && !empty($password)) {
        echo "Username: $username <br>";
        echo "Password: $password";
    }
};
