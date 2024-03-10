<?php
session_start();

if(isset($_GET['id'])){
    $product_id = $_GET['id'];
    unset($_SESSION['cart_items'][$product_id]);
    
    $msg = "Remove successfully";
    header("location: ./cart.php?msg=$msg");
    exit;
}


?>