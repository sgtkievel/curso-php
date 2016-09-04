<!DOCTYPE html>
<?php
$nome = 'Leandro';
$var = 56;
$var1 = 5.6;
$var2 = '5.6';
$var3 = true;
$var4 = array('João ', 'Leandro ', 'Kievel');

class Nome {
    
}

$var5 = new Nome;
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Aula 1 - Tipos</title>
    </head>
    <body>
        <?= $nome; ?><br>
        <?= gettype($var) ?><br>
        <?= gettype($var1) ?><br>
        <?= gettype($var2) ?><br>
        <?= gettype($var3) ?><br>
        <?= gettype($var4) ?><br>
        <?= gettype($var5) ?><br>
    </body>
</html>
