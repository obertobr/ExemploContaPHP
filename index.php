<html>
    <head>
        <title>Pagina inicial</title>
    </head>
    <body>
        <?php
            session_start();
            if(isset($_SESSION["nome"])){
            ?>
            <h1>Você esta logado com o usuario: <?=$_SESSION["nome"]?></h1>
            <?php
            } else {
            ?>
            <h1>Você não esta logado</h1>
            <?php
            }
        ?>
        <a href="login.php">Logar</a>
        <span> / </span>
        <a href="cadastrar.php">Cadastrar</a>
        <span> / </span>
        <a href="funcoes/deslogar.php">deslogar</a>
    </body>
</html>