<?php

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


