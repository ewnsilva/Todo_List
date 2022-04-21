<?php

function getConnection()
{
    $server    = $_SERVER['DATABASE_HOST'];
    $dbname    = $_SERVER['DATABASE_NAME'];
    $username  = $_SERVER['DATABASE_USER'];
    $password  = $_SERVER['DATABASE_PASSWORD'];

    $connection = new PDO (
        'mysql:host='.$server.';dbname='.$dbname, $username, $password);
    }  
      