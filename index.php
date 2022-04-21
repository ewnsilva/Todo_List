<?php

require_once __DIR__ . '/configurations/bootstrap.php';

$appName = $_ENV['APP_NAME'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/app.css">
    <title><?= $appName; ?></title>

</head>

<body>

    <header>
        <h1 class="title">ToDoList</h1>
    </header>
    
    <form method ="post" action = "/src/app/create.php">

        <div class="newTaskContainer">
            <input name="task" class="newTaskContainer__task" type="text" placeholder="Nova Tarefa">
            <button id="insertTask" type="submit" class="newTaskContainer__identify"> Incluir</button>
        </div>
        
    </form>

    <form method="get" action="" class = "article">

        <div class = "list">
            
        </div>

    </form>
</body>
</html>
