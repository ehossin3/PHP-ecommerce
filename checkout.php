<?php
    require_once("./Home/head.php");
    if(isset($_SESSION['cart_items'])){

    
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
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Checkout</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Checkout Start -->
    <form action="order.php" method="post">
        <div class="container-fluid">
            <div class="row px-xl-5">
                <div class="col-lg-8">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing Address</span></h5>
                    <div class="bg-light p-30 mb-5">
                        <div class="row">
                            <div class="form-group">
                                <p>
                                    <?php
                                        if(isset($_GET['msg'])){
                                            echo $_GET['msg'];
                                        }
                                    
                                    ?>
                                </p>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text" name="first_name" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" name="last_name" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="text" name="email" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mobile No</label>
                                <input class="form-control" type="text" name="phone" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address Line 1</label>
                                <input class="form-control" type="text" name="address_1" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address Line 2</label>
                                <input class="form-control" type="text" name="address_2">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Country</label>
                                <select class="custom-select" name="country_id" required>
                                        <option value="1" selected>Bangladesh</option>
                                        <option value="2">India</option>
                                        <option value="3">Nepal</option>
                                        <option value="4">Vutan</option>
                                    </select>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>City</label>
                                <select class="custom-select" name="city_id" required>
                                        <option value="4" selected>Dhaka</option>
                                        <option value="1">Delhi</option>
                                        <option value="2">Kathmundu</option>
                                        <option value="3">Thimpo</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>State</label>
                                <input class="form-control" type="text" name="state_id">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>ZIP Code</label>
                                <input class="form-control" type="text" name="zip_code">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="create_account" value="yes" id="newaccount">
                                    <label class="custom-control-label" for="newaccount">Create an account</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="shipto">
                                    <label class="custom-control-label" for="shipto"  data-toggle="collapse" data-target="#shipping-address">Ship to different address</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse mb-5" id="shipping-address">
                        <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Shipping Address</span></h5>
                        <div class="bg-light p-30">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>First Name</label>
                                    <input class="form-control" type="text" name="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" name="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" name="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Mobile No</label>
                                    <input class="form-control" type="text" name="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Address Line 1</label>
                                    <input class="form-control" type="text" name="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Address Line 2</label>
                                    <input class="form-control" type="text" name="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Country</label>
                                    <select class="custom-select" name="">
                                        <option selected>Bangladesh</option>
                                        <option value="1">India</option>
                                        <option value="2">Nepal</option>
                                        <option value="3">Vutan</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>City</label>
                                    <select class="custom-select" name="">
                                        <option selected>Dhaka</option>
                                        <option value="1">Delhi</option>
                                        <option value="2">Kathmundu</option>
                                        <option value="3">Thimpo</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>State</label>
                                    <input class="form-control" type="text" placeholder="New York">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>ZIP Code</label>
                                    <input class="form-control" type="text" placeholder="123">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Total</span></h5>
                    <div class="bg-light p-30 mb-5">
                        <div class="border-bottom">
                            <h6 class="mb-3">Products</h6>
                            <?php
                                if(isset($_SESSION['cart_items'])){
                                    $subtotal = 0;
                                    $shipping = 100;
                                    foreach($_SESSION['cart_items'] as $x){
                                    $total = ($x['qty'] * $x['product_price']);
                                    $subtotal += $total;

                            
                            ?>
                            <div class="d-flex justify-content-between">
                                <p><?php echo $x['product_name']; ?> <strong>(QTY-<?php echo $x['qty']; ?>)</strong></p>
                                <p>TK. <?php echo $x['product_price']; ?></p>
                            </div>

                            <?php
                                    }
                                }
                            
                            ?>
                        </div>
                        <div class="border-bottom pt-3 pb-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h6>Subtotal</h6>
                                <h6>Tk. <?php echo $subtotal; ?></h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-medium">Shipping</h6>
                                <h6 class="font-weight-medium">Tk. 
                                    <?php 
                                        if(isset($_SESSION['cart_items'])){
                                            echo $shipping;
                                        } else {
                                            echo 0;
                                        }
                                    ?>
                                </h6>
                            </div>
                        </div>
                        <div class="pt-2">
                            <div class="d-flex justify-content-between mt-2">
                                <h5>Total</h5>
                                <h5>Tk.
                                    <?php 
                                        if(isset($_SESSION['cart_items'])){
                                            echo $subtotal + $shipping;
                                        } else {
                                            echo 0;
                                        }
                                    ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Payment</span></h5>
                        <div class="bg-light p-30">
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" value="ssl_commerce" name="payment" id="paypal">
                                    <label class="custom-control-label" for="paypal">SSL Commerce</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" value="cash_on" name="payment" id="directcheck">
                                    <label class="custom-control-label" for="directcheck">Cash on delevery</label>
                                </div>
                            </div>
                            <button class="btn btn-block btn-primary font-weight-bold py-3" type="submit">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Checkout End -->


   <!-- Footer Start -->
   <?php
        require_once("./Home/footer.php");
    ?>
    <!-- Footer End -->


    <!-- Script and Back to Top -->
    <?php
        require_once("./Home/scriptend.php");
        }
        else {
            $msg = "Somethings wrong";
            header("location: index.php?msg=$msg");
            exit;
        }
    ?>
    <!-- Script and Back to Top -->