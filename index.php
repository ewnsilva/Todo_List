<?php

require_once __DIR__ . '/configurations/bootstrap.php';
require_once __DIR__. '/src/app/view.php';

$appName = $_ENV['APP_NAME'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName; ?></title>
    <link rel="stylesheet" href="/assets/app.css">
    <script src="/assets/app.js"></script>
    
</head>

<body>
    <header>
        <h1 class="title">ToDoList</h1>
    </header>

    <form method="post" action="/src/app/create.php">
            <input name="task" class="newTaskContainer__task" type="text" placeholder="Nova Tarefa" required>
            <button name="insertTask" class="newTaskContainer__identify"> Incluir</button>
    </form>
    
    <div>
        <ul>
            
            <li <? echo showId($list);?>>
            <? echo showValue($list);?>
            </li>
            
        </ul>
    </div>

</body>
</html>
