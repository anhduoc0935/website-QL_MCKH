<?php 

class Home extends Controller{
    private $information_model;
    /**
     * @declare some private variable here
     * example: private user_model;
     */
    public function __construct() {
        $this->loadModel("InformationModel");
        $this->loadModel("SubjectModel");
        new SubjectModel();
        $this->information_model = new InformationModel();        
    }
    
    /**
     * Handle some subroute or params
     */
    public function render($action, $params) {
        $this->loadLayout("Homepage", [
            'informations' => $this->information_model->get()
        ]);
    }
}

?>