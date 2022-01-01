<?php 

class SubjectModel extends Database {
    public function __construct()
    {
        $this->connectDB();
        $this->table = 'subject';
        $this->schema = 'SubjectSchema';
        // $this->create([
        //     'name'  => 'Tự nhiên',
        //     'description' => 'Khoa học tự nhiên (KHTN) là môn học được xây dựng và phát triển trên nền tảng của Vật lý, Hoá học, Sinh học và Khoa học Trái Đất,... Đồng thời, sự tiến bộ của nhiều ngành khoa học khác liên quan như Toán học, Tin học,... cũng góp phần thúc đẩy sự phát triển không ngừng của KHTN.'
        // ]);
        // $this->create([
        //     'name'  => 'Xã hội',
        //     'description' => 'Khoa học xã hội là một nhóm các ngành học thuật chuyên về nghiên cứu xã hội. Nhánh khoa học này nghiên cứu cách mọi người tương tác với nhau, cư xử, phát triển thành một nền văn hóa và ảnh hưởng đến thế giới.'
        // ]);
        // $this->create([
        //     'name'  => 'Giáo dục',
        //     'description' => 'Khoa học giáo dục (khoa học giáo dục) là một bộ phân của hệ thống các khoa học nghiên cứu về con người, bao gồm: giáo dục học, tâm lý học sư phạm, lý luận dạy học, phương pháp giảng day bộ môn... khoa học giáo dục có mối quan hệ với các khoa học khác như triết học, xã hội học, dân số học, kinh tế học, quản lý học...So với các khoa học khác, khoa học giáo dục có đặc điểm nội bật đó là: tính phức tạp và tính tương đối. Tính phức tạp hể hiện ở mối quan hệ giao thoa với các khoa học khác, không có sự phân hóa triệt để, mà cần có sự phối hợp bởi vì con người vốn là thế giới phức tạp. Cuối cùng các qui luật của khoa học giáo dục là mang tính số đông, có tính chất tương đối, không chính xác như toán học, hóa học...'
        // ]);
        // $this->create([
        //     'name'  => 'Kỹ thuật',
        //     'description' => 'Khoa học kỹ thuật là các ngành khoa học liên quan tới việc phát triển kỹ thuật và thiết kế các sản phẩm trong đó có ứng dụng các kiến thức khoa học tự nhiên. Các ngành khoa học kỹ thuật cổ điển bao gồm khoa học kỹ thuật xây dựng (bao gồm cả khoa học trắc địa), khoa học chế tạo máy và khoa học điện tử. Các ngành khoa học kỹ thuật mới bao gồm kỹ thuật an toàn, kỹ thuật công trình nhà, hóa kỹ thuật và vi kỹ thuật.'
        // ]);
        // $this->create([
        //     'name'  => 'Nông - Lâm - Ngư',
        //     'description' => 'Đây là lĩnh vực nghiên cứu các khía cạnh về nông nghiệp, lâm nghiệp và ngư nghiệp.'
        // ]);
        // $this->create([
        //     'name'  => 'Y dược',
        //     'description' => 'Dược học hay dược là lĩnh vực khoa học ứng dụng, nghiên cứu về thuốc trên 2 lĩnh vực chính gồm quá trình nghiên cứu mối liên quan giữa thuốc và cơ thể; cách vận dụng thuốc trong điều trị bệnh, cách sử dụng các chất lấy từ tự nhiên hay tổng hợp để chống lại bệnh tật và bảo vệ cơ thể.'
        // ]);
        // $this->create([
        //     'name'  => 'Môi trường',
        //     'description' => 'Khoa học môi trường là một lĩnh vực hàn lâm liên ngành kết hợp vật lý, sinh học và Khoa học thông tin vào việc nghiên cứu môi trường, và các giải pháp cho các vấn đề môi trường. Khoa học môi trường nổi lên từ các lĩnh vực của lịch sử tự nhiên và y học trong Thời kỳ Khai sáng.'
        // ]);
    }
}

class SubjectSchema extends Schema {
    public $id, $name, $description;
}


?>