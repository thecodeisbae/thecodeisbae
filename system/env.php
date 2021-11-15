<?php

session_save_path(_STORAGE_PATH.'sessions');
// session_name('thecodeisbae_'.random_int(123456789,999999999));
session_start();

include(_VENDOR_PATH.'autoload.php');

/** Parse ini file as stdClass Object **/
$config = parse_ini_file(_ROOT."params.ini", true);
$config = json_encode($config);
$config = json_decode($config);

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection([
        "driver" => $config->db->DBDriver,
        "host" => $config->db->DBHost,
        "database" => $config->db->DBName,
        "username" => $config->db->DBUser,
        "password" => $config->db->DBPass
    ]);
$capsule->setAsGlobal();
$capsule->bootEloquent();