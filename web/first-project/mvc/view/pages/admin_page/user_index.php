<?php 
$users = $data['users'];
?>

<div class="d-flex align-items-center justify-content-between">
    <h3>Danh sách người dùng</h3>
</div>
<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tên đăng nhập</th>
                <th>Tên người dùng</th>
                <th>Số điện thoại</th>
                <th>Phân loại</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user) { ?>
                <tr>
                    <td><?php echo $user->username ?></td>
                    <td><?php echo $user->fullname ?></td>
                    <td><?php echo $user->phone ?></td>
                    <td><?php echo $user->user_role() ?></td>
                    <td>
                        <a href="<?php echo BASE_URL . "/admin/user/" . $user->id ?>">
                            Xem hồ sơ
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
