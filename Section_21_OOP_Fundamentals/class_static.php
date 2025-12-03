<?php 

class User_static {

    public static $userCount = 0;
      
    public $userInstanceCount = 0;
    public function __construct()
    {
        self::$userCount++;
        $this->userInstanceCount++;
    }


      public static function getUserCount(){
        return "Total users ". self::$userCount;
    }


}

$user = new User_static();
$user1 = new User_static();
$user1 = new User_static();
$user1 = new User_static();


// echo User_static::$userCount;

echo $user->userInstanceCount;