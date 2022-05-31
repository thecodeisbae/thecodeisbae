<?php

namespace thecodeisbae\Routing;

final class Route
{
    /* Lead the requested segment to its controller */
    static function lead($main_segment,$params,$controller,$function,$method = 'GET')
    {
        include(_CONTROLLERS_PATH.$controller.'.php');
    }
}