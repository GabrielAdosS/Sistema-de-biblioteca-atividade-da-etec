<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../estilo/estilo.php'; ?>
    <?php include '../estilo/icon.php'; ?>
    <title>Biblioteca Online</title>
</head>
<?php

include 'biblioteca.php';
require_once 'bibliotecadao.php';

$cod = filter_input(INPUT_POST, 'cod');
$titulo = filter_input(INPUT_POST, 'titulo');
$escritor = filter_input(INPUT_POST, 'escritor');
$ano = filter_input(INPUT_POST, 'ano');
$editora = filter_input(INPUT_POST, 'editora');
$acao = filter_input(INPUT_POST, 'acao');

$biblioteca = new biblioteca();
$bibliotecadao = new bibliotecadao();

$biblioteca->setCod($cod);
$biblioteca->setTitulo($titulo);
$biblioteca->setEscritor($escritor);
$biblioteca->setAno($ano);
$biblioteca->setEditora($editora);

if ($acao == 'Cadastrar') {
    $bibliotecadao->cadastrarLivro($biblioteca);

}elseif ($acao == 'Consultar Livros') {
    $bibliotecadao->consultarLivro();
    if ($bibliotecadao->consultarLivro()) {

        echo '<header>
        <h2>📖Biblioteca Online📖</h2>
        <form action="deslogar.php" method="post" id="logout">
        <a href="principal.php" id="home">Home</a>
    <button type="submit" id="deslogar">deslogar</button>
</form>
        </header>';
        echo '<div class="container">';
        echo '<h3 class="front">Livros cadastrados</h3>';
        echo '<div class="consulta">';
        echo '<table>';
        echo '<tr><th>Código do livro</th><th>Título do livro</th><th>Escritor ou EScritora</th><th>Ano de publicação</th><th>Editora</th></tr>';
        foreach($bibliotecadao->consultarLivro() as $result){
            echo '<tr>';
            echo '<td>'. $result['cod_livro']. '</td>';
            echo '<td>'. $result['titulo']. '</td>';
            echo '<td>'. $result['escritor']. '</td>';
            echo '<td>'. $result['ano']. '</td>';
            echo '<td>'. $result['editora']. '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
        echo '<a href="principal.php" id="voltar">Voltar</a>';
        echo '</div>';
        echo '<footer>
            <p>Direitos reservados &copy; 2023</p>
            </footer>';

    }else{
        echo '<header>
        <h2>📖Biblioteca Online📖</h2>
        <a href="principal.php" id="home">Home</a>
        </header>';
        echo '<div class="container">';
        echo '<h3 class="front">Nenhum livro cadastrado</h3>';
        echo '<div class="consulta">';
        echo '<table>';
        echo '<tr><th>Código do livro</th><th>Título do livro</th><th>Autor ou Autora</th><th>Ano de publicação</th><th>Editora</th></tr>';
        echo '</table>';
        echo '</div>';
        echo '<a href="principal.php" id="voltar">Voltar</a>';
        echo '</div>';
        echo '<footer>
            <p>Direitos reservados &copy; 2023</p>
            </footer>';
    }
}elseif($acao == 'Atualizar'){
    $bibliotecadao->atualizarLivro($biblioteca);

}elseif ($acao == 'Deletar') {
    $bibliotecadao->deletarLivro($biblioteca);

}elseif ($acao == 'Consulta por Codigo'){
    $bibliotecadao->consultarPorCodigo($biblioteca);
}
 ?>