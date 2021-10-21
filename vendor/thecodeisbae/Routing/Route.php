<?php

namespace thecodeisbae\Routing;

final class Route
{
    /* ** Instanciation informations
        private $_method;
        private $_main_segment;
        private $_params;
        private $_controller;
        private $_function;

        function __construct($main_segment,$params,$controller,$function,$method = 'GET')
        {
            $this->_method = $method;
            $this->_main_segment = $main_segment;
            $this->_params = $params;
            $this->_controller = $controller;
            $this->_function = $function;
        } 
    */

    static function lead($main_segment,$params,$controller,$function,$method = 'GET')
    {
        include(_CONTROLLERS_PATH.$controller.'.php');
    }
}