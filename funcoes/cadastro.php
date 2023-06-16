<?php
include_once 'banco.php';
$bd = conexao();

$nome = $_POST["nome"];
$senha = hash("sha256",$_POST["senha"]);

$sql = "INSERT INTO `usuario` (`id`, `nome`, `senha`) VALUES (NULL, '$nome', '$senha')";

$result = $bd->exec($sql);

header('Location: ../');