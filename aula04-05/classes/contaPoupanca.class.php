<?php

class ContaPoupanca extends Conta{
    
    public $aniversario;

    //Construtor é da classe Conta Poupança
    public function __construct($agencia, $codigo, $dataCriacao, $titular, $senha, $saldo, $cancelada, $aniversario) {

        //Construtor da classe Conta + prorpiedade da poupança
        parent::__construct($agencia, $codigo, $dataCriacao, $titular, $senha, $saldo, $cancelada);

        $this->aniversario = $aniversario;
    
    }
    
    function retirar($quantia){
        if($this->saldo >= $quantia){
            parent::retirar($quantia);
        }
        else{
            echo "Retirada não autorizada.";

            return false;
        }
        
    }
}

?>