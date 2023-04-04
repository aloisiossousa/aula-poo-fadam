<?php

class Produto{
    public $nome;
    public $preco;
    public $disponivel;

    function __construct($nome, $preco, $disponivel){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->disponivel = $disponivel;
    }
    

    public function detalhe(){
        echo $this->nome = "Moto E";
        echo $this->preco = "100";
       
    }
}

?>