<?php

require_once __DIR__ . '/../../configurations/connection.php';

function deleteTask($conn, int $id)
{
    $query = "DELETE FROM tasks WHERE id = '{$id}';";

    $statement = $conn->query($query);

    return $statement->execute([$task]);
}
