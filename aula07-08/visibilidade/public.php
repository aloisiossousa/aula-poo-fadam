<?php
//public
//private
//protected


class Pessoa{
    public $nome = "Aloisio Silva";
    public $idade;

    public function showNome(){
        return $this->nome;
        
    }
    public function showIdade(){
        return $this->idade;
    }
}

$pessoa = new Pessoa();

$pessoa->nome = "Aloisio Sousa";
$pessoa->idade = 43;
$pessoa->showNome();
$pessoa->showIdade();

echo "Acesso os atributos, {$pessoa->nome} {$pessoa->idade} <br>";
echo "Acesso aos métodos, {$pessoa->showNome()} {$pessoa->showIdade()}";

?>