<?php

include_once 'classes/pessoa.class.php';
include_once 'classes/conta.class.php';
//Criação dos Objeto
$cliente1 = new Pessoa;
$cliente2 = new Pessoa;
$cliente = new Conta;
$clientes = new Conta;

//Valores dos Atributos
$cliente1->codigo = 3003;
$cliente1->nome = "Pedro Igor";
$cliente1->altura = 1.60;
$cliente1->idade = 25;
$cliente1->nascimento = "15/04/1970";
$cliente1->escolaridade = "Superior completo";
$cliente1->formar("Cientista de dados");

//Valores Cliente2
$cliente2->nome = "Mateus de Sousa";

$cliente->depositar(100);
$clientes->depositar(1000);

//Valores do Atributos
$cliente->titular = $cliente1;
$clientes->titular = $cliente2;

//Impresso

echo "{$clientes->titular->nome}<br>";
$cliente->depositar($quantia);
echo "Saldo da conta é R$ {$clientes->obterSaldo($quantia)}";

?>