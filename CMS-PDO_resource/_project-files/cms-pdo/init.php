<?php

// Autoload classes
require_once "autoloader.php";



// Start Session
session_start();

// Include the main configuration file
require_once "config/config.php";

//
//// Load database
//require_once "classes/Database.php";


// Include helper functions
require_once "helpers.php";


// Define global constants
define("APP_NAME", "CMS PDO System");
define("PROJECT_DIR", "cms-pdo");
?>

