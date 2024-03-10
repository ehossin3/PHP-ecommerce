<?php
    require_once("./Database/config.php");
    if(isset($_POST['product_name'])){

        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $regular_price = $_POST['regular_price'];
        $product_details = $_POST['product_details'];
        $short_details = $_POST['short_details'];
        $category_id = $_POST['category_id'];
        $product_image = $_FILES['product_image'];

        //image validation
        $product_image_name = basename($product_image['name']);
        $product_tmp_name = $product_image['tmp_name'];
        $file_size = $product_image['size'];
        $explode_name = explode(".",$product_image_name);
        $get_ext = $explode_name[1];
        $ext_lowercase = strtolower($get_ext);
        $allow_ext = ["jpg", "jpeg", "png", "webp"];
        $allow_size = 1000000;
        $file_dir = "img/product_image/";

        if(in_array($ext_lowercase,$allow_ext) && $file_size < $allow_size){

            $destination = $file_dir . $product_image_name;
            move_uploaded_file($product_tmp_name,$destination);

            $insert_data = "INSERT INTO products(product_name, product_price,regular_price,product_cate_id,product_details,product_short_details, product_image) VALUES(?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($insert_data);
            $stmt->bind_param("siiisss", $product_name, $product_price, $regular_price, $category_id, $product_details,$short_details,$destination);

            if($stmt->execute()){
                $msg = "Product added successfully";
                header("location: add-product.php?msg=$msg");
                exit;
            }
            else {
                $msg = "somethings wrong(please check photo size $ allow file)";
                header("location: add-product.php?msg=$msg");
                exit;
            }
            $stmt->close();
        }
        
    } 
    else{
            $msg = "somethings wrong";
            header("location: add-product.php?msg=$msg");
            exit;
        }



        $conn->close();
?>