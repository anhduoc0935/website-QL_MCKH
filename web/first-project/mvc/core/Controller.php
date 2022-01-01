<?php 

class Controller {

    function loadModel($model) {
        require_once BASE_APP . "/model/".$model. ".php";
    }

    function loadLayout($page, $data = []) {
        require_once BASE_APP . "/view/index.php";
    }

}
?>