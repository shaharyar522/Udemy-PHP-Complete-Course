<?php 


// / Division Operator

 //  echo 10 % 3;   // Output: 1

// echo  27 % 3 

function isEven($number){
    if($number % 2 == 0){
        return true;
    }else{
        return false;
    }
}
$number = 10;

if(isEven($number)){
    echo "the Number is  {$number} is Even";
}else{
    echo "the  Number is {$number} is Not Even";
}
