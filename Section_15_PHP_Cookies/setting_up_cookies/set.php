<?php 

// syntx
// setcookie(name, value , expire ,  path ,  domain ,  secure ,  httonly)


setcookie("user_id" , "101" , time() + (1 *24 * 60 * 60), "/" , "wordpress.org" , true , true );
//jab main es ko chek karo ga cookies show nhi gi q.k main ny domai or dali hnv hain



// if i am runing this

setcookie("user_id" , "101" , time() + (1 *24 * 60 * 60), "/" , "localhost" , true , true );



?>