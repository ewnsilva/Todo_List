<?php

require_once __DIR__ . '/../../configurations/bootstrap.php';
require_once __DIR__ . '/../database/select.php';


$list = listAllTask(getConnection());

echo json_encode($list);
