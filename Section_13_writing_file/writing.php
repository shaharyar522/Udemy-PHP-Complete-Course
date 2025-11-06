<?php
$file_name = "data.txt"; //get the file name
//open the file
// w for write file
// a appending
$file = fopen($file_name, "a"); // open file and w means write
// var_dump($file);
if($file){
    fwrite($file, "HELLO I AM A NDW PARAPH\n");
    fclose($file);
    echo "File Writing successfully";
} else {
    echo "Unable to open file";
}
