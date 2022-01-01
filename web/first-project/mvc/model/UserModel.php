<?php 

class UserModel extends Database {
    
    public function __construct()
    {
        $this->connectDB();
        $this->table = "users";
        $this->schema = 'UserSchema';
    }

    /**
     * @User login
     * If fail => return null,
     * else => return user information
     */
    public function loginUser($username, $password) {
        $user = $this->where('username', '=', $username)->first();
        if(isset($user) && password_verify($password, $user->password))
            return $user;
        return null;
    }
}

class UserSchema extends Schema {
    const USER_ROLE_TRANSLATE = [
        'student' => 'Sinh viên',
        'teacher' => 'Giảng viên',
        'admin'   => 'Quản trị viên'
    ];
    /**
     * Define all attribute that has name same with table's column name 
     */
    public $id, $fullname, $username, $email, $avatar, 
    $location, $phone, $user_role, $bod, $password, $subject_id;

    public function subject() {
        if($this->user_role === "teacher") {
            if(!class_exists('SubjectSchema'))
                require_once BASE_APP . "/model/SubjectModel.php";
            return $this->relation('subject', 'SubjectSchema')->find($this->subject_id);
        }
        return null;
    }

    public function user_role() {
        return self::USER_ROLE_TRANSLATE[$this->user_role];
    }
}


?>