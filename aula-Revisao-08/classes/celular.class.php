<?php

class Celular extends Produto{

    public $marca;
    public $modelo;
    public $tamanhoTela;

    function __construct($nome, $preco, $disponivel, $marca, $modelo, $tamanhoTela){
        parent::__construct($nome, $preco, $disponivel);

        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->tamanhoTela = $tamanhoTela;

    }


    public function detalhe(){

        echo $this->nome = "Moto E";
        echo $this->preco = "500";

    }
}

?>