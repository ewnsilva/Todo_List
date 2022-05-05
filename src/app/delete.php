<?php

require_once __DIR__ . '/../../configurations/bootstrap.php';
require_once __DIR__ . '/../database/remove.php';

$id = filter_input(INPUT_GET, 'id');

if (deleteTask(getConnection(), $id)){
    header('Location:/../../../index.php');
};
