<div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Recent Products</span></h2>
        <div class="row px-xl-5">
            <?php
            
                require_once("./Database/config.php");

                $select_data = "SELECT * FROM products
                ORDER BY id DESC
                LIMIT 4";

                $sql = $conn->query($select_data);
                if($sql->num_rows > 0){
                    while($row=$sql->fetch_assoc()){

            ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?php echo $row['product_image']; ?>" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href="?id=<?php echo $row['id']; ?>"><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href="./detail.php?id=<?php echo $row['id']; ?>"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="./detail.php?id=<?php echo $row['id']; ?>"><p class="text overflow-hidden"><?php echo $row['product_name']; ?></p></a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>Tk. <?php echo $row['product_price']; ?></h5><h6 class="text-muted ml-2"><del>Tk. <?php echo $row['regular_price']; ?></del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            
                    }
                }
            ?>
        </div>
    </div>