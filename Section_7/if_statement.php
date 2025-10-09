<?php



$number1 = 20;

$number2 = 30;

if ($number1 > $number2) {
    echo "true correct this";
} elseif ($number1 < $number2) {
    echo "i am second less then";
} else {
    echo "false";
}



//opertors

// == : equal to 
// ===  : equal to data type and value
// !=   : not equal to
// <  : less then
// >   : greate then
// <=  : less than equal to
// >=  : greater than equal to


echo "<br>";

$a = 4;
$b = "4";

if ($a !== $b) {
    echo "true";
} else {
    echo "false";
}

echo "<br>";


$age = 20;
// $hasID = true;
// $allwoed = true;
$member = true;
$hasDiscountCopan = false;

if ($age >= 18 || $allwoed) {
    echo " You are allowed  to entered ";
} else {
    echo "you are not allowed ";
}


echo "<br>";

if (!$member) {
    echo "You need to singup";
} else {
    echo "well come back";
}

echo "<br>";

if($age >= 40 && ($member || $hasDiscountCopan)){

    echo "You are Eligibale for this discount";

}else
{
    echo "your are failing";
}