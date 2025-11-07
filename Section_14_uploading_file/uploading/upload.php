<?php
//$_FILES => SUPER GLOBAL VARIABLE
// echo "<pre>";
// var_dump($_FILES);
// echo "<pre>";


///note
// upload honnay say pahlay uay temp main store hnti hian img


// if($_SERVER["REQUEST_METHOD"] == "POST"){

//     if($_FILES["file"]["error"] === 0){
        
//         $directory = "uploads/";
//         $file_name = basename($_FILES["file"]["name"]);
//         $target_file = $directory . $file_name;

//         if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
//             echo "The file " . basename($_FILES["file"]["name"]) . "has bee uploaded" ;
//         }else
//         {
//             echo "Sorry , there was an error uploding file ";
//         }

//     }

// }


// now this is my  another code
if($_SERVER["REQUEST_METHOD"] == "POST"){
     
    $image_name = $_FILES["file"]["name"];   //cat.jpg
    $image_tmp_name = $_FILES["file"]["tmp_name"];   //tmp/34%623

    $destination = "uploads/" . $image_name ;  ///  upload/cat.jpg
    
    if(move_uploaded_file($image_tmp_name, $destination)){
        echo "img done";
    }else
    {
        echo "img fails";
    }
}








/// for image size + image name



// if($_SERVER["REQUEST_METHOD"] == "POST"){

//     // Check if file exists
//     if(isset($_FILES["file"])){

//         $image_name = $_FILES["file"]["name"];
//         $image_tmp_name = $_FILES["file"]["tmp_name"];
//         $image_size = $_FILES["file"]["size"];          // Size in bytes
//         $image_type = $_FILES["file"]["type"];          // image/png, image/jpg, etc.

//         $destination = "uploads/" . $image_name;

//         // Allowed extensions
//         $allowed_extensions = ['jpg', 'jpeg', 'png'];

//         // Get file extension
//         $extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));

//         // ✅ 1. Size Condition (limit: 5MB)
//         if($image_size > 5 * 1024 * 1024){
//             echo "❌ File too large! 5MB se zyada allowed nahi.";
//         }
//         // ✅ 2. Extension Condition
//         elseif(!in_array($extension, $allowed_extensions)){
//             echo "❌ Only JPG, JPEG, PNG allowed!";
//         }
//         // ✅ 3. Upload if valid
//         else{
//             if(move_uploaded_file($image_tmp_name, $destination)){
//                 echo "✅ Image Uploaded Successfully!";
//             } else {
//                 echo "❌ Upload Failed!";
//             }
//         }

//     } else {
//         echo "❌ No file selected!";
//     }
// }
