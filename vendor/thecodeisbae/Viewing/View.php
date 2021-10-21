<?php 

namespace thecodeisbae\Viewing;

final class View
{
    static function render($view,$data = [])
    {
        include _VIEWS_PATH.$view.'.php';
    }
}