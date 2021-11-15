<?php

                    

                        include_once(_VENDOR_PATH.'\thecodeisbae\Viewing\View.php'); /** The view rendering class **/ 

                        include_once(_VENDOR_PATH.'\thecodeisbae\Utilities\Accumulator.php'); /** The class responsible of storing and passing data to view **/ 

                    


                        use thecodeisbae\Viewing\View as View;

                        use thecodeisbae\Accumulator\Accumulator;

                    

                        final class BlogController

                        {

                            static public $uri;

                            static public $params;

                            static public $method;

                        

                        }

                        

                        BlogController::$uri = $main_segment;

                        BlogController::$method = $method;

                        BlogController::$params = $params;

                        

                        switch($function)

                        {

                            default:

                                break;

                        }
