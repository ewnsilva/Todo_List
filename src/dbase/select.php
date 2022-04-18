<?php

function listALLTasks($connection)
{
    $query = "SELECT * FROM tasks;";

    $statement = $connection->query($query);

    $result = [];
    foreach($statement as $task) {
        $result[] = $task;
    }

    return $result;
}