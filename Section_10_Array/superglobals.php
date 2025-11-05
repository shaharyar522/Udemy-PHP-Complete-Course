<?php 

//superglobal - Array  in php

// $GLOBALS
// $_SERVER
// $_POST
// $_GET
// $_COOKIE
// $_FILES
// $_ENV
// $_SESSION


//if you access the the globals function inside this

// $app = "PHP CMS";

// function examplefunction(){
//     //   echo $GLOBALS['app'];
//       print_r($GLOBALS);
// }
// examplefunction();


//anohter example
// if (isset($_GET["name"]) && isset($_GET["age"])) {

//     $name = $_GET["name"];
//     $age = $_GET["age"];
//     echo "Name: $name <br> Age: $age";

// } else {

//     echo "No data received!";

// }


$name = $_GET["name"];

$age = $_GET["age"];
$status = $_GET["status"];
echo "Name :" .$name . "<br>";
echo "Age :" . $age . "<br>";
echo "Satus:" . $status . "<br>";


// echo $_SERVER["SERVER_NAME"];

// SHOW File location 
echo $_SERVER["PHP_SELF"];

echo "<br>";

echo $_SERVER["HTTP_USER_AGENT"];


