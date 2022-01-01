<div class="w-75 mx-auto">
    <h2 class="mb-4">Đăng ký tài khoản cho sinh viên</h2>
    <?php if(isset($data['error'])) { ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $data['error']; ?>
    </div>
    <?php } ?>
    <form action="" method="POST">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input name="firstname" type="text" id="form3Example1" class="form-control" required />
                    <label class="form-label" for="form3Example1">Họ và tên đệm(*)</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input name="lastname" type="text" id="form3Example2" class="form-control" required />
                    <label class="form-label" for="form3Example2">Tên chính(*)</label>
                </div>
            </div>
        </div>

        <!-- Username input -->
        <div class="form-outline mb-4">
            <input name="username" type="text" id="form3Example5" class="form-control" required />
            <label class="form-label" for="form3Example5">Mã số sinh viên(*)</label>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <input name="email" type="email" id="form3Example3" class="form-control" required />
            <label class="form-label" for="form3Example3">Email(*)</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input name="password" type="password" id="form3Example4" class="form-control" required/>
            <label class="form-label" for="form3Example4">Mật khẩu(*)</label>
        </div>

        <div class="form-outline mb-4">
            <input name="bod" type="date" id="form3Example4" class="form-control" required/>
            <label class="form-label" for="form3Example4">Ngày sinh(*)</label>
        </div>

        <div class="form-outline mb-4">
            <input name="phone" type="number" id="form3Example4" class="form-control" required/>
            <label class="form-label" for="form3Example4">Số điện thoại(*)</label>
        </div>

        <div class="form-outline mb-4">
            <input name="location" type="text" id="form3Example4" class="form-control"/>
            <label class="form-label" for="form3Example4">Địa chỉ</label>
        </div>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Đăng ký</button>
        <div class="text-center">
            <span class="fw-bold">Đã có tài khoản?</span>
            <a href="<?php echo BASE_URL . "/account/login" ?>">Đăng nhập</a>
        </div>
    </form>
</div>