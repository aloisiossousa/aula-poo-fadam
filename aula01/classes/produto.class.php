<?php

class Produto{
    public $codigo;
    public $descricao;
    public $preco;
    public $quantidade;

    
    function imprimirEtiqueta(){

        echo 'Código:' . $this->codigo . "<br>";
        print 'Descrição: '. $this->descricao . "<br>";
    }
}

?>