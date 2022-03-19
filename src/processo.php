<?php
    include_once("todo_list_conexao.php");

    $tarefa = $_POST['tarefa'];

    $sql = "insert into tarefas (descricao) values ('$tarefa')";
    $save = mysqli_query($conexao,$sql);
    $sql = "select * from tarefas";
    $tarefasRegistradas = mysqli_query($conexao,$sql);
    $consulta = mysqli_num_rows($tarefasRegistradas)


    