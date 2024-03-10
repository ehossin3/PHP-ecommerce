<?php

require_once("./Database/config.php");

if(isset($_POST['category_name'])){
    $category_name = $_POST['category_name'];
    $cate_image = $_FILES['category_image'];
    // echo $category_name;
    // print_r($cate_image);
    // exit;

    //image validation
    $cate_image_name = basename($cate_image['name']);
    $cate_tmp_name = $cate_image['tmp_name'];
    $explode_name = explode(".",$cate_image_name);
    $file_size = $cate_image['size'];
    $get_ext = $explode_name[1];
    $ext_lowercase = strtolower($get_ext);
    $allow_ext = ["jpg", "jpeg", "png", "webp"];
    $allow_size = 1000000;
    $file_dir = "img/cate_image/";

    if(in_array($ext_lowercase,$allow_ext) && $file_size < $allow_size){
        $destination = $file_dir.$cate_image_name;
        move_uploaded_file($cate_tmp_name,$destination);
        $insert_data = "INSERT INTO categories(cate_name,cate_image)
        VALUES(?,?)";
        $stmt = $conn->prepare($insert_data);
        $stmt->bind_param("ss", $category_name, $destination );

        if($stmt->execute()){
            $msg = "Category added successfully";
            header("location: category.php?msg=$msg");
            exit;
            
        } else{
            $msg = "somethings wrong";
            header("location: category.php?msg=$msg");
            exit;
            
        }
        
        $stmt->close();
        
    } else{
        $msg = "somethings wrong(please check photo size $ allow file)";
        header("location: category.php?msg=$msg");
        exit;
        
    }


}

        $conn->close();
?>