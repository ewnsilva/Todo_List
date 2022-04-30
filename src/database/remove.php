<?php

require_once __DIR__ . '/../../configurations/connection.php';

function deleteTask($connection, int $id)
{
    $query = "DELETE FROM tasks WHERE id = '{$id}';";

    $statement = $connection->query($query);

    $result = [];
    foreach ($statement as $task){
        $result[] = $task;
    }

    return $result;
}