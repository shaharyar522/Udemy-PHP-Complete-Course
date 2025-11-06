<?php 


function greetUserWithTime($name , $greeting = "Good morning"){
    
    echo "$name , $greeting \n";

}

greetUserWithTime("shari");
echo "<br>";
greetUserWithTime("ali" , "Good Evening");