<?php  

// uay ek function bnaya hian jo main her jaga function ko user kr es ko ?
// k andar jo active class main css add ki hian wo main es main add kr dn ga.

 function setActiveClass($pagename) {
     $current_page = basename($_SERVER['PHP_SELF']);
     return ($current_page === $pagename ) ? "active": '';
 }



 // uay code hian   matlab k  k  php k andar es code ko lehkon ga
//  echo setActiveClass('index');"//

// bss page name change karna hnga
 




?>