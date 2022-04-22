<?php

function isValid($task){;
    if (mb_strlen($task) > 1){
        return false;
    }
    return true;
}
