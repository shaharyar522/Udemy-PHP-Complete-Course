phpinfo();  // complete serve ki information lainy k leuy

class Car {
    public $color = "Black";  // property

    public function start() { // method
        return "Car start hogayi";
    }
}

$myCar = new Car();  // object
echo $myCar->start();
OOP

Q# : CLASS : CLASS IS A BLUE PRINT/TEMPLATE OR DESINGE THAT CREATE A OBJECT

Q# : METHOD : 
// Answer:
// “A method is simply a function that is defined inside a class. If a function is written outside a class, it is just a normal function — not a method.”


Q# : OBJECT :  INSTANCE OF CLASS (MTALB K CLASS K ANDAR SHB MEHTOD OR PROPERLY KO HUM USE KR SAKTAIN HIAN )

Object Kya Hota Hai? 

Instance of class" ka matlab kya hota hai?
Instance = Copy jo design se banti hai
Instance = Object
Super Easy:
Instance of class = class ka real piece / real copy / real cheez

class Car {
    public $color = "Red";
    
}
$myCar = new Car();
✔️ $myCar = object
✔️ $myCar ke through hum Car class ke data aur functions use kar sakte hain.

⭐ Object ko hum kahan use karte hain?
🎯 1. Class ka data use karne ke liye
echo $myCar->color;  


Q# property : just a simple variable like this..


Extera note:    public $color = "Red";






public, Protected, Private 

public => less secure (hnta hian mtlb kam )
Protected => (uay zayda secure hnta hin)

Private => more extera secrue hnta hin




class k andar properties kya hnti hian and  method

properties :      public $username = "shari";    //uay properties hian 

method :     public function setUsername()    // and now uay maray pass method hian 
    {
        echo $this->username;
    }






class User
{

    public $username = "shari";   //uay properties hian 
    public function setUsername()    // and now uay maray pass method hian 
    {
        echo $this->username;
    }
}



