<?php
    require_once("./Database/config.php");

    if(isset($_GET['id'])){
        $product_id = $_GET['id'];

        $select_product = "SELECT * FROM products
        WHERE id = $product_id";

        $sql = $conn->query($select_product);
        $row = $sql->fetch_assoc();

        if(isset($_SESSION['cart_items'])){
            $Product_exist_check = array_column($_SESSION['cart_items'], 'id');

            if(in_array($product_id, $Product_exist_check)){
                foreach($_SESSION['cart_items'] as $item){
                    if($item['id'] === $product_id){
                        $item['qty'] +=1;
                        break;
                    }
                }
            }
            else {
                $cart_items = [
                    'id'            => $product_id,
                    'product_name'  => $row['product_name'],
                    'product_image' => $row['product_image'],
                    'product_price' => $row['product_price'],
                    'qty'           => 1
                ];
                $_SESSION['cart_items'][$product_id] = $cart_items;
            }
        }
        else {
            $cart_items = [
                'id'            => $product_id,
                'product_name'  => $row['product_name'],
                'product_image' => $row['product_image'],
                'product_price' => $row['product_price'],
                'qty'           => 1
            ];
            $_SESSION['cart_items'][$product_id] = $cart_items;
        }

    }

?>