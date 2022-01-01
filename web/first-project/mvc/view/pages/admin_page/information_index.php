<?php 
$informations = $data['informations'];
?>

<div class="d-flex align-items-center justify-content-between">
    <h3>Danh sách thông báo</h3>
</div>
<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Mã thông báo</th>
                <th>Tên thông báo</th>
                <th>Ngày thông báo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($informations as $information) { ?>
                <tr>
                    <td><?php echo $information->id ?></td>
                    <td class="mw-50"><?php echo $information->title ?></td>
                    <td><?php echo post_date($information->create_at) ?></td>
                    <td>
                        <a href="<?php echo BASE_URL . "/admin/information/" . $information->id . "/delete"?>">
                            Xóa thông báo
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
