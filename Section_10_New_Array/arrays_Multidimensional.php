<?php

// Multidimensional Array  => any array inside another array is know as multidimetion aarya

//Array inside another array
// [[...], [...]]

// $students = [
//     ["Ali", 20, "Lahore"],
//     ["Hamza", 22, "Karachi"],
//     ["Ahsan", 21, "Islamabad"]
// ];


$students = [
    ["atif", 50, "laravel developer"],
    ["zahid", 40, "laravel"],
    ["shari kahn", 20, "laravel"]
];


echo $students[0][2];
//expected output laravel develop



echo "<br>";

$students = [
    ["Ali", 20, "Lahore"],
    ["Hamza", 22, "Karachi"],
    ["Ahsan", 21, "Islamabad"]
];

echo $students[1][0];  // Output: Hamza


echo "<br>";

$products = [
    ["name" => "watch", "price" => 1000, "stock" => 2],
    ["name" => "laptop", "price" => 8000, "stock" => 10],
    ["name" => "mouse", "price" => 1500, "stock" => 15]
];

function calculateTotalPrice($products){

  $total = 0;
  foreach($products as $product){

    $total += $product['price'];

  }

  return $total;
  
}

$totalprice = calculateTotalPrice($products);

echo "Total price of this all  products:$ " . $totalprice;



