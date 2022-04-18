<?php

function insertTask($connection, $task)
{
    $query =    "INSERT INTO task
                (description, created_at)
                VALUES
                ('{$task}', NOW())";

    $statemente = $connection->prepare($query);

    return $statement->execute($task);

}