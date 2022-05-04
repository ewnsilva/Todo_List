<?php

require_once __DIR__ . '/../../configurations/bootstrap.php';
require_once __DIR__ . '/../database/select.php';

$list = listAllTasks(getConnection());
