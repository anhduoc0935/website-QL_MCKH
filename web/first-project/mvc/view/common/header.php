<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="<?php
        if(isset($_SESSION['uid']) && $_SESSION['user_role'] === "admin")
          echo BASE_URL . "/admin";
        else 
          echo BASE_URL;
      ?>">
        <img
          src="<?php echo BASE_URL . "/public/img/logo.png" ?>"
          height="50"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <?php if(isset($_SESSION['uid']) && $_SESSION['user_role'] !== 'admin') { ?>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" 
              href="<?php echo BASE_URL ?>">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"
              href="<?php echo BASE_URL . "/topic" ?>">Đề tài Nghiên cứu khoa học</a>
            </li>
        </ul>
      <?php } else { ?>
        <span>Website Nghiên cứu khoa học - Trường đại học Sư phạm kỹ thuật</span>
      <?php } ?>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <?php if(isset($_SESSION['uid'])) { ?>
      <div class="d-flex align-items-center">
        <!-- Avatar -->
        <a
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          id="navbarDropdownMenuLink"
          role="button"
          href=""
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <img
            src="<?php echo BASE_URL . $_SESSION['avatar'] ?>"
            class="rounded-circle"
            height="25"
            alt="<?php echo $_SESSION['fullname'] ?>"
            loading="lazy"
          />
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuLink"
        >
          <li>
            <a class="dropdown-item" href="<?php echo BASE_URL . "/account" ?>">Hồ sơ của tôi</a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo BASE_URL . "/account/logout" ?>">Đăng xuất</a>
          </li>
        </ul>
      </div>
      <!-- Right elements -->
    <?php } ?>
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->