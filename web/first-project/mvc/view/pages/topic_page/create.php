<?php 
$subjects = $data['subjects'];
?>
<h3>Đăng ký đề tài</h3>
<?php if(isset($data['error'])) { ?>
    <p class="alert alert-danger"><?php echo $data['error'] ?></p>
<?php } ?>
<form action="" method="POST">
    <div class="form-group mb-4">
        <label for="name" class="fw-bold mb-2">Tên đề tài</label>
        <input class="form-control" type="text" placeholder="Nhập tên đề tài" id="name" name="name" required>
    </div>

    <div class="form-group mb-4">
        <label for="description" class="fw-bold mb-2">Mô tả ngắn</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" id="description" name="description"
            required></textarea>
    </div>

    <div class="form-group mb-4">
        <label for="subject" class="fw-bold mb-2">Lĩnh vực nghiên cứu</label>
        <select class="form-control" id="subject" name="subject">
            <?php foreach($subjects as $subject) { ?>
            <option value="<?php echo $subject->id ?>">
                <?php echo $subject->name ?>
            </option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group mb-4">
        <label for="myTextarea" class="fw-bold mb-2">Nội dung đề tài</label>
        <textarea class="form-control" rows="5" id="myTextarea" name="content"></textarea>
    </div>

    <div class="form-group text-end pr-5">
        <button type="submit" class="btn btn-primary btn-md">Đăng ký</button>
    </div>

</form>