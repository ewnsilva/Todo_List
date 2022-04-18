<?php

require_once __DIR__ . '/../../configurations/bootstrap.php';
require_once __DIR__ . '/../validation/validation.php';
require_once __DIR__ . '/../database/insert.php';

$task = filter_input(INPUT_POST, 'task');

$validatingTask = isValid($task);

if ($validatingTask === false) {

    echo json_encode([
        'message' => 'O campo Nova Tarefa não pode ser deixado em branco.',   
    ]);
    return;
}

echo json_encode([
    'message' => 'Ação realizada com sucesso.',
]);

$inserting = insertTask(getConnection(), $task);
    if ($inserting === false) {
    echo json_encode([
        'message'=> 'Não foi possivel cadastrar a nova tarefa.',
    ]);

    return;
}

echo json_encode([
    'message'=> 'Ação realizada com sucesso.',
]);