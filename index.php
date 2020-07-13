<?php

ini_set('max_execution_time', 9000);


require_once($_SERVER['DOCUMENT_ROOT'].'/lib/dev.php');

use lib\Parse;

spl_autoload_register(function ($class_name) {
    $path = str_replace('\\','/',$class_name.'.php');
    if (file_exists($path)){
        require_once $path;
    }
});

session_start();