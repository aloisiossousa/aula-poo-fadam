<?php

class Conta{
    public $agencia;
    public $codigo;
    public $dataCriacao;
    public $titular;
    public $senha;
    public $saldo;
    public $cancelada;

    public function __construct($agencia, $codigo, $dataCriacao, $titular, $senha, $saldo, $cancelada){
        $this->agencia = $agencia;
        $this->codigo = $codigo;
        $this->dataCriacao = $dataCriacao;
        $this->titular = $titular;
        $this->senha =$senha; 
        $this->saldo = $saldo;
        $this->cancelada = $cancelada;
    }

    public function retirar($quantia){
        if($quantia > 0){
            $this->saldo -= $quantia;
        }
    }
    public function depositar($quantia){
        if($quantia > 0){
            $this->saldo += $quantia;
        }
    }

    public function obterSaldo($quantia){
           return $this->saldo;
    }
    
}


?>