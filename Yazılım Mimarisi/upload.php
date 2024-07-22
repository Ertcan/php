<?php

if(isset($_POST["fileUpload"])){
    echo "<pre>";
    print_r($_FILES);
    $fileTmpPath = $_FILES["fileToupload"]["tmp_name"];
    $filename = $_FILES["fileToupload"]["name"];
    $uploadfolder = './blog-app/';
    $dest_path = $uploadfolder.$filename;
    if(move_uploaded_file($fileTmpPath,$dest_path)){
        echo "yüklendi";

    }
    else{
        echo "hata";
    }
}

?>