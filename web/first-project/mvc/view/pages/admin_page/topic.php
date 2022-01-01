<?php 
$topics = $data['topics'];
$subjects = $data['subjects'];
?>

<div class="d-flex align-items-center justify-content-between">
    <h3><?php echo $data['title'] ?></h3>
</div>
<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Mã đề tài(ID)</th>
                <th>Tên đề tài</th>
                <th>Sinh viên thực hiện</th>
                <th>Giáo viên hướng dẫn</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($topics as $topic) { ?>
                <tr>
                    <td><?php echo $topic->id ?></td>
                    <td><?php echo $topic->name ?></td>
                    <td><?php echo $topic->student()->fullname ?></td>
                    <td>
                        <?php
                        $teacher = $topic->teacher(); 
                        if(isset($teacher))
                            echo $teacher->fullname;
                        else
                            echo "Đang chờ phê duyệt";
                        ?>
                    </td>
                    <td>
                        <a href="<?php echo BASE_URL . "/admin/topic/" . $topic->id  . "/delete"?>">
                          Hủy đề tài
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
