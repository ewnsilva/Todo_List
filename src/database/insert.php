<?php

require_once __DIR__ . '/../../configurations/connection.php';

function insertTask($conn, $task)
{
    $query = "INSERT INTO tasks (description, created_at) 
    VALUES (?, NOW())";

    $statement = $conn->prepare($query);

    return $statement->execute([$task]);
}
