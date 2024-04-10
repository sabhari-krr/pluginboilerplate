<?php

namespace App;

use App\Controller\Controller;

class Router
{
    private static $controller_instance;
    public function init(){
        self::$controller_instance = empty(self::$controller_instance) ? new Controller() : self::$controller_instance;
        add_action('admin_menu',[self::$controller_instance,'add_menu']);
        add_action('rest_api_init',[self::$controller_instance,'registerEndPoint']);

    }

}