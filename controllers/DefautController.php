<?php

include_once(_VENDOR_PATH.'\thecodeisbae\Viewing\View.php'); /** The view rendering class **/
include_once(_VENDOR_PATH.'\thecodeisbae\Utilities\Accumulator.php'); /** The class responsible of storing and passing data to view **/
include_once(_MODELS_PATH.'Activity.php');

use thecodeisbae\Viewing\View as View;
use thecodeisbae\Accumulator\Acculumator;
use thecodeisbae\Model\Activity;

final class DefaultController
{
    static public $uri;
    static public $params;
    static public $method;

    static function index()
    {
        Acculumator::init();
        Acculumator::push('name','Marilyn');
        Acculumator::push('infos',
            [
                'id'=>1,
                'age'=>15,
                'sexe'=>'Male'
            ]
        );
        return View::render('index',Acculumator::get());
    }
    
    static function about()
    {
        echo 'About page';die;
    }
    
    static function activities()
    {
        Acculumator::init();
        Acculumator::push('activities',Activity::all());
        return View::render('activities',Acculumator::get());
    }
}

DefaultController::$uri = $main_segment;
DefaultController::$method = $method;
DefaultController::$params = $params;

switch($function)
{
    case 'index':
        DefaultController::index();    
    break;
    
    case 'about':
        DefaultController::about();    
    break;
    
    case 'activities':
        DefaultController::activities();    
    break;
}

