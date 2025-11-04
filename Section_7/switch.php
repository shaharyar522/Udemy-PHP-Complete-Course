<?php

//switch statement 

$day = "Monday";
$message = "Today is ";


switch ($day) {

    case "Monday":
        echo "{$message} Monday";
        break;

    case "tuesday":
        echo "Today is tuesday";
        break;

    case "Wednessday":
        echo "today is wednessday";
        break;

    default:
        echo "There is no day";
        break;
}
