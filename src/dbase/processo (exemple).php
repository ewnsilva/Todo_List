<?php

    $tarefa = $_POST['tarefa'];

    $task = filter_input(INPUT_POST, '$tarefa');

    $connection = getConnection('', '', '', '');
    $insert = insertTask($connection, $task);

    return header('Location: /index.php');