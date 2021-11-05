<?php

/** Include the contants variables  **/
require_once('system/constants.php');

/** Use the autoload **/
require _VENDOR_PATH.'autoload.php';

/** Include the globals functions   **/
require_once('system/functions.php');

/** Setup database configuration **/
require_once('system/env.php');

/** Include the router file for handling request **/
require_once(_ROUTES_PATH.'router.php');