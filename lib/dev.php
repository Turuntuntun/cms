<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

function debug($value,$mode = 'elem'){
    foreach ($value as $elem){
        echo '<pre>';
        var_dump($elem);
        echo '</pre>';
    }
    exit;
}


function jsonPrint($array){
    echo json_encode($array)."<br><br>";
}