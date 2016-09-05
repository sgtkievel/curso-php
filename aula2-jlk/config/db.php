<?php
$usuario = 'root';
$senha = '';
$host = 'localhost';
$banco = 'cursophp';

$conexao = mysqli_connect($host, $usuario, $senha) or die(mysql_error());

$selectBanco = mysqli_select_db($conexao, $banco) or die('Erro fatal');

