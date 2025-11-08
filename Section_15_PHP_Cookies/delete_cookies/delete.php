<?php  

// syntx
// setcookie(name, value , expire ,  path ,  domain ,  secure ,  httonly)


// setcookie("user_id" , "101" , time() + (1 *24 * 60 * 60), "/" , "localhost" , true , true );



setcookie("user_id" , "" , time() - 3600 , "/" , "localhost");

?>