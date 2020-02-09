<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <i class="fas fa-store"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Toko <sup>laptop</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>">
          <span>Halaman Utama</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item  -->
      <li class="nav-item">
        <a class="nav-link text-center" href="<?= base_url(); ?>Asus">
          <span>Asus</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-center" href="<?= base_url(); ?>Acer">
          <span>Acer</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-center" href="<?= base_url(); ?>HP">
          <span>HP</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-center" href="<?= base_url(); ?>MacBook">
          <span>MacBook</span>
        </a>
      </li>
      <!-- end Nav Item  -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            
            <!-- Nav Item - Messages -->
            <li class="nav-item mr-5 mb-5">
              <a class="nav-link text-info" href="#">
                <?php 
                $keranjang = 'Keranjang Belanja : <i class="fas fa-shopping-basket fa-lg text-link"></i>';
                ?>
                <?= anchor("Dashboard/detail_keranjang", $keranjang); ?>
                <div class="badge badge-sm badge-danger badge-counter">
                  <span class="h6"><?= $this->cart->total_items(); ?></span>
                </div>
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->