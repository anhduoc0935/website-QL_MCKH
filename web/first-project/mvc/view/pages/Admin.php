<?php 
$route = $data['route'];
?>

<div class="row">
    <nav class="col-3 sidebar card py-2 mb-4">
        <ul class="nav flex-column mb-auto" id="nav_accordion">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL . "/admin" ?>"> Xin chào, Admin </a>
            </li>
            <li class="nav-item has-submenu">
                <a class="nav-link" href=""> Người dùng </a>
                <ul class="submenu collapse">
                    <li><a class="nav-link" href="<?php echo BASE_URL . "/admin/user/create" ?>">Tạo người dùng mới </a></li>
                    <li><a class="nav-link" href="<?php echo BASE_URL . "/admin/user" ?>">Danh sách người dùng </a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL . "/admin/topic" ?>"> Đề tài nghiên cứu </a>
            </li>
            <li class="nav-item has-submenu">
                <a class="nav-link" href=""> Thông báo </a>
                <ul class="submenu collapse">
                    <li><a class="nav-link" 
                    href="<?php echo BASE_URL . "/admin/information/create" ?>">Tạo thông báo mới </a></li>
                    <li><a class="nav-link" 
                    href="<?php echo BASE_URL . "/admin/information" ?>">Danh sách thông báo </a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="col-9">
        <?php require_once BASE_APP . "/view/pages/admin_page/" . $route . ".php" ?>
    </div>
</div>