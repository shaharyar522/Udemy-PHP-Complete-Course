<?php  

function greet($name){
    echo "Hello i am {$name} , Wellcome to PHP";
}

greet("shari");



function calculateRectangleArea($length , $width ){
     echo $length * $width;
}

calculateRectangleArea(10,5);


echo "<br>";


function  calculatesum($a, $b){
return  $a + $b;
}

$sum = calculatesum(1,4);
echo "the of total value is = $sum";