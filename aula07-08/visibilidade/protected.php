<?php
//public
//private
//protected

class Pessoa{
    protected $nome = "Mateus";
    protected $idade = 28;

    public function showNome(){
        return $this->nome;

    }

    public function showIdade(){
        return $this->idade;
        
    }
}

class FilhaPessoa extends Pessoa{

    public function showFilhaNome()
    {
        return $this->nome;
    } 
    public function showFilhaIdade()
    {
        return $this->idade;
    } 
}

$pessoa = new Pessoa();
// $pessoa->nome = "Aloisio Silva";
// echo "{$pessoa->nome}";

//Acesso pelo método public da classe
// echo "{$pessoa->showNome()}";
// echo "{$pessoa->showIdade()}";



$filha = new FilhaPessoa();

echo "{$filha->showNome()}";
echo "{$filha->showFilhaIdade()}";

?>