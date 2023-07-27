<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Online</title>
    <?php include './estilo/estilo.php'; ?>
    <link rel="shortcut icon" href="./estilo/favicon-livro.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
        <h3 class="front">Sistema de gerenciamento de biblioteca</h3>
        <p id="text">Bem-vindo ao sistema de gerenciamento de biblioteca, onde você poderá cadastrar, atualizar, excluir e consultar os livros registrados em nossa coleção, permitindo uma gestão eficiente e organizada de nossos recursos literários. Por favor realize o login</p>
        <div class="centro">
            <form action="./php/cadastrarLogin.php" method="post" id="cadastrar">
                <h3>Cadastrar usuário</h3><br>
                <label>Usuário: </label>
                <input type="text" name="usuario"><br><br>
                <label>Senha: </label>
                <input type="password" name="senha"><br><br>
                <button type="submit" class="botao">Cadastrar</button>
            </form>
            <form action="./php/validarlogin.php" method="post">
                <h3>Logar</h3><br>
                <label>Usuário: </label>
                <input type="text" name="usuario"><br><br>
                <label>Senha: </label>
                <input type="password" name="senha"><br><br>
                <button type="submit" class="botao">Logar</button>
            </form>
        </div>
    </div>
    <footer>
        <p>Direitos reservados &copy; 2023</p>
    </footer>
</body>
</html>