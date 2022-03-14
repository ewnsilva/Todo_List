<?php
    include_once("todo_list_conexao.php");

    $tarefa = $_POST['tarefa'];

    $sql = "insert into tarefas (descricao) values ('$tarefa')";
    $save = mysqli_query($conexao,$sql);
    $sql = "select * from tarefas";
    $tarefasRegistradas = mysqli_query($conexao,$sql);
    $consulta = mysqli_num_rows($tarefasRegistradas)


    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/todo_list.css">
    <title>TodoList</title>

</head>

<body>

    <header>
        <h1 class="title">TodoList</h1>
    </header>
    
    <form method ="post" action = "todo_list_processo.php">

        <div class="newTaskContainer">
            <input id="inputText" name="tarefa" class="newTaskContainer__task" type="text" placeholder="Nova Tarefa">
            <button id="identifyButton" class="newTaskContainer__identify"> Incluir</button>

        </div>
    </form>

    <form method="get" action="" class = "article">

        <div class = "lista">
            <?php
                while($exibirconsulta = mysqli_fetch_array($tarefasRegistradas)){

                    $concluida = $exibirconsulta[1];
                    $descricao = $exibirconsulta[2];

                    print "<article>";

                    print "$concluida";
                    print "$descricao";

                    print "</article>";
                }


                mysqli_close($conexao);
            ?>
        </div>

    </form>
</body>
</html>
