<?php

    function debug($args) /** Return info about variable $args **/
    {
        echo '<pre style="background-color:black;color:white;padding:25px;font-size:130%">Debug information<br><br>', print_r($args, 1),'</pre>';
        exit;
    }

    function debug_trace() /** Return the history of the script **/
    {
        debug(debug_backtrace());
    }

    function getParams() : stdClass
    {
        $config = parse_ini_file(_ROOT."params.ini", true);
        $config = json_encode($config);
        $config = json_decode($config);
        return $config;
    }

    function debug_history() /** Return the running history of the script using stack**/
    {
        echo '<pre style="background-color:black;color:white;padding:25px;">Running history<br><br>',print_r(debug_print_backtrace(),1),'</pre>';
        exit;
    }

    function assets($path)
    {
        return _ASSETS_PATH.$path;
    }

    function storage($path)
    {
        return _STORAGE_PATH.'files/'.$path;
    }