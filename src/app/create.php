<?php

require_once __DIR__ . '/../../configurations/bootstrap.php';
require_once __DIR__ . '/../validation/validation.php';
require_once __DIR__ . '/../database/insert.php';

$task = filter_input(INPUT_POST, 'task', FILTER_SANITIZE_STRING);

insertTask(getConnection(), $task);
