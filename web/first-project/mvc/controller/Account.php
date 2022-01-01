<?php 

class Account extends Controller {
    private $user_model;

    public function __construct() {
        $this->loadModel("UserModel");
        $this->user_model = new UserModel();
        // $this->user_model->create([
        //     'fullname'  => 'Nguyễn Văn CD',
        //     'username'  => '123',
        //     'email'     => 'adminss@gmail.com',
        //     'password'  => password_hash('123', PASSWORD_DEFAULT),
        //     'phone'     => '0123456789',
        //     'bod'       => '2001-06-18',
        //     'user_role' => 'admin'
        // ]);
    }

    public function render($action, $params) {
        /**
         * example action == login
         * url = yourdomain.com/account/login
         */
        if(empty($action)) {
            if($_SERVER['REQUEST_METHOD'] === "POST") {
                $this->user_model->where('id', '=', $_SESSION['uid'])
                ->update([
                    'phone' => $_POST['phone'],
                    'location' => $_POST['location']
                ]);
                header("Location: " . BASE_URL . "/account");
            }

            if(isset($_SESSION['uid'])) {
                $user = $this->user_model
                ->where('id', '=', $_SESSION['uid'])
                ->first();
                $this->loadLayout("Profile",['user' => $user]);
            }
        }

        else if($action === "login")
            $this->Login();
        else if($action === "register")
            $this->Register();
        else if($action === "logout")
            $this->Logout();
    }

    private function Login() {
        if(isset($_SESSION['uid'])) 
            header("Location: ".BASE_URL);

        $data = [];
        if($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $user = $this->user_model->loginUser($username, $password);
            if($user) {
                //  Store user data to session & redirect to homepage
                $_SESSION['uid'] = $user->id;
                $_SESSION['fullname'] = $user->fullname;
                $_SESSION['username'] = $user->username;
                $_SESSION['user_role'] = $user->user_role;
                $_SESSION['avatar'] = $user->avatar;
                if($user->user_role === "teacher") {
                    $_SESSION['subject_id'] = $user->subject()->id;
                }
                else if($user->user_role === 'admin')
                    header("Location: " . BASE_URL . "/admin");
                else 
                    header("Location: " . BASE_URL);
            }
            else 
                $data['error'] = "Tên đăng nhập, mật khẩu không chính xác.";
        }
        $this->loadLayout("Login", $data);
    }

    private function Register() {
        $data = [];
        if($_SERVER["REQUEST_METHOD"] === "POST") {
            $success = $this->user_model->create([
                'fullname'  => $_POST['firstname'] ." ". $_POST['lastname'],
                'username'  => $_POST['username'],
                'email'     => $_POST['email'],
                'bod'       => $_POST['bod'],
                'phone'     => $_POST['phone'],
                'location'  => $_POST['location'] ?? NULL,
                'password'  => password_hash($_POST['password'], PASSWORD_DEFAULT)
            ]);
            if($success) 
                header("Location: " . BASE_URL . "/account/login");
            else 
                $data['error'] = "Đăng ký thất bại, vui lòng kiểm tra lại.";
        }
        $this->loadLayout("Register", $data);
    }

    private function Logout() {
        if(session_destroy())
            header("Location: ".BASE_URL."/account/login");
    }
}

?>
