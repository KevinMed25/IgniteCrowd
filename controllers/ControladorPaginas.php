<?php

namespace Controllers;

use Model\Router;
use MVC\Router as MVCRouter;

class ControladorPaginas {

    public static function index(MVCRouter  $router) {
        $router -> render('pages/Index', []);
    }

}

?>