<?php
//public
//private
//protected


class Pessoa{
    public $nome;
    public $idade;


    public function showNome(){
        return $this->nome;
        
    }
}

$pessoa = new Pessoa();

$pessoa->nome = "Aloisio";
$pessoa->idade = 42;
$pessoa->showNome();

echo "{$pessoa->nome} {$pessoa->idade} <br>";
echo "{$pessoa->showNome()}";

?>