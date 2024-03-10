<div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
        <div class="row px-xl-5 pb-3">

        <?php
            require_once("./Database/config.php");

$select_data = "SELECT c.*, COUNT(p.id) AS product_count 
                FROM categories c
                LEFT JOIN products p ON c.id = p.product_cate_id
                GROUP BY c.id
                ORDER BY c.cate_name ASC";

$sql = $conn->query($select_data);

if ($sql->num_rows > 0) {
    while ($row = $sql->fetch_assoc()) {
?>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="">
                <div class="cat-item d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="<?php echo $row['cate_image']; ?>" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6><?php echo $row['cate_name']; ?></h6>
                        <small class="text-body"><?php echo $row['product_count']; ?> Products</small>
                    </div>
                </div>
            </a>
        </div>
<?php
    }
} else {
    echo "No data found";
}
?>
        </div>
    </div>