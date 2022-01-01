<?php 

class Topic extends Controller {
    private $topic_model;
    private $subject_model;

    public function __construct()
    {
        $this->loadModel("TopicModel");
        $this->loadModel("SubjectModel");
        $this->topic_model = new TopicModel();
        $this->subject_model = new SubjectModel();

        // $this->loadModel("UserModel");
        // $user_model = new UserModel();
        // $user_model->create()
    }

    public function render($action, $params) {
        if(!$action) {
            $this->loadLayout("Topic", [
                'title' => 'Tất cả đề tài nghiên cứu',
                'topics' => $this->topic_model->get(),
                'subjects' => $this->subject_model->get(),
                'route' => 'index'
            ]);
        }
        else if($action === "my-topic") 
            $this->userTopic($params);
        else if($action === "create")
            $this->createTopic();
        else if(is_numeric($action)) {
            if(empty($params))
                $this->loadLayout("Topic", [
                    'topic' => $this->topic_model->find($action),
                    'route' => 'show'
                ]);
            else if($params[0] === 'approve') {
                $this->topic_model->where('id', '=', $action)->update([
                    'teacher_id' => $_SESSION['uid'],
                    'status' => TopicModel::APPROVED,
                    'approve_at' => date('Y-m-d'),
                    'due_at' => date('Y-m-d', strtotime('+2 week'))
                ]);
                header("Location: " . BASE_URL . "/topic");
            }
            else if($params[0] === 'complete') {
                $this->topic_model->where('id', '=', $action)->update([
                    'status' => TopicModel::COMPLETED,
                ]);
                header("Location: " . BASE_URL . "/topic/{$action}");
            }
            else if($params[0] === 'cancle') {
                $this->topic_model->where('id', '=', $action)->update([
                    'status' => TopicModel::OUT_OF_DATE,
                ]);
                header("Location: " . BASE_URL . "/topic/{$action}");
            }
        }
    }

    public function userTopic($params) {
        $topics = [];
        if(empty($params)) {
            if($_SESSION['user_role'] === "teacher")
                $topics = $this->topic_model
                ->where('subject_id', '=', $_SESSION['subject_id'])
                ->get();
            else 
                $topics = $this->topic_model
                ->where('student_id', '=', $_SESSION['uid'])
                ->get();
        }
        else if($params[0] === "is-pending") {
            if($_SESSION['user_role'] === "teacher")
                $topics = $this->topic_model
                ->where('subject_id', '=', $_SESSION['subject_id'])
                ->where('status', '=', TopicModel::IS_PENDING)
                ->get();
            else 
                $topics = $this->topic_model
                ->where('student_id', '=', $_SESSION['uid'])
                ->where('status', '=', "1"  )
                ->get();
        }
        else if($params[0] === "approved") {
            if($_SESSION['user_role'] === "teacher")
                $topics = $this->topic_model
                ->where('subject_id', '=', $_SESSION['subject_id'])
                ->where('status', '=', TopicModel::APPROVED)
                ->get();
            else 
                $topics = $this->topic_model
                ->where('student_id', '=', $_SESSION['uid'])
                ->where('status', '=', TopicModel::APPROVED)
                ->get();
        }
        else if($params[0] === "out-of-date") {
            $topics = $this->topic_model
            ->where('student_id', '=', $_SESSION['uid'])
            ->where('status', '=', 3)
            ->get();
        }
        else if($params[0] === "completed") {
            $topics = $this->topic_model
            ->where('student_id', '=', $_SESSION['uid'])
            ->where('status', '=', 4)
            ->get();
        }

        $this->loadLayout("Topic", [
            'title' => 'Đề tài của tôi',
            'topics' => $topics,
            'subjects' => $this->subject_model->get(),
            'route' => 'index'
        ]);
    }

    public function createTopic() {
        $error = null;
        if($_SERVER['REQUEST_METHOD'] === "POST") {
            $success = $this->topic_model->create([
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'content' => $_POST['content'],
                'student_id' => $_SESSION['uid'],
                'subject_id' => $_POST['subject']
            ]);
            if($success)
                header("Location: " . BASE_URL . "/topic/my-topic");
            else 
                $error = "Đề tài đã được đăng kí.";
        }

        $this->loadLayout("Topic", [
            'subjects' => $this->subject_model->get(),
            'route' => 'create',
            'error' => $error
        ]);
    }
}

?>