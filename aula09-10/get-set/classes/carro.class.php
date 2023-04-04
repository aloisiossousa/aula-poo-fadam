<?php
class Carro {
    private $marca;
    private $modelo;
    private $ano;
    private $cor;

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getCor() {
        return $this->cor;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setAno($ano) {
    $this->ano = $ano;
    
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }
}

?>

