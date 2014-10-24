<?php
//front controller

function application_loader($ControllerName){
    $controller = "./M151/controller/" . $ControllerName . '.php';
    $model = "./M151/model/" . $ControllerName . '.php';
    $view = "./M151/views/" . $ControllerName . '.php';
    include_once($controller);
    include_once($model);
    include_once($view);
}

if(isset($_GET['controller'])){
    $load=$_GET['controller'];
}else {
    $load='index';
}
application_loader($load);
$controller = new controller();
echo $controller->display();
?>