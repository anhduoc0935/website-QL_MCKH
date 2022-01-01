<div id="login">
    <h3 class="text-center text-white pt-5">Login form</h3>
    <div class="container">
        <div id="login-row" class=" row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <h2 class="text-center ">Đăng Nhập</h2>
                    <?php if(isset($data['error'])) { ?>
                        <div class="alert alert-danger">
                            <?php echo $data['error'] ?>                            
                        </div>
                    <?php } ?>
                    <form id="login-form" class="form" action="" method="POST">
                        <div class="form-group mb-4">
                            <label for="username" class="fw-normal mb-2">Tên đăng nhập:</label><br>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label for="password" class="fw-normal mb-2">Mật khẩu:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="mb-4 text-center">
                            <span class="fw-bold">Chưa có tài khoản ?</span>
                            <a href="<?php echo BASE_URL . "/account/register" ?>">Đăng ký</a>
                        </div>
                        <button type="submit" class="btn btn-info btn-md w-100">Đăng nhập</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>