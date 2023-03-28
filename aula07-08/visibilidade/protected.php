<?php
//public
//private
//protected

class Pessoa{
    public $nome;
    protected $idade = 42;

    public function showNome(){
        return $this->nome;
        
    }
}

class FilhaPessoa extends Pessoa{

    public function showFilhaIdade()
    {
        return $this->idade;
    } 
}

$pessoa = new Pessoa();
$pessoa->nome = "Aloisio ";

echo "{$pessoa->showNome()}";

$filha = new FilhaPessoa();

echo "{$filha->showFilhaIdade()}";

?>