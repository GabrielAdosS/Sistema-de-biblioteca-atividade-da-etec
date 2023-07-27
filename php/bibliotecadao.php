<?php

include 'conexao.php';

class bibliotecadao {
    /**CRUD - Create Read Update Delete */
    /**Create */
    public function cadastrarLivro(Biblioteca $c){
        $sql = 'INSERT INTO livro(titulo, escritor, ano, editora) VALUES (?, ?, ?, ?)';

        $banco = new Conexao();
        $con = $banco->getConexao();

        $valores = $con->prepare($sql);

        $valores->bindValue(1, $c->getTitulo());
        $valores->bindValue(2, $c->getEscritor());
        $valores->bindValue(3, $c->getAno());
        $valores->bindValue(4, $c->getEditora());

        $result = $valores->execute();

        echo '<title>Cadastramento</title>';

        if ($result) {
            echo '<header>
            <h2>📖Biblioteca Online📖</h2>
            <form action="deslogar.php" method="post" id="logout">
            <a href="principal.php" id="home">Home</a>
        <button type="submit" id="deslogar">deslogar</button>
    </form>
            </header>';
            echo '<div class="container">';
            echo '<div class="centro">';
            echo '<h3>Livro cadastrado com sucesso</h3>';
            echo '</div>';
            echo '<a href="principal.php" id="voltar">Voltar</a>';
            echo '</div>';
            echo '<footer>
                <p>Direitos reservados &copy; 2023</p>
                </footer>';
        }else{
            echo '<header>
            <h2>📖Biblioteca Online📖</h2>
            <form action="deslogar.php" method="post" id="logout">
            <a href="principal.php" id="home">Home</a>
        <button type="submit" id="deslogar">deslogar</button>
    </form>
            </header>';
            echo '<div class="container">';
            echo '<div class="centro">';
            echo '<h3 class="dao">Erro ao cadastrar o livro</h3>';
            echo '</div>';
            echo '<a href="principal.php" id="voltar">Voltar</a>';
            echo '</div>';
            echo '<footer>
                <p>Direitos reservados &copy; 2023</p>
                </footer>';
        }
        
    }

    /**Read */
    public function consultarLivro(){
        $sql = 'SELECT * FROM livro';

        $banco = new Conexao();
        $con = $banco->getConexao();
        $valores = $con->prepare($sql);
        $valores->execute();

        if($valores->rowCount()>0){
            $result = $valores->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }

    }
    public function consultarPorCodigo(biblioteca $c){
        $sql = 'SELECT * FROM livro WHERE cod_livro=?';

        $banco = new conexao();
        $con = $banco->getConexao();

        $valores = $con->prepare($sql);
        $valores->bindValue(1, $c->getCod());

        $result = $valores->execute();

        if($result){
            $result = $valores->fetchAll(\PDO::FETCH_ASSOC);
            echo '<header>
            <h2>📖Biblioteca Online📖</h2>
            <form action="deslogar.php" method="post" id="logout">
            <a href="principal.php" id="home">Home</a>
        <button type="submit" id="deslogar">deslogar</button>
    </form>
            </header>';
            echo '<div class="container">';
            echo '<h3 class="front">Livro Encontrado</h3>';
            echo '<div class="consulta">';
            echo '<table>';
            echo '<tr><th>Código do livro</th><th>Título do livro</th><th>Escritor ou EScritora</th><th>Ano de publicação</th><th>Editora</th></tr>';
            foreach($result as $livro){
                echo '<tr>';
                echo '<td>'. $livro['cod_livro']. '</td>';
                echo '<td>'. $livro['titulo']. '</td>';
                echo '<td>'. $livro['escritor']. '</td>';
                echo '<td>'. $livro['ano']. '</td>';
                echo '<td>'. $livro['editora']. '</td>';
                echo '</tr>';
            }
            echo '</table>';
            echo '</div>';
            echo '<a href="principal.php" id="voltar">Voltar</a>';
            echo '</div>';
            echo '<footer>
                <p>Direitos reservados &copy; 2023</p>
                </footer>';
        }
    }
    /**Update */
    public function atualizarLivro(Biblioteca $c){
        $sql = 'UPDATE livro SET titulo=?, escritor=?, ano=?, editora=? WHERE cod_livro=?';

        $banco = new Conexao();
        $con = $banco->getConexao();
        $valores = $con->prepare($sql);

        $valores->bindValue(1, $c->getTitulo());
        $valores->bindValue(2, $c->getEscritor());
        $valores->bindValue(3, $c->getAno());
        $valores->bindValue(4, $c->getEditora());
        $valores->bindValue(5, $c->getCod());

        $result = $valores->execute();

        echo '<title>Atualizando livro</title>';

        if ($result) {
            echo '<header>
            <h2>📖Biblioteca Online📖</h2>
            <form action="deslogar.php" method="post" id="logout">
            <a href="principal.php" id="home">Home</a>
        <button type="submit" id="deslogar">deslogar</button>
    </form>
            </header>';
            echo '<div class="container">';
            echo '<div class="centro">';
            echo '<h3>Livro atualizado com sucesso</h3>';
            echo '</div>';
            echo '<a href="principal.php" id="voltar">Voltar</a>';
            echo '</div>';
            echo '<footer>
                <p>Direitos reservados &copy; 2023</p>
                </footer>';
        }else{
            echo '<header>
            <h2>📖Biblioteca Online📖</h2>
            <form action="deslogar.php" method="post" id="logout">
            <a href="principal.php" id="home">Home</a>
        <button type="submit" id="deslogar">deslogar</button>
    </form>
            </header>';
            echo '<div class="container">';
            echo '<div class="centro">';
            echo '<h3 class="dao">Erro ao atualizar o livro</h3>';
            echo '</div>';
            echo '<a href="principal.php" id="voltar">Voltar</a>';
            echo '</div>';
            echo '<footer>
                <p>Direitos reservados &copy; 2023</p>
                </footer>';
        }
    }

    /**Delete */
    public function deletarLivro(Biblioteca $c){
        $sql = 'DELETE FROM livro WHERE cod_livro=?';

        $banco = new Conexao();
        $con = $banco->getConexao();
        $valores = $con->prepare($sql);

        $valores->bindValue(1, $c->getCod());

        $result = $valores->execute();

        echo '<title>Apagando livro</title>';

        if ($result) {
            echo '<header>
            <h2>📖Biblioteca Online📖</h2>
            <form action="deslogar.php" method="post" id="logout">
            <a href="principal.php" id="home">Home</a>
        <button type="submit" id="deslogar">deslogar</button>
    </form>
            </header>';
            echo '<div class="container">';
            echo '<div class="centro">';
            echo '<h3>Livro apagado com sucesso</h3>';
            echo '</div>';
            echo '<a href="principal.php" id="voltar">Voltar</a>';
            echo '</div>';
            echo '<footer>
                <p>Direitos reservados &copy; 2023</p>
                </footer>';
        }else{
            echo '<header>
            <h2>📖Biblioteca Online📖</h2>
            <form action="deslogar.php" method="post" id="logout">
            <a href="principal.php" id="home">Home</a>
        <button type="submit" id="deslogar">deslogar</button>
    </form>
            </header>';
            echo '<div class="container">';
            echo '<div class="container">';
            echo '<div class="centro">';
            echo '<h3 class="dao">Erro ao apagar o livro</h3>';
            echo '</div>';
            echo '<a href="principal.php" id="voltar">Voltar</a>';
            echo '</div>';
            echo '<footer>
                <p>Direitos reservados &copy; 2023</p>
                </footer>';
        }
    }
}