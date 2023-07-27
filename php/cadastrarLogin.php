<?php 

session_start();

include 'conexao.php';

$usuario = filter_input(INPUT_POST, 'usuario');
$senha = filter_input(INPUT_POST, 'senha');

$sql = 'INSERT INTO usuario(usuario, senha) VALUES (?, ?)';

        $banco = new Conexao();
        $con = $banco->getConexao();

        $valores = $con->prepare($sql);

        $valores->bindValue(1, $usuario);
        $valores->bindValue(2, $senha);

        $result = $valores->execute();

        if ($result) {
            header('Location: ../index.php');
        }

?>