<?php

ini_set('max_execution_time', 9000);

require_once('lib/dev.php');

use lib\parse;

spl_autoload_register(function ($class_name) {
    $path = str_replace('\\','/',$class_name.'.php');

    if (file_exists($path)){
        require_once $path;
    }
});
session_start();
$parse = new parse('https://store.steampowered.com/?l=russian');
$parse->get_site();
$parse->incude_phpQuery('phpQuery-onefile.php');