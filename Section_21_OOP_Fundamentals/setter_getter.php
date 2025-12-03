<?php
//setter 
//hum apna properties main value ko set krtain hain class k andar     private $name;

//getter
//now jo values hum ny set ki hian us ko getter k throw hum access kartain hain righ now..!!

// Adwin Dias sir




class User_setter_getter
{
    private $name;

    private $email;

    public function __construct($name, $email)
    {
        $this->getEmail();
        // $this->email = $email;
        // $this->name = $name;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            echo "Not a valid Email";
        }
    }
}

$user = new User_setter_getter("shari", "shari@gamil.com");
// echo $user->getEmail();

$user->setEmail('admiupdate@gmail.com');

 echo $user->getEmail();














//setter 
//hum apna properties main value ko set krtain hain class k andar     private $name;

//getter
//now jo values hum ny set ki hian us ko getter k throw hum access kartain hain righ now..!!



//uay mara simpel code hian

// class User_setter {
//     private $name;


//     public function setname($name){
//         $this->name = $name;
//     }

//     public function getname(){
//         return $this->name;
//     }

// }
// $user = new User_setter();
// $user->setname("shari");  //settings value
// echo  $user->getname();
