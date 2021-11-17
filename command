<?php

require 'system/constants.php';
require _SYSTEM_PATH."env.php";

echo "\n\n";
echo "*****************************************************\n";
echo "*                                                   *\n";
echo "*                 \e[1;31m thecodeisbae \u{1F496}\e[0m                  *\n";
echo "*                                                   *\n";
echo "*****************************************************\n\n"; 

switch($argv[1])
{
    case 'add' :
        switch($argv[2])
        {
            case 'controller' :
                $file = _CONTROLLERS_PATH.$argv[3].'.php';
                $output = 
                    "<?php\n

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
                if(!file_exists($file))
                {
                    file_put_contents($file, $output, FILE_APPEND | LOCK_EX);
                    echo "Controller file\e[1;32m *".$argv[3]."*\e[0m is created successfully\n\n";
                }else{
                    echo "Controller file\e[1;31m *".$argv[3]."*\e[0m already exist\n\n";
                }
                break;

                case 'model' :
                    $file = _MODELS_PATH.$argv[3].'.php';
                    $output = 
                        "<?php\n    
    namespace thecodeisbae\Model;\n
    use Illuminate\Database\Eloquent\Model as Eloquent;\n
    \n
    class $argv[3] extends Eloquent\n
    {\n\n
    }";
                    if(!file_exists($file))
                    {
                        file_put_contents($file, $output, FILE_APPEND | LOCK_EX);
                        echo "Model file\e[1;32m *".$argv[3]."*\e[0m is created successfully\n\n";
                    }else{
                        echo "Model file\e[1;31m *".$argv[3]."*\e[0m already exist\n\n";
                    }
                    break;

                case 'table' :
                    $file = _DATABASE_PATH.$argv[3].'.php';
                    $output = 
                            "<?php
    \nuse Illuminate\Database\Capsule\Manager as Capsule;
    \n
    \nCapsule::schema()->create('".strtolower($argv[3])."', function (\$table) \n{
            \n \$table->increments('id');
            \n \$table->timestamps();
    \n});\n";
                    if(!file_exists($file))
                    {
                        file_put_contents($file, $output, FILE_APPEND | LOCK_EX);
                        echo "Database table file\e[1;32m *".$argv[3]."*\e[0m is created successfully\n\n";
                    }else{
                        echo "Database table file\e[1;31m *".$argv[3]."*\e[0m already exist\n\n";
                    }
                    break;

            default :
                echo "The \e[1;0;41m **".$argv[2]."** \e[0m command is unknown\n\n";
        }
        break;


    case 'migrate' :         
        if(!isset($argv[2]))
        {
            $databaseFiles = array_diff(scandir(_DATABASE_PATH), array('.', '..'));

            $error = 0;
            foreach ($databaseFiles as $key => $value){
                try {
                    require(_DATABASE_PATH.'/'.$value);
                    $startTime = microtime(true);
                    echo " \e[1;33m Table *".explode('.',$value)[0]."* is migrated\e[0m , took ".round((microtime(true) - $startTime)*1000*1000,2)." microseconds \n";
                } catch (PDOException $ex) {
                    $error = 1;
                    echo "->";
                    echo " \e[1;31m".$ex->errorInfo[2]."\e[0m\n\n";
                }
            }
            if(!$error)
                echo "\n  \e[1;32mDatabase files migration is done\e[0m \n\n";
            break;
        }   
        break;
       

    default :  
        echo "Use of unknown args while calling the \e[1;32mcommand\e[0m file\n\n";
}