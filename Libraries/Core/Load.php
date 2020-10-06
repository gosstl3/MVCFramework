<?php
//Load (para mandar datos al controlador)
$controller = ucwords($controller); //Esta linea convierte la primera letra en mayusculas
$controllerFile = "Controllers/" . $controller . ".php";
if (file_exists($controllerFile)) {
    require_once($controllerFile);
    $controller = new $controller();
    if (method_exists($controller, $method)) {
        $controller->{$method}($params);
    } else {
        require_once("Controllers/Error.php");
    }
} else {
    require_once("Controllers/Error.php");
}
