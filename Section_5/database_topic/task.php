<?php


$db = new PDO("mysql:host=localhost;dbname=tasks;charset=utf8", "root", "");

$db->exec("INSERT INTO task (task) VALUES ('NOW ANOTHER VALUES')");