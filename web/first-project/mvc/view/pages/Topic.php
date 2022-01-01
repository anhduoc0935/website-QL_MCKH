<?php 
$route = $data['route'];
?>

<div class="row">
    <div class="col-3">
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="<?php echo BASE_URL . "/topic" ?>" 
                class="nav-link active" aria-current="page">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    Tất cả đề tài
                </a>
            </li>
            <?php if($_SESSION['user_role'] != 'teacher') { ?>
                <li class="nav-item">
                    <a href="<?php echo BASE_URL . "/topic/create" ?>"
                    class="nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Đăng kí đề tài
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo BASE_URL . "/topic/my-topic" ?>"
                    class="nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Đề tài của tôi
                    </a>
                </li>
            <?php } ?>
    
    
            <li class="nav-item">
                <a href="<?php echo BASE_URL . "/topic/my-topic/is-pending" ?>" class="nav-link active" aria-current="page">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    Đề tài đang chờ duyệt
                </a>
            </li>
            
            <?php if($_SESSION['user_role'] != 'teacher') { ?>
                <li class="nav-item">
                    <a href="<?php echo BASE_URL . "/topic/my-topic/approved" ?>" class="nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Đề tài đã được duyệt
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo BASE_URL . "/topic/my-topic/out-of-date" ?>" class="nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Đề tài quá hạn
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo BASE_URL . "/topic/my-topic/completed" ?>" class="nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Đề tài đã hoàn tất
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="col-9">
        <?php require_once BASE_APP . "/view/pages/topic_page/" . $route . ".php" ?>
    </div>
</div>