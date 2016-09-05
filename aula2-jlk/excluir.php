<?php

require_once './config/db.php';
$id = $_GET['id'];
$delet = "DELETE FROM tarefas WHERE id = $id";
$deletar = mysqli_query($conexao, $delet);
header("Location: index.php");
