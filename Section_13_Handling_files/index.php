<?php
//1nd method easy
///let me chekc this another shorcut method to get a file structes.  
//just only line code to shaow same ouptut   (file_get_contents)

$content = file_get_contents("data.txt");
echo nl2br($content);


echo "another mehtod just tow line code ";

echo "<br>";


$file_name = "data.txt";  //get the file name
//open the file
$file = fopen($file_name, "r");  // open file and r means reading
// var_dump($file);
if($file){
    $content = fread($file , filesize($file_name));
    echo nl2br($content);
    fclose($file);
}else{
    echo "Unable to open file";
}










