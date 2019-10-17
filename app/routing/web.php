<?php

use Controllers\IndexController;
use Core\RenderEngine;
use Klein\Klein;
use Models\Tables\Users;

$router = new Klein();

$router->get("/?", function () {
    $controller=new IndexController();
    $controller->show();
});

include "auth.php";

$router->dispatch();