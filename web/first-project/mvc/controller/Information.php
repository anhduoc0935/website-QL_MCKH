<?php 

class Information extends Controller {
    private $information_model;

    public function __construct()
    {
        $this->loadModel("InformationModel");
        $this->information_model = new InformationModel();
    }

    public function render($action, $params) {
        if(is_numeric($action))
            $this->loadLayout("Information", [
                'information'   => $this->information_model->find($action)
            ]);
    }
}

?>