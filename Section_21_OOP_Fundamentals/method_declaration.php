<?php  
///  ❓ What is a method?
// Answer:
// “A method is a simple  function that is defined inside a class. 


//note: 
///If a function is written outside a class, it is just a normal function — not a method.”


class user {
      public function create() {

      }
}

$method = get_class_methods('user');
var_dump($method);


?>