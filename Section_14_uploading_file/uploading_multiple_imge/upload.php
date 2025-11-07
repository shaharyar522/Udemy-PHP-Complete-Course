<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $upload_dir = "uploads/";

    //agr dir ni h tu
    //    if(!$upload_dir){
    //     mkdir($upload_dir , 0777 , true);
    //    }

    foreach ($_FILES["files"]["name"] as $key => $file_name) {

        $file_tmp = $_FILES["files"]["tmp_name"][$key];  //File temporary location jahan server ne file ko short time ke liye rakha hota hai
        $file_size = $_FILES["files"]["size"][$key];   //File ka size bytes mein
        $file_error = $_FILES["files"]["error"][$key];  //File upload ke time koi error aya to woh code store hoga
        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));    //File ka extension extract kiya (jpg, png etc) aur lowercase mein convert kiya
        $target_file = $upload_dir . basename($file_name);  //Final path jahan file save hogi uploads/filename

        // echo "<pre>";
        // var_dump($tmp_name);
        // echo "</pre>";
        // Agar koi error nahi aaya (error code 0 hota hai) to aage code chalega.
        //aap size check kar rahe ho   5 MB
        //✔ Yahan check ho raha hai ke file type allowed extension mein hai ya nahi

        if ($file_error  ==  UPLOAD_ERR_OK) {
            if ($file_size > 5 * 1024 * 1024) {
                echo "the error is bit";
            } elseif (!in_array($file_type, ['jpg', 'jpeg', 'png'])) {
                echo "Error file is type $file_name is not allowed";
            } else {
                if (move_uploaded_file($file_tmp, $target_file)) {

                    echo "File {$file_name} upload successfully";
                } else {
                    echo "Error : file $file_name upload errors $file_name failed to upload $file_error<br>";
                }
            }
        }
    }
} else {
    echo "no file uplaod";
}
