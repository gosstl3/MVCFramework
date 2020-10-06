<?php
class Views
{

    function getView($controller, $view, $data="")
    {
        $controller = get_class($controller);
        if ($controller == "Home") {
            //Armando la ruta para encontrar la vista 
            $view = "Views/". $view . ".php";
        } else {
            $view = "Views/" . $controller . "/" . $view . ".php";
        }
        require_once ($view);
                
    }
}
?>