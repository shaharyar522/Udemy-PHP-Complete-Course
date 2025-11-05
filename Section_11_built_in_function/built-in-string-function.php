<?php  

/// this is a complete method to find string

// strlen()	Returns string length	strlen("Hello") → 5
// str_word_count()	Counts words in a string	str_word_count("Hello World") → 2
// strrev()	Reverses string	strrev("Hello") → "olleH"
// strtolower()	Converts to lowercase	"HELLO" → "hello"
// strtoupper()	Converts to uppercase	"hello" → "HELLO"
// ucfirst()	Capitalize first letter	"hello" → "Hello"
// lcfirst()	Lowercase first letter	"Hello" → "hello"
// ucwords()	Capitalize first letter of each word	"hello world" → "Hello World"


$str = "Test";

$pos = strpos($str , "World");

$new_str = str_replace("World", "Student" , $str);

echo $new_str;