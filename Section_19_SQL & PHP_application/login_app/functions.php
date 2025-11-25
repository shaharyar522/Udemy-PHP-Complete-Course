<?php

// uay ek function bnaya hian jo main her jaga function ko user kr es ko ?
// k andar jo active class main css add ki hian wo main es main add kr dn ga.

function setActiveClass($pagename)
{
    $current_page = basename($_SERVER['PHP_SELF']);
    return ($current_page === $pagename) ? "active" : '';
}

// uay code hian   matlab k  k  php k andar es code ko lehkon ga
//  echo setActiveClass('index');"//
// bss page name change karna hnga


//uay or function hain jo main body main main add kro ga
function getPageClass()
{
    return basename($_SERVER['PHP_SELF'], ".php");
}

function user_exists($conn, $name){

      //select data
        $sql = "SELECT * FROM users WHERE username = '$name' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        return mysqli_num_rows($result) > 0;
}
