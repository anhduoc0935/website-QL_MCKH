<?php 

class TopicModel extends Database {
    const IS_PENDING = 1, APPROVED = 2, OUT_OF_DATE = 3, COMPLETED = 4;
    
    public function __construct()
    {
        $this->connectDB();
        $this->table = 'topic';
        $this->schema = 'TopicSchema';
    }
}

class TopicSchema extends Schema {
    /**
     * Define all attribute that has name same with table's column name 
     */
    public $id, $name, $description, $content, $status, $teacher_id, $student_id, $subject_id, 
    $create_at, $approve_at, $due_at;

    private function user($id) {
        if(!class_exists('UserSchema'))
            require_once BASE_APP . "/model/UserModel.php";
        return $this->relation('users', 'UserSchema')->find($id);
    }

    public function student() {
        return $this->user($this->student_id);
    }

    public function teacher() {
        if(isset($this->teacher_id))
            return $this->user($this->teacher_id);
        return null;
    }

    public function subject() {
        if(!class_exists('SubjectSchema'))
            require_once BASE_APP . "/model/SubjectModel.php";
        return $this->relation('subject', 'SubjectSchema')->find($this->subject_id);
    }

    public function checkPending() {
        return $this->status == 1;
    }
    
    public function status() {
        $map = [
            1 => 'Đang chờ duyệt',
            2 => 'Đã duyệt',
            3 => 'Quá hạn',
            4 => 'Hoàn thành'
        ];
        return $map[$this->status];
    }
}

?>