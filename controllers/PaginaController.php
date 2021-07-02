<?php

namespace Controllers;
use MVC\Router;
use Model\Receta;

class PaginaController{
    public static function index(Router $router){

        $router->render('/paginas/index',[
            
        ]);
    }
    public static function conferencia(Router $router){

        $router->render('/paginas/conferencia',[
            
        ]);
    }
    public static function registro(Router $router){

        $router->render('/paginas/registro',[
            
        ]);
    }
}