<?php

// public, Protected, Private      public => less secure (hnta hian mtlb kam ) Protected => (uay zayda secure hnta hin)
// Private => more extera secrue hnta hin

// "A constructor is a special method in a class that runs automatically when an object is created. It is used to initialize the object’s properties immediately."

//Q kb zaroart hntin hina

// __construct() ki zarurat sirf tab hoti hai jab object create karte waqt value dynamic / different chahiye har object ke liye.
class User_test
{

    public $username;   //uay properties hian 
    
    public function __construct($value)
    {
        $this->username = $value;
    }

    public function setUsername()    // and now uay maray pass method hian 
    {
        echo $this->username;
    }

}

$user = new User_test("shari");
$user_two = new User_test("naem");

$user->setUsername(); 
echo "<br>";
$user_two->setUsername();

// PHLAY SIMPLE ES LINE KO DAHKON TWO LINE KO BAD MAIN NECAY FLOW KO DAHKNA 

//SIMPLE SMAJA JASAY HI MINA  $user = new User_test("shari"); OBJECT K OBANATA HN WO DIRECT CLASS MAIN CONTROUTE MAIN PASS KRTA HAIN OR JB PHR $user->setUsername();  US M PAHLY SAY SHAIR AA GYA HNTA H






// ✅ 1) $user = new User_test("shari");

// Yeh line likhte hi:

// ✔️ "shari" constructor ko PASS hota hai
// ✔️ Constructor automatically run hota hai
// ✔️ $this->username = "shari" set ho jata hai


// Object create karta hai

// Class ke andar ja kar constructor ko check karta hai

// Constructor milay tu us ko automatic run karta hai

// public function __construct($value)
// {
//     $this->username = $value;
// }

// ✅ STEP 2 (BAAD MEIN):

// $user->setUsername();

// 👉 Ab PHP class ke andar jaakar setUsername() method chalata hai.

// Aur wahan se:
// shari





// $user = new User_test("shari");

// ✅ CASE B — Class me constructor NAHI HAI
// class User_test {
//     public $username;
// }


// $user = new User_test();   // ✔️ VALID

