<?php
require_once ('./config/db.php');
$id = $_POST['id'];
$tarefa = $_POST['tarefa'];
$updated = date('Y-m-d H:i:s');

$altera = "UPDATE tarefas SET tarefa = '$tarefa', updated_at = '$updated' WHERE id = '$id' ";
$alterar = mysqli_query($conexao, $altera);

header("Location: index.php");




