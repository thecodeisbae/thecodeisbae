<?php

require('system/constants.php');

switch($argv[1])
{
    case 'add' :
        switch($argv[2])
        {
            case 'controller' :
                $file = _CONTROLLERS_PATH.'\\'.$argv[3].'.php';
                $output = 
                    "<?php\n
                    \n
                        include_once(_VENDOR_PATH.'\thecodeisbae\Viewing\View.php'); /** The view rendering class **/ \n
                        include_once(_VENDOR_PATH.'\thecodeisbae\Utilities\Accumulator.php'); /** The class responsible of storing and passing data to view **/ \n
                    \n

                        use thecodeisbae\Viewing\View as View;\n
                        use thecodeisbae\Accumulator\Accumulator;\n
                    \n
                        final class $argv[3]\n
                        {\n
                            static public \$uri;\n
                            static public \$params;\n
                            static public \$method;\n
                        \n
                        }\n
                        \n
                        $argv[3]::\$uri = \$main_segment;\n
                        $argv[3]::\$method = \$method;\n
                        $argv[3]::\$params = \$params;\n
                        \n
                        switch(\$function)\n
                        {\n
                            default:\n
                                break;\n
                        }\n";

                file_put_contents($file, $output, FILE_APPEND | LOCK_EX);
                echo '<pre>',print_r($argv,1),'</pre>';
                break;
            default :
                echo "The ** ".$argv[2]." ** command is unknown";
        }
        break;
    
    default :  
        echo 'Use of unknown args while calling the command.php file';
}