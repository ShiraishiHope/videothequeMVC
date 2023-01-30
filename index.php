<?php
//generating const containing path to index.php
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

require_once(ROOT.'app/Model.php');
require_once(ROOT.'app/Controller.php');

//separating parameters
$params = explode('/', $_GET['p']);


//parameter exist?
if($params[0] != ""){
    $controller = ucfirst($params[0]);

    $action = isset($params[1]) ? $params[1] : 'index';

    require_once(ROOT.'controllers/'.$controller.'.php');

    $controller = new $controller();

    if(method_exists($controller, $action)){
        unset($params[0]);
        unset($params[1]);

        call_user_func_array([$controller,$action],$params);
        //$controller->$action();
    }else {
        http_response_code(404);
        echo "Page does not exist";
    }

} else {

}