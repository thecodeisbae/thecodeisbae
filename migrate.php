<?php

require _ROOT.'constants.php';

$databaseFiles = array_diff(scandir(_DATABASE_PATH), array('.', '..'));

foreach ($databaseFiles as $key => $value){
    require(_DATABASE_PATH.'/'.$value);
}
echo 'Migration is done';
