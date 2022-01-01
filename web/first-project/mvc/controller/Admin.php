<?php

class Admin extends Controller{
    private $user_model, $topic_model, $subject_model, $information_model;

    public function __construct()
    {
        $this->loadModel("SubjectModel");
        $this->subject_model = new SubjectModel();
    }

    public function render($action, $params){
        if(!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== "admin" )
            header("Location: ". BASE_URL);
        
        if(empty($action)) {   //  only : yourdomain.com/admin
            $this->loadLayout("Admin", [
                'route' => 'index'
            ]);
        }
        else if($action === "user") 
            $this->UserRoute($params);
        else if($action === "topic")
            $this->TopicRoute($params);
        else if($action === "information")
            $this->InformationRoute($params);
    }

    private function InformationRoute($params) {
        $this->loadModel("InformationModel");
        $this->information_model = new InformationModel();

        if(empty($params))
            $this->loadLayout("Admin", [
                'informations' => $this->information_model->get(),
                'route' => 'information_index',
            ]);
        else if($params[0] === "create") {
            if($_SERVER['REQUEST_METHOD'] === "POST") {
                $this->information_model->create([
                    'title' => $_POST['title'],
                    'content' => $_POST['content']
                ]);

                header("Location: " . BASE_URL . "/admin/information");
            }
            $this->loadLayout("Admin", [
                'route' => 'information_create'
            ]);
        }
        else if(is_numeric($params[0])) {
            if(isset($params[1]) && $params[1] == 'delete')
                $this->information_model->where('id', '=', $params[0])->delete();
            header("Location: " . BASE_URL . "/admin/information");
        }
    }

    private function TopicRoute($params) {
        $this->loadModel("TopicModel");
        $this->topic_model = new TopicModel();

        if(empty($params))
            $this->loadLayout("Admin", [
                'topics' => $this->topic_model->get(),
                'subjects' => $this->subject_model->get(),
                'title' => 'Danh sách đề tài nghiên cứu',
                'route' => 'topic'
            ]);
        else if(is_numeric($params[0])) {
            if(isset($params[1]) && $params[1] == 'delete') {
                $this->topic_model->where('id', '=', $params[0])->delete();
            }
            header("Location: " . BASE_URL . "/admin/topic");
        }
    }

    private function UserRoute($params) {
        $this->loadModel("UserModel");
        $this->user_model = new UserModel();

        if(empty($params)) 
            $this->loadLayout("Admin", [
                'users' => $this->user_model->get(),
                'route' => 'user_index'
            ]);
        else if($params[0] === "create") {
            if($_SERVER['REQUEST_METHOD'] === "POST") {
                $this->user_model->create([
                    'fullname' => $_POST['firstname'] . " " . $_POST['lastname'],
                    'username' => $_POST['username'],
                    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                    'email'    => $_POST['email'],
                    'location' => $_POST['location'] ?? NULL,
                    'phone'    => $_POST['phone'],
                    'bod'      => $_POST['bod'],
                    'user_role'=> $_POST['user_role'],
                    'subject_id'=> $_POST['user_role'] === "teacher" ? $_POST['subject'] : NULL
                ]);
                header("Location: " . BASE_URL . "/admin/user");
            }
            $this->loadLayout("Admin", [
                'route' => 'user_create',
                'subjects' => $this->subject_model->get()
            ]);
        }
        else if (is_numeric($params[0])) {
            if(isset($params[1]) && $params[1] === 'delete') {
                $this->user_model->where('id', '=', $params[0])->delete();
                header("Location: " . BASE_URL . "/admin/user");
            }

            $this->loadLayout("Admin", [
                'route' => 'user_show',
                'user' => $this->user_model->find($params[0])
            ]);
        }
    }
}

?>