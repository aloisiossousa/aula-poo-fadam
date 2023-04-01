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
    public function showIdade(){
        return $this->idade;
    }
}

$pessoa = new Pessoa();

$pessoa->nome = "Aloisio";
$pessoa->idade = 43;
$pessoa->showNome();
$pessoa->showIdade();

echo "{$pessoa->nome} {$pessoa->idade} <br>";
echo "{$pessoa->showNome()} {$pessoa->showIdade()}";

?>