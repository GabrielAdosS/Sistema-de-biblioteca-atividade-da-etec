<?php

session_start();

if ((!isset($_SESSION['usuario']) == true) && (!isset($_SESSION['senha']) == true)) {
    header('Location: ../index.php');
}

$usuario = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Online</title>
    <?php include '../estilo/estilo.php'; ?>
    <?php include '../estilo/icon.php'; ?>
</head>
<body>
    <header>
        <form action="bibliotecacontroller.php" method="post">
            <h2>📖Biblioteca Online📖</h2>
            <a href="#" id="home" data-="">Home</a>
            <input type="submit" name="acao" id="botao" value="Consultar Livros">
        </form>
        <form action="deslogar.php" method="post" id="logout">
            <button type="submit" id="deslogar">deslogar</button>
        </form>
    </header>
    <div class="container">
        <h3 class="front">Sistema de gerenciamento de biblioteca</h3>
        <p id="text">Bem-vindo <?php echo $usuario; ?>, ao sistema de gerenciamento de biblioteca, onde você poderá cadastrar, atualizar, excluir e consultar os livros registrados em nossa coleção, permitindo uma gestão eficiente e organizada de nossos recursos literários.</p>
        <div class="centro">
            <form action="bibliotecacontroller.php" method="post">
                <label>Código do livro: </label>
                <input type="text" name="cod" id="cod">
                <label id="edit">Editora: </label>
                <input type="text" name="editora" id="editora"><br><br>
                <label id="autor2">Autor(a): </label>
                <input type="text" name="escritor" id="autor">
                <label>Nome do livro: </label>
                <input type="text" name="titulo" id="titulo"><br><br>
                <label>Ano de Publicação: </label>
                <input type="text" name="ano" id="ano"><br><br>
                <label id="escolha"> Escolha uma função:</label>
                <select id="frutas" name="acao">
                    <option class="botao" value="Cadastrar">Cadastrar</option>
                    <option class="botao" value="Atualizar">Atualizar</option>
                    <option class="botao" value="Deletar">Deletar</option>
                    <option class="botao" value="Consulta por Codigo">Consulta por Codigo</option>
                </select>
                <button type="submit" class="botao" onclick=(alert)>Enviar</button>
            </form>
        </div>
    </div>
    <footer>
        <p>Direitos reservados &copy; 2023</p>
    </footer>
</body>
</html>