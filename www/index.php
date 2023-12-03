<?php
    include('../include.php');
    // $controllerName = 'app\\Controllers\\'.$_GET['controller'].'Controller';
    // $actionName = $_GET['action'];
    // $controller = new $controllerName();
    // $view = $controller -> $actionName();
    // $view -> display();

    // Kernel\Connexion::get();
    // include('../app/Views/index.php');

    //var_dump(app\Models\Pays::find(1));
    $controller = new app\Controllers\PaysController();
    // $view = $controller ->vols();
    // $view -> display();


    $toerana = $controller ->index();
    $toerana -> display() && vols();
    // $voir = $controller -> edit();

    // $voir -> display();
    //var_dump($view);
?>