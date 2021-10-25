<?php

session_save_path(_STORAGE_PATH.'sessions');
// session_name('thecodeisbae_'.random_int(123456789,999999999));
session_start();

require _VENDOR_PATH.'autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection([
        "driver" => "mysql",
        "host" =>"127.0.0.1",
        "database" => "api",
        "username" => "root",
        "password" => "xs4root"
    ]);
$capsule->setAsGlobal();
$capsule->bootEloquent();