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
    <title><?= $appName; ?></title>
    <link rel="stylesheet" href="/assets/app.css">
    

</head>

<body>

    <header>
        <h1 class="title">ToDoList</h1>
    </header>

    
    <form id= "submitForm">
        
            <input name="task" id= "submit" class="newTaskContainer__task" type="text" placeholder="Nova Tarefa" required>
            <!-- <input type="submit" value="Inserir" /> -->
            <button name= "insertTask" id="insertTask" class="newTaskContainer__identify"> Incluir</button>
       
    </form>
    


        <ul>
            <li>
                Teste
            </li>
        </ul>

    <script src="/assets/app.js"></script>
</body>
</html>
