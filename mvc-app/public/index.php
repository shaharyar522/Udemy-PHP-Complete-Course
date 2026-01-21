<?php
require_once __DIR__ . '/../app/init.php';
require_once __DIR__ . '/../routes/web.php';


$request = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';




if (array_key_exists('testing', $routes)) {
    
 
   
    echo "True IT does Exits";
} else {
    echo "It does not exits ";
}
