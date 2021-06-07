<?php

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PaginaController;

$router = new Router();

// debuguear(RecetaController::class);

$router->get('/',[PaginaController::class, 'index']);


$router->comprobarRutas();