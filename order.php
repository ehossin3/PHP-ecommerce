<?php
        session_start();
        require_once("./Database/config.php");

        
        if(isset($_POST['create_account'])){
            $create_acc = $_POST['create_account'];
        
            if($create_acc === "yes"){
                // Generate a temporary password
                $tmp_pass = "zaxct". rand(1,100000);
                $pass = $tmp_pass;
            } else {
                $pass = "000000"; // Default password if not creating account
            }
        }
        
        // Retrieve user registration data from POST
        if(isset($_POST['email'])){
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address_1 = $_POST['address_1'];
            $address_2 = $_POST['address_2'];
            $country_id = $_POST['country_id'];
            $city_id = $_POST['city_id'];
            $state_id = $_POST['state_id'];
            $zip_code = $_POST['zip_code'];
        
            // Generate a unique order number
            $order_num = "xyz". rand(1,10000000);
        
            // Build the query for user registration
            $insert_user_query = "INSERT INTO reg_users(password,first_name,last_name,email,phone,address_1,address_2,country_id,city_id,state_id,zip_code)
            VALUES('$pass', '$first_name','$last_name','$email','$phone','$address_1','$address_2',$country_id,$city_id,'$state_id','$zip_code')";
        
            // Execute the query for user registration
            $user_registration_result = $conn->query($insert_user_query);
        
            if($user_registration_result){
                // Initialize subtotal and shipping
                $subtotal = 0;
                $shipping = 100;
        
                // Build the query for order insertion
                $insert_order_query = "INSERT INTO order_table(order_num,product_name,product_id,product_price,product_qty,product_total,product_ship,product_subtotal,customer_id) VALUES";
        
                // Iterate through cart items and calculate subtotal
                foreach($_SESSION['cart_items'] as $x){
                    $total = ($x['qty'] * $x['product_price']);
                    $subtotal += $total;
                    $product_name = $x['product_name'];
                    $product_id = $x['id'];
                    $product_price = $x['product_price'];
                    $product_qty = $x['qty'];
        
                    // Append values for order insertion
                    $insert_order_query .= "('$order_num', '$product_name','$product_id','$product_price','$product_qty','$total','$shipping',$subtotal,20),";
                }
        
                // Remove the trailing comma
                $insert_order_query = rtrim($insert_order_query, ',');
        
                // Execute the query for order insertion
                $order_insertion_result = $conn->query($insert_order_query);
        
                if($order_insertion_result){
                    // Clear the session cart items
                    session_unset();
                    $msg = "Order placed";
                    header("location: cart.php?msg=$msg");
                    exit;
                } else {
                    // Handle order insertion failure
                    echo "Error: " . $conn->error;
                }
            } else {
                // Handle user registration failure
                echo "Error: " . $conn->error;
            }
        }
        
        // Close the database connection
        $conn->close();

?>