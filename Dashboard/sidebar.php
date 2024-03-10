<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

        <!-- Product Category -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#cate-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Product Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="cate-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="all-category.php">
              <i class="bi bi-circle"></i><span>All Category</span>
            </a>
          </li>
          <li>
            <a href="./category.php">
              <i class="bi bi-circle"></i><span>Add New</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Product Category -->

        <!-- Product -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#product-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="product-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="all-product.php">
              <i class="bi bi-circle"></i><span>All Product</span>
            </a>
          </li>
          <li>
            <a href="add-product.php">
              <i class="bi bi-circle"></i><span>Add Product</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Product -->

    </ul>

  </aside>