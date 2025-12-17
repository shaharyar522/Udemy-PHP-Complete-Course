<?php

// Access modifiers  => public , protected, private,   in ko hum access modifiers kahtain hain..

//access_modifiers => is the build in features that
// that controler the data inside the class and outside the class.


//Accessible everywhere (inside class, outside class, subclasses) 


//Read documents read please...!!


// Bilkul theek! Tum access modifiers ka concept 100% sahi samajh rahe ho

// 1️⃣ Public — sab jagah access hota hai (global access)
// Class ke andar

// Class ke bahar

// Object se directly

// 2️⃣ Protected — class ke andar access hota hai,
// access the with one class and subclass with method..
// bahar NHI (es ko outside class main bhi access kr saktain ahin)

// Protected ka matlab: (agr aces karan hain tu method k shat public method k saht hum access kr sakay guy)

// “Yeh property sirf class ke andar ya child class me use ho sakti hai.
// Class ke bahar se direct access allowed nahi.”
// ❓ To phir email kaise print hoti hai jab function use karte ho?
// ✔ Kyun ke function class ke ANDAR hota hai

// Aur protected property class ke andar allowed hoti hai.

// q.k function ko mian public rhaka hain 

// 3️⃣ Private (now just only class main hum es ko access kr saktain hain..)




// ⭐ Summary Table


// Modifier	  Same Class	   Child Class	     Outside Class
// public	         ✔	          ✔	                 ✔
// protected	    ✔	          ✔	                  ✘
// private	        ✔	          ✘	                  ✘



// final memory trick for remember 

// public    → everyone
// protected → family (parent + child)
// private   → only me

// ❓ Kya public, protected, private ko properties kehte hain?
// ❌ Nahi  👉 Ye properties nahi hain  ✅ Ye kehlatay hain:   Access Modifiers

class User_acess
{
    //public properties anywhere in the class
    public $name = "shari";
    //protected properties: accessible  with the class inside and subclass
    protected $email = "shari@gamil.com";


    public function displayEmail()
    {
        return $this->email;
    }
    //private properteis: accessible only within the class 
    private $password = "secret123";

    public function displayPassword()
    {
        return $this->password;
    }
}



class  AdminUser_access extends User_acess{
            
    public function getEmailAgain(){
        return  $this->email . "FROM ADMIN CLASS";
    }


    public function displayFromAdmin() {
        return $this->email;
    }
}

$admin = new AdminUser_access();

echo $admin->displayFromAdmin();


//  $user = new User_acess();
//  echo $user->displayPassword();




