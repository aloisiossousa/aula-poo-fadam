<?php
class Animal {
    private $nome;
    private $especie;
    private $idade;

    public function getNome() {
        return $this->nome;
    }

    public function getEspecie() {
        return $this->especie;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEspecie($especie) {
        $this->especie = $especie;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }
}

?>
