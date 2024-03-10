<!-- Head start -->
<?php
    require_once("./Dashboard/head.php");
    require_once("./Dashboard/header.php");
    ?>
<!-- Head End -->


<!-- TopBar start -->
    <?php
  
    ?>
<!-- Topbar End -->


<!-- Navbar start -->
    <?php
    
    ?>
<!-- Navbar End -->


<!-- Sidebar Start -->
    <?php
        require_once("./Dashboard/sidebar.php");
    ?>
<!-- Sidebar End -->


<!-- Main Start -->
<main id="main" class="main">

<div class="pagetitle">
  <h1>Add Product Category Form</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Product Category</li>
      <li class="breadcrumb-item active">Add new category</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add Product Category Form</h5>

          <!-- General Form Elements -->
          <form action="./cate-action.php" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
              <label for="access deny message" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <h4 class="text-warning">
                  <?php
                  if(isset($_GET['msg'])){
                    echo $_GET['msg'];
                  }
                  ?>
                </h4>
              </div>
            </div>
            <div class="row mb-3">
              <label for="category_name" class="col-sm-2 col-form-label">Category name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="category_name" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Image</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" name="category_image">
              </div>
            </div>
 
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Add Category</label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Add Category</button>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <p class="text text-bg-info text-sm-center">Note: [Allow Photo only (jpg, jpeg, png, webp) & size less than 1mb]</p>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>
    </div>
  </div>
</section>

</main>
<!-- Main End -->


<!-- Footer start -->
    <?php
    
    ?>
<!-- Footer End -->


<!-- Script start -->
    <?php
    require_once("./Home/scriptend.php");
    ?>
<!-- Script End -->