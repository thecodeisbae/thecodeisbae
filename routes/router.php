<?php

use thecodeisbae\Routing\Route as Route;

/** Retrieve necessary infos from the request **/
    $_full_url = explode('/',$_SERVER['REQUEST_URI']); 
    $_uri = $_full_url[1];
    $_url = $_SERVER['HTTP_HOST'].$_uri;
    $_method = $_SERVER['REQUEST_METHOD'];
    $_params = array_slice($_full_url,2);
    

/** Handle the uri using the right controller and function **/
switch($_uri)
{
    case '':  
        Route::lead($_uri,$_params,'DefaultController','home',$_method);
    break;

    case 'home':  
        Route::lead($_uri,$_params,'DefaultController','home',$_method);
    break;

    default :
        Route::lead($_uri,$_params,'DefaultController','error404',$_method);
    break;
}
