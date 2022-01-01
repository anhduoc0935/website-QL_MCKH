<?php

class Server{
    
    /**
     * To create a new controller => that file will named following:
     * If that route you want to control in the url is product
     * example: yourdomain.com/product/ao-thun/...
     * So, you will create a new controller named Product that contain Product class
     */
    function __construct()
    {
        $controller = 'Home';
        $action = NULL;
        $params = NULL;
        if(isset($_GET['url'])) {  
            $url = $_GET['url'];
            $arr = explode("/", trim($url));    
            
            $controller = ucfirst($arr[0]);
            if(count($arr) > 1) { //  have action & params
                $action = $arr[1];
                $params = array_slice($arr, 2);
            }
        }
        $route_path = BASE_APP . "/controller/". $controller .".php"; 
        if(file_exists($route_path)) {
            //  check login
            if(!isset($_SESSION['uid']) && $action !== "login" && $action !== "register")
                header("Location: " . BASE_URL . "/account/login");
            require_once $route_path;
            $route = new $controller;
            $route->render($action, $params);
        }
        else {
            require_once BASE_PATH . "/notfound.html";
        }
    }
}

?>
