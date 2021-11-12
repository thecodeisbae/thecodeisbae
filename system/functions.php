<?php

    function debug($args)
    {
        echo '<pre style="background-color:black;color:white;padding:25px;">Debug information<br><br>', print_r($args, 1),'</pre>';
        exit;
    }

    function debug_trace()
    {
        debug(debug_backtrace());
    }

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