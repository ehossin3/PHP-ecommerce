<?php

require_once("config.php");


$create_table = " CREATE TABLE categories(
    id int AUTO_INCREMENT PRIMARY KEY,
    cate_name varchar(100),
    cate_image varchar(100)
    
)";


$sql = $conn->query($create_table);
if($sql){
    echo "successfully";
}
?>