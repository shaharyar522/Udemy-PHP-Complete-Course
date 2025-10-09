<?php

// If statements - Examples (Article)
// 1. AND Operator (&&)
// The && operator returns true if both conditions are true.



$age = 25;
$hasID = true;
 
if ($age >= 18 && $hasID) {
    echo "You are allowed to enter.";
} else {
    echo "Access denied.";
}

// Output: You are allowed to enter.
// 2. OR Operator (||)
// The || operator returns true if at least one condition is true.



$age = 16;
$hasPermission = true;
 
if ($age >= 18 || $hasPermission) {
    echo "You are allowed to enter.";
} else {
    echo "Access denied.";
}

// Output: You are allowed to enter.


// 3. NOT Operator (!)
// The ! operator inverts the result of a condition (i.e., if a condition is true, ! will make it false).



$isMember = false;
 
if (!$isMember) {
    echo "You need to sign up.";
} else {
    echo "Welcome back!";
}

// Output: You need to sign up.


// 4. Combining Logical Operators
// You can combine multiple logical operators to evaluate more complex conditions.



$age = 20;
$isMember = true;
$hasDiscountCoupon = false;
 
if ($age >= 18 && ($isMember || $hasDiscountCoupon)) {
    echo "You are eligible for the discount.";
} else {
    echo "No discount available.";
}
// Output: You are eligible for the discount.


// Summary of Logical Operators:
// && : Both conditions must be true.

// || : At least one condition must be true.

// ! : Inverts the condition.

// These examples show how logical operators can control program flow based on multiple conditions.