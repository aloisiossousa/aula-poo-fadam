<?php
//public
//protected
//private

class Pessoa{
    public $nome;
    private $idade = 42;

    public function showNome(){
        return $this->nome;
        
    }

    public function showIdade(){
        return $this->idade;
    }
}

class FilhaPessoa extends Pessoa{

    public function showFilhaIdade()
    {
        return $this->showIdade();
    } 
}

$pessoa = new Pessoa();
$pessoa->nome = "Aloisio ";

echo "{$pessoa->showNome()}";

$filha = new FilhaPessoa();

echo "{$filha->showFilhaIdade()}";

?>