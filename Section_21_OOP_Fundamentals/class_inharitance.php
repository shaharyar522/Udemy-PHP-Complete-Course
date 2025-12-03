<?php

class User
{

    public $name;

    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
    
    public function displayUserInfo(){
        return "User: {$this->name}, Email: {$this->email}";
    }
}

$user = new User('shari','shari@gmail.com');
// echo $user->displayUserInfo();

// inharitance parents ko child k ander extends kya hnva hin mtlab 
class AdminUser extends User {

    public $role;
    

    public function __construct($name, $email, $role)
    {
        parent::__construct($name, $email);
        $this->role = $role;
    }


    public function displayAdminInfo(){
         return "Admin : {$this->name}, Email: {$this->email}, {$this->role}";
    }
      
}

$admin = new AdminUser("Admin", "shari@gamil.com", "role_sahri");

echo $admin->displayAdminInfo();


