<?php

class Funcionario extends Empresa{

    public $nome;
    public $matricula;
    public $dataAdmissao;
    public $funcao;

    
    public function __construct($razaoSocial, $cnpj, $titular, $cargo,$nome, $matricula, $dataAdmissao, $funcao) {
    
        parent::__construct($razaoSocial, $cnpj, $titular, $cargo);

        $this->nome = $nome;
        $this->nome = $matricula;
        $this->nome = $dataAdmissao;
        $this->funcao = $funcao;

    }

    function trabalhar(){
        echo "Costurando";
    }
} 

?>