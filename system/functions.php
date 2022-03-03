<?php

    use thecodeisbae\LayoutManager\LayoutManager;

    /** Return info about variable $args */
    function debug($args) 
    {
        echo '<pre style="background-color:black;color:white;padding:25px;font-size:130%">Debug information<br><br>', print_r($args, 1),'</pre>';
        exit;
    }
    
    /** Return the running history of the script */
    function debug_trace() 
    {
        debug(debug_backtrace());
    }
    
    /** Return the running history of the script using stack */
    function debug_history() 
    {
        echo '<pre style="background-color:black;color:white;padding:25px;">Running history<br><br>',print_r(debug_print_backtrace(),1),'</pre>';
        exit;
    }

    /** Returns params.ini settings as an stdClass object */
    function getParams() : stdClass
    {
        $config = parse_ini_file(_ROOT."params.ini", true);
        $config = json_encode($config);
        $config = json_decode($config);
        return $config;
    }

    /** Retrieve an asset from assets path */
    function assets($path)
    {
        return _ASSETS_PATH.$path;
    }

    /** Retrieve an file from storage files path */
    function storage($path)
    {
        return _STORAGE_PATH.'files/'.$path;
    }
    
    /** Init the layout manager */
    function layoutInit()
    {
        LayoutManager::init();
    }

    /** Create a section named $name */
    function startSection($name)
    {
        LayoutManager::start_section($name);
    }

    /** End the section named $name */
    function endSection($name)
    {
        LayoutManager::end_section($name); 
    }

    /** Set the file which will be used as basis for other by giving its relative path */
    function setLayout($path)
    {
        LayoutManager::set(_VIEWS_PATH.$path);
    }

    /** Return content of an section named $name */
    function section($name)
    {
        return LayoutManager::section($name);
    }

    function redirect($uri)
    {
        header("Location: ".$uri);
        die;
    }