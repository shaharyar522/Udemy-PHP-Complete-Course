<?php
// Q# : OBJECT :  INSTANCE OF CLASS (MTALB K CLASS K ANDAR SHB MEHTOD OR PROPERLY KO HUM USE KR SAKTAIN HIAN )




class User_one
{

    public $username = "shari";   //uay properties hian 
    public function create()     // now uay maray pass ek method hian 
    {
        return "creating user";
    }
}

$user = new User_one();


echo $user->create();
