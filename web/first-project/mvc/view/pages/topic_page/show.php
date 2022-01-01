<?php 
    $topic = $data['topic'];
?>
<div>
    <h2 class="border-bottom">Đề tài: <small class="text-muted"><?php echo $topic->name ?></small></h2>
    <div class="mt-4">
        <span class="fw-bold">Chuyên ngành nghiên cứu:</span>
        <span class="fst-italic text-muteed fw-light"><?php echo $topic->subject()->name ?></span>
    </div>
    <div class="my-2">
        <span class="fw-bold">Mô tả ngắn:</span>
        <span class="fst-italic text-muteed fw-light"><?php echo $topic->description ?></span>
    </div>
    <div class="border-bottom">
        <span class="fw-bold">Nội dung đề tài</span>
        <p><?php echo $topic->content ?></p>
    </div>
    <br>
    <div class="row">
        <div class="col-6">
            <span class="fw-bold">Trạng thái đề tài</span>
            <p><?php echo $topic->status() ?></p>
        </div>
        <div class="col-6">
            <span class="fw-bold">Ngày kết thúc</span>
            <p><?php 
                if($topic->checkPending())
                    echo "Chưa có";
                else 
                    echo "
                        <i class='far fa-calendar'></i>
                        <b class='text__green fw-bold'>" . post_date($topic->due_at) . "</b>
                    ";
            ?></p>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <span class="fw-bold">Giảng viên phụ trách</span>
            <p><?php 
                if($topic->checkPending())
                    echo "Chưa có";
                else
                    echo $topic->teacher()->fullname;
            ?></p>
        </div>
        <div class="col-6">
            <span class="fw-bold">Sinh viên thực hiện</span>
            <p><?php echo $topic->student()->fullname ?></p>
        </div>
    </div>
    <?php if($topic->status == TopicModel::APPROVED) { ?>
        <div class="row">
            <div class="col-6">
                <a href="<?php echo BASE_URL . "/topic/{$topic->id}/complete"?>"
                type="button" class="btn btn-success">Hoàn thành</a>
            </div>
            <div class="col-6">
                <a href="<?php echo BASE_URL . "/topic/{$topic->id}/cancle"?>"
                type="button" class="btn btn-danger">Quá hạn, hủy</a>
            </div>
        </div>
    <?php } ?>
</div>