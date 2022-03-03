<?php

use thecodeisbae\Viewing\View as View; /** The view rendering class **/
use thecodeisbae\Accumulator\Accumulator; /** The class responsible of storing and passing data to view **/

final class DefaultController
{
    static public $uri;
    static public $params;
    static public $method;

    static function home()
    {
        return View::render('home');
    }
    static function error404()
    {
        return View::render('404');
    }
    
}

DefaultController::$uri = $main_segment;
DefaultController::$method = $method;
DefaultController::$params = $params;

switch($function)
{
    case 'home':
        DefaultController::home();    
    break;

    case 'error404':
        DefaultController::error404();    
    break;
}

