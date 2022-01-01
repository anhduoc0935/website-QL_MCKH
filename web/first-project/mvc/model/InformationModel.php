<?php 

class InformationModel extends Database {
    public function __construct()
    {
        $this->connectDB();
        $this->table = "information";
        $this->schema = 'InformationSchema';

        // $this->create([
        //     'title' => 'Thông báo về việc nghỉ làm việc và học tập nhân dịp Tết Dương lịch năm 2022',
        //     'content'   => '<iframe src="https://drive.google.com/file/d/1YzlFgoYeUj2003beP96s9qiaozTXLYR_/preview" width="640" height="480" allow="autoplay"></iframe>'
        // ]);
        // $this->create([
        //     'title' => 'Thông báo tuyển dụng lao động vận hành trạm biến áp 220kV-500kV đợt 4',
        //     'content'   => '<iframe src="https://drive.google.com/file/d/1XRrVOHjo2JO1hEPcdvy3yYTVLKYm-hwK/preview" width="640" height="480" allow="autoplay"></iframe>'
        // ]);
        // $this->create([
        //     'title' => 'Tăng cường các biện pháp phòng, chống dịch COVID-19 trong giai đoạn hiện nay',
        //     'content'   => '<iframe src="https://drive.google.com/file/d/1XW-q9zMPvwrs52sy1Uodd9kF0I8v0TRP/preview" width="640" height="480" allow="autoplay"></iframe>'
        // ]);
        // $this->create([
        //     'title' => 'Tổ chức cuộc thi KHKT cấp quốc gia học sinh trung học năm học 2021-2022',
        //     'content'   => '<iframe src="https://drive.google.com/file/d/1_Df6XhcHS54omTXsE4gUFc-DDsLwY9jb/preview" width="640" height="480" allow="autoplay"></iframe>'
        // ]);
    }
}

class InformationSchema extends Schema {
    public $id, $title, $content, $image, $create_at;
}

?>