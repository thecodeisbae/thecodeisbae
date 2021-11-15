<?php

/**
 * The current function purpose is to stock data in a array
 * and send them to View render function
**/

namespace thecodeisbae\Accumulator;

final class Accumulator
{
    static protected $array = []; 

    static function push($key,$value)
    {
        self::$array[$key] = $value;
    }

    static function init()
    {
        self::$array = [];
    }
    
    static function get()
    {
        return (self::$array);
    }
}