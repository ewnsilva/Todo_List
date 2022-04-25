<?php

require_once __DIR__ . '/../../configurations/bootstrap.php';
require_once __DIR__ . '/../validation/validation.php';
require_once __DIR__ . '/../database/insert.php';

$task = filter_input(INPUT_GET, 'task');

$validatingTask = isValid($task);

if ($validatingTask === false) {

    echo json_encode([
        'message' => 'O campo Nova Tarefa nao pode ser deixado em branco.',   
    ]);
    return;
}

$inserting = insertTask(getConnection(), $task);
    if ($inserting === false) {

    echo json_encode([
        'message'=> 'Nao foi possivel cadastrar a nova tarefa.',
    ]);
    return;
}

return $inserting;
