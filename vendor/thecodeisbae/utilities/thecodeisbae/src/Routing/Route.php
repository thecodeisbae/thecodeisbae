<?php

namespace thecodeisbae\Routing;

final class Route
{
    static function lead($main_segment,$params,$controller,$function,$method = 'GET')
    {
        include(_CONTROLLERS_PATH.$controller.'.php');
    }
}