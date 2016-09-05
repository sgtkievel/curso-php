<?php 
    require_once './config/db.php';
    
    $id = $_GET['id'];
    $lista = "SELECT * FROM tarefas WHERE id = $id";
    $editar = mysqli_query($conexao, $lista);
    $result = mysqli_fetch_array($editar);
    ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Tarefa: <?= $result['tarefa']; ?></title>
        <link href="css/estilo.css" rel="stylesheet"/>
    </head>
    <body>
        <h1>Editar: <?= $result['tarefa']; ?></h1>
        <div class="formulario">
            <form class="formTarefa" action="updateTarefa.php" method="post">
                <label for="tarefa">Tarefa</label>
                <input type="hidden" name="id" value="<?= $result['id']; ?>">
                <input type="text" id="tarefa" name="tarefa" value="<?= $result['tarefa']; ?>">
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>
