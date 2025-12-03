<?php

class shari
{
    public function height()
    {
        $shari = "5 foot 7 inch";
        echo $shari;
    }

    public $timing = "1hours";
    public $leave = "no";

    public function __toString()
    {
        return "Timing: {$this->timing}, Leave: {$this->leave}";
    }
}

$object_shari = new shari();  // object instance of class (matlb hum es ko shari k andar jo bhi method hian
//un ko use kr satkainhain )


// echo $object_shari->height();

//
echo "$object_shari";
