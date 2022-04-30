<?php

require_once __DIR__ . '/../../configurations/connection.php';

function listAllTasks($connection)
{
    $query = "SELECT * FROM tasks";

    $statement = $connection->query($query);

    $result = [];
    foreach($statement as $task) {
        $result[] = $task;
    }

    return $result;
}
