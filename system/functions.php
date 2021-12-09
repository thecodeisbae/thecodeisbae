<?php
    /** Return info about variable $args */
    function debug($args) 
    {
        echo '<pre style="background-color:black;color:white;padding:25px;font-size:130%">Debug information<br><br>', print_r($args, 1),'</pre>';
        exit;
    }
    
    /** Return the history of the script */
    function debug_trace() 
    {
        debug(debug_backtrace());
    }

    /** Returns params.ini settings as an stdClass object */
    function getParams() : stdClass
    {
        $config = parse_ini_file(_ROOT."params.ini", true);
        $config = json_encode($config);
        $config = json_decode($config);
        return $config;
    }

    /** Return the running history of the script using stack */
    function debug_history() 
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
    