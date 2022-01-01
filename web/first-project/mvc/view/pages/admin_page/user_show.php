<?php 
    $user = $data['user'];
?>

<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="<?php echo BASE_URL . $user->avatar ?>" alt="<?php echo $user->fullname ?>"
                                class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>
                                    <?php 
                            echo $user->fullname;
                        ?>
                                </h4>
                                <p class="text-secondary mb-1 text-dark">
                                    <?php 
                            echo $user->user_role(); 
                        ?>
                                </p>
                                <!-- <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Họ và tên</h6>
                            </div>
                            <div class="col-sm-9 text-secondary text-dark">
                                <?php 
                        echo $user->fullname;
                      ?>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Mã số</h6>
                            </div>
                            <div class="col-sm-9 text-secondary text-dark">
                                <?php 
                            echo $user->username;
                        ?>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Chức vụ</h6>
                            </div>
                            <div class="col-sm-9 text-secondary text-dark">
                                <?php 
                          echo $user->user_role();
                      ?>
                            </div>
                        </div>
                        <hr>
                        <?php if($user->user_role === 'teacher') { ?>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Chuyên môn</h6>
                            </div>
                            <div class="col-sm-9 text-secondary text-dark">
                                <?php 
                            echo "Khoa học " . $user->subject()->name;
                        ?>
                            </div>
                        </div>
                        <hr>
                        <?php } ?>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary text-dark">
                                <?php 
                        echo $user->email;
                      ?>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Số điện thoại</h6>
                            </div>
                            <div class="col-sm-9 text-secondary text-dark">
                            <?php
                          echo $user->phone;
                        ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Địa chỉ</h6>
                            </div>
                            <div class="col-sm-9 text-secondary text-dark">
                               <?php echo $user->location ?? ""; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="<?php echo BASE_URL . "/admin/user/{$user->id}/delete" ?>" 
                                type="button" class="btn btn-danger">Xóa người dùng</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>