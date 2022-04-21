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
    <script src="assets/app.js"></script>
    <title><?= $appName; ?></title>

</head>

<body>

    <header>
        <h1 class="title">ToDoList</h1>
    </header>
    
    <form>

        <div class="newTaskContainer">
            <input name="task" class="newTaskContainer__task" type="input" placeholder="Nova Tarefa">
            <button name= "insertTask" id="insertTask" class="newTaskContainer__identify" type="submit"> Incluir</button>
        </div>

    </form>
 

        <ul>
            <li>
                Teste
            </li>
        </ul>


</body>
</html>
