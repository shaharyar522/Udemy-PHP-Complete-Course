<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

   $user_email = $_POST["email"];
   $user_password = $_POST["password"];

   //add dummy txt
   if($user_email === "admin@gmail.com"  && $user_password === "12345"){

          if(isset($_POST["remember"])){
               //set cookies 
               setcookie("user_email", $user_email , time() + (7 * 24 * 60 * 60) , "/");
               setcookie("user_password" , $user_password , time() + (7 * 24 * 60 * 60) , "/");
               setcookie("remember" , "checked" , time() + ( 7 * 24 * 60 *60), '/');
          } else {
             echo "login successfuly";
          }

   } else {
     echo "Invalid email and password ";
   }



}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>

<body>

    <!-- email  , password , remember -->

    <form  method="POST" autocomplete="off">

        Email : <input type="email" name="email" value="<?php if(isset($_COOKIE["user_email"])){ echo $_COOKIE["user_email"];}?>"><br><br>
        password <input type="password" name="password" value="<?php if(isset($_COOKIE["user_password"])){echo $_COOKIE["user_password"];}?>">
        <br><br> 
        <input type="checkbox" name="remember" <?php if(isset($_COOKIE["remember"])) { echo "checked"; } ?>> Remember me
        <button type="submit" name="login">Login</button>

    </form>

</body>
</html>