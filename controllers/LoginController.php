<?php

include_once(_VENDOR_PATH.'\thecodeisbae\Viewing\View.php'); /** The view rendering class **/
include_once(_VENDOR_PATH.'\thecodeisbae\Utilities\Accumulator.php'); /** The class responsible of storing and passing data to view **/
include_once(_VENDOR_PATH.'\thecodeisbae\Utilities\Validator.php'); /** The class responsible of validating some form elements **/
include_once(_VENDOR_PATH.'\thecodeisbae\Files\FileManager.php'); /** The class responsible of interacting with file manager **/
include_once(_VENDOR_PATH.'\thecodeisbae\Mailer\Mailer.php'); /** The class responsible of sending emails **/
include_once(_MODELS_PATH.'User.php');

use thecodeisbae\Viewing\View as View;
use thecodeisbae\Accumulator\Acculumator;
use thecodeisbae\FileManager\FileManager;
use thecodeisbae\Validator\Validator;
use thecodeisbae\Mailer\Mailer;
use thecodeisbae\Model\User;

final class LoginController
{
    static public $uri;
    static public $params;
    static public $method;

    static function index()
    {
        Mailer::send('thecodeisbae@gmail.com','Sujet','Corps du message',_STORAGE_PATH.'files/vscode.pdf','VSCode.pdf');
        return View::render('login');
    }
    

    static function login()
    {
        debug_trace();
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

