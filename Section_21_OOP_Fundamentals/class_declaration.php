<?php

//defination : class is a blueprint/templates or funcationaliy that  inside the class multiple 
// mehtod and porperties ,, 



class user {}





// uay method buy defulat shb class daita hin
$classes = get_declared_classes();
foreach ($classes as $class) {
    //echo "$class" . "<br>";
}

$date = new DateTime();

// Correct timezone
$timezone = new DateTimeZone("Asia/Karachi");

// Set timezone
$date->setTimezone($timezone);

// Get timezone name
echo $date->getTimezone()->getName();


