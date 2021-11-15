<?php

/** Include the contants variables  **/
require_once('system/constants.php');

/** Use the autoload **/
require _VENDOR_PATH.'autoload.php';

/** Include the globals functions   **/
require_once(_SYSTEM_PATH.'functions.php');

/** Setup database configuration **/
require_once(_SYSTEM_PATH.'env.php');

/** Include the router file for handling request **/
require_once(_ROUTES_PATH.'router.php');