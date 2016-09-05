<?php 
    require_once './config/db.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Lista de Tarefas</title>
        <link href="css/estilo.css" rel="stylesheet"/>
    </head>
    <body>
        <h1>Lista de Tarefas: Leandro</h1>
        <div class="formulario">
            <form class="formTarefa" action="saveTarefa.php" method="post">
                <label for="tarefa">Tarefa</label>
                <input type="text" id="tarefa" name="tarefa">
                <input type="submit" value="Enviar">
            </form>
        </div>
        <div class="tarefas">
            <ul>
                <?php 
                    $query = mysqli_query($conexao, "SELECT * FROM tarefas");
                    while ($row = mysqli_fetch_array($query, MYSQLI_NUM)){
                ?>
                    <li>
                    <span> <?= $row[1]; ?></span>
                    <a href="editar.php?id=<?= $row[0] ?>" class="butao btn-success">Editar</a>
                    <a href="excluir.php?id=<?= $row[0] ?>" class="butao btn-excluir">Remover</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </body>
</html>
