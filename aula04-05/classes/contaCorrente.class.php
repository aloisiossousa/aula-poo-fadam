<?php

class ContaCorrente extends Conta{

    public $limite; //Atributo dessa conta o Limite

    public function __construct($agencia, $codigo, $dataCriacao, $titular, $senha, $saldo, $cancelada, $limite) {
        
        parent::__construct($agencia, $codigo, $dataCriacao, $titular, $senha, $saldo, $cancelada);

        $this->limite = $limite;
    }

    function retirar($quantia)
    {
        //Imposto de movimentação financeira

        $cpmf = 0.05;

        if(($this->saldo + $this->limite) >= $quantia){
            parent::retirar($quantia);

            parent::retirar($quantia * $cpmf);
        }
        else{
            echo "Retirada não permitida...";
            return false;
        }

        return true;
    }
}

?>