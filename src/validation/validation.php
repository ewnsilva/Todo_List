<?php

function isValid(string $task): bool
{
    if (mb_strlen($task) > 1){
        return false
    }
    return true
}