<?php
include_once 'banco.php';
$bd = conexao();

$nome = $_POST["nome"];
$senha = hash("sha256",$_POST["senha"]);

$sql = "SELECT * FROM usuario WHERE nome = '$nome' AND senha = '$senha'";

$result = $bd->query($sql);

if($result->rowCount() > 0){
    $linha = $result->fetch();
    session_start();

    $_SESSION["nome"] = $linha["nome"];
    $_SESSION["id"] = $linha["id"];

    header('Location: ../');
    exit;
}

header('Location: ../login.php');