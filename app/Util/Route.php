<?php
namespace Util;

use Util\View;
use Configuration\Config;



class Route
{

    public function __construct()
    {
        //$URL = $_SERVER['REQUEST_URI'];
        //$param = explode('/', $URL);
        //var_dump($param);
        $maConfig = new Config();
        $namespace = $maConfig->getNamespace();
        $controller = $maConfig->getController();
        $method = $maConfig->getMethod();
        $class = $namespace."\\".$controller;

        if (! class_exists($class)) {
            return $this->not_found();
        }

        if (! method_exists($class, $method)) {
            return $this->not_found();
        }

        $classInstance = new $class;

        call_user_func_array(array($classInstance, $method), $args=[]);
    }

    public function not_found()
    {
        $view = new View();
        return $view->render('404');
    }

}