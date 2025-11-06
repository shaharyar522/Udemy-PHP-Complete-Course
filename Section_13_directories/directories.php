<?php 

//uay hamray pass upload folder k ander file hian un ko scane krnay ka
// tareeka hain


$directory = "Upload";

if(is_dir($directory)){
    $files = scandir($directory);
    foreach($files as $file){
        if($file  !== "." && $file !== ".."){
            echo "File . $file\n";
        }
    }
}

