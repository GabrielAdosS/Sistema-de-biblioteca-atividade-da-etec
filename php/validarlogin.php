<?php 

session_start();

include 'conexao.php';

$usuario = filter_input(INPUT_POST, 'usuario');
$senha = filter_input(INPUT_POST, 'senha');

$sql = 'SELECT * FROM  usuario WHERE usuario=? AND senha=?';
$banco = new Conexao();
$conEstoque = $banco->getConexao();

$valores = $conEstoque->prepare($sql);
$valores->bindValue(1, $usuario);
$valores->bindValue(2, $senha);
$valores->execute();

if($valores->rowCount()>0){
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
    header('Location: principal.php');
}else {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: ../index.php');
}

?>