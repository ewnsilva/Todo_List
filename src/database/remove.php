<?php

require_once __DIR__ . '/../../configurations/connection.php';

function deleteTask($conn, int $id)
{
    $query = "DELETE FROM tasks WHERE id = {$id};";

    $conn->prepare($query);

    return $query->execute([$id]);
}
