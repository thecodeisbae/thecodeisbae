<?php

// include_once(_VENDOR_PATH.'autoload.php');
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
        Route::lead($_uri,$_params,'DefautController','index',$_method);
    break;

    case 'about':  
        Route::lead($_uri,$_params,'DefautController','about',$_method);
    break;

    case 'activities':  
        Route::lead($_uri,$_params,'DefautController','activities',$_method);
    break;

    case 'login': 
        if($_method == 'GET') 
            Route::lead($_uri,$_params,'LoginController','index',$_method);
        if($_method == 'POST') 
            Route::lead($_uri,$_params,'LoginController','login',$_method);
    break;
}
