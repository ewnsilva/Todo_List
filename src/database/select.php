<?php

require_once __DIR__ . '/../../configurations/connection.php';

function listAllTasks($conn)
{
    $query = "SELECT * FROM tasks";

    $statement = $conn->query($query);

    $result = [];
    foreach ($statement as $task){
        $result[] = $task;
    }

    return $result;
}
