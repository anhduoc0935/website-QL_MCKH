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
                <th><?php
                    if($_SESSION['user_role'] === 'teacher')
                        echo 'Trạng thái đề tài';
                    else 
                        echo 'Giáo viên hướng dẫn';
                ?></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                if(empty($topics))
                    echo "<tr>
                        <td class='text-center fw-bold text-danger fst-italic' colspan='5'>Hiện tại chưa có đề tài nào</td>
                    </tr>";
            ?>
            <?php foreach($topics as $topic) { ?>
                <tr>
                    <td><?php echo $topic->id ?></td>
                    <td><?php echo $topic->name ?></td>
                    <td><?php echo $topic->student()->fullname ?></td>
                    <td>
                        <?php
                            if($_SESSION['user_role'] !== 'teacher') {
                                $teacher = $topic->teacher(); 
                                if(isset($teacher))
                                    echo $teacher->fullname;
                                else
                                    echo "Đang chờ phê duyệt";
                            }
                            else {
                                if($topic->checkPending()) { ?>
                                    <a href="<?php echo BASE_URL . "/topic/" . $topic->id ."/approve" ?>">
                                        Duyệt đề tài
                                    </a>
                                <?php }
                                else 
                                    echo $topic->status();
                            }
                        ?>
                    </td>
                    <td>
                        <a href="<?php echo BASE_URL . "/topic/" . $topic->id ?>">
                            Xem chi tiết
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
