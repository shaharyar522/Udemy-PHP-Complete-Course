<?php 

$file_name = "data.txt";

if(file_exists($file_name)){

      echo "File size".filesize($file_name)."bytes\n";
      echo "last modified :". date("F d Y H:i:s.", fileatime($file_name)). "\n";

      if(is_readable($file_name)){
        echo "it is readable.<br>";
      }

      if(is_writable($file_name)){
         echo "it is write able";
      }


}