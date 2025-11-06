<?php  

$new_file = "data.txt";

$old_file = "test.txt";

if(file_exists($new_file)){
    rename($new_file, $old_file);
    echo "Renmae is succesfuly";
}else
{
 echo "the file is not matching";
}