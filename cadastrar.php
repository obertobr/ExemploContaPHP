<html>
    <head>
        <title>Cadastrar</title>
    </head>
    <body>
        <h1>Cadastrar:</h1>
        <form action="funcoes/cadastro.php" method="POST">
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" type="text" required>
            <br><br>
            <label for="senha">Senha:</label>
            <input id="senha" name="senha" type="password" required>
            <br><br>
            <input type="submit" value="cadastrar">
        </form>
    </body>
</html>