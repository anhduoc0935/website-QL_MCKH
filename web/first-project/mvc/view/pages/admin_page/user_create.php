<?php $subjects = $data['subjects']; ?>
<form class="w-75 mx-auto" action="" method="POST">
    <div>
        <h3>Tạo người dùng mới</h3>
    </div>
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" name="firstname" id="form6Example1" class="form-control" required/>
                <label class="form-label" for="form6Example1">Họ và tên đệm(*)</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="text" name="lastname" id="form6Example2" class="form-control" required/>
                <label class="form-label" for="form6Example2">Tên(*)</label>
            </div>
        </div>
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
        <input type="text" name="username" id="form6Example3" class="form-control" required/>
        <label class="form-label" for="form6Example3">Tên đăng nhập - MSSV(*)</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <input type="password" name="password" id="form6Example8" class="form-control" required/>
        <label class="form-label" for="form6Example8">Mật khẩu(*)</label>
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
        <input type="text" name="location" id="form6Example4" class="form-control" />
        <label class="form-label" for="form6Example4">Địa chỉ</label>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="email" name="email" id="form6Example5" class="form-control" required/>
        <label class="form-label" for="form6Example5">Email(*)</label>
    </div>

    <!-- Number input -->
    <div class="form-outline mb-4">
        <input type="number" name="phone" id="form6Example6" class="form-control" required/>
        <label class="form-label" for="form6Example6">Phone(*)</label>
        <div class="invalid-feedback">Looks good!</div>
    </div>

    <!-- Date input -->
    <div class="form-outline mb-4">
        <input name="bod" type="date" id="form3Example3cg" class="form-control form-control-lg" required />
        <label class="form-label" for="form3Example3cg">Ngày sinh(*)</label>
    </div>


    <!-- Radio input -->
    <div class="form-outline mb-4">
        <p class="fw-bold mb-2">Phân loại người dùng(*)</p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="user_role" id="inlineRadio1" value="student" />
            <label class="form-check-label" for="inlineRadio1">Sinh viên</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="user_role" id="inlineRadio2" value="teacher" />
            <label class="form-check-label" for="inlineRadio2">Giảng viên</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="user_role" id="inlineRadio3" value="admin" />
            <label class="form-check-label" for="inlineRadio3">Quản trị viên</label>
        </div>
    </div>

    <div class="form-outline mb-4">
        <p class="fw-bold mb-2">Chuyên ngành giảng dạy (bắt buộc với giảng viên)</p>
        <select class="form-select" name="subject">
            <?php foreach($subjects as $subject) { ?>
                <option value="<?php echo $subject->id ?>">
                    <?php echo $subject->name ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Tạo người dùng mới</button>
</form>