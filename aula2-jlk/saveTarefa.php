<?php
require_once ('./config/db.php');

$tarefa = $_POST['tarefa'];
$created = date('Y-m-d H:i:s');
$updated = date('Y-m-d H:i:s');

$inserir = "INSERT INTO tarefas(tarefa, created_at, updated_at) VALUES('$tarefa', '$created', '$updated')";
$insert = mysqli_query($conexao, $inserir);

header("Location: index.php");



