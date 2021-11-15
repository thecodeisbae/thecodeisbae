<?php

use thecodeisbae\Accumulator\Accumulator; /** The class responsible of storing and passing data to view **/
use thecodeisbae\Viewing\View as View;  /** The view rendering class **/
use thecodeisbae\FileManager\FileManager;/** The class responsible of interacting with file manager **/
use thecodeisbae\Validator\Validator;/** The class responsible of validating some form elements **/
use thecodeisbae\Mailer\Mailer;/** The class responsible of sending emails **/
use thecodeisbae\Model\User;

include_once(_MODELS_PATH.'User.php');


final class LoginController
{
    static public $uri;
    static public $params;
    static public $method;

    static function index()
    {
        // Mailer::send('thecodeisbae@gmail.com','Sujet','Corps du message',_STORAGE_PATH.'files/vscode.pdf','VSCode.pdf');
        return View::render('login');
    }
    

    static function login()
    {
        debug(FileManager::delete('flutter.zip'));die;
        $_SESSION['flash'] = 'Fine let\'s go ahead';
        $_SESSION['type'] = 'success';
        $toValidate = [
            'login'=>'onlyText',
            'password'=>'number'
        ];

        $old = [];
        foreach ($_REQUEST as $key => $value)
        {
            $old[$key] = $value;
        }

        if(sizeof(Validator::check($toValidate)) != 0)        
            return View::render('login',Validator::check($toValidate),$old);
        
        return View::render('index');
    }
    
}

LoginController::$uri = $main_segment;
LoginController::$method = $method;
LoginController::$params = $params;

switch($function)
{
    case 'index':
        LoginController::index(); 
    break;

    case 'login':
        LoginController::login();    
    break;
}

