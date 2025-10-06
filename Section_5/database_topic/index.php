<?php



$db = new PDO("mysql:host=localhost;dbname=tasks;charset=utf8", "root", "");




// $result = $db->query("SELECT * FROM task ");

// foreach ($result as $row) {
//     echo $row['id'] . " : " . $row['task'] . "<br>";
// }


//now insert

$db->exec("INSERT INTO task (task) VALUES ('NOW ANOTHER VALUES')");





