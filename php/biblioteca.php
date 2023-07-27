<?php 


class biblioteca {
    private $cod_livro, $titulo, $escritor, $ano, $editora;

    public function getCod(){
        return $this->cod_livro;
    }
    public function setCod($cod){
        return $this->cod_livro = $cod;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        return $this->titulo = $titulo;
    }
    public function getEscritor(){
        return $this->escritor;
    }
    public function setEscritor($escritor){
        return $this->escritor = $escritor;
    }
    public function getAno(){
        return $this->ano;
    }
    public function setAno($ano){
        return $this->ano = $ano;
    }
    public function getEditora(){
        return $this->editora;
    }
    public function setEditora($editora){
        return $this->editora = $editora;
    }
}