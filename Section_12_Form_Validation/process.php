<?php

//trim => remove this extera spaces  e.g when user typed like     sahri   yar      khan  in input they remove this

//htmlspecialchars => USED FOR SECURITY HACKING        for example when hacker typed this  <script>alert(Hello)</script>

//
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST["username"]));
    $password = htmlspecialchars(trim($_POST["password"]));

    if (!empty($username) && !empty($password)) {
        echo "Username: $username <br>";
        echo "Password: $password"; 
    }
};
