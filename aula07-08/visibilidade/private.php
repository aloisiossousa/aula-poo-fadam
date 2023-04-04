<?php
//public
//protected
//private

class Pessoa{
    private $nome = "Aloisio Sousa teste ";//Atributo ou variáveis
    private $idade = 43;

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
        return $this->showNome();
    } 

    public function showFilhaIdade()
    {
        return $this->showIdade();
    } 

}

$pessoa = new Pessoa();
//$pessoa->nome = "Aloisio Sousa ";// acessando se atributo for public

echo "{$pessoa->showNome()}";

echo "{$pessoa->showIdade()}";

// $filha = new FilhaPessoa();

// echo "{$filha->showFilhaNome()}";
// echo "{$filha->showFilhaIdade()}";

?>