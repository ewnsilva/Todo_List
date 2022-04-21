<?php

require_once __DIR__ . '/../../configurations/bootstrap.php';
require_once __DIR__ . '/../validation/validation.php';
require_once __DIR__ . '/../dbase/insert.php';

/* $task = filter_input(INPUT_POST, 'task'); */

 if (isset($_POST['task'])) {
    $task = filter_input(INPUT_POST, 'task', FILTER_SANITIZE_STRING);
    $query =    "INSERT INTO task
                (description, created_at)
                VALUES (($task), NOW())";
    /* $statement = $connection->prepare($query); */
    /* $statement->bindParam('description', $task); */
    /* $statement->execute();  */
}


/* $validatingTask = isValid($task);

if ($validatingTask === false) {

    echo json_encode([
        'message' => 'O campo Nova Tarefa não pode ser deixado em branco.',   
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
 */