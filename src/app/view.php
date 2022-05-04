<?php

require_once __DIR__ . 'list.php';

function showId(){
    $id = [];
foreach($list as $id){
    $id = ['id'];
}
echo $id;
}

function showValue(){
    $value = [];
foreach($list as $task){
    $value = ['description'];
}
echo $value;
}
