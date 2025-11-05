<?php  


$fruits = ["apple", "orange" , "mango"];

$vegetables = ["potato", "tomato", "carrot", "onion"];


// echo count($fruits);  //now 3 item

// array_push($fruits , "banana");  //  push means array ko insert krna hain last main

// array_pop($fruits);  //last main array min say nikalna hian



//for merged the array in one

// $merged = array_merge($fruits, $vegetables);

// checking to see value is exits

// if(in_array("orange", $fruits)){
//     echo "bana is an arrays";
// }



// print_r($merged);

// $number = [1,3,5,8,9,0];
// $persons = ["profession" => "Developer","name"=>"shari", "age"=>"25"];
// ksort($persons);

// print_r($persons);


//sliced topic

$sliced = array_slice($fruits, 1, 2);
var_dump($sliced);

// print_r($sliced);


