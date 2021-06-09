<?php

namespace Controllers;
use MVC\Router;
use Model\Receta;

class PaginaController{
    public static function index(Router $router){

        $router->render('/paginas/index',[
            
        ]);
    }
}