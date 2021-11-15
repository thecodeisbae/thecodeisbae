<?php

                    

                        include_once(_VENDOR_PATH.'\thecodeisbae\Viewing\View.php'); /** The view rendering class **/ 

                        include_once(_VENDOR_PATH.'\thecodeisbae\Utilities\Accumulator.php'); /** The class responsible of storing and passing data to view **/ 

                    


                        use thecodeisbae\Viewing\View as View;

                        use thecodeisbae\Accumulator\Accumulator;

                    

                        final class HomeController

                        {

                            static public $uri;

                            static public $params;

                            static public $method;

                        

                        }

                        

                        HomeController::$uri = $main_segment;

                        HomeController::$method = $method;

                        HomeController::$params = $params;

                        

                        switch($function)

                        {

                            default:

                                break;

                        }
