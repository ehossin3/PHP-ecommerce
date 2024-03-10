
<?php
    require_once("./Home/head.php");
    // if(isset($_SESSION['cart_items'])){

    
?>
    <!-- Topbar Start -->
    <?php
        require_once("./Home/topbar.php");
    ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php
        require_once("./Home/navbar.php");
    ?>
    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="index.php">Home</a>
                    <a class="breadcrumb-item text-dark" href="shop.php">Shop</a>
                    <span class="breadcrumb-item active">Shopping Cart</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                    
                        <?php
                            $sub_sum = 0;
                            if(isset($_SESSION['cart_items'])){
                                $shipping_charge = 100;
                                foreach($_SESSION['cart_items'] as $x){
                                $total_price = ($x['qty'] * $x['product_price']);
                                $sub_sum += $total_price;
                        ?>

                        <form action="./cart_update.php" method="post">
                            <tr>
                                <td class="align-middle"><img src="<?php echo $x['product_image']; ?>" alt="" style="width: 50px;"><?php echo $x['product_name']; ?> </td>
                                <td class="align-middle">Tk. 
                                    <?php 
                                        if(isset($_SESSION['cart_items'])){
                                            echo $x['product_price'];
                                        } 
                                        else {
                                            echo 0;
                                        }
                                    ?> 
                                </td>
                                <td class="align-middle">
                                    <div class="input-group quantity mx-auto" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <a class="btn btn-sm btn-primary btn-minus" >
                                            <i class="fa fa-minus"></i>
                                            </a>
                                        </div>
                                        <input type="hidden" name="product_id" value="<?php echo $x['id']; ?>">
                                        <input id="quantityInput" type="text" name="quantity" class="form-control form-control-sm bg-secondary border-0 text-center" value="<?php echo $x['qty']; ?>">
                                        <div class="input-group-btn">
                                            <a class="btn btn-sm btn-primary btn-plus">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle"><?php echo $x['qty'] * $x['product_price']; ?></td>
                                <td class="align-middle"><button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-check"></i></button><a onclick="return confirm('Are You Sure'); " href="remove_single_cart_item.php?id=<?php echo $x['id']; ?>" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></td>
                            
                            </tr>
                        </form>
                        <?php
                                }
                            }
                        
                        
                        ?>
                        <tr>
                            <td class="align-middle">
                                <?php
                                if(isset($_GET['emptyCart'])){
                                    echo $_GET['emptyCart'];
                                }
                                   
                                ?>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>Tk.
                                <?php 
                                    if(isset($_SESSION['cart_items'])){
                                        echo $sub_sum;
                                    } 
                                    else {
                                        echo 0;
                                    }
                                ?>
                            </h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">Tk. 
                                <?php 
                                    if(isset($_SESSION['cart_items'])){
                                        echo $shipping_charge;
                                    } 
                                    else {
                                        echo 0;
                                    }
                                ?>
                            </h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>
                                <?php 
                                    if(isset($_SESSION['cart_items'])){
                                        echo $sub_sum + $shipping_charge;
                                    } 
                                    else {
                                        echo 0;
                                }
                                ?>
                            </h5>
                        </div>
                        <a href="checkout.php"><button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->


    <!-- Footer Start -->
    <?php
        require_once("./Home/footer.php");
    ?>
    <!-- Footer End -->


    <!-- Script and Back to Top -->
    <?php
        require_once("./Home/scriptend.php");
    // } else{

    //     // $ec = "You have no cart item";
    //     // header("location: ./cart.php?emptyCart=$ec");
    //     // exit;
    // }
    ?>
    <!-- Script and Back to Top -->
    