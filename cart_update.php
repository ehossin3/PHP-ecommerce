<?php
session_start();
$quantity = $_POST['quantity'];
$product_id = $_POST['product_id'];

$_SESSION['cart_items'][$product_id]['qty'] = $quantity;

$msg = "Update Successfully";
header("location: cart.php?msg=$msg");
exit;

?>