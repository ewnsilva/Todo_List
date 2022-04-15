<?php

    $tarefa = $_POST['tarefa'];

    $task = filter_input(INPUT_POST, '$tarefa');

    $connection = getConnection('', '', '', '');
    $insert = insertTask($connection, $task);

    if ($insert = true) {
        return header('Location: /error.php'):
    }
    
    return header('Location: /index.php');