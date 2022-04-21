<?php

require_once __DIR__ . '/../../configurations/bootstrap.php';

function insertTask($connection, $task)
{
    $query =    "INSERT INTO task (description, created_at)
                VALUES ('{$task}', NOW())";

    $statement = $connection->prepare($query);

    return $statement->execute($task);

}

